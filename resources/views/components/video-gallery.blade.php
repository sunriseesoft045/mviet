<!--
  Blade Component: resources/views/components/video-gallery.blade.php
  Description: A responsive video gallery with a universal modal for YouTube and local files.
-->
<section
    x-data="{
        videos: [
            {
                type: 'youtube',
                source: 'LXb3EKWsInQ', // YouTube Video ID
                title: 'Institution Campus Tour',
                thumbnail: 'images/gallery/gallery1.jpg'
            },
            {
                type: 'local',
                source: 'videos/sample.mp4',
                title: 'Annual Cultural Festival',
                thumbnail: 'images/gallery/gallery2.jpg'
            },
            {
                type: 'youtube',
                source: 'LXb3EKWsInQ',
                title: 'Student Achievements',
                thumbnail: 'images/gallery/gallery3.jpg'
            },
            {
                type: 'local',
                source: 'videos/sample.mp4',
                title: 'Secretary Message',
                thumbnail: 'images/gallery/gallery4.jpg'
            }
        ],
        isModalOpen: false,
        currentVideo: null,
        openModal(video) {
            this.isModalOpen = true;
            this.currentVideo = video;
            document.body.style.overflow = 'hidden';
        },
        closeModal() {
            this.isModalOpen = false;
            // Stop video playback by resetting the source
            if (this.$refs.youtubePlayer) {
                this.$refs.youtubePlayer.src = this.$refs.youtubePlayer.src;
            }
            if (this.$refs.localPlayer) {
                this.$refs.localPlayer.pause();
            }
            this.currentVideo = null;
            document.body.style.overflow = 'auto';
        }
    }"
    class="bg-white py-16 sm:py-24"
>
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight">
                Video Gallery
            </h2>
            <a href="#"
               class="hidden sm:inline-block px-5 py-2 text-sm font-semibold text-brand-green-700 border-2 border-brand-green-700 rounded-md transition-colors duration-300 hover:bg-brand-green-700 hover:text-white">
                View All Videos
            </a>
        </div>

        <!-- Video Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="(video, index) in videos" :key="index">
                <div @click="openModal(video)"
                     class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md">
                    <img :src="video.thumbnail" :alt="video.title"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/50 transition-colors duration-300 flex items-center justify-center">
                        <div class="w-16 h-16 bg-brand-green-500/80 rounded-full flex items-center justify-center transform scale-75 group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path></svg>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/70 to-transparent">
                        <h3 class="text-white font-bold" x-text="video.title"></h3>
                    </div>
                </div>
            </template>
        </div>
        <div class="text-center mt-12 sm:hidden">
            <a href="#" class="inline-block px-5 py-2 text-sm font-semibold text-brand-green-700 border-2 border-brand-green-700 rounded-md transition-colors duration-300 hover:bg-brand-green-700 hover:text-white">
                View All Videos
            </a>
        </div>
    </div>

    <!-- Video Modal -->
    <div
        x-show="isModalOpen"
        @keydown.escape.window="closeModal()"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80 p-4"
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
            class="relative w-full max-w-4xl bg-black rounded-lg shadow-2xl aspect-video"
        >
            <button @click="closeModal()" class="absolute -top-4 -right-4 z-10 h-10 w-10 bg-white rounded-full flex items-center justify-center text-gray-800 hover:text-red-600 transition-colors duration-300">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>

            <template x-if="currentVideo && currentVideo.type === 'youtube'">
                <iframe x-ref="youtubePlayer" :src="'https://www.youtube.com/embed/' + currentVideo.source + '?autoplay=1'"
                        class="absolute top-0 left-0 w-full h-full"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </template>

            <template x-if="currentVideo && currentVideo.type === 'local'">
                <video x-ref="localPlayer" :src="currentVideo.source"
                       class="absolute top-0 left-0 w-full h-full"
                       controls
                       autoplay>
                </video>
            </template>
        </div>
    </div>
</section>
