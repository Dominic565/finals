<?php

namespace App\Http\Controllers;
use App\Models\Houseinstallments;

use Illuminate\Http\Request;

class HouseinstallmentsController extends Controller
{
    public function index(){
        $houseinstallment =Houseinstallments::get();
        return inertia('Houseinstallments',[
            'houseinstallment' => $houseinstallment
        ]
    );
    }
}
