<?php

namespace App\Http\Controllers;

use App\AddMedicine;
use App\AddSyndrome;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;

class AddMedicineController extends Controller
{
    public function getIndex(){
        $add_syndrome = AddSyndrome::all();       
        return view('add_medicine.index')->withAddSyndrome($add_syndrome);
    }
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'medicine_name'    => 'required|max:255',
                'syndrome_id' => 'required'
            ));
        
       


        // store in the database
        $add_medicine = new AddMedicine;

        $add_medicine->medicine_name = $request->medicine_name;
        $add_medicine->syndrome_id = $request->syndrome_id;
        $add_medicine->save();

        return Redirect::to('addMedicine');
    }
}
