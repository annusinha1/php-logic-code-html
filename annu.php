<?php
if(isset($_POST["submit"]))
{
    $val = intval($_POST["Name"]);
    $clas = intval($_POST["Class"]);
    
    for ($i=1; $i<=10 ; $i++) { 
        echo $clas*$i."<br>";
    }
// echo $_POST["Name"];
}
?>
 <form id="myform" role="form" action="" method="post">
        <input type="text" class="form-control" name="Name">  
        <input type="text" class="form-control" name="Class">  
        <input type="submit"  name="submit">
    </form> 