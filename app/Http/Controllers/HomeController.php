<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use App\Http\Requests\StoreParticipantsRequest;
use App\MwApplicant;
use App\MwApplicantAddress;
use App\MwApplicantImageVideo;
use App\TestFile;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use App\Http\Requests\FileValidationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
//        $collect = collect([1,2,3,4,5]);
//        $data =$collect->map(function($value,$key){
//           return $value+2;
//        })->all();
//        dd($data);
//        $users = MwApplicant::where('id',14)->find(13);
//        dd($users);
//        $columns = Schema::getColumnListing('users');
//        dd($columns);
//        $users = User::with('mwApplicantss')->find(24);
//        dd($users);
echo Auth::id();
        $mwApplicant = MwApplicant::query()->where('user_id', Auth::id())->with('user')->first();
        $mwApplicantAddress = MwApplicantAddress::where('user_id', Auth::id())->first();
        $divisions = Division::query()->with('districts')->get();
//        dd($divisions);
        $mwApplicantImageVidoes = mwApplicantImageVideo::query()->first();
//        where('user_id', Auth::id());
//        dd($mwApplicantImageVidoes);
        $data = compact('mwApplicant', 'divisions', 'mwApplicantAddress', 'mwApplicantImageVidoes');

//        echo Auth::id();
//        dd($mwApplicant);
        return view('home', $data);
    }

    function updateRegister(StoreParticipantsRequest $request)
    {

//        dd($request->all());
        $mwApplicant = MwApplicant::UpdateOrCreate(
            ['user_id' => Auth::id()
            ], $request->all()
        );

        $mwApplicantAddress = MwApplicantAddress::UpdateOrCreate(
            ['user_id' => Auth::id()],
            $request->all()
        );

//        $mwApplicantPhoto=
        $mwApplicantImageVideo = MwApplicantImageVideo::UpdateOrInsert([
            ['user_id' => Auth::id()],
            $request->all()
        ]);
        dd($mwApplicantImageVideo);


        return redirect()->back()->with('success', 'Data saved');
//      return redirect()->back()->with(['mwApplicant' => $mwApplicant]);
    }


    public function getDistrict($division_id)
    {
        return District::query()->where('division_id', $division_id)->get();

    }

    public function uploadTest()
    {
        return view('upload_test');
    }

    public function uploadTestStore(Request $request)
    {
//        $input = $request->all();
//        dd($input);
//        $request->validate([
//           'upload_file' => 'required|mimes:jpg,jpeg'
//        ]);
//        $request->get
//        dd($request->all());
//        if ($request->hasFile('upload_file')) {
//
//            $file = $request->file('upload_file');
////            dump($file->extension());
////            $file->getClientOriginalExtension();
////            echo $request->file('upload_file')->getClientOriginalExtension() ;
////            echo $request->file('uploaded_file')->getClientOriginalName();
////            $path= '/upload';
//            $fileName = time() . '.' . $request->file('upload_file')->getClientOriginalExtension();
////            $name = Str::random(10).'.'.$file->getClientOriginalExtension();
//////          echo $file->getSize();
////            $fileName = $file->getClientOriginalName();
////            $name2 = time();
//            Storage::disk('public')->put('user/' . $fileName, File::get($file));
////            dd(Storage::disk('public')->get('images/1653197978.jpg'));
////            $file->storeAs('/upload',$fileName);
////            $link = '/upload/' . $fileName;
////            $result = DB::table('test_file')->insertGetId([
////                'path' => $link,
////                'type' => $request->file('upload_file')->getClientOriginalExtension(),
////            ]);
//
////            $result = TestFile::create([
////                'path' => $fileName,
////                'type' => $request->file('upload_file')->getClientOriginalExtension(),
////            ]);
////        }
//
//            $a = new TestFile();
//            $a->path = $fileName;
//            $a->type = $request->file('upload_file')->getClientOriginalExtension();
//            $a->save();
//
////        $last = DB::table('test_file')->latest('id')->first();
//
//            dd($a->id);
//
//            dd($request->all());
//            return redirect()->back()->withInput();
//        }

        if ($request->hasFile('upload_file')) {
            $request->validate([
                'upload_file' => 'required|mimes:jgp,jpeg,png'
            ]);

            $originaName = $request->file('upload_file')->getClientOriginalName();
            $newName = time() . '.' . $request->file('upload_file')->getClientOriginalExtension();
//            dd($newName);
//            $request->file('upload_file')->storeAs('/public',$newName);
//            Storage::disk('public')->put('new_user/', $newName,File::get());
            $resultUpload = Storage::disk('public')->put('' . $newName, File::get($request->file('upload_file')));
            if ($resultUpload) {
//                $id = DB::table('test_files')->insertGetId(
//                    [
//                        'path' => $newName,
//                        'type' => '1'
//                    ]
//                );
//                dd($id);
//                $result=TestFile::create([
//                    'path'=>$newName,
//                    'type'=>1
//                ]);
//                dd($result);
                Storage::disk('/public')->put('path', File::get($request->file('upload_file')));
                $file = new TestFile();
                $file->path = $newName;
                $file->type = 1;
                $file->save();

                dd($file->id);


            }
        }


    }

}
