# JamVenture Contact Page: Destructured Modular Sections (Stacked Edition)

Use these sections to build the Contact Us page. This version uses **full-width horizontal sections** that can be easily added, removed, or reordered.

---

## SECTION 0 – Global Dependencies & Premium Styles
**HTML:**
```html
<!-- TAILWIND & FONTS -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- CUSTOM STYLES -->
<style>
    body { font-family: 'Montserrat', sans-serif; color: #0f172a; background-color: #f8fafc; }
    
    /* Dynamic Navigation */
    .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0, 0, 0, 0.05); }
    
    /* Animations */
    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(22, 163, 74, 0); }
        100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
    }
    .animate-pulse-green { animation: pulse-green 2s infinite; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
    
    /* Utilities */
    .hidden-modal { display: none !important; }
</style>
```

---

## SECTION 1 – Page Hero
**HTML:**
```html
<section class="relative min-h-[400px] flex items-center justify-center bg-slate-900 overflow-hidden" style="background-color: #0f172a;">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-64 h-64 rounded-full bg-green-600/20 blur-3xl" style="background: rgba(22, 163, 74, 0.2); filter: blur(60px);"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 rounded-full bg-yellow-500/10 blur-3xl" style="background: rgba(234, 179, 8, 0.1); filter: blur(60px);"></div>
    </div>
    <div class="relative z-10 text-center container mx-auto px-6 animate-fade-in-up">
        <span class="text-green-400 font-bold tracking-widest uppercase text-sm mb-4 block" style="color: #4ade80; display: block; margin-bottom: 1rem;">Here to Help 24/7</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4" style="color: white !important;">Contact JamVenture</h1>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto font-light" style="color: #cbd5e1;">Simple, stress-free booking for your Jamaican adventure.</p>
    </div>
</section>
```

---

## SECTION 2 – Contact Information & Checklist
**HTML:**
```html
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center max-w-4xl">
        <h2 class="text-3xl font-bold text-slate-900 mb-6">We're Ready to Help</h2>
        <p class="text-slate-600 text-lg mb-12">Whether you need a private airport transfer, a cruise ship excursion, or a fully customized island tour, the JamVenture team is ready to help.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-center gap-4 justify-center md:justify-start">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <p class="font-bold text-slate-900">100% Private</p>
            </div>
            <div class="flex items-center gap-4 justify-center md:justify-start">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <p class="font-bold text-slate-900">JTB Certified</p>
            </div>
            <div class="flex items-center gap-4 justify-center md:justify-start">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <p class="font-bold text-slate-900">Fully Insured</p>
            </div>
        </div>
    </div>
</section>
```

---

## SECTION 3 – AI Guide & Premium Support
**HTML:**
```html
<section class="py-20 bg-slate-50 border-y border-slate-100">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto mb-12">
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Choose Your Preferred Contact Method</h3>
            <p class="text-slate-500">Fast, professional support for all your Jamaican travel needs.</p>
        </div>
        
        <div class="flex flex-col md:flex-row justify-center items-center gap-6 max-w-5xl mx-auto">
            <!-- WhatsApp (Premium Green Glow) -->
            <a href="https://wa.me/+18768878953" class="inline-flex items-center justify-center whitespace-nowrap bg-green-600 hover:bg-green-700 text-white hover:text-yellow-400 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(34,197,94,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 w-full sm:w-auto group">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                WhatsApp Us
            </a>

            <!-- AI Agent Mia -->
            <a href="https://agent.jotform.com/019c3064b8bc72b89bf0a603d8409bf2a573/voice" class="inline-flex items-center justify-center whitespace-nowrap bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(79,70,229,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 w-full sm:w-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                Ask our AI Agent
            </a>
        </div>
    </div>
</section>
```

---

## SECTION 4 – Pre-Form Hook (30-Min Response)
**HTML:**
```html
<section class="py-12 bg-white">
    <div class="container mx-auto px-6 text-center max-w-4xl">
        <h3 class="text-2xl md:text-3xl font-bold text-slate-900 mb-4">Schedule Your Booking Below</h3>
        <p class="text-slate-600 text-lg font-light leading-relaxed">
            Once your request is submitted, a tour agent will respond to you within <span class="text-green-600 font-bold">30 minutes</span> and notify you via WhatsApp and/or Email.
        </p>
    </div>
</section>
```

---

## SECTION 5 – Scheduling Form Section
**HTML:**
```html
<section class="pb-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- EMBED SLOT START -->
            <div style="min-height: 500px; background: #f8fafc; border: 2px dashed #e2e8f0; border-radius: 24px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 40px;" class="shadow-inner">
                <svg class="w-16 h-16 text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v12a2 2 0 002 2z" /></svg>
                <p class="text-slate-600 font-bold text-xl mb-2">Form Embed Slot</p>
                <p class="text-slate-400 max-w-sm mx-auto">Replace this entire div with your Calendly or Jotform iframe/script.</p>
            </div>
            <!-- EMBED SLOT END -->
            
            <p class="text-center text-xs text-slate-400 mt-8">Your information is handled securely according to our privacy policy.</p>
        </div>
    </div>
</section>
```

---

## SECTION 6 – AI Modal
**HTML:**
```html
<div id="ai-modal-container" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm hidden-modal">
    <div class="bg-white w-full max-w-lg rounded-3xl overflow-hidden shadow-2xl animate-fade-in-up">
        <div class="bg-gradient-to-r from-green-600 to-slate-900 p-8 text-white relative text-center">
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
