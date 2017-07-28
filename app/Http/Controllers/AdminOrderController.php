<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminOrderController extends Controller
{
    public function __construct(){
      $this->admin = new AdminController;
    }
    public function index(){
      $sql="select*from tb_order";
      $data['result']=DB::select($sql);
      $data['menu']=$this->admin->menu();

      return view('admin.order',$data);
    }
    public function view($id){
      $sql="select*from tb_order where id_order='$id'";
      $data['result']=DB::select($sql);

      $sql2="select*from tb_detail where id_order='$id'";
      $data['result2']=DB::select($sql2);

      $data['menu']=$this->admin->menu();

      return view('admin.order_view',$data);
    }

    public function delete($id){
      $sql ="delete from tb_order where id_order='$id'";
      DB::delete($sql);

      $sql2="delete from tb_detail where id_order='$id'";
      DB::select($sql2);

      return redirect('admin/order');
    }
}
