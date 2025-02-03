<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Carbon\Carbon;
use DB;
use Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Display all students
    public function Schedule()
    {
        // Get today's date
        $today = Carbon::today()->toDateString();

        $night = Schedule::whereNotNull('night')
            ->whereDate('created_at', $today)->exists();

        $exercise = Schedule::whereNotNull('exercise')
            ->whereDate('created_at', $today)->exists();

        $morning = Schedule::whereNotNull('morning')
            ->whereDate('created_at', $today)->exists();

        $study = Schedule::whereNotNull('study')
            ->whereDate('created_at', $today)->exists();

        $rest = Schedule::whereNotNull('rest')
            ->whereDate('created_at', $today)->exists();

        $studyTwo = Schedule::whereNotNull('studyTwo')
            ->whereDate('created_at', $today)->exists();

        $restTwo = Schedule::whereNotNull('restTwo')
            ->whereDate('created_at', $today)->exists();

        $studyThree = Schedule::whereNotNull('studyThree')
            ->whereDate('created_at', $today)->exists();

        $restThree = Schedule::whereNotNull('restThree')
            ->whereDate('created_at', $today)->exists();

        $studyFourth = Schedule::whereNotNull('studyFourth')
            ->whereDate('created_at', $today)->exists();

        $viewSchedule = Schedule::all();

        // Pass both variables to the view
        return view('Schedule.view', [
            'viewSchedule' => $viewSchedule,
            'night' => $night,
            'exercise' => $exercise,
            'morning' => $morning,
            'study' => $study,
            'rest' => $rest,
            'studyTwo' => $studyTwo,
            'restTwo' => $restTwo,
            'studyThree' => $studyThree,
            'restThree' => $restThree,
            'studyFourth' => $studyFourth,
        ]);


    }




    public function addSchedule(Request $request)
    {// Handle the form submission
        if ($request->isMethod('post')) {
            // Check if a schedule already exists for today's date
            $scheduleExists = Schedule::where('date', $request->date)->exists();

            if ($scheduleExists) {
                // If the schedule exists, update it based on the form type
                $existingSchedule = Schedule::where('date', $request->date)->first();

                if ($request->form_type == 'night') {
                    $existingSchedule->night = $request->night;
                } elseif ($request->form_type == 'exercise') {
                    $existingSchedule->exercise = $request->exercise;
                } elseif ($request->form_type == 'morning') {
                    $existingSchedule->morning = $request->morning;
                } elseif ($request->form_type == 'study') {
                    $existingSchedule->study = $request->study;
                } elseif ($request->form_type == 'rest') {
                    $existingSchedule->rest = $request->rest;
                } elseif ($request->form_type == 'studyTwo') {
                    $existingSchedule->studyTwo = $request->studyTwo;
                } elseif ($request->form_type == 'restTwo') {
                    $existingSchedule->restTwo = $request->restTwo;
                } elseif ($request->form_type == 'studyThree') {
                    $existingSchedule->studyThree = $request->studyThree;
                } elseif ($request->form_type == 'restThree') {
                    $existingSchedule->restThree = $request->restThree;
                } elseif ($request->form_type == 'studyFourth') {
                    $existingSchedule->studyFourth = $request->studyFourth;
                }

                $existingSchedule->save();
            } else {
                // If the schedule doesn't exist, create a new entry
                $addSchedule = new Schedule;
                $addSchedule->date = $request->date;

                if ($request->form_type == 'night') {
                    $addSchedule->night = $request->night;
                } elseif ($request->form_type == 'exercise') {
                    $addSchedule->exercise = $request->exercise;
                } elseif ($request->form_type == 'morning') {
                    $addSchedule->morning = $request->morning;
                } elseif ($request->form_type == 'study') {
                    $addSchedule->study = $request->study;
                } elseif ($request->form_type == 'rest') {
                    $addSchedule->rest = $request->rest;
                } elseif ($request->form_type == 'studyTwo') {
                    $addSchedule->studyTwo = $request->studyTwo;
                } elseif ($request->form_type == 'restTwo') {
                    $addSchedule->restTwo = $request->restTwo;
                } elseif ($request->form_type == 'studyThree') {
                    $addSchedule->studyThree = $request->studyThree;
                } elseif ($request->form_type == 'restThree') {
                    $addSchedule->restThree = $request->restThree;
                } elseif ($request->form_type == 'studyFourth') {
                    $addSchedule->studyFourth = $request->studyFourth;
                }

                $addSchedule->save();
            }

            return redirect()->to('Schedule')->with('message', 'Today\'s schedule has been added/updated successfully.');
        }

    }




}
