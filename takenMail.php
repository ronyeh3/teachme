<?php 
session_start();
?>
<html>
<head>
	<title dir="rtl">TeachMe</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/designTakenEmail.php">
	<!-- connectivity functions  -->
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<!-- jsvsScript -->
	<script type="text/javascript" src="assets/JS/accScript.php"></script>
</head>
<body>
	<!-- navigation bar -->
	<div id="navbar">
		<ul id="ulNavbar">
			<li id="siteName" class="liNavbar right">
				<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
				</a>
			</li>
			<!-- if user is unconnected display alert -->
			<li class="liNavbar right" dir="rtl"><a id="canlog" onclick=checkIfConected(<?php echo isset($_SESSION['login_user'])?>) >מצא מורה</a></li>
			<li class="liNavbar right" dir="rtl"><a href="faq.php">שאלות נפוצות</a></li>
			<li class="liNavbar right" dir="rtl"><a href="WhoAreWe.php">מי אנחנו</a></li>

			<li id="drop" class="left dropdown">
				<a href="#" id="dropbtn" dir="rtl">צור קשר</a>
				<div class="dropdown-content">
					<a href="https://www.facebook.com/TeachMeIL/">Facebook</a>
					<a href="contact.php" dir="rtl">דרך האתר</a>
					 						<?php
 							if(isset($_SESSION['login_user'])){
 								if($_SESSION['login_user']=="manager@teachme.co.il"){
 									echo "<a href='manager.php' dir='rtl' >הודעות שהתקבלו</a>";
 								}
 							}
 						?>
				</div>
			</li>
			<li id="drop" class="left dropdown" dir="rtl">
				<a href="#" id="dropbtn">הוסף פרופיל</a>
				<div class="dropdown-content">
					<a href="signUpStudent.php" dir="rtl" >תלמיד חדש</a>
					<a href="signUpTeacher.php" dir="rtl" >מורה חדש</a>
				</div>
			</li>
			<!-- if user is connected display login o.w display log-out -->
			<li class="<?php 
			if(isset($_SESSION['login_user'])){
				$classes="liNavbar left redBackground";
				echo $classes; 
			}else{
				$classes="liNavbar left";
				echo $classes; 
			}
			?>"><a href=
			<?php
			if(!isset($_SESSION['login_user'])){
				$link = "signIn.php";
				echo $link;
			}else{
				$link = "logout.php";
				echo $link;
			}
			?>
			dir="rtl" >
			<?php
			if(isset($_SESSION['login_user'])){
				echo "התנתק";
			}else{
				echo "התחבר";
			}
			?>	
		</a>
	</li>
	<!-- if user is connected display user-name -->
	<?php
	if(isset($_SESSION['login_user'])){
		if($_SESSION['userOrTeacher']== "users"){
			echo '<li class="liNavbar left greenBackground"><a href="myDetails.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			else{
				echo '<li class="liNavbar left greenBackground"><a href="myDetailsTeacher.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			}
			?>
		</ul>
	</div>
	<div class="spaceContainer"></div>

	<div id="sryBar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - מצטערים...</p>
	</div>
	<!-- sorry message -->
	<div id="sryBox" dir="rtl">
		<p class="sryPar">כתובת הדואר איתה ניסית להרשם כבר נמצאת במערכת.</p>
		<p class="sryPar">אנא מלא את טופס ההרשמה מחדש והכנס כתובת דואר חדשה!</p>
		<p class="sryPar">במידה וזוהי אכן כתובת האימייל שלך - אנא נסה לשחזר את ססמתך באמצעות "שכחתי ססמא".</p>
		<p class="sryPar">במידה ולא הצלחת, צור איתנו קשר ונשמח לסייע</p>
	</div>

</body>
</html>