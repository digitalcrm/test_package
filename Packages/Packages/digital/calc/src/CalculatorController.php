<?php
//Add your namespace packages
namespace Digital\Calc;

use Illuminate\Http\Request;
//Also include the App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    // write code for calculator needs:
    public function add($x, $y)
    	{
    		$result = $x + $y;
    		return view('Calc::add', compact('result'));
            //echo $x + $y;
    	}
    public function subtract($x, $y)
    	{
    		$result = $x - $y;
            return view('Calc::add', compact('result'));             		
    	}
    public function multiplication($x, $y)
        {
            $result = $x * $y;
            return view('Calc::add', compact('result'));                      
        }
    public function division($x, $y)
        {
            $result = $x / $y;
            return view('Calc::add', compact('result'));           
        }
}
