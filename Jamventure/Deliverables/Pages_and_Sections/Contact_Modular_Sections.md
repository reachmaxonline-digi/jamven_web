# JamVenture Contact Page Sections

Use these sections to build the Contact Us page in Elementor or standard HTML.

---

## SECTION 0 – Global Dependencies
**HTML:**
```html
<!-- Add to <head> -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Montserrat', sans-serif; color: #0f172a; background-color: #f8fafc; }
    .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0, 0, 0, 0.05); }
    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(22, 163, 74, 0); }
        100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
    }
    .animate-pulse-green { animation: pulse-green 2s infinite; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
    .hidden-modal { display: none !important; }
</style>
```

---

## SECTION 1 – Navigation
**HTML:**
```html
<nav class="glass-nav" style="position: fixed; top: 0; left: 0; right: 0; width: 100%; z-index: 9999;">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.html" class="text-2xl font-bold tracking-tighter cursor-pointer">
            Jam<span class="text-green-600">Venture</span>
        </a>
        <div class="hidden md:flex space-x-8 font-semibold text-sm text-slate-600 items-center">
            <a href="index.html" class="hover:text-green-600 transition">Home</a>
            <a href="about.html" class="hover:text-green-600 transition">About Us</a>
            <a href="tours.html" class="hover:text-green-600 transition">Tours</a>
            <a href="contact.html" class="text-green-600 transition">Contact</a>
        </div>
        <a href="https://wa.me/1234567890" class="bg-green-600 text-white px-6 py-2 rounded-full font-bold shadow-lg hover:bg-green-700 transition">Book Now</a>
    </div>
</nav>
```

---

## SECTION 2 – Page Hero
**HTML:**
```html
<section class="relative h-[60vh] flex items-center justify-center bg-slate-900 overflow-hidden" style="padding-top: 100px;">
    <!-- Decorative Blurs (no background image) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-64 h-64 rounded-full bg-green-600/20 blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 rounded-full bg-yellow-500/10 blur-3xl"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center container mx-auto px-6 animate-fade-in-up">
        <span class="text-green-400 font-bold tracking-widest uppercase text-sm mb-4 block">Here to Help 24/7</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Contact JamVenture</h1>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto font-light">
            Let's Plan Your Jamaican Adventure. Simple, stress-free booking for private tours and transfers.
        </p>
    </div>
</section>
```

---

## SECTION 3 – Main Content (Two Columns)
**HTML:**
```html
<section class="py-24 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- LEFT COLUMN: Contact Info & AI -->
            <div class="space-y-12">
                
                <!-- Intro -->
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">We're Ready to Help</h2>
                    <p class="text-slate-600 leading-relaxed text-lg mb-8">
                        Whether you need a private airport transfer, a cruise ship excursion, or a fully customized island tour, the JamVenture team is ready to help. Reach out anytime—we make booking private transportation tours in Jamaica simple and stress-free.
                    </p>
                    
                    <!-- Checklist -->
                    <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100">
                        <h4 class="font-bold text-slate-900 mb-4">All JamVenture services are:</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-slate-700 font-medium">100% private (no shared rides)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-slate-700 font-medium">Operated by JTB-certified, Red Plate drivers</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-slate-700 font-medium">Fixed-price and fully insured</span>
                            </li>
                             <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-slate-700 font-medium">Scheduled around your travel plans</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- AI Guide Callout -->
                <div class="relative overflow-hidden rounded-2xl bg-slate-900 p-8 text-center text-white shadow-xl">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500 rounded-full blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold mb-2">Need help planning?</h3>
                        <p class="text-slate-300 mb-6 text-sm">Speak to our AI Island Guide for instant answers and tour suggestions.</p>
                        <button onclick="document.getElementById('ai-modal-container').classList.remove('hidden-modal');" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white hover:scale-105 transition-all duration-300 shadow-lg font-bold py-4 rounded-xl gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                            Speak to AI Island Guide
                        </button>
                        <p class="mt-4 text-xs text-slate-500">(Prefer a human? We're available below!)</p>
                    </div>
                </div>

                <!-- Contact Details -->
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Contact Us Directly</h3>
                    <p class="text-slate-500 text-sm mb-6">For urgent requests, same-day bookings, or cruise ship guests docking today.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="flex items-center gap-4 p-4 rounded-xl border border-slate-200 hover:border-green-500 hover:bg-green-50 transition-all group">
                            <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm">WhatsApp</p>
                                <p class="text-xs text-slate-500">Fastest Response</p>
                            </div>
                        </a>
                         <a href="#" class="flex items-center gap-4 p-4 rounded-xl border border-slate-200 hover:border-green-500 hover:bg-green-50 transition-all group">
                            <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 text-sm">Email Us</p>
                                <p class="text-xs text-slate-500">info@jamventure.tours</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Booking Form -->
            <div class="relative bg-white rounded-2xl shadow-2xl p-8 border border-slate-100">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Request a Quote</h3>
                    <p class="text-slate-500 text-sm">Please complete the form below to receive a personalized, no-obligation quote and availability via email.</p>
                </div>

                <form class="space-y-6">
                    <!-- Personal Info -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Full Name</label>
                            <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Email Address</label>
                            <input type="email" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="john@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">WhatsApp / Phone</label>
                        <input type="tel" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="+1 (555) 000-0000">
                    </div>

                    <!-- Service Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Service Type</label>
                            <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors">
                                <option>Select Service...</option>
                                <option>Airport Transfer (MBJ)</option>
                                <option>Airport Transfer (KIN)</option>
                                <option>Cruise Ship Excursion</option>
                                <option>Private Day Tour</option>
                                <option>Custom / Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Date of Service</label>
                            <input type="date" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors">
                        </div>
                    </div>

                    <!-- Locations -->
                    <div>
                         <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Pickup Location</label>
                         <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="e.g. MBJ Airport or Hotel Name">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Drop-off / Tour</label>
                            <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="Destination">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Passengers</label>
                            <input type="number" min="1" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="Total #">
                        </div>
                    </div>

                    <!-- Notes -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Special Requests</label>
                        <textarea rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-colors" placeholder="Child seats, grocery sops, accessibility needs..."></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                        Submit Booking Request
                    </button>
                    <p class="text-xs text-center text-slate-400">Your details are secure. We'll reply shortly.</p>
                </form>
            </div>

        </div>
    </div>
</section>
```

---

## SECTION 4 – Footer (Standard)
**HTML:**
```html
<footer class="bg-slate-900 text-white pt-10">
    <!-- Top Badges -->
    <div class="border-b border-white/10 pb-8">
        <div class="container mx-auto px-6 flex flex-wrap justify-center gap-8">
            <div class="flex items-center gap-3"><svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg><div><p class="font-bold">JTB Licensed</p><p class="text-xs text-slate-400">Official Certification</p></div></div>
            <div class="flex items-center gap-3"><svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg><div><p class="font-bold">Red Plate Vehicles</p><p class="text-xs text-slate-400">Fully Insured</p></div></div>
        </div>
    </div>
    <!-- Social & Links (Simplified for brevity, use full footer from Blueprint) -->
    <div class="container mx-auto px-6 py-12 text-center text-slate-400 text-sm">
        <p>&copy; 2026 JamVenture. All rights reserved.</p>
    </div>
</footer>
```

---

## SECTION 5 – AI Modal
**HTML:**
```html
<div id="ai-modal-container" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm hidden-modal">
    <div class="bg-white w-full max-w-lg rounded-3xl overflow-hidden shadow-2xl animate-fade-in-up">
        <div class="bg-gradient-to-r from-green-600 to-slate-900 p-8 text-white relative">
            <button onclick="document.getElementById('ai-modal-container').classList.add('hidden-modal');" class="absolute top-4 right-4 hover:opacity-70 text-2xl">✕</button>
            <h3 class="text-2xl font-bold">AI Island Guide</h3>
            <p class="text-xs opacity-70">Powered by Gemini AI</p>
        </div>
        <div class="p-10 text-center">
            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-8 animate-pulse-green">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
            </div>
            <p class="text-lg font-medium text-slate-800 italic mb-6">"Wah Gwan! I'm Irie. How can I help you plan your trip?"</p>
            <button onclick="document.getElementById('ai-modal-container').classList.add('hidden-modal');" class="bg-slate-900 text-white px-8 py-3 rounded-full font-bold">Start Chatting</button>
        </div>
    </div>
</div>
```
