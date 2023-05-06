<?php
    include 'connection.php';

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin signUp</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    
</head>
<body class="flex flex-col items-center  w-full h-screen bg-gradient-to-r from-neutral-300 to-stone-400">
    <img src="public/images/assets/logo.png" class="h-24" alt="">

    <div class="container mx-auto py-8">

        <h1 class="text-2xl font-bold mb-6 text-center text-reddish">Admin Registration Form</h1>

        <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="addadmin.php" method="post" enctype="multipart/form-data" >
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">First Name</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" id="name" name="fname" placeholder="Enter First Name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Last Name</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" id="name" name="lname" placeholder="Enter Last Name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="email" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Phone</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="tel" id="email" name="phone" placeholder="Enter Your Phone" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="password" id="pass" name="pass" placeholder="********" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="password" id="confirm-password" placeholder="********" required>
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="image">Upload mage</label>
                <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
        
        <input
            class="w-full bg-red-600 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
            type="submit" name="submit" value="Register">
        </form>
  </div>
<!-- </body>

    <header class="flex flex-col items-center">
        <h1 class="text-xl text-white font-bold">Admin login</h1>
    <img src="public/images/assets/logo.png" class="w-12" alt="">
    </header>
    <form action="addadmin.php" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
        <input type="text" name="fname" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="First name" required>
        <input type="text" name="lname" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="Last name" required>
        <input type="email" name="email" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="Email" required>
        <input type="password" name="pass" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="Phone" required>
        <input type="password" name="pass" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="Password" required>
        <input type="tel" name="phone" class="p-2 w-full rounded-xl border-2 border-reddish" placeholder="phone" required>
        <input type="file" name="image" class="bg-reddish" required>
        <input type="submit" name="submit" class="p-2 w-full rounded-xl border-2 border-reddish bg-reddish text-xl font-bold text-white" value="Sign Up">
    </form>
</body> -->

</html>