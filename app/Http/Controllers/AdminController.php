<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\reservation;
use App\Models\Chefs;



class AdminController extends Controller
{
    public function users(){

        $data=User::all();
        return view("admin.users",compact("data"));
    }
       public function deleteusers($id){

        $data=User::find($id);
        $data->delete();
        return redirect()->back();

    }
      public function foodmenu(){
        $data =Food::all();

       return view("admin.foodadmin",compact("data"));
        }

      
      public function upload(Request $request){

        $data= new Food();
        $image = $request->file('image');
         $imagename =time().'.'.$image->getClientOriginalExtension();
          $image->move('foodimage',$imagename);

          $data->image=$imagename;

          $data->title=$request->title;
          $data->price=$request->price;
          $data->description=$request->description;
          $data->save();
          return redirect()->back();

        }
     public function deletefood($id){

        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
   
    }
     public function updatefood($id){

        $data= Food::find($id);
        return view("admin.updatefood",compact("data"));
   
    }
     public function update(Request $request , $id){
    $data=Food::find($id);

    $image=$request->file("image");
     $imagename =time().'.'.$image->getClientOriginalExtension();
          $image->move('foodimage',$imagename);


          $data->title=$request->title;
          $data->price=$request->price;
          $data->description=$request->description;
          $data->save();
          return redirect()->back();
   
    }
     public function reservation(Request $request){

        $data= new reservation();
        
          $data->name=$request->name;
          $data->email=$request->email;
          $data->phone=$request->phone;
          $data->guest=$request->guest;
          $data->date=$request->date;
         // $data->time=$request->time;
          $data->message=$request->message;
          $data->save();
          return redirect()->back();
      }
       public function viewchef(){
          $data=Chefs::all();
          return view("admin.chefadmin",compact("data"));
   
    }
      
     public function uploadchef(Request $request){
    $data=new Chefs();

    $image=$request->file("image");
     $imagename =time().'.'.$image->getClientOriginalExtension();
          $image->move('chefimage',$imagename);
          

          $data->name=$request->name;
          $data->speciality=$request->speciality;
           $data->image=$imagename;
         
          $data->save();
          return redirect()->back();
}
 public function updatechef($id){
    $data=Food::find($id);

   /* $image=$request->file("image");
     $imagename =time().'.'.$image->getClientOriginalExtension();
          $image->move('foodimage',$imagename);


          $data->title=$request->title;
          $data->price=$request->price;
          $data->description=$request->description;
          $data->save();*/
          return view("admin.updatechef",compact("data"));
          
   
    }

    
}

