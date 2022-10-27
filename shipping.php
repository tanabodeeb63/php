<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shipping.css">
    <link rel = "icon" href ="Box Delivery Services.png" type="image/x-icon">
    <title>Shipping | จัดส่งพัสดุ</title>
</head>
    <header>
        <a href="index.php" class="logo">KPT Express</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="track&trace.php">Track & Trace</a></li>
                <li><a href="shipping.php">Shipping</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>
<div class="page">
<form action="insertData.php" method="POST" class="form-floating1 ">
<div class="container1" >     
<h4><p>ข้อมูลผู้จัดส่ง</p></h4>
</div>
    <input type="text" class="form-control" name="Sname" id="" placeholder="Name" style="font-size: 22px; width:150%;height:40px">
    <p></p>
    <input type="text" class="form-control" name="cid" id="" placeholder="ID card number" style="font-size: 22px;width:150%;height:40px">
    <p></p>
    <input type="text" class="form-control" name="Saddress" id="" placeholder="Address" style="font-size: 22px;width:150%;height:40px">
    <p></p>
    <input type="text" class="form-control" name="Sphoneno" id="" placeholder="Phone number" style="font-size: 22px;width:150%;height:40px">
    <p></p>
    <input type="date" name ="date" id="" value="0000-00-00" style="font-size: 1.2rem; cursor: pointer;">
    <p></p>
<div class="container2" >
    <h4><p>ข้อมูลผู้รับ</p></h4>     
</div>
<input type="text" class="form-control" name="Rname" id="" placeholder="Name" style="font-size: 22px;width:150%;height:40px">
<p></p>
<input type="text" class="form-control" name="Raddress" id="" placeholder="Address" style="font-size: 22px;width:150%;height:40px">
<p></p>
<input type="text" class="form-control" name="Rphoneno" id=""placeholder="Phone number" style="font-size: 22px;width:150%;height:40px">
<p></p>
<input type="submit" value="SAVE" class="btn btn-warning" style="font-size:1.2rem;width:40%;background-color:#333; color:white; border:none; border-radius: 4px; border-width: 1px;cursor: pointer;">
<input type="button" value="PRINT" class="btn btn-warning" style="font-size:1.2rem;width:40%;background-color:#333; color:white; border:none; border-radius: 4px; border-width: 1px;cursor: pointer;">
</form>
</div>

<div class="image1">
    <img src="Box Delivery Services.png" style=" width: 150%;height: 150%;">
</div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>