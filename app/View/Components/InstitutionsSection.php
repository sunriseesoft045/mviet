<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InstitutionsSection extends Component
{
    public array $institutions = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->institutions = [
            [
                'name' => 'Shambhunath Institute of Pharmacy',
                'programs' => 'M. Pharm., B. Pharm., D. Pharm. & Pharm. D.',
                'image' => 'images/institutions/pharmacy.jpg',
                'link' => '#',
            ],
            [
                'name' => 'Shambhunath Institute of Law',
                'programs' => 'BALLB 5 Years (English Medium)',
                'image' => 'images/institutions/law.jpg',
                'link' => '#',
            ],
            [
                'name' => 'Shambhunath College of Education',
                'programs' => 'BBA, BCA & D.El.Ed.',
                'image' => 'images/institutions/education.jpg',
                'link' => '#',
            ],
            [
                'name' => 'Shambhunath Institute of Nursing',
                'programs' => 'B.Sc.(N), GNM & ANM',
                'image' => 'images/institutions/nursing.jpg',
                'link' => '#',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.institutions-section');
    }
}