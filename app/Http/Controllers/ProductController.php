<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ProductController extends Controller
{
    public function __construct(){
      $this->shop = new ShopController;
    }

    public function type($id_type,request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '$id_type'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }


    public function product(){
        $data['header'] =" ";
        $data['content'] =" ";
        $data['footer'] =" ";
      return view('hello',$data);
    }

    public function detail($id){
      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where id_prd = '$id'";
      $data['result']=DB::select($sql);
      return view('product_detail',$data);
    }
    public function BasketInsert($id,Request $request){
      if ($request->session()->exists('items')){
          $items=$request->session()->get('items');
      }else{
        $items=array();
      }

      $sql="select * from tb_products where id_prd='$id'";
      $result=DB::select($sql);

      if(count($result)>0){
        $name_prd=$result[0]->name_prd;
        $price_prd=$result[0]->price_prd;

      if(array_key_exists($id,$items)<> true){
        $items[$id]=['id'=>$id,'name'=>$name_prd,'qty'=>1,'price'=>$price_prd];
        $request->session()->put('items',$items);
      }
      }
      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();
      $data['items']=$items;

      return view('/basketfn',$data);
    }

    public function Basketfn(){

      echo "Insert Ok! <br/>";
      $link=url('/homeuser');
      echo "<a href='$link'>Back </a>";
      return view('/basketfn');
    }

    public function BasketCal(Request $request){

      $data['username']=$request->session()->get('username');
      $complete=$request->input('complete');
      $prd_del=$request->input('prd_del');
      $prd_qty=$request->input('prd_qty');

        if(count($prd_del)==0){
          $prd_del=array();
  }

    $items=$request->session()->get('items');
    $c=0;
    $temp=array();
    foreach($items as $i){
      $id=$i['id'];
      $name=$i['name'];
      $qty=$prd_qty[$c];
      $price=$i['price'];

      if(!in_array($id,$prd_del)){
        $temp[$id]=['id'=>$id,'name'=> $name,'qty'=>$qty,'price'=>$price];
      }
      $c++;
    }
    $request->session()->put('items',$temp);
    $data['menu']=$this->shop->menu();
    $data['typeList']=$this->shop->typeList();
    $data['items']=$temp;
    if($complete){
      return view('order',$data);
    }else {
      return view('basket',$data);
    }
    //////////////////////////////////////////
    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('userhome',$data);
    }else{
      return redirect('login');
    }
}

    public function basket(Request $request){
      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');
         if($request->session()->exists('items')){
           $items=$request->session()->get('items');
         }else{
           $items=array();
         }
         $data['items']=$items;
        return view('basket',$data);
      }else{
        return redirect('login');
      }
    }


    public function orderInsert(Request $request){


     $fullname=$request->input('fullname');
      $tel=$request->input('tel');
      $address=$request->input('address');
      $total=$request->input('total');
      $date_order = date("Y-m-d");

      $sql="insert into tb_order values(null,'$fullname','$tel','$address','$total','$date_order')";
      DB::insert($sql);

      $sql2="select max(id_order) as id from tb_order";
      $result=DB::select($sql2);
      $lastId=$result[0]->id;

      $items=$request->session()->get('items');
      foreach($items as $i){
        $id=$i['id'];
        $name=$i['name'];
        $price=$i['price'];
        $qty=$i['qty'];

        $sql3="insert into tb_detail values('$lastId','$id','$name','$qty','$price')";
        DB::insert($sql3);
      }
      $request->session()->forget('items');
      echo "หลังจากกดยืนยันสั่งซื้อแล้ว กรุณาเข้ามาที่ร้านภายใน 15 นาที! <br/>";
      $link=url('/homeuser');
      echo "<a href='$link'>Back </a>";
    }

    public function type1(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '1'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type2(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '2'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type3(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '3'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type4(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '4'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type5(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '5'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type6(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '6'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }

    public function type7(request $request){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";

      $data['menu']=$this->shop->menu();
      $data['typeList']=$this->shop->typeList();

      $sql="select * from tb_products where ref_id_type = '7'";
      $data['result']=DB::select($sql);

      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('product_list',$data);
      }else{
        return redirect('login');
      }

    }
}
