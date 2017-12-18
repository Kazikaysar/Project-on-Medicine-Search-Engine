<?php

namespace App\Http\Controllers;

use App\AddMedicine;
use App\AddSyndrome;
use App\Medicine;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;

class MedicineController extends Controller
{
   public function getIndex($id){
         $add_medicine = AddMedicine::find($id);     
        return view('medicine.index')->withAddMedicine($add_medicine);
    }
    
    

    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'syndrome_id'    => 'required',
                
            ));
        
       


        // store in the database
        $medicine = new Medicine;

        $medicine->syndrome_id = $request->syndrome_id;
        $medicine->save();

        return Redirect::to('medicine');
    }
}
