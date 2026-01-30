<?php
    $mediaMap = include(resource_path('views/components/media-map.blade.php'));
    $logoPath = 'images/logo.png';
    $logoSrc = file_exists(public_path($logoPath)) ? asset($logoPath) : ($mediaMap[$logoPath] ?? 'https://picsum.photos/seed/logo/100/100');
?>
<header class="w-full bg-secondary border-b border-primary/20 relative z-50 shadow-md backdrop-blur-sm">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4">

        <!-- Desktop / Tablet Layout -->
        <div class="hidden md:flex items-center justify-center gap-6">

            <!-- Left Logo -->
            <img src="{{ $logoSrc }}"
                 class="h-20 w-20 object-contain drop-shadow-lg"
                 alt="College Logo">

            <!-- Text -->
            <div class="text-center max-w-4xl">
                <h1 class="text-2xl md:text-4xl font-extrabold text-primary tracking-widest uppercase leading-tight">
                    MADHU VACHASPATI
                </h1>

                <p class="text-sm md:text-xl font-semibold text-primary/90 mt-1 tracking-wide">
                    INSTITUTE OF ENGINEERING & TECHNOLOGY
                </p>

                <p class="text-[10px] md:text-sm text-primary/70 mt-2 leading-relaxed">
                    Affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow (Formerly Uttar Pradesh Technical University, Lucknow)<br>
                    Approved by AICTE, New Delhi
                </p>
            </div>

            <!-- Right Logo -->
            <img src="{{ $logoSrc }}"
                 class="h-20 w-20 object-contain drop-shadow-lg"
                 alt="College Logo">

        </div>

        <!-- Mobile Layout -->
        <div class="md:hidden flex flex-col items-center text-center space-y-3">

            <img src="{{ $logoSrc }}"
                 class="h-16 w-16 object-contain drop-shadow-lg"
                 alt="College Logo">

            <h1 class="text-xl font-extrabold text-primary tracking-widest uppercase leading-tight">
                MADHU VACHASPATI
            </h1>

            <p class="text-sm font-semibold text-primary/90 tracking-wide">
                INSTITUTE OF ENGINEERING & TECHNOLOGY
            </p>

            <p class="text-[10px] text-primary/70 leading-relaxed px-4">
                Affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow<br>
                Approved by AICTE, New Delhi
            </p>

        </div>

    </div>

</header>
