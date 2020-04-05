<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
use Carbon\Carbon;

class crudController extends Controller
{

    public function index()
    {
        $employers = Crud::latest()->get();
        return view('index',compact('employers'));
    }

    public function store(Request $request)
    {
        Crud::insert([
          'name' => $request->name,
          'age' => $request->age,
          'position' => $request->position,
          'salery' => $request->salery,
          'created_at' => Carbon::now()
        ]);

        return response()->json([
          'message' => "Data Inserted Successfully.."
        ]);


    }


    public function edit_show($id)
    {
        $item = Crud::find($id);
        return response()->json([
          'data' => $item
        ]);
    }


    public function updateData(Request $request, $id)
    {
      Crud::find($id)->update([
        'name' => $request->name,
        'age' => $request->age,
        'position' => $request->position,
        'salery' => $request->salery,
        'updated_at' => Carbon::now()
      ]);
      return response()->json([
        'data' => "Data Updated Successfully.."
      ]);
    }

    public function deleteData($id){
      Crud::find($id)->delete();
      return response()->json([
        'data' => "Data Deleted Successfully.."
      ]);
    }

}
