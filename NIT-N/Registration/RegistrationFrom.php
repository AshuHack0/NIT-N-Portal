  <!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="restyle.css">
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
   </head>
<body> 
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Registration No</span>
            <input type="text" placeholder="Enter your registration no...." required>
          </div>
          <div class="input-box">
            <span class="details"> Personal Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
           <div class="input-box">
            <span class="details">College Email</span>
            <input type="text" placeholder="Enter your College email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
             <select class="form-select" aria-label="Default select example">
            <option selected>Open to select menu</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            
          </select>
          </div>
          <div class="input-box">
            <span class="details">Meal</span>
            <select class="form-select" aria-label="Default select example">
            <option selected>Open to select menu</option>
            <option value="1">Veg</option>
            <option value="2">Non-Veg</option>
            
          </select>
          </div>
          <div class="input-box" style="height:2rem">
            <span class="details">Branch</span>
            <select class="form-select details" aria-label="Default select example">
            <option selected>Open to select Branch</option>
            <option value="1"> Electronics and Instrumentation Engineering (B.Tech)</option>
            <option value="2"> Electronics and Communication Engineering (B.Tech)</option>
            <option value="3"> Electrical and Electronics Engineering (B.Tech)</option>
             <option value="4">Civil Engineering (B.Tech)</option>
              <option value="5">Mechanical Engineering (B.Tech)</option>
            <option value="6">Computer Science and Engineering (B.Tech)</option>
             <option value="7">Power Systems Engineering (M.Tech)</option>
             <option value="8">VLSI Systems (M.Tech)</option>
            <option value="9">Communication Engineering (M.Tech)</option>
             <option value="10">Computer Science &amp; Engineering (M.Tech)</option>
            <option value="11">M.Sc Physics</option>
          </select>  
        </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>