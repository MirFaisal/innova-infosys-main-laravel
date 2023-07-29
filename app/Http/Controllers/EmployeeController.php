<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use File;
use Illuminate\Http\Request;



class EmployeeController extends Controller
{
    //
    function index()
    {
        $employees = Employee::all();
        return view('employee-show', compact('employees'));
    }
    function create()
    {
        return view('employee-add');
    }

    function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'public_id' => 'required',
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'photo' => 'required|mimes:png,jpg',
        //     'blood_group' => 'required',
        //     'emergency_contact' => 'required',
        //     'erbn' => 'required',
        //     'department' => 'required',
        //     'current_position' => 'required',
        //     'joining_date' => 'required',
        //     'id_card_issue_date' => 'required',
        //     'id_card_expiry_date' => 'required',
        //     'status' => 'required',
        // ]);

        $imageName = '';

        if ($thumbnail = $request->file('photo')) {
            $imageName = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('employee/images', $imageName);
        }

        $employee = new Employee();
        $employee->public_id = $request->public_id;
        $employee->display_name = $request->display_name;
        $employee->legal_name = $request->legal_name;
        $employee->email = $request->email;
        $employee->dob = $request->dob;
        $employee->nid_card_number = $request->nid_card_number;
        $employee->phone = $request->phone;
        $employee->photo = $imageName;
        $employee->blood_group = $request->blood_group;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->erbn = $request->erbn;
        $employee->department = $request->department;
        $employee->current_position = $request->current_position;
        $employee->joining_date = $request->joining_date;
        $employee->ending_date = $request->ending_date;
        $employee->id_card_issue_date = $request->id_card_issue_date;
        $employee->id_card_expiry_date = $request->id_card_expiry_date;
        $employee->status = $request->status;
        $employee->save();

        return redirect()->back();
    }

    function updateIndex($public_id)
    {
        $employee = Employee::where('public_id', $public_id)->first();
        // dd($employee);
        return view('update-employee', compact('employee'));
    }
    function update(Request $request, $public_id)
    {

        $employee = Employee::where('public_id', $public_id)->first();

        $imageName = '';
        $oldImage = 'thumbnails/image' . $employee->photo;
        if ($thumbnail = $request->file('photo')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $imageName = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('thumbnails/image', $imageName);
        } else {
            $imageName = $employee->thumbnail;
        }

        // dd($request->all());
        $employee->public_id = $request->public_id;
        $employee->display_name = $request->display_name;
        $employee->legal_name = $request->legal_name;
        $employee->email = $request->email;
        $employee->dob = $request->dob;
        $employee->nid_card_number = $request->nid_card_number;
        $employee->phone = $request->phone;
        $employee->photo = $imageName;
        $employee->blood_group = $request->blood_group;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->erbn = $request->erbn;
        $employee->department = $request->department;
        $employee->current_position = $request->current_position;
        $employee->joining_date = $request->joining_date;
        $employee->ending_date = $request->ending_date;
        $employee->id_card_issue_date = $request->id_card_issue_date;
        $employee->id_card_expiry_date = $request->id_card_expiry_date;
        $employee->status = $request->status;
        $employee->save();

        return redirect()->back();
    }
    function publicProfile($public_id)
    {
        $employee = Employee::where('public_id', $public_id)->first();
        // dd($employee);
        return view('employee-profile', compact('employee'));
    }
}