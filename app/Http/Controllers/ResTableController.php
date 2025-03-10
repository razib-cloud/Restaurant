<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ResTableController.php" was generated by ProBot AI.
* Date: 3/5/2025 10:53:51 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ResTable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ResTableController extends Controller{
	public function index()
    {
        $restables = ResTable::paginate(10);
        return view("pages.frontend.menu", compact('restables'));
    }
	public function create(){
		return view("pages.erp.restable.create",[]);
	}
	public function store(Request $request){
		//ResTable::create($request->all());
		$restable = new ResTable;
		$restable->table_number=$request->table_number;
		$restable->capacity=$request->capacity;
		$restable->status=$request->status;
date_default_timezone_set("Asia/Dhaka");
		$restable->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$restable->updated_at=date('Y-m-d H:i:s');

		$restable->save();

        return redirect()->route('restables.index')->with('success', 'Created Successfully.');
	}
	public function show($id){
		$restable = ResTable::find($id);
		return view("pages.erp.restable.show",["restable"=>$restable]);
	}
	public function edit(ResTable $restable){
		return view("pages.erp.restable.edit",["restable"=>$restable,]);
	}
	public function update(Request $request,ResTable $restable){
		//ResTable::update($request->all());
		$restable = ResTable::find($restable->id);
		$restable->table_number=$request->table_number;
		$restable->capacity=$request->capacity;
		$restable->status=$request->status;
date_default_timezone_set("Asia/Dhaka");
		$restable->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$restable->updated_at=date('Y-m-d H:i:s');

		$restable->save();

		return redirect()->route("restables.index")->with('success','Updated Successfully.');
	}
	public function destroy(ResTable $restable){
		$restable->delete();
		return redirect()->route("restables.index")->with('success', 'Deleted Successfully.');
	}
}
?>
