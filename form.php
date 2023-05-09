<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel=stylesheet>
  <title>Document</title>
</head>

<body>
  <div class="main_title">
    <h1 name="main_div">MAIN FORM</h1>
  </div>
    <?php include("insert.php");?>
    <form action="insert.php" method="post">
  <div class="main_form">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="fname" placeholder="Enter the First Name" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="lname" placeholder="Enter the Last Name" autocomplete="off">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-75">
          <button type="submit" name="sn">Submit</button>
        </div>
    </form>
  </div>
</body>

</html>