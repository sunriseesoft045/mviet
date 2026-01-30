<!--
  Blade Component: resources/views/components/hero-slider.blade.php
  Description: Full-width, responsive hero image slider using Alpine.js + Tailwind CSS
-->

<div
    x-data="{
        slides: [
            {
                image: '/images/hero1.jpg',
                title: 'STATE-OF-THE-ART FACILITIES',
                subtitle: 'Modern labs equipped with the latest technology',
                button_text: 'View Facilities',
                button_link: '#',
                button_style: 'bg-green-600 hover:bg-green-700'
            },
            {
                image: '/images/hero2.jpg',
                title: 'ADMISSIONS OPEN 2025',
                subtitle: 'Join a legacy of excellence and innovation',
                button_text: 'Apply Now',
                button_link: '#',
                button_style: 'bg-blue-600 hover:bg-blue-700'
            },
            {
                image: '/images/hero3.jpg',
                title: 'CAMPUS LIFE & STUDENT SUCCESS',
                subtitle: 'Learning beyond classrooms',
                button_text: 'Explore Gallery',
                button_link: '#',
                button_style: 'bg-yellow-500 hover:bg-yellow-600'
            }
        ],
        activeSlide: 0,
        autoplay: null,

        startAutoplay() {
            this.autoplay = setInterval(() => {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length
            }, 5000)
        },

        stopAutoplay() {
            clearInterval(this.autoplay)
        },

        next() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length
            this.stopAutoplay()
            this.startAutoplay()
        },

        prev() {
            this.activeSlide =
                this.activeSlide === 0
                    ? this.slides.length - 1
                    : this.activeSlide - 1
            this.stopAutoplay()
            this.startAutoplay()
        },

        goTo(index) {
            this.activeSlide = index
            this.stopAutoplay()
            this.startAutoplay()
        }
    }"
    x-init="startAutoplay()"
    class="relative w-full h-[85vh] overflow-hidden bg-black"
>

    <!-- SLIDES -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            x-show="activeSlide === index"
            x-transition:enter="transition ease-in-out duration-1000"
            x-transition:enter-start="opacity-0 scale-105"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in-out duration-1000"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute inset-0 w-full h-full bg-cover bg-center"
            :style="'background-image: url(' + slide.image + ')'"
        >
            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 via-green-800/50 to-transparent"></div>
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- CONTENT -->
            <div class="container mx-auto h-full flex flex-col justify-center items-center text-center text-white relative z-10 px-6">
                <h1
                    class="text-4xl md:text-6xl font-extrabold uppercase tracking-widest leading-tight"
                    x-text="slide.title"
                ></h1>

                <p
                    class="mt-4 text-lg md:text-xl max-w-2xl"
                    x-text="slide.subtitle"
                ></p>

                <a
                    :href="slide.button_link"
                    class="mt-8 px-8 py-3 rounded-lg font-semibold text-white transition-transform duration-300 transform hover:scale-105 shadow-lg"
                    :class="slide.button_style"
                    x-text="slide.button_text"
                ></a>
            </div>
        </div>
    </template>

    <!-- ARROWS -->
    <div class="absolute inset-0 z-20 flex justify-between items-center px-4 md:px-8 pointer-events-none">
        <button
            @click="prev()"
            class="pointer-events-auto p-3 rounded-full bg-black/40 hover:bg-black/70 transition"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button
            @click="next()"
            class="pointer-events-auto p-3 rounded-full bg-black/40 hover:bg-black/70 transition"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- DOTS -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button
                @click="goTo(index)"
                class="w-3 h-3 rounded-full transition-all duration-300"
                :class="activeSlide === index
                    ? 'bg-white scale-125'
                    : 'bg-white/50 hover:bg-white/80'"
            ></button>
        </template>
    </div>

</div>
