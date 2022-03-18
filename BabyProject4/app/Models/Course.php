<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public static function rules()
    {
        return [
            'name' => "required|string|min:3",
            'price' => "required|numeric",
            'description' => "required|string|min:10",
            'image' => "required|mimes:jpg,jpeg,png|max:5048",
            'teacher_id' => "exists:teachers,id"
        ];
    }

    public static function updateRules()
    {
        return [
            'name' => "required|string|min:3",
            'price' => "required|numeric",
            'description' => "required|string|min:10",
            'image' => "required|mimes:jpg,jpeg,png|max:5048",
            'teacher_id' => "exists:teachers,id",
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
