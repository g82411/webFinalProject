$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/book.php",
  })
  .done(function(data) {
      $('#tablse2').html(data);
  })
});