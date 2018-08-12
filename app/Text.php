<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Text extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'NL_text',
        'EN_text'
    ];

    public function text(){
        if(App::isLocale('en')){
            return $this->EN_text;
        } else {
            return $this->NL_text;
        }

    }
}
