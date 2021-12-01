<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminActiviSetCon extends Controller
{
    public function index(){
        return view('admin.activity.index');
       }

       public function create(){
        $data = Activity::all();
        return view('admin.activity.create',compact('data'));
       }

       public function store(Request $request){

        $this->validate(request(), [

            'activity'  => 'required|unique:activities',
            'status'    => 'required',
            'price'     => 'required',
            ]);

        $act = new Activity();

        $act->activity = $request->activity;
        $act->status   = $request->status;
        $act->price    = $request->price;

        $act->save();

        $notification = array(
            'message' => 'Activity Created Successfully!',
            'alert-type' => 'Success'
        );

        return redirect('admin/activities/create')->with($notification);
       }

       public function view(){
        return view('admin.activity.view');
       }

       public function edit($id){
        $tbl = Activity::all();
        $data = Activity::find($id);
        return view('admin.activity.edit',compact('data','tbl'));
       }

       public function update(Request $request, $id){

        $this->validate(request(), [

            'activity'  => ['required', 'max:100', Rule::unique('activities')->ignore($request->id)],
            'status'    => 'required',
            'price'     => 'required',
            ]);

        $act = Activity::find($id);

        $act->activity = $request->activity;
        $act->status   = $request->status;
        $act->price    = $request->price;

        $act->save();

        $notification = array(
            'message' => 'Activity Updated Successfully!',
            'alert-type' => 'Success'
        );

        return redirect('admin/activities/create')->with($notification);
       }




       //_____Validation____________________________________________________________________________________________


       //name
       public function validateactivity(Request $request){
        {

            $institute = Activity::where('activity', $request->activity)->first('activity');
               if($institute){
                 $return =  false;
                }
                else{
                 $return= true;
                }
                echo json_encode($return);
                exit;
           }
       }



}
