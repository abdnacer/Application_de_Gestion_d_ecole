<?php 
if(isset($_POST['submit'])){
  $loginAdmin = new AdminController();
  $loginAdmin->auth();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./Public/Css/style.css">
</head>
<body>
  <div class="container_signin">
    <div class="part1_signin">
      <div class="head_signin">
        <p>Welcome, back</p>
        <p>Sign in to continue</p>
      </div>

      <div class="form_sign">
        <form class="form_sign1" method="post">
          <input type="text" class="email" placeholder="Email" id="email" name="Email">
          <input type="password" class="password" placeholder="Password" id="password" name="Password">
          <button type="submit" name="submit" id="submit">Submit</button>
        </form>
        <div class="part1_ftr ">
          <hr class="hr-text" data-content="OR">
        </div>
        <div class="part2_ftr">
          <img src="./Public/images/google.png" alt="">
          <img src="./Public/images/facebook.png" alt="">
          <img src="./Public/images/pinterest.png" alt="">
        </div>
      </div>
    </div>

    <div class="part2_signin">
      <img src="./Public/images/login.png" alt="img-login">
    </div>
  </div>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>

</body>
</html>