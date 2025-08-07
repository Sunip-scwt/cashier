<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Pricing') }}
    </h2>
  </x-slot>
  <div class="container">
    <div>
      <h3>Personal</h3>
      <h5><span>10</span> / Mo</h5>
      <p><span>free</span> weekly meeting</p>
      <p><span>1x</span> monthly call</p>
      <p><span>unlimited</span> messenger chats</p>
      <p><span>free</span> control panel access</p>
      <p><span>1x</span> face to face meeting</p>
      <button type="button">buy now</button>
    </div>
    <div>
      <!-- Sticky "Most Popular" Badge -->
      <div class="head">most popular</div>
      <h3>business</h3>
      <h5><span>15</span> / Mo</h5>
      <p><span>free</span> weekly meeting</p>
      <p><span>1x</span> monthly call</p>
      <p><span>unlimited</span> messenger chats</p>
      <p><span>free</span> control panel access</p>
      <p><span>1x</span> face to face meeting</p>
      <button type="button">buy now</button>
    </div>
    <div>
      <h3>enterprise</h3>
      <h5><span>20</span> / Mo</h5>
      <p><span>free</span> weekly meeting</p>
      <p><span>1x</span> monthly call</p>
      <p><span>unlimited</span> messenger chats</p>
      <p><span>free</span> control panel access</p>
      <p><span>1x</span> face to face meeting</p>
      <button type="button">buy now</button>
    </div>
  </div>
</x-app-layout>