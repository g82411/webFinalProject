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
  	data=JSON.parse(data);
     $('#hotPanel').html('<a href=\"./book.html#bid='+data.BID+'\">'+data.bookTitle+'</a>');
});
});
$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/dateDump.php"
  })
  .done(function(data) {
  	data=JSON.parse(data);
     $('#datePanel').html('<a href=\"./book.html#bid='+data.BID+'\">'+data.bookTitle+'</a>');
});
});