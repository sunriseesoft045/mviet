<?php
// resources/views/components/media-map.blade.php

// This file maps original media paths to placeholder URLs.
//
// To replace placeholders with actual media:
// 1. Place your actual media files in the corresponding public/ directory paths.
//    (e.g., 'public/images/hero1.jpg', 'public/images/gallery/gallery1.jpg', etc.)
// 2. The system will automatically use the local file if it exists.
// 3. To update placeholder aspect ratios or sources, modify the placeholder URLs below.

return [
    // Logos
    'images/logo.png' => 'https://picsum.photos/seed/logo/100/100', // Small square for logo

    // Hero Slider Images (1920x1080)
    'images/hero1.jpg' => 'https://picsum.photos/seed/hero1/1920/1080',
    'images/hero2.jpg' => 'https://picsum.photos/seed/hero2/1920/1080',
    'images/hero3.jpg' => 'https://picsum.photos/seed/hero3/1920/1080',

    // Institutions Section Images (assuming generic paths)
    'images/institutions/institution1.jpg' => 'https://picsum.photos/seed/institution1/800/600',
    'images/institutions/institution2.jpg' => 'https://picsum.photos/seed/institution2/800/600',
    'images/institutions/institution3.jpg' => 'https://picsum.photos/seed/institution3/800/600',
    'images/institutions/institution4.jpg' => 'https://picsum.photos/seed/institution4/800/600',

    // Photo Gallery Images (800x600)
    'images/gallery/gallery1.jpg' => 'https://picsum.photos/seed/gallery1/800/600',
    'images/gallery/gallery2.jpg' => 'https://picsum.photos/seed/gallery2/800/600',
    'images/gallery/gallery3.jpg' => 'https://picsum.photos/seed/gallery3/800/600',
    'images/gallery/gallery4.jpg' => 'https://picsum.photos/seed/gallery4/800/600',
    'images/gallery/gallery5.jpg' => 'https://picsum.photos/seed/gallery5/800/600',
    'images/gallery/gallery6.jpg' => 'https://picsum.photos/seed/gallery6/800/600',
    'images/gallery/gallery7.jpg' => 'https://picsum.photos/seed/gallery7/800/600',
    'images/gallery/gallery8.jpg' => 'https://picsum.photos/seed/gallery8/800/600',

    // Video Gallery Thumbnails (640x360) - re-using gallery images for simplicity
    'images/video_thumb1.jpg' => 'https://picsum.photos/seed/videothumb1/640/360',
    'images/video_thumb2.jpg' => 'https://picsum.photos/seed/videothumb2/640/360',
    'images/video_thumb3.jpg' => 'https://picsum.photos/seed/videothumb3/640/360',
    'images/video_thumb4.jpg' => 'https://picsum.photos/seed/videothumb4/640/360',
];
