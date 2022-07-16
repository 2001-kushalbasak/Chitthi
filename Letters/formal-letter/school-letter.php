<?php
    $sendersname=$_GET['sn'];
    $schoolname=$_GET['schnm'];
    $cityname=$_GET['cn'];
    $statename=$_GET['stname'];
    $pincode=$_GET['pin'];
    $date=$_GET['date'];
    $to=$_GET['to'];
    $salutation=$_GET['salutation'];
    $gender=$_GET['gender'];
    $closing=$_GET['closing'];
    ?>


<!DOCTYPE.html>
<html>
<head>


<title>Informal[School Letter] Letter</title>
    
    <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
                                            <center><h1>Formal[Schol Letter] Letter List:-</h1></center>
    
                                                <center><h2>Appeal </h2></center>
    
    <p>
<?php echo $sendersname?><br>        
<?php echo $schoolname ?><br>
<?php echo $cityname?><br>
<?php echo $statename?><br>
<?php echo $pincode?><br>
        <br>
<?php echo $date  ?><br>
<br>     
<?php echo $to?>,<br>       
<?php echo $schoolname ?><br>
<?php echo $cityname?><br>
<?php echo $statename?><br>
<?php echo $pincode?><br>
        <br>
Subject: Leave of Absence
        
        <br>
        <br>
        <br>
<?php echo $salutation .' '?><?php echo $gender ?> 
        <br>
I am Varsha from Class VI-B, and I am writing this letter to inform you that I will remain absent for the next 2 days on account of my sister’s marriage.

My sister’s wedding ceremony will begin from 24th January to 25th January 2021, and as a younger sister, my presence at the wedding ceremony is unavoidable. As a sister, I have so many duties to be carried out at the wedding and also, I am responsible for looking after the arrangements for the wedding ceremony.

So, I kindly request you to grant me 2 days’ leave (24th and 25th of January). The wedding card is attached herewith for your perusal.
      <br><br>  
Thanking You,<br>
Your's <?php echo $closing ?><br>
        <?php echo $sendersname?>
    </p>
    
    <br>
    <br>
    
</body>
</html>