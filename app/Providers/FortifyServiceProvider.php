<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        //
         Fortify::loginView(function (){
             return view('auth.login');
         });
         
         Fortify::loginView(function (){
            return view('auth.register');
        });
         //forgot password
         Fortify::requestPasswordResetLinkView(function (){
            return view('auth.forgot-password');
        });
        //
        Fortify::verifyEmailView(function () {
            return view('auth.verify');
        });
        //
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.passwords.email');
        });
        
        Fortify::resetPasswordView(function ($request) {
            return view('auth.passwords.reset', ['token' => $request->token]);
        });
        
        Fortify::authenticateUsing(function (Request $request){
            $user = User::where('email',$request->email)->first();
            
            if($user && Hash::check($request->password, $user->password)){
                return $user;
            }
        });

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
