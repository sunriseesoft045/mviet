<!--
  Blade Component: resources/views/components/footer.blade.php
  Description: A full-width, responsive, multi-column site footer.
-->
<footer class="bg-gradient-to-r from-brand-green-950 to-brand-green-950 text-blue-100">
    <div class="container mx-auto px-4 py-16">
        <!-- Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Column 1: Important Links -->
            <div>
                <h3 class="text-lg font-bold uppercase tracking-wider text-white border-b-2 border-brand-green-700 pb-2 mb-4 inline-block">Important Links</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">UPTU</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">UPTU Circulars</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">AICTE</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Facebook</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Admin Login</a></li>
                </ul>
            </div>

            <!-- Column 2: Infrastructure -->
            <div>
                <h3 class="text-lg font-bold uppercase tracking-wider text-white border-b-2 border-brand-green-700 pb-2 mb-4 inline-block">Infrastructure</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Central Library</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Computer Centre</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Hostel Facility</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Seminar Hall</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Lecture Hall</a></li>
                </ul>
            </div>

            <!-- Column 3: Life in Campus -->
            <div>
                <h3 class="text-lg font-bold uppercase tracking-wider text-white border-b-2 border-brand-green-700 pb-2 mb-4 inline-block">Life in Campus</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Sports & Recreation</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Cafeteria</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Health Care</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Training & Placement Cell</a></li>
                    <li><a href="#" class="hover:text-brand-green-300 transition-colors duration-300">Photo Gallery</a></li>
                </ul>
            </div>

            <!-- Column 4: Corporate Office -->
            <div>
                <h3 class="text-lg font-bold uppercase tracking-wider text-white border-b-2 border-brand-green-700 pb-2 mb-4 inline-block">Corporate Office</h3>
                <address class="not-italic space-y-3 text-sm">
                    <p>MADHU VACHASPATI INSTITUTE OF ENGINEERING & TECHNOLOGY</p>
                    <p>Campus: Rasoolabad Urf Koilaha, Puramufi, G T Road, Kaushambi-212213 (U.P)</p>
                    <p>Corporate Office: 31/65, P.D. TANDON ROAD, CIVIL LINES, OPPOSITE TO ALLAHABAD BANK, ALLAHABAD-211001 (U.P)</p>
                    <p>Email: Registrar@mviet.edu.in</p>
                    <p>Mobile Nos.: 9956795886, 9838077859</p>
                </address>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-black/20 py-4">
        <div class="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center text-sm">
            <p class="text-blue-200/80">&copy; 2017 Mviet All rights reserved.</p>
            <div class="flex space-x-4 mt-4 sm:mt-0">
                <a href="#" class="text-blue-200/80 hover:text-white transition-colors duration-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <!-- Add other social icons here -->
            </div>
        </div>
    </div>
</footer>
