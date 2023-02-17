<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Categories()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }


    public function Origination()
    {
        return $this->belongsTo(Origination::class);
    }
}
