<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha Trang Hotel-Resorts-Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
    <?php require('inc/links.php');?>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important ;
        transform       : scale(1.03);
        transition      : all 0.3s;
      }
    </style>
    
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Best of desnation on the word 
  </p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
         <iframe class="w-100 rounded " height="320px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124762.70707798099!2d109.24650199999999!3d12.25947015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677811cc886f%3A0x5c4bbc0aa81edcb9!2zTmhhIFRyYW5nLCBLaMOhbmggSMOyYQ!5e0!3m2!1sen!2s!4v1661486795933!5m2!1sen!2s"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://goo.gl/maps/N9se1idRF646nXeK7">
          <i class="bi bi-geo-alt-fill"></i>
            Nha Trang Khanh Hoa Provice Vietnam
          </a>
          <h5 class="mt-4">Call Us</h5>
        <a href="Tel: +84 79797979797" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+84 79797979797</a> <br>
        <a href="Tel: +84 79797979797" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+84 79797979797</a>
        <h5 class="mt-4">Email</h5>
        <a href="email to: huuhienvkl@gmail.com"> 
        <i class="bi bi-envelope me-2"></i>huuhienvkl@gmail.com</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
         <form>
          <h5>Sent a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight :500;">Name</label>
          <input type="name" class="form-control shadow-none">
           </div>
           <div class="mb-3">
          <label class="form-label" style="font-weight :500;">Email</label>
          <input type="email" class="form-control shadow-none">
         </div>
         <div class="mb-3">
          <label class="form-label" style="font-weight :500;">Subject</label>
          <input type="subject" class="form-control shadow-none">
         </div>
         <div class="mb-3">
          <label class="form-label" style="font-weight :500;">Message</label>
          <textarea class="form-control shadow-noe" rows="5" stype="resize: none;"></textarea>
         </div>
         <button stype="submit" class="btn text-white custom-bg mt-3">SEND</button>
         </form>
        </div>
      </div>
      
    </div>
    </div>


 <?php require('inc/footer.php');?>
</body>
</html>

