<?php

namespace App;

use App\OneCategory;
use App\Services\CurrencyConversion;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable;
    protected $translatable = ['info',];
    protected $fillable = [
        'info', 'category',
    ];

    public function getPriceAttribute($value) {
        return round(CurrencyConversion::convert($value),2);
    }

    public function getCatagory($id) {
       $category_slug = OneCategory::where('id', $id)->firstOrFail();
       return $category_slug->slug;
    }
}
