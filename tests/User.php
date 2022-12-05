<?php
namespace Blogufy\Core\Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Blogufy\Core\Traits\HasArticles;

class User extends AuthUser
{
    use HasArticles, HasFactory;

    protected $guarded = [];

    protected $table = 'users';

    protected static function newFactory()
    {
        return UserFactory::new();
    }
} 