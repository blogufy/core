<?php

namespace Blogufy\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\SubscriberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscriber extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return SubscriberFactory::new();
    }
    
    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'ip_address',
        'status',
    ];

    // relationships
    
}
