<?php
if( isset($_POST["smit"])){
$lastname = $_POST["lname"];
$firstname = $_POST["fname"];
$email = $_POST["email"];
$text = $_POST["massage"];
chdir("files");

$i=0;
while(1){
    $i=$i+1;


if (file_exists("$i.txt")){
    continue;
}else{

    $file = fopen("$i.txt","w");
    fwrite($file,"name : $firstname . $lastname <br>emaile :  $email  <br> massage : $text ");
    fclose($file);
    
    break;
}
}


}





?>