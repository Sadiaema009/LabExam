<?php
require_once 'model.php';

if(isset($_POST['submit'])){
    $data['firstname']=$_POST['firstname'];
    $data['lastname']=$_POST['lastname'];
    $data['email']=$_POST['email'];
    $data['gender']=$_POST['gender'];
    $data['mobile']=$_POST['mobile'];
    $data['dob']=$_POST['dob'];
    $data['hsc']=$_POST['hsc'];
    $data['ssc']=$_POST['ssc'];
    $data['course']=$_POST['course'];
    $data['enroll_year']=$_POST['enroll_year'];
    $data['enroll_semester']=$_POST['enroll_semester'];
    
    
    if(addEmployee($data)){
        echo 'successfully added!!';
    }
    else{
        echo 'you are not allowed to access this page';
    }
}
?>