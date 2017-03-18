<?php header("Content-type: text/css; charset: UTF-8");  ?>

body{
	width: 100%;
	margin: 0;
    background: #f9f9f9;
}
#ulNavbar{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background: #3366cc;
    font-family: 'Secular One', sans-serif; 
	border: none;
}

.left{
	float: left;
}

#siteName{
	font-family: 'Lobster', cursive;
	font-size: 20px;
}

.liNavbar a{
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	transition: all 0.8s
	border: none;
	line-height: 20px;
    cursor: pointer;
}

.liNavbar a:hover{
	background: #003366;
	transition: all 0.8s;
}

#navbar{
	margin: 0;
	padding: 0;
	position: fixed;
	top: 0;
	width: 100%;
}

.right{
	float: right;
}


li a, #dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, #drop:hover #dropbtn {
    background-color: #003366;
	transition: all 0.8s;    
}

li.dropdown {
    line-height: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #666666;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: all 0.8s;
}

.dropdown-content a:hover {
	background-color: #003366;
	color: #f9f9f9;
	transition: all 0.8s;
}

#drop:hover .dropdown-content {
    display: block;
}

.spaceContainer{
    height: 48px;
}
#findBar{
  height: 18%;
  margin-top: 20px;
  padding: 8px;
  border-top: 6px solid #003366;
  border-bottom: 6px solid #003366;
  background: #3366cc;
}

#sentBar{
    margin: 25px;
    font-size: 48px;
    text-align: center;
    font-family: 'Secular One', sans-serif;
    letter-spacing: -1px;
    color: #f9f9f9;

}

#sitenameBar{
    font-family: 'Lobster', cursive;
    font-size: 50px;
    color: #f9f9f9; 
}
#findSection{
    margin: 48px auto;
    max-width: 800px;
    min-width: 669px;
    height: 120px;
    border: 1px solid #003366;
    border-radius: 20px;
    text-align: center;
}

.sizesOne{
    height: 40px;
    width: 20%;
    margin: 40px 5px 40px 5px;
    text-align: center;
    direction: rtl;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.sizesTwo{
    height: 40px;
    width: 30%;
    margin: 40px 5px 40px 5px;
    text-align: center;
    direction: rtl;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

#searchBtn{
    width: 50px;
    height: 50px;
    margin-top: 40px;
    margin-left: 6%;
    border-radius: 50%;
    border: 1px solid #003366;
    background-color: #3366cc;
    color: #f9f9f9;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    text-decoration: none;
    float: left;
    transition: all 0.4s;
    font-size: 20px;
}


    #searchBtn:hover{
    margin-top: 40px;
    margin-left: 6%;
    border-radius: 0px;
    width: 80px;
    height: 40px;
    direction: rtl;
    transition: all 0.4s;
    transform: scale(1.5);
    outline: none;
    border: 1px solid #003366;
    background-color: #21C608;
    text-align: center;
    font-size: 20px;
    }

    .searchNowHide{
        display: none;
    }

    .searchNowShow{
        display: block;
    }

    .align{
        padding: 40px 10px 40px 10px;
        font-size: 30px;
        font-family: 'Secular One', sans-serif;
    }

    .redBackground:hover{
        background-color: red  ; 
    }
    .greenBackground:hover{
        background-color: #2add50  ; 
    }



