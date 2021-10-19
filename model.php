<?php
require_once 'db_connect.php';

function addEmployee($data){
    $conn=db_conn();
    $selectQuery="INSERT into user (firstname,lastname,email,gender,mobile,dob,hsc,ssc,course,enroll_year,enroll_semester) values (:firstname,:lastname,:email,:gender,:mobile,:dob,:hsc,:ssc,:course,:enroll_year,:enroll_semester)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':firstname'=> $data['firstname'],
            ':lastname'=> $data['lastname'],
            ':email'=> $data['email'],
            ':gender'=> $data['gender'],
            ':mobile'=> $data['mobile'],
            ':dob'=> $data['dob'],
            ':hsc'=> $data['hsc'],
            ':ssc'=> $data['ssc'],
            ':course'=> $data['course'],
            ':enroll_year'=> $data['enroll_year'],
            ':enroll_semester'=> $data['enroll_semester'],
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

        $conn = null;
        return true;
}