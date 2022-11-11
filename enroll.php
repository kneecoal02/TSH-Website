<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
body{
background-color: #aed6dc;
  margin-left: 12%;
  margin-top: 5%;
  height: 100vh;

}
*{
 font-family: verdana;
 box-sizing:border-box;

}
.form1{
  width:700px;
  padding-bottom: 15px;
  background-color: #316879;
  opacity:.9;
  align-items: left;
  margin-left: -5%;
   top: 13%;
  position: absolute;

}
.form2{
  width:320px;
  height:835px;
  padding-bottom: 15px;
  background-color: #316879;
  opacity:.9;
  padding-top: 15px;
  left:68%;
  top: 13%;
  position: absolute;

}

input{
  display:block;
  border: 1px solid black;
  width:70%;
  padding:10px;
  margin:10px auto;
  border-radius:5px;
  margin-left: 3%;

}
label{
  color:white;
  font-size: 18px;
  padding:10px;
}

h2{
    text-align: center;
    color:white;
    padding-top: 2px;
  }
  #scroll {
  margin-left: 10%;
  height: 400px;
  overflow-y: auto;
  margin-right: 2%;
}

.lbl{
	position: absolute;
	top:7.7%;
	left:77%;
}
.subs2{
	position: absolute;
	top:11%;
	left:72%;
	width:20%;
}


.enroll{
  padding:10px 15px;
  margin-left:40%;
   background-color: #4CAF50;
  color:white;
  border-radius: 5px;
  border:1px solid black;
	}
.enroll:hover{
	background-color: #79a7d3;
  	color: white;
	}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #316879;
  position: absolute;
  top:0%;
  left:0;
  width:100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #4CAF50;
}

.active {
  background-color: #4CAF50;
}

.logout{
	position: absolute;
	left:90%;
}
@media only screen and (min-width: 425px) {
  /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 95.66%;}
.col-12 {width: 100%;}

}

	</style>

</head>
<body>
<ul class="ul col-12 li">
	<li><a href="register.php">Register</a></li>
	<li><a class="active" href="enroll.php">Enroll</a></li>
  <li><a  href="subjects.php">Add Subjects</a></li>
   <li class="logout"><a  href="login.php">Logout</a></li>
 
</ul>
	
	<form class="form1 col-7" method="post" action="funenroll.php">
		<h2>Enrollment Form</h2>
		<label>Fullname</label>
		<input type="text" name="fullname" id="fname" readonly><br>
		<label>Username</label>
		<input type="text" name="uname" id="uname"readonly ><br>
		<label>Contact Number</label>
		<input type="text" name="ca" id="c" readonly><br>
		<label>Address</label>
		<input type="text" name="ab" id="a" readonly><br>
		<label>Subject Name</label>
		<input class="subs" type="text" name="s" id="s" readonly><br>
		<label class="lbl1">Teacher</label>
		<input class="subs1" type="text" name="teach" id="teach" readonly><br>
		<label class="lbl">ID no.</label>
		<input class="subs2" type="number" name="sid" id="sid" readonly><br>
		<label class="lbl2">Class Code</label>
		<input class="subs3" type="text" name="cc" id="cc" readonly><br>
		<button type="submit" class="enroll">Enroll</button>

	
	</form>
	<form class="form2 col-3">
		<h2>Subject Lists</h2>
		<div id="scroll">


		</div>
  		
	</form>
	


<script type="text/javascript">

	<?php
	$query = "SELECT * FROM subjects";
		$result = mysqli_query($conn, $query);
		$resultcheck= mysqli_num_rows($result);
		
		$code =array();
		$subject=array();
		$teacher=array();
		for($sloop = 0; $sloop < $resultcheck; $sloop++){
			$row = mysqli_fetch_array($result);
			array_push($code, $row['classcode']);
			array_push($subject, $row['subjectname']);
			array_push($teacher, $row['teacher']);
			

			}

	

		?>

	var scode = [<?php echo '"'.implode('","', $code).'"' ?>];
	var subj = [<?php echo '"'.implode('","', $subject).'"' ?>];
	var tt = [<?php echo '"'.implode('","', $teacher).'"' ?>];
	var butn_y_pos = 100;
	var scrolls =  document.getElementById("scroll");
	
	scode.forEach(myFunction);
	function myFunction(item, index) {
		var btn = document.createElement("BUTTON");
		btn.type="button";
		btn.innerHTML = item + ": " + subj[index];
		btn.style.top = butn_y_pos + 'px';
		butn_y_pos += 85;
		btn.id="btn";
		 var style = document.createElement('style');
  			style.innerHTML = `
  				#btn {
  					width:80%;
  					font-family: sans-serif;
 					display:block;
  					border: 1px solid black;
  					padding:10px;
  					border-radius:5px;
					margin-top:20px;
					background-color: #4CAF50;
					box-shadow: 5px 5px #6883bc;
					color:white;
					position:absolute;

  				}
  				#btn:hover{
				background-color: #79a7d3;
				color: white;
				}
				

	
	`	
		btn.onclick = function() {
		document.getElementById('s').value = subj[index];
		document.getElementById('teach').value = tt[index];
		document.getElementById('cc').value = item;

		}

		document.head.appendChild(style);
		scrolls.appendChild(btn);
	}

	

	var stored = localStorage.getItem('stored');
	var idd = localStorage.getItem('idd');
	var cc = localStorage.getItem('cc');
	var aa = localStorage.getItem('aa');
	var students_id = localStorage.getItem('students_id');
	

	document.getElementById("fname").value = stored;
	document.getElementById("uname").value = idd;
	document.getElementById("c").value = cc;
	document.getElementById("a").value = aa;
	document.getElementById("sid").value = parseInt(students_id);


	document.getElementById("subbtn").onclick = function () {
        location.href = "subjects.php";
    }



	
</script>


</body>
</html>