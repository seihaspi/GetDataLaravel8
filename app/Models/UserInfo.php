<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserInfo;

 class  UserInfo extends Model
{
    protected $table  = 'users';
    protected $fillable = [
        'full_name',
        'gender',
        'phone',
    ];
    use HasFactory;
}
