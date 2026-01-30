<!--
  Blade Component: resources/views/components/stats-counter-section.blade.php
  Description: A responsive section with numbers that animate on scroll into view.
-->
<section
    x-data="{
        startCounter: false,
        stats: [
            { label: 'Years of Excellence', target: 20, current: 0, suffix: '+' },
            { label: 'Students Enrolled', target: 1633, current: 0, suffix: '' },
            { label: 'Faculty Members', target: 250, current: 0, suffix: '+' },
            { label: 'Courses Offered', target: 15, current: 0, suffix: '' }
        ],
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.startCounter = true;
                        this.animateStats();
                        observer.unobserve(this.$el); // Animate only once
                    }
                });
            }, { threshold: 0.1 });

            observer.observe(this.$el);
        },
        animateStats() {
            this.stats.forEach((stat, index) => {
                const duration = 2000; // 2 seconds
                const stepTime = Math.abs(Math.floor(duration / stat.target));
                let startTime;

                const animate = (timestamp) => {
                    if (!startTime) startTime = timestamp;
                    const progress = timestamp - startTime;
                    const increment = Math.floor((progress / duration) * stat.target);

                    if (this.stats[index].current < stat.target) {
                        this.stats[index].current = Math.min(increment, stat.target);
                        requestAnimationFrame(animate);
                    } else {
                        this.stats[index].current = stat.target;
                    }
                };
                requestAnimationFrame(animate);
            });
        }
    }"
    class="py-16 sm:py-24"
>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <template x-for="(stat, index) in stats" :key="index">
                <div class="p-4 card-glass">
                    <span class="text-5xl font-extrabold text-primary font-heading" x-text="Math.round(stat.current) + stat.suffix"></span>
                    <p class="mt-2 text-lg text-primary/80 font-body" x-text="stat.label"></p>
                </div>
            </template>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\professional-college-website\resources\views/components/stats-counter-section.blade.php ENDPATH**/ ?>