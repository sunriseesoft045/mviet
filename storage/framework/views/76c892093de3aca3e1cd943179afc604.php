<?php
    $mediaMap = include(resource_path('views/components/media-map.blade.php'));
    $heroSlides = [
        [
            'originalImage' => 'images/hero1.jpg',
            'title' => 'STATE-OF-THE-ART FACILITIES',
            'subtitle' => 'Modern labs equipped with the latest technology',
            'button_text' => 'View Facilities',
            'button_link' => '#',
            'button_style' => 'btn btn-primary'
        ],
        [
            'originalImage' => 'images/hero2.jpg',
            'title' => 'ADMISSIONS OPEN 2025',
            'subtitle' => 'Join a legacy of excellence and innovation',
            'button_text' => 'Apply Now',
            'button_link' => '#',
            'button_style' => 'btn btn-primary'
        ],
        [
            'originalImage' => 'images/hero3.jpg',
            'title' => 'CAMPUS LIFE & STUDENT SUCCESS',
            'subtitle' => 'Learning beyond classrooms',
            'button_text' => 'Explore Gallery',
            'button_link' => '#',
            'button_style' => 'btn btn-accent'
        ]
    ];

    foreach ($heroSlides as &$slide) {
        $imgPath = $slide['originalImage'];
        $slide['image'] = file_exists(public_path($imgPath)) ? asset($imgPath) : ($mediaMap[$imgPath] ?? 'https://via.placeholder.com/1920x1080?text=Hero+Image');
    }
    unset($slide); // Break the reference
?>
<div
    x-data="{
        slides: <?php echo e(Js::from($heroSlides)); ?>,
        activeSlide: 0,
        autoplay: null,
        startX: 0,

        startAutoplay() {
            this.autoplay = setInterval(() => {
                this.next()
            }, 6000)
        },

        stopAutoplay() {
            clearInterval(this.autoplay)
        },

        next() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length
        },

        prev() {
            this.activeSlide =
                this.activeSlide === 0
                    ? this.slides.length - 1
                    : this.activeSlide - 1
        },

        goTo(index) {
            this.activeSlide = index
        },

        touchStart(e) {
            this.startX = e.touches[0].clientX
        },

        touchEnd(e) {
            let endX = e.changedTouches[0].clientX
            if (this.startX - endX > 50) this.next()
            if (endX - this.startX > 50) this.prev()
        }
    }"
    x-init="startAutoplay()"
    @mouseenter="stopAutoplay()"
    @mouseleave="startAutoplay()"
    @touchstart="touchStart($event)"
    @touchend="touchEnd($event)"
    class="relative w-full min-h-[70vh] md:h-[85vh] overflow-hidden z-10"
>

    <!-- SLIDES -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            x-show="activeSlide === index"
            x-transition:enter="transition ease-in-out duration-1000"
            x-transition:enter-start="opacity-0 scale-105"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in-out duration-700"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute inset-0 w-full h-full bg-cover bg-center"
            :style="'background-image: url(\'' + slide.image + '\')'"
        >
            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/50 to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <!-- CONTENT -->
            <div class="max-w-7xl mx-auto h-full flex flex-col justify-center items-center text-center text-secondary relative z-20 px-6">

                <h1
                    class="text-2xl sm:text-4xl md:text-6xl font-extrabold uppercase tracking-widest leading-tight drop-shadow-xl"
                    x-text="slide.title"
                ></h1>

                <p
                    class="text-sm sm:text-lg md:text-xl max-w-2xl mt-4 text-secondary/90"
                    x-text="slide.subtitle"
                ></p>

                <a
                    :href="slide.button_link"
                    class="mt-6 px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-110 shadow-xl focus:outline-none focus:ring-4 focus:ring-secondary/50"
                    :class="slide.button_style"
                    x-text="slide.button_text"
                ></a>
            </div>
        </div>
    </template>

    <!-- ARROWS -->
    <div class="absolute inset-0 z-30 flex justify-between items-center px-4 md:px-10 pointer-events-none">
        <button
            @click="prev()"
            aria-label="Previous slide"
            class="pointer-events-auto p-3 rounded-full bg-primary/40 hover:bg-primary/70 transition backdrop-blur-md"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button
            @click="next()"
            aria-label="Next slide"
            class="pointer-events-auto p-3 rounded-full bg-primary/40 hover:bg-primary/70 transition backdrop-blur-md"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- DOTS -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button
                @click="goTo(index)"
                class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                :class="activeSlide === index
                    ? 'bg-secondary scale-125'
                    : 'bg-secondary/50 hover:bg-secondary/80'"
            ></button>
        </template>
    </div>

</div><?php /**PATH C:\xampp\htdocs\professional-college-website\resources\views/components/hero-slider.blade.php ENDPATH**/ ?>