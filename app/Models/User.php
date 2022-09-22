<?php

namespace App\Models;

use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWallet;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements Wallet
{
    use HasRoles, HasFactory, Notifiable;
    use HasWallet;

    // public static string $ROLE_ADMIN = 'admin';
    // public static string $ROLE_AGENT = 'agent';
    // public static string $ROLE_USER = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         "name",
         'username',
         'email',
         'password',
         'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    // public function getFullNameAttribute()
    // {
    //     if (is_null($this->last_name)) {
    //         return "{$this->name}";
    //     }

    //     return "{$this->name} {$this->last_name}";
    // }

    /**
     * Set the user's password.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function isAdmin() : bool {
        return $this->hasRole('admin');
    }

    public function isAgent(): bool {
        return $this->hasRole('agent');
    }

    public function createdBy(): BelongsTo {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
