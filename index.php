<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha Trang Hotel-Resorts- Home</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    
<style>
 
  .availability-form{
    margin-top: -50px;
    z-index: 2;
    position: relative;
  }
  @media screen and (max-width: 575px){
    .availability-form{
        margin-top: 25pt;
        padding: 0 35pt;
    }
    
  }

</style>
</head>
<body>
<?php require('inc/header.php');?>

 
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block"/>
        </div>
      </div>
     </div>
     <!---- Check Availability form --->
     <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Checking Booking Availability </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form label" style="font-weight: 500;"> Check-in </label>
                            <input type="date" class="form-control shadow-none">
                        </div> 
                        <div class="col-lg-3 mb-3">
                            <label class="form label" style="font-weight: 500;"> Check-out </label>
                            <input type="date" class="form-control shadow-none">
                        </div>  
                        <div class="col-lg-3 mb-3">
                            <label class="form label" style="font-weight: 500;"> Adult </label>
                            <select class="form-select shadow-none">
                            <option value="1">One</option>
                             <option value="2">Two</option>
                            <option value="3">Three</option>
                             </select>
                        </div>  
                        <div class="col-lg-2 mb-3">
                            <label class="form label" style="font-weight: 500;"> Children </label>
                            <select class="form-select shadow-none">
                             <option value="1">One</option>
                             <option value="2">Two</option>
                            <option value="3">Three</option>
                             </select>
                        </div>  
                        <div class="col-lg-1 mb-lg-3 mt-2 ">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>    
                    </div>   
                </form>
            </div> 
        </div>
     </div>      
 
</div> 
    <!----- Our Rooms ---->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
       <!---Card 1-->     
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card" style="max-width: 350px ; margin: auto;">
                <img src="images/rooms/IMG_11892.png" class="card-img-top">

                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">199 $ per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                   <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
                      that will be require during check-in. --->
                      2 rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bancony
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Sofa
                      </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
                           that will be require during check-in. --->
                           Wifi 
                         </span>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                           Television
                         </span>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                             AC
                           </span>
                           <span class="badge rounded-pill bg-light text-dark text-wrap">
                             Room heater
                           </span>
                  </div>
                  <div class="Rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                     </span>
                 </div>
                 <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>
            </div>
         </div>
     </div>
     <!-- Card 2 --->
     <div class="col-lg-4 col-md-6 my-3">
        <div class="card" style="max-width: 350px ; margin: auto;">
            <img src="images/rooms/IMG_11892.png" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">199 $ per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
               <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
                  that will be require during check-in. --->
                  2 rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bancony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
                       that will be require during check-in. --->
                       Wifi 
                     </span>
                     <span class="badge rounded-pill bg-light text-dark text-wrap">
                       Television
                     </span>
                     <span class="badge rounded-pill bg-light text-dark text-wrap">
                         AC
                       </span>
                       <span class="badge rounded-pill bg-light text-dark text-wrap">
                         Room heater
                       </span>
              </div>
              <div class="Rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning" ></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                 </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
        </div>
     </div>
 </div>
 <!---Card 3-->
 <div class="col-lg-4 col-md-6 my-3">
    <div class="card" style="max-width: 350px ; margin: auto;">
        <img src="images/rooms/IMG_11892.png" class="card-img-top">

        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6 class="mb-4">199 $ per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
              that will be require during check-in. --->
              2 rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bancony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Sofa
              </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                <!--   Note: Your details must be match with your ID (ID card , Passport ,Driving license ) 
                   that will be require during check-in. --->
                   Wifi 
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Television
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                     AC
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap">
                     Room heater
                   </span>
          </div>
          <div class="Rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning" ></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
             </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
        </div>
    </div>
 </div>
</div>
        <div class="col-lg-12 text-center mt-5 ">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>

        </div>
        </div>
    </div>
    <!----- Our Facilities ---->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
             <img src="images/facilities/IMG_43553.svg" width="80px">
             <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px">
                <h5 class="mt-3">Television</h5>
               </div>
             <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
             <img src="images/facilities/IMG_47816.svg" width="80px">
             <h5 class="mt-3">Room heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_96423.svg" width="80px">
                <h5 class="mt-3">AC</h5>
               </div>  
               <div class="col-lg-12 text-center mt-5 ">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    
            </div>  

        </div>
    </div>
    <!----- Our Testimonials ---->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">TESTIMONIALS</h2>
    <div class="container">
        <div class="swiper Testimonials">
            <div class="swiper-wrapper">
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-itmes-center mb-3">
                <img src="images/facilities/IMG_27079.svg" width="30px">
                <h6 class="m-0 ms-2">Random User</h6>
                </div>
                <p>
                  Spacious and clean room. Too bad that if you booked trough travel agent, you can not request for the room view
                </p>
                <div class="Rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                     </span>
                 </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-itmes-center mp-3">
                <img src="images/facilities/IMG_27079.svg" width="30px">
                <h6 class="m-0 ms-2">Random User</h6>
                </div>
                <p>
                  Spacious and clean room. Too bad that if you booked trough travel agent, you can not request for the room view
                </p>
                <div class="Rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                     </span>
                 </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-itmes-center mp-3">
                <img src="images/facilities/IMG_27079.svg" width="30px">
                <h6 class="m-0 ms-2">Random User</h6>
                </div>
                <p>
                  Spacious and clean room. Too bad that if you booked trough travel agent, you can not request for the room view
                </p>
                <div class="Rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                     </span>
                 </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
    <!----- Reach Us ---->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">REACH US</h2>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded " height="320px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124762.70707798099!2d109.24650199999999!3d12.25947015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677811cc886f%3A0x5c4bbc0aa81edcb9!2zTmhhIFRyYW5nLCBLaMOhbmggSMOyYQ!5e0!3m2!1sen!2s!4v1661486795933!5m2!1sen!2s"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
            <h5>Call Us</h5>
        <a href="Tel: +84 79797979797" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+84 79797979797</a>
        <a href="Tel: +84 79797979797" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+84 79797979797</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2 ">
          <i class="bi bi-twitter me-1"></i>Twitter</span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2 ">
            <i class="bi bi-facebook me-1"></i>Facebook</span>
          </a>
        </br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2 ">
            <i class="bi bi-instagram me-1"></i>Instagram</span>
          </a>
          </div>
          </div>
         
      </div>
        </div>
    </div>
    
    </div>

    <?php require('inc/footer.php');?>
    
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>  
  <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoply:{
            delay:3500,
            disableOnInteraction: false,
        }
       });
       
      var swiper = new Swiper(".Testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3" ,
        loop: true ,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
      });
    
    </script>
</body>
</html>

