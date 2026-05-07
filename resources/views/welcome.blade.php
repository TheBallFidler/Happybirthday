<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Happy 19th Birthday! ✨</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
        <style>
            :root {
                --pink: #FFD1DC;
                --lilac: #E6E6FA;
                --gold: #D4AF37;
                --cream: #FFFDD0;
                --text: #4A4A4A;
                --glass: rgba(255, 255, 255, 0.4);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Outfit', sans-serif;
                background: linear-gradient(135deg, var(--lilac), var(--pink), var(--cream));
                background-attachment: fixed;
                color: var(--text);
                overflow-x: hidden;
            }

            /* Animations */
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes float {
                0% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
                100% { transform: translateY(0px) rotate(0deg); }
            }

            .fade-in {
                animation: fadeIn 1.2s ease-out forwards;
            }

            /* Container */
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            /* Hero Section */
            .hero {
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                position: relative;
            }

            .glass-card {
                background: var(--glass);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                border-radius: 30px;
                padding: 60px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                max-width: 800px;
                z-index: 10;
            }

            h1 {
                font-family: 'Playfair Display', serif;
                font-size: 4.5rem;
                color: var(--text);
                margin-bottom: 20px;
                line-height: 1.1;
            }

            .age {
                font-size: 1.5rem;
                font-weight: 300;
                letter-spacing: 5px;
                text-transform: uppercase;
                margin-bottom: 10px;
                color: var(--gold);
            }

            .subtitle {
                font-size: 1.2rem;
                opacity: 0.8;
                max-width: 600px;
                margin: 0 auto;
            }

            /* Photo Gallery */
            .gallery-title {
                text-align: center;
                font-family: 'Playfair Display', serif;
                font-size: 3rem;
                margin: 100px 0 50px;
            }

            .gallery-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-bottom: 100px;
            }

            .photo-card {
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                aspect-ratio: 1 / 1.2;
                background: var(--glass);
            }

            .photo-card:hover {
                transform: scale(1.05);
            }

            .photo-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .photo-placeholder {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100%;
                color: var(--text);
                opacity: 0.5;
                font-style: italic;
            }

            /* Message Section */
            .message-section {
                text-align: left;
                padding: 60px 40px;
                background: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(5px);
                border-radius: 30px;
                margin-bottom: 100px;
                border: 1px solid rgba(255, 255, 255, 0.4);
                box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            }

            .message-text {
                font-size: 1.2rem;
                line-height: 1.8;
                max-width: 900px;
                margin: 0 auto;
                font-weight: 400;
                white-space: pre-line;
            }

            /* Floating Decorations */
            .decoration {
                position: fixed;
                pointer-events: none;
                z-index: 1;
                opacity: 0.6;
                animation: float 6s ease-in-out infinite;
            }

            /* Footer */
            footer {
                text-align: center;
                padding: 40px;
                font-weight: 300;
                font-size: 0.9rem;
                letter-spacing: 2px;
            }

            /* Confetti */
            .confetti {
                position: absolute;
                width: 10px;
                height: 10px;
                background-color: #f2d74e;
                position: absolute;
                z-index: 1000;
                animation: confetti-fall 4s linear infinite;
            }

            @keyframes confetti-fall {
                0% { transform: translateY(-10vh) rotate(0deg); opacity: 1; }
                100% { transform: translateY(110vh) rotate(360deg); opacity: 0; }
            }

            .cat-rain {
                position: fixed;
                font-size: 2.5rem;
                z-index: 1001;
                pointer-events: none;
                animation: cat-fall 3s linear forwards;
            }

            @keyframes cat-fall {
                0% { transform: translateY(-10vh) rotate(0deg); opacity: 1; }
                100% { transform: translateY(110vh) rotate(720deg); opacity: 0; }
            }

            .celebrate-btn {
                background: white;
                color: var(--text);
                border: 2px solid var(--gold);
                padding: 15px 40px;
                border-radius: 50px;
                font-family: 'Outfit', sans-serif;
                font-size: 1.1rem;
                cursor: pointer;
                transition: all 0.3s ease;
                margin-top: 30px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            }

            .celebrate-btn:hover {
                background: var(--gold);
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }

            @media (max-width: 768px) {
                h1 { font-size: 3rem; }
                .glass-card { padding: 40px 20px; }
            }
        </style>
    </head>
    <body>
        <!-- Floating Decorations -->
        <div class="decoration" style="top: 10%; left: 5%; font-size: 3rem;">✨</div>
        <div class="decoration" style="top: 20%; right: 10%; font-size: 4rem; animation-delay: 1s;">🌸</div>
        <div class="decoration" style="bottom: 15%; left: 10%; font-size: 2.5rem; animation-delay: 2s;">💖</div>
        <div class="decoration" style="top: 40%; right: 5%; font-size: 3.5rem; animation-delay: 1.5s;">🍰</div>

        <div class="container">
            <section class="hero fade-in">
                <div class="glass-card">
                    <p class="age">Our Birthday Girl • Turning 19</p>
                    <h1>Happy Birthday, Denise!</h1>
                    <p class="subtitle">To another year of laughter, growth, and being the amazing person you are. You deserve the world and more! ✨</p>
                    <button class="celebrate-btn" onclick="celebrate()">Press to Celebrate! 🎊</button>
                </div>
            </section>

            <h2 class="gallery-title fade-in" style="animation-delay: 0.3s;">A REALLY pretty girl</h2>
            <div class="gallery-grid fade-in" style="animation-delay: 0.5s;">
                <!-- Photo 1 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo1.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 1">
                    <div class="photo-placeholder" style="display:none;">
                        <span>Photo 1</span>
                    </div>
                </div>
                <!-- Photo 2 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo2.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 2">
                    <div class="photo-placeholder" style="display:none;">
                        <span>Photo 2</span>
                    </div>
                </div>
                <!-- Photo 3 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo3.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 3">
                    <div class="photo-placeholder" style="display:none;">
                        <span>Photo 3</span>
                    </div>
                </div>
                <!-- Photo 4 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo4.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 4">
                    <div class="photo-placeholder" style="display:none;">
                        <span>Photo 4</span>
                    </div>
                </div>
                <!-- Photo 5 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo5.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 5">
                    <div class="photo-placeholder" style="display:none;"><span>Photo 5</span></div>
                </div>
                <!-- Photo 6 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo6.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 6">
                    <div class="photo-placeholder" style="display:none;"><span>Photo 6</span></div>
                </div>
                <!-- Photo 7 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo7.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 7">
                    <div class="photo-placeholder" style="display:none;"><span>Photo 7</span></div>
                </div>
                <!-- Photo 8 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo8.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 8">
                    <div class="photo-placeholder" style="display:none;"><span>Photo 8</span></div>
                </div>
                <!-- Photo 9 -->
                <div class="photo-card">
                    <img src="{{ asset('assets/images/photo9.jpg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" alt="Birthday Photo 9">
                    <div class="photo-placeholder" style="display:none;"><span>Photo 9</span></div>
                </div>
            </div>

            <section class="message-section fade-in" style="animation-delay: 0.8s;">
                <h2 class="gallery-title" style="margin-top: 0; text-align: left; font-size: 2.5rem;">A Little Note...</h2>
                <p class="message-text">
                    Happy 19th! ✨ To the most genuine person I know. 🤍 I’ll always cherish every moment we spend together, even the ones that might seem small—like just talking or laughing on a call. Honestly, just talking to you makes my entire day.

                    I’ve always loved how incredibly real you are. Even when you’re throwing insults my way, I always just end up laughing because I know it's just you! Your humor is one of a kind (even if it’s hard to tell when you’re joking sometimes, haha!). Please know that every time I compliment you, I genuinely mean it from the bottom of my heart.

                    I also love the way you think—you’re so practical, yet you never forget to be thoughtful. I’m so grateful every time you pick up. I know you’re careful about who you trust, so I truly appreciate the time and trust you give me. You really are an amazing person, Denise. Even though we haven’t met in person yet, I can already tell I’d never want to stop hanging out with you—it’s already so hard to say bye on our calls! 🥹

                    And please, never change. You do NOT have a bad personality (no matter what you thought once!). Anyone who says otherwise is just nuts. Anyway, enjoy the rest of your special day! Eat lots of good food and please, don't drink *too* much coffee! ☕️ 

                    (And on god, if you say 'Yeah I know' while reading this, I’m actually gonna crash out 😂)

                    Happy Birthday, Denise! 🎂 I know you’re going to be busy, so I’ll leave it at that for now. Have the best day ever! 👋✨
                </p>
            </section>
        </div>

        <footer>
            MADE WITH 💖 FOR YOUR SPECIAL DAY
        </footer>

        <script>
            // Create Confetti
            function createConfetti() {
                const colors = ['#f2d74e', '#95c3de', '#ff9a91', '#c1e1c1', '#ffffff'];
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.animationDelay = Math.random() * 2 + 's';
                    confetti.style.width = Math.random() * 10 + 5 + 'px';
                    confetti.style.height = confetti.style.width;
                    
                    // Remove after animation to prevent sticking
                    confetti.addEventListener('animationend', () => confetti.remove());
                    document.body.appendChild(confetti);
                }
            }

            function celebrate() {
                createConfetti();
                rainCats();
            }

            function rainCats() {
                const cats = ['🐱', '😸', '😻', '😽', '🐈', '🐾'];
                const sound = new Audio('https://actions.google.com/sounds/v1/animals/cat_meow.ogg');
                sound.play().catch(e => console.log("Sound blocked by browser"));

                for (let i = 0; i < 15; i++) {
                    setTimeout(() => {
                        const cat = document.createElement('div');
                        cat.className = 'cat-rain';
                        cat.innerText = cats[Math.floor(Math.random() * cats.length)];
                        cat.style.left = Math.random() * 100 + 'vw';
                        cat.style.animationDuration = (Math.random() * 2 + 2) + 's';
                        cat.addEventListener('animationend', () => cat.remove());
                        document.body.appendChild(cat);
                    }, i * 100);
                }
            }

            window.onload = createConfetti;
        </script>
    </body>
</html>
