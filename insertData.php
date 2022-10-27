<?php
//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');


//รับค่าตัวแปรที่ส่งมาจากฟอร์ม
$Sname = $_POST["Sname"];
$cid = $_POST["cid"];
$Saddress = $_POST["Saddress"];
$Sphoneno = $_POST["Sphoneno"];
$date = $_POST["date"];
$Rname = $_POST["Rname"];
$Raddress = $_POST["Raddress"];
$Rphoneno = $_POST["Rphoneno"];

//บันทึกข้อมูล
$sql = "INSERT INTO shipping(Sname,cid,Saddress,Sphoneno,date,Rname,Raddress,Rphoneno) VALUES('$Sname','$cid','$Saddress','$Sphoneno','$date','$Rname','$Raddress','$Rphoneno')";

$result = mysqli_query($connect,$sql); //รันคำสั่ง sql

if($result){
    echo "บันทึกข้อมูลเรียบร้อย";
}else{
    echo mysqli_error($connect);
}

?>