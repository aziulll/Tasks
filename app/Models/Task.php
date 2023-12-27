<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'is_finished',
        'category'
      
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
