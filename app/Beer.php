<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['name', 'alchool_graduation', 'fermentation_type', 'color', 'image','description'];
}
