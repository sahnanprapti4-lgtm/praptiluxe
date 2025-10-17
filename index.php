<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container text-center mt-5 pt-3">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="women collection d-flex align-items-center ps-2">
                  <div class="d-flex flex-column w-50 ps-5 ms-5">
                    <h1 class="text-light text-start display-5 fw-semibold">
                      DRESS LIKE A QUEEN!
                    </h1>
                    <p class="text-light text-start fs-4 fw-semibold">
                      Luxury Looks, Thrifted Prices!
                      <button
                        type="button"
                        class="btn btn-light border border-dark rounded-2 mt-4 w-50 py-2 fs-4 fw-semibold mt-3"
                      >
                        Buy Now
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                      
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                          />
                        </svg>
                      </button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="men collection d-flex align-items-center ps-2">
                  <div class="d-flex flex-column w-50 ps-5 ms-5">
                    <h1 class="text-light text-start display-5 fw-semibold">
                    Fashion That Defines You
                    </h1>
                    <p class="text-light text-start fs-4 fw-semibold">
                    Elite Fashion, Smart Savings!
                      <button
                        type="button"
                        class="btn btn-light border border-dark rounded-2 mt-4 w-50 py-2 fs-4 fw-semibold mt-3"
                      >
                        Buy Now
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                      
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                          />
                        </svg>
                      </button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="baby collection d-flex align-items-center ps-2">
                  <div class="d-flex flex-column w-50 ps-5 ms-5">
                    <h1 class="text-light text-start display-5 fw-semibold">
                    Cutest Styles, Smartest Deals!
                    </h1>
                    <p class="text-light text-start fs-4 fw-semibold">
                    Thrift Your Way to Cute
                      <button
                        type="button"
                        class="btn btn-light border border-dark rounded-2 mt-4 w-50 py-2 fs-4 fw-semibold mt-3"
                      >
                        Buy Now
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                      
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"
                          />
                        </svg>
                      </button>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="sidebar w-100 ">
            <p class=" text-light  fw-semibold  fs-3 pt-3">50% Off Elegant Tradition!</p>

          </div>
        </div>
      </div>

     
    </div>


    <div class="container mt-2 mb-5 py-3 ">
      <div class="row d-flex justify-content-between info">
        <div class=" col-md-3 d-flex category-card-1 py-4 ps-5  my-sm-3">
        <div>
          <p class="text-light fw-semibold fs-5">Tunics & Tops</p>
          <p class="text-light">Giving personality to each piece of clothing.</p>

        </div>
        <div>
          <img src="images/Capture-removebg-preview.png" class="img-fluid w-75 d-flex align-self-center" alt="...">

        </div>
        </div>
        <div class="col-md-3 category-card-2 py-4 ps-5 d-flex  my-sm-3">
          <div>
            <p class="text-light fw-semibold fs-5">T-shirts</p>
            <p class="text-light">Comfort meets style—your new favorite T-shirt awaits!</p>
  
          </div>
          <div>
            <img src="images/Capture2-removebg-preview.png" class="img-fluid w-75 d-flex align-self-center" alt="...">
  
          </div>
        </div>
        <div class="col-md-3 category-card-3 py-4 ps-5 d-flex my-sm-3">
          <div>
            <p class="text-light fw-semibold fs-5">Ethnic kids wear</p>
            <p class="text-light">Timeless traditions, tailored for tiny trendsetters!</p>
  
          </div>
          <div>
            <img src="images/capture3-removebg-preview.png" class="img-fluid w-75 d-flex align-self-center" alt="...">
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row d-flex">
        <div class="col-md-3">
          <img src="images/cardiganlongsleeve.webp" alt="">
          <p class="fw-semibold fs-5">Cardigan long sleeve</p>
          <p class="fw-semibold fs-5 ">$50</p>
        </div>
        <div class="col-md-3">
          <img src="images/Cardigansleeveless.webp" alt="">
          <p class="fw-semibold fs-5">Cardigan half sleeve</p>
          <p class="fw-semibold fs-5">$48</p>

        </div>
        <div class="col-md-3">
          <img src="images/girl blouse.webp" alt="" class="w-100">
          <p class="fw-semibold fs-5">Girl Blouse</p>
          <p class="fw-semibold fs-5 ">$30</p>

        </div>

        <div class="col-md-3">
          <img src="images/sweater.webp" alt="" class="w-100">
          <p class="fw-semibold fs-5">Sweater</p>
          <p class="fw-semibold fs-5 ">$85</p>

        </div>
      </div>
    </div>

    <div class="container text-center  autcard">
       <div class="row">
        <div class="col-md-6">
          <button type="button" class=" year mt-5 btn btn-outline-dark">2025</button>
          <p class="fw-semibold fs-1 w-50 text-center mx-5 my-5">New Autumn 2025 Collection</p>
<p class="w-75 fw-semibold fs-4">"Autumn vibes, cozy styles—shop the season’s best! Layer up in style this fall with our latest collection, featuring everything from warm knits to chic jackets. Falling for fashion has never been easier—get your perfect autumn look today!</p>
          <button type="button" class=" my-5 px-5 py-3 btn btn-outline-dark">Products</button>
        </div>
        <div class="col-md-6">
          <img src="images/autumngirl.PNG" alt=""   class= "img-fluid custom-img">
        </div>
        </div>
        </div>

<div class="container-fluid text-center bg py-5 my-5">
  <div class="row  d-flex">
    <div class="col-md-4">
      <img src="images/dq.svg" alt="" class="mb-5">
      <p class="text-center bg fw-semibold fs-2 mb-5">Amazing collection!</p>
      <p class="text-start bg w-75">Uncover the Past Embrace the Future Shop Classic Styles with Modern Discounts"
      "Timeless Trends at Today’s Prices Don’t Miss Out on Past Collection Gems</p>
      <div class=""></div>
    </div>
    <div class="col-md-4">
      <img src="images/dq.svg" alt="" class="mb-5">
      <p class="bg text-center  fw-semibold fs-2 mb-5">Good Materials</p>
      <p class="text-start bg w-75">Retro Glam with a Modern Twist Shop Our Best of the Past Collections Now"
      "Flashback to Fabulous Stylish Finds from Past Seasons at Limited Time Prices</p>
    </div>
    <div class="col-md-4">
<img src="images/dq.svg" alt="" class="mb-5">
<p class="text-center bg  fw-semibold fs-2 mb-5">Great Projects</p>
<p class="text-start bg w-75"> Fashion That Endures Last Call for Iconic Pieces from Past Collections"
"Ageless Style Timeless Savings Past Collection Pieces Are Waiting for You"

</p>
    </div>
  </div>
</div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <?php
include('footer.php');
?>
  </body>
</html>
