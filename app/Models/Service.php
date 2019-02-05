<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Service extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'service_id';
    protected $guarded = ['service_id'];

    const USERNAME = 1;
    const VIDEONAME = 2;
    const PICTURENAME = 3;

   /* public function users()
    {
        return $this->belongsToMany(User::class);
    }*/

    public function package()
    {
        return $this->belongsTo(Package::class,'package_id');
    }

    public function payments()
    {
        return $this->hasMany('payment_id');
    }

    public static function getLinkWay()
    {
        return[
          self::USERNAME => 'نام کاربری صفحه اینستاگرام',
          self::VIDEONAME => 'لینک ویدئو',
          self::PICTURENAME => 'لینک تصویر'
        ];
    }

}
