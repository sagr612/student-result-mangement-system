
<?php

if(isset($_POST['submit'])){
    require 'database.php';
    $id=$_POST['id'];
    $subject=$_POST['subject'];

    if( empty($id) || empty($subject)){
        header("Location: ../remmarks.php?error=emptyFields"); 
        exit();
    } 
    else { 
        $sql="SELECT Id FROM student WHERE Id ='$id' ";
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0){
            header("Location: ../remmarks.php?error=UserDoesNotExists"); 
            exit();
            
        } 
        else{
            $q="SELECT * from marks where id= '$id' ";
            $r=mysqli_query($conn,$sql);
            $rc=mysqli_num_rows($r);
            $q_2="SELECT * from marks where Subject= '$subject' ";
            $res=mysqli_query($conn,$q_2);
            $res_c=mysqli_num_rows($res);
            if($rc==0 || $res_c==0){
                header("Location: ../remmarks.php?error=NoDataFound");
                exit();
            }
            else{
                $q1="DELETE FROM marks where id='$id' AND Subject='$subject' ";
                $r1=mysqli_query($conn,$q1);
                header("Location: ../remmarks.php?sucess=UserMarksDeleted"); 
                exit();
            }
        }
    }
}

else{
    header("Location: ../remmarks.php?error=accessforbidden"); 
    exit();
}

?>