<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LiburanKu</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  filter: blur(20px);
  -webkit-filter: blur(20px);
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
html {
width: 100%;
height: 100%;
clip: auto;
position: absolute;
overflow: hidden;
}
.center {
}
</style>
</head>
<body>

<img src="http://localhost/liburanku/bglb.png"alt="width=1000" height="980"/>
<div class="bg-image"></div>

<div class="bg-text center">
  <h2>Let You Explore the World,</h2>
  <h1 style="font-size:50px">LiburanKu</h1>
 <a href ="http://localhost/liburanku/LiburanKu_Register.php"><button class="btn btn-outline-success my-2 my-sm-0" type="signup">Sign Up</button></a>
 

<footer class="text-center">
    <br>
        <h5 style="font-size: 15px">Already have an account?</h5>
        <h5 style="font-size: 3px"><a href="http://localhost/liburanku/LiburanKu_Login.php"><button class="btn btn-sm btn-outline-secondary" type="button">Sign In</button></a></h5>
      </footer>
    </div>
</body>

</html>
