<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camp;
use App\Models\TransportCafeteriaBook;
use App\Models\EventNoticeNews;
use Illuminate\Support\Facades\File;
class KeyInformationController extends Controller
{
    public function camps (Request $request,string $id = null)
    {
        $camps = Camp::get()->all();
        // dd($ages);
        if($id){
            $camp = Camp::findorfail($id);
        }
        else {
            $camp= '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $camp->title = $request->title;
            $camp->content = $request->content;

            if($request->hasFile('image')){
                $exists = 'images/camps/'.$camp->image;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('image');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/camps';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $camp->image = $imageName;
                }
            }
            $camp->update();
            return redirect(route('camps'))->with('success','Update Complete!!');
        }
        return view('backend.key_information.camp',compact('camps','camp'));
    }
    public function campUpload(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/camps'), $fileName);
            // dd('d');
            $url = asset('images/camps/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }
    public function eventNoticeNews (Request $request,string $id = null)
    {
        $events = EventNoticeNews::get()->all();
        // dd($ages);
        if($id){
            $event = EventNoticeNews::findorfail($id);
        }
        else {
            $event= '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($event))
            {
                $event = new EventNoticeNews();
            }
            $event->title = $request->title;
            $event->date = $request->date;
            $event->type = $request->type;
            $event->time = $request->time;
            $event->status = $request->status;
            $event->url = $request->url;
            $event->content = $request->content;

            if($request->hasFile('image')){
                $exists = 'images/event/'.$event->image;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('image');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/event';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $event->image = $imageName;
                }
            }
            if (!empty($id)) {
                $event->update();
            return redirect(route('eventNoticeNews'))->with('success','Update Complete!!');
            } else {
                $event->save();
            return redirect(route('eventNoticeNews'))->with('success','Create Success!!');
            }
        }
        return view('backend.key_information.eventnoticenews',compact('events','event'));
    }
    public function eventUpload(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/event'), $fileName);
            // dd('d');
            $url = asset('images/event/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }

    public function transportCafeteriaBook (Request $request,string $id = null)
    {
        $transports = TransportCafeteriaBook::get()->all();
        if($id){
            $transport = TransportCafeteriaBook::findorfail($id);
        }
        else {
            $transport= '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $transport->title = $request->title;
            $transport->content = $request->content;

            if($request->hasFile('image')){
                $exists = 'images/transportbook/'.$transport->image;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('image');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/transportbook';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $transport->image = $imageName;
                }
            }
            $transport->update();
            return redirect(route('transportCafeteriaBook'))->with('success','Update Complete!!');
        }
        return view('backend.key_information.transportcafeteriabook',compact('transport','transports'));
    }

    public function policyUpload(Request $request)
    {
        //  dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/policy'), $fileName);
            // dd('d');
            $url = asset('images/policy/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }
}
