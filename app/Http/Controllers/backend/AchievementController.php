<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Achievement;
use App\Models\AddmissionProcedure;
use App\Models\Facility;
use App\Models\Policy;
use App\Models\Branch;
use App\Models\Grade;
use App\Models\SchoolFee;
use App\Models\OnlinePayment;
use App\Models\Tab;
use App\Models\Gallery;
use App\Models\Campus;
use App\Models\WhyChooseUs;

class AchievementController extends Controller
{
    public function achievement(Request $request, string $id = null)
    {
        $achievements = Achievement::get()->all();
        if ($id) {
            $achievement = Achievement::findorFail($id);
        }
        else
        {
            $achievement = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($achievement))
            {
                $achievement = new Achievement();
            }
            $achievement->title = $request->title;
            $achievement->status = $request->status;
            // dd($achievement);

            if($request->hasFile('image')){
                $exists = 'images/achievement/'.$achievement->image;
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
                    $imagePath = 'images/achievement';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $achievement->image = $imageName;
                }
            }
            //dd($achievement);
            if (!empty($id)) {
                $achievement -> update();
                return redirect(route('achievement'))->with('success','Update Success!!');
            } else {
                $achievement -> save();
                // dd($achievement);
                return redirect(route('achievement'))->with('success','Create Success!!');
            }
        }
        return view('backend.achievement.achievement',compact('achievements','achievement'));

    }
    public function gallery(Request $request, string $id = null)
    {
        $galleries = Gallery::get()->all();
        $tabs = Tab::where('type','Gallery')->get()->all();
        if ($id) {
            $gallery = Gallery::findorFail($id);
        }
        else
        {
            $gallery = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($gallery))
            {
                $gallery = new Gallery();
            }
            $gallery->tab_id = $request->tab_id;
            $gallery->title = $request->title;
            $gallery->status = $request->status;
            // dd($gallery);

            if($request->hasFile('image')){
                $exists = 'images/gallery/'.$gallery->image;
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
                    $imagePath = 'images/gallery';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $gallery->image = $imageName;
                }
            }
            //dd($gallery);
            if (!empty($id)) {
                $gallery -> update();
                return redirect(route('adminGallery'))->with('success','Update Success!!');
            } else {
                $gallery -> save();
                // dd($achievement);
                return redirect(route('adminGallery'))->with('success','Create Success!!');
            }
        }
        return view('backend.achievement.gallery',compact('galleries','gallery','tabs'));

    }
    public function campus(Request $request, string $id = null)
    {
        $campuses = Campus::get()->all();
        $tabs = Tab::where('type','Campus')->get()->all();
        if ($id) {
            $campus = Campus::findorFail($id);
        }
        else
        {
            $campus = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($campus))
            {
                $campus = new Campus();
            }
            $campus->tab_id = $request->tab_id;
            $campus->title = $request->title;
            $campus->status = $request->status;
            // dd($campus);

            if($request->hasFile('image')){
                $exists = 'images/campus/'.$campus->image;
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
                    $imagePath = 'images/campus';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $campus->image = $imageName;
                }
            }
            //dd($campus);
            if (!empty($id)) {
                $campus -> update();
                return redirect(route('campusGallery'))->with('success','Update Success!!');
            } else {
                $campus -> save();
                // dd($achievement);
                return redirect(route('campusGallery'))->with('success','Create Success!!');
            }
        }
        return view('backend.achievement.campus',compact('campuses','campus','tabs'));

    }
    public function whyChooseUs(Request $request, string $id = null)
    {
        $chooses = WhyChooseUs::get()->all();
        $tabs = Tab::where('type','WhyChooseUs')->get()->all();
        if ($id) {
            $choose = WhyChooseUs::findorFail($id);
        }
        else
        {
            $choose = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($choose))
            {
                $choose = new WhyChooseUs();
            }
            $choose->tab_id = $request->tab_id;
            $choose->content = $request->content;
            // $choose->title = $request->title;
            $choose->status = $request->status;
            // dd($choose);

            if($request->hasFile('image')){
                $exists = 'images/choose/'.$choose->image;
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
                    $imagePath = 'images/choose';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $choose->image = $imageName;
                }
            }
            //dd($choose);
            if (!empty($id)) {
                $choose -> update();
                return redirect(route('choose'))->with('success','Update Success!!');
            } else {
                $choose -> save();
                // dd($achievement);
                return redirect(route('choose'))->with('success','Create Success!!');
            }
        }
        return view('backend.achievement.whychooseus',compact('chooses','choose','tabs'));

    }

    public function facility (Request $request)
    {
        $facility = Facility::get()->first();
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $facility->title = $request->title;
            $facility->content = $request->content;

            if($request->hasFile('image')){
                $exists = 'images/facility/'.$facility->image;
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
                    $imagePath = 'images/facility';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $facility->image = $imageName;
                }
            }
            $facility->update();
            return redirect(route('facility'))->with('success','Update Complete!!');
        }
        return view('backend.facilities',compact('facility'));
    }
    public function policy (Request $request)
    {

        $policy = Policy::get()->first();
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $policy->title = $request->title;
            $policy->content = $request->content;

            if($request->hasFile('image')){
                $banner = '';
                $exists = 'images/policy/'.$policy->image;
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
                    $imagePath = 'images/policy';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $policy->image = $imageName;
                    // $banner = $imageName;
                }
            }
            $policy->update();
            return redirect(route('policy'))->with('success','Update Complete!!');
        }
        return view('backend.polices',compact('policy'));
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
    public function schoolFee (Request $request)
    {

        $fee = SchoolFee::get()->first();
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $fee->title = $request->title;
            $fee->content = $request->content;

            // if($request->hasFile('image')){
            //     $banner = '';
            //     $exists = 'images/fee/'.$fee->image;
            //     if(File::exists($exists))
            //     {
            //         File::delete($exists);
            //     }
            //     $image_temp = $request->file('image');
            //     if($image_temp->isValid()){
            //         //Get Image Extension
            //         $extension = $image_temp->getClientOriginalExtension();
            //         //Generate New Image Name
            //         $imageName = time().'.'.$extension;
            //         $imagePath = 'images/fee';
            //         $image_temp->move(public_path($imagePath),$imageName);
            //         $fee->image = $imageName;
            //         // $banner = $imageName;
            //     }
            // }
            $fee->update();
            return redirect(route('schoolFee'))->with('success','Update Complete!!');
        }
        return view('backend.schoolfee',compact('fee'));
    }
    public function feeUpload(Request $request)
    {
        //  dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/fee'), $fileName);
            // dd('d');
            $url = asset('images/fee/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }
    public function onlinePayment (Request $request)
    {

        $payment = OnlinePayment::get()->first();
        if($request->isMethod('post'))
        {
            // dd($request->all());
            $payment->title = $request->title;
            $payment->tutorial = $request->tutorial;
            $payment->paynow = $request->paynow;
            $payment->content = $request->content;

            // if($request->hasFile('image')){
            //     $banner = '';
            //     $exists = 'images/payment/'.$payment->image;
            //     if(File::exists($exists))
            //     {
            //         File::delete($exists);
            //     }
            //     $image_temp = $request->file('image');
            //     if($image_temp->isValid()){
            //         //Get Image Extension
            //         $extension = $image_temp->getClientOriginalExtension();
            //         //Generate New Image Name
            //         $imageName = time().'.'.$extension;
            //         $imagePath = 'images/payment';
            //         $image_temp->move(public_path($imagePath),$imageName);
            //         $payment->image = $imageName;
            //         // $banner = $imageName;
            //     }
            // }
            $payment->update();
            return redirect(route('onlinePayment'))->with('success','Update Complete!!');
        }
        return view('backend.onlinepayment',compact('payment'));
    }
    public function paymentUpload(Request $request)
    {
        //  dd($request->all());
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.' . $extension;
            $request->file('upload')->move(public_path('images/fee'), $fileName);
            // dd('d');
            $url = asset('images/fee/'.$fileName);
            return response()->json(['fileName' => $fileName , 'uploaded'=>1,'url' => $url]);
        }
    }

    public function branch(Request $request, string $id = null)
    {
        $branches = Branch::get()->all();
        if ($id) {
            $branch = Branch::findorFail($id);
        }
        else
        {
            $branch = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($branch))
            {
                $branch = new Branch();
            }
            $branch->name = $request->name;
            $branch->address = $request->address;
            $branch->email = $request->email;
            // $branch->phone = $request->phone;
            $branch->mobile = $request->mobile;
            $branch->tnt = $request->tnt;
            $branch->url = $request->url;
            $branch->map = $request->map;
            $branch->status = $request->status;
            // dd($branch);

            // if($request->hasFile('image')){
            //     $exists = 'images/achievement/'.$branch->image;
            //     if(File::exists($exists))
            //     {
            //         File::delete($exists);
            //     }
            //     $image_temp = $request->file('image');
            //     if($image_temp->isValid()){
            //         //Get Image Extension
            //         $extension = $image_temp->getClientOriginalExtension();
            //         //Generate New Image Name
            //         $imageName = time().'.'.$extension;
            //         $imagePath = 'images/achievement';
            //         $image_temp->move(public_path($imagePath),$imageName);
            //         $branch->image = $imageName;
            //     }
            // }
            //dd($branch);
            if (!empty($id)) {
                $branch -> update();
                return redirect(route('branch'))->with('success','Update Success!!');
            } else {
                $branch -> save();
                // dd($branch);
                return redirect(route('branch'))->with('success','Create Success!!');
            }
        }
        return view('backend.branch',compact('branches','branch'));

    }

    public function addmissionProcedure (Request $request)
    {
        $addmission = AddmissionProcedure::get()->first();
        if($request->isMethod('post'))
        {
            $addmission->title = $request->title;
            $addmission->content = $request->content;

            $addmission->update();
            return redirect(route('addmissionProcedure'))->with('success','Update Complete!!');
        }
        return view('backend.addmissionprocedure',compact('addmission'));
    }

    public function grade(Request $request, string $id = null)
    {
        $grades = Grade::get()->all();
        if ($id) {
            $grade = Grade::findorFail($id);
        }
        else
        {
            $grade = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($grade))
            {
                $grade = new grade();
            }
            $grade->class = $request->class;
            $grade->age = $request->age;
            $grade->status = $request->status;
            if (!empty($id)) {
                $grade -> update();
                return redirect(route('grade'))->with('success','Update Success!!');
            } else {
                $grade -> save();
                // dd($grade);
                return redirect(route('grade'))->with('success','Create Success!!');
            }
        }
        return view('backend.grade',compact('grades','grade'));

    }

    public function tab(Request $request, string $id = null)
    {
        $tabs = Tab::get()->all();
        if ($id) {
            $tab = Tab::findorFail($id);
        }
        else
        {
            $tab = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($tab))
            {
                $tab = new Tab();
            }
            $tab->title = $request->title;
            $tab->type = $request->type;
            // $tab->description = $request->description;
            $tab->status = $request->status;
            //dd($tab);
            if (!empty($id)) {
                $tab -> update();
                return redirect(route('tab'))->with('success','Update Success!!');
            } else {
                $tab -> save();
                // dd($tab);
                return redirect(route('tab'))->with('success','Create Success!!');
            }
        }
        return view('backend.tab.tab',compact('tabs','tab'));

    }

}
