<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function categories()
    {
        return $this->belongsTo(Categories::class,"title");
    }
}
