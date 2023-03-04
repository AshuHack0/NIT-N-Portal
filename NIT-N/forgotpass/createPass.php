<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Favicons -->
 <link href="../../image/nitnlogo.png" rel="icon">
    <link href="../../image/nitnlogo.png" rel="nitnlogo">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="stylefo.css"> 
</head>
<body>
       <div class="container-fluid">
         <?php require 'Navbar.php'?>
          <div class="mt-5 row" style="height: 86vh; width: 100vw">
             <div class="col-lg-4 col-10 order-1 left" style="height:34rem"  >
               <form  aciton="login.php"  method="post"  class="loginForm"  >
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
              <h2 class="text-center">  Create New Password</h2>
            </div>
            <div class="mb-3  ">
              <label for="mobile" class="form-label">New Password</label>
              <input
                type="text"
                class="form-control  "
                id="mobile"
                name="mobile"
                
                placeholder=" Enter New Password"
                required
              />
              <label for="cPass" class="form-label">Confirm New Password</label>
              <input
                type="text"
                class="form-control  "
                id="cPass"
                name="cpass"
                 
                placeholder="Confirm New Password"
                required
              />
            </div>
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
         </div>
    
</body>
</html>


 