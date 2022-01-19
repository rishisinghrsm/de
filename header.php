<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="THsudnsfnsfsuocnsdfsdfsfsdffsfisfhsisihsifshfishfsihihfisfih">
    <title>Digital Electric</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- ------------------------------------------------------------------- -->
    <!--fontawesome 5.0 script-->
<script src="https://kit.fontawesome.com/c2d50e9928.js" crossorigin="anonymous"></script>
<!--fontawesome 5.0 script-->


<!--font family
font-family: 'Iceland', cursive;">

3rd party link-->

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ------------------------------------------------------------------- -->
<!-- jquery  -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<!-- <link rel="stylesheet" href="style.css"> -->
<body>
    <div class="container-fluid bg-white text-dark " style="border-bottom:1px solid gray;">
        <div class="row text-center justify-content-between p-1">
            <div class="col-md-6 text-md-start">
                <i class="far fa-envelope text-dark"></i>
                <a href="mailto:" class="text-dark">  hello@degitalelectric.com </a>
                <span> | </span>
                <span>  </span>
                <i class="fa fa-phone-alt text-dark"></i>
                <a href="tel:+918877835956" class="text-dark"> +918877835956</a>
            </div>
            <div class="col-md-6 text-md-end">
            <span class=" text-danger" style="border-radius:50%;padding:10px;color:#dc3545"><a href="facebook.com" class="text-dark"><i class="fa fa-facebook"></i></a></span>
               <span class=" text-danger" style="border-radius:50%;padding:8px;color:#dc3545"><a href="facebook.com" class="text-dark"><i class="fa fa-twitter"></i></a></span>
               <span class=" text-danger" style="border-radius:50%;padding:8px;color:#dc3545"><a href="facebook.com" class="text-dark"><i class="fa fa-instagram"></i></a></span>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-white text-center vv ">
        <div class="row ">
            <div class="col-md-2 nav-items "><a href="index.php"><img src="images/logo.png" width="160px"  alt="DIGITAL ELECTRIC"></a><span class="float-right" id="bar"><i class="fa fa-bars"></i></span><span class="float-right" id="cross"><i class="fa fa-times-circle"></i></span></div>
            <div class="col-md-2 nav-items hidden"></div>
            <div class="col-md-1 nav-items hidden"><a href="index.php" class="nav_active active">HOME</a></div>
            <div class="col-md-1 nav-items hidden"><a href="about.php" class="nav_active ">ABOUT</a></div>
            <div class="col-md-1 nav-items hidden"><a href="#" class="nav_active ">SERVICE</a></div>
            <div class="col-md-1 nav-items hidden"><a href="#" class="nav_active ">GALLERY</a></div>
            <div class="col-md-1 nav-items hidden"><a href="#" class="nav_active ">HOME</a></div>
            <div class="col-md-1 nav-items hidden"><a href="#" class="nav_active ">CONTACT</a></div>
            <!-- <div class="col-1 nav-items "><span><i class="fa fa-server"></i></span></div> -->
        </div>
        
    </div>

<script >
    $(document).ready(function(){
        $('#bar').click(function(){
            $('.hidden').slideToggle();
            $('#bar').hide();
            // $(this).toggleClass('fa fa-bars');

            $('#cross').show();
        });

        $('#cross').click(function(){
            $('.hidden').slideToggle();
            // $(this).toggleClass('fa fa-times-circle');

            $('#bar').show();
            $('#cross').hide();
        });

        $('.nav_active').click(function(){
            $('.nav_active').removeClass('active');
            $(this).toggleClass('active');
        });
       
    });
</script>
</body>
</html>