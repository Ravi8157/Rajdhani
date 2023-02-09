<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include "./include/style.php"; ?>

  <style>
    h2,
    p {
      display: flex;
      justify-content: center;
    }
  </style>

</head>

<body>

  <?php include "./include/header.php"; ?>
  <!-- END nav -->

  <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
        <div class="col-md-12 contact-info ftco-animate">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Address&nbsp;&nbsp;:&nbsp;&nbsp;</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Phone&nbsp;&nbsp;:&nbsp;&nbsp;</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Email&nbsp;&nbsp;:&nbsp;&nbsp;</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Website&nbsp;&nbsp;:&nbsp;&nbsp;</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-1"></div> -->
      </div>
    </div>
  </section>

  <?php include "./include/footer.php"; ?>

  <?php include "./include/loader.php"; ?>

  <?php include "./include/script.php"; ?>

</body>

</html>