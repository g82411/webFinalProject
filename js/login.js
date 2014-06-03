$("#register").click(function(){
  document.location.href="register.html";
});


$("#login").click(function(){
  $.post("./controller/login.php",
  {
    "content":$('#commitArea').val(),
    "commitTitile":$('input[id="commitTitile"]').val(),
    "bid":bid
  },
  function(data){
  	
	});
});
