<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;




class UserInfo extends Model
{
    protected $connection = 'mysql';
    protected $table = 'userInfo';

    protected $primaryKey = 'id';

    public $incrementing = false;

    public $timestamps = false;
}
