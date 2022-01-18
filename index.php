<?php   

$tab = range(0,41);
shuffle($tab);
$selected = array_rand($tab, 16);
$bigTab = array_merge($selected, $selected);
shuffle($bigTab);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Jeux</title>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body{
	margin:0;
	background-image: url("bg.png");
}
.rouge{
		border-color: tomato!important; 
}
.green{
		border-color: green!important; 
		opacity: 0.60;
}
.container{
	padding: 1px;
	margin-top: 60px;
	margin-left: auto;
	margin-right: auto;
	width:672px;
	height:480px;
	background-color:  rgba(200,200,200,0.6);
	/* ombres */
	-webkit-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	-moz-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75); 
}
.container div {
	cursor: pointer;
	float:left;
	width:80px;
	height: 116px;
	border-color: #ccc; 
	border-style: solid;
    border-width: 2px;
}
.container div:hover {
	opacity: 0.60;
}
#demo{
	width:100px;
    margin-left: auto;
	margin-right: auto;

}
</style>

</head>
<body>
	<div class="container">
		<?php foreach($bigTab as $item){ ?>
				<img  width="80" src="<?= "images/".$item.".jpg" ?>"/>
		<?php } ?>
		
	</div>
	<br><br>
	<div id="demo"><button id="btnTricher">Tricher</button></div>

</body>
</html>