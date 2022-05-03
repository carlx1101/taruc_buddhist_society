<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasFactory;
    // table name 
    protected $table = 'events';

    // primary key 
    public $primaryKey = 'id';

    // timestamps key
    public $timestamps = true;

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
