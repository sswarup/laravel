<?php
namespace App\Http\Controllers;

use Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function contact(){
        return view('page.contact');
    }
    
    public function about(){
        $name = 'Swarup';
        return view('page.about',compact('name'));
    }
    
    public function create(){
        $input = Request::all();
        return $input;
    }
}
?>