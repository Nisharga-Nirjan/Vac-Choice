<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\inventory;
use App\Models\hospital;
use Session;


class SearchController extends Controller
{


    public function searchVaccine(Request $request)
    {
        $query = $request->input('query');
        
        $results = inventory::where('vac_name', 'like', '%' . $query . '%')->where('quantity', '>', '0')->distinct('vac_name')->pluck('vac_name');

        
        if (count($results) == 0){
            return back()->with('fail', 'Vaccine Not Available');
        }
        else{
            return view('vaccine_results', compact('results'));
        }
        
    }


    public function searchHospital(Request $request)
    {
        $query = $request->input('query');
        $selected_vaccine = session()->get('sVaccine');
        $result1 = inventory::where('vac_name', '=', $selected_vaccine)->distinct('h_id')->pluck('h_id');
        $results = array();

        foreach($result1 as $i){
            $result2[] = hospital::where('h_id','=',$i)->where('name', 'like', '%' . $query . '%')->pluck('name')->first();

        }
        foreach($result2 as $i){
            if (!is_null($i)){
                $results[] = $i;
            }

        }

        if (count($results) == 0){
            return redirect('book-vaccine')->with('fail', 'Hospital Not Available');
        }
        else{
            return view('hospital_results', compact('results'));
        }
        
    }
}
