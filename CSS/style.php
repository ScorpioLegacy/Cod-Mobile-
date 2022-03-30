<?php
	header('Content-type: text/css; charset: UTF-8');
?>

:root {
	font-size: 16px;
	font-family: 'Open Sans';
	--bg-primary: #040404;
	--bg-secondary: #C4C4C4;
	--bg-tertiary: #bf0000;
	--bg-four: #FFFFFF;
	--text-primary: #1e1e1e;
	--text-secondary: #515151;
	--text-tertiary: #FCFCFC;
}

body {
	background-image: url('../Images/Background-Military.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.navbar {
	height: 4rem;
	padding: 10px 4px;
	background-color: var(--bg-primary);
	width: 196.83vh;
	position: relative;
	display: flex;
}

.nav-button {
	border:  none;
	color:  white;
	padding:  16px 32px;
	text-align:  center;
	text-decoration: none;
	display:  inline-block;
	margin: 4px 2px;
	transition-duration:  0.4s;
	cursor:  pointer;
}

.btn1 {
	background-color: var(--bg-four);
	margin-left: 3px;
	color:  black;
	border-color:  gray;
}

.btn1:hover {
	background-color:  var(--bg-secondary);
}

.btn2 {
	background-color: var(--bg-four);
	margin-left: 3px;
	color: black;
	border-color: gray;
}

.btn2:hover {
	background-color: var(--bg-secondary);
}

.navbar-child:first child {
	margin-right: 15px;
}

.navbar-nav {
	list-style: none;
	padding: 0.3rem;
	margin: 0;
	display: inline-block;
}

.navbar-link {
	color: var(--text-tertiary);
	text-decoration: none;
	align-items: center;
	margin-left: 1500px;
}

main {
	background-color: var(--bg-four);
}

.div-container {
	display: flex;
	padding: 2rem;
}

.div-child {
	flex: 1;
}

form {
	background-color: var(--bg-secondary);
	padding: 1rem;
}

select {
	width: 80%;
	display: table;
}

.foot {
	height: 4rem;
	padding: 10px 4px;
	background-color: var(--bg-primary);
	width: 196.83vh;
	position: relative;
	display: flex;
}
