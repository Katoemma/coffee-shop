<?php include 'db/connection.php';?>
<?php include 'includes/header.php';?>
<!--background video-->
    <div class="absolute top-0 left-0 z-10 w-full">
        <video src="public/videos/bg video.mp4" class="hidden md:block w-full h-full" muted loop autoplay></video>
        <video src="public/videos/cccbb.mp4" class="md:hidden w-full h-screen" muted loop autoplay></video>
    </div>

    <div class="flex relative z-10 w-full py-16 px-6 md:h-screen" style="background: rgb(0, 0, 0, 0.5);">
        <!--hero text-->
        <div class="flex flex-col items-center md:items-start md:py-12 lg:py-24 md:w-1/2">
            <div class="flex flex-col">
                <h1 class="text-white text-4xl md:text-7xl font-bold">Wake up and smell the <span class="text-orange-700"> coffee!</span></h1>
                <h1 class="text-white text-4xl md:text-7xl font-bold">Your daily dose of <span class="text-orange-700"> caffeine</span></h1>
            </div>
           <p class="text-white text-2xl py-4 md:text-xl md:py-16">
            Life without coffee is a scary place. That’s why we’ve been proudly serving up fresh coffee to the San Francisco area since 2000. Globally sourced with the most delicious blends from around the world directly to your hand, our coffee makes even the most difficult days just a tad easier to get through.
           </p>
           <a href="order.php"><button class="px-12 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white">Order now</button></a>
        </div>
    </div>
   <!--services-->
    <div class="relative z-10 flex flex-col p-6 w-full bg-yellow-50">
    <!--our services heading-->
        <div class="flex flex-col items-center w-full">
            <h1 class="text-4xl font-extrabold self-center md:text-6xl">Our Services</h1>
        </div>
        <!--our services content container-->
        <div class="flex flex-col justify-between py-12 gap-8 md:flex-row">
            <!--coffee delivery-->
            <div class="flex flex-col bg-gray-100 border-4 rounded-3xl border-gray-100 "  data-aos="fade-up" data-aos-duration="2000">
                <img src="public/images/delivery.png" class="border-4 rounded-3xl border-gray-100 h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Coffee Delivery</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite coffee from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white">Order now</button></a>
                    </div>
                </div>
            </div>

             <!--coffee delivery-->
             <div class="flex flex-col bg-gray-100 border-4 rounded-3xl border-gray-100 " data-aos="flip-down" data-aos-duration="2000">
                <img src="public/images/coffee testing.png" class="border-4 rounded-3xl border-gray-100 h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Coffee Testing</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite coffee from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white">Learn More</button></a>
                    </div>
                </div>
            </div>

             <!--coffee delivery-->
             <div class="flex flex-col bg-gray-100 border-4 rounded-3xl border-gray-100 " data-aos="fade-up" data-aos-duration="2000">
                <img src="public/images/ice cream.png" class="border-4 rounded-3xl border-gray-100 h-96" alt="coffee delivery">
                <div class="flex flex-col items-center gap-8 p-4">
                    <h1 class="text-4xl font-bold">Ice cream</h1>
                    <div class="w-full">
                        <p class="text-2xl">Enjoy your favorite ice cream from the comfort of your home.</p>
                    </div>
                    <div class="w-full">
                        <a href="#"><button class="px-12 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white">Learn More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--About us-->
    <div class="relative h-fit z-10 p-4 py-12 w-full flex flex-col gap-8 items-center bg-amber-950">
        <!--About us heading-->
        <div class="flex flex-col text-center">
            <h1 class="text-2xl font-bold text-white md:text-4xl">About us</h1>
            <h2 class="text-3xl  text-orange-700 md:text-6xl md:font-bold">We are serving since 2016</h2>
        </div>
        <!--text and image container-->
        <div class="flex flex-col gap-8 md:flex-row justify-between md:px-16">
            <!--our story-->
            <div class="flex flex-col gap-4 md:py-8 md:px-8 md:w-3/5">
                <h1 class="text-xl font-bold text-white">Our Story</h1>
                <div class="flex flex-col">
                    <p class="text-xl text-white">The shop owned by a passionate coffee lover named Elias. She had a deep love for coffee, and her dream was to create a warm and inviting space where people could come together over a cup of their favorite brew</p>
                </div>
                <a href="#"><button class="text-xl bg-orange-700 text-white hover:text-orange-700 hover:bg-white border-orange-700 border-1 rounded px-12 py-2">Learn more</button></a>
            </div>


            <div class="w-full md:2/5" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="public/images/coffee cup.png" alt="coffee cup" class="h-96">
            </div>
            
            
            <div class="flex flex-col gap-4 md:py-8 md:px-8 md:w-3/5">
                <h1 class="text-xl font-bold text-white">Our Vision</h1>
                <div class="flex flex-col">
                    <p class="text-md text-white">"Our coffee shop is a place where you can relax, unwind, and enjoy a delicious cup of coffee. We are committed to providing our customers with high-quality coffee made from the finest beans, and we take pride in serving each cup with a smile. Our cozy and welcoming atmosphere is the perfect place to catch up with friends, read a book, or simply enjoy a moment of quiet. Whether you're in a hurry or have all the time in the world, we're here to provide you with the perfect cup of coffee, every time."</p>
                </div>
                <a href="#"><button class="text-xl bg-orange-700 text-white hover:text-orange-700 hover:bg-white border-orange-700 border-1 rounded px-12 py-2">Learn more</button></a>
            </div>
        </div>
    </div>


    <!--menu and pricing-->

    <div class="relative z-10 flex flex-col items-center py-12 bg-yellow-50 gap-8 p-4">
        <!--menu and pricing headind-->
        <h1 class="text-2xl font-black md:text-6xl text-center">Our Menu And Pricing</h1>
        <div class="flex flex-col items-center p-4 md:grid md:grid-cols-2  md:flex-row md:gap-4  md:px-64" data-aos="zoom-in" data-aos-duration="3000">
            <div class="flex flex-col w-full md:px-64 text-center gap-4" data-aos="flip-right" data-aos-duration="1000">
                <h1 class="text-xl font-bold">Coffee menu</h1>
                <!--meal card -1 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-gray-100 rounded-3xl"  data-aos="fade-right" data-aos-duration="4000" data-aos-easing="ease-out-cubic"> 
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -2 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class=" px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -3 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
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
                        <button class="px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -2 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
                    </div>
                </div>

                <!--meal card -3 -->
                <div class="flex justify-between w-96 gap-8 text-start p-4 border-4 border-grayish rounded-3xl">
                    
                    <img src="public/images/colombian coffee.png" class="w-40"  alt="colombian coffee">
                    
                    <!--price and description-->
                    <div class="flex flex-col justify-between">
                        <p class="text-lg">Price: $100</p>
                        <h2 class="text-lg">Black coffee</h2>
                        <button class="px-6 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white" onclick="openPurchase()">Order now</button>
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
                <h1 class="text-5xl text-orange-600 font-black"><span id="count">30</span>% OFF</h1>
                <h2 class="text-3xl text-white font-bold">For Online Reservation</h2>
                <p class="text-xl text-gray-100">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
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
                <button type="submit" name="submit" class="w-full bg-orange-600 p-2 border-2 border-orange-600 rounded-xl text-xl font-bold text-white" onclick="alert('Your booking has been submitted!')">Book Now</button>
            </form>
        </div>
    </div>
<?php include 'includes/footer.php'?>