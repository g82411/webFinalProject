$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/book.php",
    dataType:'text';
    success: function(msg){
      alert(msg);
    },
    error:function(xhr, ajaxOptions, thrownError){ 
      alert(xhr.status); 
      alert(thrownError); 
    }
    .done(function(test) {
      $('#test').html(test);
    })
  })
})