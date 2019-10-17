<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    protected static function boot(){//ketika user pertama di buat maka akan membuat profile juga
        parent::boot();
        static::created(function($user){
            $user->profile()->create([
                'title' => $user->name,
                'image'=>'dafaultPicture/noImage.png'
            ]);
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);//->orderBy('created_at', 'DESC');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

}
