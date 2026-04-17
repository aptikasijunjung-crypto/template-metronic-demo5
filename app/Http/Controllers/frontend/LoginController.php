<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Crypt, DB, Http};
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $user = Socialite::driver('google')->user();
        session(['token' => Crypt::encrypt($user)]);
        $count = DB::table('pengunjung')->where('id', $user->id)->count();
        if (empty($count)) {
            DB::table('pengunjung')->insert([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]);
        }
        return redirect()->route('frontend.dashboard');
    }

    public function logout(Request $request)
    {

        Http::asForm()->post('https://oauth2.googleapis.com/revoke', [
            'token' => Crypt::decrypt(session('token'))->token,
        ]);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->forget('token');

        return redirect()->route('frontend.index');
    }
}
