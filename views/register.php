<?php require '../controllers/reg-controller.php'; ?>

<?php include './partials/header.php'; ?>


  <div class="registration-form">
    <h2>Create a New Account</h2>

    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post">

      <input class="first-name" type="fname" name="fname" placeholder="First Name" value="<?= ($fname) ?? '';?>">
      <input class="last-name" type="lname" name="lname" placeholder="Last Name" value="<?= ($lname) ?? '';?>">
      <input type="text" name="username" placeholder="Username" value="<?= ($username) ?? '';?>">
      <input type="email" name="email" placeholder="Email Address" value="<?= ($email) ?? '';?>">
      <input type="password" name="password" placeholder="Password" value="<?= ($password) ?? '';?>">
      <input type="password" name="cpassword" placeholder="Re-type Password">
      <button type="submit" name="register"> I'm in!</button>

    </form>
  </div>


<?php include './partials/footer.php'; ?>
