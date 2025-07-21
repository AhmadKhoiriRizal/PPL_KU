<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class ManajementAkunController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => ['required', Rule::in(['admin', 'user'])],
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Admin baru berhasil dibuat.');
    }


    // Update user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'role' => 'required|in:admin,user',
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])],
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Akun berhasil diperbarui.');
    }

    // Delete user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Cek jika user yang akan dihapus adalah admin
        if ($user->role === 'admin') {
            return redirect()->back()->with('error', 'Akun dengan role admin tidak dapat dihapus.');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Akun berhasil dihapus.');
    }

// Profil Admin
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email,' . Auth::id(),
            'role' => ['required', Rule::in(['admin', 'user'])],
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])],
        ]);

        $user = Auth::user();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'confirmed', 'min:8']
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
        }

        $user->password = Hash::make($request->new_password);
        // $user->two_factor_enabled = $request->has('two_factor');
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui.');
    }

    // kontak kami
    public function sendEmail(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'required|string',
    ]);

    Mail::raw("
        Nama: {$data['name']}\n
        Email: {$data['email']}\n
        Telepon: {$data['phone']}\n\n
        Pesan:\n{$data['message']}
    ", function ($message) use ($data) {
        $message->to('sabharamayong@gmail.com')
                ->subject('Pesan dari Form Kontak Website');
    });

    return back()->with('success', 'Pesan berhasil dikirim!');
}

}
