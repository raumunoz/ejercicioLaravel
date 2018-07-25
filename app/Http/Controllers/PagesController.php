<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //regresa la vista pages index
        $title ='pagina de indice';
        $valorcito='valor';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    
    public function about(){
        //regresa la vista pages index
        return view('pages.about');
    }
    public function services(){
        //regresa la vista pages index
        $data=array(
            'title'=>'services',
            'services'=>['web design','Programas','SEO']
        );
        return view('pages.services')->with($data);
    }
}
