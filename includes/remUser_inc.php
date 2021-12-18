
<?php

if(isset($_POST['submit'])){
    require 'database.php';
    $id=$_POST['id'];

    if( empty($id) ){
        header("Location: ../remUser.php?error=emptyFields"); 
        exit();
    } 
    else { 
        $sql="SELECT Id FROM student WHERE Id ='$id' ";
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0){
            header("Location: ../remUser.php?error=UserDoesNotExists"); 
            exit();
            
        } else{
            $q1="DELETE FROM marks where id='$id' ";
            $r1=mysqli_query($conn,$q1);
            
            $q2="DELETE FROM student where Id='$id' ";
            $r2=mysqli_query($conn,$q2);

            header("Location: ../remUser.php?sucess=UserDeleted"); 
            exit();
        }
    }
}

else{
    header("Location: ../remUser.php?error=accessforbidden"); 
    exit();
}

?>