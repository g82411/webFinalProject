


$("login").click(function(){
  $.post("login.php",
  {
    ID:$("email"),
    password:$("password")
  },
  function(data,status){
    
	});
});