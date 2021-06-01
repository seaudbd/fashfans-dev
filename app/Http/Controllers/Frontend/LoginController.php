<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle() {
        Session::put('previous_page_url', url()->previous());
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {

        try {
            $redirectUrl = Session::get('previous_page_url');
            Session::forget('previous_page_url');
            $googleUser = Socialite::driver('google')->user();
            if ($user = User::where('provider_id', $googleUser->getId())->first()) {
                Auth::login($user);
                return redirect($redirectUrl);
            } else {
                $user = new User();
                $user->name = $googleUser->getName();
                $user->email = $googleUser->getEmail();
                $user->provider_id = $googleUser->getId();
                $user->avatar = $googleUser->getAvatar();
                $user->save();
                Auth::login($user);
                return redirect($redirectUrl);

            }
        } catch (\Exception $exception) {
            return $exception;
        }
    }


    public function redirectToFacebook() {
        Session::put('previous_page_url', url()->previous());
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback() {

        try {
            $redirectUrl = Session::get('previous_page_url');
            Session::forget('previous_page_url');
            $facebookUser = Socialite::driver('facebook')->user();
            if ($user = User::where('provider_id', $facebookUser->getId())->first()) {
                Auth::login($user);
                return redirect($redirectUrl);
            } else {
                $user = new User();
                $user->name = $facebookUser->getName();
                $user->email = $facebookUser->getEmail();
                $user->provider_id = $facebookUser->getId();
                $user->avatar = $facebookUser->getAvatar();
                $user->save();
                Auth::login($user);
                return redirect($redirectUrl);

            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }


    public function isUserLoggedIn() {
        if (Auth::check()) {
            return response()->json(['is_user_logged_in' => true]);
        } else {
            return response()->json(['is_user_logged_in' => false]);
        }
    }

    public function loadControlPanelLogin() {
        return view('Frontend.control_panel_login');
    }

    public function authenticateControlPanelLogin(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
            ],
            'password' => [
                'required',
            ],
            'remember_me' => [
                'required',
            ]
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], (int)$request->remember_me)) {
            $request->session()->regenerate();
            return response()->json(['success' => true, 'message' => 'Authorized Control Panel Access']);
        }

        return response()->json(['success' => false, 'message' => 'Unauthorized Access!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
