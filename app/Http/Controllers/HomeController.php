<?php

namespace App\Http\Controllers;

use App\Mw_applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //echo "hi";
        return view('home');
    }

    function UpdateRegister(Request $request)
    { //echo Auth::user()->id;
        $request->validate([
            'fname' => "required|max:40",
            'lname' => "required|max:40",
        ], [],
            [
                'fname' => 'First Name',
                'lname' => 'Last Name',

            ]);
//        $participant = Mw_applicant::where('Applicant_Id',Auth::id())->first();
//        dd($participant);

       $a =  Mw_applicant::updateOrCreate([
            'Applicant_Id' => Auth::id()
        ],$request->all());


        dd($a );

//        echo $participant['Applicant_Id'];
//        if($participant['Applicant_Id'] != '')
//        {
//                $participant->where('Applicant_Id','=',$participant['Applicant_Id'])->update
//                ([
//                    $participant['First_Name'] = 'test'
//                ]);
//        }
//        else{
//            $dbField = new Mw_applicant();
//            echo $dbField->Applicant_Id = Auth::user()->id;
//            $dbField->First_Name = $request['fname'];
//            $dbField ->save();
//        }
//        exit;
//    print_r($request->all());

//        print_r($request->all());



    }
}
