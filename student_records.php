<?php
include('session.php');


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
function confirmation() { 
var result = confirm("Are you sure you want to delete this user?")
if (answer){  } else{ window.location = "http://www.google.com/"; }
}
</script>
<style>
th{
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
width:100px;
height:60px;
}
tr{
font-size:13px;
height:40px;
overflow:auto;
background-color:LightBlue;
}
td{
text-align:center;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
}
a{
text-decoration:none;
color:green;
}
</style>
</head>

<body>
<div id="header"><img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/><div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<center><h3>Manage Students</h3></center>
<h4>Search Students </h4>
<form action="" method="post">
<label>Search By: </label><input class="inputform" type="text" name="query_input" required="required" />
<select class="inputform" style="width:150px" name="select">
<option value="student_id">Student Id</option>
<option value="surname">Surname</option>
<option value="username">Username</option>
<option value="phone">Phone</option>
<option value="email">E-mail</option>
</select>
<input type="submit" class="submitbutton" style="margin-left:5px;width:100px;" value="Search" name="search"/>
</form>
<?php
//this query brings out all the students data in the data base 

include('connect.php');
	$query_input=&$_POST['query_input'];
	$select=&$_POST['select'];
if(isset($_POST['search'])){
$user_search=$query_input;
//echo $user_search;
  function build_query($user_search,$select) {
    $search_query = "SELECT * FROM students";

    // Extract the search keywords into an array
    $clean_search = str_replace(',', ' ', $user_search);
    $search_words = explode(' ', $clean_search);
    $final_search_words = array();
    if (count($search_words) > 0) {
      foreach ($search_words as $word) {
        if (!empty($word)) {
          $final_search_words[] = $word;
        }
      }
    }

    // Generate a WHERE clause using all of the search keywords
    $where_list = array();
    if (count($final_search_words) > 0) {
      foreach($final_search_words as $word) {
        $where_list[] = "$select LIKE '%$word%'";
      }
    }
    $where_clause = implode(' OR ', $where_list);

    // Add the keyword WHERE clause to the search query
    if (!empty($where_clause)) {
      $search_query .= " WHERE $where_clause";
    }

    // Sort the search query using the sort setting

    return $search_query;
  }

	
	$per_page = 15;
	$pages_query = mysql_query("SELECT COUNT('student_id') FROM students WHERE $select LIKE '%$query_input%'");
	$pages = ceil(mysql_result($pages_query, 0) / $per_page);
	
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_page;
	//$query="SELECT * FROM students WHERE $select LIKE '%$query_input%' LIMIT $start, $per_page";
	$query=build_query($user_search,$select);
	//echo $query;
	$sql=mysql_query($query);
	if($sql){
	}else{
	echo mysql_error();
	}
$num_rows=mysql_num_rows($sql);
echo"Related Search For <u><b>$query_input</b></u>.&nbsp;&nbsp;&nbsp;<i>$num_rows Results Found</i>";
echo "<table width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>D.O.B</th><th>State of Origin</th><th>Department</th><th>View Full</th><th>Delete</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$student_id=$row['student_id'];
echo "<tr>
<td><a href='edit_students.php?student_id=$student_id'>{$row['student_id']}</a></td><td>{$row['surname']}</td><td>{$row['firstname']}</td><td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td>{$row['date_of_birth']}</td><td>{$row['state_of_origin']}</td><td>{$row['department']}</td><td><a href='studentdetails.php?student_id={$row['student_id']}'>View</a></td>
<td><a href='delete_students.php?student_id={$row['student_id']}'>Delete</a></td>
</tr>";

}
echo "</table>";




	$prev = $page - 1;
	$next = $page + 1;
	
	echo "<center>";
	
	if(!($page<=1)){
		echo "<a href='student_records.php?page=$prev'>Prev</a> ";
	}

	if($pages>=1 && $page<=$pages){
	
		for($x=1;$x<=$pages;$x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
		
		}
	
	}
	
	if(!($page>=$pages)){
		echo "<a href='student_records.php?page=$next'>Next</a>";
	}

	echo "</center>";
	



}else{	
	$per_page = 10;
	$pages_query = mysql_query("SELECT COUNT('student_id') FROM students");
	$pages = ceil(mysql_result($pages_query, 0) / $per_page);
	
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_page;
	$query="SELECT * FROM students LIMIT $start, $per_page";
	
	$sql=mysql_query($query);


echo "<table width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>D.O.B</th><th>State of Origin</th><th>Class</th><th>View Full</th><th>Delete</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$student_id=$row['student_id'];
echo "<tr>
<td><a href='edit_students.php?student_id={$student_id}'>$student_id</a></td><td>{$row['surname']}</td><td>{$row['firstname']}</td>
<td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td>
<td>{$row['gender']}</td><td>{$row['date_of_birth']}</td><td>{$row['state_of_origin']}</td>
<td>{$row['class_of_admitant']}</td><td><a href='studentdetails.php?student_id={$row['student_id']}'>View</a></td>
<td><a href='delete_students.php?student_id={$row['student_id']}'>Delete</a></td>
</tr>";

}
echo "</table>";




	$prev = $page - 1;
	$next = $page + 1;
	
	echo "<center>";
	
	if(!($page<=1)){
		echo "<a href='student_records.php?page=$prev'>Prev</a> ";
	}

	if($pages>=1 && $page<=$pages){
	
		for($x=1;$x<=$pages;$x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
		
		}
	
	}
	
	if(!($page>=$pages)){
		echo "<a href='student_records.php?page=$next'>Next</a>";
	}

	echo "</center>";


}









?>
</div>
</div>
</body>
</html>
