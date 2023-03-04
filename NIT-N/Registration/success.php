<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- Favicons -->
    <link href="../../image/nitnlogo.png" rel="icon" />
    <link href="../../image/nitnlogo.png" rel="nitnlogo" />
    <title>Forgot Password</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="stylefo.css" />
  </head>
  <body>
    <div class="container-fluid">
      <?php require 'Navbar.php'?>
      <div class="mt-5 row" style="height: 86vh; width: 100vw">
        <div class="col-lg-4 col-10 order-1 left " style="height:34rem">
          <form
            aciton="login.php"
            method="post"
            class="loginForm"
            style="width: 100%"
          >
            <div class="heading">
              <div class="text-center">
                <img
                  src="https://gifdb.com/images/high/animated-green-verified-check-mark-k3et2jz52jyu2v22.gif"
                  class=""
                  alt="..."
                  width="150rem"
                  height=" 150rem"
                />
              </div>
              <h4 class="text-center p-4">
                You have successfully  created  Your Account!!!!!
              </h4>
            </div>

            <a
              type="submit"
              class="btn btn-primary mt-4"
              href="../index.php"
              style="width: 100%"
            >
              Back To Login Page
            </a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
