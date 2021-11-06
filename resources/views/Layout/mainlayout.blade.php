<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FJ Shoe | <?=$title?></title>
</head>
<body>
    @include('layout.navbar')
    {{-- pt = padding top --}}
    <div class="container pt-5">   
    

        @yield('main_content')
        <div style="cursor:sw-resize"></div>

    </div>

    <div class="pt-5">
        <footer class="text-center text-white" style="background-color: #caced1;">
            <!-- Grid container -->
            <div class="container p-4">
              <!-- Section: Images -->
              <section class="">
                <div class="row">
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe1.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe2.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe3.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe4.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe5.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                      class="bg-image hover-overlay ripple shadow-1-strong rounded"
                      data-ripple-color="light"
                    >
                      <img
                        src="img/shoe6.jpg"
                        class="w-100"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                      </a>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Section: Images -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2021 Copyright:
              <a class="text-white" href="#">FJShoe.com</a>
            </div>
            <!-- Copyright -->
          </footer>
    </div>
    
</body>
</html>