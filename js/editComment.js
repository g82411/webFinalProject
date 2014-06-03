$("#register").click(function(){
  document.location.href="register.html";
});

var url=window.location.toString();
if(url.indexOf("#")!=-1){
    var ary=url.split("#")[1].split("=")[1]; 
}
else{
    document.location.href="./index.html";
}
var bid=ary;
$("#send_button").click(function(){
  $.post("./controller/editCommit.php",
  {
    "content":CKEDITOR.instances.commitArea.getData(),
    "commitTitle":$('input[id="commitTitile"]').val(),
    "bid":bid
  },
  function(data){
    
  });
});

