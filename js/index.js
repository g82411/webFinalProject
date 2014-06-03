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
<<<<<<< HEAD
    $('#hotPanel').html(data);
=======
  	data=JSON.parse(data);
     $('#hotPanel').html('<a href=\"./book.html#bid='+data.BID+'\">'+data.bookTitle+'</a>');
>>>>>>> 3d8b2ecfe1d7d7a484d4d9d9690f02672092cc7c
});
});
$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/dateDump.php"
  })
  .done(function(data) {
<<<<<<< HEAD
    $('#datePanel').html(data);
});
});
=======
  	data=JSON.parse(data);
     $('#datePanel').html('<a href=\"./book.html#bid='+data.BID+'\">'+data.bookTitle+'</a>');
});
});
>>>>>>> 3d8b2ecfe1d7d7a484d4d9d9690f02672092cc7c
