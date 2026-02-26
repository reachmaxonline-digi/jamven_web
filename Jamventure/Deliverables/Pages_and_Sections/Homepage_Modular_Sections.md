SECTION 0 – Global Dependencies
HTML:
<!-- 
  NOTE: Add this to the <head> of your site or a global "HTML Code" widget in the Elementor Header.
  You only need this ONCE per page.
-->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
<!-- React & Babel for AI Assistant -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        color: #0f172a;
    }
    .glass-nav {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
        100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }
    .animate-pulse-green { animation: pulse-green 2s infinite; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
    
    /* Utility for hidden state (handled by React but kept for fallback) */
    .hidden-modal { display: none !important; }
</style>

CSS:
/* Included in the <style> block above for simplicity in Elementor */


SECTION 1 – Header / Navigation
HTML:
<nav class="fixed w-full z-50 glass-nav" style="top: 0; left: 0;">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold tracking-tighter cursor-pointer" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            Jam<span class="text-green-600">Venture</span>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-12 font-semibold text-sm text-slate-600 items-center">
            <a href="#" onclick="event.preventDefault(); window.scrollTo({top: 0, behavior: 'smooth'});" class="text-green-600 hover:text-green-700 transition">Home</a>
            <a href="#" class="hover:text-green-600 transition">About Us</a>
            <a href="#" class="hover:text-green-600 transition">Contact</a>
        </div>
        
        <!-- CTA Button -->
        <a href="https://wa.me/+18768878953" class="bg-green-600 text-white px-6 py-2 rounded-full font-bold shadow-lg hover:bg-green-700 transition">Book Now</a>
    </div>
</nav>

CSS:
/* Tailwind classes handle styling. .glass-nav is defined in Global Dependencies. */


SECTION 2 – Hero Section
HTML:
<section class="relative min-h-screen flex items-center justify-center bg-slate-900 overflow-hidden pt-20">
    <!-- Background (Original Image & Overlay) -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=2000" alt="Jamaica" class="w-full h-full object-cover opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/70 via-slate-900/50 to-slate-900/90"></div>
    </div>
    
    <!-- Decorative Blurs (New Layout Design Elements) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-64 h-64 rounded-full bg-green-600/20 blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 rounded-full bg-yellow-500/10 blur-3xl"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 text-center animate-fade-in-up">
        
        <!-- Badge (New Pill Shape) -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 backdrop-blur-sm border border-white/10 text-white text-sm font-medium mb-8">
            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
            JTB Certified • Red Plate Licensed
        </div>

        <!-- Headline (New Layout Sizes) -->
        <h1 class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-white mb-6 leading-tight tracking-tight drop-shadow-xl">
            Trusted <span class="text-green-500">Private Tours & Transfers</span> <br/>
            in <span class="text-yellow-400">Jamaica</span>
        </h1>

        <!-- Subheadline (New Spacing) -->
        <p class="text-xl md:text-2xl text-slate-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
            Every Jamaican venture starts with a trusted local guide
        </p>

        <!-- Buttons (New Layout Row) -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
            <!-- Button 1: WhatsApp (Primary Green with Yellow Text Hover) -->
            <a href="https://wa.me/+18768878953" class="inline-flex items-center justify-center whitespace-nowrap bg-green-600 hover:bg-green-700 text-white hover:text-yellow-400 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(34,197,94,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 text-white group">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Book via WhatsApp
            </a>

            <!-- AI Button (Gradient Style) -->
            <a href="https://agent.jotform.com/019c3064b8bc72b89bf0a603d8409bf2a573/voice" class="inline-flex items-center justify-center whitespace-nowrap bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(79,70,229,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                Speak to AI Island Guide
            </a>
        </div>

        <!-- Social Proof (New Layout Feature) -->
        <div class="flex flex-col items-center gap-8 animate-fade-in-up" style="animation-delay: 0.2s;">
            <div class="flex flex-wrap items-center justify-center gap-6">
                <div class="flex items-center gap-3 text-white/90">
                    <div class="flex -space-x-2">
                        <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-green-500 flex items-center justify-center text-xs font-bold text-white">J</div>
                        <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-yellow-400 flex items-center justify-center text-xs font-bold text-black">M</div>
                        <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-green-600 flex items-center justify-center text-xs font-bold text-white">K</div>
                        <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-yellow-500 flex items-center justify-center text-xs font-bold text-black">A</div>
                    </div>
                    <span class="text-sm font-semibold">500+ Happy Travelers</span>
                </div>
                <div class="h-4 w-px bg-white/20 hidden sm:block"></div>
                <div class="flex items-center gap-1">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                    <span class="text-white/90 text-sm font-semibold ml-2">5.0 Star Rating</span>
                </div>
            </div>
            
            <!-- Scroll Down Arrow (Moved here as requested) -->
            <button onclick="document.getElementById('services').scrollIntoView({behavior: 'smooth'})" class="text-white/50 hover:text-white transition-colors animate-bounce cursor-pointer pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
</section>
<!-- AI Assistant Component (Internal to Section 2) -->
<div id="ai-assistant-root"></div>
<script type="text/babel">
    const { useState, useEffect, useRef, useCallback } = React;

    function useLiveApi({ model = "models/gemini-2.0-flash-exp" }) {
        const [isConnected, setIsConnected] = useState(false);
        const [isSpeaking, setIsSpeaking] = useState(false);
        const [error, setError] = useState(null);
        const wsRef = useRef(null);
        const audioContextRef = useRef(null);
        const analyserRef = useRef(null);
        const streamRef = useRef(null);

        const disconnect = useCallback(() => {
            if (wsRef.current) wsRef.current.close();
            if (audioContextRef.current) { audioContextRef.current.close(); audioContextRef.current = null; }
            if (streamRef.current) { streamRef.current.getTracks().forEach(t => t.stop()); streamRef.current = null; }
            setIsConnected(false); setIsSpeaking(false);
        }, []);

        const connect = useCallback(async () => {
            // Level 1 Security: Obfuscated key to prevent simple text discovery
            const _k = "QUl6YVN5Q1dnV2NZdi1paURlQW96dng0bDcwUzRIYTByNURrdkYw";
            const API_KEY = window.GEMINI_API_KEY || atob(_k); 
            
            try {
                setError(null);
                const url = `wss://generativelanguage.googleapis.com/ws/google.ai.generativelanguage.v1alpha.GenerativeService.BiDiGenerateContent?key=${API_KEY}`;
                wsRef.current = new WebSocket(url);
                wsRef.current.onopen = () => { setIsConnected(true); wsRef.current.send(JSON.stringify({ setup: { model } })); };
                wsRef.current.onmessage = (event) => {
                    const data = JSON.parse(event.data);
                    if (data.serverContent?.modelTurn?.parts?.[0]?.inlineData) { setIsSpeaking(true); setTimeout(() => setIsSpeaking(false), 3000); }
                    if (data.error) setError(data.error.message);
                };
                wsRef.current.onerror = () => setError("Connection failed.");
                wsRef.current.onclose = () => setIsConnected(false);
                audioContextRef.current = new (window.AudioContext || window.webkitAudioContext)({ sampleRate: 16000 });
                analyserRef.current = audioContextRef.current.createAnalyser();
                analyserRef.current.fftSize = 256;
                const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                streamRef.current = stream;
                audioContextRef.current.createMediaStreamSource(stream).connect(analyserRef.current);
            } catch (err) { setError(err.message); disconnect(); }
        }, [model, disconnect]);

        return { connect, disconnect, isConnected, isSpeaking, analyserRef, error };
    }

    const VoiceAssistantModal = ({ isOpen, onClose }) => {
      const { connect, disconnect, isConnected, isSpeaking, analyserRef, error } = useLiveApi({});
      const canvasRef = useRef(null);
      const animationRef = useRef(undefined);
      useEffect(() => { if (isOpen) connect(); else disconnect(); return () => disconnect(); }, [isOpen, connect, disconnect]);
      useEffect(() => {
        const draw = () => {
          if (!canvasRef.current || !analyserRef.current) { animationRef.current = requestAnimationFrame(draw); return; }
          const canvas = canvasRef.current; const ctx = canvas.getContext('2d'); if (!ctx) return;
          const bufferLength = analyserRef.current.frequencyBinCount;
          const dataArray = new Uint8Array(bufferLength); analyserRef.current.getByteFrequencyData(dataArray);
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
          gradient.addColorStop(0, '#22c55e'); gradient.addColorStop(1, '#3b82f6');
          ctx.fillStyle = gradient; const barWidth = (canvas.width / bufferLength) * 2.5; let barHeight, x = 0;
          for (let i = 0; i < bufferLength; i++) {
            barHeight = dataArray[i] / 1.8; const y = (canvas.height - barHeight) / 2;
            ctx.fillRect(x, y, barWidth, barHeight); x += barWidth + 1;
          }
          animationRef.current = requestAnimationFrame(draw);
        };
        if (isConnected) draw(); else if (animationRef.current) cancelAnimationFrame(animationRef.current);
        return () => { if (animationRef.current) cancelAnimationFrame(animationRef.current); };
      }, [isConnected]);
      if (!isOpen) return null;
      return (
        <div className="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/70 backdrop-blur-md">
          <div className="relative w-full max-w-lg overflow-hidden bg-white rounded-3xl shadow-2xl animate-fade-in-up border border-gray-100">
            <div className="bg-gradient-to-r from-green-600 to-blue-700 p-6 text-white text-center relative">
              <button onClick={onClose} className="absolute top-4 right-4 text-white/80 hover:text-white transition-colors bg-transparent border-none cursor-pointer text-xl">✕</button>
              <h3 className="text-2xl font-bold uppercase tracking-tighter">JamVenture AI</h3>
              <p className="text-xs opacity-80 uppercase tracking-widest font-semibold mt-1">Irie: Your Island Guide</p>
            </div>
            <div className="p-10 flex flex-col items-center justify-center min-h-[350px]">
              {error ? (
                 <div className="text-center text-red-500 mb-4">
                   <p className="font-bold">{error}</p>
                   <button onClick={() => connect()} className="mt-4 px-6 py-2 bg-gray-100 rounded-full text-sm font-bold text-gray-700 hover:bg-gray-200 transition">Retry</button>
                 </div>
              ) : !isConnected ? (
                <div className="text-center">
                  <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-green-600 mx-auto mb-4"></div>
                  <p className="text-gray-500 font-medium">Connecting to Jamaica...</p>
                </div>
              ) : (
                <>
                  <div className="mb-10 text-center">
                     <div className={`w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mx-auto mb-4 border-2 ${isSpeaking ? 'border-green-500 animate-pulse' : 'border-blue-500'}`}>
                        <svg className={`w-10 h-10 ${isSpeaking ? 'text-green-600' : 'text-blue-600'}`} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                     </div>
                     <p className="text-xl font-bold text-gray-800 mb-2">{isSpeaking ? "Irie is speaking..." : "I'm listening..."}</p>
                     <p className="text-gray-500 text-sm max-w-xs mx-auto italic font-medium">"Wah Gwan! Ask me about airport transfers or our secret waterfall tours."</p>
                  </div>
                  <div className="w-full h-24 bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 mb-8">
                     <canvas ref={canvasRef} width={400} height={100} className="w-full h-full" />
                  </div>
                  <div className="flex gap-4">
                      <button onClick={onClose} className="px-10 py-3 rounded-full bg-red-500 text-white font-bold hover:bg-red-600 transition shadow-lg shadow-red-200">End Session</button>
                  </div>
                </>
              )}
            </div>
            <div className="h-2 bg-gradient-to-r from-yellow-400 via-green-600 to-black"></div>
          </div>
        </div>
      );
    };

    const App = () => {
        const [isOpen, setIsOpen] = useState(false);
        useEffect(() => { window.openAIAssistant = () => setIsOpen(true); }, []);
        return <VoiceAssistantModal isOpen={isOpen} onClose={() => setIsOpen(false)} />;
    };

    ReactDOM.createRoot(document.getElementById('ai-assistant-root')).render(<App />);
</script>

CSS:
/* Tailwind classes handle styling. .animate-fade-in-up defined globally. */


SECTION 3 – Why Us (About)
HTML:
<section id="why-us" class="py-24 bg-white relative overflow-hidden">
    <!-- Decorative Bloom -->
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-30 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-l from-green-500/5 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700 border border-green-200">Why Choose Us</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-slate-900">The JamVenture Difference</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Experience Jamaica with confidence, comfort, and genuine hospitality</p>
        </div>

        <!-- 4-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card 1: Drivers -->
            <div class="group relative h-full">
                <div class="p-8 h-full bg-slate-50 rounded-2xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 rounded-2xl bg-white border border-slate-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Private, JTB-Certified Drivers</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">All our drivers are licensed by the Jamaica Tourist Board, ensuring your safety and peace of mind throughout your journey.</p>
                </div>
            </div>

            <!-- Card 2: Guarantee -->
            <div class="group relative h-full">
                <div class="p-8 h-full bg-slate-50 rounded-2xl border border-slate-200 hover:border-yellow-400/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 rounded-2xl bg-white border border-slate-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Back-to-Ship Guarantee</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Never miss your cruise departure. We guarantee timely return to your ship with our meticulous scheduling and tracking.</p>
                </div>
            </div>

            <!-- Card 3: Custom Itineraries -->
            <div class="group relative h-full">
                <div class="p-8 h-full bg-slate-50 rounded-2xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 rounded-2xl bg-white border border-slate-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Flexible, Custom Itineraries</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Your tour, your way. We craft personalized experiences based on your interests, pace, and preferences.</p>
                </div>
            </div>

            <!-- Card 4: Local Guides -->
            <div class="group relative h-full">
                <div class="p-8 h-full bg-slate-50 rounded-2xl border border-slate-200 hover:border-yellow-400/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 rounded-2xl bg-white border border-slate-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Local-Born Professional Guides</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Experience authentic Jamaica through the eyes of passionate locals who know every hidden gem on the island.</p>
                </div>
            </div>

        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */


SECTION 4 – Services
HTML:
<section id="featured-tours" class="py-24 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700">Featured Experiences</span>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-slate-900">Unforgettable Jamaica Tours</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Explore our most popular private tours, each offering a unique glimpse into Jamaica's natural beauty and vibrant culture</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Tour 1: Blue Hole -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://jamventure.tours/wp-content/uploads/2026/01/Blue-Hole-Secret-Falls-Adventure-JamVenture-Tours.png" alt="Blue Hole & Secret Falls" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            5-6 Hours
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-green-600 transition-colors">Blue Hole & Secret Falls</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-2">Swim in crystal-clear mineral pools and discover hidden waterfalls in the Jamaican jungle.</p>
                    <div class="flex items-end justify-between border-t border-slate-100 pt-4">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Starting From</p>
                            <p class="text-2xl font-extrabold text-yellow-600">$85</p>
                        </div>
                        <a href="https://jamventure.tours/tours-packages/" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 hover:text-yellow-300 text-white text-[13px] font-bold py-[10px] px-[20px] rounded-xl transition-colors group/btn min-w-[120px]">
                            View Tour <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover/btn:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tour 2: Dunn's River -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://jamventure.tours/wp-content/uploads/2026/01/Dunns-River-Falls-Climb-Experience-JamVenture-Tours.png" alt="Dunn's River Falls" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            4-5 Hours
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-green-600 transition-colors">Dunn's River Falls</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-2">Climb Jamaica's most iconic waterfall and experience an unforgettable Caribbean adventure.</p>
                    <div class="flex items-end justify-between border-t border-slate-100 pt-4">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Starting From</p>
                            <p class="text-2xl font-extrabold text-yellow-600">$75</p>
                        </div>
                        <a href="https://jamventure.tours/tours-packages/" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 hover:text-yellow-300 text-white text-[13px] font-bold py-[10px] px-[20px] rounded-xl transition-colors group/btn min-w-[120px]">
                            View Tour <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover/btn:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tour 3: Negril Sunset -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://jamventure.tours/wp-content/uploads/2026/01/Negril-Sunset-Cliffside-Glass-Bottom-Boat-Experience-JamVenture-Tours.png" alt="Negril Sunset Experience" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            6-8 Hours
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-green-600 transition-colors">Negril Sunset Experience</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-2">Watch the legendary Negril sunset from Seven Mile Beach with optional cliff jumping at Rick's Cafe.</p>
                    <div class="flex items-end justify-between border-t border-slate-100 pt-4">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Starting From</p>
                            <p class="text-2xl font-extrabold text-yellow-600">$95</p>
                        </div>
                        <a href="https://jamventure.tours/tours-packages/" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 hover:text-yellow-300 text-white text-[13px] font-bold py-[10px] px-[20px] rounded-xl transition-colors group/btn min-w-[120px]">
                            View Tour <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover/btn:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tour 4: Luminous Lagoon -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://jamventure.tours/wp-content/uploads/2026/01/Luminous-Lagoon-Night-Tour-JamVenture-Jamaica.png" alt="Luminous Lagoon" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-slate-900 shadow-sm">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            3-4 Hours
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-green-600 transition-colors">Luminous Lagoon</h3>
                    <p class="text-slate-500 text-sm mb-6 line-clamp-2">Witness the magic of bioluminescent waters glowing beneath a starlit Jamaican sky.</p>
                    <div class="flex items-end justify-between border-t border-slate-100 pt-4">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Starting From</p>
                            <p class="text-2xl font-extrabold text-yellow-600">$65</p>
                        </div>
                        <a href="https://jamventure.tours/tours-packages/" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 hover:text-yellow-300 text-white text-[13px] font-bold py-[10px] px-[20px] rounded-xl transition-colors group/btn min-w-[120px]">
                            View Tour <svg class="w-3.5 h-3.5 ml-1.5 transition-transform group-hover/btn:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */


SECTION 5 – Transportation Services
HTML:
<section id="transport-services" class="py-24 bg-white relative overflow-hidden">
    <!-- Decorative Gradient -->
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-5 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-l from-green-600 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 rounded-full text-sm font-bold mb-4 bg-green-100 text-green-700">Transportation Services</span>
            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-slate-900">Private Transportation Tours Jamaica</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Reliable, comfortable, and personalized transportation services across the island</p>
        </div>

        <!-- 3-Column Feature Grid (Visual) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- New Feature: Private Taxi Service -->
            <a href="https://jamventure.tours/jamaica-private-taxi-service/" class="block relative rounded-2xl overflow-hidden h-64 md:h-80 group shadow-md hover:shadow-xl transition-all duration-300">
                <img src="https://jamventure.tours/wp-content/uploads/2026/02/JamVenture-Private-Taxi-Service-–-Comfortable-Coastal-Transfers.png" alt="Private Taxi Service" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-8">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">Jamaica Private Taxi Service</h3>
                        <p class="text-white/80 text-sm font-medium">Your Private Link to Jamaican Paradise</p>
                    </div>
                </div>
            </a>

            <!-- Airport Transfer Feature -->
            <div class="relative rounded-2xl overflow-hidden h-64 md:h-80 group shadow-md hover:shadow-xl transition-all duration-300">
                <img src="https://jamventure.tours/wp-content/uploads/2026/01/JamVenture-Private-Airport-Transfers-in-Jamaica.png" alt="Premium airport transfer service" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-8">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">Airport Transfers</h3>
                        <p class="text-white/80 text-sm font-medium">Premium Vehicles • Professional Drivers</p>
                    </div>
                </div>
            </div>
            
            <!-- Cruise Excursion Feature -->
            <div class="relative rounded-2xl overflow-hidden h-64 md:h-80 group shadow-md hover:shadow-xl transition-all duration-300">
                <img src="https://jamventure.tours/wp-content/uploads/2026/01/JamVenture-Cruise-Excursions-in-Jamaica.png" alt="Cruise ship excursions" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-8">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">Cruise Excursions</h3>
                        <p class="text-white/80 text-sm font-medium">All Ports Covered • Back-to-Ship Guarantee</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3-Column Detail Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card 1: Airport Transfers -->
            <div class="p-8 bg-slate-50 rounded-2xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-600 to-green-500 flex items-center justify-center mb-6 shadow-md group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Airport Transfers</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Stress-free private transfers from Montego Bay (MBJ) and Kingston (KIN) airports to any destination in Jamaica.</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Meet & Greet</span>
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Flight Tracking</span>
                </div>
                <a href="#" class="inline-flex items-center text-green-600 font-bold hover:text-green-700 transition-colors text-sm group/link">
                    Learn More <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Card 2: Cruise Transfers -->
            <div class="p-8 bg-slate-50 rounded-2xl border border-slate-200 hover:border-yellow-400/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-slate-800 to-slate-700 flex items-center justify-center mb-6 shadow-md group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Cruise Ship Transfers</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Explore Jamaica from Falmouth, Montego Bay, or Ocho Rios with our guaranteed on-time return service.</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Back-to-Ship</span>
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Port Pickup</span>
                </div>
                <a href="#" class="inline-flex items-center text-green-600 font-bold hover:text-green-700 transition-colors text-sm group/link">
                    Learn More <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Card 3: Hotel Transport -->
            <div class="p-8 bg-slate-50 rounded-2xl border border-slate-200 hover:border-green-500/30 transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl group">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-600 to-green-500 flex items-center justify-center mb-6 shadow-md group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Hotel-to-Hotel</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">Seamless transfers between resorts and hotels across the island with comfortable, air-conditioned vehicles.</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Fixed Rates</span>
                    <span class="px-3 py-1 bg-white border border-slate-100 rounded-full text-xs font-semibold text-slate-500">Direct Travel</span>
                </div>
                <a href="#" class="inline-flex items-center text-green-600 font-bold hover:text-green-700 transition-colors text-sm group/link">
                    Learn More <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */



SECTION 6 – Trust Indicators
HTML:
<section class="py-16 bg-gradient-to-r from-green-600 to-green-700 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-2 rounded-full bg-white/20 text-white text-sm font-semibold mb-4 backdrop-blur-sm">Your Safety, Our Priority</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Trusted by Travelers Worldwide</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Trust Icon 1 -->
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="font-bold text-white mb-1">JTB Licensed</h3>
                <p class="text-white/80 text-sm">Certified Tourist Board</p>
            </div>
            
            <!-- Trust Icon 2 -->
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                </div>
                <h3 class="font-bold text-white mb-1">Red Plate Vehicles</h3>
                <p class="text-white/80 text-sm">Government Approved</p>
            </div>
            
            <!-- Trust Icon 3 -->
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <h3 class="font-bold text-white mb-1">Fully Insured</h3>
                <p class="text-white/80 text-sm">Complete Protection</p>
            </div>
            
            <!-- Trust Icon 4 -->
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                </div>
                <h3 class="font-bold text-white mb-1">5-Star Experience</h3>
                <p class="text-white/80 text-sm">500+ Positive Reviews</p>
            </div>
        </div>
        
        <!-- Checklist -->
        <div class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-4">
             <div class="flex items-center gap-2 text-white/90">
                 <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                 <span class="text-sm font-medium">Air-Conditioned Vehicles</span>
             </div>
             <div class="flex items-center gap-2 text-white/90">
                 <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                 <span class="text-sm font-medium">Professional Drivers</span>
             </div>
             <div class="flex items-center gap-2 text-white/90">
                 <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                 <span class="text-sm font-medium">Fixed Pricing</span>
             </div>
             <div class="flex items-center gap-2 text-white/90">
                 <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                 <span class="text-sm font-medium">24/7 Support</span>
             </div>
             <div class="flex items-center gap-2 text-white/90">
                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                <span class="text-sm font-medium">Free Cancellation</span>
            </div>
        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */


SECTION 7 – Testimonials
HTML:
<section id="testimonials" class="py-24 bg-gradient-to-br from-blue-50 to-white border-b border-slate-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-16 text-slate-900">What Our Guests Say</h2>
        <!-- (Same content as before) -->
        <div class="relative max-w-4xl mx-auto">
            <!-- Testimonial Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-14 relative z-10 text-left">
                
                <!-- Quote Mark -->
                <div class="absolute top-8 left-8 md:top-10 md:left-12">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-green-100 fill-current transform -scale-x-100" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z"/></svg>
                </div>

                <!-- Stars -->
                <div class="flex justify-center mb-8">
                   <div class="flex gap-1 text-yellow-400">
                       <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                       <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                       <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                       <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                       <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                   </div>
                </div>

                <!-- Review Text -->
                <p class="text-lg md:text-xl text-slate-600 italic text-center leading-relaxed mb-10 relative z-10">
                    "The best part of our trip! Our driver was professional, the van was spotless, and we felt so safe. Don't book anyone else!"
                </p>

                <!-- Author -->
                <div class="flex items-center justify-center gap-4">
                    <!-- Avatar Circle -->
                    <div class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center font-bold text-lg shadow-lg">
                        ST
                    </div>
                    <!-- Info -->
                    <div class="text-left">
                        <div class="font-bold text-slate-900 text-base">Sarah T.</div>
                        <div class="text-slate-400 text-xs uppercase tracking-wide">New York, USA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */


SECTION 8 – Final CTA
HTML:
<section class="py-20 md:py-28 bg-slate-50 relative overflow-hidden">
    <!-- Decorative Blobs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-green-100 rounded-full blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-100 rounded-full blur-3xl opacity-50 translate-x-1/2 translate-y-1/2"></div>
    
    <div class="container mx-auto px-6 relative z-10 text-center">
        <span class="inline-block px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-bold mb-6 border border-green-200">Ready to Explore?</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6">Plan Your Jamaica Adventure <span class="text-green-600">Today</span></h2>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">Whether you're arriving by plane or cruise ship, let our experienced team create the perfect Jamaican experience for you and your group.</p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-10">

            <a href="https://wa.me/+18768878953" class="inline-flex items-center justify-center whitespace-nowrap bg-green-600 hover:bg-green-700 text-white hover:text-yellow-400 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(34,197,94,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 w-full sm:w-auto group">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Chat via WhatsApp
            </a>
            <a href="https://agent.jotform.com/019c3064b8bc72b89bf0a603d8409bf2a573/voice" class="inline-flex items-center justify-center whitespace-nowrap bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(79,70,229,0.4)] font-bold tracking-wide h-16 rounded-xl px-10 text-lg gap-3 w-full sm:w-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                Speak to AI Island Guide
            </a>
        </div>
        
        <div class="flex items-center justify-center gap-2 text-slate-500 font-medium">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
            <span>Or call us directly:</span>
            <a href="tel:+18761234567" class="text-green-600 hover:underline">+1 (876) 123-4567</a>
        </div>
    </div>
</section>

CSS:
/* Tailwind classes handle styling. */


SECTION 9 – Footer
HTML:
<footer class="bg-slate-900 text-white pt-10">
    <!-- Top Badges Row -->
    <div class="border-b border-white/10">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16">
                <!-- Badge 1 -->
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /></svg>
                    <div>
                        <p class="font-bold text-base">JTB Licensed</p>
                        <p class="text-xs text-slate-400">Official Certification</p>
                    </div>
                </div>
                <!-- Badge 2 -->
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                    <div>
                        <p class="font-bold text-base">Red Plate Vehicles</p>
                        <p class="text-xs text-slate-400">Fully Insured</p>
                    </div>
                </div>
                <!-- Badge 3 -->
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" /></svg>
                    <div>
                        <p class="font-bold text-base">5-Star Experience</p>
                        <p class="text-xs text-slate-400">500+ Reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Links -->
    <div class="container mx-auto px-6 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            
            <!-- Column 1: Brand Info -->
            <div class="lg:col-span-1">
                <a class="inline-block mb-6" href="#">
                    <div class="text-3xl font-bold">Jam<span class="text-green-500">Venture</span></div>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    JamVenture specializes in private transportation tours in Jamaica, offering safe, reliable, and customized island experiences. Discover Jamaica your way with our JTB-certified drivers and local-born professional guides.
                </p>
                <!-- Social Icons -->
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-green-600 transition-colors text-white" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-green-600 transition-colors text-white" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-green-600 transition-colors text-white" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-green-600 transition-colors text-white" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Tours & Packages</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Airport Transfers</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Cruise Excursions</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Custom Tours</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">About Us</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Contact</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">FAQ</a></li>
                </ul>
            </div>

            <!-- Column 3: Popular Tours -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white">Popular Tours</h4>
                <ul class="space-y-3 text-sm">
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Blue Hole & Secret Falls</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Dunn's River Falls</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Negril Sunset Experience</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Luminous Lagoon</a></li>
                    <li><a class="text-slate-400 hover:text-green-500 transition-colors" href="#">Shore Excursions</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Us -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white">Contact Us</h4>
                <div class="space-y-4">
                    <a href="tel:+18761234567" class="flex items-start gap-3 text-slate-400 hover:text-green-500 transition-colors">
                        <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <div>
                            <p class="text-sm font-semibold">+1 (876) 123-4567</p>
                            <p class="text-xs opacity-70">24/7 Support</p>
                        </div>
                    </a>
                     <a href="mailto:info@jamventure.tours" class="flex items-start gap-3 text-slate-400 hover:text-green-500 transition-colors">
                        <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path><rect width="20" height="16" x="2" y="4" rx="2"></rect></svg>
                        <div>
                            <p class="text-sm font-semibold">info@jamventure.tours</p>
                            <p class="text-xs opacity-70">Email Anytime</p>
                        </div>
                    </a>
                     <div class="flex items-start gap-3 text-slate-400">
                        <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <div>
                            <p class="text-sm font-semibold">Montego Bay, Jamaica</p>
                            <p class="text-xs opacity-70">Island-wide Service</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-white/10 bg-slate-950/30">
        <div class="container mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-500">
                <p>&copy; 2026 JamVenture. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="hover:text-green-500 transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-green-500 transition-colors" href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

CSS:
/* Tailwind classes handle styling. */


SECTION 11 – Fixed Elements
HTML:
<!-- Sticky Book Now Button -->
<div class="fixed bottom-6 right-6 z-50 transition-all duration-500 opacity-100 translate-y-0">
    <a href="https://wa.me/+18768878953">
        <button class="inline-flex items-center justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-gradient-to-r from-green-600 to-yellow-500 text-white hover:brightness-110 shadow-lg hover:shadow-xl font-bold h-14 px-8 text-base rounded-full gap-2 animate-bounce-subtle">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 2v4m8-4v4m-9 8h10M3 10h18M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z"></path></svg>
            <span class="hidden sm:inline">Book Your Private Tour</span>
            <span class="sm:hidden">Book Now</span>
        </button>
    </a>
</div>

CSS:
/* Tailwind classes handle styling. */
/* Custom bounce animation for the button logic can be added in global styles if needed, or use simple standard tailwind animate-bounce */





CSS:
/* Tailwind classes + .hidden-modal defined globally */
