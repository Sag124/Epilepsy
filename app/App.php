<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
 	protected $fillable = [
        'Ailment', 'Hospital', 'Location','Language', 'Age', 'Gender','Mobile', 'Relation', 'Relation_Gender'
    ];   
}
