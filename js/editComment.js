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
<<<<<<< HEAD
    "content":CKEDITOR.instances.commitArea.getData(),
    "commitTitle":$('input[id="commitTitile"]').val(),
=======

    "content":CKEDITOR.instances.commitArea.getData(),
    "commitTitile":$('input[id="commitTitile"]').val(),
>>>>>>> 3d8b2ecfe1d7d7a484d4d9d9690f02672092cc7c
    "bid":bid
  },
  function(data){
    
  });
});

