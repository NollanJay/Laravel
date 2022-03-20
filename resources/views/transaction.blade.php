<x-app-layout>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">Transaction Page</h1>
        <div class="flex mb-4">
          <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Account Details</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Withdraw</a>
          <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Deposit</a>
        </div>
        <p class="leading-relaxed mb-4">Account Name: Nollan Jay Galicia</p>
        <p class="leading-relaxed mb-4">Card Number: 2654984561684645848</p>
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Available balance</span>
          <span class="ml-auto text-gray-900">Php 3,000.00</span>
        </div>
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Amount Withdraw</span>
          <span class="ml-auto text-gray-900">Php 500.00</span>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">Confirm Transaction</span>
          <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">withdraw</button>
          <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            
          </button>
        </div>
      </div>
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="/img/atm.png">
    </div>
  </div>
</section>

</x-app-layout>