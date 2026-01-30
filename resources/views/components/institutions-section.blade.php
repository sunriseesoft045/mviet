<!--
  Blade Component: resources/views/components/institutions-section.blade.php
  Description: A responsive grid section to display other institutions.
-->
<section class="bg-gray-50 py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight">
                Our Other Institutions
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Explore our prestigious educational institutions
            </p>
        </div>

        <!-- Institutions Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($institutions as $institution)
                <div class="group bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-all duration-300 ease-in-out hover:shadow-xl">
                    <!-- Card Image -->
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" src="{{ asset($institution['image']) }}" alt="{{ $institution['name'] }}">
                    </div>

                    <!-- Card Content -->
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-gray-900">
                            {{ $institution['name'] }}
                        </h3>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $institution['programs'] }}
                        </p>
                        <a href="{{ $institution['link'] }}"
                           class="inline-block mt-6 px-5 py-2 text-sm font-semibold text-green-700 border-2 border-green-700 rounded-md transition-colors duration-300 group-hover:bg-green-700 group-hover:text-white">
                            Visit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
