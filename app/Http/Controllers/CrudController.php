<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('create');
    }
//    public function upView()
//    {
//        return view('create');
//    }

    public function insert(Request $request)
    {
//        $crud= Crud::find($id);
        $crud= new Crud();
        $crud->name = $request->input('name');
        $crud->password = $request->input('passw');
        $crud->save();
        return redirect('/create');

    }
   public function read(){
        $pages= Crud::all();
//        return view('readdata',['data'=>$page]);
    // return $pages;
      return view('readdata',compact('pages'));
   }

//   public function update1()
//   {
////       $crud= new Crud;
////       $crud->name=$request->input('name');
////       $crud->password=$request->input('passw');
////       $id = new Crud;
//       return view('create');
////        $crud= Crud::find($id);
////      return  $crud;
////        $crud->save();
//
//   }

//    public function update2(Request $request, $id)
//    {
//               $crud= Crud ::find($id);
////            $id   return $crud;
//       $crud->name=$request->get('name');
//       $crud->password=$request->get('password');
//
//       $crud->save();
//        return redirect('read');
//
//    }

    public function updateView($id)
    {
//       $page= Crud::find($id);
//       return view('update',compact($page));
        $page = Crud::find($id);
//        $pages = Crud::all();
        return view('update',compact('page'));
//        return $page;

    }
    public function update(Request $request){

        $page =Crud::find($request->page_id);
        $page->name = $request->input('name');
        $page->password = $request->input('passw');
        $page->save();

        return redirect('read');

    }
public function delete($id){
     $page= Crud::find($id);
     $page->delete();
     return view('create');
}

}


