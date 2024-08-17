<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Herosection;
use App\Models\Counter;
use App\Models\HomeAboutUs;
use App\Models\HomeAgeSpecific;
use App\Models\Achievement;
use App\Models\Facility;
use App\Models\Camp;
use App\Models\Policy;
use App\Models\Branch;
use App\Models\TransportCafeteriaBook;
use App\Models\EventNoticeNews;
use App\Models\SchoolTiming;
use App\Models\AddmissionProcedure;
use App\Models\Grade;
use App\Models\SchoolFee;
use App\Models\OnlinePayment;
use App\Models\Tab;
use App\Models\Gallery;
use App\Models\WhyChooseUs;
use App\Models\Campus;
class FrontendController extends Controller
{
    public function index(){
        $herosection = Herosection::get()->first();
        $counter = Counter::get()->first();
        $aboutus = HomeAboutUs::get()->first();
        $timing = SchoolTiming::get()->first();
        $agespecifics = HomeAgeSpecific::get()->all();
        $latest_updates = EventNoticeNews::where('status','Active')->where('type','Announcement')->get()->all();
        $newss = EventNoticeNews::where('status','Active')->where('type','News')->get()->all();
        return view('frontend.index',compact('timing','herosection','counter','aboutus','agespecifics','latest_updates','newss'));
    }

    public function vision(){
        return view('frontend.vision');
    }

    public function message(){
        return view('frontend.principal_massage');
    }
    public function choose(){
        $tabs = Tab::where('type','WhyChooseUs')->where('status','Active')->get()->all();
        $galleries = WhyChooseUs::where('status','Active')->get()->all();
        return view('frontend.choose_us',compact('tabs','galleries'));
    }

    public function team(){
        return view('frontend.team');
    }

    public function curriculam(){
        return view('frontend.curriculam');
    }
    public function calender(){
        return view('frontend.calender');
    }
    public function campus(){
        $tabs = Tab::where('type','Campus')->where('status','Active')->get()->all();
        $galleries = Campus::where('status','Active')->get()->all();
        return view('frontend.campus',compact('tabs','galleries'));
    }
    public function event(){
        $events = EventNoticeNews::where('status','Active')->where('type','Event')->get()->all();
        return view('frontend.event',compact('events'));
    }

    public function eventDetails(string $id)
    {
        $event = EventNoticeNews::findorFail($id);
        return view('frontend.details',compact('event'));
    }

    public function gallery(){
        $tabs = Tab::where('type','Gallery')->where('status','Active')->get()->all();
        $galleries = Gallery::where('status','Active')->get()->all();
        return view('frontend.gallery',compact('tabs','galleries'));
    }

    public function addmission_procedure(){
        $addmission = AddmissionProcedure::get()->first();
        $grades = Grade::where('status','Active')->get()->all();
        return view('frontend.admission_procedure',compact('addmission','grades'));
    }

    public function fees(){
        $fee = SchoolFee::get()->first();
        return view('frontend.fees',compact('fee'));
    }

    public function how_to_apply(){
        return view('frontend.layouts.how_applay');
    }

    public function applay_online(){
        return view('frontend.applay_online');
    }

    public function online_payment(){
        $payment = OnlinePayment::get()->first();
        return view('frontend.online_payment',compact('payment'));
    }

    public function contuct(){
        $branches = Branch::where('status','Active')->get()->all();
        return view('frontend.contuct',compact('branches'));
    }

    public function notice(){
        $events = EventNoticeNews::where('status','Active')->where('type','Notice')->get()->all();
        return view('frontend.notice', compact('events'));
    }

    public function book(){
        $book = TransportCafeteriaBook::findorFail(3);
        return view('frontend.book',compact('book'));
    }

    public function cafeteria(){
        $cafeteria = TransportCafeteriaBook::findorFail(2);
        return view('frontend.cafeteria',compact('cafeteria'));
    }
    public function transport(){
        $transport = TransportCafeteriaBook::findorFail(1);
        return view('frontend.transport',compact('transport'));
    }

    public function ielts(){
        return view('frontend.ielts');
    }

    public function summer_camp(){
        $summer = Camp::get()->first();
        return view('frontend.summer_camp',compact('summer'));
    }

    public function winter_camp(){
        $winter = Camp::get()->last();
        return view('frontend.winter_camp',compact('winter'));
    }

    public function achivement(){
        $achievements = Achievement::where('status','Active')->get()->all();
        return view('frontend.achivement',compact('achievements'));
    }
    public function polices(){
        $policy = Policy::get()->first();
        return view('frontend.policy',compact('policy'));
    }

    public function facilities(){
        $facility = Facility::get()->first();
        return view('frontend.facility',compact('facility'));
    }

    public function tour_request(){
        return view('frontend.tour');
    }

    public function login(){
        return view('frontend.login');
    }
}
