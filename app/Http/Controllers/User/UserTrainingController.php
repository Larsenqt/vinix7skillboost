<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserTrainingController extends Controller
{
    public function index(User $user)
    {
        // Cegah user lain mengakses halaman user lain
        if (Auth::id() !== $user->id) {
            abort(403, 'Anda tidak memiliki akses.');
        }

        // Ambil semua training
        $trainings = Training::with('category')->get();

        return view('user.training.index', compact('user', 'trainings'));
    }

    public function show(User $user, Training $training)
    {
        if (Auth::id() !== $user->id) {
            abort(403, 'Anda tidak memiliki akses.');
        }

        // Cek apakah user punya order pada training ini
        $order = $training->orders()
            ->where('user_id', $user->id)
            ->first();

        return view('user.training.show', compact('user', 'training', 'order'));
    }

    public function downloadModule(User $user, Training $training)
    {
        // Cek akses user
        if (Auth::id() !== $user->id) {
            abort(403, 'Anda tidak memiliki akses.');
        }

        // Cek keberadaan file
        if (!$training->module_file || !Storage::disk('public')->exists($training->module_file)) {
            abort(404, 'File modul tidak ditemukan.');
        }

        return response()->download(storage_path('app/public/' . $training->module_file));
    }
}
