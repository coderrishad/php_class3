<?php
/**
 * Class 3 Home work
 */

 // Find the largest number from some numbers.

    function largestNum($num1,$num2,$num3){
        $num1 = $num1;
        $num2 = $num2;
        $num3 = $num3;

        if($num1 > $num2 && $num1 > $num3){
            echo "$num1 is the largest number from $num2 and $num3";
        }elseif($num2 > $num1 && $num2 > $num3){
            echo "$num2 is the largest number from $num1 and $num3";
        }else{
            echo "$num3 is the largest number from $num1 and $num2";
        }

    }
    largestNum(20,50,40);
    echo "<br>";


    // Positive, negative, Neutral and Odd and Even Number Checking application
    function numberCheck($num){
        $num = $num;
        if($num > 0){
            if($num % 2 == 0){
                echo "$num is Posative and Even Number.";
            }else{
                echo "$num is Posative and Odd Number.";
            }
        }elseif($num < 0){
            echo "$num is Negative Number.";
        }else{
            echo "$num is Nutral Number.";
        }
    }
    numberCheck(50);
    echo "<br>";



    //User Authentication system
    function userAuthentication($form_email,$form_pwd){

        //Database credentials
        $db_email = 'rishad@gmail.com';
        $db_pwd = '12345';

        //Form data when form is submitted
        $form_email = $form_email;
        $form_pwd = $form_pwd;

        if($form_email == $db_email){
            if($form_pwd == $db_pwd){
                echo "Welcome ! Your login successful";
            }else{
                echo "Your password is Incorrect";
            }
        }else{
            echo "Your email is incorrect";
        }
    }
    userAuthentication("test@gmail.com",12345);
    echo "<br>";
    userAuthentication("rishad@gmail.com",12345);


?>
