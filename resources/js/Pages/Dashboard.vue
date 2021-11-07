<template>

<div>
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div class="relative flex-1 flex flex-col max-w-xs w-full bg-indigo-700">
      <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
        </div>
        <nav class="mt-5 px-2 space-y-1">
          <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
          <a href="#" class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/home -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
          </a>

          <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Team
          </a>

          <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            Projects
          </a>

          <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/calendar -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Calendar
          </a>

          <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/inbox -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            Documents
          </a>

          <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/chart-bar -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            Reports
          </a>
        </nav>
      </div>
      <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
        <a href="#" class="flex-shrink-0 group block">
          <div class="flex items-center">
            <div>
              <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <p class="text-base font-medium text-white">
                Tom Cook
              </p>
              <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                View profile
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex-1 flex flex-col min-h-0 bg-gradient-to-l from-teal-500 to-cyan-600">
      <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">

        <div class="flex items-center flex-shrink-0 px-4 justify-around">
          <a :href="route('profile')" class="flex-shrink-0 w group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  Tom Cook
                </p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                  View profile
                </p>
              </div>
            </div>
          </a>
          <div>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 8v-4l8 8-8 8v-4h-5v-8h5zm-7 0h-2v8h2v-8zm-4.014 0h-1.986v8h1.986v-8zm-3.986 0h-1v8h1v-8z"/></svg>
            </span>
          </div>
        </div>

        <nav class="mt-5 flex-1 px-2 space-y-1 border-t p-5">

          <a href="#" class=" hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.011 6.215c-1.711-.009-3.86.918-5.499 2.557-.625.625-1.176 1.355-1.601 2.174 1.479-1.119 3.057-1.47 4.903-.434.544-1.437 1.27-2.9 2.197-4.297zm9.785 9.773c-1.516.991-3.007 1.706-4.297 2.21 1.036 1.848.686 3.424-.434 4.902.819-.424 1.549-.975 2.175-1.602 1.644-1.642 2.572-3.796 2.556-5.51zm6.152-15.946c-.412-.028-.816-.042-1.213-.042-8.602 0-13.498 6.558-15.28 11.833l4.728 4.729c5.428-1.946 11.817-6.661 11.817-15.172v-.057c-.002-.42-.019-.851-.052-1.291zm-9.888 9.91c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0 .391 1.023 0 1.414-1.024.39-1.414 0zm2.828-2.828c-.781-.78-.781-2.047 0-2.828s2.048-.781 2.828 0c.781.781.781 2.047 0 2.828s-2.047.781-2.828 0zm-6.534 10.438c-1.492 3.81-5.803 6.208-10.354 6.438.219-4.289 2.657-8.676 6.64-10.153l.805.806c-4.331 2.755-4.653 5.346-4.665 6.575 1.268-.015 4.054-.344 6.778-4.464l.796.798z"/></svg>
            Initialize
          </a>

          <a href="#" class=" hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <!-- Heroicon name: outline/home -->
            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c-6.627 0-12 5.373-12 12 0 2.583.575 5.344 2.599 8h18.753c2.023-2.656 2.648-5.417 2.648-8 0-6.627-5.373-12-12-12zm-.758 2.14c.256-.019.51-.029.758-.029s.502.01.758.029v3.115c-.252-.028-.506-.042-.758-.042s-.506.014-.758.042v-3.115zm-5.764 7.978l-2.88-1.193c.158-.479.352-.948.582-1.399l2.879 1.192c-.247.444-.441.913-.581 1.4zm1.217-2.351l-2.203-2.203c.329-.383.688-.743 1.071-1.071l2.203 2.203c-.395.316-.754.675-1.071 1.071zm.793-4.569c.449-.231.919-.428 1.397-.586l1.205 2.874c-.486.142-.954.339-1.397.586l-1.205-2.874zm1.407 13.802c.019-1.151.658-2.15 1.603-2.672l1.502-7.041 1.502 7.041c.943.522 1.584 1.521 1.602 2.672h-6.209zm4.989-11.522l1.193-2.878c.479.156.948.352 1.4.581l-1.193 2.878c-.444-.246-.914-.44-1.4-.581zm2.349 1.218l2.203-2.203c.383.329.742.688 1.071 1.071l-2.203 2.203c-.316-.396-.675-.755-1.071-1.071zm2.259 3.32c-.147-.483-.35-.95-.603-1.39l2.86-1.238c.235.445.437.912.602 1.39l-2.859 1.238z"/></svg>
            Dashboard
          </a>

          <a href="#" class=" hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <svg class="mr-2 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.568.075c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702zm7.432 10.925v13h-20v-24h8.409c4.857 0 3.335 8 3.335 8 3.009-.745 8.256-.419 8.256 3zm-16 5h5v-4h-5v4zm12 2h-12v1h12v-1zm0-3h-5v1h5v-1zm0-3h-5v1h5v-1z"/></svg>
            Invoice
          </a>

          <a href="#" class=" hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <svg class="mr-2 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm-19 5.78c0-.431.349-.78.78-.78h.428v1.125h-1.208v-.345zm0 .764h1.208v.968h-1.208v-.968zm0 1.388h1.208v1.068h-.428c-.431 0-.78-.349-.78-.78v-.288zm3 5.068h-3v-1h3v1zm1-4.78c0 .431-.349.78-.78.78h-.429v-1.068h1.209v.288zm0-.708h-1.209v-.968h1.209v.968zm0-1.387h-1.629v2.875h-.743v-4h1.592c.431 0 .78.349.78.78v.345zm4 6.875h-3v-1h3v1zm1-6.5c0-1.381 1.119-2.5 2.5-2.5.484 0 .937.138 1.32.377-.531.552-.857 1.3-.857 2.123 0 .824.327 1.571.857 2.123-.383.239-.836.377-1.32.377-1.381 0-2.5-1.119-2.5-2.5zm4 6.5h-3v-1h3v1zm5 0h-3v-1h3v1zm-2.5-4c-1.38 0-2.5-1.119-2.5-2.5s1.12-2.5 2.5-2.5c1.381 0 2.5 1.119 2.5 2.5s-1.119 2.5-2.5 2.5z"/></svg>
            Payments
          </a>

          <a href="#" class="group hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <svg class="mr-2 group-hover:text-white" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 24h-23v-16h6v-8h11v12h6v12zm-12-5h-3v4h3v-4zm4 0h-3v4h3v-4zm6 0h-2v4h2v-4zm-17 0h-2v4h2v-4zm11-5h-2v2h2v-2zm-5 0h-2v2h2v-2zm11 0h-2v2h2v-2zm-17 0h-2v2h2v-2zm11-4h-2v2h2v-2zm-5 0h-2v2h2v-2zm-6 0h-2v2h2v-2zm11-4h-2v2h2v-2zm-5 0h-2v2h2v-2zm5-4h-2v2h2v-2zm-5 0h-2v2h2v-2z"/></svg>
            Clients
          </a>

          <a href="#" class="hover:bg-gradient-to-l from-teal-600 to-cyan-700 text-white text-lg tracking-tight font-bold group flex items-center px-2 py-2 rounded-md">
            <svg class="mr-2 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 2h-14c-1.104 0-2 .896-2 2v4h16v3.5c0 .276-.224.5-.5.5h-1.5v2h2c1.104 0 2-.896 2-2v-8c0-1.104-.896-2-2-2zm0 3h-14v-.5c0-.276.224-.5.5-.5h13c.276 0 .5.224.5.5v.5zm-6 5h-14c-1.104 0-2 .896-2 2v8c0 1.104.896 2 2 2h14c1.104 0 2-.896 2-2v-8c0-1.104-.896-2-2-2zm-7.844 8.333h-.997c-.092 0-.164-.077-.159-.168.017-.288.183-1.231.76-4.939.02-.131.13-.226.259-.226h1.836c.982 0 1.708.577 1.508 1.61-.206 1.075-.862 1.598-2.006 1.598h-.565c-.232.001-.317.088-.346.295l-.29 1.83zm3.802-2.486c-.212 1.105-.937 1.486-1.862 1.486h-.143c-.113 0-.209.083-.227.197l-.201 1.273c-.018.114-.114.197-.227.197h-.684c-.097 0-.172-.087-.157-.183l.346-2.22.016-.014h.539c1.309 0 2.127-.654 2.368-1.892.203.204.274.469.274.749 0 .134-.016.271-.042.407z"/></svg>
            Billing
          </a>



        </nav>
      </div>

      <div class="flex-shrink-0 flex border-t border-indigo-800 p-4 justify-between">

             <div>
               <p class="text-white font-bold text-md">Tooggle to Logout</p>
             </div>

        <!-- Toggled switch -->
            <div class="flex justify-center items-center">
                <span class="">
                <!-- <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg> -->
                <i class="far fa-sun"></i>
                </span>
                <!-- Switch Container -->
                <div
                class="
                    w-14
                    h-7
                    flex
                    items-center
                    bg-gray-300
                    rounded-full
                    mx-3
                    px-1
                    bg-gradient-to-l from-teal-600 to-cyan-700
                "
                @click="handleToggleActive"
                >
                <!-- Switch -->
                <div
                    class="
                    bg-white
                    w-5
                    h-5
                    rounded-full
                    shadow-md
                    transform
                    translate-x-7
                    "
                ></div>
                </div>
                <span class="">
                <i class="far fa-moon"></i>
                </span>
            </div>

            <div v-if="logoff" class="flex justify-center items-center">
                <span class="">
                <i class="far fa-sun text-gray-400"></i>
                </span>
                <!-- Switch Container -->
                <div
                :class="{ 'bg-cyan-700': toggleActive}"
                class="w-14 h-7 flex items-center bg-gray-300 rounded-full mx-3 px-1"
                @click="handleToggleActive"
                >
                <!-- Switch -->
                <div
                    class="bg-white w-5 h-5 rounded-full shadow-md transform"
                    :class="{ 'translate-x-7': toggleActive}"
                ></div>
                </div>
                <span class="">
                <i class="far fa-moon text-gray-400"></i>
                </span>
            </div>

      </div>


    </div>
  </div>
  <div class="md:pl-64 flex flex-col flex-1">
    <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
      <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <main class="flex-1">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>
</div>


</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        components: {

        },

    })
</script>

<style scoped>

</style>
