<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ShopController extends Controller
{
    public function index(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->menu();
      $data['typeList']=$this->typeList();
      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('index',$data);
      }else{
        return redirect('login');
      }
    }
    
    public function menu(){
      $link1=url('/shop');
      $link2=url('basket');

      return"
        <h2>::ร้านค้าออนไลน์::</h2>
        <p>
        [<a href='$link1'>หน้าแรก</a>]
        [<a href='$link2'>ตะกร้าสินค้า</a>]
        </p>";
    }
    public function typeList(){
      $sql="select*from tb_type";
      $result=DB::select($sql);

      $data="<center><b>ประเภทสินค้า</b></center>";
      $data.="<ul>";

      foreach ($result as $row){
        $id_type=$row->id_type;
        $name_type=$row->name_type;

        $link1=url('product/type/'.$id_type);
        $data.="<li><a href='$link1'>$name_type</a></li>";
      }
      $data.="</ul>";
      return $data;
    }
}
