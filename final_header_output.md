### 1. Full fixed `header.blade.php`
```html
<header class="relative w-full z-50">
  <div class="bg-gradient-to-r from-green-50 to-green-100 border-b border-green-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">

      <div class="flex items-center justify-between">

        <!-- Left Logo -->
        <div class="hidden lg:flex">
          <img src="{{ asset('images/logo.png') }}"
               class="h-16 w-16 rounded-full bg-white p-1 shadow"
               alt="College Logo">
        </div>

        <!-- Center Text -->
        <div class="text-center flex-1 px-4">
          <h1 class="text-2xl md:text-4xl font-extrabold uppercase tracking-wider text-green-800">
            MADHU VACHASPATI
          </h1>
          <p class="text-sm md:text-xl font-semibold text-green-700">
            INSTITUTE OF ENGINEERING & TECHNOLOGY
          </p>
          <p class="text-xs text-green-600 mt-1">
            Affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow
            <br class="hidden sm:block">
            Approved by AICTE, New Delhi
          </p>
        </div>

        <!-- Right Logo -->
        <div class="hidden lg:flex">
          <img src="{{ asset('images/logo.png') }}"
               class="h-16 w-16 rounded-full bg-white p-1 shadow"
               alt="College Logo">
        </div>

      </div>

      <!-- Mobile Logo -->
      <div class="lg:hidden flex justify-center mt-3">
        <img src="{{ asset('images/logo.png') }}"
             class="h-14 w-14 rounded-full bg-white p-1 shadow"
             alt="College Logo">
      </div>

    </div>
  </div>
</header>
```

---

### 2. Full fixed `navbar.blade.php`
```html
<!--
  Blade Component: resources/views/components/navbar.blade.php
  Description: Main site navigation with 'About Us' dropdown powered by Alpine.js.
-->
<nav x-data="{ mobileMenuOpen: false, aboutDropdownOpen: false }" class="sticky top-0 z-40 bg-green-700 shadow-lg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Desktop Menu -->
            <div class="hidden lg:flex flex-grow items-center justify-center space-x-8">
                <a href="/" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('/') ? 'bg-green-800' : '' }}">Home</a>
                <!-- About Us Dropdown (Desktop) -->
                <div class="relative" @mouseenter="aboutDropdownOpen = true" @mouseleave="aboutDropdownOpen = false">
                    <button @click.prevent class="flex items-center text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">
                        <span>About Us</span>
                        <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="aboutDropdownOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform -translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-2"
                         @keydown.escape.window="aboutDropdownOpen = false"
                         class="absolute z-20 mt-2 w-48 bg-white rounded-md shadow-lg"
                         style="display: none;">
                        <a href="{{ route('about.vision-mission') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.vision-mission') ? 'text-green-600 font-bold' : '' }}">Vision & Mission</a>
                        <a href="{{ route('about.management') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.management') ? 'text-green-600 font-bold' : '' }}">Our Management</a>
                        <a href="{{ route('about.proctorial-board') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.proctorial-board') ? 'text-green-600 font-bold' : '' }}">Proctorial Board</a>
                        <a href="{{ route('about.officer-incharge') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.officer-incharge') ? 'text-green-600 font-bold' : '' }}">Officer Incharge</a>
                        <a href="{{ route('about.strategic-plan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.strategic-plan') ? 'text-green-600 font-bold' : '' }}">Strategic Plan</a>
                        <a href="{{ route('about.why-usi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 {{ request()->routeIs('about.why-usi') ? 'text-green-600 font-bold' : '' }}">Why USI</a>
                    </div>
                </div>
                 <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Academics</a>
                 <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Admissions</a>
                 <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex-grow flex items-center justify-end">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="lg:hidden bg-green-700"
        id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
             <a href="/" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:bg-green-600 hover:border-green-300 {{ request()->is('/') ? 'bg-green-800' : '' }}">Home</a>
                <!-- About Us Accordion (Mobile) -->
                <div>
                    <button @click="aboutDropdownOpen = !aboutDropdownOpen" class="w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:bg-green-600 hover:border-green-300">
                        <span>About Us</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': aboutDropdownOpen }" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="aboutDropdownOpen" class="pl-8 pr-4 py-2 space-y-1">
                         <a href="{{ route('about.vision-mission') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.vision-mission') ? 'text-green-200 font-bold' : '' }}">Vision & Mission</a>
                         <a href="{{ route('about.management') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.management') ? 'text-green-200 font-bold' : '' }}">Our Management</a>
                         <a href="{{ route('about.proctorial-board') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.proctorial-board') ? 'text-green-200 font-bold' : '' }}">Proctorial Board</a>
                         <a href="{{ route('about.officer-incharge') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.officer-incharge') ? 'text-green-200 font-bold' : '' }}">Officer Incharge</a>
                         <a href="{{ route('about.strategic-plan') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.strategic-plan') ? 'text-green-200 font-bold' : '' }}">Strategic Plan</a>
                         <a href="{{ route('about.why-usi') }}" class="block py-2 text-sm text-green-100 {{ request()->routeIs('about.why-usi') ? 'text-green-200 font-bold' : '' }}">Why USI</a>
                    </div>
                </div>
                 <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:bg-green-600 hover:border-green-300">Academics</a>
                 <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:bg-green-600 hover:border-green-300">Admissions</a>
                 <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:bg-green-600 hover:border-green-300">Contact</a>
            </div>
        </div>
</nav>