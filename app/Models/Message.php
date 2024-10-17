<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['publish_id', 'consumer_id', 'messages'];
    
    public function publisher()
    {
        return $this->belongsTo(User::class, 'publish_id');
    }

    public function consumer()
    {
        return $this->belongsTo(User::class, 'consumer_id');
    }

}
