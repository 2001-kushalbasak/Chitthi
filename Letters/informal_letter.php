<?php
    $name=$_GET['nm'];
    $houseno=$_GET['hno'];
    $Streetname=$_GET['stn'];
    $cityname=$_GET['cname'];
    $pincode=$_GET['pin'];
    $to=$_GET['to'];
    $date=$_GET['date'];
    ?>


<!DOCTYPE.html>
<html>
<head>


<title>Informal Letter</title>
    
    <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
                                            <center><h1>Informal Letter List:-</h1></center>
    
                                                <center><h2>Letter 1</h2></center>
    
    <p>
<?php echo $houseno.', '?><?php echo $Streetname ?><br>
<?php echo $cityname .' -'. $pincode?><br>
<?php echo $date  ?><br>


Dear <?php echo $to?>,<br>
        
It is extremely thoughtful of you to plan a get-together for all of us. I wish I could join you, but I am sorry to say that I have a project starting next month and it would not be possible for me to be there. If there is any way of preponing the get-together to any time before the month-end, I can definitely make it happen.<br>
I hope we can reschedule the get-together and not miss the chance to meet up. Waiting to hear from you.
<br>
    
With love,<br>
<?php echo $name ?>
    </p>
    
    <br>
    <br>
    
                                                <center><h2>Letter 2</h2></center>
    
    
<p>
<?php echo $houseno.', '?><?php echo $Streetname ?><br>
<?php echo $cityname .' -'. $pincode?><br>
<?php echo $date  ?><br>

   Dear <?php echo $to?>,<br>

How are you doing? I hope all is well. I just read the novel which you wrote last week in Kolkata. How can someone write so beautifully? Amazing! My father has also appreciated your work and has asked me to tell you that you are doing an incredible job.
I really appreciate the words that you have used and the tone. The best part of your novel is that your work is absolutely real and derived from real-life experiences. It shows your writing skills and how much effort you have given to your writings. You have done absolute justice and I am proud of the way you have handled it.

Rahul, it has been two years since we have drifted apart because of our higher studies and career. I hope to meet you soon. Go ahead! The sky is the limit!
<br>
With best wishes,<br>
Yours lovingly,<br>
<?php echo $name ?></p>
    
    
</body>
</html>