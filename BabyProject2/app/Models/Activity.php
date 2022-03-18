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
           'icon' => "required",
        ];
    }

    public static function deleteRules()
    {
        return [
            'id' => "exists:activities,id"
        ];
    }
}
