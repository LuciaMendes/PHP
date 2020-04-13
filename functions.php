<?php

    #functions block of code can be repeatedly called


    /*
    
        name functions
        camel case myFucntions()
        Lowercase - my_fucntion()
        Pascal Case MyFunction()
        
    */


    //create simple function
   /* function simpleFunction(){

        echo 'hello world';
    }

    //run simple function
    simpleFunction();*/ 

    function sayHello($name='World'){

      //  echo "Hello".' '. $name;
      echo "Hello $name<br>";
    }

    /*sayHello('Lúcia');
    sayHello('Bob');
    sayHello('Tim');*/
    
//return value
    function addNumbers($num1,$num2)
    {

        return $num1+$num2;
    }

  // echo  addNumbers (2,4);


   //By Reference

   $myNum=10;
   function addFive($num){

        $num+=5;

   }

   function addTen(&$num)
   {
        $num+=10;

   }

  addFive($myNum);

  echo "Value : $myNum <br>";

  addTen($myNum);

  echo "Value :$myNum <br>";

  echo "Funçoes em PHP";





























?>


