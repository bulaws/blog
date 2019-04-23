<?php

namespace App\Providers;

use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPostPolicies();
        $this->registerStaticItemPolicies();
        Gate::resource('posts', 'App\Policies\PostPolicy');
    }

    public function registerPostPolicies()
    {
        Gate::define('create-post', function ($user) {
            return $user->hasAccess(['create-post']);
        });
        Gate::define('edit-post', function ($user, Post $post) {
            return $user->hasAccess(['edit-post']) or $user->id == $post->user_id;
        });
        Gate::define('publish-post', function ($user) {
            return $user->hasAccess(['publish-post']);
        });
        Gate::define('view-post', function ($user) {
            return $user->inRole('User');
        });
    }

    public function registerStaticItemPolicies()
    {
        Gate::define('create-post', function ($user) {
            return $user->hasAccess(['create-post']);
        });
        Gate::define('edit-post', function ($user, Post $post) {
            return $user->hasAccess(['edit-post']) or $user->id == $post->user_id;
        });
        Gate::define('delete-post', function ($user) {
            return $user->hasAccess(['delete-post']);
        });
        Gate::define('view-post', function ($user) {
            return $user->inRole('Author');
        });
    }
}
