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
	alert($('input[id="username"]').val());
	alert($('input[id="password"]').val());
	alert($('input[id="nickname"]').val());
    alert($("#language").find(":selected").text());
    alert($("#profession").find(":selected").text());
	alert($('input[id="email"]').val());
  });
});