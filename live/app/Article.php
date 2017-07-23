<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $primary = 'news_id';
    public $timestamps = false;
}
