@extends('layouts.site')

@section('title', $project['title'].' — Tata Azkia Azzahra')

@php
    // "View Full Design System" opens this slide in the carousel.
    $designSlide = collect($project['slides'])->search(fn ($slide) => $slide['label'] === 'Design System');
    $sectionHeading = 'font-display text-[28px] leading-[1.2] font-bold text-azure sm:text-3xl';
@endphp

@section('content')
    {{-- ───────────────────────── Title ───────────────────────── --}}
    <section class="mx-auto max-w-[1080px] px-6 pt-12 lg:pt-16">
        <div data-reveal class="flex items-center gap-2 text-azure">
            <svg class="size-[18px] shrink-0 fill-azure" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
            <span class="text-sm leading-5 font-medium">Projects</span>
        </div>
        <h1 data-reveal class="mt-2 font-display text-[40px] leading-[1.05] font-bold text-ink sm:text-6xl lg:text-[72px]">{{ $project['title'] }}</h1>

        <div class="mt-5 grid gap-6 lg:grid-cols-[minmax(0,1fr)_260px]">
            <p data-reveal class="max-w-[480px] leading-6 text-ink">{{ $project['intro'] ?? $project['desc'] }}</p>

            @isset($project['role'])
                <dl data-reveal class="flex gap-10 lg:flex-col lg:gap-5">
                    <div>
                        <dt class="text-[13px] leading-4 font-bold text-[#a7a7a7]">ROLE</dt>
                        <dd class="mt-1 text-[15px] leading-[22px] font-medium text-primary">{{ $project['role'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[13px] leading-4 font-bold text-[#a7a7a7]">TYPE</dt>
                        <dd class="mt-1 text-[15px] leading-[22px] font-medium text-primary">{{ $project['type'] }}</dd>
                    </div>
                </dl>
            @endisset
        </div>
    </section>

    {{-- ───────────────────────── Showcase ───────────────────────── --}}
    <section id="showcase" class="mx-auto max-w-[1080px] scroll-mt-6 px-6 pt-12 lg:pt-14">
        <h2 data-reveal class="{{ $sectionHeading }}">Showcase</h2>

        {{-- Slides swipe natively with scroll snapping; the buttons below drive the same scroll position.
             From lg up, each slide keeps the Figma proportions and the controls sit over it. --}}
        <div data-reveal data-carousel role="group" aria-roledescription="carousel" aria-label="{{ $project['title'] }} showcase"
             class="relative mt-6 overflow-hidden rounded-[36px] bg-frost-200">
            <div data-carousel-track class="no-scrollbar flex snap-x snap-mandatory overflow-x-auto">
                @foreach ($project['slides'] as $slide)
                    <div role="group" aria-roledescription="slide" aria-label="{{ $loop->iteration }} of {{ $loop->count }}: {{ $slide['label'] }}"
                         class="relative flex w-full shrink-0 snap-start flex-col justify-center gap-4 p-5 pb-3 sm:p-6 sm:pb-3 lg:block lg:aspect-[1080/734] lg:p-0">
                        <div class="inline-flex w-fit items-center gap-2 self-start rounded-full bg-azure px-5 py-2.5 text-white lg:absolute lg:top-[5.45%] lg:left-[3.7%]">
                            <svg class="size-[18px] shrink-0 fill-white" viewBox="0 0 18 18" aria-hidden="true"><use href="#star"/></svg>
                            <span class="text-sm leading-5 font-medium">{{ $slide['label'] }}</span>
                        </div>
                        <img src="{{ asset($slide['image']) }}" alt="{{ $project['title'] }}: {{ $slide['label'] }}"
                             width="{{ $slide['width'] }}" height="{{ $slide['height'] }}"
                             @unless ($loop->first) loading="lazy" @endunless
                             style="--x: {{ $slide['x'] }}%; --y: {{ $slide['y'] }}%; --w: {{ $slide['w'] }}%"
                             class="h-auto w-full lg:absolute lg:top-[var(--y)] lg:left-[var(--x)] lg:w-[var(--w)]">
                    </div>
                @endforeach
            </div>

            <div class="flex items-center justify-between px-5 pb-5 sm:px-6 lg:contents">
                <button type="button" data-carousel-prev aria-label="Previous slide"
                        class="grid size-10 shrink-0 place-items-center rounded-full bg-frost-300 text-primary transition hover:bg-white lg:absolute lg:top-[51.5%] lg:left-[3.7%] lg:-translate-y-1/2">
                    <svg class="size-4" viewBox="0 0 10 16" fill="currentColor" aria-hidden="true"><use href="#chevron"/></svg>
                </button>

                <div class="flex items-center justify-center gap-1.5 lg:absolute lg:bottom-[5.5%] lg:left-1/2 lg:-translate-x-1/2">
                    @foreach ($project['slides'] as $slide)
                        <button type="button" data-carousel-dot aria-label="Go to slide {{ $loop->iteration }}: {{ $slide['label'] }}"
                                @if ($loop->first) aria-current="true" @endif
                                class="h-[7px] w-[7px] rounded-full bg-azure-soft transition-all aria-[current=true]:w-7 aria-[current=true]:bg-primary"></button>
                    @endforeach
                </div>

                <button type="button" data-carousel-next aria-label="Next slide"
                        class="grid size-10 shrink-0 place-items-center rounded-full bg-frost-300 text-primary transition hover:bg-white lg:absolute lg:top-[51.5%] lg:right-[3.7%] lg:-translate-y-1/2">
                    <svg class="size-4 rotate-180" viewBox="0 0 10 16" fill="currentColor" aria-hidden="true"><use href="#chevron"/></svg>
                </button>
            </div>
        </div>
    </section>

    {{-- ───────────────────────── Design system ───────────────────────── --}}
    @if ($project['designCards'])
    <section class="mx-auto max-w-[1080px] px-6 pt-12 lg:pt-14">
        <h2 data-reveal class="{{ $sectionHeading }}">Design System</h2>

        <div class="mt-6 flex flex-col gap-6 lg:flex-row">
            @foreach ($project['designCards'] as $card)
                <img data-reveal src="{{ asset($card['image']) }}" alt="{{ $project['title'] }} design system: {{ $card['label'] }}"
                     width="{{ $card['width'] }}" height="{{ $card['height'] }}" loading="lazy"
                     style="--grow: {{ $card['grow'] }}"
                     class="h-auto w-full min-w-0 rounded-[24px] lg:w-auto lg:[flex:var(--grow)_1_0%]">
            @endforeach
        </div>

        @if ($designSlide !== false)
            <div class="mt-4 flex justify-end">
                <a href="#showcase" data-carousel-goto="{{ $designSlide }}"
                   class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
                    View Full Design System
                    <svg class="size-4 rotate-180" viewBox="0 0 28 28" fill="none" aria-hidden="true"><use href="#arrow-left"/></svg>
                </a>
            </div>
        @endif
    </section>
    @endif

    {{-- ───────────────────────── About the project ───────────────────────── --}}
    @isset($project['about'])
        <section class="mx-auto max-w-[1080px] px-6 pt-12 lg:pt-14">
            <h2 data-reveal class="{{ $sectionHeading }}">About the Project</h2>
            <div class="mt-6 grid gap-x-8 gap-y-7 lg:grid-cols-2">
                @foreach ($project['about'] as $item)
                    <div data-reveal>
                        <h3 class="leading-5 font-bold text-primary">{{ $item['title'] }}</h3>
                        <p class="mt-3 leading-6 text-ink">{{ $item['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endisset

    {{-- ───────────────────────── Process ───────────────────────── --}}
    @isset($project['process'])
        <section class="mx-auto max-w-[1080px] px-6 pt-12 lg:pt-14">
            <h2 data-reveal class="{{ $sectionHeading }}">Process</h2>
            <div class="mt-6 grid gap-[18px] sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($project['process'] as $step)
                    <div data-reveal class="rounded-2xl bg-white p-6">
                        <p class="text-sm leading-4 font-bold text-azure-soft">{{ $step['no'] }}</p>
                        <h3 class="mt-2 text-sm leading-4 font-bold text-primary">{{ $step['title'] }}</h3>
                        <p class="mt-2.5 text-[13px] leading-5 text-ink">{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endisset

    {{-- ───────────────────────── Previous and next project ───────────────────────── --}}
    <nav data-reveal aria-label="More projects" class="mx-auto max-w-[1080px] px-6 pt-12 lg:pt-14">
        <div class="flex flex-col gap-5 rounded-[20px] bg-frost-300 p-6 sm:flex-row sm:items-center sm:justify-between lg:px-[30px] lg:py-[30px]">
            <a href="{{ route('projects.show', $previous['slug']) }}" rel="prev" class="group flex items-center gap-3">
                <span class="grid size-[42px] shrink-0 place-items-center rounded-full bg-white text-primary transition group-hover:scale-110">
                    <svg class="size-[22px]" viewBox="0 0 28 28" fill="none" aria-hidden="true"><use href="#arrow-left"/></svg>
                </span>
                <span>
                    <span class="block text-[13px] leading-4 font-semibold text-white">PREVIOUS PROJECT</span>
                    <span class="mt-1 block font-display text-xl leading-6 font-bold text-primary lg:text-2xl">{{ $previous['title'] }}</span>
                </span>
            </a>
            <a href="{{ route('projects.show', $next['slug']) }}" rel="next" class="group flex flex-row-reverse items-center gap-3 text-right sm:ml-auto">
                <span class="grid size-[42px] shrink-0 place-items-center rounded-full bg-white text-primary transition group-hover:scale-110">
                    <svg class="size-[22px] rotate-180" viewBox="0 0 28 28" fill="none" aria-hidden="true"><use href="#arrow-left"/></svg>
                </span>
                <span>
                    <span class="block text-[13px] leading-4 font-semibold text-white">NEXT PROJECT</span>
                    <span class="mt-1 block font-display text-xl leading-6 font-bold text-primary lg:text-2xl">{{ $next['title'] }}</span>
                </span>
            </a>
        </div>
    </nav>
    <div class="h-10 lg:h-16"></div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('[data-carousel]').forEach((carousel) => {
            const track = carousel.querySelector('[data-carousel-track]');
            const dots = [...carousel.querySelectorAll('[data-carousel-dot]')];
            const current = () => Math.round(track.scrollLeft / track.clientWidth);
            const behavior = () => (matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth');

            // Wraps around at both ends, as the arrows show on every slide in the design.
            const goTo = (index) => {
                const slide = (index + dots.length) % dots.length;
                track.scrollTo({ left: slide * track.clientWidth, behavior: behavior() });
            };

            carousel.querySelector('[data-carousel-prev]').addEventListener('click', () => goTo(current() - 1));
            carousel.querySelector('[data-carousel-next]').addEventListener('click', () => goTo(current() + 1));
            dots.forEach((dot, index) => dot.addEventListener('click', () => goTo(index)));

            track.addEventListener('scroll', () => {
                dots.forEach((dot, index) => {
                    if (index === current()) {
                        dot.setAttribute('aria-current', 'true');
                    } else {
                        dot.removeAttribute('aria-current');
                    }
                });
            }, { passive: true });

            document.querySelectorAll('[data-carousel-goto]').forEach((link) => {
                link.addEventListener('click', () => goTo(Number(link.dataset.carouselGoto)));
            });
        });
    </script>
@endpush
