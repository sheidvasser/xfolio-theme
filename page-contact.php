<?php get_header(); ?>

<!-- $ Header -->

<section>
    <div class="container grid lg:grid-cols-2 lg:mb-20 lg:gap-14">
        <div class="mb-10 lg:mb-0">
            <h1 class="leading-2 sm:text-6xl mb-8 lg:mb-10"><span class="gradient-title">Get in
                    touch</span></h1>
            <p class="text-sm mb-6 md:w-3/5 md:text-base md:leading-8 lg:w-4/5 lg:mb-10">Have a project in mind?
                Looking
                to partner or work together?
                Reach
                out though the form and I'll
                get back to you in the next 48 hours.</p>
            <div>
                <a href="mailto:roman.sheidwasser@gmail.com" class="table mb-1 md:mb-2 lg:mb-3">
                    <i
                        class="fas fa-envelope mr-4 text-xl md:text-2xl md:mr-5 bg-gradient-to-r from-[var(--color-purple)] via-[var(--color-red)] to-[var(--color-light-orange)] !bg-clip-text [-webkit-text-fill-color:transparent] table-cell align-middle"></i>
                    <span class="table-cell align-middle md:text-lg">roman.sheidwasser@gmail.com</span>
                </a>
                <p class="table">
                    <i
                        class="fas fa-video mr-3 text-xl md:text-2xl md:mr-4 bg-gradient-to-r from-[var(--color-purple)] via-[var(--color-red)] to-[var(--color-light-orange)] !bg-clip-text [-webkit-text-fill-color:transparent] table-cell align-middle"></i>
                    <span class="table-cell align-middle md:text-lg">Offers free video consultation</span>
                </p>
            </div>
        </div>

        <!-- $ Request form -->

        <div class="mb-20 lg:mb-0">
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="de9af871-ecf7-431b-947c-b227f8c5282e">
                <div class="mb-8">
                    <label for="username" class="font-semibold mb-3 block">Your Name</label>
                    <input type="text" class="bg-base-white-secondary px-6 py-5 w-full rounded-md lg:py-4" required
                        id="username" name="username" placeholder="Enter your name">
                </div>
                <div class="mb-8">
                    <label for="email" class="font-semibold mb-3 block">Your E-mail</label>
                    <input type="text" class="bg-base-white-secondary px-6 py-5 w-full rounded-md lg:py-4" required
                        id="email" name="email" placeholder="Enter your e-mail">
                </div>
                <div class="mb-8">
                    <label for="budget" class="font-semibold mb-3 block">Your Budget</label>
                    <input type="text" class="bg-base-white-secondary px-6 py-5 w-full rounded-md lg:py-4" id="budget"
                        name="budget" placeholder="$">
                </div>
                <div class="mb-8">
                    <label for="textarea" class="font-semibold mb-3 block">Tell me a bit more what are you looking
                        for?</label>
                    <textarea class="bg-base-white-secondary px-6 py-5 w-full rounded-md resize-none" id="textarea"
                        name="textarea" cols="30" rows="6"></textarea>
                </div>
                <input type="hidden" name="redirect" value="https://web3forms.com/success">
                <button type="submit"
                    class="uppercase px-12 py-4 rounded-full gradient-bg font-semibold tracking-wide button-animation text-lg">submit
                    now</button>
            </form>
        </div>
    </div>
</section>

<!-- $ FAQ -->

<section>
    <div class="container">
        <h1 class="leading-2 sm:text-6xl mb-12 capitalize md:leading-4">frequently asked <span
                class="gradient-title">questions</span></h1>
        <div
            class="faq after:h-0.5 after:w-full after:bg-stone-700 after:inline-block after:content-[''] after:opacity-50 mb-10 md:mb-4 md:after:mt-7">
            <div class="flex items-center justify-between cursor-pointer">
                <h5 class="max-w-[80%] md:text-2xl">How long does it take to build a website?</h5>
                <svg width="36px" height="36px" viewBox="0 0 24 24" class="transition duration-300" fill="none">
                    <path d="M6 12H18M12 6V18" stroke="var(--color-black-primary)" stroke-width="2.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="answer max-h-0 overflow-hidden transition-[max-height] duration-500 delay-100">
                <p class="my-6 md:mb-0 md:text-lg">
                    It would take around 1 to 4 months starting from scratch till the end for basic information
                    websites
                    with less functionality.
                </p>
            </div>
        </div>
        <div
            class="faq after:h-0.5 after:w-full after:bg-stone-700 after:inline-block after:content-[''] after:opacity-50 mb-10 md:mb-4 md:after:mt-7">
            <div class="flex items-center justify-between cursor-pointer">
                <h5 class="max-w-[80%] md:text-2xl">Can you maintain my site for me?</h5>
                <svg width="36px" height="36px" viewBox="0 0 24 24" class="transition duration-300" fill="none">
                    <path d="M6 12H18M12 6V18" stroke="var(--color-black-primary)" stroke-width="2.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="answer max-h-0 overflow-hidden transition-[max-height] duration-500 delay-100">
                <p class="my-6 md:mb-0 md:text-lg">
                    Regular maintenance is essential for a website to stabilize its flexibility and reliability.
                    Proper
                    maintenance would help in ensuring your website’s traffic boost and seo optimization.
                </p>
            </div>
        </div>
        <div
            class="faq after:h-0.5 after:w-full after:bg-stone-700 after:inline-block after:content-[''] after:opacity-50 mb-10 md:mb-4 md:after:mt-7">
            <div class="flex items-center justify-between cursor-pointer">
                <h5 class="max-w-[80%] md:text-2xl">Can you build WordPress websites?</h5>
                <svg width="36px" height="36px" viewBox="0 0 24 24" class="transition duration-300" fill="none">
                    <path d="M6 12H18M12 6V18" stroke="var(--color-black-primary)" stroke-width="2.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="answer max-h-0 overflow-hidden transition-[max-height] duration-500 delay-100">
                <p class="my-6 md:mb-0 md:text-lg">
                    Yes. I can build your website on the WordPress platform. I'll also provide high-quality themes
                    and
                    plugins included helping you to easily manage your project.
                </p>
            </div>
        </div>
        <div
            class="faq after:h-0.5 after:w-full after:bg-stone-700 after:inline-block after:content-[''] after:opacity-50 mb-10 md:mb-4 md:after:mt-7">
            <div class="flex items-center justify-between cursor-pointer">
                <h5 class="max-w-[80%] md:text-2xl">Can you help me setup my domain and hosting?</h5>
                <svg width="36px" height="36px" viewBox="0 0 24 24" class="transition duration-300" fill="none">
                    <path d="M6 12H18M12 6V18" stroke="var(--color-black-primary)" stroke-width="2.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="answer max-h-0 overflow-hidden transition-[max-height] duration-500 delay-100">
                <p class="my-6 md:mb-0 md:text-lg">
                    Yes. I can help you with registering your domain name, configuring DNS settings, adding HTTPS /
                    SSL
                    security, and more.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>