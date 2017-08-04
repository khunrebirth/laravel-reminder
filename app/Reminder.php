<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reminder extends Model
{
    use SoftDeletes;
    protected   $table          = 'Reminder';
    public      $primaryKey     = 'id';
    public      $timestamps     = true;

    public function getType()
    {
        return $this->belongsTo(ReminderType::class, 'ReminderType', 'id');
    }
}
