<?php
include 'db_config.php';
include 'database.php';
require 'PHPMailerAutoload.php';
require 'credential.php';
$db = new Database();

$mail = new PHPMailer;
?>








<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/static/fav.png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    <title>DC Template</title>
    <!--==============css links start==============-->
    <link rel="stylesheet" href="./assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="assets/lib/slick_slider/slick.min.css">
    <link rel="stylesheet" href="assets/lib/light_gallery/lightgallery.css">
    <link rel="stylesheet" href="assets/lib/layer_slider/layerslider.css">
    <link rel="stylesheet" href="assets/lib/nice_select/nice-select.css">
    <link rel="stylesheet" href="assets/css/home.css">


    <!--==============css links end==============-->
</head>

<body>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
 $name  = mysqli_real_escape_string($db->link, $_POST['name']);
 $email = mysqli_real_escape_string($db->link, $_POST['email']);
 $phone = mysqli_real_escape_string($db->link, $_POST['phone']);



    $permited  = array('jpg', 'jpeg', 'png', 'gif','svg',);
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $folder = "assets/images/image_uploaded/";
    move_uploaded_file($file_temp, $folder.$file_name);
  
   

    if($name == '' || $email == '' || $phone == ''|| $file_name==''){
      $error ="Field must not be Empty !!";
     }
     
     else {
      $query = "INSERT INTO form_db(name,email,phone,image) VALUES
      ('$name','$email','$phone','$file_name')";
      $inserted_rows = $db->insert($query);
     
      
   
    if ($inserted_rows) {
        echo "<p id='postMsg'>Inserted Successfully.
        </p>";
    }else {
        echo "<p class='error'>Not Inserted !</p>";
    }
}


if(isset($_POST['submit_button'])){




    $mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom(EMAIL, 'Dcastalia Intern');
    $mail->addAddress('girish.dcastalia@gmail.com', 'Girish');     // Add a recipient

    $mail->addReplyTo(EMAIL);

   // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

}


?>






<section class="forms_section pt150">
        <div class="container">
            <div class="row justify-content-center d-block">
                <div class="col-md-12">
                <span id="postMsg" class="text-center mb-4"></span>
                    <form class="form-class" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail"  placeholder="Email" name="email">
                            <span id="emailMsg"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputNumber">Phone Number</label>
                            <input type="number" class="form-control" id="inputNumber" placeholder="Phone Number" name="phone">
                            <span id="phoneMsg"></span>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="file_upload">Upload Files</label>
                            <input type="file" class="form-control-file" id="file_upload" name="image">
                        </div>

                        <button class="btn btn-primary btn-block button-submit" name="submit_button" id="submit_button">Submit Data</button>
                        <button class="btn btn-primary btn-block" name="show_button"><a href="all_data.php">All Data</a></button>
                    </form>
                </div>
            </div>
        </div>
</section>



















    <!--======================= js links ======================= -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>
    <script src="assets/lib/light_gallery/lightgallery.js"></script>
    <script src="assets/lib/layer_slider/layerslider.transitions.js"></script>
    <script src="assets/lib/layer_slider/layerslider.kreaturamedia.jquery.js"></script>
    <script src="assets/lib/slick_slider/slick.js"></script>
    <script src="assets/lib/gsap/tweenmax.js"></script>
    <script src="assets/lib/anim/jquery.blast.min.js"></script>
    <script src="assets/lib/nice_select/jquery.nice-select.min.js"></script>
    <script src="assets/lib/preload/image-preloader.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="assets/script.js"></script>


</body>

</html>