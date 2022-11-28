<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailQueue extends Model
{
    use HasFactory;
    protected $table = 'mail_queue';
    protected $guarded = [];
}
