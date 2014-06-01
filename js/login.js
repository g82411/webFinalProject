$("#register").click(function(){
  document.location.href="register.html";
});


$("#login").click(function(){
  $.post("./controller/login.php",
  {
    "username":$('input[id="username"]').val(),
    "password":$('input[id="password"]').val()
  },
  function(data){
  	data=JSON.parse(data);
    alert(data.confirm);
  	if(data.confirm){
  		alert("登入成功");
  		localStorage.setItem("key", data.Cookie);
  		document.location.href="index.html";
  	}
  	else{
  		alert("登入失敗,請檢查帳號密碼");
  	}
	});
});
