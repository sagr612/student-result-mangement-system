<?php           

if(isset($_POST['submit'])){
    require 'database.php';
    $id=$_POST['id'];
    $subject=$_POST['subject'];
    $score=$_POST['score'];

    if(empty($id) || empty($subject) || empty($score) ){
        header("Location: ../addmarks.php?error=emptyFields"); 
        exit();
    } 
    else { 
        $sql="SELECT Id FROM student WHERE Id ='$id' ";
        $result=mysqli_query($conn,$sql); 
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0){
            header("Location: ../addmarks.php?error=NoSuchUser"); 
            exit();
            
        } else{
            $s="INSERT INTO marks VALUES('$id','$subject','$score')";
            $r=mysqli_query($conn,$s);
            header("Location: ../addmarks.php?sucess=MarksAdded"); 
            exit();
        }
    }
}
else{
    header("Location: ../addmarks.php?error=accessforbidden"); 
    exit();
}

?>