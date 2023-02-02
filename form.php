<html>
    <head>
        <style>
            .form_div{
             background-color:skyblue;
             width: 40%;
             /* text-align:center; */
             display:flex;
             justify-content:center;
             box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.49);
             margin-top: 20px; 

            }
            .btn{
                background-color:red;
                color:#fff;
                border:none;
                height:20px;
                display:flex;
                justify-content:flex-end;
            }
            .btn:hover{
                background-color:green;
            }
        </style>
    </head>
    <body?>
<div class="form_div">
<form action="" method="post" id="myform">
Name: <input type="text" name="name" id="fname"><br>
E-mail: <input type="text" name="email" id="femail"><br>
Website: <input type="text" name="website" id="fsite"><br>
Comment: <textarea name="comment" rows="5" cols="40" id="fcomment"></textarea><br>
Gender:
<input type="radio" name="gender" value="female" id="fgender">Female <br>
<input type="radio" name="gender" value="male" id="fgender">Male<br>
<input type="radio" name="gender" value="other" id="fgender">Other <br>
<input type="submit" value="click" name="submit" >
<input type="submit" class="btn"  value="Clear" onclick="clearform();">
</form>
</div>
<?php
function form(){
    echo $_POST["name"]."<br>";
    echo $_POST["email"]."<br>";
    echo $_POST["website"]."<br>";
    echo $_POST["comment"]."<br>";
    echo $_POST['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';  

}

if(isset($_POST["submit"]))
{
    form();
}

?>
<script>
function clearform() {
  document.getElementById("myform").reset();
}
</script>
</body>
</html>