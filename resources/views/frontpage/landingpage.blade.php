
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detial Product</title>
    <!--    favicon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
    <!-- compiled from input.css -->
    <link rel="stylesheet" href="{{asset('assets/css/output.css')}}" />
    <!-- overwrite custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"  rel="stylesheet" />

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  </head>
  <body id="app">
    <header>
      <div
        class="navigation-wrapper navigation-wrapper-two-two w-full bg-primary-900 h-[90px]"
      >
        <div class="theme-container h-full mx-auto">
          <div class="w-full h-full flex justify-between items-center">
            <a href="index.html">
              <h1 class="text-white">Siska Febrianti</h1>
            </a>
            <nav class="nav-wrapper nav-wrapper-2 lg:block hidden">
              <ul class="flex space-x-7 items-center">
                <li>
                  <a href="index.html" class="">
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a href="index.html#about" class="">
                    <span>About</span>
                  </a>
                </li>
                <li>
                  <a href="index.html#skills" class="">
                    <span>Skills</span>
                  </a>
                </li>
                <li>
                  <a href="index.html#education" class="">
                    <span>Education</span>
                  </a>
                </li>
                <li>
                  <a href="index.html#project" class="">
                    <span>Project</span>
                  </a>
                </li>
                <li>
                  <a href="product.html" class="">
                    <span>Product</span>
                  </a>
                </li>
                <li>
                  <a href="index.html#contact" class="">
                    <span>Contact</span>
                  </a>
                </li>
              </ul>
            </nav>
            <nav class="nav-wrapper mobile-nav-wrapper block lg:hidden">
              <div class="mobile-drawer">
                <div
                  class="mobile-wid w-[310px] bg-white fixed top-0 h-full px-8 pt-10 z-40"
                  style="z-index: 99999"
                >
                  <div class="flex justify-center mb-10">
                    <div class="logo-area w-[180px] h-[55px]">
                      <h1 >Siska Febrianti</h1>
                    </div>
                  </div>
                  <ul class="flex flex-col mb-10">
                    <li>
                      <a href="index.html" class="">
                        <span>Home</span>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#about" class="">
                        <span>About</span>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#skills" class="">
                        <span>Skills</span>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#education" class="">
                        <span>Education</span>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#project" class="">
                        <span>Project</span>
                      </a>
                    </li>
                    <li>
                      <a href="product.html" class="">
                        <span>Product</span>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#contact" class="">
                        <span>Contact</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div
                  onclick="drawerHandler()"
                  class="drawer-away w-full h-full fixed bg-black bg-opacity-80 z-30 left-0 top-0"
                ></div>
              </div>
            </nav>
            <button
              type="button"
              onclick="drawerHandler()"
              class="w-[77px] h-full flex lg:hidden justify-center items-center"
            >
              <span class="text-white">
                <svg
                  width="28"
                  height="22"
                  viewBox="0 0 28 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M28 11H0"
                    stroke="currentColor"
                    stroke-width="2"
                  ></path>
                  <path
                    d="M21 21H0"
                    stroke="currentColor"
                    stroke-width="2"
                  ></path>
                  <path
                    d="M20 1H0"
                    stroke="currentColor"
                    stroke-width="2"
                  ></path>
                </svg>
              </span>
            </button>

            
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="w-full min-h-screen">
      <!--      page title section-->
      <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
          <div
            class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center"
          >
            <h2 class="headline-default text-primary-900">Product Details</h2>
            <ul class="breadcrumb-wrapper flex space-x-5 items-center">
              <li class="breadcrumb-item">
                <a href="#">
                  <div class="flex space-x-5 items-center">
                    <span
                      class="sm:text-lg text-primary-500 sm:leading-[27px] text-sm font-semibold spline-sans"
                      >Home</span
                    >
                    <span class="ico">
                      <svg
                        width="9"
                        height="13"
                        viewBox="0 0 9 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M2 12.5C1.71875 12.5 1.46875 12.4062 1.28125 12.2188C0.875 11.8438 0.875 11.1875 1.28125 10.8125L5.5625 6.5L1.28125 2.21875C0.875 1.84375 0.875 1.1875 1.28125 0.8125C1.65625 0.40625 2.3125 0.40625 2.6875 0.8125L7.6875 5.8125C8.09375 6.1875 8.09375 6.84375 7.6875 7.21875L2.6875 12.2188C2.5 12.4062 2.25 12.5 2 12.5Z"
                          fill="#028835"
                        />
                      </svg>
                    </span>
                  </div>
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">
                  <div class="flex space-x-5 items-center">
                    <span
                      class="sm:text-lg text-primary-500 sm:leading-[27px] text-sm font-semibold spline-sans"
                      >Product Details</span
                    >
                    <span class="ico">
                      <svg
                        width="9"
                        height="13"
                        viewBox="0 0 9 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M2 12.5C1.71875 12.5 1.46875 12.4062 1.28125 12.2188C0.875 11.8438 0.875 11.1875 1.28125 10.8125L5.5625 6.5L1.28125 2.21875C0.875 1.84375 0.875 1.1875 1.28125 0.8125C1.65625 0.40625 2.3125 0.40625 2.6875 0.8125L7.6875 5.8125C8.09375 6.1875 8.09375 6.84375 7.6875 7.21875L2.6875 12.2188C2.5 12.4062 2.25 12.5 2 12.5Z"
                          fill="#028835"
                        />
                      </svg>
                    </span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!--      main content -->
      <div class="lg:pt-[120px] pt-[60px]">
        <div class="theme-container mx-auto">
          <div class="w-full">
            <div class="lg:grid grid-cols-12 gap-[30px] mb-[80px]">
              <div class="col-span-7 mb-10 lg:mb-0 z-0" >
                <div class="w-full h-[440px] rounded overflow-hidden">
                  <div id="default-carousel" class="relative w-full z-1" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('assets/img/sempol-1.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('assets/img/sempol-2.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('assets/img/sempol-3.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('assets/img/sempol-4.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-span-5 relative z-10">
                <h2 class="headline-default text-primary-900 mb-2.5">
                  Sempol Ayam Spesial
                </h2>
                <p class="text-base leading-[27px] text-primary-100 mb-2.5">
                  Sempol menjadi salah satu camilan yang banyak disukai individu. Rasanya yang gurih dengan berbagai isian pun tentu akan menggugah selera.
                  Tak heran jika sempol sangat cocok untuk menu buka puasa. Namun, daripada membelinya, Anda bisa mencoba membuatnya sendiri di rumah.
                </p>
                <p
                  class="text-base leading-[27px] text-primary-100 xl:mb-[60px] mb-10"
                >
                  Sempol ayam sangat spesial ini menjadi salah satu makanan terlaris di resto kami, pesan sekarang!
                </p>
                <div
                  style="
                    background-image: url('./assets/img/Info-project-details.png');
                  "
                  class="lg:w-[583px] w-full xl:h-[218px] h-[200px] bg-no-repeat lg:bg-contain bg-cover lg:absolute -left-20 flex justify-center items-center px-5 sm:px-[60px]"
                >
                  <div
                    class="grid grid-cols-2 justify-between gap-y-[30px] w-full"
                  >
                    <div class="flex sm:space-x-[30px] space-x-5 items-center">
                      <div
                        class="w-[1px] h-[36px] bg-white bg-opacity-[0.2]"
                      ></div>
                      <div>
                        <p class="text-white text-base leading-[27px]">
                          Kategori
                        </p>
                        <p
                          class="text-white text-lg font-semibold spline-sans leading-[27px]"
                        >
                          Makanan
                        </p>
                      </div>
                    </div>
                    <div class="flex sm:space-x-[30px] space-x-5 items-center">
                      <div
                        class="w-[1px] h-[36px] bg-white bg-opacity-[0.2]"
                      ></div>
                      <div>
                        <p class="text-white text-base leading-[27px]">
                          Varian
                        </p>
                        <p
                          class="text-white text-lg font-semibold spline-sans leading-[27px]"
                        >
                          Super Pedas,Pedas Manis
                        </p>
                      </div>
                    </div>
                    <div class="flex sm:space-x-[30px] space-x-5 items-center">
                      <div
                        class="w-[1px] h-[36px] bg-white bg-opacity-[0.2]"
                      ></div>
                      <div>
                        <p class="text-white text-base leading-[27px]">
                          Harga
                        </p>
                        <p
                          class="text-white text-lg font-semibold spline-sans leading-[27px]"
                        >
                          Rp. 10.000
                        </p>
                      </div>
                    </div>
                    <div class="flex sm:space-x-[30px] space-x-5 items-center">
                      <div
                        class="w-[1px] h-[36px] bg-white bg-opacity-[0.2]"
                      ></div>
                      <div>
                        <p class="text-white text-base leading-[27px]">Stok</p>
                        <p
                          class="text-white text-lg font-semibold spline-sans leading-[27px]"
                        >
                          Ready
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-base leading-[27px] text-primary-100 mb-5">
              Sempol ayam adalah makanan khas Indonesia, khususnya daerah Jawa Timur, yang terbuat dari campuran daging ayam giling, tepung tapioka, bumbu-bumbu, dan kadang-kadang disertai dengan potongan sayuran. Adonan yang telah dicampur dengan baik kemudian dibentuk memanjang menyerupai sosis kecil dan ditusukkan pada tusuk sate.
            </p>
            <p class="text-base leading-[27px] text-primary-100 mb-[60px]">
              Setelah dibentuk, sempol ayam kemudian digoreng hingga berwarna keemasan. Teksturnya yang gurih di luar dan lembut di dalam membuat sempol ayam menjadi camilan yang disukai banyak orang. Sempol ayam biasanya disajikan dengan saus sambal atau saus tomat untuk menambah rasa nikmat.
            </p>
          </div>
        </div>
      </div>

      <!--      testimonial -->
      <section class="financ-section py-[60px]">
        <div class="theme-container mx-auto" >
          <div class="w-full relative">
            <h2
              class="headline-default text-primary-900 lg:mb-[60px] mb-[30px]"
            >
            What our awesome<br />
            customers say
            </h2>
            <div class="financ-swiper overflow-hidden">
              <div class="swiper-wrapper" >
                <div class="swiper-slide" v-for="(testimonial, index) in testimonials">
                  <div
                    class="item sm:p-10 p-5 border border-primaryBorder rounded"
                  >
                    <div class="flex justify-between items-start mb-5">
                      <div class="flex space-x-5 items-center">
                        <div
                          class="w-[80px] h-[80px] rounded-full border border-primary-500"
                        >
                          <img
                            :src="testimonial.profile"
                            alt=""
                            class="w-full h-full object-cover"
                          />
                        </div>
                        <div class="flex-1">
                          <div class="flex items-center mb-2.5">
                            <span v-for="n in testimonial.stars" :key="n">
                              <svg
                                width="16"
                                height="15"
                                viewBox="0 0 16 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                  fill="#FFDF00"
                                />
                              </svg>
                            </span>
                          </div>
                          <h2
                            class="text-gray-700 text-lg spline-sans font-semibold"
                          >
                          @{{testimonial.name}}
                          </h2>
                        </div>
                      </div>
                      <span class="sm:inline-block hidden">
                        <svg
                          width="35"
                          height="26"
                          viewBox="0 0 35 26"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                            fill="#028835"
                          />
                        </svg>
                      </span>
                    </div>
                    <p class="text-primary-100 text-base leading-7">
                    @{{testimonial.text}}
                    </p>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
              <div
                class="lg:flex hidden space-x-5 items-center absolute right-0 top-[45px]"
              >
                <button
                  type="button"
                  class="swiper-button-prev w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500"
                >
                  <svg
                    width="16"
                    height="14"
                    viewBox="0 0 16 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M1.29883 5.89453L6.61133 0.582031C7.00977 0.150391 7.70703 0.150391 8.10547 0.582031C8.53711 0.980469 8.53711 1.67773 8.10547 2.07617L4.61914 5.5625H14.8125C15.377 5.5625 15.875 6.06055 15.875 6.625C15.875 7.22266 15.377 7.6875 14.8125 7.6875H4.61914L8.10547 11.207C8.53711 11.6055 8.53711 12.3027 8.10547 12.7012C7.70703 13.1328 7.00977 13.1328 6.61133 12.7012L1.29883 7.38867C0.867188 6.99023 0.867188 6.29297 1.29883 5.89453Z"
                    />
                  </svg>
                </button>
                <button
                  type="button"
                  class="swiper-button-next w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500"
                >
                  <svg
                    width="15"
                    height="14"
                    viewBox="0 0 15 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-current"
                  >
                    <path
                      d="M14.543 7.38867C14.9746 6.99023 14.9746 6.29297 14.543 5.89453L9.23047 0.582031C8.83203 0.150391 8.13477 0.150391 7.73633 0.582031C7.30469 0.980469 7.30469 1.67773 7.73633 2.07617L11.2227 5.5625H1.0625C0.464844 5.5625 0 6.06055 0 6.625C0 7.22266 0.464844 7.6875 1.0625 7.6875H11.2227L7.73633 11.207C7.30469 11.6055 7.30469 12.3027 7.73633 12.7012C8.13477 13.1328 8.83203 13.1328 9.23047 12.7012L14.543 7.38867Z"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="w-full lg:pt-[120px] lg:pb-[240px] pt-[60px] pb-[120px] ">
        <div class="theme-container mx-auto">
          <div class="grid lg:grid-cols-2 grid-cols-1 items-center">
            <div class="mb-10 lg:mb-0">
              <p
                class="text-primary-500 font-bold lg:leading-8 spline-sans lg:text-xl text-lg uppercase mb-2"
              >
                Review
              </p>
              <h2 class="headline-default text-primary-900 mb-[30px]">
                Berikan review anda<br />
                untuk kami
              </h2>
              <br class="text-base leading-[27px] text-primary-100">
                Kami sangat mengharapkan review dari pelanggan kami</br> untuk meningkatkan kualitas produk kami
              </p>
            </div>
            <div class="w-full">
              <div class="sm:flex sm:space-x-[30px] w-full mb-5">
                <label class="block w-full mb-5 sm:mb-0" for="Name">
                  <input
                    id="Name"
                    v-model="name"
                    type="text"
                    placeholder="Your name"
                    class="w-full h-[68px] rounded border border-primaryBorder focus:outline-none focus:ring-0 px-5 placeholder:text-primary-100 text-black"
                  />
                </label>
              </div>
              <div class="sm:flex sm:space-x-[30px] w-full mb-5">
                <label class="block w-full" for="profile">
                  <input
                    id="profile"
                    v-model="profile"
                    placeholder="Url Profile"
                    class="w-full h-[68px] rounded border border-primaryBorder focus:outline-none focus:ring-0 px-5 placeholder:text-primary-100 text-black"
                  />
                </label>
              </div>
              <div class="w-full h-[174px] mb-5">
                <textarea
                  name="message"
                  id="message"
                  v-model="text"
                  placeholder="Write your message"
                  class="w-full h-full rounded border border-primaryBorder focus:outline-none focus:ring-0 p-5 placeholder:text-primary-100 text-black"
                ></textarea>
              </div>
              <div class="w-full h-[174px] mb-5">
                <h2>Stars</h2>
                <div class="flex mt-5"> 
                  <div class="flex items-center mb-4 mr-5">
                    <input id="country-option-1" type="radio" name="stars"  v-model="stars"  value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                    <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                      1
                    </label>
                  </div>
                
                  <div class="flex items-center mb-4  mr-5">
                    <input id="country-option-2" type="radio" name="stars" v-model="stars" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                      2
                    </label>
                  </div>
                
                  <div class="flex items-center mb-4  mr-5">
                    <input id="country-option-3" type="radio" name="stars" v-model="stars" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                      3
                    </label>
                  </div>
                
                  <div class="flex items-center mb-4  mr-5">
                    <input id="country-option-4" type="radio" name="stars" v-model="stars" value="4" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring:blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-4" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                      4
                    </label>
                  </div>

                  <div class="flex items-center mb-4  mr-5">
                    <input id="country-option-4" type="radio" name="stars" v-model="stars" value="5" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring:blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-4" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                      5
                    </label>
                  </div>

                </div>
              </div>
              <div>
                <button
                          class="w-full h-[50px] rounded bg-primary-500 text-white text-lg font-semibold spline-sans hover:bg-primary-900 common-trans"
                          @click="addReview"
                        >Submit Now
                      </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script>
      AOS.init();
    </script>

    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- VUE JS -->
    <script type="module">
      import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
      createApp({
        data(){
          return {
            testimonials: [
              {
                text: 'Sempol ayam adalah camilan yang luar biasa! Teksturnya yang gurih di luar dan lembut di dalam membuatnya sangat menggugah selera. Saya suka menyantapnya dengan saus sambal untuk sedikit sensasi pedas. ',
                name: 'Agustini',
                profile: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                stars: 5
              }
            ],
            text: '',
            name: '',
            profile: '',
            stars: '',
          }
        },
        methods: {
          addReview(){
            let newReview = {
              name: this.name,
              text: this.text,
              profile: this.profile,
              stars: parseInt(this.stars)
            }
            this.testimonials.push(newReview)
          },
        }
      }).mount('#app')
    </script>
  </body>
</html>
