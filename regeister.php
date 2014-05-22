<!DOCTYPE html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/regeister.css">
	</head>

	<body>

		<article id="introduction"></article>

		<input id="id" type="text" class="form-control" placeholder="ID" >
		<input id="password" type="password" class="form-control" placeholder="Password" >
		<input id="recheckpassword" type="password" class="form-control" placeholder="Recheck Password" >
		<input id="nickname" type="text" class="form-control" placeholder="nickname" >
		
		<div class="input-group" id="emailInput">
			
			<span id="Email" class="input-group-addon" >Email</span>
			<input type="text" class="form-control" id="email" placeholder="email">
		</div>
		<select id="language">
			<option value="default" selected="selected">擅長語言</option>
			<option value="Japanese">日文</option>
			<option value="English">英文</option>
			<option value="French">法文</option>
			<!--<option value="Else">其他</option>-->
		</select>
		<select id="profession">
			<option value="default" selected="selected">職業</option>
			<option value="CSIE">資訊工程</option>
			<option value="Art">藝術</option>
			<option value="Ecnomic">經濟</option>
			<!--<option value="Else">其他</option>-->
		</select>
		<button id="register"  type="button" class="btn btn-default" >Register</button>

	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/regeister.js"></script>

</html>
