<?php
    session_start();

    include "db.php";

    $resultDate=$_POST['completedate'];
    $resultTrue=$_POST['completetrue'];
    if($resultTrue=="on") {
        $resultTrue=1;
    }
    $resultMem=$_POST['smlmem'];

    $query1=";
    $query2=";
    
    $query1="UPDATE $title SET CompleteDate=$resultDate WHERE SmlMem='$resultMem'";
    $query2="UPDATE $title SET CompleteTrue=$resultTrue WHERE SmlMem='$resultMem'";
    echo $query1;

    $sql=mq($query1);
    $sql=mq($query2);
?>

<meta http-equiv="refresh" content="1; URL=index.php">
