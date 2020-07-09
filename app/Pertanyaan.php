<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";

    public function tag() {
        return $this->belongsToMany("App\Tag");
    }

    public function jawaban() {
        return $this->hasMany('App\Pertanyaan');
    }
}
