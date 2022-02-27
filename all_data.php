<?php
include 'db_config.php';
include 'database.php';
$db = new Database();
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













 <!--read data-->





<div class="container">         
  <table class="table table-light">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Files</th>
      </tr>
    </thead>
    <tbody>
    <?php   
				
					$query = "SELECT * FROM form_db";
					 $form=$db->select($query);
					 if($form){
						 $i=0;
						 while($result=$form->fetch_assoc()){
							$i++;
					
					
					?>
      <tr>
        <td><?php echo $result['id']?></td>


        <td><?php echo $result['name']; ?></td>

        <td><?php echo $result['email']; ?></td>

        <td><?php echo $result['phone']; ?></td>

        <td><img src="./assets/images/image_uploaded/<?php echo $result['image']?>" width="100px" height="100px"/></td>

      </tr>
      <?php } } ?>
    </tbody>
  </table>
</div>



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