
<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username) || empty($password) ){
        header("Location: ../admin.php?error=accessforbidden"); 
        exit();
    } 
    else { 
        if($username=='admin' && $password=='123'){
            header("Location: ../addUser.php?success=accessgranted"); 
            if (!session_id()){
                session_start();
            }
            $_SESSION['login'] = true;

            exit();
        }
        else{
            header("Location: ../admin.php?error=accessforbidden"); 
            exit();
        }
    }
}

else{
    header("Location: ../admin.php?error=accessforbidden"); 
    exit();
}

?>