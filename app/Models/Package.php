<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'package_id';
    protected $guarded = ['package_id'];

    public function services()
    {
        return $this->hasMany(Service::class,'package_id');
    }
}
