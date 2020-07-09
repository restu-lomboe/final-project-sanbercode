<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $fillable = ['judul', 'isi', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tag() {
        return $this->belongsToMany("App\Tag");
    }

    public function jawaban() {
        return $this->hasMany('App\Pertanyaan');
    }
}
