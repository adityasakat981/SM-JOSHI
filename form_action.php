<?php require_once("config.php");
if(isset($_POST['form_submit']))
{
	$name=trim($_POST['name']);
	$fname=trim($_POST['fname']);
	$mname=trim($_POST['mname']);
	$name=trim($_POST['name']);
	$gender=trim($_POST['gender']);
	$address=trim($_POST['address']);
  $dob=trim($_POST['dob']);
	$category=trim($_POST['category']);
	$course=trim($_POST['course']);
  $Year=trim($_POST['Year']);
  $email=trim($_POST['email']);
	$mobile=trim($_POST['mobile']);
	$pay_status='CASH'; 
	$course_fees='6000'; 
    $reg_no='TS'.rand(99,10).time();
    $folder = "images/";
    $adhar_no=trim($_POST['adhar_no']);
	//Photo 

    
$image_file=$_FILES['image']['name'];
$file = $_FILES['image']['tmp_name'];
$path = $folder . $image_file; 
 $file_name_array = explode(".", $image_file);
$extension = end($file_name_array);
$new_image_name = 'photo_'.rand() . '.' . $extension;


	$sql="INSERT into form (name,fname,mname,gender,address,category,dob,course,Year,email,mobile,pay_status,course_fees,reg_no,image,adhar_no) 
    VALUES(:name,:fname,:mname,:gender,:address,:category,:dob,:course,:Year,:email,:mobile,:pay_status,:course_fees,:reg_no,:image,:adhar_no)";
 $stmt = $db->prepare($sql);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
      $stmt->bindParam(':mname', $mname, PDO::PARAM_STR);
      $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
      $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
      $stmt->bindParam(':address', $address, PDO::PARAM_STR);
      $stmt->bindParam(':category', $category, PDO::PARAM_STR);
      $stmt->bindParam(':course', $course, PDO::PARAM_STR);
      $stmt->bindParam(':Year', $Year, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
      $stmt->bindParam(':pay_status', $pay_status, PDO::PARAM_STR);
      $stmt->bindParam(':course_fees', $course_fees, PDO::PARAM_STR);
      $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
      $stmt->bindParam(':image', $new_image_name, PDO::PARAM_STR);
            $stmt->bindParam(':adhar_no', $adhar_no, PDO::PARAM_STR);
      $stmt->execute();
      $last_id = $db->lastInsertId();
      if($last_id=!'')
      {
    header("location:preview.php?id=".$reg_no);
      }
    }
    ?>


