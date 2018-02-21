<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorMsg extends Model
{
    protected $fillable = [
        "senderName",
        "senderEmail",
        "senderSubject",
        "senderMsg"
    ];
}
