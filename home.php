
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- custume css -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap-icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Einstein | Tech</title>
  </head>
  <body>
    <!-- bottstrap-navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">EINSTEIN TECH</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about_sections">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#service_sections"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              <i class="bi bi-person-circle" style="font-size: 1rem; color: rgb(229, 231, 236);">&nbsp;</i>User
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./signup.php"><h4>Hello, <?php echo $_SESSION['name']; ?></h4></a></li>
                <!-- <li><a class="dropdown-item" href="./signup.php">Sign Up</a></li>
                <li><a class="dropdown-item" href="./login.php">Login</a></li> -->
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="./logout.php">Exit</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_us">contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- slider-use -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/img1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/img2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/img3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid" id="about_sections">
      <!-- tagline -->
      <div class="row">
        <div class="col-12">
          <h3 class="display-6 text-center mt-5 mb-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
            Quos velit maiores nesciunt!
          </h3>
        </div>
      </div>

      <!-- featues -->
      <div class="row justify-content-evenly pt-3 pb-3">
        <div class="col-md-3 text-center mt-5">
          <h1><i class="bi bi-file-code-fill text-primary"></i></h1>
          <h5>Built For Developers</h5>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse odit,
            officia iusto aliquid dolorum atque distinctio.
          </p>
        </div>
        <div class="col-md-3 text-center mt-5">
          <h1><i class="bi bi-easel-fill text-danger"></i></h1>
          <h5>Built For Developers</h5>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse odit,
            officia iusto aliquid dolorum atque distinctio.
          </p>
        </div>
        <div class="col-md-3 text-center mt-5">
          <h1><i class="bi bi-calendar-range-fill text-success"></i></h1>
          <h5>Built For Developers</h5>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse odit,
            officia iusto aliquid dolorum atque distinctio.
          </p>
        </div>
      </div>
      <!-- line -->
      <hr />
      <!-- growth -->
      <div class="row justify-content-evenly pt-3 pb-5" id="service_sections">
        <div class="col-md-5 pt-3">
          <h3 style="color: #fff" class="mt-3 text-center bg-primary">
            Business Growth
          </h3>
          <img src="./images/img4.png" class="img-fluid" alt="" srcset="" />
        </div>
        <div class="col-md-5 pt-3">
          <h5 class="mt-3">Website Developement</h5>
          <div class="progress">
            <div
              class="progress-bar bg-success"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="75"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>

          <h5 class="mt-3">App Developement</h5>
          <div class="progress">
            <div
              class="progress-bar bg-info"
              role="progressbar"
              style="width: 85%"
              aria-valuenow="85"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>

          <h5 class="mt-3">Software Developement</h5>
          <div class="progress">
            <div
              class="progress-bar bg-warning"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="75"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>

          <h5 class="mt-3">Android App Developement</h5>
          <div class="progress">
            <div
              class="progress-bar bg-danger"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="65"
              aria-valuemin="0"
              aria-valuemax="65"
            ></div>
          </div>

          <h5 class="mt-3">Apple Ios Developement</h5>
          <div class="progress">
            <div
              class="progress-bar bg-primary"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
        </div>
      </div>

      <!-- contact -->
      <div
        class="row justify-content-evenly pt-2 pb-5"
        style="background-color: #f1f1f1"
      >
        <div class="col-md-5 mt-5">
          <h3 class="mb-4">Contact Form</h3>
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Full Name</label
              >
              <input type="text" class="form-control" id="name" />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Message</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-5 mt-5">
          <h3 class="mb-4">Address</h3>
          <p>
            Address: C9MG+35G, Hitech City Main Rd, Diamond Hills, Lumbini
            Avenue,<br />
            Gachibowli, Hyderabad, Telangana 500081<br />
            <i class="bi bi-telephone"></i> :+91 9534944195
          </p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15224.997606504205!2d78.35961032904548!3d17.44777310717858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93dc8c5d69df%3A0x19688beb557fa0ee!2sHITEC%20City%2C%20Hyderabad%2C%20Telangana%20500081!5e0!3m2!1sen!2sin!4v1669457001745!5m2!1sen!2sin"
            style="width: 100%"
            height="250"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <!-- faq -->
      <div class="row justify-content-evenly pt-5 pb-5">
        <div class="col-md-10">
          <h3 class="text-center pb-4">FAQ</h3>
          <div
            class="accordion accordion-flush border"
            id="accordionFlushExample"
          >
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                >
                  Accordion Item #1
                </button>
              </h2>
              <div
                id="flush-collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the first item's accordion body.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo"
                  aria-expanded="false"
                  aria-controls="flush-collapseTwo"
                >
                  Accordion Item #2
                </button>
              </h2>
              <div
                id="flush-collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                >
                  Accordion Item #3
                </button>
              </h2>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the third item's accordion body. Nothing more exciting
                  happening here in terms of content, but just filling up the
                  space to make it look, at least at first glance, a bit more
                  representative of how this would look in a real-world
                  application.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <div class="row justify-content-evenly bg-dark text-white pt-2 pb-5">
        <div class="col-md-3 pt-4">
          <h5 class="pb-2">Einstein Tech</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
            quibusdam inven nisi, sed enim at blanditiis.
          </p>
        </div>
        <div class="col-md-3 pt-4">
            <h5 class="pb-2">Important Links</h5>
        <p>
            <a href="#" class="link-light text-decoration-none">Home</a><br>
            <a href="#" class="link-light text-decoration-none">About</a><br>
            <a href="#" class="link-light text-decoration-none">Services</a><br>
            <a href="#" class="link-light text-decoration-none">Gallary</a><br>
            <a href="#" class="link-light text-decoration-none">Contact Us</a><br>
           
        </p>
        </div>
        <div class="col-md-3 pt-4" id="contact_us">
           <h5 class="pb-2">Contact Us</h5>
           <p>
105 Abhimanyu Infotech Pvt Ltd.<br>
JAGATPURA B.T.P.S<br>
<i class="bi bi-telephone"></i> :+91 9534944195
           </p>
        </div>
      </div>

      <!-- copyright -->
      <div class="row bg-secondary text-white text-center p-2">
        <div class="col-12">
            <p>&copy; Copyright 1996-2022 by Abhimanyu Infotech Pvt Ltd &trade;.All Rights Reserved &reg;.</p>
        </div>
      </div>

      <!-- .container-end -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
