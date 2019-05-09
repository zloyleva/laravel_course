<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThingsController extends Controller
{
    private $data = [
        1 => 'thing #1',
        2 => 'thing #2',
        3 => 'thing #3',
        4 => 'thing #4',
        5 => 'thing #5',
        6 => 'thing #6',
    ];

    public function index(){
        dump($this->data);
    }

    public function show($id){
        dump($this->data[$id]);
    }

    public function store(){}

    public function update($id){}

    public function destroy($id){}
}
