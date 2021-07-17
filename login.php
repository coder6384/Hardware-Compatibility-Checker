<?php
include_once "./layouts/main/header.php";

?>

<main class="container">
      <h1>Log In</h1>
      <form action="" method="post"
      enctype="multipart/form-data">
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
      <input type="submit"
class="form-control btn btn-sm btn-primary"
value="Log In"
name="submit">

</div>

</form>
</main>

<?php

include_once "./layouts/main/footer.php";

?>
