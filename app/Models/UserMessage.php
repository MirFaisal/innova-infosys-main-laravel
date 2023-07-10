<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact_email',
        'message',
    ];


    public function getFormatDate()
    {
        return $this->updated_at->format('F jS Y');
    }
    public function getFormatTime()
    {
        return $this->updated_at->format('g:i a');
    }
}