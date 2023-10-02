<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct(){
        $this->productmodel=new \App\Models\ProductModel();
    }

    public function homepage(): string
    {
        return view('user/homepage');
    }

    public function admin(): string
    {
        return view('admin/adminindex');
    }

    public function table(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Table')->findAll(),
        ];
        return view('user/products', $data);
    }
}
