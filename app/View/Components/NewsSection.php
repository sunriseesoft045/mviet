<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsSection extends Component
{
    public array $notices = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->notices = [
            [
                'category' => 'News',
                'category_color' => 'bg-blue-100 text-blue-800',
                'date' => '13 Aug 2025',
                'title' => 'Academic Calendar Even Sem 2025-2026',
                'description' => 'The academic calendar for the upcoming even semester of the 2025-2026 session has been released.',
                'link' => '#',
            ],
            [
                'category' => 'Notice',
                'category_color' => 'bg-yellow-100 text-yellow-800',
                'date' => '05 Aug 2025',
                'title' => 'Admission Open for B.Tech 2025',
                'description' => 'Online applications are invited for admission to B.Tech programs for the academic year 2025.',
                'link' => '#',
            ],
            [
                'category' => 'Update',
                'category_color' => 'bg-green-100 text-green-800',
                'date' => '01 Aug 2025',
                'title' => 'Campus Placement Drive by Infosys',
                'description' => 'Infosys will be conducting a campus recruitment drive for final year students of all branches.',
                'link' => '#',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-section');
    }
}