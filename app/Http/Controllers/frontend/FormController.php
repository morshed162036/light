<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AdmissionQuery;
use App\Models\Slot;
use App\Models\Tour;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    // }

    public function index()
    {
        // dd('$admission_queries');
        $admission_queries = AdmissionQuery::all();
        return view('backend.admission_query', compact('admission_queries'));
    }
    public function tour()
    {
        $tours = Tour::all();
        return view('backend.tour', compact('tours'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $admission_queries = new AdmissionQuery();
        $admission_queries->grade_id = $request['grade_id'];
        $admission_queries->parent_name = $request['parent_name'];
        $admission_queries->student_name = $request['student_name'];
        $admission_queries->student_birth = $request['student_birth'];
        $admission_queries->phone_number = $request['phone_number'];
        $admission_queries->email = $request['email'];
        $admission_queries->help_query = $request['help_query'];

        $admission_queries->save();
        return redirect()->route('home.index')->with('success', 'Admission query submitted successfully!');
    }
    public function tour_store(Request $request)
    {
        $tours = new Tour();
        $tours->slot_id = $request['slot_id'];
        $tours->name = $request['name'];
        $tours->email = $request['email'];
        $tours->phone = $request['phone'];
        $tours->date = $request['date'];
        $tours->from = $request['from'];
        $tours->to = $request['to'];
        $tours->query = $request['query'];
        $tours->save();
        return redirect()->route('tour_request')->with('success', 'Tours submitted successfully!');
    }
    public function slot(Request $request, string $id = null)
    {
        $slots = Slot::get()->all();
        if ($id) {
            $slot = Slot::findorFail($id);
        } else {
            $slot = '';
        }
        if ($request->isMethod('post')) {
            if (empty($slot)) {
                $slot = new Slot();
            }
            $slot->title = $request->title;
            $slot->time = $request->time;
            $slot->status = $request->status;
            if (!empty($id)) {
                $slot->update();
                return redirect(route('slot'))->with('success', 'Update Success!!');
            } else {
                $slot->save();
                return redirect(route('slot'))->with('success', 'Create Success!!');
            }
        }
        return view('backend.slot', compact('slots', 'slot'));
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
