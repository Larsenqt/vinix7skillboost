<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(User $user)
    {
        if (Auth::id() !== $user->id) abort(403);

        $reports = Report::where('user_id', $user->id)->get();

        return view('laporan.index', compact('user', 'reports'));
    }

    public function create(User $user)
    {
        if (Auth::id() !== $user->id) abort(403);

        $trainings = Training::all();

        return view('laporan.create', compact('user', 'trainings'));
    }

    public function store(Request $request, User $user)
    {
        if (Auth::id() !== $user->id) abort(403);

        // Validasi upload file
        $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'laporan' => 'required|mimes:pdf,doc,docx,zip|max:4096',
        ]);

        // Simpan file ke storage/app/public/laporan_files
        $laporanPath = $request->file('laporan')->store('laporan_files', 'public');

        // Simpan data laporan ke database
        Report::create([
            'user_id' => $user->id,
            'training_id' => $request->training_id,
            'laporan' => $laporanPath,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('user.laporan.index', $user->id)
            ->with('success', 'Laporan berhasil dikirim dan menunggu review.');
    }

    public function show(User $user, Report $report)
    {
        if ($report->user_id !== $user->id) abort(403);

        return view('laporan.show', compact('user', 'report'));
    }
}
