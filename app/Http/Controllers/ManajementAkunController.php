<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
}
