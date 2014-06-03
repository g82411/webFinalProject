$("#login").click(function(){
  document.location.href="login.html";
});

$("#register").click(function(){
  document.location.href="register.html";
});
$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/hotDump.php"
  })
  .done(function(data) {
    $('#hotPanel').html(data);
});
});
$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/dateDump.php"
  })
  .done(function(data) {
    $('#datePanel').html(data);
});
});
