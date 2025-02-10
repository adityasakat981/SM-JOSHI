<?php

if(isset($name) || isset($gmail) || isset($password) || isset($Comment)){

echo $_POST["name"];
echo $_POST["gmail"];
echo $_POST["password"];
echo $_POST["Comment"];
}

$conn=new mysqli('localhost','root','','contactUs');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{

    $stmt=$conn->prepare("INSERT INTO contactinfo(name,gmail,password,Comment)
value(':name',':gmail',':password',':Comment')");
$stmt->bind_param(':name', $name, PDO::PARAM_STR);
$stmt->bind_param(':gmail',$gmail, PDO::PARAM_STR);
$stmt->bind_param(':password',$password, PDO::PARAM_STR);
$stmt->bind_param(':Comment',$Comment, PDO::PARAM_STR);

$stmt->execute();
echo "Your information upload successfully...";
$stmt->close();
$conn->close();
}

?>