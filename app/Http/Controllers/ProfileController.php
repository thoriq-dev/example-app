<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User; // Pastikan Anda mengimpor model User

class ProfileController extends Controller
{
    public function edit($id): View
    {
        dd($id); // Ini akan menghentikan eksekusi dan menampilkan ID

        $user = User::findOrFail($id);
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit', ['profile' => $user->id])->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
