<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    /**
     * Menampilkan semua order milik user.
     */
    public function index(User $user)
    {
        // Cegah user lain mengakses halaman user lain
        if (Auth::id() !== $user->id) {
            abort(403, 'Akses ditolak');
        }

        // Ambil semua order milik user
        $orders = Order::with('training')
            ->where('user_id', $user->id)
            ->get();

        return view('user.order.index', compact('user', 'orders'));
    }

    /**
     * Proses user melakukan order training.
     */
    public function store(User $user, Training $training)
    {
        if (Auth::id() !== $user->id) {
            abort(403, 'Akses ditolak');
        }

        // Cek apakah user sudah pernah order training ini
        $existing = Order::where('user_id', $user->id)
            ->where('training_id', $training->id)
            ->first();

        if ($existing) {
            return redirect()
                ->route('user.order.show', [$user->id, $existing->id])
                ->with('warning', 'Anda sudah memesan training ini.');
        }

        // Buat order baru
        $order = Order::create([
            'user_id' => $user->id,
            'training_id' => $training->id,
            'payment_proof' => '',
            'status' => 'pending',
        ]);

        return redirect()
            ->route('user.order.show', [$user->id, $order->id])
            ->with('success', 'Pemesanan berhasil dibuat.');
    }


    public function uploadPayment(User $user, Order $order)
    {
        if (Auth::id() !== $user->id || $order->user_id !== $user->id) {
            abort(403, 'Akses ditolak');
        }

        request()->validate([
            'payment_proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan file agar path konsisten seperti Filament
        $path = request()
            ->file('payment_proof')
            ->storePublicly('payment_proofs', 'public');

        // Buang prefix "public/" agar hasilnya: payment_proofs/namafile.jpg
        $path = str_replace('public/', '', $path);

        // Update
        $order->update([
            'payment_proof' => $path,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('user.order.show', [$user->id, $order->id])
            ->with('success', 'Bukti pembayaran berhasil diupload.');
    }

    public function show(User $user, Order $order)
    {
        // Cegah akses user lain
        if (Auth::id() !== $user->id || $order->user_id !== $user->id) {
            abort(403, 'Akses ditolak');
        }

        return view('user.order.show', compact('user', 'order'));
    }
}
