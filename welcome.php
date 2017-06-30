<?php
include('time.php');
 echo'<div class="welcome">';
echo'<span class="normal">WELCOME: </span><span class="output">';
if($adminuser['sex']=='male'){
echo 'Mr '. $adminuser['surname'].' '.$adminuser['firstname'].' '.$adminuser['othername'];
}elseif($adminuser['sex']=='female'){
echo 'Mrs '. $adminuser['surname'].' '.$adminuser['firstname'].' '.$adminuser['othername'];
}else{
 echo $adminuser['surname'].' '.$adminuser['firstname'].' '.$adminuser['othername'] ;
}
echo'</span>
</div>';
?>