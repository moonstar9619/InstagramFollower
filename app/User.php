<?php

namespace App;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Self_;

class User extends Authenticatable
{
    use Notifiable;

    const USER = 1;
    const ADMIN = 2;

    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $guarded = ['user_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*    protected $fillable = [
            'name', 'email', 'password',
        ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

/*    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }*/

    /*    public function getUseridAttribute($value)
        {
            $this->attributes['user_id'] = bcrypt($value);
        }*/

    public static function getUserRoles()
    {
        return [
            self::USER => 'کاربر عادی',
            self::ADMIN => 'کاربر مدیر'
        ];
    }

    /*public function services()
    {
        return $this->belongsToMany(Service::class);
    }*/

    public function oreders()
    {
        return $this->belongsToMany(Order::class, 'order_user', 'user_id', 'order_id')->withPivot(['service_id']);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_id');
    }

    public function isAdmin()
    {
        return $this->role == self::ADMIN;
    }

}
