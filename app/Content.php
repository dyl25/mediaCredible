<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = [];

    public function media() {
        return $this->belongsTo(Media::class);
    }
}
