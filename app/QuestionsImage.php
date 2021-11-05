<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class QuestionsImage extends Model
{
    use Translatable;
    protected $translatable = ['title','text'];

    public $timestamps = false;

}
