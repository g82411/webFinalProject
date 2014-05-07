<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<head>
<script type="text/javascript"> </script>
    <script>
         var Login=function(){
            var URLs="\controller\check_login.php";
           
            $.ajax({
                url: URLs,
                data: $('#.ID').serialize(),
                type:"POST",
                dataType:'text',

                success: function(msg){
                    alert(msg);
                },

                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                 }
            });
            
        }
       

</script>
</head>

<body>

<div style="width:500px; height:400px; background-color:red;position:relative;top:100px; left:80px; "></div>
<input id=".ID" type="id" class="form-control" id="ID" placeholder="ID" style="width:300px; height:50px;position:relative;top:-290px; left:600px; ">
<input id=".password" type="password" class="form-control" id="Password" placeholder="Password" style="width:300px; height:50px;position:relative;top:-200px; left:600px; ">

<button id=".login" type="button" class="btn btn-default" style="width:100px; height:50px;position:relative;top:-100px; left:600px; " onclick="login()">Login</button>

<button id=".register"  type="button" class="btn btn-default" style="width:100px; height:50px;position:relative;top:-100px; left:700px; " >Register</button>






<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Index.js"></script>

</body>
</html>