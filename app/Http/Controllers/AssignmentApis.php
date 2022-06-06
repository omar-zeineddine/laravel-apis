<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentApis extends Controller {

    public function isPalindrome($string){ 
        if (strrev($string) == $string){ 
            return 1; 
        }
        else{
            return 0;
        }
    } 


    public function countPal($array){
        $words = explode(' ', $string);
        $count = 0;

        foreach($words as $word) {
            if(strrev($word) === $word) {
                $count++;
            }
        }

    echo $count;

    }

    public function timeSince() {
        $current_time = strtotime("now");
        $starting_time = strtotime("14 April 1732");

        $difference = $current_time - $starting_time;

        echo "seconds since 14 April 1732: " . $difference;
        

        
    }

    public function randomName(){
        $students = array("pablo", "pablo", "pablo", "one", "two", "three", "four");
        echo $students[array_rand($students)];
    }

    public function brew(){
        $response = file_get_contents('https://api.punkapi.com/v2/beers/random');
        echo ($response);
    }


    public function dadJoke(){
        //$response = file_get_contents('https://icanhazdadjoke.com/slack');
        $message = json_decode(file_get_contents('https://icanhazdadjoke.com/slack'), true)["attachments"][0]["text"];
        echo($message);
    }


    
}
