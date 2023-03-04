<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CareTaker</title>
    <link rel="stylesheet" href="stylecare.css" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
  </head>
  <body>
    <?php require 'Navbar.php'?>
    <div class="container-fluid"   data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
      <div class="mt-5 row" style="height: 86vh; width: 100vw">
        <div class="col-lg-4 order-2 right">
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
                  width="100px"
                  height="100px"
                  style="border-radius: 50%"
                />
              </div>
              <h1 class="text-center c">CareTaker Login</h1>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">User Id</label>
              <input
                type="text"
                class="form-control"
                id="mobile"
                name="mobile"
                aria-describedby="emailHelp"
                placeholder="Enter User Id Please"
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
            <div class="mb-3">
               <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Girls CareTaker</option>
                <option value="2">Boys CareTaker</option>
              </select>
            </div>
            <p class="">
              <input type="checkbox" style="height:1rem; width:1rem ">Remember Password </input>
              <a href="" class="text-primary float-end mb-2"
                >Forgot Password?</a
              >
            </p>
            <button
              type="submit"
              class="btn btn-dark"
              style="  width: 100%"
            >
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
     <script>
      AOS.init();
    </script>
  </body>
</html>
