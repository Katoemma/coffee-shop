<?php 
    include 'connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--font awesome link-->
    <!--AOS links-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="output.css">

</head>
<body>
    <!--background video-->
    <div class="absolute top-0 left-0 z-10 w-full">
        <video src="public/videos/bg video.mp4" class="hidden md:block w-full h-full" muted loop autoplay></video>
        <video src="public/videos/cccbb.mp4" class="md:hidden w-full h-screen" muted loop autoplay></video>
    </div>
    <!--nav bar-->
    <nav class="sticky top-0 left-0 flex justify-between z-50 w-full items-center md:px-12" style="background: rgb(0, 0, 0, 0.5);">
        <div class="p-4">
            <a href="#"><img src="public/images/assets/logo.png" class="w-24" alt="logo"></a>
        </div>
        <!--nav links-->
        <div class="hidden absolute pl-8 py-8 pt-56 w-full md:relative md:w-auto md:bg-none md:flex md:gap-12 list-none md:p-4" id="navLinks">
            <img src="public/images/assets/close button.png" class="absolute right-8 w-12 md:hidden" alt="close" onclick="closeMenu()">
            <a href="#">
                <li class="text-2xl text-white hover:text-reddish ">Home</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-reddish">Services</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-reddish">Contact</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-reddish">About</li>
            </a>
        </div>
        <!--open and close icons, plus order button-->
        <div class="p-4">
            <img src="public/images/assets/menu icon.png" class="w-12 md:hidden" alt="close" onclick="openmenu()">
            <!--button-->
            <a href="order.php" ><button class="hidden px-8 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Order now</button></a>
        </div>
    </nav>
    <div class="flex relative z-10 w-full py-16 px-6 md:h-screen" style="background: rgb(0, 0, 0, 0.5);">
        <!--hero text-->
        <div class="flex flex-col items-center md:items-start md:py-12 lg:py-24 md:w-1/2">
            <div class="flex flex-col">
                <h1 class="text-white text-4xl md:text-7xl font-bold">Wake up and smell the <span class="text-reddish"> coffee!</span></h1>
                <h1 class="text-white text-4xl md:text-7xl font-bold">Your daily dose of <span class="text-reddish"> caffeine</span></h1>
            </div>
           <p class="text-white text-2xl py-4 md:text-xl md:py-16">
            Life without coffee is a scary place. That’s why we’ve been proudly serving up fresh coffee to the San Francisco area since 2000. Globally sourced with the most delicious blends from around the world directly to your hand, our coffee makes even the most difficult days just a tad easier to get through.
           </p>
           <a href="order.php"><button class="px-12 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Order now</button></a>
        </div>
    </div>
   <!--services-->
    <div class="relative z-10 flex flex-col p-6 w-full bg-cream">
    <!--our services heading-->
        <div class="flex flex-col items-center w-full">
            <h1 class="text-4xl font-extrabold self-center md:text-6xl">Our Services</h1>
        </div>
        <!--our services content container-->
        <div class="flex flex-col justify-between py-12 gap-8 md:flex-row">
            <!--coffee delivery-->
            <div class="flex flex-col bg-grayish border-4 rounded-3xl border-grayish "  data-aos="fade-up" data-aos-duration="2000">
                <img src="public/images/delivery.png" class="border-4 rounded-3xl border-grayish h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Coffee Delivery</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite coffee from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Order now</button></a>
                    </div>
                </div>
            </div>

             <!--coffee delivery-->
             <div class="flex flex-col bg-grayish border-4 rounded-3xl border-grayish " data-aos="flip-down" data-aos-duration="2000">
                <img src="public/images/coffee testing.png" class="border-4 rounded-3xl border-grayish h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Coffee Testing</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite coffee from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Learn More</button></a>
                    </div>
                </div>
            </div>

             <!--coffee delivery-->
             <div class="flex flex-col bg-grayish border-4 rounded-3xl border-grayish " data-aos="fade-up" data-aos-duration="2000">
                <img src="public/images/ice cream.png" class="border-4 rounded-3xl border-grayish h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Ice cream</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite ice cream from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Learn More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--About us-->
    <div class="relative h-fit z-10 p-4 py-12 w-full flex flex-col gap-8 items-center bg-coffee">
        <!--About us heading-->
        <div class="flex flex-col text-center">
            <h1 class="text-2xl font-bold text-white md:text-4xl">About us</h1>
            <h2 class="text-3xl  text-reddish md:text-6xl md:font-bold">We are serving since 2016</h2>
        </div>
        <!--text and image container-->
        <div class="flex flex-col gap-8 md:flex-row justify-between md:px-16">
            <!--our story-->
            <div class="flex flex-col gap-4 md:py-8 md:px-8 md:w-3/5">
                <h1 class="text-xl font-bold text-white">Our Story</h1>
                <div class="flex flex-col">
                    <p class="text-xl text-white">The shop owned by a passionate coffee lover named Elias. She had a deep love for coffee, and her dream was to create a warm and inviting space where people could come together over a cup of their favorite brew</p>
                </div>
                <a href="#"><button class="text-xl bg-reddish text-white hover:text-reddish hover:bg-white border-reddish border-1 rounded px-12 py-2">Learn more</button></a>
            </div>


            <div class="w-full md:2/5" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="public/images/coffee cup.png" alt="coffee cup" class="h-96">
            </div>
            
            
            <div class="flex flex-col gap-4 md:py-8 md:px-8 md:w-3/5">
                <h1 class="text-xl font-bold text-white">Our Vision</h1>
                <div class="flex flex-col">
                    <p class="text-md text-white">"Our coffee shop is a place where you can relax, unwind, and enjoy a delicious cup of coffee. We are committed to providing our customers with high-quality coffee made from the finest beans, and we take pride in serving each cup with a smile. Our cozy and welcoming atmosphere is the perfect place to catch up with friends, read a book, or simply enjoy a moment of quiet. Whether you're in a hurry or have all the time in the world, we're here to provide you with the perfect cup of coffee, every time."</p>
                </div>
                <a href="#"><button class="text-xl bg-reddish text-white hover:text-reddish hover:bg-white border-reddish border-1 rounded px-12 py-2">Learn more</button></a>
            </div>
        </div>
    </div>


    <!--menu and pricing-->

    <div class="relative z-10 flex flex-col items-center py-12 bg-cream gap-8 p-4">
        <!--menu and pricing headind-->
        <h1 class="text-2xl font-black md:text-6xl text-center">Our Menu And Pricing</h1>
        <div class="flex flex-col items-center p-4 md:grid md:grid-cols-2  md:flex-row md:gap-4  md:px-64" data-aos="zoom-in" data-aos-duration="3000">
            <div class="flex flex-col w-full md:px-64 text-center gap-4" data-aos="flip-right" data-aos-duration="1000">
                <h1 class="text-xl font-bold">Coffee menu</h1>
                <!--meal card -1 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl"  data-aos="fade-right" data-aos-duration="4000" data-aos-easing="ease-out-cubic"> 
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -2 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class=" px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -3 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>
     
            </div>

            <div class="flex flex-col w-full md:px-64 text-center gap-4" data-aos="flip-left" data-aos-duration="1000">
                <h1 class="text-xl font-bold">Coffee menu</h1>
                <!--meal card -1 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -2 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -3 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>
     
            </div>
        </div>
    </div>

    <!--online table booking section-->
    <div class="fixed h-screen top-1 z-0 w-full md:h-auto ">
        <video src="public/videos/coffee introo.mp4" class="w-full" muted loop autoplay></video>
    </div>
    <!-- table booking form-->
    <div class="relative flex flex-col gap-8 z-10 p-4 md:py-24" style="background: rgb(0, 0, 0, 0.2);">
        <h1 class="text-3xl font-black text-white md:text-6xl text-center">Book Your Table</h1>
        <!--table form container-->
        <div class="flex flex-col  md:flex-row md:items-center md:px-64">
            <div class="flex flex-col justify-between px-2 py-2 md:px-12 md:w-1/2">
                <h1 class="text-5xl text-reddish font-black"><span id="count">30</span>% OFF</h1>
                <h2 class="text-3xl text-white font-bold">For Online Reservation</h2>
                <p class="text-xl text-grayish">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
                <ul class="">
                    <li class="text-xl text-white flex"><img src="images/assets/checkmark.png" class="w-8 " alt="">  Free ice cream</li>
                    <li class="text-xl text-white flex"><img src="images/assets/checkmark.png" class="w-8 " alt="">  Free ice cream</li>
                    <li class="text-xl text-white flex"><img src="images/assets/checkmark.png" class="w-8 " alt="">  Free ice cream</li>
                </ul>
            </div>
            <form method="POST" action="addbook.php" class="flex flex-col gap-3 py-4 md:w-1/2 md:px-12" onsubmit="return validateForm()">
                <input type="text" name="name" class="w-full bg-grayish p-2 border-2 border-reddish rounded-xl" placeholder="Enter Your Name" required>
                <input type="email" name="email" class="w-full bg-grayish p-2 border-2 border-reddish rounded-xl" placeholder="Enter Your Email" required>
                <input type="date" name="date" class="w-full bg-grayish p-2 border-2 border-reddish rounded-xl" placeholder="Date" required>
                <input type="time" name="time" class="w-full bg-grayish p-2 border-2 border-reddish rounded-xl" placeholder="Time" required>
                <input type="number" name="guests" class="w-full bg-grayish p-2 border-2 border-reddish rounded-xl" placeholder="Enter Number Of Guests" required>
                <button type="submit" name="submit" class="w-full bg-reddish p-2 border-2 border-reddish rounded-xl text-xl font-bold text-white">Book Now</button>
            </form>
        </div>
    </div>

     <!--puchase card-->
     <div class="hidden fixed top-0 flex-col w-full items-center h-screen z-50 py-32 px-4" id="orderpurc" style="background-color: rgba(0, 0, 0, 0.5)">
        <div class="flex flex-col p-4 gap-2  border-4 border-grayish rounded-xl bg-cream md:gap-6 backdrop-blur-lg">
            <div class="flex justify-between">
                <h1 class="text-xl font-bold text-reddish">Make your purchase</h1>
                <img src="public/images/assets/close black.png" alt="" class="w-8 cursor-pointer" onclick="cancelOrder()">
            </div>
           
            <div class="flex flex-col gap-2">
                <label class="text-xl">Enter Your Details Below</label>
                <div class="flex gap-2 justify-between">
                    <label for="name" class="text-xl">Your Name</label>
                    <input type="text" class="rounded p-1 border-2 border-grayish" placeholder="Enter Your Name" required>
                </div>
                <div class="flex gap-2 justify-between">
                    <label for="name" class="text-xl">Your Name</label>
                    <input type="tel" class="rounded p-1 border-2 border-grayish" placeholder="Mobile Phone" required>
                </div>
                <div class="flex gap-2 justify-between">
                    <label for="name" class="text-xl">Your Name</label>
                    <input type="text" class="rounded p-1 border-2 border-grayish" placeholder="Address" required>
                </div>
            </div>
            <!--purchase center-->
            <div class="flex flex-col gap-4">
                <div class="flex gap-2 justify-between">
                    <label for="name" class="text-xl">Number of cups</label>
                    <input type="number" class="rounded p-1 border-2 border-grayish" id="totalCups"  placeholder="Number of cups" oninput="totalPrice()" required>
                </div>
                <h1 class="text-xl">Amount to pay :UGX <span id="price" class="font-bold text-reddish">1000</span>/=</h1>
            </div>
            <!--mode of payment-->
            <div class="flex flex-col gap-4">
                <label for="" class="text-xl text-reddish font-bold">Choose Your Payment Method</label>
                <div class="flex justify-between gap-3">
                    <img src="public/images/assets/visa.png" alt="visa" class="w-12 rounded cursor-pointer">
                    <img src="public/images/assets/mastercard.png" alt="visa" class="w-12 rounded cursor-pointer">
                    <img src="public/images/assets/paypal.png" alt="visa" class="w-12 rounded cursor-pointer">
                    <img src="public/images/assets/mtn momo.png" alt="visa" class="w-12 rounded cursor-pointer">
                    <img src="public/images/assets/airtel money.png" alt="visa" class="w-12 rounded cursor-pointer">
                </div>
            </div>
            <button class="bg-reddish text-xl font-bold text-white rounded-xl p-2 hover:bg-white hover:border-reddish border-2 hover:text-reddish">Confirm Your Order</button>
        </div>
    </div>
</body>


<!--footer sectrion-->
<footer class="relative z-10 h-fit w-full" style="background-image: url(public/images/coffee\ bg.jpg); background-repeat: no-repeat; background-size: cover;">
    <!--footer content-->
    <div class="flex flex-col gap-4 h-full w-full p-12 items-center md:flex-row md:items-start md:justify-between" style="background: rgb(0, 0, 0, 0.5)">
        <!--contact s-->
        <div class="flex flex-col items-center md:items-start">
            <h1 class="text-reddish text-2xl font-bold">
                Follow us
            </h1>
            <img src="public/images/assets/logo.png" alt="" class="w-24 md:w-36">
            <!--social links-->
            <div class="flex justify-between gap-12">
                <a href="#"><i class="fa fa-facebook text-white text-2xl hover:text-reddish md:text-4xl"></i></a>
                <a href="#"><i class="fa fa-twitter text-white text-2xl hover:text-reddish md:text-4xl"></i></a>
                <a href="#"><i class="fa fa-instagram text-white text-2xl hover:text-reddish md:text-4xl"></i></a>
                <a href="#"><i class="fa fa-whatsapp text-white text-2xl hover:text-reddish md:text-4xl"></i></a>
            </div>
        </div>
        <!--useful links-->
        <div class="flex flex-col">
            <h1 class="text-reddish text-2xl font-bold">
                Useful Links
            </h1>
            <div class="flex flex-col text-center">
                <a href="#">
                    <li class="list-none text-white text-lg hover:text-reddish">Home</li>
                </a><a href="">
                    <li class="list-none text-white text-lg hover:text-reddish">Our services</li>
                </a><a href="">
                    <li class="list-none text-white text-lg hover:text-reddish">Contact Us</li>
                </a><a href="">
                    <li class="list-none text-white text-lg hover:text-reddish">About Us </li>
                </a><a href="">
                    <li class="list-none text-white text-lg hover:text-reddish">Order Online</li>
                </a>
            </div>
        </div>

        <!--resources-->
        <div class="flex flex-col">
            <h1 class="text-reddish text-2xl font-bold">Resources</h1>

            <div class="flex flex-col text-center">
                <a href="#">
                    <li class="list-none text-white text-lg hover:text-reddish">Blog</li>
                </a>
                <a href="#">
                    <li class="list-none text-white text-lg hover:text-reddish">Patnerships</li>
                </a>
                <a href="#">
                    <li class="list-none text-white text-lg hover:text-reddish">Careers</li>
                </a>
                <a href="#">
                    <li class="list-none text-white text-lg hover:text-reddish">FAQs </li>
                </a>
            </div>
        </div>

        <!--news latter-->
        <div class="flex flex-col gap-4">
            <h1 class="text-reddish text-2xl font-bold">Subscribe to our Newsletter</h1>

            <form action="" class="flex flex-col gap-4">
                <input type="text" class="border-reddish border-1 rounded-lg w-12/12 p-4" placeholder="Enter your Name">
                <input type="text" class="border-reddish border-1 rounded-lg w-12/12 p-4" placeholder="Enter your Email">
                <button class="bg-reddish px-12 py-4 text-white text-xl font-bold hover:text-reddish hover:bg-white border-reddish border-1 rounded-lg">Subscribe Now</button>
            </form>
        </div>
    </div>
    <div class="flex text-center p-4 w-full" style="background: rgb(0, 0, 0, 0.5)">
        <h1 class="text-2xl font-bold text-white self-center">CopyRight &copy;Kato2023 </h1>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="public/js/index.js"></script>
<script src="public/js/form.js"></script>
</html>