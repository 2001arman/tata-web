@extends('layouts.site')

@section('title', 'Tata Azkia Azzahra — UI/UX Designer')

@php
    $skillBand = ['UX Research', 'UI Design', 'Prototyping', 'Illustration', 'Graphic Design', 'Mobile & Web Design'];

    $allProjects = collect(config('portfolio.projects'))
        ->map(fn ($project, $slug) => $project + ['slug' => $slug])
        ->values();
    $featured = $allProjects->take(2)->all();
    $projects = $allProjects->skip(2);

    $experience = [
        [
            'date' => 'December 2025 - Present',
            'role' => 'UI/UX Designer',
            'company' => 'PT Arta Teknologi Comunindo (Beacon Engineering)',
            'desc' => 'Designing web and mobile interfaces for IoT telemetry platforms, translating complex sensor data into clear, usable experiences. Created 50+ custom icons and 10+ technical illustrations, while building a design system that reduced design-to-development handoff time by approximately 30%.',
        ],
        [
            'date' => 'December 2025 - Present',
            'role' => 'Co-Founder & UI/UX Designer',
            'company' => 'ArtaCode',
            'desc' => 'Leading end-to-end product design for Notery, a shared note-taking app for couples. Designed core features, user journeys, and a scalable design system, helping shape a product that has reached 2,000+ downloads and hundreds of daily active users.',
        ],
        [
            'date' => 'Nov 2024 - Dec 2024',
            'role' => 'Mobile UI/UX Designer',
            'company' => 'Upwork',
            'desc' => 'Designed mobile app experiences across 10+ client projects, from user flows and wireframes to high-fidelity prototypes. Simplified navigation and reduced interaction steps by up to 25%, maintaining 95%+ client satisfaction through iterative design and collaboration.',
        ],
    ];

    $process = [
        ['no' => '01', 'title' => 'Discover', 'desc' => 'Understand user needs and product requirements.'],
        ['no' => '02', 'title' => 'Define', 'desc' => 'Identify problems, user journeys, and priorities.'],
        ['no' => '03', 'title' => 'Design', 'desc' => 'Create wireframes, interfaces, and prototypes.'],
        ['no' => '04', 'title' => 'Deliver', 'desc' => 'Refine designs and prepare developer handoff.'],
    ];

    // Scattered skill cloud. Positions are the pill centres on the 1080px grid.
    $skillCloud = [
        ['label' => 'UI Design', 'icon' => 'bg-bright-500', 'place' => 'left-[14.44%] top-[30px] rotate-[5deg]'],
        ['label' => 'UX Design', 'icon' => 'bg-bright-600', 'place' => 'left-[86.30%] top-[29px] rotate-[-5deg]'],
        ['label' => 'Mobile Design', 'icon' => 'bg-bright-300', 'place' => 'left-[12.08%] top-[133px] rotate-[2deg]'],
        ['label' => 'Website Design', 'icon' => 'bg-bright-500', 'place' => 'left-[89.03%] top-[133px] rotate-[-2deg]'],
        ['label' => 'User Flow', 'icon' => 'bg-primary-dark', 'place' => 'left-[14.40%] top-[237px] rotate-[-2deg]'],
        ['label' => 'Wireframe', 'icon' => 'bg-bright-200', 'place' => 'left-[86.57%] top-[237px] rotate-[2deg]'],
        ['label' => 'Design Systems', 'icon' => 'bg-bright-600', 'place' => 'left-[11.25%] top-[340px] rotate-[-5deg]'],
        ['label' => 'Prototyping', 'icon' => 'bg-primary-dark', 'place' => 'left-[87.08%] top-[340px] rotate-[5deg]'],
    ];

    $infoCards = [
        ['title' => 'Certification', 'lead' => 'Complete Web & Mobile Designer: UI/UX, Figma, +more', 'lines' => ['Udemy', 'November 2025']],
        ['title' => 'Education', 'lead' => 'Bachelor of Education', 'lines' => ['Yogyakarta State University', 'Sept 2021 - July 2025', 'GPA 3.85 / 4.00']],
        ['title' => 'Softskills', 'lead' => null, 'lines' => ['Communication, empathy, collaboration, creativity, problem-solving, critical thinking, attention to detail, time management, and adaptability.']],
        ['title' => 'Organization', 'lead' => 'Staff & Secretary of the Development and Empowerment Division', 'lines' => ['Geography Education Student Association', 'Feb 2022 - Jan 2023']],
    ];

    $email = config('portfolio.email');
    $resume = config('portfolio.resume');
@endphp

@section('content')
    {{-- ───────────────────────── Hero ───────────────────────── --}}
    {{-- The photo extends past its box; clip at the viewport edge so narrow widths don't scroll sideways. --}}
    <div class="overflow-x-clip"><section class="mx-auto max-w-[1080px] px-6 pt-10 pb-14 lg:pt-8 lg:pb-7">
        <div class="flex flex-col-reverse items-center gap-10 lg:flex-row lg:items-start lg:justify-between lg:gap-0">
            <div data-reveal class="flex max-w-[480px] flex-col gap-10 text-center lg:pt-[46px] lg:text-left">
                <div class="flex flex-col gap-2.5">
                    <p class="font-display text-xl leading-7 font-bold text-primary lg:text-2xl">Hi there!👋🏻</p>
                    <h1 class="font-display text-4xl leading-[1.1] font-bold text-ink sm:text-5xl lg:text-[56px] lg:leading-[1.05]">I’m Tata Azkia Azzahra,</h1>
                    <p class="font-display text-[26px] leading-[1.2] font-bold text-primary sm:text-[32px] lg:text-[40px] lg:leading-[1.2]">a UI/UX Designer</p>
                    <p class="mt-1 leading-7 font-medium text-ink">
                        A passionate UI/UX Designer who transforms ideas into intuitive,
                        human-centered, and visually engaging experiences.
                    </p>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm leading-6 font-medium text-ink lg:justify-start lg:text-base">
                        <span>💡 Curious Mind</span>
                        <span>🎨 Design Thinker</span>
                        <span>🌏 Problem Solver</span>
                    </div>

                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-center lg:justify-start">
                        <a href="{{ $email }}"
                           class="inline-flex items-center justify-center rounded-full bg-primary px-8 py-4 leading-6 font-bold text-white transition hover:bg-primary-dark">
                            Contact Me!
                        </a>
                        <a href="{{ $resume }}" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center justify-center rounded-full border border-frost-300 bg-white px-8 py-4 leading-6 font-bold text-primary transition hover:bg-frost-50">
                            Download Resume
                        </a>
                    </div>
                </div>
            </div>

            <div data-reveal class="relative aspect-[482/648] w-[280px] shrink-0 sm:w-[340px] lg:w-[400px]">
                <img src="{{ asset('assets/hero-photo.webp') }}" alt="Tata Azkia Azzahra"
                     width="553" height="601"
                     class="absolute top-[3.7%] left-[-5.187%] w-[114.73%] max-w-none">
                <svg class="absolute top-[27.78%] left-[86.1%] w-[15.35%] fill-primary" viewBox="0 0 18 18" aria-hidden="true">
                    <use href="#star"/>
                </svg>
                <svg class="absolute top-[79.17%] left-[6.02%] w-[15.14%] fill-ink" viewBox="0 0 18 18" aria-hidden="true">
                    <use href="#star"/>
                </svg>
            </div>
        </div>
    </section></div>

    {{-- ───────────────────────── Skills band ───────────────────────── --}}
    {{-- Five identical copies: the keyframe shifts the track by exactly one copy (-20%), so the loop is
         seamless, and the other four (about 4000px) keep the band full on very wide screens.
         With reduced motion it falls back to a single row that can be swiped. --}}
    <section class="overflow-hidden bg-primary motion-reduce:no-scrollbar motion-reduce:overflow-x-auto" aria-label="Areas of practice">
        <div class="flex h-12 w-max animate-marquee items-center text-white hover:[animation-play-state:paused] motion-reduce:mx-auto motion-reduce:animate-none motion-reduce:px-6">
            @foreach (range(1, 5) as $copy)
                <div @class(['flex shrink-0 items-center gap-[18px] pr-[18px] motion-reduce:pr-0', 'motion-reduce:hidden' => ! $loop->first]) @unless ($loop->first) aria-hidden="true" @endunless>
                    @foreach ($skillBand as $skill)
                        <span class="font-display text-lg leading-[1.2] font-bold whitespace-nowrap">{{ $skill }}</span>
                        <svg @class(['size-[18px] shrink-0 fill-white', 'motion-reduce:hidden' => $loop->last]) viewBox="0 0 18 18" aria-hidden="true">
                            <use href="#star"/>
                        </svg>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    {{-- ───────────────────────── Selected work ───────────────────────── --}}
    <section id="projects" class="mx-auto max-w-[1080px] px-6 pt-20 pb-10">
        {{-- The heading sits in the left column so the taller right card rises beside it,
             and both columns bottom-align — as laid out in Figma. --}}
        <div class="grid items-end gap-6 lg:grid-cols-2">
            <div class="flex flex-col">
                <div data-reveal class="inline-flex w-fit items-center gap-2 rounded-full bg-azure px-5 py-2.5">
                    <svg class="size-[18px] shrink-0 fill-white" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                    <span class="text-sm leading-5 font-medium text-white">Projects</span>
                </div>
                <h2 data-reveal class="mt-5 font-display text-4xl leading-[1.1] font-bold text-black sm:text-5xl lg:text-[56px] lg:leading-[1.05]">Selected Work</h2>

                <article data-reveal class="group relative mt-4 flex flex-col rounded-[36px] px-[22px] pt-[46px] pb-[44px] {{ $featured[0]['card'] }}">
                    <img src="{{ asset($featured[0]['image']) }}" alt="{{ $featured[0]['title'] }} preview"
                         class="w-full rounded-[20px] {{ $featured[0]['ratio'] }} object-cover">
                    <h3 class="mt-3.5 font-display text-[30px] leading-9 font-bold {{ $featured[0]['text'] }}"><a href="{{ route('projects.show', $featured[0]['slug']) }}" class="after:absolute after:inset-0">{{ $featured[0]['title'] }}</a></h3>
                    <p class="mt-3 max-w-[300px] pr-[74px] leading-6 sm:pr-0 {{ $featured[0]['text'] }}">{{ $featured[0]['desc'] }}</p>
                    <span class="pointer-events-none absolute right-6 bottom-6 grid transition group-hover:scale-110 size-16 place-items-center rounded-full text-black {{ $featured[0]['circle'] }}">
                        <svg class="size-[18px]" aria-hidden="true"><use href="#arrow-out"/></svg>
                    </span>
                </article>
            </div>

            <article data-reveal class="group relative flex flex-col rounded-[36px] px-[22px] pt-[46px] pb-[44px] {{ $featured[1]['card'] }}">
                <img src="{{ asset($featured[1]['image']) }}" alt="{{ $featured[1]['title'] }} preview"
                     class="w-full rounded-[20px] {{ $featured[1]['ratio'] }} object-cover">
                <h3 class="mt-3.5 font-display text-[30px] leading-9 font-bold {{ $featured[1]['text'] }}"><a href="{{ route('projects.show', $featured[1]['slug']) }}" class="after:absolute after:inset-0">{{ $featured[1]['title'] }}</a></h3>
                <p class="mt-3 max-w-[300px] pr-[74px] leading-6 sm:pr-0 {{ $featured[1]['text'] }}">{{ $featured[1]['desc'] }}</p>
                <span class="pointer-events-none absolute right-6 bottom-6 grid transition group-hover:scale-110 size-16 place-items-center rounded-full text-black {{ $featured[1]['circle'] }}">
                    <svg class="size-[18px]" aria-hidden="true"><use href="#arrow-out"/></svg>
                </span>
            </article>
        </div>

        {{-- Nine project cards --}}
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $project)
                <article data-reveal class="group relative flex flex-col rounded-[24px] px-3.5 pt-7 pb-3.5 {{ $project['card'] }}">
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }} preview"
                         class="aspect-[304/209] w-full rounded-[20px] object-cover">
                    <h3 class="mt-2.5 max-w-[200px] font-display text-xl leading-6 font-bold {{ $project['text'] }}"><a href="{{ route('projects.show', $project['slug']) }}" class="after:absolute after:inset-0">{{ $project['title'] }}</a></h3>
                    <p class="mt-1 max-w-[200px] text-xs leading-[18px] {{ $project['text'] }}">{{ $project['desc'] }}</p>
                    <span class="pointer-events-none absolute right-4 bottom-3.5 grid transition group-hover:scale-110 size-[42px] place-items-center rounded-full {{ $project['circle'] }} {{ $project['text'] }}">
                        <svg class="size-3" aria-hidden="true"><use href="#arrow-out"/></svg>
                    </span>
                </article>
            @endforeach
        </div>
    </section>

    {{-- ───────────────────────── Work experience ───────────────────────── --}}
    <section id="work" class="mx-auto max-w-[1080px] px-6 py-10">
        <div data-reveal class="inline-flex items-center gap-2 rounded-full bg-azure-soft px-5 py-2.5">
            <svg class="size-[18px] shrink-0 fill-white" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
            <span class="text-sm leading-5 font-medium text-white">Work Experience</span>
        </div>
        <h2 data-reveal class="mt-5 max-w-[600px] font-display text-4xl leading-[1.1] font-bold text-black sm:text-5xl lg:text-[56px] lg:leading-[1.05]">Designing across different challenges</h2>

        <div class="mt-10">
            @foreach ($experience as $job)
                <div data-reveal class="grid gap-2 py-5 lg:grid-cols-[220px_1fr] lg:gap-x-6 lg:gap-y-0 lg:py-0">
                    <p class="leading-6 font-bold text-black lg:text-right">{{ $job['date'] }}</p>
                    <div class="max-w-[640px]">
                        <h3 class="text-xl leading-[30px] font-bold text-black">{{ $job['role'] }}</h3>
                        <p class="leading-6 font-semibold text-black">{{ $job['company'] }}</p>
                        <p class="mt-6 leading-6 text-black lg:text-justify">{{ $job['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ───────────────────────── Design process ───────────────────────── --}}
    <section class="mx-auto max-w-[1080px] px-6 py-10">
        <div data-reveal class="rounded-[36px] bg-azure px-6 py-8 lg:px-[30px] lg:py-[30px]">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <div class="inline-flex items-center gap-2 rounded-full bg-frost-200 px-4 py-2">
                        <svg class="size-[18px] shrink-0 fill-azure" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                        <span class="text-sm leading-5 font-medium text-azure">Design Process</span>
                    </div>
                    <h2 class="mt-4 max-w-[460px] font-display text-[26px] leading-[1.2] font-bold text-white sm:text-[30px] lg:text-4xl lg:leading-[1.2]">
                        From Problem Discovery<br>to Effective Solutions
                    </h2>
                </div>
                <p class="max-w-[265px] text-xs leading-[18px] text-frost-300 lg:text-right">
                    A structured, user-centered design process driven by collaboration and iteration.
                </p>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:mt-[46px] lg:grid-cols-4">
                @foreach ($process as $step)
                    <div data-reveal class="flex flex-col rounded-[22px] bg-frost-100 p-[17px]">
                        <span class="grid size-9 place-items-center rounded-full bg-white text-sm leading-5 font-medium text-azure">{{ $step['no'] }}</span>
                        <h3 class="mt-4 font-display text-[22px] leading-[26px] font-bold text-primary">{{ $step['title'] }}</h3>
                        <p class="mt-1.5 text-sm leading-[21px] text-black">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ───────────────────────── Skills cloud ───────────────────────── --}}
    {{-- Pills alternate left and right in $skillCloud, so odd ones slide in from the left. Clipped so they can't cause sideways scrolling. --}}
    <div class="overflow-x-clip"><section id="about" class="mx-auto max-w-[1080px] px-6 py-10">
        {{-- Stacked below lg, scattered at lg --}}
        <div class="flex flex-col items-center gap-8 lg:hidden">
            <p data-reveal class="text-center text-xl leading-[1.4] font-medium text-ink-muted sm:text-[26px]">
                i design simple, intuitive, and human-centered interfaces that make digital experiences feel clear, comfortable, and meaningful for users.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach ($skillCloud as $pill)
                    <span data-reveal="{{ $loop->odd ? 'left' : 'right' }}" class="inline-flex items-center gap-2 rounded-full bg-surface p-2 shadow-[3px_3px_3px_rgba(0,0,0,0.25)]">
                        <span class="grid size-8 shrink-0 place-items-center rounded-full {{ $pill['icon'] }}">
                            <svg class="size-[22px] fill-white" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                        </span>
                        <span class="pr-1.5 text-sm leading-5 text-ink-muted">{{ $pill['label'] }}</span>
                    </span>
                @endforeach
            </div>
        </div>

        <div class="relative hidden h-[372px] lg:block">
            <p data-reveal class="absolute top-[197px] left-1/2 w-[402px] -translate-x-1/2 -translate-y-1/2 text-center text-[26px] leading-9 font-medium text-ink-muted">
                i design simple, intuitive, and human-centered interfaces that make digital experiences feel clear, comfortable, and meaningful for users.
            </p>
            @foreach ($skillCloud as $pill)
                <span data-reveal="{{ $loop->odd ? 'left' : 'right' }}" class="absolute inline-flex -translate-x-1/2 -translate-y-1/2 items-center gap-2 rounded-full bg-surface p-2 shadow-[3px_3px_3px_rgba(0,0,0,0.25)] {{ $pill['place'] }}">
                    <span class="grid size-8 shrink-0 place-items-center rounded-full {{ $pill['icon'] }}">
                        <svg class="size-[22px] fill-white" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                    </span>
                    <span class="pr-1.5 text-sm leading-5 whitespace-nowrap text-ink-muted">{{ $pill['label'] }}</span>
                </span>
            @endforeach
        </div>
    </section></div>

    {{-- ───────────────────────── Credentials ───────────────────────── --}}
    <section class="mx-auto max-w-[1080px] px-6 py-10">
        <div class="grid gap-4 lg:grid-cols-[1fr_280px] lg:gap-x-[66px]">
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($infoCards as $card)
                    <div data-reveal class="flex flex-col gap-[18px] rounded-[9px] bg-frost-200 p-[17px]">
                        <h3 class="font-serif text-[22px] leading-7 font-bold text-primary">{{ $card['title'] }}</h3>
                        <div class="text-sm leading-[21px] text-black">
                            @if ($card['lead'])
                                <p class="font-bold">{{ $card['lead'] }}</p>
                            @endif
                            @foreach ($card['lines'] as $line)
                                <p>{{ $line }}</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <img data-reveal src="{{ asset('assets/work/profile-secondary.webp') }}" alt="Tata Azkia Azzahra"
                 width="329" height="490"
                 class="mx-auto h-auto w-[280px] max-w-full lg:mx-0">
        </div>
    </section>
@endsection
