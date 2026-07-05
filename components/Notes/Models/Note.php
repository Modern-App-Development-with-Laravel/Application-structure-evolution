<?php

namespace Italofantone\Notes\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'content'];
}
