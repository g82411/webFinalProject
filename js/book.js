var url=window.location.toString();
if(url.indexOf("#")!=-1){
    var ary=url.split("#")[1].split("=")[1]; 
}
else{
    document.location.href="./index.html";
}
var BID;
var bid=ary;
$(function(){ 
  $.ajax({
    type: "GET",
    url: "./controller/book.php?bid="+bid
  })
  .done(function(data) {
  		data=JSON.parse(data);
      $('#table2').html('<tr><td><p>書名</p></td><td><p>'+data.bookTitle+'</p></td></tr>'+
      	'<tr><td><p>作者</p></td><td><p>'+data.author+'</p></td></tr>'+
      	'<tr><td><p>ISBN</p></td><td><p>'+data.ISBN+'</p></td></tr>'+
    	'<tr><td><p>日期</p></td><td><p>'+data.date+'</p></td></tr>'+
    	'<tr><td><p>commit數</p></td><td><p>'+data.hot+'</p></td></tr>'+
    	'<tr><td><p>提供者</p></td><td><p>'+data.author+'</p></td></tr>'+
    	'<tr><td><p>resource</p></td><td><a href=\"'+data.resource+'\">'+data.resource+'</a></td></tr>'+
    	'<tr><td><p>type</p></td><td><p>'+data.profession+'</p></td></tr>'+
    	'<tr><td><p>Language</p></td><td><p>'+data.Language+'</p></td></tr>'
      	);
      BID=data.BID;
      
  })
});

$("#edit").click(function(){
  document.location.href='./editCommit.html#bid='+BID;
});