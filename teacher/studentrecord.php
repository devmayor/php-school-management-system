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
echo "<table class='ttable' width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>View Full</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$student_id=$row['student_id'];
echo "<tr>
<td><a href='edit_students.php?student_id=$student_id'>{$row['student_id']}</a></td><td>{$row['surname']}</td><td>{$row['firstname']}</td><td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td><a href='studentdetails.php?student_id={$row['student_id']}'>View</a></td>

</tr>";

}
echo "</table>";




	$prev = $page - 1;
	$next = $page + 1;
	
	echo "<center>";
	
	if(!($page<=1)){
		echo "<a href='studentrecord.php?page=$prev'>Prev</a> ";
	}

	if($pages>=1 && $page<=$pages){
	
		for($x=1;$x<=$pages;$x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
		
		}
	
	}
	
	if(!($page>=$pages)){
		echo "<a href='studentrecord.php?page=$next'>Next</a>";
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


echo "<table class='ttable' width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>View Full</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$student_id=$row['student_id'];
echo "<tr>
<td><a href='edit_students.php?student_id={$student_id}'>$student_id</a></td><td>{$row['surname']}</td><td>{$row['firstname']}</td>
<td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td>
<td>{$row['gender']}</td>
<td><a href='studentdetails.php?student_id={$row['student_id']}'>View</a></td>

</tr>";

}
echo "</table>";




	$prev = $page - 1;
	$next = $page + 1;
	
	echo "<center>";
	
	if(!($page<=1)){
		echo "<a href='studentrecord.php?page=$prev'>Prev</a> ";
	}

	if($pages>=1 && $page<=$pages){
	
		for($x=1;$x<=$pages;$x++){
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
		
		}
	
	}
	
	if(!($page>=$pages)){
		echo "<a href='studentrecord.php?page=$next'>Next</a>";
	}

	echo "</center>";


}









?>
</div>

</div>
</div>
</div>

</body>
</html>
