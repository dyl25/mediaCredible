<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function media() {
        $this->belongsTo(Media::class);
    }
}
