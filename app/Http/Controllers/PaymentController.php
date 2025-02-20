<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Transaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class PaymentController extends Controller{
	public function index(){
		$payments = Payment::paginate(10);
		return view("pages.erp.payment.index",["payments"=>$payments]);
	}

	public function create(){
		return view("pages.erp.payment.create",["transactions"=>Transaction::all()]);
	}

	public function store(Request $request){
		//Payment::create($request->all());
		$payment = new Payment;
		$payment->transaction_type=$request->transaction_type;
		$payment->transaction_id=$request->transaction_id;
		$payment->amount_paid=$request->amount_paid;
		$payment->payment_date=$request->payment_date;
date_default_timezone_set("Asia/Dhaka");
		$payment->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$payment->updated_at=date('Y-m-d H:i:s');

		$payment->save();

		return back()->with('success', 'Created Successfully.');
	}


	public function show($id){
		$payment = Payment::find($id);
		return view("pages.erp.payment.show",["payment"=>$payment]);
	}
	public function edit(Payment $payment){
		return view("pages.erp.payment.edit",["payment"=>$payment,"transactions"=>Transaction::all()]);
	}



	public function update(Request $request,Payment $payment){
		//Payment::update($request->all());
		$payment = Payment::find($payment->id);
		$payment->transaction_type=$request->transaction_type;
		$payment->transaction_id=$request->transaction_id;
		$payment->amount_paid=$request->amount_paid;
		$payment->payment_date=$request->payment_date;
date_default_timezone_set("Asia/Dhaka");
		$payment->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$payment->updated_at=date('Y-m-d H:i:s');

		$payment->save();

		return redirect()->route("payments.index")->with('success','Updated Successfully.');
	}

    
	public function destroy(Payment $payment){
		$payment->delete();
		return redirect()->route("payments.index")->with('success', 'Deleted Successfully.');
	}
}
?>
