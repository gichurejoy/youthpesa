<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>YouthPesa</title>
</head>
<body>
    <div class="flex flex-row bg-gray-50 text-gray-800">
        <!--Left side-->
        <div class="flex flex-col w-64 bg-white h-full border-r">
          <div class="flex items-center justify-center h-14 border-b">
            <div class="font-bold text-xl">Youth Pesa</div>
          </div>

          <div class="overflow-y-auto overflow-x-hidden flex-grow">
              <!--Analytics-->
            <ul class="flex flex-col py-4 space-y-1">
              <li class="px-5">
                <div class="flex flex-row items-center h-8">
                  <div class="text-sm font-light tracking-wide text-gray-500">Analytics</div>
                </div>
              </li>

              <!--Number of registered users-->
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Users</span>
                </a>
              </li>

              <!--Number of jobs in system-->
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Jobs</span>
                </a>
              </li>

              <!--Requests-->
              <li class="px-5">
                <div class="flex flex-row items-center h-8">
                  <div class="text-sm font-light tracking-wide text-gray-500">Requests</div>
                </div>
              </li>
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate text-green-500">Jobs</span>
                </a>
              </li>

              <!--Admin settings-->
              <li class="px-5">
                <div class="flex flex-row items-center h-8">
                  <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                </div>
              </li>
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                </a>
              </li>
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                </a>
              </li>
              <li>
                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                  <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                  </span>
                  <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--Right Side-->
        <div class="flex flex-row w-full text-gray-800">
            <div class="flex flex-col w-64 w-full h-full border-r">
                <div class="flex items-center justify-center h-14 border-b space-x-2">
                    <i class="far fa-user"></i>
                    <p class="font-bold text-xs text-right">John Doe</p>
                </div>

                <!--Job Requests Received-->
                <div class=" flex flex-row overflow-y-auto overflow-x-hidden flex-grow">
                    <!--Request 1-->
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <!--Organisation-->
                            <h2 class="text-lg  font-medium title-font mb-2">Huduma Centre</h2>
                            <!--Position-->
                            <h2  class="text-xm font-medium font-medium mb-2">Position: <span class="text-xm font-extralight">Secretary</span></h2>
                            <!--Description-->
                            <h2  class="text-xm font-medium font-medium mb-2">Job Requirements: <span class="text-xm font-extralight">Should have attained 1, 2 and 3</span></h2>
                            <!--Duration-->
                            <h2  class="text-xm font-medium font-medium mb-2">Duration: <span class="text-xm font-extralight">Permanent</span></h2>
                            <!--Salary-->
                            <h2  class="text-xm font-medium font-medium mb-2">Salary: <span class="text-xm font-extralight">10,000</span></h2>
                            <!--Buttons-->
                            <div class="text-center mt-2 leading-none flex justify-between w-full">
                                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                                    Approve
                                </button>
                                <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                    Decline
                                </button>
                            </div>
                        </div>
                      </div>
                      <!--Request 2-->
                      <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <!--Organisation-->
                            <h2 class="text-lg  font-medium title-font mb-2">Huduma Centre</h2>
                            <!--Position-->
                            <h2  class="text-xm font-medium font-medium mb-2">Position: <span class="text-xm font-extralight">Secretary</span></h2>
                            <!--Description-->
                            <h2  class="text-xm font-medium font-medium mb-2">Job Requirements: <span class="text-xm font-extralight">Should have attained 1, 2 and 3</span></h2>
                            <!--Duration-->
                            <h2  class="text-xm font-medium font-medium mb-2">Duration: <span class="text-xm font-extralight">Permanent</span></h2>
                            <!--Salary-->
                            <h2  class="text-xm font-medium font-medium mb-2">Salary: <span class="text-xm font-extralight">10,000</span></h2>
                            <!--Buttons-->
                            <div class="text-center mt-2 leading-none flex justify-between w-full">
                                <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                                    Approve
                                </button>
                                <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                    Decline
                                </button>
                            </div>
                        </div>
                      </div>
                </div>
                <!--End of cards-->
            </div>
        </div>
    
</body>
</html>