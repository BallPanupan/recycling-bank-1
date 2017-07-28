<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(){
      $data['error']="";
      return view('admin.login',$data);
    }

    public function login(Request $request){
      $user = $request->input('user');
      $pass = $request->input('pass');

      if($user=="aaa" and $pass =="aaa"){
        $request->session()->put('check','passed');
        return redirect('admin/home');

      }else{
        $data['error']="ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        return view('admin.login',$data);
      }
    }

    public function home(){
      echo $this->menu();
      echo "<center><br><h3>ยินดีต้อนรับ ผู้ดูแลระบบร้านค้าออนไลน์</h3></center>";
    }

    public function home2(){
        echo $this->menu();
        echo "<center><br><h3>ยินดีต้อนรับ ผู้ดูแลระบบร้านค้าออนไลน์</h3></center>";
      return view('admin.admin_home');
    }

    public function menu(){
      $link1=url('admin/order');
      $link2=url('admin/product/insert');
      $link3=url('admin/product');
      $link4=url('admin/type/insert');
      $link5=url('admin/type');
      $link6=url('admin/logout');

      return"
      <h2>::ร้านค้าออนไลน์สำหรับผู้ดูแลระบบ::</h2>
      <p>
      [<a href='$link1'>รายการใบสั่งซื้อ</a>]</p>
      [<a href='$link2'>เพิ่มสินค้า</a>]</p>
      [<a href='$link3'>สินค้า</a>]</p>
      [<a href='$link4'>เพิ่มประเภท สินค้า</a>] -
      [<a href='$link5'>แก้ไข,ลบ ประเภทสินค้า</a>]</p>
      [<a href='$link6'>ออกจากระบบ</a>]</p>
      </p>";
    }

    public function logout(Request $request){
      $request->session()->forget('check');
      return redirect('admin');
    }
  }
