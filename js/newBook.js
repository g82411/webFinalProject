alert(localStorage.getItem("key"));
if (true) {
	
};
$("#newBook").click(function(){
	$.post("./controller/newBook.php",
	{
		"bookTitle":$('input[id="bookTitle"]').val(),
		"author":$('input[id="author"]').val(),
		"imageUrl":$('input[id="imageUrl"]').val(),
		"ISBN":$('input[id="ISBN"]').val(),
		"resource":$('input[id="resource"]').val(),
    	"language":$("#language").find(":selected").text(),
	 	"profession":$("#profession").find(":selected").text(),
	 	"UserKey":localStorage.getItem("key");
	},
	function(data){
	});
});