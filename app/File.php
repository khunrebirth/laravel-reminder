<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected   $table          = 'Files';
    public      $primaryKey     = 'id';
    public      $timestamps     = true;
}
