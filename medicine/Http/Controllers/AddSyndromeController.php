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

class AddSyndromeController extends Controller
{
   public function getIndex(){
        return view('add_syndrome.index');
    }
    public function show(){
        $add_syndrome = AddSyndrome::all();       
        return view('medicine.index')->withAddSyndrome($add_syndrome);
    }
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'syndrome_name'    => 'required|max:255',
                
            ));
        
       


        // store in the database
        $add_syndrome = new AddSyndrome;

        $add_syndrome->syndrome_name = $request->syndrome_name;
        $add_syndrome->save();

        return Redirect::to('addSyndrome');
    }
}
