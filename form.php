<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Admission form with PDF preview able..</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="form_styles.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<style>
  .container{
    
    background-image: url(adimg.png);
    padding: 100px;
  

  }
</style>
<body>
<div class="container">
  
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="border: 2px solid black;padding:5px; text-align: center;">
   <h1>Admission Form 2025</h1>
  </div>
  <div class="col-sm-2">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-1">
  </div>
    <div class="col-sm-10" style="border: 0px solid black; padding:10px;">
      <form action="form_action.php" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-6">
      <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Full Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="name" class="form-control" required placeholder="Enter your full name">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Father Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="fname" class="form-control" required placeholder="Enter your father name">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Mother Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="mname" class="form-control" required placeholder="Enter your mother name">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Address:- </label>
    </div>
     <div class="col-sm-8">
     <textarea name="address" class="form-control" required></textarea>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="email" class="form-control" required placeholder="Enter your Gmail Id">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Mobile No:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="mobile" maxlength="10" class="form-control" required placeholder="Enter your mobile number">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Adharcard No:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="adhar_no" class="form-control" required placeholder="Enter your adharcard number>
    </div>
    </div>

<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">DOB:- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter your birth_date>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Category:- </label>
    </div>
     <div class="col-sm-8">
     <select name="category"  class="form-control" required>
      <option value="">Select your category</option>
        <option value="SC">ST</option>
        <option value="ST">SC</option>
        <option value="OBC">OBC</option>
        <option value="General">General</option>
        <option value="open">Open</option>
     </select>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Acadmic Year:- </label>
    </div>
     <div class="col-sm-8">
     <select name="Year"  class="form-control" required>
      <option value="">Select your Acadmic Year</option>
        <option value="First Year">First Year</option>
        <option value="Second Year">Second Year</option>
        <option value="Third Year">Third Year</option>
     </select>
<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Gender :- </label>
    </div>
     <div class="col-sm-8">
     <select name="gender" class="form-control" required>
      <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
     </select>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Course</label>
    </div>
     <div class="col-sm-8">
     <select name="course" class="form-control" required>
      <option value="">Select Course</option>
        <option value="Basic Computer">Basic Computer</option>
        <option value="Mathematics">Mathematics</option>
        <option value="BBA">BBA</option>
        <option value="BBA(CA)">BBA(CA)</option>
        <option value="Bsc">Bsc</option>
        <option value="BCA">BCA</option>
        <option value="BCS">BCS</option>
        <option value="MCA">MCA</option>
        <option value="Msc">Msc</option>
        <option value="M.A">M.A</option>
     </select>
    </div>
    </div>
    </div>
    <br>
    <br>

    <div class="col-sm-6">
  <div class="row">
    <div class="col-sm-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
      <img id="output"  width="200px" height="200px">
  </div>

    <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
  

  </div>  
    </div>
  </div>
    </div>
</div> <!--Row 1 end --> 
  <br>
     <div class="row">
     <div class="col-sm-2">
      <label class="lable"></label>
    </div>
    <div class="col-sm-8"> 
 <div id="msg-price"> </div>
    </div>
  </div> 
     <div class="row">
     <div class="col-sm-2">
      <label class="lable">Declaration </label>
    </div>
    <div class="col-sm-8">
      <div style=""><div id="msg-price"> </div></div>
      
      <div style="border: 3px solid black;padding:30px; text-align: center; border-radius: 15px;">
        <input type="checkbox" name="declare" required>
 I declare that I have read and filled the above information, so if the information given by me is incorrect, you have the right to cancel without informing me.
    </div>
      <div class="form-group row">
        <div class="col-sm-4">
        </div>
           <div class="col-sm-4">
            <br> 
               <button class="btn btn-success" name="form_submit">Submit </button>
           </div>
           <div class="col-sm-4">
           </div>
      </div> 
    </div>
  </div> 
</form>
</div>
<div class="col-sm-2">
  </div>
</div>
</div>
</body>
</html>