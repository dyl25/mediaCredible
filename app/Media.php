<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $guarded = [];

    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function logoPath() {
        return './img/medias/';
    }

    /**
     * Take the media with the $take higher rate
     *
     * @param int $take the number of media to take
     * @return void
     */
    public function best($take) {
        return true;
    }
}
