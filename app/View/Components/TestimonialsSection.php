<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialsSection extends Component
{
    public array $testimonials = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = [
            [
                'name' => 'Kumar Saumitra',
                'role' => 'Territory Manager',
                'company' => 'Seagull Pharmaceuticals',
                'avatar' => 'images/testimonials/user1.jpg',
                'rating' => 5,
                'testimonial' => 'Our golden four years, which can\'t be explained in words, faculty members, management, friends, seniors, juniors all are close to my heart...', 
            ],
            [
                'name' => 'Anupam Sinha',
                'role' => 'Professional Marketing Executive',
                'company' => 'Unique Pharmaceutical Pvt. Ltd.',
                'avatar' => 'images/testimonials/user2.jpg',
                'rating' => 5,
                'testimonial' => 'College is very precious for me; my professional growth is fast because of my college and my parents...', 
            ],
            [
                'name' => 'Alok Maurya',
                'role' => 'Programmer Analyst',
                'company' => 'Cognizant',
                'avatar' => 'images/testimonials/user3.jpg',
                'rating' => 5,
                'testimonial' => 'First of all thanks to all my teachers who have provided me necessary guidance...', 
            ],
            [
                'name' => 'Mudit Agarwal',
                'role' => 'Engineer',
                'company' => 'Philips India Ltd.',
                'avatar' => 'images/testimonials/user4.jpg',
                'rating' => 4,
                'testimonial' => 'Life at SIET was memorable; I wish coming batches get better exposure and knowledge...', 
            ],
            [
                'name' => 'Shivendra Narayan Tiwari',
                'role' => 'Process Advisor',
                'company' => 'Barclays',
                'avatar' => 'images/testimonials/user5.jpg',
                'rating' => 5,
                'testimonial' => 'I had very good time at SIET; it is a pleasure to see my college growing fast...', 
            ],
            [
                'name' => 'Anurag Sinha',
                'role' => 'Project Manager',
                'company' => 'Zayva Solution Pvt. Ltd.',
                'avatar' => 'images/testimonials/user6.jpg',
                'rating' => 5,
                'testimonial' => 'It was best four years. College focused on overall development so that we were able to compete the world...', 
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonials-section');
    }
}