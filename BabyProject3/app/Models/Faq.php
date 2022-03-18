<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function rules()
    {
        return [
            'question' => 'required|string|min:3',
            'answer' => 'required|string|min:3'
        ];
    }

    public static function deleteRules()
    {
        return [
            'id' => 'exists:faqs,id'
        ];
    }
}
