<?php
require_once 'includes/header.php';
?>

 
<div>
    <p> Get your result here  </p>

    <form action="includes/result_inc.php" method="post">
        <input type="number" name="id" placeholder="Roll Number" >
        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>


<?php
    require_once 'includes/footer.php';
?>
 