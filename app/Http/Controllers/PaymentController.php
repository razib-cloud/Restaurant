<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_PaymentController.php" was generated by ProBot AI.
* Date: 2/21/2025 12:58:38 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Payment_Method;
use App\Models\Payment_Status;

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
		return view("pages.erp.payment.create",["orders"=>Order::all(),"customers"=>Customer::all(),"payment_methods"=>payment_method::all(),"payment_statuss"=>Payment_Status::all()]);
	}
	public function store(Request $request){
		//Payment::create($request->all());
		$payment = new Payment;
		$payment->order_id=$request->order_id;
		$payment->customer_id=$request->customer_id;
		$payment->payment_method_id=$request->payment_method_id;
		$payment->payment_status_id=$request->payment_status_id;
		$payment->amount=$request->amount;
		$payment->transaction_id=$request->transaction_id;
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
		return view("pages.erp.payment.edit",["payment"=>$payment,"orders"=>Order::all(),"customers"=>Customer::all(),"payment_methods"=>Payment_Method::all(),"payment_statuss"=>Payment_Status::all()]);
	}
	public function update(Request $request,Payment $payment){
		//Payment::update($request->all());
		$payment = Payment::find($payment->id);
		$payment->order_id=$request->order_id;
		$payment->customer_id=$request->customer_id;
		$payment->payment_method_id=$request->payment_method_id;
		$payment->payment_status_id=$request->payment_status_id;
		$payment->amount=$request->amount;
		$payment->transaction_id=$request->transaction_id;
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
