<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reminder;
use App\ReminderType;

class ReminderController extends Controller
{
    public function home()
    {
        $data['reminders']  = Reminder::orderBy('id', 'desc')->get();
        $data['types']      = ReminderType::get();
        return view('home', $data);
    }

    public function addReminder(Request $request)
    {
        $reminder               = new Reminder();
        $reminder->body         = $request->reminder;
        $reminder->isFinished   = false;
        $reminder->createUserID = 1;
        $reminder->ReminderType = $request->type;
        $reminder->save();
        return back();
    }

    public function deleteReminder(Request $request)
    {
        Reminder::find($request->reminderID)->delete();
        return back()->with('status', 'Good Job!, You finished 1 task');
    }

    // public function editReminder(Request $request)
    // {
    //     $reminder               = Reminder::find($request->reminderID);
    //     $reminder->body         = $request->reminder;
    //     $reminder->isFinished   = false;
    //     $reminder->createUserID = 1;
    //     $reminder->save();
    //     return back()->with('status', '');
    // }
}
