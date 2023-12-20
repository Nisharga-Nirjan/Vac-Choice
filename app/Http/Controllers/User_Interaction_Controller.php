<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Session;
use App\Models\users;
use App\Models\inventory;
use App\Models\hospital;
use App\Models\vaccine_history;
use Hash;

class User_Interaction_Controller extends Controller
{

    public function vacHistory(){
        $id = session()->get('loginId');
        
        $current_id = vaccine_history::where('id','=',$id)->distinct('id')->pluck('id');
        if (count($current_id) == 0){
            return redirect('user-dashboard')->with('fail','You Have Not Booked Any Vaccines Yet');
        }
        
        $combination_id = vaccine_history::where('id','=',$current_id)->pluck('comb_id');
        
        foreach($combination_id as $c){
            $t[] = inventory::where('comb_id','=',$c)->pluck('vac_name')->first();
            $h_id = inventory::where('comb_id','=',$c)->pluck('h_id')->first();
            $t[] = hospital::where('h_id','=',$h_id)->pluck('name')->first();
            $t[] = inventory::where('comb_id','=',$c)->pluck('date')->first();
            $t[] = vaccine_history::where('id','=',$current_id)->pluck('fpayment')->first();
            $t[] = vaccine_history::where('id','=',$current_id)->pluck('fvaccine')->first();

            $total[] = $t;

            $t = array();
        }

        
        return view('vaccine_history', compact('total'));
        
    }

    public function userDetails(){

        $id = session()->get('loginId');
        $current_user = users::where('id','=',$id)->select(['nid','email', 'phone', 'fname','lname','address'])->first();

        return view('user_details', compact('current_user'));

    }

    public function editUserDetails(){

        $id = session()->get('loginId');
        $current_details = users::where('id','=',$id)->select(['nid','email', 'phone', 'fname','lname','address'])->first();

        return view('edit_user_details', compact('current_details'));

    }

    public function confirmUserDetailsEdit(Request $request){
        
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'phone'=>'required|digits:11|unique:users',
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required'
        ]);

        $id = session()->get('loginId');
        $user = users::where('id','=',$id)->first();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->address = $request->address;
        $user->save();

        return redirect('user-dashboard')->with('success', "Info Has Been Updated");


    }


    public function bookVaccine(){
        $vaccines = inventory::where('quantity', '>', '0')->distinct('vac_name')->pluck('vac_name');
        return view('show_vaccines', compact('vaccines'));

    }

    public function selectedVaccine(Request $request){
        $vaccine = $request->input('value');
        session()->put('sVaccine', $vaccine);
        $h_ids = inventory::where('vac_name', '=', $vaccine)->distinct('h_id')->pluck('h_id');
        
        foreach($h_ids as $id){
            $hospitals[] = hospital::where('h_id', '=', $id)->pluck('name')->first();

        }

        return view('show_hospitals', compact('hospitals'));
    }

    public function selectedHospital(Request $request){
        $hospital = $request->input('value');
        $selected_vaccine = session()->get('sVaccine');
        $h_id = hospital::where('name','=',$hospital)->pluck('h_id')->first();
        session()->put('sHospitalId', $h_id);
        $h_dates = inventory::where('h_id', '=', $h_id)->where('vac_name','=',$selected_vaccine)->distinct('date')->pluck('date');

        return view('show_dates', compact('h_dates'));
    }

    public function selectedDate(Request $request){
        $date = $request->input('date');
        session()->put('sDate', $date);
        $selected_vaccine = session()->get('sVaccine');
        
        $selected_h_id = session()->get('sHospitalId');
        $combination_id = inventory::where('vac_name','=',$selected_vaccine)->where('h_id','=',$selected_h_id)->where('date','=',$date)->pluck('comb_id')->first();

        $inventory = inventory::where('comb_id','=',$combination_id)->first();

        $q = $inventory->quantity;
        if ($q != 0){
            $q = $q - 1;
            $inventory->quantity = $q;
            $inventory->save();

            $vaccine_history = new vaccine_history();
            $vaccine_history->id = session()->get('loginId');
            $vaccine_history->comb_id = $combination_id;
            $vaccine_history->fpayment = 'Not Paid';
            $vaccine_history->fvaccine = 'Not Taken';
            $vaccine_history->save();
            return redirect('user-dashboard')->with('success', 'Request Successful');


        }
        else{
            Session::forget('sVaccine');
            Session::forget('sHospitalId');
            Session::forget('sDate');
            return redirect('book-vaccine')->with('fail', 'Vaccine not available');
        }


    }
    

        

}
