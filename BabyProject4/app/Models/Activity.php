<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function rules()
    {
        return [
            'title' => "required|string|min:3",
            'slug' => "required|string|min:10",
            'icon' => "required|mimes:jpg,jpeg,png|max:5048",
        ];
    }

    public static function updateRules()
    {
        return [
            'title' => "required|string|min:3",
            'slug' => "required|string|min:10",
            'icon' => "nullable|mimes:jpg,jpeg,png|max:5048",
            'id' => "exists:activities,id"
        ];
    }

    public static function deleteRules()
    {
        return [
            'id' => "exists:activities,id"
        ];
    }

    public function getIconAttribute($value)
    {
        return "images/activity/$value";
    }
}
