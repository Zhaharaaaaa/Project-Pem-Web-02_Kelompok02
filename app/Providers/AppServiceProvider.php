<?php

namespace App\Providers;

use App\Models\Pemesanan;
use App\Models\Peminjaman;
use App\Models\Pengguna;
use App\Models\Ruangan;
use App\Models\User;
use App\Policies\PemesananPolicy;
use App\Policies\PeminjamanPolicy;
use App\Policies\PenggunaPolicy;
use App\Policies\RuanganPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\ServiceProvider;
use App\Models\Fasilitas;
use App\Policies\FasilitasPolicy;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
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
        Gate::policy(Fasilitas::class, FasilitasPolicy::class);
        Gate::policy(Ruangan::class, RuanganPolicy::class);
        Gate::policy(Pemesanan::class, PemesananPolicy::class);
        Gate::policy(Peminjaman::class, PeminjamanPolicy::class);
        Gate::policy(Pengguna::class, PenggunaPolicy::class);
        Gate::policy(User::class, UserPolicy::class);
    }
}
