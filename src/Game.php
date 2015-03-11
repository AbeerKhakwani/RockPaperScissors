<?php


class Game{

    function playGame($input101, $input201){


        $input1=strtolower($input101);
        $input2=strtolower($input201);
        $output="";



     if (($input1 == "rock" && $input2 == "scissors") | ($input1 == "paper" && $input2 == "rock") |($input1 == "scissors" && $input2 == "paper") ){

         $output="Player 1";
      }

     elseif (($input1 == "scissors" && $input2 == "rock") | ($input1 == "rock" && $input2 == "paper") |($input1 == "paper" && $input2 == "scissors") )

     {
         $output="Player 2";
     }
     else
     {
         $output="Draw";


     }

        return $output;
    }





}


?>
