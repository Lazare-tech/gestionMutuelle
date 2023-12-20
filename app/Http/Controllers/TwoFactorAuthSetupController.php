<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;


class TwoFactorAuthSetupController extends Controller
{
    //
    public function store(EnableTwoFactorAuthentication $enable){
        $user = Auth::user();
        $enable($user);
        
        return redirect()->back()->with('newlyEnabled', true);
        
        
    }
    public function destroy(DisableTwoFactorAuthentication $disable){
        $user = Auth::user();
        $disable($user);
        return redirect()->back();
    }
    
}
