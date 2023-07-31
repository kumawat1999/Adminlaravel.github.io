<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_Model\User_Model;

class UserController extends Controller
{
    public function User_Function()
    {
        return view('Admin/User/Form');
    }
    public function User_List()
    {
        $Listing_data = User_Model::paginate(3);
        return view('Admin/User/List', compact('Listing_data'));
    }


    public function Form_Submit_validation(Request $request)
    {

        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Gender' => 'required',
            'Address' => 'required',
            'Password' => 'required',

        ]);
        $ress = new User_Model();
        $ress->Name = $request->get('Name');
        $ress->Email = $request->get('Email');
        $ress->Gender = $request->get('Gender');
        $ress->Address = $request->get('Address');
        $ress->Password = $request->get('Password');
        $ress->save();
        return redirect('UserList')->withSuccess('Your Data hes been Successfully Inserted.... ');
    }

    public function User_Edit($id){
            $Edit_data=User_Model::where('id',$id)->first();
            return view('Admin/User/Edit',compact('Edit_data'));
    }
    public function User_Update( Request $request, $id){

        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Gender' => 'required',
            'Address' => 'required',
            'Password' => 'required',

        ]);
        $ress=User_Model::where('id',$id)->first();
        $ress->Name = $request->get('Name');
        $ress->Email = $request->get('Email');
        $ress->Gender = $request->get('Gender');
        $ress->Address = $request->get('Address');
        $ress->Password = $request->get('Password');
        $ress->save();
        return redirect('UserList')->withSuccess('Your Data hes been Successfully Updated.... ');

    }

    public function User_Delete($id){
        $Edit_data=User_Model::where('id',$id)->first();
        $Edit_data->delete();
        return redirect('UserList')->withSuccess('Your Data hes been Successfully Deleted.... ');

    }
}
