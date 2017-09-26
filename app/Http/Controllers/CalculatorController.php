<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function Add($angka1 = 1, $angka2 = 1) {
        $var = $angka1 + $angka2;
        return $var;
    }
    function Sub($angka1 = 1, $angka2 = 1) {
        $var = $angka1 - $angka2;
        return $var;
    }
    function Multiply($angka1 = 1, $angka2 = 1) {
        $var = $angka1 * $angka2;
        return $var;
    }
    function Div($angka1 = 1, $angka2 = 1) {
        $var = $angka1 / $angka2;
        return $var;
    }
    function tokped(){
        $vara = 1; 
        $varb = 2;
        $varc = 3;
        
        $vara |= 4; // or
        $varb >>= 1; // shift right
        $varc <<= 1; //shift left
        $vara ^= $varc; //xor 
        // untuk networking  

        echo $vara . $varb . $varc;
    }

    function binary(){
        // binary untuk menentukan jalur, networking 
        // write function that gets a decimal number as a string and converts it to it's binary representation,
        // do not use any existing library function 
    }
}
