<?php
    $mediaMap = include(resource_path('views/components/media-map.blade.php'));
    $videoData = [
        [
            'type' => 'youtube',
            'source' => 'LXb3EKWsInQ', // YouTube Video ID
            'title' => 'Institution Campus Tour',
            'originalThumbnail' => 'images/video_thumb1.jpg'
        ],
        [
            'type' => 'local',
            'source' => 'videos/sample.mp4',
            'title' => 'Annual Cultural Festival',
            'originalThumbnail' => 'images/video_thumb2.jpg'
        ],
        [
            'type' => 'youtube',
            'source' => 'LXb3EKWsInQ',
            'title' => 'Student Achievements',
            'originalThumbnail' => 'images/video_thumb3.jpg'
        ],
        [
            'type' => 'local',
            'source' => 'videos/sample.mp4',
            'title' => 'Secretary Message',
            'originalThumbnail' => 'images/video_thumb4.jpg'
        ]
    ];

    foreach ($videoData as &$video) {
        $thumbPath = $video['originalThumbnail'];
        $video['thumbnail'] = file_exists(public_path($thumbPath)) ? asset($thumbPath) : ($mediaMap[$thumbPath] ?? 'https://picsum.photos/seed/' . md5($thumbPath) . '/640/360');
    }
    unset($video); // Break the reference
?>
<section
    x-data="{
        videos: <?php echo e(Js::from($videoData)); ?>,
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
    class="py-16 sm:py-24"
>
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-primary tracking-tight font-heading">
                Video Gallery
            </h2>
            <a href="#"
               class="hidden sm:inline-block btn btn-primary text-sm">
                View All Videos
            </a>
        </div>

        <!-- Video Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="(video, index) in videos" :key="index">
                <div @click="openModal(video)"
                     class="group relative cursor-pointer overflow-hidden rounded-lg shadow-md card-glass">
                    <img :src="video.thumbnail" :alt="video.title"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/50 transition-colors duration-300 flex items-center justify-center">
                        <div class="w-16 h-16 bg-primary/80 rounded-full flex items-center justify-center transform scale-75 group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-8 h-8 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path></svg>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/70 to-transparent">
                        <h3 class="text-secondary font-bold font-heading" x-text="video.title"></h3>
                    </div>
                </div>
            </template>
        </div>
        <div class="text-center mt-12 sm:hidden">
            <a href="#" class="btn btn-primary text-sm">
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
            <button @click="closeModal()" class="absolute -top-4 -right-4 z-10 h-10 w-10 bg-secondary rounded-full flex items-center justify-center text-primary hover:text-accent transition-colors duration-300">
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
<?php /**PATH C:\xampp\htdocs\professional-college-website\resources\views/components/video-gallery.blade.php ENDPATH**/ ?>