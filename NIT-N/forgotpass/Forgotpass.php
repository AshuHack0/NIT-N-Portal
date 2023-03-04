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
     
       <div class="container-fluid d-flex justify-content-center align-items-center " style="height: 86vh; width: 100vw">
      <div class="  col-lg-4 col-10 order-1 left" style="height: 86vh; width: 100vw">
          <form
            aciton="login.php"
            method="post"
            class="loginForm"
            style="width: 100%"
          >
            <div class="heading">
              <div class="text-center">
                <img
                  src=" https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg?w=360"
                  class=""
                  alt="..."
                  width="250rem"
                  height=" 150rem"
                />
              </div>
              <h2 class="text-center"> Forgot Your Password?</h2>
            </div>
            <div class="mb-3 text-center">
              <label for="mobile" class="form-label">Registration No</label>
              <input
                type="number"
                class="form-control text-center"
                id="mobile"
                name="mobile"
                aria-describedby="emailHelp"
                placeholder="Enter Registration No"
                required
              />
            </div>
            <p class="text-center " > Back to login Page? <a href="../index.php">Login</a> </p>
            <button
              type="submit"
              class="btn btn-dark"
              style="  width: 100%"
            >
              Submit
            </button>
          </form>
      
        </div>
       
    </div>
    
</body>
</html>