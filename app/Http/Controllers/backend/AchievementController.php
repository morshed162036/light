<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Achievement;
use App\Models\Facility;
use App\Models\Policy;
use App\Models\Branch;

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

}
