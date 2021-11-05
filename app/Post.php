<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use Translatable;
    protected $translatable = ['title', 'excerpt', 'body'];

    public function getDate($created_at) {
        return Carbon::parse($created_at)->format('Y');
    }
    public function getDayNews($created_at) {
        return Carbon::parse($created_at)->format('d');
    }
    public function getMonthNews($created_at) {
        return Carbon::parse($created_at)->format('m');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

}
