<?php
include('session.php');
?>

<?php
$title="<title>Guidance School Management</title>";
include('header.php');
include('menu.php');
?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<?php
include('leftbar.php');
?>
<div class="rightbar">
<form action="" method="POST">
<h3 style="text-align:center">Edit Student Details</h3>
<?php
//editting personal details
?>
<?php
if(isset($_GET['student_id'])){
$student_id= $_GET['student_id'];
include('connect.php');
$query="SELECT * FROM students WHERE student_id='$student_id'";
$sql= mysql_query($query);
$row=mysql_fetch_assoc($sql);
$error="";
$surname=$row['surname'];
$firstname=$row['firstname'];
$othername=$row['othername'];
$username=$row['username'];
$email=$row['email'];
$phone=$row['phone'];
$sex=$row['gender'];
$password=$row['password'];
$age=$row['age'];
$admission_date=$row['admission_date'];
$date_of_birth=$row['date_of_birth'];
$nationality=$row['nationality'];
$religion=$row['religion'];
$state_of_origin=$row['state_of_origin'];
$state_of_birth=$row['state_of_birth'];
$parent_phone=$row['parent_phone'];
$parent_email=$row['parent_email'];
$address=$row['address'];
$class=$row['class_of_admitant'];
$picture=$row['picture'];
if(isset($_POST['submit'])){

if(empty($_POST['surname'])){
$error="fill surname field";
}elseif(empty($_POST['firstname'])){
$error="fill firstname field";
}elseif(empty($_POST['othername'])){
$error="fill othername field";
}elseif(empty($_POST['email'])){
$error="fill email field";
}elseif(empty($_POST['phone']) || !preg_match('/^\d{11}$/',$_POST['phone'])){
$error="fill phone field";
}elseif(empty($_POST['d_o_b'])){
$error="pick a date pf birth";
}elseif(empty($_POST['nationality'])){
$error="fill nationality field";
}elseif(empty($_POST['religion'])){
$error="enter a religion";
}elseif(empty($_POST['class'])){
$error="Select A Class";
}elseif(empty($_POST['state_of_origin'])){
$error="fill state of origin field";
}elseif(empty($_POST['state_of_birth'])){
$error="fill state of birth";
}elseif(!empty($_POST['parent_no']) && !preg_match('/^\d{11}$/',$_POST['parent_no'])){
$error="fill parent's phone number";
}elseif(empty($_POST['parent_email'])){
$error="fill parent's email";
}elseif(empty($_POST['address'])){
$error="fill address";
}else{
$new_surname=trim(addslashes($_POST['surname']));
$new_firstname=trim(addslashes($_POST['firstname']));
$new_othername=trim(addslashes($_POST['othername']));
$new_email=trim(addslashes($_POST['email']));
$new_phone=trim(addslashes($_POST['phone']));
$new_sex=trim(addslashes($_POST['sex']));
//$new_age=$_POST['age'];
$new_d_o_b=$_POST['d_o_b'];
$new_age=YEAR-substr($new_d_o_b,0,4);
$new_nationality=trim(addslashes($_POST['nationality']));
$new_religion=trim(addslashes($_POST['religion']));
$new_state_of_origin=trim(addslashes($_POST['state_of_origin']));
$new_state_of_birth=trim(addslashes($_POST['state_of_birth']));
$new_parent_no=trim(addslashes($_POST['parent_no']));
$class=trim(addslashes($_POST['class']));
$new_parent_email=trim(addslashes($_POST['parent_email']));
$new_address=trim(addslashes($_POST['address']));
$sql=mysql_query("UPDATE students SET surname='$new_surname',
firstname='$new_firstname',othername='$new_othername',phone='$new_phone',
email='$new_email',date_of_birth='$new_d_o_b',age='$new_age',
gender='$new_sex',nationality='$new_nationality',religion='$new_religion',
address='$new_address',state_of_origin='$new_state_of_origin',
state_of_birth='$new_state_of_birth',parent_phone='$new_parent_no',class_of_admitant='$class',
parent_email='$new_parent_email' WHERE student_id='$student_id'");
if($sql){
echo"<script>alert('Records Updated!!!')</script>";
}else{
echo "<p style='color:red'>Error: ".mysql_error()." Please contact developer!!!</p>";
}
}

}
if(isset($_POST['password'])){
$query3="UPDATE students SET password='$surname' WHERE student_id='$student_id'";
if(mysql_query($query3)){
echo"<script>alert('Password Has Been Reset To The Students Surname!!!')</script>";

}else{
echo mysql_error();
}

}

}
?>
<table  style="margin-left:20%;" width="60%">
<tr><td colspan="2">
<div style="width:65%;position:absolute;float:left">
<label style="font-size:25px;">Student Id : <?php echo $student_id;?></label><br />
<label style="font-size:25px;">Username : <?php echo $username;?></label>
</div>
<fieldset style=";float:right">
<legend>PASSPORT</legend>
<?php
echo"<img style='float:right;margin:1px;' src='../uploads/$picture' height='150px' width='150px' alt='$surname'/><br />"
?>
</fieldset>
</td></tr>
<tr><td><label class="label2">Surname</label></td><td><input type="text" name="surname" class="inputform" value="<?php echo $surname; ?>" /></td></tr>
<tr><td><label class="label2">Firstname</label></td><td><input type="text" name="firstname" class="inputform" value="<?php echo $firstname;?>" /></td></tr>
<tr><td><label class="label2">Othername </label></td><td><input type="text" name="othername" class="inputform" value="<?php echo $othername;?>" /></td></tr>
<tr><td><label class="label2">Email</label></td><td><input type="email" name="email" class="inputform" value="<?php echo $email; ?>" /></td></tr>
<tr><td><label class="label2">Phone </label></td><td><input type="text" name="phone" class="inputform" value="<?php echo $phone; ?>" /></td></tr>
<tr><td><label class="label2">Class</label></td><td><select class="inputform" name="class">
<option selected value=""> SELECT A CLASS</option>
<?php
$query="SELECT * FROM classes";
$sql=mysql_query($query);
while($row=mysql_fetch_assoc($sql)){
if($class==$row['class_name']){
echo "<option selected value='".$row['class_name']."'>".$row['class_name']."</option>";
}else{
echo "<option value='".$row['class_name']."'>".$row['class_name']."</option>";

}
}
?>

</select></td></tr>



<tr><td><label class="label2">Sex </label></td><td>
<?php
if($sex=="male"){
echo"<input type='radio' name='sex' select='selected' checked='checked' value='male'/>Male
<input type='radio' name='sex' value='female'/>Female</td>";
}elseif($sex=="female"){
echo"<input type='radio' name='sex'  value='male'/>Male
<input type='radio' select='selected' checked='checked' name='sex' value='female'/>Female</td>";
}
?>
</tr>
<tr><td><label class="label2">Date of Birth  </label></td><td><input type="date" name="d_o_b" class="inputform" value="<?php echo $date_of_birth; ?>"  /></td></tr>
<tr><td><label class="label2">Nationality  </label></td><td><input type="text" name="nationality" class="inputform" value="<?php echo $nationality; ?>" /></td></tr>
<tr><td><label class="label2">Religion  </label></td><td><select class="inputform" name= "religion">
<option value="">--SELECT--</option>
<option <?php if(!empty($religion)&& $religion=="muslim"){echo "selected" ;} ?> value="muslim" >Islam</option>
<option <?php if(!empty($religion)&& $religion=="christian"){echo "selected" ;} ?> value="christian" >Christian</option>
<option <?php if(!empty($religion)&& $religion=="traditional"){echo "selected" ;} ?> value="traditional"  >Traditional</option>
</select></td></tr>
<tr><td><label class="label2">State of Origin </label></td><td><select  class="inputform"  name="state_of_origin">
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
</td></tr>
<tr><td><label class="label2">State of Birth  </label></td><td><select class="inputform" name="state_of_birth"
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
</td></tr>
<tr><td><label class="label2">Parent Phone No </label></td><td><input type="text" name="parent_no" class="inputform" value="<?php echo $parent_phone; ?>" /></td></tr>
<tr><td><label class="label2">Parent Email  </label></td><td><input type="text" name="parent_email" class="inputform" value="<?php echo $parent_email; ?>" /></td></tr>
<tr><td><label class="label2">Address  </label></td><td><input type="text" name="address" class="inputform" value="<?php echo $address; ?>" /></td></tr>
<tr><td colspan="2"><input type="submit" class="submitbutton" name="submit" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="submitbutton" name="password" value="Reset Password" /></td></tr>
</table>
<?php
if(!empty($error)){
echo "<p style='color:red'>Error:$error</p>";
}
?>
</form>
<?php
//changing the passport
if(isset($_GET['student_id'])){
if(isset($_POST['submitpassport'])){
	//----------------passport-----------------
$passport=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$type=$_FILES['upload']['type'];
//-------------------------------------

if((($type=="image/jpeg") || ($type=="image/gif") || ($type=="image/bmp") || ($type=="image/png") || ($type=="image/jpg"))){
$query2="UPDATE students SET picture='$passport' WHERE student_id='$student_id'";
	if(move_uploaded_file($temp, "../uploads/$passport")&& mysql_query($query2)){
	echo"<script>alert('Passport Sucessfully Changed!!!')</script>";

	}
}else{
echo"<script>alert('Passport must not be more than 100k and must be png bmp jpg jpeg!!!')</script>";
}


}
}
?>
<form action="" method="post" ENCTYPE="multipart/form-data">

<fieldset style="width:60%;margin-left:20%;border-radius:5px;">
<legend><label class="label2">Change Passport  </label></legend>
<input type="hidden" name="MAX_FILE_SIZE" value="100000"/>
<?php
echo "<img style='float:right;margin:1px;' src='../uploads/$picture' height='150px' width='150px' alt='$surname'/>"
?>
<input type="file" class="inputform" name="upload"/><br /><br /><br />
<input type="submit" class="submitbutton" name="submitpassport" />
</fieldset>

</form>
<form action="" method="POST">
</form>
</div>
</div>

</body>
</html>
