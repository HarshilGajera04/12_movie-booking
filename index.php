<?php 
session_start();
include("header.php");

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Ticket Booking System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

      <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="  text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">  
    
    
    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 400px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      /* object-fit: cover; */
      background-size: cover;
      
    
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>




<div class="container">
   <!-- <img src=image/theatre_2.jpg alt="" class="image-resize" style="width: 100%; height: 400px;"> -->
</div>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://assets-in.bmscdn.com/promotions/cms/creatives/1706610667989_webebeb.jpg" alt="" srcset=""></div>
      <div class="swiper-slide"><img src="https://assets-in.bmscdn.com/promotions/cms/creatives/1704718263618_web.jpg" alt=""></div>
      <div class="swiper-slide"><img src="https://assets-in.bmscdn.com/promotions/cms/creatives/1706533151314_agstsguydc.jpg" alt=""></div>
  
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

 

<div class="container">
    <h2>Running Movies</h2>
     <div class="row">
<?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM add_movie");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
      if($row['action']== "running"){
    ?>
    
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="running-movie">
             <img src=admin/image/<?php echo $row['image']; ?> alt="" class="image-resize2" style="width: 100%;">
              <div class="top-right">
                <a data-toggle="modal" data-target="#tailer_modal<?php echo $row['id'];?>"><img src="img/icon/play.png"></a></div>
                <h5><b><?php echo $row['movie_name'];?></b></h5>
                <h6><center><?php echo $row['language'];?></center></h6>
               <a href="movie_details.php?pass=<?php echo $row['id'];?>" class="btn btn-primary">Book Now</a>
            </div>
           </div>
           
           <div class="modal fade" id="tailer_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <embed style="width: 820px; height: 450px;" src="<?php echo $row['you_tube_link'];?>"></embed>
              </div>
            </div>
          </div> 
           
  <?php
}
  }
}
?>
</div>
      </div> 

<div class="container">
    <h2>Upcoming Movies</h2>
    <div class="row">
      <?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM add_movie");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
      if($row['action']== "upcoming"){
    ?>
        <div class="image-box">
          <div class="col-lg-2 col-md-3 col-sm-6">
        
            <div class="card" style="width: 12rem;">
               <img class="card-img-top image-resize4" src="admin/image/<?php echo $row['image']; ?> " alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['movie_name'];?></h5>
                  <p class="card-text">Director: <?php echo $row['directer'];?></p>
                </div>
              </div>
            </div>
        </div>
<?php
}
  }
}
?>

</div>
</div>



   <?php
   include("footer.php");
   ?>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>


// <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

// <!-- Initialize Swiper -->

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

</script>