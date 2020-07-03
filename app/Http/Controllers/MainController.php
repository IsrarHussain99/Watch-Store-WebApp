<?php

namespace App\Http\Controllers;

use App\Watch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\Welcome;


class MainController extends Controller
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
        $Watches = Watch::all();
        $User = User::all();
        return view('home',compact('Watches'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $Watch = new Watch();
        $Watch->Watch_price = $request->Watch_price;
        $Watch->Watch_year = $request->Watch_year;
        $Watch->Watch_color = $request->Watch_color;
        $Watch->Watch_company = $request->Watch_company;
        $Watch->Watch_type = $request->Watch_type;
        $Watch->created_by = Auth::user()->id;
        $Watch->image_path = $request->image_path;
        $Watch->save();
        return redirect()->route('home')->with('status', 'Data Saved Successfully.');

    }

    public function edit($id)
    {
        $Watch = Watch::find($id);
        return view('edit',compact('Watch'));
    }

    public function update(Request $request)
    {
        $Watch = Watch::find($request->id);
        $Watch->Watch_price = $request->Watch_price;
        $Watch->Watch_year = $request->Watch_year;
        $Watch->Watch_color = $request->Watch_color;
        $Watch->Watch_company = $request->Watch_company;
        $Watch->Watch_type = $request->Watch_type;
        $Watch->created_by = Auth::user()->id;
// checks if image path to avoid error.
        if (empty($request->image_path)) {
            //do nothing

        } else {
          //if image path not empty then get new image path.
        $Watch->image_path = $request->image_path;
        }
        $Watch->save();
        return redirect()->route('home')->with('status', 'Watch information updated successfully.');

    }


    public function accountEdit($id)
    {
        $User = User::find($id);
        return view('accountEdit',compact('User'));
    }


    public function UpdateUserAccount(Request $request)
    {
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->email = $request->email;
        if (empty($request->profile_image_path)) {
              $User->profile_image_path = 'profileicon.png';
        } else {
          //if image path not empty then get new image path.
        $User->profile_image_path = $request->profile_image_path;
        }
        $User->save();
        return redirect()->route('home')->with('status', 'User Account information updated successfully.');

    }
    public function search(Request $request)
    {
        $Watches = Watch::where('Watch_company','LIKE','%'.$request->Watch_company.'%')
            ->where('Watch_price','LIKE','%'.$request->Watch_price.'%')
            ->where('Watch_year','LIKE','%'.$request->Watch_year.'%')
            ->where('Watch_color','LIKE','%'.$request->Watch_color.'%')
            ->where('Watch_type','LIKE','%'.$request->Watch_type.'%')
            ->get();
        return view('search',compact('Watches'));

    }

    public function delete($id)
    {
        $Watch = Watch::find($id);
        $Watch->deleted_at = Carbon::now();
        $Watch->save();
        return redirect()->route('home')->with('status', 'Data Removed Successfully.');
    }

    public function add($id)
    {
        $Watch = Watch::find($id);
        $Watch->InCart = '1';
          $Watch->save();
          return redirect()->route('home')->with('status', 'Added to Cart');

    }
    public function remove($id)
    {
        $Watch = Watch::find($id);
        $Watch->InCart = '0';
          $Watch->save();
        return redirect()->route('home')->with('status', 'Remove from Cart');
    }

    public function sendmail(){
   $user = Auth::user();
   \Mail::to($user)->send(new Welcome);
   return redirect()->home();
    // return redirect()->route('home')->with('status', 'Email Sent');
}


}
