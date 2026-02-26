console.log("%c JamVenture AI PRO: Loading 1.1.0...", "background: #3b82f6; color: white; font-weight: bold; padding: 2px 4px;");

// Detailed diagnostic function
window.runIrieDiagnostics = async () => {
    console.group("JamVenture AI PRO Diagnostic Report");
    const apiKey = window.JAMVENTURE_CONFIG?.apiKey;
    console.log("1. React found:", !!window.React);
    console.log("2. ReactDOM found:", !!window.ReactDOM);
    console.log("3. Config found:", !!window.JAMVENTURE_CONFIG);
    if (window.JAMVENTURE_CONFIG) {
        console.log("4. API Key stored:", !!apiKey);
        console.log("5. Protocol Secure (HTTPS):", window.JAMVENTURE_CONFIG.isHttps);
        console.log("6. Version:", window.JAMVENTURE_CONFIG.version);
    }

    let keyTest = "Testing...";
    if (apiKey) {
        try {
            const res = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${apiKey}`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ contents: [{ parts: [{ text: "ping" }] }] })
            });
            const data = await res.json();
            if (res.ok) keyTest = "PASSED (Key is valid)";
            else keyTest = `FAILED: ${data.error?.message || "Unknown API Error"}`;
        } catch (e) { keyTest = `FAILED: Could not reach Google Servers (${e.message})`; }
    } else { keyTest = "MISSING (No key found in settings)"; }

    console.log("7. API Key Test (REST):", keyTest);
    console.log("8. DOM ReadyState:", document.readyState);
    console.groupEnd();

    if (msg.includes("PASSED")) {
        msg = "✅ SYSTEM READY: Your API Key and HTTPS are working perfectly!\n\n";
        msg += "IF THE BUTTON STILL SHOWS AN ERROR:\n";
        msg += "Your web host (e.g. SiteGround, Bluehost, WP Engine) is likely blocking 'WebSockets'.\n\n";
        msg += "FIX: Contact your host support & say:\n";
        msg += "'Please allow outgoing WebSocket (WSS) connections to generativelanguage.googleapis.com on port 443 for my AI assistant.'";
    }
    alert(msg);
};

// Stub for click feedback
window.openAIAssistant = () => {
    window.runIrieDiagnostics();
};

const { useState, useEffect, useRef, useCallback } = React || {};

function useLiveApi({ model = "models/gemini-2.0-flash-exp", apiKey }) {
    const [isConnected, setIsConnected] = useState(false);
    const [isSpeaking, setIsSpeaking] = useState(false);
    const [error, setError] = useState(null);

    const wsRef = useRef(null);
    const audioContextRef = useRef(null);
    const analyserRef = useRef(null);
    const streamRef = useRef(null);

    const disconnect = useCallback(() => {
        if (wsRef.current) wsRef.current.close();
        if (audioContextRef.current && audioContextRef.current.state !== 'closed') {
            audioContextRef.current.close().catch(() => { });
        }
        if (streamRef.current) streamRef.current.getTracks().forEach(t => t.stop());
        setIsConnected(false); setIsSpeaking(false);
    }, []);

    const connect = useCallback(async () => {
        if (!apiKey) { setError("No API Key configured."); return; }
        try {
            setError(null);
            const url = `wss://generativelanguage.googleapis.com/ws/google.ai.generativelanguage.v1alpha.GenerativeService.BiDiGenerateContent?key=${apiKey}`;
            wsRef.current = new WebSocket(url);
            wsRef.current.onopen = () => {
                setIsConnected(true);
                wsRef.current.send(JSON.stringify({ setup: { model } }));
            };
            wsRef.current.onmessage = async (e) => {
                try {
                    const data = JSON.parse(e.data);
                    if (data.serverContent?.modelTurn?.parts?.[0]?.inlineData) {
                        setIsSpeaking(true);
                        setTimeout(() => setIsSpeaking(false), 3000);
                    }
                    if (data.error) {
                        console.error("JamVenture AI: API Error", data.error);
                        setError("API Error: " + data.error.message);
                        disconnect();
                    }
                } catch (err) {
                    console.error("JamVenture AI: Parse Error", err);
                }
            };

            wsRef.current.onerror = (e) => {
                console.error("JamVenture AI: WebSocket Error", e);
                setError("Connection failed. This usually means the API Key is invalid or restricted incorrectly.");
                disconnect();
            };

            wsRef.current.onclose = (e) => {
                console.log("JamVenture AI: Connection closed", e.code, e.reason);
                if (e.code === 1006) {
                    setError("Connection closed (1006). This often happens if the API key is restricted to the wrong domain.");
                }
                setIsConnected(false);
            };

            audioContextRef.current = new (window.AudioContext || window.webkitAudioContext)({ sampleRate: 16000 });
            analyserRef.current = audioContextRef.current.createAnalyser();
            analyserRef.current.fftSize = 256;
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            streamRef.current = stream;
            audioContextRef.current.createMediaStreamSource(stream).connect(analyserRef.current);
        } catch (err) { setError(err.message); disconnect(); }
    }, [model, disconnect, apiKey]);

    return { connect, disconnect, isConnected, isSpeaking, analyserRef, error };
}

const VoiceAssistantModal = ({ isOpen, onClose, apiKey }) => {
    const { connect, disconnect, isConnected, isSpeaking, analyserRef, error } = useLiveApi({ apiKey });
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
            const barWidth = (canvas.width / bufferLength) * 2.5; let barHeight, x = 0;
            for (let i = 0; i < bufferLength; i++) {
                barHeight = dataArray[i] / 1.5;
                const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
                gradient.addColorStop(0, '#22c55e'); gradient.addColorStop(1, '#3b82f6');
                ctx.fillStyle = gradient;
                const y = (canvas.height - barHeight) / 2;
                ctx.fillRect(x, y, barWidth, barHeight); x += barWidth + 2;
            }
            animationRef.current = requestAnimationFrame(draw);
        };
        if (isConnected) draw(); else if (animationRef.current) cancelAnimationFrame(animationRef.current);
        return () => { if (animationRef.current) cancelAnimationFrame(animationRef.current); };
    }, [isConnected]);

    if (!isOpen) return null;

    return React.createElement('div', { className: "fixed inset-0 z-[100000] flex items-center justify-center p-4 bg-black/70 backdrop-blur-md font-sans" },
        React.createElement('div', { className: "relative w-full max-w-lg overflow-hidden bg-white rounded-3xl shadow-2xl animate-fade-in-up border border-gray-100" },
            React.createElement('div', { className: "bg-gradient-to-r from-green-600 to-blue-700 p-6 text-white text-center relative" },
                React.createElement('button', { onClick: onClose, className: "absolute top-4 right-4 text-white hover:scale-110 transition bg-transparent border-none cursor-pointer text-xl" }, "✕"),
                React.createElement('h3', { className: "text-2xl font-bold uppercase tracking-tighter m-0" }, "JamVenture AI"),
                React.createElement('p', { className: "text-xs opacity-80 uppercase tracking-widest font-semibold mt-1 mb-0" }, "Irie: Your Island Guide")
            ),
            React.createElement('div', { className: "p-10 flex flex-col items-center justify-center min-h-[350px]" },
                error ? (
                    React.createElement('div', { className: "text-center text-red-500 mb-4" },
                        React.createElement('p', { className: "font-bold" }, error),
                        React.createElement('button', { onClick: () => connect(), className: "mt-4 px-6 py-2 bg-gray-100 rounded-full text-sm font-bold text-gray-700 hover:bg-gray-200 transition border-none cursor-pointer" }, "Retry")
                    )
                ) : !isConnected ? (
                    React.createElement('div', { className: "text-center" },
                        React.createElement('div', { className: "animate-spin rounded-full h-12 w-12 border-b-2 border-green-600 mx-auto mb-4" }),
                        React.createElement('p', { className: "text-gray-500 font-medium" }, "Connecting to Jamaica...")
                    )
                ) : (
                    React.createElement(React.Fragment, null,
                        React.createElement('div', { className: "mb-10 text-center" },
                            React.createElement('div', { className: `w-20 h-20 rounded-full bg-green-50 flex items-center justify-center mx-auto mb-4 border-2 transition-all ${isSpeaking ? 'border-green-500 scale-110 shadow-lg' : 'border-blue-500'}` },
                                React.createElement('svg', { className: `w-10 h-10 ${isSpeaking ? 'text-green-600' : 'text-blue-600'}`, fill: "none", stroke: "currentColor", viewBox: "0 0 24 24" },
                                    React.createElement('path', { strokeLinecap: "round", strokeLinejoin: "round", strokeWidth: 2, d: "M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" })
                                )
                            ),
                            React.createElement('p', { className: "text-xl font-bold text-gray-800 mb-2 m-0" }, isSpeaking ? "Irie is speaking..." : "I'm listening..."),
                            React.createElement('p', { className: "text-gray-500 text-sm max-w-xs mx-auto italic font-medium m-0" }, "\"Wah Gwan! Ask me about airport transfers or our secret waterfall tours.\"")
                        ),
                        React.createElement('div', { className: "w-full h-24 bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 mb-8" },
                            React.createElement('canvas', { ref: canvasRef, width: 400, height: 100, className: "w-full h-full" })
                        ),
                        React.createElement('div', { className: "flex gap-4" },
                            React.createElement('button', { onClick: onClose, className: "px-10 py-3 rounded-full bg-red-500 text-white font-bold hover:bg-red-600 transition shadow-lg shadow-red-200 border-none cursor-pointer" }, "End Session")
                        )
                    )
                )
            ),
            React.createElement('div', { className: "h-2 bg-gradient-to-r from-yellow-400 via-green-600 to-black" })
        )
    );
};

window.initIrieAssistant = (config) => {
    const container = document.getElementById('irie-assistant-mount');
    if (!container) return;
    const Root = () => {
        const [isOpen, setIsOpen] = useState(false);
        useEffect(() => {
            window.openAIAssistant = () => setIsOpen(true);
            const badge = document.getElementById('irie-status-badge');
            if (badge) { badge.innerText = "Online"; badge.style.background = "#dcfce7"; badge.style.color = "#166534"; }
        }, []);
        return React.createElement(VoiceAssistantModal, { isOpen: isOpen, onClose: () => setIsOpen(false), apiKey: config.apiKey });
    };
    ReactDOM.createRoot(container).render(React.createElement(Root));
};

(function () {
    let retries = 0;
    const check = () => {
        if (window.JAMVENTURE_CONFIG && window.React && window.ReactDOM) {
            if (!document.getElementById('irie-assistant-mount')) {
                const div = document.createElement('div'); div.id = 'irie-assistant-mount'; document.body.appendChild(div);
            }
            window.initIrieAssistant(window.JAMVENTURE_CONFIG);
        } else if (retries < 40) { retries++; setTimeout(check, 1000); }
    };
    if (document.readyState === 'complete') check(); else window.addEventListener('load', check);
})();
