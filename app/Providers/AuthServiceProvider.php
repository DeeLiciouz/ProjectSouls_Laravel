<?php

namespace App\Providers;

use App\Article;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    // 'App\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    //global authorization rules
    Gate::before(function (User $user, $ability) {
      $authorized = false;

      if ($user->roles->pluck('name')->contains('admin')) $authorized = true;
      elseif ($user->abilities()->contains($ability)) $authorized = true;

      return $authorized;
    });
  }
}
