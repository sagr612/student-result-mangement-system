<?php

if(isset($_POST['submit'])){
    require 'database.php';
   
    $id=$_POST['id'];

    if( empty($id) ){
        header("Location: ../index.php?error=emptyFields"); 
        exit();
    } 
    else { 
        $sql="SELECT * FROM student WHERE Id ='$id' ";
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0){
            header("Location: ../index.php?error=UserDoesNotExists"); 
            exit();
            
        } else{
            $row=mysqli_fetch_assoc($result);
            $Roll=$row['Id'];
            $Name=$row['Name'];
            $dob=$row['DOB'];
            $fname=$row['Father_Name'];


            $q1="SELECT * FROM marks where id='$id' ";
            $r1=mysqli_query($conn,$q1);
            $num=mysqli_num_rows($r1);
            if($num==0){
                header("Location: ../index.php?error=NoDataFound"); 
                exit();
               
            } 
            else{
                $temp= "Student Name  : ".$Name."<br>";
                $temp.= "Student Roll Number  : ".$Roll."<br>";
                $temp.=  "Date of Birth  : ".$dob."<br>";
                $temp.=  "Father's Name  : ".$fname."<br>";
                $temp.="<br>";
                $temp.= "<br>";

                $totalMarks=0;
                $totalSubjects=0;
                $temp.= "<br>";
                $temp.= "<br>";
                
                $temp.="<table>";
                $temp.="<tr><td>Subject Name</td><td>Subject Marks</td>";
                while($row1=mysqli_fetch_assoc($r1)){
                    $temp.="<tr><td>".$row1['Subject']."</td><td>".$row1["Marks"]."</td>";
                    $totalSubjects=$totalSubjects+1;
                    $totalMarks=$totalMarks+$row1['Marks'];
                }
                $temp.='</table>';
                $temp.="<br>";
                $temp.= "Total Marks : ".$totalMarks."<br>";
                $percent=($totalMarks*100)/($totalSubjects*100);
                $temp.="Percentage : ".number_format($percent,2)."<br>";
                echo $temp;
                // header("Location: ../index.php"); 

               
                exit();
            }
        }
    }
}

else{
    header("Location: ../index.php?error=accessforbidden"); 
    exit();
}

?>