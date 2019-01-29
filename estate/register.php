<?php
mysql_connect("localhost","root","");
mysql_select_db('estate');
extract($_POST);
$sq=mysql_query("SELECT * FROM `users_detail` WHERE `email`='$email'");
$result=mysql_num_rows($sq);
if ($result!='') {
	?>
	<script type="text/javascript">
	 	alert("This email id already register");
	 	location.href="Signup.php";
	 </script>
	<?php
}else
if (isset($_POST['submit'])) {
	$query=mysql_query("INSERT INTO `users_detail`(`name`,`email`,`mobile`,`password`) VALUES('$name','$email','$mobile','$password')");
	?>
	 <script type="text/javascript">
	 	alert("Thanks For Register");
	 	location.href="Login.php";
	 </script>
	<?php
}
?>
