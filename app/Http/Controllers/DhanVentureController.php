<?php

namespace App\Http\Controllers;

use App\Models\DhanVenture;
use Hash;
use File;
use Auth;
use Illuminate\Http\Request;

class DhanVentureController extends Controller
{
    // Display all students
    public function viewDhanVenture()
    {
        $dhanView = DhanVenture::all();
        return view('DhanVenture.view', compact('dhanView'));
    }
    public function indexDhanVenture()
    {
        $dhanView = DhanVenture::all();
        return view('DhanVenture.index', compact('dhanView'));
    }

 
    public function addDhanVenture(Request $request)
    {
        if ($request->isMethod('post')) {
        

            $addDhanVenture = new DhanVenture;
            $addDhanVenture->date = $request->date;
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'dhanVenture';
                $image->move($destinationPath, $photo);
                $addDhanVenture->photo = $photo;
            }
            $addDhanVenture->noteNo = $request->noteNo;
            $addDhanVenture->totalAmount = $request->totalAmount;
            $addDhanVenture->save();
            // return response()->json(['status' => 1, 'message' => 'Student Add Successfully']);
            return redirect()->to('viewDhanVenture')->with('message', 'Today  Money successfully');

        }
        ;


        return view('DhanVenture.add');
    }




    // public function editStudents(Request $request, $id)
    // {


    //     $editStudents = Student::findOrFail($id);


    //     if ($request->isMethod('post')) {

    //         $request->validate([
    //             'mobile' => 'required|numeric|regex:/^[0-9]+$/|digits:10',
    //         ]);
    //         //         'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
    //         //         'class' => 'required|string|max:4',
    //         //         'mobile' => 'required|numeric|regex:/^[0-9]+$/|unique:students,mobile',
    //         //         'email' => 'required|email|unique:students,email',
    //         //         'date' => 'required|date',
    //         //         'fatherName' => 'required|string|max:255',
    //         //         'motherName' => 'required|string|max:255',
    //         //         'address' => 'required|string|max:500',
    //         //     ], [
    //         //         'name.regex' => 'The name may only contain letters and spaces.',
    //         //         'mobile.regex' => 'The mobile number may only contain numbers, no letters or special characters.',

    //         // ]);
    //         $editStudents->name = $request->name;
    //         $editStudents->class = $request->class;
    //         $editStudents->age = $request->age;
    //         $editStudents->mobile = $request->mobile;
    //         $editStudents->email = $request->email;
    //         $editStudents->date = $request->date;
    //         $editStudents->fatherName = $request->fatherName;
    //         $editStudents->motherName = $request->motherName;
    //         $editStudents->address = $request->address;
    //         $editStudents->userName = $request->userName;
    //         $editStudents->password = Hash::make($request->password);
    //         if ($request->file('photo')) {
    //             $image = $request->file('photo');
    //             $document = time() . uniqid() . $image->getClientOriginalName();
    //             $destinationPath = env('IMAGE_UPLOAD_PATH') . 'students';
    //             $image->move($destinationPath, $document);
    //             if (File::exists(env('IMAGE_UPLOAD_PATH') . 'students/' . $editStudents->photo)) {
    //                 File::delete(env('IMAGE_UPLOAD_PATH') . 'students/' . $editStudents->photo);
    //             }
    //             $editStudents->photo = $document;
    //         }
    //         $editStudents->state = $request->state;
    //         $editStudents->formFee = $request->formFee;
    //         $editStudents->totalFee = $request->totalFee;
    //         $editStudents->totalAmount = $request->totalAmount;
    //         $editStudents->save();

    //         return redirect()->to('viewStudents')->with('message', 'Student Edit successfully');
    //     }


    //     return view('students.edit', ['editStudents' => $editStudents]);
    // }



    // public function deleteStudents($id)
    // {

    //     $deleteStudents = Student::findOrFail($id);
    //     $deleteStudents->delete();
    //     return redirect()->to('viewStudents')->with('danger', 'Student Delete successfully');
    // }
}
