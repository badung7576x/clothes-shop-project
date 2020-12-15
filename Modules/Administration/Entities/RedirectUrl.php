<?php

namespace Modules\Administration\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RedirectUrl extends Authenticatable
{

    protected $table = 'redirect_urls';

    protected $fillable = [
        'url'
    ];


}
