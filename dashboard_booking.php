<?php
    session_start();

    include 'connection.php';



    $sql_get = mysqli_query($conn, "SELECT * FROM booking WHERE status=0");
    $notifier = mysqli_num_rows($sql_get);
    //check if the acoount exists
    $qry = mysqli_query($conn, "SELECT * FROM admin");
    if(mysqli_num_rows($qry) < 1){
        header("Location: admin_signup.php");
    }
    //retrieving the profile pic
    $result =mysqli_query($conn, "SELECT * FROM admin WHERE id= 1");
    if (mysqli_num_rows($result) > 0){
        $row =mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $photo = $row['photo'];    
    }
    $orders =array();
    $oqry =mysqli_query($conn, "SELECT * FROM booking");

    while ($of = mysqli_fetch_assoc($oqry)){
        $orders[] = $of;
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
<body>
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
                <a href="dashboard.php" aria-label="dashboard" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-gray-600 ">
                    <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                        <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                        <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                        <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                    </svg>
                    <span class="-mr-1 font-medium">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard_order.php" class="px-4 py-3 flex items-center space-x-4 rounded-md  text-gray-600  group ">
                    <img src="public/images/assets/deliver.svg" class="h-5 w-5" alt="">
                    <span class="group-hover:text-gray-700">Orders</span>
                </a>
            </li>
            <li>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-white group bg-gradient-to-r from-sky-600 to-cyan-400">
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
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
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
            <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-red-600 hover:text-white">    
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
                <button aria-label="notification" onclick="resetNotifier()" class="w-10 h-10 rounded-xl border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
                   <img src="public/images/assets/notifications.svg" class="h-5 w-5 m-auto text-gray-600" alt="">
                    <span class="absolute inline-flex items-center rounded-md bg-red-700 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-pink-700/10"><?php echo $notifier ?></span>
                </button>
            </div>
        </div>
    </div>
<!--orders table-->
    <div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Id
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Name
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									email
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Date
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									time
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Submission Date
								</th>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									status
								</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach ($orders as $order) { ?>
							<tr>
								<td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['id']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
								<td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['name']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
								<td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['email']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
								<td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['date']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
								<td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['guests']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
                                <td class="px-2  py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['sdate']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
                                <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $order['status']; ?>
                                            </p>
                                        </div>
                                    </div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>


					<div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="public/js/form.js"></script>
</html>