<?php get_header(); ?>

    <!-- $ Main section -->

    <section class="mt-10">
        <div class="container">
            <h2 class="leading-2 sm:text-6xl">Our <span class="gradient-title">Services</span></h2>
            <ul>
                <li class="lg:[&>*:first-child]:odd:-order-1 lg:[&>*:first-child]:even:order-1 mt-10 grid lg:grid-cols-2 md:mt-14 gap-10 lg:gap-32 lg:items-center lg:py-10">
                    <div>
                        <h2 class="leading-2 sm:text-6xl">WordPress</h2>
                        <p class="mt-6 text-sm leading-6 md:text-base md:mt-8 md:leading-8">
                            I can craft stunning WordPress websites for blogs or businesses. We'll customize it with
                            features like contact forms and even exclusive content areas. Let's discuss your goals and
                            bring your vision to life!
                        </p>
                        <button class="mt-6 md:mt-8">
                            <a href="/contact"
                                class="block uppercase px-12 py-4 rounded-full gradient-bg font-semibold tracking-wide button-animation text-lg">hire
                                me</a>
                        </button>
                    </div>
                    <div
                        class="group relative z-10 mt-10 after:transition-all after:duration-300 after:content-[''] after:absolute after:[background:linear-gradient(0deg,rgb(10,10,10)0%,rgba(255,255,255,0)60%)] after:z-20 after:h-full after:w-full after:top-0 after:left-0 hover:after:opacity-0 md:mt-14 lg:mt-0">

                        <!-- Modal window after image clicking -->

                        <img src="http://sheydvasser/wp-content/uploads/2024/07/devices_1.webp" class="object-cover h-80 lg:h-96 w-full" alt="">
                        <div
                            class="absolute z-30 bottom-0 left-0 p-4 group-hover:-translate-y-2 group-hover:opacity-0 transition-all duration-300 md:p-6">
                            <h6 class="lg:text-3xl">Blog landing page</h6>
                            <p class="text-sm">WordPress</p>
                        </div>
                    </div>
                </li>
                <li class="lg:[&>*:first-child]:odd:-order-1 lg:[&>*:first-child]:even:order-1 mt-10 grid lg:grid-cols-2 md:mt-14 gap-10 lg:gap-32 lg:items-center lg:py-10">
                    <div>
                        <h2 class="leading-2 sm:text-6xl">For business</h2>
                        <p class="mt-6 text-sm leading-6 md:text-base md:mt-8 md:leading-8">
                            I can definitely build a professional website for your business! I use well-established frameworks
                            that ensure your site displays perfectly across all modern browsers.
                        </p>
                        <button class="mt-6 md:mt-8">
                            <a href="/contact"
                                class="block uppercase px-12 py-4 rounded-full gradient-bg font-semibold tracking-wide button-animation text-lg">hire
                                me</a>
                        </button>
                    </div>
                    <div
                        class="group relative z-10 mt-10 after:transition-all after:duration-300 after:content-[''] after:absolute after:[background:linear-gradient(0deg,rgb(10,10,10)0%,rgba(255,255,255,0)60%)] after:z-20 after:h-full after:w-full after:top-0 after:left-0 hover:after:opacity-0 md:mt-14 lg:mt-0">

                        <img src="http://sheydvasser/wp-content/uploads/2024/07/devices_1-1.webp" class="object-cover h-80 lg:h-96 w-full" alt="">
                        <div
                            class="absolute z-30 bottom-0 left-0 p-4 group-hover:-translate-y-2 group-hover:opacity-0 transition-all duration-300 md:p-6">
                            <h6 class="lg:text-3xl">Website for business</h6>
                            <p class="text-sm">Webpack</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- $ Footer -->

<?php get_footer(); ?>