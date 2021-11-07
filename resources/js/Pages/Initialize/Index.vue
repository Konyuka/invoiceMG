<template>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50 ">
  <div class="relative bg-indigo-600 rounded-xl ">
    <!-- Overlapping background -->
    <div aria-hidden="true" class="hidden absolute bg-gray-50 w-full h-6 bottom-0 lg:block"></div>

    <div class="relative max-w-2xl mx-auto pt-16 px-4 text-center sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-xl font-extrabold tracking-tight text-white sm:text-4xl">
        <span class="block lg:inline">Karibu Sana,</span>
        <span class="block lg:inline"> Michael Saiba</span>
      </h1>
      <p class="mt-4 text-xl text-indigo-100">Everything you need, nothing you don't. Pick a plan that best suits your business.</p>
    </div>


    <!-- Cards -->
    <div class="relative mt-8 max-w-2xl mx-auto px-4 pb-8 sm:mt-12 sm:px-6 lg:max-w-7xl lg:px-8 lg:pb-0">
      <!-- Decorative background -->
      <div aria-hidden="true" class="hidden absolute top-4 bottom-6 left-8 right-8 inset-0 bg-indigo-700 rounded-tl-lg rounded-tr-lg lg:block"></div>

      <div class="relative space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3">
        <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
          <div>
            <h3 class="text-white text-sm font-semibold uppercase tracking-wide">Starter</h3>
            <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
              <div class="mt-3 flex items-center">
                <p class="text-white text-4xl font-extrabold tracking-tight">$5</p>
                <div class="ml-4">
                  <p class="text-white text-sm">USD / mo</p>
                  <p class="text-indigo-200 text-sm">Billed yearly ($56)</p>
                </div>
              </div>
              <a href="#" class="ring-2 ring-indigo-700 bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a>
            </div>
          </div>
         
        </div>

        <div class="bg-white ring-2 ring-indigo-700 shadow-md pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
          <div>
            <h3 class="text-indigo-600 text-sm font-semibold uppercase tracking-wide">Scale</h3>
            <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
              <div class="mt-3 flex items-center">
                <p class="text-indigo-600 text-4xl font-extrabold tracking-tight">$19</p>
                <div class="ml-4">
                  <p class="text-gray-700 text-sm">USD / mo</p>
                  <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                </div>
              </div>
              <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</a>
            </div>
          </div>
        </div>

        <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
          <div>
            <h3 class="text-white text-sm font-semibold uppercase tracking-wide">Growth</h3>
            <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
              <div class="mt-3 flex items-center">
                <p class="text-white text-4xl font-extrabold tracking-tight">$12</p>
                <div class="ml-4">
                  <p class="text-white text-sm">USD / mo</p>
                  <p class="text-indigo-200 text-sm">Billed yearly ($140)</p>
                </div>
              </div>
              <a href="#" class="ring-2 ring-indigo-700 bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

</template>

<script>
import Layout from '../Dashboard'

export default {
    name: 'Initialize Index',
    layout: Layout,
}
</script>
