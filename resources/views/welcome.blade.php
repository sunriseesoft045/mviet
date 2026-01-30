<x-app-layout>
    <x-slot:title>
        Homepage
    </x-slot:title>

    {{-- Hero Slider Component --}}
    <main>
        <x-hero-slider />
    </main>

    {{-- Content Placeholder --}}
    <div class="container mx-auto px-4 py-16 text-center">
        <h2 class="text-3xl font-bold">Welcome to Our College</h2>
        <p class="mt-4 text-lg text-gray-600">Your future starts here. Discover our programs and campus life.</p>
    </div>

    {{-- Institutions Section --}}
    <x-institutions-section />

    {{-- News & Announcements Section --}}
    <x-news-section />

    {{-- Admissions CTA Section --}}
    <x-admissions-cta />

    {{-- Testimonials Section --}}
    <x-testimonials-section />

    {{-- Stats Counter Section --}}
    <x-stats-counter-section />

    {{-- Photo Gallery Section --}}
    <x-photo-gallery />

    {{-- Video Gallery Section --}}
    <x-video-gallery />

</x-app-layout>