<?php
include('session.php');
?>
<?php
$surname='';
$firstname='';
$othername='';
$email='';
$phone='';
$username='';
$student_id= uniqid();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div id="header">
<img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>
<div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php
include('menu.php');
?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<div class="addadmin" style="display:relative">
<h2>Add New Student</h2>
<?php
$error="";
	$surname="";
	$firstname="";
	$othername="";
	$username="";
	$email="";
	$phone="";
	$sex="";
	$password="";
	$class="";
	$admission_date="";
	$date_of_birth="";
	$nationality="";
	$religion="";
	$state_of_origin="";
	$state_of_birth="";
	$parent_phone="";
	$parent_email="";
	$address="";
if(isset($_POST['submit_student'])){
	$surname=trim(addslashes($_POST['surname']));
	$firstname=trim(addslashes($_POST['firstname']));
	$othername=trim(addslashes($_POST['othername']));
	$username=trim(addslashes($_POST['username']));
	$email=trim(addslashes($_POST['email']));
	$phone=trim(addslashes($_POST['phone']));
	$sex=trim(addslashes($_POST['sex']));
	$password=trim(addslashes($_POST['password']));
	$class=trim(addslashes($_POST['class']));
	$admission_date=trim(addslashes($_POST['admission_date']));
	$date_of_birth=trim(addslashes($_POST['date_of_birth']));
	$age=YEAR-substr($date_of_birth,0,4);
	$nationality=trim(addslashes($_POST['nationality']));
	$religion=trim(addslashes($_POST['religion']));
	$state_of_origin=trim(addslashes($_POST['state_of_origin']));
	$state_of_birth=trim(addslashes($_POST['state_of_birth']));
	$parent_phone=trim(addslashes($_POST['parent_phone']));
	$parent_email=trim(addslashes($_POST['parent_email']));
	$address=trim(addslashes($_POST['address']));

	if(empty($_POST['firstname'])){
	$error="Enter Firstname";
	}elseif(empty($_POST['surname'])){
	$error="Enter Surname";
	}elseif(empty($_POST['othername'])){
	$error="Enter Othername";
	}elseif(empty($_POST['username'])){
	$error="Enter Username";
	}elseif(empty($_POST['phone']) || !preg_match('/^\d{11}$/',$_POST['phone'])){
	$error="Enter A Correct Phone No";
	}elseif(empty($_POST['email'])){
	$error="Enter Email";
	}elseif(empty($_POST['admission_date'])){
	$error="Select An Admission Date";
	}elseif(empty($_POST['date_of_birth'])){
	$error="Enter A Date Of Birth";
	}elseif(empty($_POST['sex'])){
	$error="Enter Sex";
	}elseif(empty($_POST['nationality'])){
	$error="Select A Nationality";
	}elseif(empty($_POST['religion'])){
	$error="Select A Religion";
	}elseif(empty($_POST['state_of_origin'])){
	$error="Select A state_of_origin";
	}elseif(empty($_POST['state_of_birth'])){
	$error="Select A State Of Birth";
	}elseif(!empty($_POST['parent_phone']) && !preg_match('/^\d{11}$/',$_POST['parent_phone'])){
	$error="Enter A Correct Phone Number";
	}elseif(empty($_POST['class'])){
	$error="Please Select A Class";
	}elseif(empty($_POST['password'])){
	$error="enter password";
	}else{

	//----------------passport-----------------
if(!empty($_FILES['upload']['name'])){
$passport=$_FILES['upload']['name'];
}else{
$passport="graduation2.jpg";
}
$temp=$_FILES['upload']['tmp_name'];
$type=$_FILES['upload']['type'];
//-------------------------------------
include('connect.php');
	$query="INSERT INTO students(id,student_id,surname,firstname,othername,username,password,phone,email,admission_date,admin_admitting,date_of_birth,age,gender,nationality,religion,address,state_of_origin,state_of_birth,parent_phone,parent_email,class_of_admitant,department,picture) VALUES ('','$student_id','$surname','$firstname','$othername','$username','$password','$phone','$email','$admission_date','{$adminuser['username']}','$date_of_birth','$age','$sex','$nationality','$religion','$address','$state_of_origin','$state_of_birth','$parent_phone','$parent_email','$class','','$passport')";
	$query1="SELECT * FROM students WHERE student_id='$student_id' OR username='$username'";
$sql=mysql_query($query1);
if(mysql_num_rows($sql)==0){
if($passport!="graduation2.jpg"){
if((($type=="image/jpeg") || ($type=="image/gif") || ($type=="image/bmp") || ($type=="image/png") || ($type=="image/jpg"))){
	move_uploaded_file($temp, "uploads/$passport");
	if(mysql_query($query)){
	echo"<script>alert('YOU HAVE SUCCESSFULLY ADMITTED A NEW STUDENT')</script>";
}
}else{
	echo"<script>alert('Error in Uploading!!!. Please make sure your image is a png, png, jpeg and not exceeding 100k!!!')</script>";

}

}else{
if(mysql_query($query)){
	echo"<script>alert('YOU HAVE SUCCESSFULLY ADMITTED A NEW STUDENT')</script>";
}
}

}else{
$error="Student Id Or Student Username Already Exists!!!";
}

}


}

?>



<form ENCTYPE="multipart/form-data" action="" method="POST">

<div style="display:relative;">
<?php
if(!empty($error)){
echo "<p style='color:red;font-size:14px;'>Error: $error</p>";
}
?>

<label class="label1">Student id</label><input type="text" class="inputform" readonly name="student_id" value="<?php echo $student_id; ?>" style="" /><br />
<label class="label1">Firstname :</label><input type="text" class="inputform" name="firstname" style="" value="<?php if(!empty($firstname)){ echo  $firstname;} ?>" /><br />
<label class="label1">Surname :</label><input type="text" class="inputform" name="surname" style="" value="<?php if(!empty($surname)){ echo  $surname;} ?>" /><br />
<label class="label1">Othername :</label><input type="text" class="inputform" name="othername" style="" value="<?php if(!empty($othername)){ echo  $othername;} ?>" /><br />
<label class="label1">Username :</label><input type="text" class="inputform" name="username" style="" value="<?php if(!empty($username)){ echo  $username;} ?>" /><br />
<label class="label1">Password :</label><input type="password" class="inputform" name="password" style="" /><br />
<label class="label1">Phone :</label><input type="text" class="inputform" name="phone" style="" value="<?php if(!empty($phone)){ echo $phone ;} ?>" /><br />
<label class="label1">Email :</label><input type="email" class="inputform" name="email" style="" value="<?php if(!empty($email)){ echo $email ;} ?>" /><br />

<label class="label1">Admission Date :</label><input type="date" class="inputform" name="admission_date" style="" value="<?php if(!empty($admission_date)){ echo  $admission_date;} ?>" /><br />
<label class="label1">Date Of Birth :</label><input type="date" class="inputform" name="date_of_birth" style="" value="<?php if(!empty($date_of_birth)){ echo  $date_of_birth;} ?>" /><br />
<label class="label1">SEX :</label><input type="radio" name="sex" select="selected" checked="checked" value="male"/>Male
<input type="radio" name="sex" value="female"/>Female<br />
<label class="label1">Nationality :</label><input type="text" class="inputform" name="nationality" style="" value="<?php if(!empty($nationality)){ echo $nationality ;} ?>" /><br />
<label class="label1">Religion :</label><select class="inputform" name= "religion">
<option value="">--SELECT--</option>
<option <?php if(!empty($religion)&& $religion=="muslim"){echo "selected" ;} ?> value="muslim" >Islam</option>
<option <?php if(!empty($religion)&& $religion=="christian"){echo "selected" ;} ?> value="christian" >Christian</option>
<option <?php if(!empty($religion)&& $religion=="traditional"){echo "selected" ;} ?> value="traditional"  >Traditional</option>
</select><br />

<label class="label1">State Of Origin :</label><select class="inputform" name="state_of_origin"
>
<option value="">--SELECT--</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ABUJA"){echo "selected" ;} ?> value="ABUJA">ABUJA FCT</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ABIA"){echo "selected" ;} ?> value="ABIA">ABIA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ADAMAWA"){echo "selected" ;} ?> value="ADAMAWA">ADAMAWA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="AKWA_IBOM"){echo "selected" ;} ?> value="AKWA_IBOM">AKWA IBOM</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ANAMBRA"){echo "selected" ;} ?> value="ANAMBRA">ANAMBRA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="BAUCHI"){echo "selected" ;} ?> value="BAUCHI">BAUCHI</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="BAYELSA"){echo "selected" ;} ?> value="BAYELSA">BAYELSA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="BENUE"){echo "selected" ;} ?> value="BENUE">BENUE</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="BORNO"){echo "selected" ;} ?> value="BORNO">BORNO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="CROSS_RIVER"){echo "selected" ;} ?> value="CROSS_RIVER">CROSS RIVER</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="DELTA"){echo "selected" ;} ?> value="DELTA">DELTA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="EBONYI"){echo "selected" ;} ?> value="EBONYI">EBONYI</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="EDO"){echo "selected" ;} ?> value="EDO">EDO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="EKITI"){echo "selected" ;} ?> value="EKITI">EKITI</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ENUGU"){echo "selected" ;} ?> value="ENUGU">ENUGU</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="GOMBE"){echo "selected" ;} ?> value="GOMBE">GOMBE</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="IMO"){echo "selected" ;} ?> value="IMO">IMO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="JIGAWA"){echo "selected" ;} ?> value="JIGAWA">JIGAWA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KADUNA"){echo "selected" ;} ?> value="KADUNA">KADUNA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KANO"){echo "selected" ;} ?> value="KANO">KANO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KATSINA"){echo "selected" ;} ?> value="KATSINA">KATSINA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KEBBI"){echo "selected" ;} ?> value="KEBBI">KEBBI</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KOGI"){echo "selected" ;} ?> value="KOGI">KOGI</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="KWARA"){echo "selected" ;} ?> value="KWARA">KWARA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="LAGOS"){echo "selected" ;} ?> value="LAGOS">LAGOS</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="NASSARAWA"){echo "selected" ;} ?> value="NASSARAWA">NASSARAWA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="NIGER"){echo "selected" ;} ?> value="NIGER">NIGER</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="OGUN"){echo "selected" ;} ?> value="OGUN">OGUN</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ONDO"){echo "selected" ;} ?> value="ONDO">ONDO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="OSUN"){echo "selected" ;} ?> value="OSUN">OSUN</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="OYO"){echo "selected" ;} ?> value="OYO">OYO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="PLATEAU"){echo "selected" ;} ?> value="PLATEAU">PLATEAU</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="RIVERS"){echo "selected" ;} ?> value="RIVERS">RIVERS</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="SOKOTO"){echo "selected" ;} ?> value="SOKOTO">SOKOTO</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="TARABA"){echo "selected" ;} ?> value="TARABA">TARABA</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="YOBE"){echo "selected" ;} ?> value="YOBE">YOBE</option>
<option <?php if(!empty($state_of_origin)&& $state_of_origin=="ZAMFARA"){echo "selected" ;} ?> value="ZAMFARA">ZAMFARA</option>
</select>
<br />
<label class="label1">State Of Birth :</label><select class="inputform" name="state_of_birth"
>
<option value="">--SELECT--</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ABUJA"){echo "selected" ;} ?> value="ABUJA">ABUJA FCT</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ABIA"){echo "selected" ;} ?> value="ABIA">ABIA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ADAMAWA"){echo "selected" ;} ?> value="ADAMAWA">ADAMAWA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="AKWA_IBOM"){echo "selected" ;} ?> value="AKWA_IBOM">AKWA IBOM</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ANAMBRA"){echo "selected" ;} ?> value="ANAMBRA">ANAMBRA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="BAUCHI"){echo "selected" ;} ?> value="BAUCHI">BAUCHI</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="BAYELSA"){echo "selected" ;} ?> value="BAYELSA">BAYELSA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="BENUE"){echo "selected" ;} ?> value="BENUE">BENUE</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="BORNO"){echo "selected" ;} ?> value="BORNO">BORNO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="CROSS_RIVER"){echo "selected" ;} ?> value="CROSS_RIVER">CROSS RIVER</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="DELTA"){echo "selected" ;} ?> value="DELTA">DELTA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="EBONYI"){echo "selected" ;} ?> value="EBONYI">EBONYI</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="EDO"){echo "selected" ;} ?> value="EDO">EDO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="EKITI"){echo "selected" ;} ?> value="EKITI">EKITI</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ENUGU"){echo "selected" ;} ?> value="ENUGU">ENUGU</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="GOMBE"){echo "selected" ;} ?> value="GOMBE">GOMBE</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="IMO"){echo "selected" ;} ?> value="IMO">IMO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="JIGAWA"){echo "selected" ;} ?> value="JIGAWA">JIGAWA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KADUNA"){echo "selected" ;} ?> value="KADUNA">KADUNA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KANO"){echo "selected" ;} ?> value="KANO">KANO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KATSINA"){echo "selected" ;} ?> value="KATSINA">KATSINA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KEBBI"){echo "selected" ;} ?> value="KEBBI">KEBBI</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KOGI"){echo "selected" ;} ?> value="KOGI">KOGI</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="KWARA"){echo "selected" ;} ?> value="KWARA">KWARA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="LAGOS"){echo "selected" ;} ?> value="LAGOS">LAGOS</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="NASSARAWA"){echo "selected" ;} ?> value="NASSARAWA">NASSARAWA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="NIGER"){echo "selected" ;} ?> value="NIGER">NIGER</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="OGUN"){echo "selected" ;} ?> value="OGUN">OGUN</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ONDO"){echo "selected" ;} ?> value="ONDO">ONDO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="OSUN"){echo "selected" ;} ?> value="OSUN">OSUN</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="OYO"){echo "selected" ;} ?> value="OYO">OYO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="PLATEAU"){echo "selected" ;} ?> value="PLATEAU">PLATEAU</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="RIVERS"){echo "selected" ;} ?> value="RIVERS">RIVERS</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="SOKOTO"){echo "selected" ;} ?> value="SOKOTO">SOKOTO</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="TARABA"){echo "selected" ;} ?> value="TARABA">TARABA</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="YOBE"){echo "selected" ;} ?> value="YOBE">YOBE</option>
<option <?php if(!empty($state_of_birth)&& $state_of_birth=="ZAMFARA"){echo "selected" ;} ?> value="ZAMFARA">ZAMFARA</option>
</select>
<br />
<label class="label1">Parent Phone Number :</label><input type="text" class="inputform" name="parent_phone" value="<?php if(!empty($parent_phone)){ echo  $parent_phone;} ?>" /><br />
<label class="label1">Parent Email :</label><input type="email" class="inputform" name="parent_email" value="<?php if(!empty($parent_email)){ echo $parent_email ;} ?>"  /><br />
<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
<label class="label1">Passport:</label><input class="inputform" type="file" name="upload"/><br />
<label class="label1">Class :</label>

<select class="inputform" name="class">
<option value=""> SELECT A CLASS</option>
<?php
$query="SELECT * FROM classes";
$sql=mysql_query($query);
while($row=mysql_fetch_assoc($sql)){
if($class==$row['class_name']){
echo "<option selected value='".$row['class_name']."'>".$row['class_name']."</option>";
}else{
echo "<option  value='".$row['class_name']."'>".$row['class_name']."</option>";

}
}

?>

</select><br />
<!--<label class="label1">Age :</label><input type="text" class="inputform" name="age" style="" /><br />-->
<label>Address : </label><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="textarea" style="width:50%;height:100px;" class="textarea" name="address" /><br />
<input type="submit" class="submitbutton" value="submit" name="submit_student" /><input type="reset" class="submitbutton" value="Clear" />
</form>
<br />
<?php
if(!empty($_SESSION['adminuser'])){
echo"<a href='adminhome.php'>Go Back</a>";
}
if(!empty($_SESSION['teacheruser'])){
echo"<a href='teacherhome.php'>Go Back</a>";
}


?>
</div>
</div>
</div>
</body>
</html>
