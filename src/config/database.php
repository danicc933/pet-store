<?php

    $host      ="aws-0-us-east-1.pooler.supabase.com";
    $port      ="6543 ";
    $dbname    ="postgres";
    $user      ="postgres.ypbkjfmdzjqthzzruilt";
    $password  ="unicesmagQQ";  

    /*
    $host      ="localhost";
    $port      ="5432  ";
    $dbname    ="petstore";
    $user      ="postgres";
    $password  ="unicesmag";  
    */

    $data_connection ="
    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password
    ";
    $conn = pg_connect($data_connection);
    if(!$conn){
        echo "conection error";
    }else{
        echo "conection success!!!";
    }
    //pg_close($conn);

?>
