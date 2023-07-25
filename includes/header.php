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
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!--nav bar-->
    <nav class="sticky top-0 left-0 flex justify-between z-50 w-full items-center md:px-12" style="background: rgb(0, 0, 0, 0.5);">
        <div class="p-4">
            <a href="#"><img src="public/images/assets/logo.png" class="w-24" alt="logo"></a>
        </div>
        <!--nav links-->
        <div class="hidden absolute pl-8 py-8 pt-56 w-full md:relative md:w-auto md:bg-none md:flex md:gap-12 list-none md:p-4" id="navLinks">
            <img src="public/images/assets/close button.png" class="absolute right-8 w-12 md:hidden" alt="close" onclick="closeMenu()">
            <a href="index.php">
                <li class="text-2xl text-white hover:text-orange-700 ">Home</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-orange-700">Services</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-orange-700">Contact</li>
            </a>
            <a href="#">
                <li class="text-2xl text-white hover:text-orange-700">About</li>
            </a>
        </div>
        <!--open and close icons, plus order button-->
        <div class="p-4">
            <img src="public/images/assets/menu icon.png" class="w-12 md:hidden" alt="close" onclick="openmenu()">
            <!--button-->
            <a href="order.php" ><button class="hidden px-8 py-2 bg-orange-700 rounded-xl text-white text-xl font-bold md:block hover:text-orange-700 hover:bg-white">Order now</button></a>
        </div>
    </nav>