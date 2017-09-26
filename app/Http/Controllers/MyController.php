<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function MyPalindromeAuto($word){
        echo "String : " . $word . "<br>";

        $reverse = strrev($word);

        if ($word == $reverse){
            echo $word . " is Palindrome";
        }

        else { echo $word . " is not Palindrome";}
    } 

    function MyPalindromeManual($word){
        echo "String: " . $word . "<br>";
        $MyArray = array();
        $MyArray = str_split($word);
        $ArrLength = sizeof($MyArray);
        $NewWord = "";

        for ($i = $ArrLength, $i >= 0; $i--;){
            $NewWord.= $MyArray[$i];}
        
        if ($NewWord == $word){echo $word . " is palindrome" . "<br>";}
        
        else{echo $word . " is not palindrome" . "<br>";}
        
    }

    function isPalindrome($word='')
    {
        //return view ('app');
        return 
        view('app', ["name" => "Irene"]);
        
    }

    function about(){
        return view('page.about');
    }
}
