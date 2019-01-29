<?php
mysql_connect("localhost","root","");
mysql_select_db('estate');
extract($_POST);
$sq=mysql_query("SELECT * FROM `users_detail` WHERE `email`='$email'");
$result=mysql_num_rows($sq);
if ($result!='') {
	?>
	<script type="text/javascript">
	 	alert("Message send Successfully..");
	 	location.href="contact.php";
	 </script>
	<?php
}else
if (isset($_POST['Send Message'])) {
	$query=mysql_query("INSERT INTO `contact_us`(`name`,`email`,`massage`) VALUES('$name','$email','$massage')");
	?>
	 <script type="text/javascript">
	 	alert("Thanks For Register");
	 	location.href="contact.php";
	 </script>
	<?php
}
?>