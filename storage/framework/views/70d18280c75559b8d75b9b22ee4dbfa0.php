<!--
  Blade Component: resources/views/components/news-section.blade.php
  Description: A responsive section to display the latest news and announcements.
-->
<section class="py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-primary tracking-tight font-heading">
                Latest News & Announcements
            </h2>
            <div class="mt-4 w-24 h-1 bg-primary mx-auto"></div>
        </div>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group card-glass hover:shadow-xl transition-shadow duration-300 flex flex-col transform hover:-translate-y-2">
                    <!-- Card Header -->
                    <div class="p-6 flex justify-between items-start">
                        <span class="text-xs font-semibold px-2 py-1 rounded-full <?php echo e($notice['category_color']); ?>">
                            <?php echo e($notice['category']); ?>

                        </span>
                        <span class="text-xs text-primary/70">
                            <?php echo e($notice['date']); ?>

                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 pt-0 flex-grow">
                        <h3 class="text-lg font-bold text-primary leading-tight font-heading">
                            <a href="<?php echo e($notice['link']); ?>" class="hover:text-accent transition-colors duration-300"><?php echo e($notice['title']); ?></a>
                        </h3>
                        <p class="mt-2 text-sm text-primary/80 line-clamp-3 font-body">
                            <?php echo e($notice['description']); ?>

                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="p-6 pt-0 mt-auto">
                        <a href="<?php echo e($notice['link']); ?>"
                           class="btn btn-primary text-sm">
                            Read More
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="#" class="btn btn-accent font-bold uppercase">
                View All Notices
            </a>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\professional-college-website\resources\views/components/news-section.blade.php ENDPATH**/ ?>