<?php
require_once 'includes/admin_header.php';
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:admin.php");
    exit();
}
?>


<div>
    <p>Remove a student Here</p>
    <form action="includes/remUser_inc.php" method="post">
        <input type="number" name="id" placeholder="Roll Number" >
        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>



<?php
    require_once 'includes/footer.php';
?>
