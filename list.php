<link rel="stylesheet" href="./class_res/bootstrap.min.css"></link>
<img id="implogo" src="toggle.png" alt="toggle logo" height="120px" width="120px" style="display:inline;"></img>
<h1 style="position:absolute; left:40%; display:inline;">Members list:</h1>
<img id="fsmklogo" src="fsmk.jpg" alt="fsmk logo" height="90px" width="90px" style="float:right; display:inline;" />
<?php
$connect=mysqli_connect('localhost','username','password','dbname');
echo "<meta name=viewport content=width=device-width, initial-scale=1><link rel=stylesheet href=bootstrap.min.css>";
$str="<table class=table table-striped>";	
$r=mysqli_query($connect,"select name,usn,year,email from pyworkshop");
		$str .="<tr>";
		$str .="<td>Name</td><td>USN</td><td>Year</td><td>email</td>";
		 $str .="</tr>";
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
			$str .="<tr>";
			$str .="<td>".$row['name']. "</td>";
			$str .="<td>".$row['usn']."</td>";
			$str .="<td>".$row['year']."</td>";			
			$str .="<td>".$row['email']."</td>";			
			$str .="</tr>";
		}
		$str .="</table>";
		echo $str;
	
?>
