<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculateController extends Controller
{
    public function calculate(Request $request){
        $numberOne=$request -> get(numberOne);
        $numberTwo=$request -> get(numberTwo);
        $action=$request -> get(action);

        if ($action == 'add'){
            $answer = $numberOne+$numberTwo;
        }
        elseif ($action =='subtract'){
            $answer = $numberOne-$numberTwo;
        }
        elseif ($action == 'divide'){
            $answer = $numberOne/$numberTwo;
        }
        elseif ($action == 'multiply'){
            $answer = $numberOne*$numberTwo;
        }
        return view('calculate', compact('answer'));
    }
}
