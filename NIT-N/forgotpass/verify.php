<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Favicons -->
 <link href="../../image/nitnlogo.png" rel="icon">
    <link href="../../image/nitnlogo.png" rel="nitnlogo">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="stylefo.css">k
</head>
<body>
     
       <div class="container-fluid">
      <div class="mt-5 row" style="height: 86vh; width: 100vw">
         
         
         
        <div class="col-lg-4 col-10 order-1 left"  >
          <form
            aciton="login.php"
            method="post"
            class="loginForm"
            style="width: 100%"
          >
            <div class="heading">
              <div class="text-center">
                <img
                  src=" https://images.squarespace-cdn.com/content/v1/6209fc508f791e729abec7d0/18641903-a848-4a3a-a0a3-c9e2ddaa15c4/02-lottie-tick-01-instant-2.gif"
                  class=""
                  alt="..."
                  width="250rem"
                  height=" 150rem"
                />
              </div>
              <h4 class="text-center  text-success text-capitalize">otp sent  successfully !!!!!</h4>
              <p class=" text-center" >OTP sent to registred email  address</p>
            </div>
            <div class="mb-3 text-center">
              <input
                type="number"
                class="form-control text-center"
                id="mobile"
                name="mobile"
                aria-describedby="emailHelp"
                placeholder="Enter otp"
                required
              />
            </div>
            <p class="text-center " > Back to login Page? <a href="../index.php">Login</a> </p>
            <button
              type="submit"
              class="btn btn-dark"
              style="  width: 100%"
            >
               Verify
            </button>
          </form>
        </div>
        </div>
       
    </div>
    
</body>
</html>