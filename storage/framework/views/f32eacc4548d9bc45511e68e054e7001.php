<?php
    $mediaMap = include(resource_path('views/components/media-map.blade.php'));
    // Helper function to get media URL with fallback
    $getMediaUrl = function ($originalPath, $defaultPlaceholder) use ($mediaMap) {
        if (file_exists(public_path($originalPath))) {
            return asset($originalPath);
        }
        return $mediaMap[$originalPath] ?? $defaultPlaceholder;
    };
?>
<!--
  Blade Component: resources/views/components/institutions-section.blade.php
  Description: A responsive grid section to display other institutions.
-->
<section class="py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-primary tracking-tight font-heading">
                Our Other Institutions
            </h2>
            <p class="mt-4 text-lg text-primary/70 font-body">
                Explore our prestigious educational institutions
            </p>
        </div>

        <!-- Institutions Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php $__currentLoopData = $institutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group card-glass overflow-hidden transform hover:-translate-y-2 transition-all duration-300 ease-in-out hover:shadow-xl">
                    <!-- Card Image -->
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" src="<?php echo e($getMediaUrl($institution['image'], 'https://picsum.photos/seed/institution-' . $loop->index . '/800/600')); ?>" alt="<?php echo e($institution['name']); ?>">
                    </div>

                    <!-- Card Content -->
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-primary font-heading">
                            <?php echo e($institution['name']); ?>

                        </h3>
                        <p class="mt-2 text-sm text-primary/80 font-body">
                            <?php echo e($institution['programs']); ?>

                        </p>
                        <a href="<?php echo e($institution['link']); ?>"
                           class="btn btn-primary text-sm mt-6">
                            Visit
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\professional-college-website\resources\views/components/institutions-section.blade.php ENDPATH**/ ?>