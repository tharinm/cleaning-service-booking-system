<?php
include_once('../../Home-page/config.php');
session_start();


if(isset($_POST['submit']))
{


  $bankname= mysqli_real_escape_string($conn,$_POST['bname']); 
  $bankaccount  = mysqli_real_escape_string($conn, $_POST['acc']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  


  $sql="INSERT INTO customer_bank_details(bank_name,bank_acc,cb_email) VALUES('$bankname','$bankaccount','$email')";
  $result1=mysqli_query($conn,$sql);

  $result2=mysqli_query($conn,"SELECT a_emp_id,a_order_id from job_accepted_emp where role='user' or mobile=$mobile");
  $row=mysqli_fetch_array($result2);
  

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">

        <form method="POST" action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">Reshedule Form</h3>

                    <div class="inputBox">
                        <span>Date :</span>
                        <input type="text" placeholder="Tharindu Madhushan" >
                    </div>
                    <div class="inputBox">
                        <span>Time :</span>
                        <input type="email" placeholder="example@example.com" name="email">
                    </div>
                    
                   

                
                </div>

            </div>

            <input type="submit" value="submit" class="submit-btn" name="submit">

        </form>

    </div>

</body>

</html>