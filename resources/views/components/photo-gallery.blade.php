<!--
  Blade Component: resources/views/components/photo-gallery.blade.php
  Description: A responsive photo gallery with an Alpine.js lightbox modal.
-->
<section
    x-data="{
        images: [
            'images/gallery/gallery1.jpg', 'images/gallery/gallery2.jpg',
            'images/gallery/gallery3.jpg', 'images/gallery/gallery4.jpg',
            'images/gallery/gallery5.jpg', 'images/gallery/gallery6.jpg',
            'images/gallery/gallery7.jpg', 'images/gallery/gallery8.jpg'
        ],
        isModalOpen: false,
        modalImage: '',
        openModal(image) {
            this.isModalOpen = true;
            this.modalImage = image;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.isModalOpen = false;
            document.body.style.overflow = 'auto';
        }
    }"
    class="bg-gray-50 py-16 sm:py-24"
>
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight">
                Photo Gallery
            </h2>
            <a href="#"
               class="hidden sm:inline-block px-5 py-2 text-sm font-semibold text-brand-green-700 border-2 border-brand-green-700 rounded-md transition-colors duration-300 hover:bg-brand-green-700 hover:text-white">
                View All Photos
            </a>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <template x-for="(image, index) in images" :key="index">
                <div @click="openModal(image)"
                     class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md aspect-w-1 aspect-h-1">
                    <img :src="image" alt="Gallery Image"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300"></div>
                </div>
            </template>
        </div>
         <div class="text-center mt-12 sm:hidden">
            <a href="#" class="inline-block px-5 py-2 text-sm font-semibold text-brand-green-700 border-2 border-brand-green-700 rounded-md transition-colors duration-300 hover:bg-brand-green-700 hover:text-white">
                View All Photos
            </a>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div
        x-show="isModalOpen"
        @keydown.escape.window="closeModal()"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 p-4"
        style="display: none;"
    >
        <div @click.self="closeModal()" class="absolute inset-0"></div>
        <div
            x-show="isModalOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="relative max-w-4xl max-h-full"
        >
            <img :src="modalImage" alt="Full screen gallery image" class="rounded-lg shadow-2xl max-w-full max-h-[90vh]">
            <button @click="closeModal()" class="absolute -top-4 -right-4 h-10 w-10 bg-white rounded-full flex items-center justify-center text-gray-800 hover:text-red-600 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</section>
