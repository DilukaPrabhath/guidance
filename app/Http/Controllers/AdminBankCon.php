<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class AdminBankCon extends Controller
{
    public function create(){
        $data = Bank::all();
        return view('admin.bank.create',compact('data'));
       }

       public function store(Request $request){

        $this->validate(request(), [

            'bank_name'          => 'required',
            'status'         => 'required',
            ]);

        $evet = new Bank();

        $evet->bank_name = $request->bank_name;
        $evet->status = $request->status;
        $evet->save();

        $notification = array(
            'message' => 'Bank Created Successfully!',
            'alert-type' => 'Success'
        );

        return redirect('admin/banks')->with($notification);

    }

       public function edit($id){
        $bnk = Bank::find($id);
        $data = Bank::all();
        return view('admin.bank.edit',compact('data','bnk'));
       }


       public function update(Request $request,$id){

        $this->validate(request(), [

            'bank_name'          => 'required',
            'status'         => 'required',
            ]);

        $evet = Bank::find($id);

        $evet->bank_name = $request->bank_name;
        $evet->status = $request->status;
        $evet->save();

        $notification = array(
            'message' => 'Bank Updated Successfully!',
            'alert-type' => 'Success'
        );

        return redirect('admin/banks')->with($notification);

    }


       //___Validation__________________________________________________________________________________________________________


       public function validatebank(Request $request){
        {

            $bank = Bank::where('bank_name', $request->bank_name)->first('bank_name');
               if($bank){
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
