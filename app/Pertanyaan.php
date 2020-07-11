<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";

    public function tag() {
        return $this->belongsToMany("App\Tag")->withTimestamps();
    }

    public function jawaban() {
        return $this->hasMany('App\Jawaban');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function komentar()
    {
        return $this->belongsToMany('App\Komentar');
    }

    public function vote()
    {
        return $this->belongsToMany('App\JumlahVote');
    }

    public function votepertanyaan()
    {
        return $this->belongsToMany('App\Vote');
    }

}
