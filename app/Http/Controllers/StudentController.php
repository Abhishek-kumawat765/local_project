<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Hash;
use File;
use Auth;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display all students
    public function viewStudents()
    {

        $studentsData = Student::select('students.*', 'states.name as state_name', 'classes.className as class_name')
        ->leftJoin('states', 'students.state', '=', 'states.id')
        ->leftJoin('classes', 'students.class', '=', 'classes.id')
        ->orderBy('students.created_at', 'desc')
        ->get();

        return view('students.view', compact('studentsData'));

    }

    // Show the form to create a new hostel
    public function addStudents(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
                'age' => 'required|string|max:2',
                'class' => 'required|exists:classes,id',
                
                'mobile' => 'required|numeric|regex:/^[0-9]+$/|unique:students,mobile|digits:10',
                'email' => 'required|email|unique:students,email',
                'date' => 'required|date',
                'fatherName' => 'required|string|max:255',
                'motherName' => 'required|string|max:255',
                'address' => 'required|string|max:500',
                'userName' => 'required|string|max:500',
                'password' => 'required|string|min:8|',
                'state' => 'required|exists:states,id',
                
            ], [
                'name.regex' => 'The name may only contain letters and spaces.',
                'mobile.regex' => 'The mobile number may only contain numbers, no letters or special characters.',
            ]);

            $addStudents = new Student;
            // $addStudents->user_id = Auth::user()->id;
            $addStudents->name = $request->name;
            $addStudents->class = $request->class;
            $addStudents->age = $request->age;
            $addStudents->mobile = $request->mobile;
            $addStudents->email = $request->email;
            $addStudents->date = $request->date;
            $addStudents->fatherName = $request->fatherName;
            $addStudents->motherName = $request->motherName;
            $addStudents->address = $request->address;
            $addStudents->userName = $request->userName;
            $addStudents->password = Hash::make($request->password);
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'students';
                $image->move($destinationPath, $photo);
                $addStudents->photo = $photo;
            }

            $addStudents->state = $request->state;
            $addStudents->formFee = $request->formFee;
            $addStudents->totalFee = $request->totalFee;
            $addStudents->totalAmount = $request->totalAmount;
            $addStudents->save();
            // return response()->json(['status' => 1, 'message' => 'Student Add Successfully']);
            return redirect()->to('viewStudents')->with('message', 'Student Add successfully');

        }
        ;


        return view('students.add');
    }




    public function editStudents(Request $request, $id)
    {

        
        $editStudents = Student::findOrFail($id);

        
        if ($request->isMethod('post')) {

            $request->validate([
                'mobile' => 'required|numeric|regex:/^[0-9]+$/|digits:10',
            ]);
            //         'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            //         'class' => 'required|string|max:4',
            //         'mobile' => 'required|numeric|regex:/^[0-9]+$/|unique:students,mobile',
            //         'email' => 'required|email|unique:students,email',
            //         'date' => 'required|date',
            //         'fatherName' => 'required|string|max:255',
            //         'motherName' => 'required|string|max:255',
            //         'address' => 'required|string|max:500',
            //     ], [
            //         'name.regex' => 'The name may only contain letters and spaces.',
            //         'mobile.regex' => 'The mobile number may only contain numbers, no letters or special characters.',

            // ]);
            $editStudents->name = $request->name;
            $editStudents->class = $request->class;
            $editStudents->age = $request->age;
            $editStudents->mobile = $request->mobile;
            $editStudents->email = $request->email;
            $editStudents->date = $request->date;
            $editStudents->fatherName = $request->fatherName;
            $editStudents->motherName = $request->motherName;
            $editStudents->address = $request->address;
            $editStudents->userName = $request->userName;
            $editStudents->password = Hash::make($request->password);
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $document = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'students';
                $image->move($destinationPath, $document);
                if (File::exists(env('IMAGE_UPLOAD_PATH') . 'students/' . $editStudents->photo)) {
                    File::delete(env('IMAGE_UPLOAD_PATH') . 'students/' . $editStudents->photo);
                }
                $editStudents->photo = $document;
            }
            $editStudents->state = $request->state;
            $editStudents->formFee = $request->formFee;
            $editStudents->totalFee = $request->totalFee;
            $editStudents->totalAmount = $request->totalAmount;
            $editStudents->save();

            return redirect()->to('viewStudents')->with('message', 'Student Edit successfully');
        }


        return view('students.edit', ['editStudents' => $editStudents]);
    }



    public function deleteStudents($id)
    {

        $deleteStudents = Student::findOrFail($id);
        $deleteStudents->delete();
        return redirect()->to('viewStudents')->with('danger', 'Student Delete successfully');
    }
}
