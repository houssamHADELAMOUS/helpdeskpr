<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_USER = 'user';
    const ROLE_AGENT = 'agent';
    const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    public function isAdmin(): bool { return $this->role === self::ROLE_ADMIN; }
    public function isAgent(): bool { return $this->role === self::ROLE_AGENT; }
    public function isUser(): bool { return $this->role === self::ROLE_USER; }
}
