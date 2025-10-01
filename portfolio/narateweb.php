<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narrated Professional Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        section {
            min-height: 100vh;
            padding: 80px 20px;
        }

        #section1 {
            background: #f8f9fa;
        }

        #section2 {
            background: #e9ecef;
        }

        #section3 {
            background: #f8f9fa;
        }

        #section4 {
            background: #e9ecef;
        }

        .narration-controls {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 10px 15px;
        }

        .highlight {
            outline: 4px solid #0d6efd;
            background-color: #e7f1ff !important;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Pro Narrated Site</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container-fluid">

        <section id="section1">
            <div class="container text-center">
                <h1 class="display-4">Welcome</h1>
                <p class="lead">This is the home section of our website. It introduces visitors to what we do and sets the tone for the rest of the site.</p>
            </div>
        </section>

        <section id="section2">
            <div class="container text-center">
                <h1 class="display-4">About Us</h1>
                <p class="lead">We are a company dedicated to building innovative web solutions with accessibility in mind. Our goal is to make technology usable by everyone.</p>
            </div>
        </section>

        <section id="section3">
            <div class="container text-center">
                <h1 class="display-4">Services</h1>
                <p class="lead">We provide professional web development, mobile app development, and cloud integration services tailored to our clients' needs.</p>
            </div>
        </section>

        <section id="section4">
            <div class="container text-center">
                <h1 class="display-4">Contact</h1>
                <p class="lead">You can reach us via email or phone. Our team is always ready to provide guidance and support whenever you need it.</p>
            </div>
        </section>

    </main>

    <!-- Narration Controls -->
    <div class="narration-controls">
        <button class="btn btn-success btn-sm me-1" onclick="startNarration()">▶️ Start</button>
        <button class="btn btn-warning btn-sm me-1" onclick="pauseNarration()">⏸ Pause</button>
        <button class="btn btn-info btn-sm me-1" onclick="resumeNarration()">⏯ Resume</button>
        <button class="btn btn-danger btn-sm" onclick="stopNarration()">⏹ Stop</button>
    </div>

    <!-- JavaScript -->
    <script>
        let isNarrating = false;
        let voices = [];
        let currentUtterance = null;
        let currentIndex = 0;
        const sections = document.querySelectorAll("section");

        // Load available voices
        function loadVoices() {
            voices = window.speechSynthesis.getVoices();
        }
        window.speechSynthesis.onvoiceschanged = loadVoices;

        function getSmoothVoice() {
            // Try to find a natural English voice
            return voices.find(v => v.name.includes("Google US English") || v.name.includes("Microsoft")) ||
                voices.find(v => v.lang.startsWith("en")) ||
                null;
        }

        function startNarration() {
            if (isNarrating) return;
            isNarrating = true;
            currentIndex = 0;
            narrateNext();
        }

        function narrateNext() {
            if (!isNarrating || currentIndex >= sections.length) {
                isNarrating = false;
                return;
            }

            const text = sections[currentIndex].innerText;
            currentUtterance = new SpeechSynthesisUtterance(text);

            // Apply a smooth voice
            const voice = getSmoothVoice();
            if (voice) currentUtterance.voice = voice;

            currentUtterance.rate = 1; // normal speed
            currentUtterance.pitch = 1; // normal pitch

            // Highlight current section
            sections.forEach(sec => sec.classList.remove("highlight"));
            sections[currentIndex].classList.add("highlight");
            sections[currentIndex].scrollIntoView({
                behavior: "smooth",
                block: "center"
            });

            // When finished, move to next
            currentUtterance.onend = () => {
                currentIndex++;
                narrateNext();
            };

            window.speechSynthesis.speak(currentUtterance);
        }

        function pauseNarration() {
            if (window.speechSynthesis.speaking) {
                window.speechSynthesis.pause();
            }
        }

        function resumeNarration() {
            if (window.speechSynthesis.paused) {
                window.speechSynthesis.resume();
            }
        }

        function stopNarration() {
            isNarrating = false;
            window.speechSynthesis.cancel();
            sections.forEach(sec => sec.classList.remove("highlight"));
        }
    </script>
</body>

</html>