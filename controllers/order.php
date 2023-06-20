<?php
    include 'connection.php';
?>
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
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>


<!-- Create By Joker Banny -->
<body class="bg-white">
  <!--nav bar-->
    <nav class="sticky top-0 left-0 flex justify-between z-40 w-full items-center md:px-12 bg-gradient-to-r from-red-400 to-gray-900">
            <div class="p-2">
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



<!-- Title -->
<div class="  bg-white">
    <h1 class="text-center text-2xl font-bold text-gray-800">All Products</h1>
</div>

<!-- Tab Menu -->
<div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center   bg-white text-gray-800">
	<a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
			<path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
		</svg>
		<span>Architecto</span>
	</a>
	<a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
			<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
			<path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
		</svg>
		<span>Corrupti</span>
	</a>
	<a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
			<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>
		<span>Excepturi</span>
	</a>
	<a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
			<circle cx="12" cy="12" r="10"></circle>
			<polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
		</svg>
		<span>Consectetur</span>
	</a>
</div>

<!-- Product List -->
<section class="py-10 bg-gray-100">
  <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/coffee cup.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">Adobe Photoshop CC 2022</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$850</p>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <img src="public/images/assets/shopping_cart.svg" alt="">
                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="ml-1 text-sm text-slate-400">4.9</span>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$850</p>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-red-600 px-4 py-1.5 text-white duration-100 hover:bg-green-600">
                        <img src="public/images/assets/shopping_cart.svg" alt="">
                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>

    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-red-600 px-4 py-1.5 text-white duration-100 hover:bg-green-600">
                        <img src="public/images/assets/shopping_cart.svg" alt="">
                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>

    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>
                    <div class="flex items-center space-x-1.5 rounded-lg bg-red-600 px-4 py-1.5 text-white duration-100 hover:bg-green-600">
                        <img src="public/images/assets/shopping_cart.svg" alt="">
                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>

                    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>

                    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 " onclick="openPurchase()">
        <a href="#">
            <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="public/images/colombian coffee.png" alt="Hotel Photo" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>

                    <button class="text-sm">Add to cart</button>
                </div>
            </div>

            <div class="mt-1 p-2">
                <h2 class="text-slate-700">The Hilton Hotel</h2>
                <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>

                <div class="mt-3 flex items-end justify-between">
                    <p class="text-lg font-bold text-blue-500">$450</p>

                    <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        <button class="text-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </a>
    </article>
</section>
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

<!-- Footer -->
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
  
</body>
<script src="public/js/index.js"></script>
</html>