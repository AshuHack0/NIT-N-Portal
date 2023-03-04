<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>
    <title>NIT-N Student Portal</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://upload.wikimedia.org/wikipedia/en/1/1d/National_Institute_of_Technology%2C_Nagaland_Logo.png"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
      
    <?php require 'Navbar.php'?>

    <div class="container-fluid ">
      <div class="mt-5 row" style="height: 80vh; width: 100vw">
         
        <div class="col-lg-4 order-2 right"  >
          <div
            class="text-center"
            data-aos="fade-right"
            data-aos-offset="100"
            data-aos-easing="ease-in-sine"
            style="display: inline-block"
          >
            <h1 class="text-primary ">NIT-Nagaland </h1>
            <h2 style="color: grey">Student Portal</h2>
          </div>
          <div class="text-center">
            <p style="color: black">
              This is the Official NITN Portal for the students of NIT Nagaland.
              It's compulsory to register here for every student of NIT Nagaland
              to ease the process for both students and the Institution.
            </p>
            <button class=" btn btn-info  text-center  "  >About Us</button>
          </div>
        </div>
         
        <div class="col-lg-4 order-1 left"  >
          <form
            aciton="login.php"
            method="post"
            class="loginForm"
            style="width: 90%"
          >
            <div class="heading">
              <div class="text-center">
                <img
                  src="Logo.png"
                  class=""
                  alt="..."
                  width="110px"
                  height="110px"
                  style="border-radius: 50%"
                />
              </div>
              <h1 class="text-center">HEY!! Login</h1>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Registration No</label>
              <input
                type="number"
                class="form-control"
                id="mobile"
                name="mobile"
                aria-describedby="emailHelp"
                placeholder="Enter Registration No"
                required
              />
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="Password"
                name="password"
                placeholder="Enter Your Password"
                required
              />
            </div>
            <p >
              <input  type="checkbox" style="height:1rem; width:1rem ">Remember Password </input>
              <a href="forgotpass/Forgotpass.php" class="text-primary float-end mb-2"
                >Forgot Password?</a
              >
            </p>
            <p class="text-center " >Dont't have an account ? <a href="Registration/RegistrationFrom.php">Sign Up</a> </p>
            <button
              type="submit"
              class="btn btn-dark"
              style="height: auto; width: 100%"
            >
              Login
            </button>
          </form>
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

 
