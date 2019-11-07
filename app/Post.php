<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // Table Name: If you want to change the name of the table name
    protected $table = 'posts';

    // Primary Key: If you want to change the primary key
    public $id = 'id';

    // Timestamps: If you want to toggle timestamps
    public $timestamps = true;

}
