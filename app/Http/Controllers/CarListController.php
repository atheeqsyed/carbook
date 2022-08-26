<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarList;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

class CarListController extends Controller
{
public function index(){
    return view('welcome', ['listcars'=> CarList::where('is_booked', 0)->get()]);
}
public function bookComplete(Request $request, $id){
    $listcars = CarList::find($id);
    $listcars->is_booked=1;
    $listcars->driverName =$request->driverName ;
    $listcars->booked_at= date('Y-m-d');
    $listcars->save();

    return redirect('/');

}

    public function bookComplete1(Request $request ){
        $inputid= $request->yyy;
        $listcars = CarList::find($request->id);
        $listcars->is_booked=1;
        $listcars->driverName ="Submitted from Postman";
        $listcars->booked_at= date('Y-m-d');
        $listcars->save();
        return ["status"=> "Successfully updated!"];

    }


public function getXyz(){
    return ["sdd"=>'test'];
}

public function getCarsList(){
    //return CarList::all();
   // return $json = json_decode(CarList::all('id', 'name', 'is_booked'), true);
    $json = json_decode(CarList::all(),true);
    return $json;
}


/*public function colorChange($id){

    $listcars = CarList::find($id);

    return redirect('/');
}*/

    public function saveItem(Request $request){

        $newListItem = new CarList ;
        $newListItem->name =$request->listcars;
        $newListItem->is_booked=0;
        $newListItem->save();

        return redirect('/');
    }
}
