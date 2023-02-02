<form method="post" action="">
    <input type="text" name="studentname">
    <input type="submit" value="click" name="submit"> <!-- assign a name for the button -->
</form>

<?php
function display()
{
    echo "".$_POST["studentname"];
}
if(isset($_POST['submit']))
{
   display();
} 
?>