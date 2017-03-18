<?php 
session_start();
if (!isset($_SESSION['login_user'])){ 
		header("location: index.php"); }// Redirecting To Other Page if not log in(came from back clicks or entered specific url}
?>
<html>
<head>
	<title dir="rtl">TeachMe - חיפוש מורה</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/designFind.php">
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<!-- jsvsScript -->
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
	<script type="text/javascript" src="assets/JS/buttonScript.php"></script>
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
			<li class="liNavbar right" dir="rtl"><a  id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)">מצא מורה</a></li>
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

	<div id="findBar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - מצא מורה עכשיו!</p>
	</div>

	<!-- ask for area from area list -->
	<div id="findSection">
		<form id="searchForm" action="teacherSearch.php" method="post">
			<span class="right align">מיקום</span>
			<select id="cityList" class="sizesOne right" required name="location">
				<option selected="selected" value="">בחר מיקום</option>
				<option value="north">הצפון</option>
				<option value="hedera">חדרה זכרון והעמקים</option>
				<option value="sharon">השרון</option>
				<option value="center">המרכז</option>
				<option value="jeru">אזור ירושלים</option>
				<option value="shtahim">יהודה שומרון ובקעת הירדן</option>
				<option value="shfelaa">שפלה ומישור חוף דרומי</option>
				<option value="darom">דרום</option>
			</select>
			<span class="right align">תחום</span>
			<!-- ask for subject from subject list -->
			<select id="subjectList" class="sizesTwo right" required  name="subject">
				<option selected="selected" value="">בחר תחום</option>
				<option value="ezrahot">אזרחות</option>
				<option value="english">אנגלית</option>
				<option value="biology">ביולוגיה</option>
				<option value="geo">גאוגרפיה</option>
				<option value="history">היסטוריה</option>
				<option value="chimistry">כימיה</option>
				<option value="thung">לשון</option>
				<option value="music">מוסיקה</option>
				<option value="cs">מחשבית</option>
				<option value="math">מטמתיקה</option>
				<option value="stat">סטטיסטיקה</option>
				<option value="safrot">ספרות</option>
				<option value="pisic">פיזיקה</option>
				<option value="sycho">פסיכומטרי</option>
				<option value="french">צרפתית</option>
				<option value="bible">תנ"ך</option>
				<option value="com">תקשורת</option>
			</select>
			<button type="submit" value="Submit" id="searchBtn" onmouseover="showText()" onmouseout="unshowText()">
				<span id="searchh" class="searchNowHide">חפש!</span>
				<i id="magn" class="fa fa-search searchNowShow" aria-hidden="true"></i>
			</button>
		</form>
	</div>



</body>
</html>