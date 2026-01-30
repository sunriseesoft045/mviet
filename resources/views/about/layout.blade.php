@extends('components.app-layout')

@section('title', $title ?? 'About Us')

@section('content')
<div class="relative">
    <!-- Banner Heading -->
    <div class="bg-primary py-16 text-secondary text-center">
        <h1 class="text-4xl font-extrabold font-heading">{{ $bannerHeading ?? 'About Us' }}</h1>
    </div>

    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row gap-8">
        <!-- Sidebar Navigation (Desktop) -->
        <aside class="w-full md:w-1/4">
            <nav class="card-glass p-4 md:p-6 sticky top-20">
                <h3 class="text-xl font-bold text-primary mb-4 font-heading">Sections</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/about/vision-mission" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/vision-mission') ? 'bg-primary/10 font-semibold' : '' }}">Vision & Mission</a>
                    </li>
                    <li>
                        <a href="/about/management" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/management') ? 'bg-primary/10 font-semibold' : '' }}">Management</a>
                    </li>
                    <li>
                        <a href="/about/officer-incharge" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/officer-incharge') ? 'bg-primary/10 font-semibold' : '' }}">Officer Incharge</a>
                    </li>
                    <li>
                        <a href="/about/proctorial-board" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/proctorial-board') ? 'bg-primary/10 font-semibold' : '' }}">Proctorial Board</a>
                    </li>
                    <li>
                        <a href="/about/strategic-plan" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/strategic-plan') ? 'bg-primary/10 font-semibold' : '' }}">Strategic Plan</a>
                    </li>
                    <li>
                        <a href="/about/why-usi" class="block px-3 py-2 rounded-lg text-primary hover:bg-primary/10 {{ request()->is('about/why-usi') ? 'bg-primary/10 font-semibold' : '' }}">Why USI</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Page Content -->
        <main class="w-full md:w-3/4">
            <div class="card-glass p-6 md:p-8">
                @yield('about_content')
            </div>
        </main>
    </div>
</div>
@endsection
