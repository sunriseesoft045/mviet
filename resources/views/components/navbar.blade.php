<nav
    x-data="{ open: false }"
    class="sticky top-0 z-40 bg-primary/90 backdrop-blur-md shadow-lg border-b border-primary/70"
>
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-14">

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold uppercase tracking-wide">

                <a href="/"
                   class="relative px-4 py-2 rounded-lg text-secondary transition-all duration-300
                          hover:bg-primary/70 {{ request()->is('/') ? 'bg-primary/70' : '' }}">
                    Home
                </a>

                <!-- About Dropdown -->
                <div class="relative group">
                    <button
                        class="flex items-center px-4 py-2 rounded-lg text-secondary transition-all duration-300
                               hover:bg-primary/70 {{ request()->is('about*') ? 'bg-primary/70' : '' }}"
                    >
                        About Us
                        <svg class="ml-1 w-4 h-4 transition-transform group-hover:rotate-180"
                             fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        class="absolute left-0 mt-2 w-56 rounded-xl bg-secondary shadow-xl border border-primary/20
                               opacity-0 invisible group-hover:opacity-100 group-hover:visible
                               transition-all duration-300"
                    >
                        <a href="/about/vision-mission" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/vision-mission') ? 'bg-primary/10' : '' }}">Vision & Mission</a>
                        <a href="/about/management" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/management') ? 'bg-primary/10' : '' }}">Our Management</a>
                        <a href="/about/proctorial-board" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/proctorial-board') ? 'bg-primary/10' : '' }}">Proctorial Board</a>
                        <a href="/about/officer-incharge" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/officer-incharge') ? 'bg-primary/10' : '' }}">Officer Incharge</a>
                        <a href="/about/strategic-plan" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/strategic-plan') ? 'bg-primary/10' : '' }}">Strategic Plan</a>
                        <a href="/about/why-usi" class="block px-5 py-3 text-primary text-sm hover:bg-primary/10 hover:text-primary {{ request()->is('about/why-usi') ? 'bg-primary/10' : '' }}">Why USI</a>
                    </div>
                </div>

                <!-- Academics -->
                <a href="/academics"
                   class="relative px-4 py-2 rounded-lg text-secondary transition-all duration-300
                          hover:bg-primary/70 {{ request()->is('academics') ? 'bg-primary/70' : '' }}">
                    Academics
                </a>

                <!-- Admissions -->
                <a href="/admissions"
                   class="relative px-4 py-2 rounded-lg text-secondary transition-all duration-300
                          hover:bg-primary/70 {{ request()->is('admissions') ? 'bg-primary/70' : '' }}">
                    Admissions
                </a>

                <!-- Contact -->
                <a href="/contact"
                   class="relative px-4 py-2 rounded-lg text-secondary transition-all duration-300
                          hover:bg-primary/70 {{ request()->is('contact') ? 'bg-primary/70' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Mobile Button -->
            <button
                @click="open = !open"
                class="md:hidden text-secondary focus:outline-none"
            >
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="md:hidden bg-primary border-t border-primary/70"
    >
        <a href="/" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('/') ? 'bg-primary/70' : '' }}">Home</a>
        <a href="/about/vision-mission" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/vision-mission') ? 'bg-primary/70' : '' }}">Vision & Mission</a>
        <a href="/about/management" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/management') ? 'bg-primary/70' : '' }}">Our Management</a>
        <a href="/about/proctorial-board" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/proctorial-board') ? 'bg-primary/70' : '' }}">Proctorial Board</a>
        <a href="/about/officer-incharge" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/officer-incharge') ? 'bg-primary/70' : '' }}">Officer Incharge</a>
        <a href="/about/strategic-plan" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/strategic-plan') ? 'bg-primary/70' : '' }}">Strategic Plan</a>
        <a href="/about/why-usi" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('about/why-usi') ? 'bg-primary/70' : '' }}">Why USI</a>
        <a href="/academics" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('academics') ? 'bg-primary/70' : '' }}">Academics</a>
        <a href="/admissions" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('admissions') ? 'bg-primary/70' : '' }}">Admissions</a>
        <a href="/contact" class="block px-6 py-3 text-secondary hover:bg-primary/70 {{ request()->is('contact') ? 'bg-primary/70' : '' }}">Contact</a>
    </div>
</nav>
