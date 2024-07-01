<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_publish',
        'category_id',
        'summary',
        'content',
        'delivery_at',
    ];

    public function rules()
    {
        return [
            'title' => 'required|string|max:256',
            'is_publish' => 'required|boolean',
            'category_id' => 'required|integer',
            'summary' => 'required|string',
            'content' => 'required|string',
            'delivery_at' => 'required|date',
        ];
    }
}
