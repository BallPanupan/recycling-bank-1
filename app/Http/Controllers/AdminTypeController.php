<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Requests;

use App\members;

class adminTypeController extends Controller
{

    public function all(){
    //$data['result']=DB::select("select * from members");
    //$data['result']=DB::table('members')->get();
    $data['result'] = Members::all();
      return view ('member_all',$data);
    }

public function show($id){
  //$data['result']=DB::select("select * from members where id=?",[$id]);
  //$data['result']=DB::table('members')->where('id',$id)->get();
  $data['result']=Members::find($id);

  return view('member_show',$data);
}

      public function type(request $request){
        $sql="select * from tb_type";
        $data['result']=DB::select($sql);


        if($request->session()->get('check')=="passed"){
           $data['username']=$request->session()->get('username');

          return view('admin.type',$data);
        }else{
          return redirect('login');
        }
      }

      public function update($id){

        $sql="select * from tb_type where id_type='$id'";
        $data['result']=DB::select($sql);

        return view('admin.type_update',$data);
      }

      public function update2(Request $request){
        $id_type=$request->input('id_type');
        $name_type=$request->input('name_type');
        $price_type=$request->input('price_type');

        //$sql="update tb_type set
        //name_type='$name_type',
        //price_type='$price_type',
        //where id_type='$id_type'";

        DB::update('update tb_type set name_type=?,price_type=? where id_type=?',
      [$name_type,$price_type,$id_type]);

        echo "Update OK! <br/>";
        $link=url('admin/type');
        echo "<a href='$link'> Back </a>";
        }

        public function insert(){
          $sql="select * from tb_type";
          $data['result']=DB::select($sql);

          return view('admin.type_insert',$data);
        }

        public function insert2(Request $request){
          $name_type=$request->input('name_type');
          $price_type=$request->input('price_type');


          $sql="insert into tb_type values(null,
          '$name_type','$price_type')";

          DB::insert($sql);

          echo "Insert OK! <br/>";
          $link=url('admin/type');
          echo "<a href='$link'> Back </a>";
        }

        public function delete($id){
          $sql="delete from tb_type where id_type='$id'";
          DB::delete($sql);

          echo "Delete OK! <br/>";
          $link =url('admin/type');
          echo "<a href='$link'>Back<a/>";
        }
}
