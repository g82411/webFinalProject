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
=======
    "content":tinymce.getInstanceById(content).getBody().innerHTML,
>>>>>>> a82c75cd62d51445a1887ef8712111ab60878274
    "commitTitile":$('input[id="commitTitile"]').val(),
    "bid":bid
  },
  function(data){
    
  });
});
<<<<<<< HEAD
=======

tinymce.init({
        selector: "h1.editable",
        inline: true,
        toolbar: "undo redo",
        menubar: false
    });
tinymce.init({
    selector:'textarea',
});
>>>>>>> a82c75cd62d51445a1887ef8712111ab60878274
