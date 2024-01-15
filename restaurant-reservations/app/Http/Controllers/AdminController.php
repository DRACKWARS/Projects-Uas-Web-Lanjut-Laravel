<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Reservation;
Use App\Models\Category;
use App\Models\Foodchef;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data=food::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request , $id)
    {
        $data=food::find($id);
        $image =$request->image;
        $imagename =time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu",compact("data"));
    }

    public function upload(Request $request)
    {
        $data = new Food;
        $image =$request->image;
        $imagename =time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;

        $data->save();
        return redirect()->back();
    }

    public function categories()
    {
        $data = category::all();
        return view("admin.categories",compact("data"));
    }

    public function uploadcategories(Request $request)
    {
        $data = new category;
        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function deletecategories($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data = new Reservation;
        $data->name=$request->name;
        $data->category_id=$request->category_id;
        $data->email=$request->email;
        $data->chef_id=$request->chef_id;
        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->guest=$request->guest;
        $data->message=$request->message;

        $data->save();
        $categories = Category::all();
        $foodchefs = foodchef::all();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data=reservation::all();
        return view("admin.adminreservartion",compact("data"));
    }

    public function viewcheaf()
    {
        $data = foodchef::all();
        return view("admin.admincheaf",compact("data"));
    }

    public function deletechef($id)
    {
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatechef(Request $request , $id)
    {
        $data=foodchef::find($id);

        return view("admin.updatechef",compact("data"));
    }

    public function updatefoodchef(Request $request , $id)
    {
        $data=foodchef::find($id);
        $image =$request->image;
        $imagename =time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->spesiality=$request->spesiality;
        $data->save();
        return redirect()->back();
    }

    public function uploadchef(Request $request)
    {
        $data = new foodchef();
        $data->name=$request->name;
        $data->spesiality=$request->spesiality;
        $image =$request->image;
        $imagename =time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;

        $data->save();
        return redirect()->back();
    }
}
