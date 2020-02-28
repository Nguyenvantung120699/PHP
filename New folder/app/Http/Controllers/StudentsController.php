<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
//    public function classRoom(){
//         $arr = [
//             [
//                 "frist_name"=>'Nguyễn Văn',
//                 "Last_name"=>'Tùng',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '12/06/1999',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ],
//             [
//                 "frist_name"=>'Nguyễn Văn',
//                 "Last_name"=>'Hiến',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '15/07/1990',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ],
//             [
//                 "frist_name"=>'Nguyễn Thế',
//                 "Last_name"=>'Anh',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '05/11/2000',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ]
//         ];


//         return view("listPeople",["tstudents"=>$arr]);
//    }

//    public function login(){
//      return view("formLogin");
//     }


//     public function update(){
//         return view("updateInfor");
//     }

//     public function edit(){

//         $arr = [
//             [
//                 "frist_name"=>'Nguyễn Văn',
//                 "Last_name"=>'Tùng',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '12/06/1999',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ],
//             [
//                 "frist_name"=>'Nguyễn Văn',
//                 "Last_name"=>'Hiến',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '15/07/1990',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ],
//             [
//                 "frist_name"=>'Nguyễn Thế',
//                 "Last_name"=>'Anh',
//                 "hometown"=>'Hà Nội',
//                 "birth" => '05/11/2000',
//                 "create" => '27/02/2020',
//                 "update" => '27/02/2020'
//             ]
//         ];


//         return view("Edit_Infor_Student",["students"=>$arr]);
//     }

//     public function createAccount(){
//     return view("CreateAccount");
//    }


   public function home(){

    return view("home");

    }

    public function product(){

                $product = [
                    [
                        "name"=>'Nguyễn Văn',
                        "image"=>'Tùng',
                        "price"=>'Hà Nội',
                    ],
                    [
                        "name"=>'Nguyễn Văn',
                        "image"=>'Tùng',
                        "price"=>'Hà Nội',
                    ],
                    [
                        "name"=>'Nguyễn Văn',
                        "image"=>'Tùng',
                        "price"=>'Hà Nội',
                    ],
                ];
        
        
                return view("Edit_Infor_Student",["students"=>$product]);
           }
}
