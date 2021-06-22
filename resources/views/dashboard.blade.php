<x-app-layout>
<div class="bg-coffee align-top" id="main">
<div class="relative">
      <div class="absolute inset-x-0 bottom-0 h-1/2 bg-dark-coffee "></div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 z-0 mt-10">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
          <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="{{ url(asset('img/background.png')) }}">
            <div class="absolute inset-0 bg-gradient-to-r from-coffee to-dark-coffee" style="mix-blend-mode: multiply;"></div>
          </div>
          <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
              <span class="block text-gray-200">Take control of your</span>
              <span class="block text-coffee">Resources</span>
            </h1>
            <p class="font-bold mt-6 max-w-lg mx-auto text-center text-2xl text-white sm:max-w-3xl bg-dark-coffee opacity-75">
              Zeitplans.com was designed and created by artisans who realized the need to manage resources at membership based cooperatives and guilds. We understood the challenges from both the artists stand point as well as the management team trying to keep things running smoothly. Being able to reserve a kiln or spray booth so you have enough inventory for an upcoming show or sale. Management being able to account for the ussage of the resources and receive accurate payment so that they can continue to operate. As we relized number of organizations where still using pen and paper or a spreadsheet located on a drive somewhere, providing an easy to use system that is available 24/7 from anywhere was seen as a huge benefit.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
              <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 opacity-70 hover:text-white bg-white hover:bg-dark-coffee sm:px-8">
                  Get started
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 opacity-70 hover:text-white bg-coffee hover:bg-dark-coffee sm:px-8">
                  Live demo
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-blue-gray h-10 w-auto"></div>
<!-- Features Section -->
<section id="features">
    <!-- Feature Section -->
    <div class=" bg-gradient-to-r from-coffee to-dark-coffee">
      <div class="max-w-4xl mx-auto px-4 py-5 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
          Features 45345345345
        </h2>
       
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/calendar -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" />
                  </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Resource Scheduling</h3>
              <p class="mt-2 text-base text-gray-900">
                The ability to add, delete and update resources that you have available for your memebers to schedule. The calendar has many views (Monthly, Weekly, Daily and as a list) so you can expand or narrow your search as desired. You can upload images of your resources as well as change the status in case one is down for maintenance. The ability to change the color associated with each resource makes it easier to organize and view in the calendar.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/users -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg text-gray-900 font-bold">Team Member Accounts</h3>
              <p class="mt-2 text-base text-gray-900">
                You have full administrator privilages to add, edit and delete your users as needed. Members have the ability to manage their profiles giving details about themselves and uploading an avatar or a portrait of themselves. 
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/clipboard list -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Wait lists</h3>
              <p class="mt-2 text-base text-gray-900">
                Wait lists allow users to signup and be notified in the instance a resource that had already been scheduled by another user becomes availble during the time the wanted to used it. This increases the utilization of your resources during times of high demand and keeps your memebers happy.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/at symbol -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16C14.2091 16 16 14.2091 16 12ZM16 12V13.5C16 14.8807 17.1193 16 18.5 16C19.8807 16 21 14.8807 21 13.5V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21M16.5 19.7942C15.0801 20.614 13.5296 21.0029 12 21.0015" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Custom Sub-domain</h3>
              <p class="mt-2 text-base text-gray-900">
                When you sign-up with Zeitplans you will be asked to choose a sub-domain name (BPG.Zeitplans.com), where the BPG could represent the initials of your orgainzation or a name. This ensures your users they are on your site and your data is separate from other customers using Zeitplans.com.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/collection -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Logs</h3>
              <p class="mt-2 text-base text-gray-900">
                Having the ability to add logs to each resource is available for ussage and maintance. The ussage logs are helpful for say a kiln firing that requires a number of steps of time to have a succesful firing. The maintenance logs are used to record, just as the name says maintenance of each resource.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M11 3.05493C6.50005 3.55238 3 7.36745 3 12C3 16.9706 7.02944 21 12 21C16.6326 21 20.4476 17.5 20.9451 13H11V3.05493Z" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.4878 9H15V3.5123C17.5572 4.41613 19.5839 6.44285 20.4878 9Z" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Reports</h3>
              <p class="mt-2 text-base text-gray-900">
                Basic reports on resource scheduling and member ussage are availble with more detailed reports being developed every week.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/chat -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M8 12H8.01M12 12H12.01M16 12H16.01M21 12C21 16.4183 16.9706 20 12 20C10.4607 20 9.01172 19.6565 7.74467 19.0511L3 20L4.39499 16.28C3.51156 15.0423 3 13.5743 3 12C3 7.58172 7.02944 4 12 4C16.9706 4 21 7.58172 21 12Z" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">Internal Chat</h3>
              <p class="mt-2 text-base text-gray-900">
                We understand there are many channels to communicate in this day and age but we added an internal chat system so if you are online looking to schedule a resource and you see another member who is online as well you can connect straight away.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-30">
                <!-- Heroicon name: outline/user-group -->
                <svg class="h-6 w-6 text-dark-coffee" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="dark-coffee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-bold text-gray-900">System Administration</h3>
              <p class="mt-2 text-base text-gray-900">
                The system administrator has the ability to control your whole environment. 
                <ul class="list-disc list-inside text-gray-900">
                  <li>Add, update and delete resources</li> 
                  <li>Manage member accounts</li>
                  <li>Manage the Class Postings</li>
                  <li>Access reports and logs</li>
                </ul>
              </p>
            </div>
            
          </div>
          <div class="mt-16">
              <h3 class="text-lg font-bold text-gray-900 mb-4 mx-6">Sign Up Today</h3>
              <a href="#" class="flex w-1/2 items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 opacity-60 hover:text-white bg-white hover:bg-dark-coffee sm:px-8">
                  Get started
                </a>
            </div>
        </div>
      </div>
    </div>

<!--  FAQ Section -->
<section id="FAQ">
<div class="relative bg-gray-900">
  <div class="h-60 absolute bottom-0 xl:inset-0 xl:h-full xl:w-full">
    <div class="h-full w-full xl:grid xl:grid-cols-2">
      <div class="h-full xl:relative xl:col-start-2">
        <img class="h-full w-full object-cover opacity-30 xl:absolute xl:inset-0" src="{{ url(asset('img/workspace.jpg')) }}">
          <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
      </div>
    </div>
  </div>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8 ">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
          <p class="mt-3 text-3xl font-extrabold text-white">Frequently Asked Questions</p>
          <p class="mt-5 text-lg text-gray-300">If you do not find the answers to your questions listed below please feel free to contact us.</p>
          <div class="mt-10 flex">
    
          <div class="col-span-full" x-data="{ open: false }">
              <div>
                <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                Which plan is right for my organization?
                </div>
                <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000">
                  We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                </div>
              </div>
          </div> 
        </div>


    </div>
  </div>
</div>

<!--  Pricing Section -->
<section id="pricing">
    <!-- Pricing Section -->
<div class="bg-white">
  <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:flex-col sm:align-center">
      <h1 class="text-5xl font-extrabold text-gray-900 sm:text-center">Pricing Plans</h1>
      <p class="mt-5 text-xl text-gray-500 sm:text-center">Signup now and get your orginazation on track and managed in one location</p>
    </div>
    <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
    <!-- Start of Bronze Pricing Plan box -->
      <div class="bg-coffee border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
      
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Bronze</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(1-20 users @ .95&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-blue-gray">$10</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <a href="#" class="inline-flex mt-8 w-full px-4 py-2 border border-transparent font-bold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-blue-gray to-gray-900 hover:from-gray-900 hover:to-blue-gray">
                    Get started
          </a>
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="pt-6 pb-8 px-6 bg-coffee">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
    <!-- End of Bronze Pricing Plan box -->
    <!-- Start of Silver Pricing Plan Box -->
    <div class="bg-coffee border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Silver</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(21-40 users @ .85&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-blue-gray">$15</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <a href="#" class="inline-flex mt-8 w-full px-4 py-2 border border-transparent font-medium rounded-md shadow-sm text-white text-center bg-gradient-to-r from-blue-gray to-gray-900 hover:from-gray-900 hover:to-blue-gray">
                    Get started
          </a>
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-coffee pt-6 pb-8 px-6">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- End of Silver Pricing box -->
      <!-- Start of Gold Pricing Plan Box -->
    <div class="bg-coffee border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Gold</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(41-60 users @ .80&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-blue-gray">$20</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
    
          <a href="" class="inline-flex mt-8 w-full px-4 py-2 border border-transparent font-medium rounded-md shadow-sm text-white text-center bg-gradient-to-r from-blue-gray to-gray-900 hover:from-gray-900 hover:to-blue-gray">
                    Get started
          </a>
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-coffee pt-6 pb-8 px-6">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- end of Gold pricing box -->
       <!-- Start of Platinum Pricing Plan Box -->
<section id="Pricing">
    <div class="bg-coffee border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Platinum</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(61-80 users @ .75&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-blue-gray">$25</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <a href="#" class="inline-flex mt-8 w-full px-4 py-2 border border-transparent font-medium rounded-md shadow-sm text-white text-center bg-gradient-to-r from-blue-gray to-gray-900 hover:from-gray-900 hover:to-blue-gray">
                    Get started
          </a>
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-coffee pt-6 pb-8 px-6">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-blue-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- end of Platinum pricing box -->
  </div>
</div>
</div>
</section>
<!--  Contact Section -->
<section id="contact">
    <!-- Contact Section -->
<div class="relative bg-blue-gray">
    <div class="h-80 absolute bottom-0 xl:inset-0 xl:h-full xl:w-full ">
              <!-- <div class="max-w-md mx-screen bg-white overflow-hidden md:max-w-2xl"> -->
        <div class="h-full w-full xl:grid xl:grid-cols-2 ">
                <!-- <div class="md:flex"> -->
            <div class="xl:relative h-full xl:col-start-1 xl:flex-shrink-0">
                    <!-- <div class="md:flex-shrink-0"> -->
                <img class="opacity-75 object-top h-full w-full xm:opacity-0 md:object-scale-down  xl:inset-y-0 left-0 align-top" src="{{ url(asset('img/office.jpg')) }}"  alt="">
                    <!-- <img class="h-full w-1/2 object-cover md:object-scale-down md:w-50" src="{{ url(asset('img/office.jpg')) }}"  alt=""> -->
                    <!-- <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-indigo-600 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div> -->
                <div aria-hidden="true" class="absolute right-0 top-0 h-full bg-gradient-to-b from-blue-gray xl:inset-y-0 xl:right-0 xl:h-full xl:w-1/5 xl:bg-gradient-to-l"></div>
            </div>
        
     
  
                  <!-- <div class="h-full w-full xl:grid xl:grid-cols-2 p-6 bg-indigo-100" > -->
            <div class="p-8 bg-blue-gray h-full w-full xl:grid ">

                    <!-- <div class="h-full xl:relative xl:col-start-2 p-8 bg-indigo-300"> -->
                <div bg-blue-gray >
                    <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mt-4 mb-4">
                    <span class="block bg-gradient-to-r from-gray-900 to-blue-gray bg-clip-text text-transparent mb-3">Still have questions?</span>
                    <span class="block bg-gradient-to-r from-white to-blue-gray bg-clip-text text-transparent">Contact us to get your questions answered.</span>
                    </h2>
                    <p  class="block bg-gradient-to-r from-white to-blue-gray bg-clip-text text-transparent mt-4 text-lg sm:mt-3 mb-6">
                    We’d love to hear from you! <br>Send us a message using this form, or email us.
                    </p>

                    <form action="#" method="POST" class="grid grid-cols-1 gap-y-4">
                        <div>
                            <label for="full_name" class="sr-only">Full name</label>
                            <input type="text" name="full_name" id="full_name" autocomplete="name" class="block w-full py-3 px-4 font-medium text-gray-900 focus:ring-gray-900 focus:border-gray-900 rounded-md" placeholder="Full name">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 font-medium text-gray-900 focus:ring-gray-900 focus:border-gray-900 rounded-md" placeholder="Email">
                        </div>
                        <div>
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 font-medium text-gray-900 focus:ring-gray-900 focus:border-gray-900 rounded-md" placeholder="Phone">
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 font-medium text-gray-900 focus:ring-gray-900 focus:border-gray-900 rounded-md" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-base font-medium rounded-md bg-opacity-60 text-gray-800 bg-white hover:bg-coffee focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dark-coffee">
                            Submit
                            </button>
                            
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
</div>
  
</section>
<section id="footer">
<div>
<h1> Footer here</h1>
</div>
</section>

</x-app-layout>
