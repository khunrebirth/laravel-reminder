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

        return back()->with(['ReminderTypeStatus' => 'Add new reminder type successfully']);
    }

    public function listReminder()
    {
        return response()->json(ReminderType::all());
    }
}
