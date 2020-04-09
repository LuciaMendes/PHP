<?php

    #array vraiables that holds multiple values

    $people=array('Kevin','Jeremy','Sara');

    $ids=array(23,55,12);
    //echo $people[3];

    //echo $ids[2];
    $cars=['Honda','Toyata','Ford'];
    $cars[3]='chevy';

    $cars[]='BMW';
    //echo $cars[1];

  //  echo $cars[4 ];

  //echo count($cars);
 // print_r($cars);

  //var_dump($cars);

  //Associate arrays


  $people=array('Brad'=>35,'Jose'=>32,'William'=>37);
    $ids=[22=>'Brad',44=>'Jose',63=>'William'];
  //echo $people['Brad'];

  //echo $ids[22];

  $people['Jill']=42;
  /*echo $people['Jill'];

  print_r($people);

  var_dump($people);*/


  $cars= array(

    array('Honda',20,10),
    array('Toyata',30,20),
    array('Ford',23,12)

    );  

echo $cars[1][2];






?>