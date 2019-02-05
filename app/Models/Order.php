<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['order_id'];
    protected $primaryKey = 'order_id';

    public function users()
    {
        return $this->belongsToMany(User::class, 'order_user', 'order_id', 'user_id')->withPivot(['service_id']);
    }
}
