<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReminderType;

class ReminderTypeController extends Controller
{
    public function addReminderType(Request $request)
    {
        $reminderType       = new ReminderType();
        $reminderType->type = $request->name;

        $reminderType->save();

        return back();
    }
}
