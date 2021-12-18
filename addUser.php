<?php
require_once 'includes/admin_header.php';
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:admin.php");
    exit();
}
?>


<div>
    <p>Add a student Here</p>
    <form action="includes/addUser_inc.php" method="post">
        
        <input type="number" name="id" placeholder="Roll Number" >
        <input type="text" name="username" placeholder="Name" >
        <input type="date" name="dob" placeholder="Date of Birth" >
        <input type="text" name="fname" placeholder="Father's Name" >

        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>



<?php
    require_once 'includes/footer.php';
?>
