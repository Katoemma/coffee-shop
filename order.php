<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Coffee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--font awesome link-->
    <link rel="stylesheet" href="output.css">
    <!--AOS links-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!--nav bar-->
    <nav class="sticky top-0 left-0 flex justify-between z-40 w-full items-center md:px-12" style="background: rgb(0, 0, 0);">
        <div class="p-4">
            <a href="index.php"><img src="public/images/assets/logo.png" class="w-24" alt="logo"></a>
        </div>
        <!--nav links-->
        <div class="hidden absolute pl-8 py-8 pt-56 w-full md:relative md:w-auto md:bg-none md:flex md:gap-12 list-none md:p-4" id="navLinks">
            <img src="public/images/assets/close button.png" class="absolute right-8 w-12 md:hidden" alt="close" onclick="closeMenu()">
            <a href="index.php">
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
            <a href="#" ><button class="hidden px-8 py-2 bg-reddish rounded-xl text-white text-xl font-bold md:block hover:text-reddish hover:bg-white">Order now</button></a>
        </div>
    </nav>

    <div class="flex flex-col bg-cream items-center">
        <!--intro-->
        <div class="flex flex-col justify-between">
            <h1 class="text-4xl font-black text-reddish">You Want to buy</h1>
        </div>
        <!--cards-->
        <div class="flex flex-col p-4 gap-2 md:grid grid-cols-5 grid-rows-2 md:gap-4 md:px-16">
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>

            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
            <!--card -1-->
            <div class="flex flex-col p-8 bg-white gap-4 border-grayish border-4 rounded-xl">
                <img src="public/images/colombian coffee.png"class="w-72 rounded-xl cursor-pointer" alt="" onclick="openPurchase()">
                <div class="flex flex-col">
                    <h2 class="text-xl">Price: <span class="font-bold">UGX 1500/=</span></h2>
                    <h2 class="text-xl">Quantity: <span class="font-bold">200ml</span></h2>
                    <p class="text-xl">10% off</p>
                    <p class="text-reddish text-xl">Columbian coffee</p>

                </div>
            </div>
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
                    <input type="number" class="rounded p-1 border-2 border-grayish" id="totalCups" placeholder="Number of cups" oninput="totalPrice()" required>
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



    <script src="public/js/index.js"></script>
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
    