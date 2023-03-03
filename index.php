<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>NIT-N Student Portal</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/en/1/1d/National_Institute_of_Technology%2C_Nagaland_Logo.png">
     <link rel="stylesheet" href="style.css">
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
</head>
<body>
    
    <!-- preloader...... -->
    <!-- <div class="loader-wrapper">
        <div class=" "><img src="https://upload.wikimedia.org/wikipedia/en/1/1d/National_Institute_of_Technology%2C_Nagaland_Logo.png" alt=""><div></div>
     </div>

    </div> -->
    <!-- preloader end...... -->
    <?php require 'Navbar.php'?>
    
    <div class="main">
        <div class="container">
            <div class="row">
         <div class=" col-lg-6 mx-auto d-flex justify-content-center align-items-center g"   >
               <div  class="row rowStyle  text-center"   data-aos="fade-left" >
                     <div data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine"
                            style="display:inline-block;">
                      <h1 class="text-primary"> <span >NIT-Nagaland</span></h1>
                      <h2  style="color:grey">Student Portal</h2>
                    </div>
                    <div>
                       <p style="color:black">This is the Official NITN Portal for the students of NIT Nagaland. It's compulsory to register here for every student of NIT Nagaland to ease the process for both students and the Institution.</p>
                        <button class="btn btn-primary">More Info</button>
                    </div>
              </div>
              
         </div>
         <div class=" col-lg-6 g mx-auto" >
            <div  data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
            <div class="row"   >
                <?php require 'Login.php'?>
              </div>     
           </div>
         </div>
         </div>
        </div>
            
    </div>
    
   <!-- <script> 
     $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
     });
  </script> -->
<script>
  AOS.init();
</script>
</body>
</html>