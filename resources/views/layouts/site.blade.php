@php
    $email = config('portfolio.email');
    $resume = config('portfolio.resume');
    $linkedin = config('portfolio.linkedin');
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/muslimah.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&family=Poppins:wght@400;500;600;700&family=Lora:wght@400;700&display=swap">
    @vite(['resources/css/app.css'])
</head>
<body class="page-gradient min-h-screen font-sans text-base text-ink antialiased">

    {{-- Shared shapes --}}
    <svg width="0" height="0" class="absolute" aria-hidden="true">
        <symbol id="star" viewBox="0 0 18 18">
            <path d="M7.04128 1.33303C7.74227 -0.444372 10.2577 -0.444371 10.9587 1.33303L12.2377 4.57602C12.4518 5.11867 12.8813 5.54822 13.424 5.76224L16.667 7.04125C18.4444 7.74225 18.4444 10.2577 16.667 10.9587L13.424 12.2377C12.8813 12.4517 12.4518 12.8813 12.2377 13.4239L10.9587 16.6669C10.2577 18.4443 7.74227 18.4443 7.04128 16.6669L5.76226 13.4239C5.54824 12.8813 5.11869 12.4517 4.57604 12.2377L1.33305 10.9587C-0.444348 10.2577 -0.444347 7.74225 1.33305 7.04125L4.57604 5.76224C5.11869 5.54822 5.54824 5.11867 5.76226 4.57602L7.04128 1.33303Z"/>
        </symbol>
        <symbol id="arrow-out" viewBox="0 0 43 43">
            <path d="M12.9179 10.3558H25.4596C28.8637 10.3558 30.5479 10.3558 31.5871 11.395C32.6262 12.4341 32.6442 14.1362 32.6442 17.5046V30.082M10.3558 32.6441L30.96 12.04"
                  fill="none" stroke="currentColor" stroke-width="3.01" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
        <symbol id="chevron" viewBox="0 0 10 16">
            <path d="M8 2 2 8l6 6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
        <symbol id="arrow-left" viewBox="0 0 28 28">
            <path d="M23 14H5m7-7-7 7 7 7" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
    </svg>

    {{-- ───────────────────────── Navigation ───────────────────────── --}}
    <header class="px-4 pt-4 sm:px-6 sm:pt-6 lg:px-10 lg:pt-10">
        <nav class="mx-auto flex max-w-[1280px] items-center justify-between gap-1 rounded-full border min-[400px]:gap-3 border-primary bg-frost-100 p-1.5 lg:grid lg:grid-cols-[1fr_auto_1fr] lg:gap-0">
            <a href="{{ url('/') }}" class="grid size-11 shrink-0 place-items-center rounded-full bg-white" aria-label="Tata Azkia Azzahra — home">
                <img src="{{ asset('assets/icons/avatar.svg') }}" alt="" class="size-[46px] max-w-none">
            </a>

            <div class="flex items-center lg:justify-self-center">
                <a href="{{ url('/') }}#projects" class="rounded-full px-2 py-2.5 text-center min-[400px]:px-3.5 text-sm leading-6 text-primary transition hover:bg-white/70 lg:min-w-[114px] lg:px-5 lg:text-base">Projects</a>
                <a href="{{ url('/') }}#work" class="rounded-full px-2 py-2.5 text-center min-[400px]:px-3.5 text-sm leading-6 text-primary transition hover:bg-white/70 lg:min-w-[114px] lg:px-5 lg:text-base">Work</a>
                <a href="{{ url('/') }}#about" class="rounded-full px-2 py-2.5 text-center min-[400px]:px-3.5 text-sm leading-6 text-primary transition hover:bg-white/70 lg:min-w-[114px] lg:px-5 lg:text-base">About</a>
            </div>

            <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer"
               class="grid size-11 shrink-0 place-items-center rounded-full bg-primary text-white transition hover:bg-primary-dark lg:hidden"
               aria-label="Find me on LinkedIn">
                <svg class="size-5" viewBox="0 0 18 18" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 2.1285C0.750397 1.76302 0.895759 1.41263 1.15419 1.15419C1.41262 0.895761 1.76302 0.750399 2.1285 0.750002H15.87C16.0512 0.749706 16.2306 0.785149 16.3981 0.854302C16.5656 0.923455 16.7178 1.02496 16.8459 1.153C16.9741 1.28105 17.0758 1.43312 17.1451 1.60051C17.2145 1.7679 17.2501 1.94732 17.25 2.1285V15.87C17.25 16.2359 17.1047 16.5868 16.8461 16.8455C16.5874 17.1043 16.2366 17.2498 15.8707 17.25H2.1285C1.76289 17.2496 1.41238 17.1041 1.15393 16.8455C0.895473 16.5869 0.750198 16.2364 0.75 15.8708V2.1285ZM7.281 7.041H9.51525V8.163C9.83775 7.518 10.6628 6.9375 11.9025 6.9375C14.2793 6.9375 14.8425 8.22225 14.8425 10.5795V14.946H12.4373V11.1165C12.4373 9.774 12.1147 9.0165 11.2957 9.0165C10.1595 9.0165 9.687 9.83325 9.687 11.1165V14.946H7.281V7.041ZM3.156 14.8433H5.562V6.9375H3.156V14.8433ZM5.90625 4.359C5.91079 4.56501 5.87413 4.76984 5.79843 4.96149C5.72273 5.15313 5.60951 5.32773 5.46542 5.47503C5.32133 5.62232 5.14927 5.73936 4.95934 5.81926C4.76941 5.89916 4.56543 5.94031 4.35938 5.94031C4.15332 5.94031 3.94934 5.89916 3.75941 5.81926C3.56948 5.73936 3.39742 5.62232 3.25333 5.47503C3.10924 5.32773 2.99602 5.15313 2.92032 4.96149C2.84462 4.76984 2.80796 4.56501 2.8125 4.359C2.8214 3.95464 2.98829 3.56985 3.27741 3.28702C3.56654 3.00419 3.95492 2.84581 4.35938 2.84581C4.76383 2.84581 5.15221 3.00419 5.44134 3.28702C5.73046 3.56985 5.89735 3.95464 5.90625 4.359Z"/>
                </svg>
            </a>

            <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer"
               class="hidden items-center gap-2 rounded-full bg-primary px-5 py-2.5 text-sm font-semibold leading-5 text-white transition hover:bg-primary-dark lg:inline-flex lg:justify-self-end">
                Find me on LinkedIn
                <svg class="size-5" aria-hidden="true"><use href="#arrow-out"/></svg>
            </a>
        </nav>
    </header>

@yield('content')

    {{-- ───────────────────────── Closing call to action ───────────────────────── --}}
    <section class="mx-auto max-w-[1080px] px-6 pt-10 pb-8">
        <div data-reveal class="relative isolate overflow-hidden rounded-[36px] bg-frost-200 px-6 py-11 text-center lg:pt-8 lg:pb-[63px]">
            {{-- Soft background glows --}}
            <div class="absolute -top-[70px] left-[24.6%] -z-10 size-[437px] rounded-full bg-frost-300 blur-[144px]" aria-hidden="true"></div>
            <div class="absolute top-[70px] -left-[48px] -z-10 size-[366px] rounded-full bg-frost-100 blur-[72px]" aria-hidden="true"></div>
            <div class="absolute top-[112px] left-[62.2%] -z-10 size-[366px] rounded-full bg-frost-100 blur-[144px]" aria-hidden="true"></div>

            <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2">
                <svg class="size-[18px] shrink-0 fill-azure" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                <span class="text-sm leading-5 font-semibold text-azure">OPEN TO UI/UX DESIGN OPPORTUNITIES</span>
            </div>

            <h2 class="mx-auto mt-[34px] max-w-[620px] font-display text-[32px] leading-[1.15] font-bold text-ink sm:text-[40px] lg:text-5xl lg:leading-[1.15]">
                Let’s Create Meaningful<br class="hidden lg:inline"> Digital Experiences.
            </h2>

            <p class="mx-auto mt-5 max-w-[700px] leading-6 text-black">
                I’m open to new opportunities and excited to contribute to thoughtful, user-centered digital products.
            </p>

            <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ $email }}"
                   class="inline-flex items-center justify-center rounded-full bg-primary px-7 py-3.5 leading-6 font-bold text-white transition hover:bg-primary-dark">
                    Contact Me!
                </a>
                <a href="{{ $resume }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center rounded-full border border-frost-300 bg-white px-7 py-3.5 leading-6 font-bold text-primary transition hover:bg-frost-50">
                    Download Resume
                </a>
            </div>
        </div>
    </section>

    {{-- ───────────────────────── Footer ───────────────────────── --}}
    <footer class="mx-auto max-w-[1080px] px-6 pb-10">
        <div class="flex flex-col items-center justify-between gap-5 sm:flex-row">
            <p class="flex items-center gap-2 leading-6 font-medium text-azure">
                <svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="2" stroke-linecap="square" aria-hidden="true">
                    <path d="M21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12Z"/>
                    <path d="M14.75 9.25C14.215 8.75396 13.5468 8.42478 12.8275 8.30279C12.1082 8.1808 11.3689 8.2713 10.7002 8.5632C10.0315 8.85511 9.46252 9.33573 9.06292 9.94618C8.66333 10.5566 8.45049 11.2704 8.45049 12C8.45049 12.7296 8.66333 13.4434 9.06292 14.0538C9.46252 14.6643 10.0315 15.1449 10.7002 15.4368C11.3689 15.7287 12.1082 15.8192 12.8275 15.6972C13.5468 15.5752 14.215 15.246 14.75 14.75"/>
                </svg>
                Tata Azkia Azzahra
            </p>

            <div class="flex items-center gap-2">
                <a href="{{ $email }}" class="grid size-7 place-items-center rounded-md bg-azure text-white transition hover:bg-primary" aria-label="Email">
                    <svg class="size-[18px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3333 5.71683L9.99996 10.5293L1.66663 5.71683V5.62516C1.66773 5.01771 1.90952 4.43546 2.33906 4.00593C2.76859 3.57639 3.35084 3.3346 3.95829 3.3335H16.0416C16.6491 3.3346 17.2313 3.57639 17.6609 4.00593C18.0904 4.43546 18.3322 5.01771 18.3333 5.62516V5.71683ZM18.3333 14.1168L13.925 9.7085L18.3333 7.16266V14.1168ZM12.8041 10.3543L9.99996 11.971L7.19579 10.3543L1.99579 15.5543C2.39579 16.221 3.12496 16.6668 3.95829 16.6668H16.0416C16.875 16.6668 17.6 16.221 18.0041 15.5543L12.8041 10.3543ZM1.66663 7.16266L6.07496 9.7085L1.66663 14.1168V7.16266Z"/>
                    </svg>
                </a>
                <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer" class="grid size-7 place-items-center rounded-md bg-azure text-white transition hover:bg-primary" aria-label="LinkedIn">
                    <svg class="size-4" viewBox="0 0 18 18" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 2.1285C0.750397 1.76302 0.895759 1.41263 1.15419 1.15419C1.41262 0.895761 1.76302 0.750399 2.1285 0.750002H15.87C16.0512 0.749706 16.2306 0.785149 16.3981 0.854302C16.5656 0.923455 16.7178 1.02496 16.8459 1.153C16.9741 1.28105 17.0758 1.43312 17.1451 1.60051C17.2145 1.7679 17.2501 1.94732 17.25 2.1285V15.87C17.25 16.2359 17.1047 16.5868 16.8461 16.8455C16.5874 17.1043 16.2366 17.2498 15.8707 17.25H2.1285C1.76289 17.2496 1.41238 17.1041 1.15393 16.8455C0.895473 16.5869 0.750198 16.2364 0.75 15.8708V2.1285ZM7.281 7.041H9.51525V8.163C9.83775 7.518 10.6628 6.9375 11.9025 6.9375C14.2793 6.9375 14.8425 8.22225 14.8425 10.5795V14.946H12.4373V11.1165C12.4373 9.774 12.1147 9.0165 11.2957 9.0165C10.1595 9.0165 9.687 9.83325 9.687 11.1165V14.946H7.281V7.041ZM3.156 14.8433H5.562V6.9375H3.156V14.8433ZM5.90625 4.359C5.91079 4.56501 5.87413 4.76984 5.79843 4.96149C5.72273 5.15313 5.60951 5.32773 5.46542 5.47503C5.32133 5.62232 5.14927 5.73936 4.95934 5.81926C4.76941 5.89916 4.56543 5.94031 4.35938 5.94031C4.15332 5.94031 3.94934 5.89916 3.75941 5.81926C3.56948 5.73936 3.39742 5.62232 3.25333 5.47503C3.10924 5.32773 2.99602 5.15313 2.92032 4.96149C2.84462 4.76984 2.80796 4.56501 2.8125 4.359C2.8214 3.95464 2.98829 3.56985 3.27741 3.28702C3.56654 3.00419 3.95492 2.84581 4.35938 2.84581C4.76383 2.84581 5.15221 3.00419 5.44134 3.28702C5.73046 3.56985 5.89735 3.95464 5.90625 4.359Z"/>
                    </svg>
                </a>
                {{-- Dribbble: shown in the design but no profile URL was provided, so not yet a link --}}
                <span class="grid size-7 place-items-center rounded-md bg-azure text-white" aria-hidden="true">
                    <svg class="size-[18px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M11.3541 11.2373C12.2333 13.3498 12.9083 15.6082 13.0416 17.7498C12.0731 18.1326 11.0414 18.3305 9.99996 18.3332C8.10829 18.3332 6.36663 17.6915 4.96663 16.6248C5.59323 15.3286 6.48589 14.1789 7.58644 13.2506C8.687 12.3224 9.97077 11.6364 11.3541 11.2373ZM14.1708 10.829C15.5458 10.829 16.9125 11.1173 18.1708 11.6507C17.9368 12.7906 17.4671 13.8689 16.7919 14.8167C16.1167 15.7644 15.2509 16.5605 14.25 17.154C14.0458 15.0832 13.4125 12.9498 12.6 10.954C13.1182 10.8727 13.642 10.8323 14.1666 10.8332L14.1708 10.829ZM10.25 8.8415C10.4491 9.24484 10.6483 9.65984 10.8433 10.079C9.38161 10.5239 8.02324 11.2557 6.84754 12.2315C5.67184 13.2073 4.70238 14.4076 3.99579 15.7623C2.50285 14.2137 1.66802 12.1468 1.66663 9.99567C1.66663 9.92484 1.67913 9.85817 1.67913 9.78734C1.82496 9.78734 2.00413 9.79567 2.21246 9.79567C2.52496 9.79984 2.89163 9.80734 3.29996 9.80734C5.07913 9.80734 7.69163 9.68734 10.25 8.8415ZM16.2666 4.52984C17.5985 6.04238 18.3333 7.98863 18.3333 10.004C18.3333 10.1248 18.3208 10.2415 18.3166 10.3623C17 9.854 15.5875 9.58734 14.1666 9.58734C13.4625 9.58734 12.7708 9.65817 12.0958 9.78317C11.8825 9.30817 11.663 8.84567 11.4375 8.39567H11.4333C13.2583 7.61234 14.975 6.3965 16.2666 4.52984ZM10.8458 10.0832L10.8433 10.079H10.8458V10.0832ZM6.38746 2.49984C7.58735 4.1661 8.67984 5.90712 9.65829 7.71234C6.76246 8.62484 3.77913 8.57484 2.23329 8.54984V8.54567C2.07079 8.5415 1.93329 8.5415 1.80413 8.5415C2.27496 5.87067 4.02079 3.64567 6.38746 2.49984ZM9.99579 1.6665C12.0416 1.6665 13.9125 2.40817 15.3625 3.63317C14.1958 5.39984 12.5833 6.5415 10.8541 7.27067C9.87691 5.45405 8.78439 3.70186 7.58329 2.02484C8.34579 1.79567 9.15829 1.6665 9.99579 1.6665Z"/>
                    </svg>
                </span>
            </div>
        </div>
    </footer>

    {{-- Scroll reveal, styled by [data-reveal] in app.css. Elements entering together are staggered.
         The footer is left out: the bottom margin would stop it ever counting as in view at the end of the page. --}}
    <script>
        const revealObserver = new IntersectionObserver((entries) => {
            entries.filter((entry) => entry.isIntersecting).forEach((entry, index) => {
                entry.target.style.transitionDelay = `${Math.min(index, 5) * 80}ms`;
                entry.target.classList.add('is-revealed');
                revealObserver.unobserve(entry.target);
            });
        }, { rootMargin: '0px 0px -8% 0px' });

        document.querySelectorAll('[data-reveal]').forEach((element) => revealObserver.observe(element));
    </script>

    @stack('scripts')
</body>
</html>
