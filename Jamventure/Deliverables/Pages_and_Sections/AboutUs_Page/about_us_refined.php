<?php
/**
 * Template Name: About Us - JamVenture
 * Description: Custom About Us page for JamVenture
 */

get_header(); ?>

<!-- TAILWIND & FONTS -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- CUSTOM STYLES -->
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        color: #0f172a;
        /* Slate-900 */
        background-color: #f8fafc;
        /* Slate-50 */
    }

    /* Dynamic Navigation */
    .glass-nav {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Animations */
    @keyframes pulse-green {
        0% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.7);
        }

        /* Green-600 */
        70% {
            box-shadow: 0 0 0 10px rgba(22, 163, 74, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0);
        }
    }

    .animate-pulse-green {
        animation: pulse-green 2s infinite;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    /* Utilities */
    .hidden-modal {
        display: none !important;
    }
</style>

<div class="about-jamventure-content">

    <!-- HERO SECTION (Internal Page Skeleton) -->
    <section class="relative h-[60vh] flex items-center justify-center bg-slate-900 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544984243-ec3199859f71?q=80&w=2070&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-40" alt="Jamaica Landscape">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 to-slate-900"></div>
        </div>
        <div class="relative z-10 text-center px-6">
            <span
                class="text-green-400 font-bold tracking-widest uppercase text-sm mb-2 block animate-fade-in-up">Discover
                Our Story</span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up italic">About JamVenture</h1>
            <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto animate-fade-in-up"
                style="animation-delay: 0.1s;">
                More Than Just a Ride—A True Jamaican Experience.
            </p>
        </div>
    </section>

    <!-- MISSION SECTION (Standard Header + Clean Text) -->
    <main class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700 border border-green-200">
                    Our Mission
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900">
                    Sharing Jamaica, One Journey at a Time
                </h2>
                <div class="w-20 h-1 bg-green-600 mx-auto mb-8 rounded-full"></div>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
                    At JamVenture, we believe that your vacation shouldn't start when you reach the hotel, it begins the
                    moment we welcome you. As the leading provider of <strong>Private Transportation and Tours
                        Jamaica</strong>, we bridge the gap between simple transit and genuine hospitality. We connect
                    visitors with the real Jamaica—its people, culture, natural wonders, and hidden treasures that only
                    locals truly know.
                </p>
            </div>
        </div>
    </main>

    <!-- VALUES SECTION (Feature Cards Component) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700 border border-green-200">
                    Our Values
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What We Stand For</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Safety -->
                <div class="group relative h-full">
                    <div
                        class="p-8 h-full bg-white rounded-xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div
                            class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center mb-6 text-green-600 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Safety First</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Your safety is our top priority. All vehicles
                            are fully insured and regularly maintained.</p>
                    </div>
                </div>

                <!-- Hospitality -->
                <div class="group relative h-full">
                    <div
                        class="p-8 h-full bg-white rounded-xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div
                            class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center mb-6 text-green-600 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Genuine Hospitality</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Experience authentic Jamaican warmth from
                            guides who truly love sharing their island.</p>
                    </div>
                </div>

                <!-- Integrity -->
                <div class="group relative h-full">
                    <div
                        class="p-8 h-full bg-white rounded-xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div
                            class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center mb-6 text-green-600 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 6v6l4 2m-4 6a10 10 0 1 0 0-20 10 10 0 0 0 0 20z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Integrity</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Transparent pricing, honest recommendations,
                            and no hidden fees or surprises.</p>
                    </div>
                </div>

                <!-- Reliability -->
                <div class="group relative h-full">
                    <div
                        class="p-8 h-full bg-white rounded-xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div
                            class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center mb-6 text-green-600 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2m12-18a4 4 0 0 1 0 7.75M16 3.13a4 4 0 0 1 0 7.75M23 21v-2a4 4 0 0 0-3-3.87" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Reliability</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">100% on-time track record for airport pickups
                            and cruise ship returns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS SECTION -->
    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2">
                    <span
                        class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700 border border-green-200">
                        Certifications
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-slate-900">Fully Licensed & Certified</h2>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        Your safety and peace of mind are paramount. JamVenture operates with full government licensing
                        and industry certifications to ensure you receive the highest standard of service.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 text-slate-700 font-semibold">
                            <div
                                class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            JTB Licensed
                        </div>
                        <div class="flex items-center gap-3 text-slate-700 font-semibold">
                            <div
                                class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            TPDCo Certified
                        </div>
                        <div class="flex items-center gap-3 text-slate-700 font-semibold">
                            <div
                                class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            Red Plate Registered
                        </div>
                        <div class="flex items-center gap-3 text-slate-700 font-semibold">
                            <div
                                class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            Fully Insured
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="bg-white p-12 rounded-3xl shadow-xl border border-slate-100">
                        <div class="space-y-6">
                            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Peace of Mind</h4>
                                    <p class="text-sm text-slate-500">Industry-leading safety standards for every single
                                        ride.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Verified Quality</h4>
                                    <p class="text-sm text-slate-500">Regular audits by TPDCo to maintain our certified
                                        status.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW TEAM SECTION: Our Drivers & Tour Partners -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700 border border-green-200">
                    Trusted Team
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900">Our Drivers & Tour Partners</h2>
                <h3 class="text-xl text-green-600 font-semibold mb-6 italic">Professionals Who Take You There</h3>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    JamVenture works with a trusted network of licensed drivers and tour partners who safely operate our
                    private transportation tours across Jamaica.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Marcus Johnson -->
                <div class="text-center group">
                    <div
                        class="w-40 h-40 mx-auto mb-6 rounded-2xl bg-slate-900 flex items-center justify-center overflow-hidden border-4 border-slate-100 transition-all duration-300 group-hover:scale-105 group-hover:shadow-2xl hover:border-green-500/30">
                        <span class="text-3xl font-bold text-white">MJ</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Marcus Johnson</h4>
                    <p class="text-green-600 font-semibold text-sm">Tour Driver</p>
                </div>

                <!-- Keisha Brown -->
                <div class="text-center group">
                    <div
                        class="w-40 h-40 mx-auto mb-6 rounded-2xl bg-green-600 flex items-center justify-center overflow-hidden border-4 border-slate-100 transition-all duration-300 group-hover:scale-105 group-hover:shadow-2xl hover:border-green-500/30">
                        <span class="text-3xl font-bold text-white">KB</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Keisha Brown</h4>
                    <p class="text-green-600 font-semibold text-sm">Partner Driver</p>
                </div>

                <!-- Devon Williams -->
                <div class="text-center group">
                    <div
                        class="w-40 h-40 mx-auto mb-6 rounded-2xl bg-slate-900 flex items-center justify-center overflow-hidden border-4 border-slate-100 transition-all duration-300 group-hover:scale-105 group-hover:shadow-2xl hover:border-green-500/30">
                        <span class="text-3xl font-bold text-white">DW</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Devon Williams</h4>
                    <p class="text-green-600 font-semibold text-sm">Senior Driver</p>
                </div>

                <!-- Shelly-Ann Thomas -->
                <div class="text-center group">
                    <div
                        class="w-40 h-40 mx-auto mb-6 rounded-2xl bg-green-600 flex items-center justify-center overflow-hidden border-4 border-slate-100 transition-all duration-300 group-hover:scale-105 group-hover:shadow-2xl hover:border-green-500/30">
                        <span class="text-3xl font-bold text-white">ST</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Shelly-Ann Thomas</h4>
                    <p class="text-green-600 font-semibold text-sm">Guest Support & Coordination</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER CTA -->
    <section class="py-24 bg-slate-900 text-center relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1544984243-ec3199859f71?q=80&w=2070&auto=format&fit=crop"
                class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to Experience Jamaica with Us?</h2>
            <p class="text-xl text-slate-300 mb-12 max-w-2xl mx-auto">
                Let us show you why JamVenture is Jamaica's trusted private transportation partner.
            </p>
            <a href="https://jamventure.tours/tours-packages/"
                class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white hover:text-yellow-400 font-bold py-4 px-10 rounded-xl transition-all duration-300 hover:scale-105 shadow-xl hover:shadow-[0_0_30px_rgba(22,163,74,0.4)] gap-2 group">
                <span>Start Planning Your Trip</span>
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <path d="M5 12h14m-7-7 7 7-7 7" />
                </svg>
            </a>
        </div>
    </section>
</div>

<?php get_footer(); ?>