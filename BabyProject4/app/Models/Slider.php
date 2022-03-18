<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function rules()
    {
        return [
            'image' => "required|mimes:jpg,jpeg,png|max:5048",
        ];
    }

    public static function updateRules()
    {
        return [
            'image' => "nullable|mimes:jpg,jpeg,png|max:5048",
            'id' => "exists:sliders,id"
        ];
    }

    public static function deleteRules()
    {
        return [
            'id' => "exists:sliders,id"
        ];
    }

    public function getImageAttribute($value)
    {
        return "images/slider/$value";
    }
}
