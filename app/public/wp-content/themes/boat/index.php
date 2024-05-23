<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Boat Site</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link href="./output.css" rel="stylesheet"/> -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script src="js/lightbox-plus-jquery.min.js">
    </script>
    <?php wp_head(); ?>
</head>

<body class="flex flex-col items-start p-0 font-serif min-h-screen bg-amber-50">
    <header class="flex flex-wrap p-4 min-w-full bg-blue-500">
        <div class="container flex flex-row justify-between mx-auto w-full md:justify-items-start">
            <nav class="flex justify-between w-full">
                <div class="flex flex-none text-amber-100">

                    <a href="<?php echo home_url(); ?>">
                        <svg class="md:pt-2 w-16 h-12 md:w-24" viewBox="0 0 85 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.46 21.9247C23.593 21.5244 19.6801 21.0379 15.2022 19.6548C13.9235 19.2598 10.6497 17.7373 10.3144 17.3817L10.12 17.1755L10.498 17.2842C11.0329 17.4381 15.7455 18.1294 18.4355 18.4487C19.6828 18.5968 20.9708 18.7653 21.2977 18.8232C21.6246 18.8812 23.5381 19.0982 25.5499 19.3055C27.5618 19.5128 30.8237 19.8508 32.7986 20.0565C39.2124 20.7248 49.0851 21.2894 57.6978 21.4804L62.7532 21.5926V21.3243V21.0561L60.3436 20.9332C59.0183 20.8656 56.9905 20.81 55.8372 20.8096C54.684 20.8091 52.4303 20.7272 50.829 20.6275C49.2278 20.5278 45.834 20.3539 43.2874 20.241C40.7408 20.1281 38.1044 19.9592 37.4288 19.8657C36.7532 19.7722 34.9672 19.6037 33.46 19.4913C30.4685 19.2682 29.4036 19.1326 29.5434 18.9927C29.6244 18.9118 32.5619 19.1381 38.3095 19.668C39.3656 19.7653 42.9374 19.9357 46.247 20.0466C49.5565 20.1575 53.2849 20.2894 54.5322 20.3397C55.7795 20.39 61.5201 20.4754 67.2889 20.5295C73.0578 20.5836 77.8962 20.6706 78.041 20.7228C78.7072 20.9629 77.8051 21.0849 74.9803 21.1365L71.9191 21.1924L71.534 21.6621L71.149 22.1317L54.1471 22.103C44.7961 22.0872 35.4869 22.007 33.46 21.9247ZM59.4459 20.0454C45.2052 19.4221 42.6116 19.2804 37.0508 18.8226C35.1279 18.6643 32.4255 18.4049 31.0456 18.246C29.6658 18.0872 27.7097 17.8812 26.6989 17.7883C22.3571 17.3893 14.6409 16.4432 11.9154 15.9757C11.0319 15.8241 9.27091 15.5385 8.00215 15.341L5.69529 14.982L5.02044 14.4673C4.10745 13.7709 4.24162 13.7335 6.08281 14.1717C10.8381 15.3033 17.7823 16.2021 27.4124 16.9322C29.4393 17.0858 31.9481 17.3007 32.9876 17.4097C35.8459 17.7095 42.1197 18.1348 46.8782 18.3514C53.1873 18.6386 58.2839 18.8981 61.9972 19.1212C63.8163 19.2306 68.9402 19.336 73.3838 19.3557L81.463 19.3914L81.463 19.7019C81.463 20.2356 68.4338 20.4389 59.4459 20.0454ZM18.719 17.8768C15.7605 17.5262 11.1812 16.8746 10.2145 16.6666C9.74676 16.566 8.96208 16.4314 8.47077 16.3675C7.97946 16.3035 7.52796 16.1711 7.46743 16.0732L7.35737 15.8951L7.60476 15.8965C7.74082 15.8971 8.83016 16.0709 10.0255 16.2826C13.2307 16.8504 15.3291 17.1776 17.8685 17.5058C19.1158 17.667 20.5191 17.8708 20.9868 17.9587L21.8373 18.1186L21.2703 18.1158C20.9585 18.1143 19.8104 18.0062 18.719 17.8768ZM82.8804 17.8615C82.1328 17.5797 79.2171 16.6033 77.0218 15.8995C71.8089 14.2282 61.8165 11.9618 55.6915 11.0617C54.666 10.911 53.7679 10.7511 53.6956 10.7064C53.6233 10.6617 52.5115 10.4878 51.2249 10.3199C49.9384 10.152 48.8299 9.98018 48.7618 9.93805C48.6936 9.89591 47.1199 9.72849 45.2647 9.56599C41.4638 9.23306 40.5395 8.98046 43.8544 9.18055C49.4069 9.51572 60.5336 11.1107 66.8164 12.4721C73.173 13.8495 78.8954 15.6433 82.9277 17.5226C84.3273 18.1749 84.2965 18.3951 82.8804 17.8615ZM82.2872 15.8023C77.5924 13.7973 69.6833 11.6065 62.526 10.3285C61.6635 10.1745 60.2349 9.91757 59.3514 9.75758C52.6476 8.54355 43.3919 7.51391 36.1059 7.17162L31.4757 6.95411L21.4593 6.93611C15.9503 6.92625 9.23176 6.97646 6.52923 7.04781L1.61554 7.17751L3.41093 6.92037C4.39839 6.77894 6.77964 6.56922 8.7026 6.45431C10.6256 6.33939 13.2423 6.16287 14.5176 6.06204C15.7928 5.9612 18.8544 5.8677 21.3211 5.85429C23.7878 5.84086 27.0817 5.77708 28.6408 5.71255L31.4757 5.59521L28.5464 5.45491C26.9352 5.37776 24.9154 5.25885 24.0579 5.19067L22.4987 5.06672V4.883V4.6993L24.8138 4.82242C26.0871 4.89014 31.8333 5.02813 37.5831 5.12906L48.0372 5.31257L49.7651 5.11683C51.9527 4.86903 52.3312 4.77504 52.986 4.31717L53.5186 3.94471L54.6868 4.17245C56.7703 4.57861 61.6284 6.06806 65.777 7.57264C67.8598 8.32799 68.7768 8.65068 69.3476 8.8291C70.288 9.12304 68.8904 9.01858 65.3824 8.5327C63.1568 8.22442 59.9751 7.79249 58.312 7.57285C56.6489 7.35321 54.544 7.05226 53.6344 6.90407C51.7021 6.58925 51.4139 6.57608 51.4139 6.80259C51.4139 6.89497 51.7328 7.02718 52.1226 7.0964C52.5124 7.16561 53.3416 7.33983 53.9652 7.48353C54.5889 7.62722 55.7795 7.88419 56.6111 8.05457C64.2321 9.61614 72.8884 11.8643 77.5888 13.5028C81.3352 14.8088 83.7626 15.871 84.3829 16.4759L84.5624 16.651L84.3829 16.6358C84.2841 16.6274 83.3411 16.2524 82.2872 15.8023ZM37.0508 8.84822L34.6885 8.66222L17.3961 8.64851L0.103638 8.6348L2.18251 8.46014L4.26137 8.28548L15.5062 8.27112L26.751 8.25676L33.1913 8.49614C36.7335 8.6278 40.0503 8.80561 40.5619 8.89127L41.492 9.047L40.4526 9.04058C39.8809 9.037 38.3501 8.95052 37.0508 8.84822ZM30.9087 4.05152C31.1166 3.89907 32.1165 3.18477 33.1307 2.46418L34.9747 1.154L35.682 1.16801C36.0711 1.17572 36.7652 1.2395 37.2245 1.30975L38.0597 1.43748L36.203 2.81488L34.3463 4.19229L32.4385 4.26051L30.5307 4.32872L30.9087 4.05152ZM35.9326 4.28809C35.9759 4.24481 36.6067 3.77023 37.3343 3.23349C38.0619 2.69675 38.7252 2.13685 38.8083 1.98928L38.9595 1.72097H39.4923C39.9837 1.72097 42.81 2.15725 43.8132 2.38798L44.2445 2.48718L43.4352 3.42689L42.626 4.36662L39.2399 4.36671C37.3776 4.36676 35.8893 4.33136 35.9326 4.28809ZM43.6733 4.2251C43.6776 4.14714 43.9747 3.75086 44.3336 3.34448L44.986 2.60563L46.8298 3.00072C47.8439 3.21802 49.2051 3.49835 49.8548 3.62366C51.3759 3.91709 51.349 4.09362 49.7603 4.24366C47.9914 4.41072 43.6637 4.39753 43.6733 4.2251ZM25.1446 4.1085C25.1446 4.07036 25.7186 3.64371 26.4202 3.16039C27.1219 2.67707 28.2912 1.85394 29.0188 1.33121L30.3417 0.380798L31.6647 0.497495C33.7431 0.680831 34.1151 0.880988 33.1743 1.30967C32.9132 1.42864 31.8472 2.12265 30.8054 2.85192L28.9113 4.17784H27.0279C25.9921 4.17784 25.1446 4.14664 25.1446 4.1085Z"
                                fill="currentColor" />
                        </svg>
                    </a>

                    <div class="flex flex-col flex-none px-4 w-60">
                        <h1 class="text-lg text-amber-100"><?php echo get_bloginfo( 'name' ); ?></h1>
                        <h2 class="font-sans text-xs text-amber-100"><?php 
                        echo htmlspecialchars_decode(stripslashes(get_bloginfo( 'description' ) )); ?></h2>
                    </div>
                </div>
                <div class="hidden w-full md:flex md:place-self-end">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu',
    'container' => "",
    'menu_class' => "flex flex-col gap-8 content-end w-full text-amber-100 text-l sm:text-l md:flex-row md:justify-end",
));?>



                </div>
                <!--Hamburger menu icon svg to trigger the slide-in menu when clicked-->
                <div onclick="openNav()">
                    <svg class="object-right cursor-pointer md:hidden" xmlns="http://www.w3.org/2000/svg" width="18.853"
                        height="12" viewBox="0 0 18.853 12">
                        <g id="Icon_feather-menu" data-name="Icon feather-menu" transform="translate(-4.5 -8)">
                            <path id="Path_3" data-name="Path 3" d="M4.5,18H23.353" transform="translate(0 -4)"
                                fill="none" stroke="#FFEFD5" stroke-linejoin="round" stroke-width="2" />
                            <path id="Path_4" data-name="Path 4" d="M4.5,9H23.353" transform="translate(0)" fill="none"
                                stroke="#FFEFD5" stroke-linejoin="round" stroke-width="2" />
                            <path id="Path_5" data-name="Path 5" d="M4.5,27H23.353" transform="translate(0 -8)"
                                fill="none" stroke="#FFEFD5" stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </svg>
                </div>
                <!--background overlay element, it will close navbar when clicked-->
                <div onclick="exitNav()" id="sideBar"
                    class="overflow-x-hidden fixed top-0 right-0 z-10 w-0 h-full bg-transparent duration-500">
                    <!--navigation menu box-->
                    <div id="sideNav"
                        class="flex overflow-x-hidden fixed top-0 right-0 z-10 justify-center items-center w-0 h-full font-bold bg-gradient-to-r to-blue-800 duration-500 from-blue-950">
                        <!--exit icon, it will close navbar when clicked-->
                        <a href="javascript:void(0)" onclick="exitNav()"
                            class="absolute top-0 right-0 mt-2 mr-3 text-3xl">&times;</a>
                        <ul class="text-2xl text-amber-100 sm:text-3xl">
                            <li><a href="./index.html">Accueil</a></li>
                            <li><a href="./entretien.html">Entretien</a></li>
                            <li><a href="./hivernage.html">Hivernage</a></li>
                            <!-- <li><a href="#">Occasions</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="flex flex-row w-full">
   <?php // check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail(get_the_ID(),'full',array( 'class' => 'flex object-cover object-bottom flex-grow min-w-full h-40 md:h-60'));
}
?>
        
    </div>
    <main class="p-4 w-full ">
        <section class="container py-2 mx-auto">
            <h2 class="py-4 text-3xl"><?php the_title();?></h2>
            <?php the_content();?>
        </section>
    </main>
    <div class="justify-around p-4 w-full ">
        <div class="container grid grid-cols-3 gap-4 mx-auto w-full">
            <a href="images/porte.jpg" data-lightbox="mygallery">
                <img class="duration-100 aspect-auto hover:drop-shadow-lg hover:scale-110" src="images/porte.jpg">
            </a>
            <a href="images/Volvo.jpg" data-lightbox="mygallery">
                <img class="duration-100 aspect-auto hover:drop-shadow-lg hover:scale-110" src="images/Volvo.jpg">
            </a>
            <a href="images/mercury.jpg" data-lightbox="mygallery">
                <img class="duration-100 aspect-auto hover:drop-shadow-lg hover:scale-110" src="images/mercury.jpg">
            </a>
        </div>
    </div>
    <footer class="mt-auto py-8 w-full bg-gradient-to-b to-blue-800 border-t border-grey from-blue-950">
        <div class="container flex flex-wrap gap-10 mx-auto text-amber-100">
            <!-- <div class="px-4">
                <p>Marine Loisirs <br />Rte suisse <br />1297 Founex</p>
            </div>
            <div>
                Tél:022 776 22 47<br>
                Fax: 022 776 01 84<br>
                info@marine-loisirs.ch
            </div>
        </div> -->
     <?php   if (is_active_sidebar('custom-sidebar')) {
    dynamic_sidebar('custom-sidebar');
}
?>
        <!-- <div class="container mx-auto">
            <p class="p-4 text-xs text-amber-100">Copyright 2024</p>
        </div> -->
    </footer>
    <script src="js/menu.js"></script>
    <?php wp_footer(); ?>
</body>

</html>