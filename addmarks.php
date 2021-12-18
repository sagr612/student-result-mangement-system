<?php
require_once 'includes/admin_header.php';
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:admin.php");
    exit();
}
?>


 
<div>
    <p>Add marks of a student here </p>

    <form action="includes/addmarks_inc.php" method="post">
        <input type="number" name="id" placeholder="Roll Number" >
        <input type="text" name="subject" placeholder="Subject Name" >
        <input type="number" name="score" placeholder="Subject marks" >
        
        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>


<?php
    require_once 'includes/footer.php';
?>
