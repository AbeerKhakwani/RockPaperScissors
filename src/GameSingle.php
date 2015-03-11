<?php
  class GameSingle{


      function PlayRandom(){

          $randomChoice = rand(1, 3);
          $input2="";

          if ($randomChoice = 1)
           {
               $input2 = "rock";
           }
          elseif
           ($randomChoice = 2)
           {
           $input2="paper";
           }
         else {

          $input2="scissors";

         }
         return $input2;
         var_dump(input2);
      }

      function playGame($input1,$input2){



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
          var_dump($output);
      }



  }



?>
