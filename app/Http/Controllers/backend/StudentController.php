<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use File;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studens = Student::all();
        return view('backend.applayonline', compact('studens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    // dd($request->all());
    // $request->validate([
    //     'full_name' => 'required',
    //     'date_of_birth' => 'required',
    //     'gender' => 'required',
    //     'nationality' => 'required',
    //     'religion' => 'required',
    //     'present_address' => 'required',
    //     'photo' => 'required',
    //     'birthcirtificate' => 'required',
    //     'mother_name' => 'required',
    //     'mother_contact' => 'required',
    //     'mother_photo' => 'required',
    //     'father_name' => 'required',
    //     'father_contact' => 'required',
    //     'father_photo' => 'required',
    //     'payment_option' => 'required',
    //     'agreed_to_terms' => 'required',
    // ]);


      // Create a new Student instance
      $student = new Student();
      $student->full_name = $request->full_name;
      $student->grade_id = $request->grade_id;
      $student->date_of_birth = $request->date_of_birth;
      $student->gender = $request->gender;
      $student->nationality = $request->nationality;
      $student->religion = $request->religion;
      $student->present_address = $request->present_address;
      $student->previous_institution = $request->previous_institution;
      $student->message = $request->message;
      $student->mother_name = $request->mother_name;
      $student->mother_contact = $request->mother_contact;
      $student->mother_email = $request->mother_email;
      $student->mother_occupation = $request->mother_occupation;
      $student->mother_designation = $request->mother_designation;
      $student->mother_education = $request->mother_education;
      $student->mother_office_address = $request->mother_office_address;
      $student->father_name = $request->father_name;
      $student->father_contact = $request->father_contact;
      $student->father_email = $request->father_email;
      $student->father_occupation = $request->father_occupation;
      $student->father_designation = $request->father_designation;
      $student->father_education = $request->father_education;
      $student->father_office_address = $request->father_office_address;
      $student->payment_option = $request->payment_option;
      $student->agreed_to_terms = $request->has('agreed_to_terms') ? 1 : 0;

      if($request->hasFile('photo')){
        $image_temp = $request->file('photo');
        if($image_temp->isValid()){
            //Get Image Extension
            $extension = $image_temp->getClientOriginalExtension();
            //Generate New Image Name
            $imageName = time().'.'.$extension;
//                $imagePath = 'images/category/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
            $imagePath = 'images/student/';
            $image_temp->move(public_path($imagePath),$imageName);
            $student->photo = $imageName;
        }
    }

    if($request->hasFile('birth_certificate')){
        $image_temp = $request->file('birth_certificate');
        if($image_temp->isValid()){
            //Get Image Extension
            $extension = $image_temp->getClientOriginalExtension();
            //Generate New Image Name
            $imageName = time().'.'.$extension;
//                $imagePath = 'images/category/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
            $imagePath = 'images/student/';
            $image_temp->move(public_path($imagePath),$imageName);
            $student->birth_certificate = $imageName;
        }
    }

    
    if($request->hasFile('mother_photo')){
        $image_temp = $request->file('mother_photo');
        if($image_temp->isValid()){
            //Get Image Extension
            $extension = $image_temp->getClientOriginalExtension();
            //Generate New Image Name
            $imageName = time().'.'.$extension;
//                $imagePath = 'images/category/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
            $imagePath = 'images/student/';
            $image_temp->move(public_path($imagePath),$imageName);
            $student->mother_photo = $imageName;
        }
    }

    if($request->hasFile('father_photo')){
        $image_temp = $request->file('father_photo');
        if($image_temp->isValid()){
            //Get Image Extension
            $extension = $image_temp->getClientOriginalExtension();
            //Generate New Image Name
            $imageName = time().'.'.$extension;
//                $imagePath = 'images/category/'.$imageName;
//                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
            $imagePath = 'images/student/';
            $image_temp->move(public_path($imagePath),$imageName);
            $student->father_photo = $imageName;
        }
    }
  
      // Save the student record
      $student->save();
  
      // Redirect or return response
      return redirect()->route('applay_online')->with('success', 'Application submitted successfully.');
  }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
