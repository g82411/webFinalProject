$("#register").click(function(){
  document.location.href="../register.php";
});


$("#login").click(function(){
  $.post("login.php",
  {
    ID:input['id=email'].val(),
    password:input['id=password'].val()
  },
  function(data,status){
    
	});
});
