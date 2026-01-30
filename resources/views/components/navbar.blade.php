<nav x-data="{ open: false }" class="sticky top-0 z-40 bg-green-700 shadow-lg">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-center">

      <div class="hidden md:flex space-x-2 py-3 text-white font-semibold">

        <a href="/" class="px-4 py-2 rounded bg-green-800">Home</a>

        <div class="relative group">
          <button class="px-4 py-2 rounded hover:bg-green-800 flex items-center gap-1">
            About Us
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>

          <div class="absolute left-0 mt-2 w-56 bg-white rounded shadow-lg hidden group-hover:block text-gray-800">
            <a href="/about/vision-mission" class="block px-4 py-2 hover:bg-green-100">Vision & Mission</a>
            <a href="/about/management" class="block px-4 py-2 hover:bg-green-100">Our Management</a>
            <a href="/about/proctorial-board" class="block px-4 py-2 hover:bg-green-100">Proctorial Board</a>
            <a href="/about/officer-incharge" class="block px-4 py-2 hover:bg-green-100">Officer Incharge</a>
            <a href="/about/strategic-plan" class="block px-4 py-2 hover:bg-green-100">Strategic Plan</a>
            <a href="/about/why-usi" class="block px-4 py-2 hover:bg-green-100">Why USI</a>
          </div>
        </div>

        <a href="/academics" class="px-4 py-2 rounded hover:bg-green-800">Academics</a>
        <a href="/admissions" class="px-4 py-2 rounded hover:bg-green-800">Admissions</a>
        <a href="/contact" class="px-4 py-2 rounded hover:bg-green-800">Contact</a>

      </div>

    </div>
  </div>
</nav>