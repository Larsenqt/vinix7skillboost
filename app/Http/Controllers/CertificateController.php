<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function download(User $user, Certificate $certificate)
    {
        if (Auth::id() !== $user->id) abort(403);
        if ($certificate->order->user_id !== $user->id) abort(403);

        // Cek apakah laporan sudah approved
        $report = $certificate->order->training->reports()
            ->where('user_id', $user->id)
            ->where('status', 'approved')
            ->first();

        if (!$report) {
            return back()->with('error', 'Laporan belum di-approve.');
        }

        return Storage::disk('public')->download($certificate->certificate_file);
    }
}
