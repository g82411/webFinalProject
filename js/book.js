$(function(){ 
  $.ajax({
    type: "GET",
    url: "../controller/book.php",
  })
  .done(function(data) {
      $('#table2').html(data);
  })
})