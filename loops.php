<?php

 

/*
For
While
Do.. While
Foreach

*/



#for loop


/*for ($i=0; $i <=10 ; $i++) { 
    echo 'Number '.$i;
    echo '<br>';
}*/


/*$i=0;
while ($i<10)
{
    echo $i;
    echo '<br>';
    $i++;

}*/

/*
#do while

$a=0;

do{

    echo $a;
    echo '<br>';
    $a++;
}while($a < 10)
?> */


/*$people=array('Brad','Jose','William');

foreach($people as $person){

    echo $person;
    echo '<br>';
} */


$people=array('Brad'=>'brad@gmail.com','Jose'=>'jose@gmail.com','Jeremy'=>'jermy@gmail.com');

foreach($people as $person=>$email){
    
    echo $person. ': '.$email;
    echo '<br>';  
    
} 