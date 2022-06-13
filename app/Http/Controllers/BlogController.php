<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;

class BlogController extends Controller
{
  

    public function About()
    {
        return view('Fontent.About');
    }

    public function Contact()
    {
        return view('Fontent.Contact');
    }

    
    public function Home()
    {
        return view('Fontent.Home');
    }

    public function Department()
    {
        return view('Fontent.Department');
    }

    public function Doctore()
    {
        return view('Fontent.Doctore');
    }

    public function Service()
    {
        return view('Fontent.Service');
    }

    public function SingleBlog()
    {
        return view('Fontent.SingleBlog');
    }

    public function SingleDepartment()
    {
        return view('Fontent.SingleDepartment');
    }

    public function Create()
    {
        return view('Fontent.Create');
    }

    public function View(Request $request)
    {
        //dd($request->input());
        $data['Name']=$request->name;
       $data['City']=$request->city;
       $data['Country']=$request->country;

       BlogModel::create($data);

  

    // $client = new Client;
    // $client->Name = $request->name;
    // $client->City = $request->city;
    // $client->Counry = $request->country;
    // $client->save();
 
     $y= BlogModel::all();
     return view('Fontent.view',['x'=>$y]);
     
//git config --global user.name “uttamkumar0036”
//git config --global user.email “uttamkumar0036@gmail.com”
    }
}
