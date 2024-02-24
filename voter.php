
<?php

if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h1 style=" text-align:center"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1>
<h2 style=" text-align:center">Make a Vote </h2>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favorite political party? <BR>
<input type="radio" name="lan" value="BJP">BJP<BR>
<input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
<input type="radio" name="lan" value="AAP">AAP<BR>
<input type="radio" name="lan" value="NOTA">NOTA<BR>
<input type="radio" name="lan" value="NIRDLIY">NIRDLIY<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="padding:10px 80px;font: size 50px;border-radius:10px;background-color:rgb(255, 157, 0);" /></center>
</form>
