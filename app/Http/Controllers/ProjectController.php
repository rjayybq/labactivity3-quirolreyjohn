<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index(){
        return view ('projects.index');
   }
   public function create(){
    return view ('projects.create');
    }   

   public function store(Request $request){
    return $request->all();
    }
    
    public function show(string $id){
        $data['id'] = $id;
        return view ('projects.show',$data);
    }
    public function edit(string $id){
        $data['id'] =$id;
        return view ('projects.edit',$data);
    }
    public function update(Request $request){
        return $request->all();
     }
     public function destroy(string $id){
        return $request->all();
     }

}