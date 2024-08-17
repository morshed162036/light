<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AcademicCalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AcademicCalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic_calenders = AcademicCalender::get()->all();
        return view('backend.academic_calenders.index', compact('academic_calenders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.academic_calenders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $academic_calenders = new AcademicCalender();
        $academic_calenders->title = $request->title;

        if ($request->hasFile('pdf_file')) {
            // Define the path where the file is stored
            $existingFilePath = 'images/academic_calenders/' . $academic_calenders->pdf_file;

            // Check if the file exists and delete it
            if (File::exists(public_path($existingFilePath))) {
                File::delete(public_path($existingFilePath));
            }

            // Get the uploaded file
            $pdfFile = $request->file('pdf_file');

            // Validate the file and ensure it is a PDF
            if ($pdfFile->isValid() && $pdfFile->getClientOriginalExtension() === 'pdf') {
                // Generate a new file name
                $fileName = time() . '.' . $pdfFile->getClientOriginalExtension();
                // $filePath = 'images/academic_calenders';
                $filePath = 'images/academic_calenders';


                // Move the file to the desired directory
                $pdfFile->move(public_path($filePath), $fileName);

                // Update the database record with the new file name
                $academic_calenders->pdf_file = $fileName;
            }
        }

        $academic_calenders->save();
        return redirect()->route('academic_calenders')->with('success', 'Academic Calender Create Successfully!!!');
    }

    // $academic_calenders->title = $request->title;



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
        $academic_calender = AcademicCalender::where('id', $id)->get()->first();
        // Return the edit view with the current academic calendar data
        return view('backend.academic_calenders.edit')->with(compact('academic_calender'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $academic_calenders = AcademicCalender::findorFail($id);
        $academic_calenders->title = $request->title;

        if ($request->hasFile('pdf_file')) {
            // Define the path where the file is stored
            $existingFilePath = 'images/academic_calenders/' . $academic_calenders->pdf_file;

            // Check if the file exists and delete it
            if (File::exists(public_path($existingFilePath))) {
                File::delete(public_path($existingFilePath));
            }

            // Get the uploaded file
            $pdfFile = $request->file('pdf_file');

            // Validate the file and ensure it is a PDF
            if ($pdfFile->isValid() && $pdfFile->getClientOriginalExtension() === 'pdf') {
                // Generate a new file name
                $fileName = time() . '.' . $pdfFile->getClientOriginalExtension();
                // $filePath = 'images/academic_calenders';
                $filePath = 'images/academic_calenders';


                // Move the file to the desired directory
                $pdfFile->move(public_path($filePath), $fileName);

                // Update the database record with the new file name
                $academic_calenders->pdf_file = $fileName;
            }
        }
        $academic_calenders->update();
        return redirect()->route('academic_calenders')->with('success', 'Academic Calender Create Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academic_calenders = AcademicCalender::findOrFail($id);

        // Delete the academic calendar
        $academic_calenders->delete();
        $message  = "Academic Calendar deleted successfully.";

        // Redirect back to the index page with a success message
        return redirect()->route('academic_calenders')
            ->with('success', $message);
    }
}
