<html>
<?php
include_once "./layouts/main/header.php";
if($_SERVER['REQUEST_METHOD']=='POST')
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

if (! $password == $confirm_password)
      echo "Passwords do not"

?>

<main class="container">
      <h1>Create an account</h1>
      <form action="login.php" method="post";
      enctype="multipart/form-data">

<div class="mb-3">
      <label for="first_name">First Name</label>
      <input type="text"
class="form-control"
id="first_name"
name="first_name"
required>



</div>

<div class="mb-3">
      <label for="last_name">Last Name</label>
      <input type="text"
class="form-control"
id="last_name"
name="last_name"
required>

</div>

<div class="mb-3">
      <label for="email">Email address</label>
      <input type="email"
class="form-control"
id="email"
name="email"
required>

</div>
<div class="mb-3">
      <label for="password">Input Password</label>
      <input type="password"
class="form-control"
id="password"
name="password"
required>

</div>
<div class="mb-3">
      <label for="confirm_password">Confirm Password</label>
      <input type="password"
class="form-control"
id="confirm_password"
name="confirm_password"
required>

</div>
<div class="mb-3">
      <input type="submit"
class="form-control btn btn-sm btn-primary"
value="Join us"
name="submit">

</div>

</form>
</main>

<?php

include_once "./layouts/main/footer.php";

?>
</html>