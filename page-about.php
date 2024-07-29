<?php get_header(); ?>

<!-- $ Header -->

<section class="mb-20">
    <div class="container">
        <h1 class="leading-2 sm:text-6xl lg:mb-10">Hi, I am <br class="hidden lg:block"><span
                class="gradient-title">Roman
                Sheydvasser</span></h1>

        <p class="leading-6 text-sm mt-8 tracking-wide md:text-base md:leading-8 md:w-2/3 lg:w-1/2">
            I'm a web developer with over <?= $exp = date("Y") - 2022 ?> years of experience building a range of
            projects.
            I'm always seeking
            out new challenges to keep my skills sharp and stay ahead of the curve.
        </p>
        <ul class="py-3 mt-8 flex">
            <li class="mr-5" aria-label="instagram link">
                <a href="#" class="social-icon">
                    <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                            fill="var(--color-black-primary)" />
                        <path
                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                            fill="var(--color-black-primary)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                            fill="var(--color-black-primary)" />
                    </svg>
                </a>
            </li>
            <li class="mr-5" aria-label="telegram link">
                <a href="#" class="social-icon">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12.3583 9.38244C11.3857 9.787 9.44177 10.6243 6.52657 11.8944C6.05318 12.0827 5.8052 12.2669 5.78263 12.4469C5.74448 12.7513 6.12559 12.8711 6.64455 13.0343C6.71515 13.0565 6.78829 13.0795 6.86327 13.1038C7.37385 13.2698 8.06068 13.464 8.41773 13.4717C8.74161 13.4787 9.1031 13.3452 9.50219 13.0711C12.226 11.2325 13.632 10.3032 13.7202 10.2831C13.7825 10.269 13.8688 10.2512 13.9273 10.3032C13.9858 10.3552 13.98 10.4536 13.9738 10.48C13.9361 10.641 12.4401 12.0318 11.6659 12.7515C11.4246 12.9759 11.2534 13.135 11.2184 13.1714C11.14 13.2528 11.0601 13.3298 10.9833 13.4038C10.509 13.8611 10.1532 14.204 11.003 14.764C11.4114 15.0331 11.7381 15.2556 12.0641 15.4776C12.4201 15.7201 12.7752 15.9619 13.2347 16.2631C13.3517 16.3398 13.4635 16.4195 13.5724 16.4971C13.9867 16.7925 14.3589 17.0579 14.8188 17.0155C15.086 16.991 15.362 16.7397 15.5022 15.9903C15.8335 14.2193 16.4847 10.382 16.6352 8.80081C16.6484 8.66228 16.6318 8.48498 16.6185 8.40715C16.6051 8.32932 16.5773 8.21842 16.4761 8.13633C16.3563 8.03911 16.1714 8.01861 16.0886 8.02C15.7125 8.0267 15.1354 8.22735 12.3583 9.38244Z"
                            fill="var(--color-black-primary)" />
                    </svg>
                </a>
            </li>
            <li class="mr-5" aria-label="github link">
                <a href="#" class="social-icon">
                    <svg width="28px" height="28px" viewBox="0 0 20 20" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                fill="var(--color-black-primary)">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path
                                        d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                        id="github-[#142]">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</section>

<!-- $ Skills and experience in numbers -->

<section class="md:pb-10 md:pt-4">
    <div class="container">
        <ul class="flex flex-col md:flex-row">
            <li
                class="text-center w-3/5 flex flex-col self-center after:content-[''] after:h-px after:w-4/5 after:bg-base-gray after:my-7 after:mx-auto md:after:absolute md:after:right-0 md:after:w-px md:after:h-full md:after:my-0 md:after:top-0 relative md:block md:after:block md:px-4">

                <h2 class="text-6xl mb-4 md:text-4xl md:mb-2"><span class="gradient-text"><?= $exp ?>+</span></h2>
                <p class="">Years of Experience in <br class="hidden md:block">Web Development</p>
            </li>
            <li
                class="text-center w-3/5 flex flex-col self-center after:content-[''] after:h-px after:w-4/5 after:bg-base-gray after:my-7 after:mx-auto md:after:absolute md:after:right-0 md:after:w-px md:after:h-full md:after:my-0 md:after:top-0 relative md:block md:after:block md:px-4">
                <h2 class="text-6xl mb-4 md:text-4xl md:mb-2"><span class="gradient-text">10+</span></h2>
                <p class="">Successfully Projects<br>Completed</p>
            </li>
            <li class="text-center w-3/5 flex flex-col self-center md:block md:self-auto">
                <h2 class="text-6xl mb-4 md:text-4xl md:mb-2"><span class="gradient-text">10+</span></h2>
                <p class="">Global Customers</p>
            </li>
        </ul>
    </div>
</section>

<!-- $ Divider -->

<section class="my-16 relative overflow-hidden flex items-center" id="divider">
    <div class="flex items-center justify-center py-10 w-full gradient-bg" id="divider-wrapper">
        <div class="-rotate-2 bg-base-black-primary absolute w-[110%] shadow-[0px_0px_10px_0px_rgba(34,60,80,0.4)]">
            <div class="text-xl flex items-center py-5" id="divider-line">
                <div id="divider-1"
                    class="flex items-center animate-[ticker_30s_linear_infinite] [animation-delay:-30s] lg:animate-[ticker_40s_linear_infinite] lg:[animation-delay:-40s]">
                </div>
                <div id="divider-2"
                    class="flex items-center animate-[ticker2_30s_linear_infinite] [animation-delay:-15s] lg:animate-[ticker2_40s_linear_infinite] lg:[animation-delay:-20s]">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- $ Education and work experience -->

<section class="py-10">
    <div class="container">
        <ul class="grid md:w-4/5 lg:w-2/3 xl:grid-cols-2 xl:w-full xl:gap-20">
            <li class="mb-20 last:mb-0 xl:mb-0">
                <h1 class="capitalize mb-8 font-semibold"><span class="gradient-title">Education</span>
                </h1>
                <ul class="">
                    <li class="after:content-[''] after:h-px after:block after:bg-base-gray after:my-8">
                        <h2 class="uppercase text-3xl mb-2">proweb centre</h2>
                        <div class="md:flex md:justify-between">
                            <p class="capitalize mb-5 text-base-gray text-lg md:mb-0 line-clamp-1">fullstack web
                                developer degree</p>
                            <ul class="md:mr-10">
                                <li class="list-disc list-inside text-base-gray text-lg">2021-2022</li>
                            </ul>
                        </div>
                    </li>
                    <li class="after:content-[''] after:h-px after:block after:bg-base-gray after:my-8">
                        <h2 class="uppercase text-3xl mb-2">micros</h2>
                        <div class="md:flex md:justify-between">
                            <p class="capitalize mb-5 text-base-gray text-lg md:mb-0 line-clamp-1">frontend web
                                development</p>
                            <ul class="md:mr-10">
                                <li class="list-disc list-inside text-base-gray text-lg">2020-2021</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="mb-20 last:mb-0 xl:mb-0">
                <h1 class="capitalize mb-8 font-semibold"><span class="gradient-title">work
                        experience</span></h1>
                <ul class="">
                    <li class="after:content-[''] after:h-px after:block after:bg-base-gray after:my-8">
                        <h2 class="capitalize text-3xl mb-2">upwork</h2>
                        <div class="md:flex md:justify-between">
                            <p class="capitalize mb-5 text-base-gray text-lg md:mb-0 line-clamp-1">freelancer, web
                                developer</p>
                            <ul class="mr-10">
                                <li class="list-disc list-inside text-base-gray text-lg">2022-2024</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!-- $ Big photo -->

<section class="my-14">
    <div class="container relative">
        <img src="http://sheydvasser/wp-content/uploads/2024/07/photo-square.webp"
            class="w-full object-cover md:max-w-none md:w-3/5 md:object-contain md:max-h-none" alt="">
        <div
            class="bg-base-black-primary text-base-white-primary w-5/6 mx-auto -translate-y-10 p-6 md:w-1/2 md:mx-0 md:absolute md:top-1/2 md:-translate-y-1/2 md:right-0">
            <div class="after:content-[''] after:h-px after:w-full after:bg-base-white-primary after:my-6 after:block">
                <h2 class="lg:text-4xl lg:mb-4">Follow me</h2>
                <p class="mt-4">I am Roman Sheydvasser, a developer who works with startups to create websites for
                    them.
                </p>
            </div>
            <ul class="flex sm:items-center">
                <li class="mr-6" aria-label="instagram link">
                    <a href="#" class="">
                        <i class="text-[26px] fab fa-instagram"></i>
                    </a>
                </li>
                <li class="mr-6" aria-label="telegram link">
                    <a href="#" class="">
                        <i class="text-2xl fab fa-telegram"></i>
                    </a>
                </li>
                <li class="mr-6" aria-label="github link">
                    <a href="#" class="">
                        <i class="text-2xl fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>