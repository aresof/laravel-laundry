<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App
 * @property integer id
 * @property Carbon created_at
 * @property Carbon update_at
 * @property string name
 * @property string nif
 * @property string address
 * @property integer postcode
 * @property string phone
 * @property string is_company
 * @mixin \Eloquent
 */
class Client extends Model
{

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = trim(str_replace('+34','',
            str_replace('-', '',
                str_replace(' ','',$value))));
    }

}
