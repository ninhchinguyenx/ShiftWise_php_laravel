<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class NhanVienAuthProvider extends EloquentUserProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // Kiểm tra mật khẩu
        return Hash::check($credentials['matKhau'], $user->getAuthPassword());
    }
}
