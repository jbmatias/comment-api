<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'replied_comment_id',
        'name',
        'comment'
    ];

    public function responses()
    {
        return $this->hasMany(Comment::class, 'replied_comment_id');
    }
}
