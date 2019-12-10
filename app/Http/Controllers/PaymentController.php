<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $validation=request()->validate([
            'paymentpicture'=> 'required|max:1000|mimes:jpeg,jpg,png,pdf'],
            [
                'paymentpicture.mimes'=>'Image uploaded must be jpg, png or pdf',
                'paymentpicture.max'=>'Image uploaded should not be more than 1mb'
            ]);


        if(request()->hasFile('paymentpicture')){

     $file = Input::file('paymentpicture');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('payimage'), $name);
        $validation['paymentpicture']= $name;
        };
         $validation['member_id']= auth()->user()->id;

 Payment::create($validation);
 session()->flash('success', 'Payment Proof was successfully added');
 return redirect('/membership/passport-photograph');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {

  if ($payment->id){
    

        $usersImage = public_path("payimage/{$payment->paymentpicture}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }

        $payment->delete();
        session()->flash('success', 'You have successfully deleted a record');
        return back();
    }
}

}
