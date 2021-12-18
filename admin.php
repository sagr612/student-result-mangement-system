<?php
require_once 'includes/header.php';
?>


<div>
    <p> Admin Login </p>

    <form action="includes/admin_inc.php" method="post">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="password" placeholder="Password" >
        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>


<?php
    require_once 'includes/footer.php';
?>
