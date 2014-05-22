<!DOCTYPE html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/regeister.css">
	</head>

	<body>

		<article id="introduction"></article>
<div class="input-group" id="emailInput">
  <span class="input-group-addon">Email</span>
  <input type="text" class="form-control" id="email" placeholder="email">
</div>
		<input id="id" type="text" class="form-control" placeholder="ID" >
		<input id="password" type="password" class="form-control" placeholder="Password" >
		<input id="recheckpassword" type="password" class="form-control" placeholder="Recheck Password" >
		<input id="nickname" type="text" class="form-control" placeholder="nickname" >
		<select id="language">
			<option value="default" selected="selected">擅長語言</option>
			<option value="Japanese">日文</option>
			<option value="English">英文</option>
			<option value="French">法文</option>
		</select>
		<input id="email" type="email" class="form-control" placeholder="email" >
		<select id="profession">
			<option value="default" selected="selected">職業</option>
			<option value="CSIE">資訊工程</option>
			<option value="Art">藝術</option>
			<option value="Ecnomic">經濟</option>
		</select>
		<button id="register"  type="button" class="btn btn-default" >Register</button>

	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/regeister.js"></script>

</html>
