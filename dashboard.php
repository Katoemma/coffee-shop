<?php
    include 'connection.php';

    $sql_get = mysqli_query($conn, "SELECT * FROM booking WHERE status=0");
    $notifier = mysqli_num_rows($sql_get);

    //check if the acoount exists
    $qry = mysqli_query($conn, "SELECT * FROM admin");
    if(mysqli_num_rows($qry) < 1){
        header("Location: admin_signup.php");
    }

    //retrieving the profile pic
    $result =mysqli_query($conn, "SELECT fname, lname, photo FROM admin WHERE id= 1");

    if (mysqli_num_rows($result) > 0){
        $row =mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $photo = $row['photo'];    
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="bg-yellow-50">
<aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
    <div>
        <div class="-mx-6 px-6 py-4">
            <a href="#" title="home">
                <img src="public/images/assets/logo.png" class="w-32" alt="tailus logo">
            </a>
        </div>

        <div class="mt-8 text-center">
            <?php echo "<img src='$photo' class='w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28'>"?>
            <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block"><?php echo "$fname $lname";?></h5>
            <span class="hidden text-gray-400 lg:block">Admin</span>
        </div>

        <ul class="space-y-2 tracking-wide mt-8">
            <li>
                <a href="#" aria-label="dashboard" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                    <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                        <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                        <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                        <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                    </svg>
                    <span class="-mr-1 font-medium">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard_order.php" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <img src="public/images/assets/deliver.svg" class="h-5 w-5" alt="">
                    <span class="group-hover:text-gray-700">Orders</span>
                </a>
            </li>
            <li>
                <a href="dashboard_booking.php" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <img src="public/images/assets/shoppin.svg" class="h-5 w-5" alt="">
                    <span class="group-hover:text-gray-700">Table Bookings</span>
                </a>
            </li>
            <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <img src="public/images/assets/add_cart.svg" class="h-5 w-5" alt="">
                    <span class="group-hover:text-gray-700">Products</span>
                </a>
            </li>
            <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    <span class="group-hover:text-gray-700">Finances</span>
                </a>
            </li>
            <li>
                <a href="dashboard_employees.php" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <img src="public/images/assets/employee.svg" class="h-5 w-5" alt="">
                    <span class="group-hover:text-gray-700">Employees</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t group">
        <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
            <img src="public/images/assets/account.svg" class="h-5 w-5" alt="">
            <span class="group-hover:text-gray-700">Your Profile</span>
        </button>
        <div class="hidden absolute right-0 w-40 mb-16 py-2 bg-white border rounded shadow-xl group-hover:block">   
            <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-red-600 hover:text-white">Settings</a>
            <div class="py-2">
                <hr></hr>
            </div>
            <a href="logout.php" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-red-600 hover:text-white">    
            Logout
            </a>
        </div>
    </div>
</aside>
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="sticky z-10 top-0 h-16 border-b bg-white lg:py-2.5">
        <div class="px-6 flex items-center justify-between space-x-4 2xl:container">
            <h5 hidden class="text-2xl text-red-600 font-bold lg:block">Dashboard</h5>
            <button class="w-12 h-16 -mr-2 border-r lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex space-x-4">
                <!--search bar -->
                <div hidden class="md:block">
                    <div class="relative flex items-center text-gray-400 focus-within:text-cyan-400">
                        <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                        <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                            <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
                        </svg>
                        </span>
                        <input type="search" name="leadingIcon" id="leadingIcon" placeholder="Search here" class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 focus:border-cyan-300 transition">
                    </div>
                </div>
                <!--/search bar -->
                <button aria-label="search" class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200 md:hidden">
                    <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 mx-auto fill-current text-gray-600" viewBox="0 0 35.997 36.004">
                        <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
                    </svg>
                </button>
                <button aria-label="chat" class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
                    <img src="public/images/assets/email.svg" class="h-5 w-5 m-auto text-gray-600" alt="">
                    <span class="absolute inline-flex items-center rounded-md bg-red-700 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-pink-700/10"><?php echo $notifier ?></span>
                </button>
                <button aria-label="notification"  onclick="resetNotifier()" class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
                   <img src="public/images/assets/notifications.svg" class="h-5 w-5 m-auto text-gray-600" alt="">
                    <span class="absolute inline-flex items-center rounded-md bg-red-700 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-pink-700/10"><?php echo $notifier ?></span>
                </button>
            </div>
        </div>
    </div>

    <!-- notifications bar -->
    <div class="hidden" id="chec-div">
        <div class=" w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700" id="notification">
            <div class="2xl:w-4/12 bg-gray-50 h-screen overflow-y-auto p-8 absolute right-0">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-2xl font-semibold leading-6 text-gray-800">Notifications</p>
                    <button role="button" aria-label="close modal" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 rounded-md cursor-pointer" onclick="notificationHandler()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="#4B5563" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <?php
                    $nqry = mysqli_query($conn, "SELECT * FROM booking ORDER by sdate Desc");
                    $bookings = array();
                    while ($row = mysqli_fetch_assoc($nqry)){
                        $bookings[] = $row;
                    }
                ?>
                <?php foreach ($bookings as $booking){
                    $hour =date('H:i', strtotime($booking['sdate']));
                    ?>
                    <div class="w-full p-3 mt-8 bg-white rounded flex">
                        <div tabindex="0" aria-label="heart icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00059 3.01934C9.56659 1.61334 11.9866 1.66 13.4953 3.17134C15.0033 4.68334 15.0553 7.09133 13.6526 8.662L7.99926 14.3233L2.34726 8.662C0.944589 7.09133 0.997256 4.67934 2.50459 3.17134C4.01459 1.662 6.42992 1.61134 8.00059 3.01934Z" fill="#EF4444" />
                            </svg>
                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700"><?php echo $booking['name']?></span> made a booking for <span class="text-indigo-700"><?php echo $booking['guests']?> guests</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500"><?php echo $hour ?></p>
                        </div>
                    </div>
                <?php }?>
                
                <div class="w-full p-3 mt-8 bg-green-100 rounded flex items-center">
                    <div tabindex="0" aria-label="success icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-green-200 flex flex-shrink-0 items-center justify-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66674 10.1147L12.7947 3.98599L13.7381 4.92866L6.66674 12L2.42407 7.75733L3.36674 6.81466L6.66674 10.1147Z" fill="#047857" />
                        </svg>
                    </div>
                    <div class="pl-3 w-full">
                        <div class="flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none text-green-700">Design sprint completed</p>
                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs leading-3 underline cursor-pointer text-green-700">View</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justiyf-between">
                    <hr class="w-full">
                    <p tabindex="0" class="focus:outline-none text-sm flex flex-shrink-0 leading-normal px-3 py-16 text-gray-500">Thats it for now :)</p>
                    <hr class="w-full">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="public/js/form.js"></script>

<script src="public/js/notification.js"></script>
</html>