$("#register").click(function(){
  $.post("regeister.php",
  {
    "username":$('input[id="ID"]').val(),
    "password":$('input[id="password"]').val(),
    "nickname":$('input[id=nickname]').val(),
    "language":$("#language").find(":selected").text(),
    "email":$('input[id=email]').val(),
    


    city:"Duckburg"
  },
  function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});