
<?php
/*
$db_name = "127.0.0.1";
$mysql_user = "root";
$mysql_pass = "123";
$db = "vet";

$con = mysqli_connect($db_name,$mysql_user,$mysql_pass,$db);
$Name_error='';
$E_mail_error='';
$Comments_error='';

if(isset($_POST["Submit"]))
{
	if(empty($_POST["Name"]))
	{
		$Name_error="Please Enter Name";
	}
	if(empty($_POST["E_mail"]))
	{
		$E_mail_error="Please Enter E-mail";
	}
	else{
		if(!preg_match("/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/", $_POST["E_mail"]))
		{
			$E_mail_error="Not a valid Email ID";
		}
	}
	if(empty($_POST["Comments"]))
	{
		$Comments_error="Please Enter Comments";
	}

	$Name = $_POST['Name'];
	$E_mail = $_POST['E_mail'];
	$Comments = $_POST['Comments'];

	if(!empty($_POST["Name"]) && !empty($_POST["E_mail"]) && preg_match("/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/", $_POST["E_mail"]) && !empty($_POST["Comments"])) {
	$sql = "INSERT INTO contact VALUES ('$Name', '$E_mail', '$Comments');";
    $result = mysqli_query($con,$sql);
}
}
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Fish Creek Animal Hospital</title>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fishcreek.css">
	</head>
	<body>
		<div id="wrapper">
			<h1 class="heading2">Fish Creek Animal Hospital</h1>
			<table>
				<tr>
					<td valign="top" width="200px">
						<nav>
						<br>
						<ul class="service">
							<li><a href="<?php echo base_url() ?>Home">Home</a></li>
							<li><a href="<?php echo base_url() ?>Services">Services</a></li>
							<li><a href="<?php echo base_url() ?>Askvet">Ask the Vet</a></li>
							<li><a href="<?php echo base_url() ?>Subscribe">Subscribe</a></li>
							<li><a href="<?php echo base_url() ?>Contact">Contact</a></li>
						</ul>
						</nav>
					</td>
					<td>
						<div>
							<h2>Contact Fish Creek</h2>
							<p class="wdm">Required fields are marked with an asterick (*).</p>
						</div>
						<?php
						if (isset($name) && isset($email) && isset($comments)) {
							echo validation_errors();
						}else {
							echo validation_errors();
							echo form_open();
							echo '<span style="color:#460da5;"><label for="name">*Name:</label><br/></span>' . form_input('name', set_value('name')) . '<br/><br/>';
							echo '<span style="color:#460da5;"><label for="email">*Email:</label><br/></span>' . form_input('email', set_value('email')) . '<br/><br/>';
							echo '<span style="color:#460da5;"><label for="comments">*Comments:</label><br/></span>' . form_textarea('comments', set_value('comments')) . '<br/><br/>';
							echo form_submit('Submit', 'Send Now');
							echo form_close();
						}
						?>
						<!--<form class="wdm" action="contact.php" method="POST">
							<table>
								<tr>
									<td style="text-align:right">* Name: &nbsp;</td><td><input type="text" name="Name"><span class="Invalid Text"><?php echo $Name_error; ?></span></td>
								</tr>
								<tr>
									<td style="text-align:right">* E-mail: &nbsp;</td><td><input type="text" name="E_mail"><span class="Invalid Text"><?php echo $E_mail_error; ?></span></td>
								</tr>
								<tr>
									<td style="text-align:right" valign="top">* Comments: &nbsp;</td><td><textarea rows="3" cols="23" name="Comments"></textarea><span class="Invalid Text"><?php echo $Comments_error; ?></span></td>
								</tr>
								<tr>
									<td></td><td><input type="submit" name="Submit" value="Send Now" /></td>
								</tr>
							</table>
						</form>-->
						<br>
						<br>
						<div id="footer">
						<i>Copyright &copy; 2016 Fish Creek Animal Hospital</i><br>
						<i><a href="mailto:harsh@desai.com">harsh@desai.com</a></i>
						</div>	
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>