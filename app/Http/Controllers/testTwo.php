<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestTwo extends Controller
{
    public $dinner=20;
    public $deserts=5;
    public $coldDrink = 3;
    public $bill;

    public function test($person){
        $this->bill();
    }
}

$dinnerBill = new testTwo();
$dinnerBill->test(2);
