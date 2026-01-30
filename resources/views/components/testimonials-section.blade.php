<!--
  Blade Component: resources/views/components/testimonials-section.blade.php
  Description: A responsive section to display user testimonials.
-->
<section class="bg-gray-50 py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight">
                What People Say About Us
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Hear from our students, alumni, and partners
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimonials as $testimonial)
                <div class="group bg-white rounded-lg shadow-md p-8 flex flex-col h-full transform hover:-translate-y-2 transition-all duration-300 ease-in-out hover:shadow-xl">
                    <!-- Quotation Icon -->
                    <div>
                        <svg class="w-12 h-12 text-brand-green-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.896 3.456-8.352 9.12-8.352 15.36 0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L25.864 4z" />
                        </svg>
                    </div>

                    <!-- Testimonial Text -->
                    <blockquote class="mt-6 text-gray-600 flex-grow">
                        <p>{{ $testimonial['testimonial'] }}</p>
                    </blockquote>

                    <!-- Author -->
                    <footer class="mt-6 pt-6 border-t border-gray-200">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full object-cover" src="{{ asset($testimonial['avatar']) }}" alt="{{ $testimonial['name'] }}">
                            <div class="ml-4">
                                <div class="text-base font-bold text-gray-900">{{ $testimonial['name'] }}</div>
                                <div class="text-sm text-gray-500">{{ $testimonial['role'] }}</div>
                            </div>
                        </div>
                         <!-- Rating -->
                        <div class="mt-4 flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-5 w-5 {{ $i < $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </footer>
                </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-16">
            <a href="#" class="inline-flex items-center gap-2 bg-brand-green-600 text-white font-bold text-sm uppercase rounded-md px-8 py-3 hover:bg-brand-green-700 transition-colors duration-300 transform hover:scale-105">
                View All Testimonials
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
        </div>
    </div>
</section>
