<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_Model\CoursesModel;

class CoursesController extends Controller
{

    public function Courses_Form()
    {
        return view('Admin/Courses/Form');
    }
    public function Courses_List()
    {
        $Send_Courses_data = CoursesModel::all();
        return view('Admin/Courses/List',compact('Send_Courses_data'));
    }

    public function Courses_Submit_Validation(Request $request)
    {

        $request->validate([
            'Photo' => 'required',
            'Title' => 'required',
            'Description' => 'required',
        ]);
        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $photoName = rand(10000000, 90000000) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('assers/Admin-Photo'), $photoName);
        }
        $Edd_Form_data = new CoursesModel();
        $Edd_Form_data->Title = $request->get('Title');
        $Edd_Form_data->Description = $request->get('Description');
        $Edd_Form_data->save();
        return redirect('/Courses/List')->withSuccess('your Data hes been Successfully Edd');
    }
}
