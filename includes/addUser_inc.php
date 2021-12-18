
<?php

if(isset($_POST['submit'])){
    require 'database.php';
    $id=$_POST['id'];
    $username=$_POST['username'];
    $date=$_POST['dob'];
    $fname=$_POST['fname'];

    if(empty($username) || empty($id) || empty($date) || empty($fname) ){
        header("Location: ../addUser.php?error=emptyFields"); 
        exit();
    } 
    else { 
        $sql="SELECT Id FROM student WHERE Id ='$id' ";
        $result=mysqli_query($conn,$sql); 
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0){
            $s="INSERT INTO student VALUES('$id','$username','$date','$fname')";
            $r=mysqli_query($conn,$s);
            header("Location: ../addUser.php?success=UserRegistered"); 
            exit();
            
        } else{
            header("Location: ../addUser.php?error=UserAlreadyExists"); 
            exit();
        }
    }
}

else{
    header("Location: ../addUser.php?error=accessforbidden"); 
    exit();
}

?>