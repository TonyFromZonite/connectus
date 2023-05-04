<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "uuid",
        'name',
        'email',
        'mobile',
        'mobile_verification_code',
        'email_verified_at',
        'mobile_verified_at',
        "description",
        "thumbnial",
        "profile",
        "gender",
        "relationship",
        "location",
        "address",
        "is_private",
        "is_banned",
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function is_friend()
    {
        return (Friend::where(["user_id" => $this->id])->orWhere("friend_id", $this->id)->first()->status ?? "");
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
