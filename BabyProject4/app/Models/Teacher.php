<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function rules()
    {
        return [
            'name' => "required|string|min:3",
            'description' => "required|string|min:10",
            'image' => "required|mimes:jpg,jpeg,png|max:5048",
        ];
    }

    public static function updateRules()
    {
        return [
            'name' => "required|string|min:3",
            'description' => "required|string|min:10",
            'image' => "required|mimes:jpg,jpeg,png|max:5048",
            'id' => "exists:courses,id"
        ];
    }

    public static function deleteRules()
    {
        return [
            'id' => "exists:courses,id"
        ];
    }

    public function getImageAttribute($value)
    {
        return "images/course/$value";
    }
}
