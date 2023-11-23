<?php
session_start();
if (!isset($_SESSION["form"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel = "icon" type = "image/png" href = "ARCHIV3D.png"/>
    <link rel="stylesheet" href="home.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARCHIV3D</title>
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;500;600;700&display=swap"
    rel="stylesheet"
  />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <link
    rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
  />

  <body>
    <div class="background">
      <div class="navbar">
        <div class="navbar-logo">
          <img class="logo" src="ARCHIV3D black.png" />
        </div>
        <div class="inputcontainer">
          <div class="shadowinput"></div>
          <button class="inputbuttonshadow">
            <svg
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              height="20px"
              width="20px"
            >
              <path
                d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z"
                fill-rule="evenodd"
                fill="#17202A"
              ></path>
            </svg>
          </button>
          <input
            type="text"
            name="text"
            class="input__search"
            placeholder="What do you want to search?"
          />
        </div>
        <ul class="navbar-links" id="navbar-links">
          <li><a class="navbar-link" href="Home-page.html">Home</a></li>
          <li><a class="navbar-link" href="Upload.html">Upload</a></li>
          <li><a class="navbar-link" href="Review.html">Review</a></li>
          <li><a class="navbar-link" href="Contact-us.html">Contact Us</a></li>
        </ul>
      </div>
      <section class="main-home">
        <div class="main-text">
          <h5>Welcome to ARCHIV3D</h5>
          <h1>
            Design Community<br />
            Collect 3D <br />designs
          </h1>
          <p>3D printable things</p>

          <a href="#" class="main-btn"
            >Explore Now <i class="bx bx-right-arrow-alt"></i>
          </a>
        </div>

        <div class="down-arrow">
          <a href="#top searches" class="down"
            ><i class="bx bx-down-arrow-alt"></i
          ></a>
        </div>
      </section>

      <!--trend--designs-sectins -->

      <section class="top-designs" id="top designs ">
        <div class="center-text">
          <h2>The Top 3D <span>Designs</span></h2>
        </div>

        <div class="design-template">
          <div class="rows">
            <img src="skull.jpg" alt="" />
            <div class="design-text">
              <h5>Hot</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="template-name">
              <h4>Human Skull</h4>
              <p>Tags: Education</p>
            </div>
          </div>
          <div class="rows">
            <img src="ghost.png" alt="" />
            <div class="design-text">
              <h5>Hot</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="template-name">
              <h4>Ghost</h4>
              <p>Tags: Education</p>
            </div>

            <div class="rows">
              <img src="frank.jpg" alt="" />
              <div class="design-text">
                <h5>Hot</h5>
              </div>
              <div class="heart-icon">
                <i class="bx bx-heart"></i>
              </div>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
              </div>
              <div class="template-name">
                <h4>Frankenstein Head</h4>
                <p>Tags: Education</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <img class="bgwave" src="waves.png"/> -->
    </div>
  </body>
</html>
