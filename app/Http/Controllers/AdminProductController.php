<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminProductController extends Controller
{
    public function __construct()
    {
      $this->admin=new AdminController;
    }
    public function index(){
      $sql="select * from tb_products";
      $data['result']=DB::select($sql);
      $data['menu']=$this->admin->menu();

      return view('admin.product',$data);
    }
    public function delete($id){
      $sql="delete from tb_products where id_prd='$id'";
      DB::delete($sql);

      echo "Delete OK! <br/>";
      $link =url('admin/product');
      echo "<a href='$link'>Back<a/>";
    }
    public function insert(){
      $sql="select * from tb_type";
      $data['result']=DB::select($sql);
      $data['menu']=$this->admin->menu();

      return view('admin.product_insert',$data);
    }
    public function insert2(Request $request){
      $name_prd=$request->input('name_prd');
      $detail_prd=$request->input('detail_prd');
      $price_prd=$request->input('price_prd');
      $ref_id_type=$request->input('ref_id_type');

      $photo_prd=$request->file('photo_prd');
      $filename=time().".".$photo_prd->extension();
      $photo_prd->move('uploads',$filename);

      $sql="insert into tb_products values(null,
      '$name_prd','$detail_prd','$price_prd',
      '$filename','$ref_id_type')";

      DB::insert($sql);

      echo "Insert OK! <br/>";
      $link=url('admin/product');
      echo "<a href='$link'> Back </a>";
    }
    public function update($id){

      $sql="select * from tb_products where id_prd='$id'";
      $data['result']=DB::select($sql);

      $sql="select * from  tb_type";
      $data['result2']=DB::select($sql);

      $data['menu']=$this->admin->menu();
      return view('admin.product_update',$data);
    }
    public function update2(Request $request){

      $id_prd=$request->input('id_prd');
      $name_prd=$request->input('name_prd');

      $detail_prd=$request->input('detail_prd');
      $price_prd=$request->input('price_prd');
      $photo_prd2=$request->input('photo_prd2');
      $ref_id_type=$request->input('ref_id_type');

      if($request->hasFile('photo_prd')){
        $photo_prd=$request->file('photo_prd');
        $filename=time().".".$photo_prd->extension();
        $photo_prd->move('uploads',$filename);
      }else{
        $filename=$photo_prd2;
      }
      $sql="update tb_products set
      name_prd='$name_prd',
      detail_prd='$detail_prd',
      price_prd='$price_prd',
      photo_prd='$filename',
      ref_id_type='$ref_id_type'
      where id_prd='$id_prd'";

      DB::update($sql);

      echo "Update OK! <br/>";
      $link=url('admin/product');
      echo "<a href='$link'> Back </a>";
      }
    }
