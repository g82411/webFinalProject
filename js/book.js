$(function(){ 
  $.ajax({
    type: "GET",
    url: "controller/book.php",
    dataType:'text';
  })
  .done(function(test) {
      $('#table2').html(test);
  })
})