<?php


Route::get('calculator', function () {
    echo "Welcome to our Calc package!";
});

//Route for addition
Route::get('add/{a}/{b}', 'Digital\Calc\CalculatorController@add');
//Route for subtraction
Route::get('subtract/{a}/{b}', 'Digital\Calc\CalculatorController@subtract');
//Route for Multiplication
Route::get('multiplication/{a}/{b}', 'Digital\Calc\CalculatorController@multiplication');
//Route for Division
Route::get('division/{a}/{b}', 'Digital\Calc\CalculatorController@division');


