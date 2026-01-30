<!--
  Blade Component: resources/views/components/news-section.blade.php
  Description: A responsive section to display the latest news and announcements.
-->
<section class="bg-white py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight">
                Latest News & Announcements
            </h2>
            <div class="mt-4 w-24 h-1 bg-green-600 mx-auto"></div>
        </div>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($notices as $notice)
                <div class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 flex flex-col transform hover:-translate-y-2">
                    <!-- Card Header -->
                    <div class="p-6 flex justify-between items-start">
                        <span class="text-xs font-semibold px-2 py-1 rounded-full {{ $notice['category_color'] }}">
                            {{ $notice['category'] }}
                        </span>
                        <span class="text-xs text-gray-500">
                            {{ $notice['date'] }}
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 pt-0 flex-grow">
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            <a href="{{ $notice['link'] }}" class="hover:text-green-700 transition-colors duration-300">{{ $notice['title'] }}</a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                            {{ $notice['description'] }}
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="p-6 pt-0 mt-auto">
                        <a href="{{ $notice['link'] }}"
                           class="inline-block px-5 py-2 text-sm font-semibold text-green-700 border-2 border-green-700 rounded-md transition-colors duration-300 group-hover:bg-green-700 group-hover:text-white">
                            Read More
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="#" class="inline-block bg-green-600 text-white font-bold text-sm uppercase rounded-md px-8 py-3 hover:bg-green-700 transition-colors duration-300">
                View All Notices
            </a>
        </div>
    </div>
</section>
