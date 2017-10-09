<?php
$connect=mysqli_connect('localhost','root','','toggle');
if(isset($_POST['submit']))
{
	if($_POST['usn']==NULL) $usn="";
	else $usn=verify($_POST['usn']); 
	$name=verify($_POST['name']);
	$year=verify($_POST['year']);
	$phone=verify($_POST['phone']);
	$mail=verify($_POST['mail']);
	$query="INSERT INTO `pyworkshop`(`name`, `usn`, `year`, `phone`, `email`) VALUES ('".$name."','".$usn."',".$year.",".$phone.",'".$mail."');";
	$res=mysqli_query($connect,$query);
	if($res)
		{
		echo "<script>alert('Registered successfully!');</script>";			
		}
	else  echo "<script>alert('Already Registered!');</script>";	
}
?>
<title>Py'Workshop17</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PyWorkshop17 is a Python Workshop organized by TOGGLE at The OXford College of Engineering,Bangalore in association with PythonExpress and FSMK.">
<meta name="robots" content="index,follow">
<link rel="stylesheet" href="bootstrap.min.css"></link>
<link rel="icon" href="./images/logo.png"></link>
 <div class="col-title" align="center">
	 <img src="./images/toggle.png" style="float:left" height="100px" width="100px"/>
	 <img id="fsmklogo" src="./images/fsmk.jpg" alt="fsmk logo" height="90px" width="90px" style="float:right; display:inline;" />
	 <h1 style="text-align:center; color:navy; font-size:40px; display:inline-block;"><strong>The Oxford Group of Gnu/Linux Enthusiasts</strong></h1></div>
<hr/>
<div class="container">
	<fieldset style="text-align:center;background-color:rgb(17, 92, 155);" id="field">
 	 <h3 align="center" style="background-color:white">Fill in the Details and submit to register.</h3>
 	 <h3 style="text-align:center; font-size:30px; color:white;">Enter Name:</h3>
	<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
	<input name="name" placeholder="Enter name here" size="20"  required style="display:inline-block; align:center;" value=""></input>
	 <h3 style="text-align:center;font-size:30px; color:white;"><strong>Enter USN:</strong></h3>
	 <input name="usn" placeholder="Enter usn here" size="20" pattern="[1-4]{1}[a-z]{2}[1-9]{2}[a-z]{2}[0-9]{3}" style="display:inline-block; align:center;" value=""></input>
	 <br/>
	 <h3 style="text-align:center;font-size:30px; color:white;"><strong>Enter Phone number:</strong></h3>
	 <input name="phone" placeholder="Enter Phone Number here" size="20" type="phone"  required style="display:inline-block; align:center;" value=""></input>
	 <br/>
	 <h3 style="text-align:center;font-size:30px; color:white;"><strong>Enter Email:</strong></h3>
	 <input name="mail" placeholder="Enter email here" size="20"  required style="display:inline-block; align:center;" type="email" value=""></input>
	 <br/>
	 <h3 style="text-align:center;font-size:30px; color:white;"><strong>Year:</strong></h3>
	 	 <select size="1" required="required" name="year"  required>
            <option selected="selected" value="0" disabled>-----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
		</select>
	 <br/><br/>
	 <button class="btn" style="background-color:inherit; border:1px solid white; color:white; padding:5px 25px;" value="submit1" name="submit"><strong>SUBMIT</strong></button>
</form>
</fieldset>
</div>
<hr/>
<div class="footer container-fluid" style="width:99%; ">
<a href="https://github.com/rahuljain5" ><img src="./images/github_icon.png" alt="github logo" height="40px" width="40px" ></img></a>
<a href="profile.html" ><img src="./images/hireme_icon.png" alt="Hireme logo" height="40px" width="40px" ></img></a>
<h4 style="float:right;">By <b>Rahul Jain<b></h4>
</div>
</body>
</html>
