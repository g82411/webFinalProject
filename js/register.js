$("#register").click(function(){
  $.post("./controller/register.php",
  {
    "username":$('input[id="id"]').val(),
    "password":$('input[id="password"]').val(),
    "nickname":$('input[id=nickname]').val(),
    "language":$("#language").find(":selected").text(),
	"profession":$("#profession").find(":selected").text(),
    "email":$('input[id=email]').val()
    


  },
  function(data,status){
	alert(data);
  });
});