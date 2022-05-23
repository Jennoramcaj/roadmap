<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Xetaio\Mentions\Models\Traits\HasMentionsTrait;

class Comment extends Model
{
    use HasFactory, HasMentionsTrait;

    public $fillable = [
        'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
