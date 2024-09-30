<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeCafe - Master Your Coding Skills</title>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@400;700&family=Rubik+One&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #14919b;
            --secondary-color: #0b6477;
            --dark-bg: #16263a;
            --light-bg: #213a57;
            --text-light: #fff;
            --text-dark: #333;
            --accent-green: #80ed99;
            --accent-blue: #0ad1c8;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
    margin: 0;
    font-family: 'KoHo', sans-serif;
    background-image: url(../Images/);
    background-size: cover;
}

.hero {
    position: relative;
    color: white;
    text-align: center;
    padding: 50px 20px;
    background-color: rgba(27, 27, 27, 0.8); 
}
        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 32px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: var(--primary-color);
            color: var(--text-light);
            border: 2px solid var(--primary-color);
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: transparent;
            color: var(--primary-color);
        }
        .btn-secondary {
            background-color: transparent;
            color: var(--text-light);
            border: 2px solid var(--text-light);
        }
        .btn-secondary:hover,
        .btn-secondary:focus {
            background-color: var(--text-light);
            color: var(--dark-bg);
        }
        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .home {
            background-color: var(--text-light);
        }
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            text-align: center;
            overflow: hidden;
        }
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 0 20px;
        }
        .hero-title {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: 'Rubik One', sans-serif;
        }
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        .header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1rem 0;
    background-color: transparent; 
    z-index: 10;
}
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            width: 150px;
        }
        .nav-list {
            display: flex;
            list-style-type: none;
        }
        .nav-item:not(:last-child) {
            margin-right: 1.5rem;
        }
        .nav-link {
            color: var(--text-light);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .nav-link:hover,
        .nav-link:focus {
            color: var(--accent-blue);
        }
        .features {
            background-color: var(--dark-bg);
            color: var(--text-light);
            padding: 4rem 0;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .feature-card {
            background-color: var(--light-bg);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--accent-blue);
        }
        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--accent-green);
        }
        .contests {
            background-color: var(--light-bg);
            color: var(--text-light);
            padding: 4rem 0;
        }
        .contests-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .contest-card {
            background-color: var(--dark-bg);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .contest-card:hover {
            transform: scale(1.05);
        }
        .contest-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .contest-content {
            padding: 1.5rem;
        }
        .contest-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .contest-time {
            font-size: 1rem;
            color: var(--accent-blue);
            margin-bottom: 1rem;
        }
        .testimonials {
            background-color: var(--text-light);
            padding: 4rem 0;
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .testimonial-card {
            background-color: var(--light-bg);
            border-radius: 15px;
            padding: 2rem;
            color: var(--text-light);
            text-align: center;
        }
        .testimonial-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            object-fit: cover;
        }
        .testimonial-name {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--accent-green);
        }
        .testimonial-text {
            font-style: italic;
        }
        .cta {
            background-color: var(--secondary-color);
            color: var(--text-light);
            text-align: center;
            padding: 4rem 0;
        }
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .footer {
            background-color: var(--dark-bg);
            color: var(--text-light);
            padding: 2rem 0;
            text-align: center;
        }
        .social-links {
            margin-bottom: 1rem;
        }
        .social-link {
            display: inline-block;
            margin: 0 0.5rem;
            font-size: 1.5rem;
            color: var(--text-light);
            transition: color 0.3s ease;
        }
        .social-link:hover,
        .social-link:focus {
            color: var(--accent-blue);
        }
        .footer-links {
            margin-bottom: 1rem;
        }
        .footer-link {
            color: var(--text-light);
            text-decoration: none;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }
        .footer-link:hover,
        .footer-link:focus {
            color: var(--accent-blue);
        }
        .copyright {
            font-size: 0.9rem;
        }
        @media screen and (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            .hero-subtitle {
                font-size: 1.2rem;
            }
            .header-content {
                flex-direction: column;
            }
            .nav-list {
                margin-top: 1rem;
            }
            .nav-item:not(:last-child) {
                margin-right: 1rem;
            }
        }
    </style>
</head>
<body>
    <main class="home">
        <section class="hero">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2fd467125fcb1cb706eb8be90b8868d9696fdcdac4698335b8b8fa660557889d?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Coding background" class="hero-background">
            <header class="header">
                <div class="container header-content">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/250a2846d74b4d31b41134983e6c149373edaa9178455afbc4da1efcedc4afa5?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="CodeCafe Logo" class="logo">
                    <nav>
                        <ul class="nav-list">
                            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Catalog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contests</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Problem Set</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Ranking</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="hero-content">
                <h1 class="hero-title">MASTER YOUR CODING SKILLS</h1>
                <p class="hero-subtitle">Join the leading platform for competitive programming. Compete in challenges, solve problems, and improve your coding skills.</p>
                <div class="cta-container">
                    <a href="#" class="btn btn-primary">Join a Contest Now</a>
                    <a href="#" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <h2 class="section-title">Why Choose Us?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">📚</i>
                        <h3 class="feature-title">Vast Problem Library</h3>
                        <p>Solve a diverse range of problems across various languages & topics.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">🏆</i>
                        <h3 class="feature-title">Live Contests</h3>
                        <p>Compete in real-time with global coders.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">🎓</i>
                        <h3 class="feature-title">Interactive Tutorials</h3>
                        <p>Enhance your skills through interactive tutorials, allowing you to learn through hands-on learning.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">🧠</i>
                        <h3 class="feature-title">Expert Solutions</h3>
                        <p>Learn from expert solutions after contests.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">📊</i>
                        <h3 class="feature-title">Detailed Analytics</h3>
                        <p>Track your performance and improve.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">🎯</i>
                        <h3 class="feature-title">Custom Contests</h3>
                        <p>Create and participate in custom contests tailored to your preferred difficulty and topics.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">👥</i>
                        <h3 class="feature-title">Community Support</h3>
                        <p>Join a supportive community to share knowledge and grow.</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon" aria-hidden="true">🏅</i>
                        <h3 class="feature-title">Global Leaderboard</h3>
                        <p>Participate in contests, climb the leaderboard, and earn recognition in the programming community.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contests">
            <div class="container">
                <h2 class="section-title">Upcoming Contests</h2>
                <div class="contests-grid">
                    <div class="contest-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/259a78637362a1163ed885f4f1a45a30a98ea20ccec3b07bd2f8061e51f505f9?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Bi-Weekly Contest #19" class="contest-image">
                        <div class="contest-content">
                            <h3 class="contest-title">Bi-Weekly Contest #19</h3>
                            <p class="contest-time">3 Days 12 Hours Left</p>
                            <a href="#" class="btn btn-primary">Join Now</a>
                        </div>
                    </div>
                    <div class="contest-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2ba6bffff9bb385e250b2ba48df347faef377478badb0916ae369c2b4cd0f17a?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Weekly Challenge" class="contest-image">
                        <div class="contest-content">
                            <h3 class="contest-title">Weekly Challenge</h3>
                            <p class="contest-time">5 Days 8 Hours Left</p>
                            <a href="#" class="btn btn-primary">Join Now</a>
                        </div>
                    </div>
                    <div class="contest-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4f3200e7edf9f84b09b04a723da3f2b5d23b7cd4961a46a5b1252aea0b7d4732?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Monthly Contest #4" class="contest-image">
                        <div class="contest-content">
                            <h3 class="contest-title">Monthly Contest #4</h3>
                            <p class="contest-time">12 Days 6 Hours Left</p>
                            <a href="#" class="btn btn-primary">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <h2 class="section-title">What Our Users Say</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/43555ce5de9eb2e34049640944e3ad23fedea548f0a85358199c8fdf7952696d?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="John Doe" class="testimonial-avatar">
                        <h3 class="testimonial-name">John Doe</h3>
                        <p class="testimonial-text">"This platform helped me land my first developer job!"</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/43555ce5de9eb2e34049640944e3ad23fedea548f0a85358199c8fdf7952696d?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Jane Smith" class="testimonial-avatar">
                        <h3 class="testimonial-name">Jane Smith</h3>
                        <p class="testimonial-text">"The live contests are challenging and fun. I've learned so much!"</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/43555ce5de9eb2e34049640944e3ad23fedea548f0a85358199c8fdf7952696d?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Mike Johnson" class="testimonial-avatar">
                        <h3 class="testimonial-name">Mike Johnson</h3>
                        <p class="testimonial-text">"I love the community and the detailed problem analytics."</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <h2 class="cta-title">Ready to Improve Your Coding Skills?</h2>
                <p class="cta-subtitle">Join thousands of coders, sharpen your skills, and compete for the top spot in global programming challenges.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Start Competing Today</a>
                    <a href="#" class="btn btn-secondary">Explore Ongoing Contests</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="#" class="social-link" aria-label="Facebook">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/27980812ca4d0a6cf60ba3181827703588ff28339e798073b03b249c5e1011c8?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Facebook icon" width="24" height="24">
                </a>
                <a href="#" class="social-link" aria-label="Twitter">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0c2781d08607ad90b209070ca3fa7cba3be1aaa52843591bd70dd78cdbfbecda?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="Twitter icon" width="24" height="24">
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7358f4e8d20579c2c93a6cd5e897280f9dfaa8db9abbc79276439917cb136fc9?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="LinkedIn icon" width="24" height="24">
                </a>
                <a href="#" class="social-link" aria-label="GitHub">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5e98cd3b8c924bd96780f0b8bd50deded04aa50bca6630d0d4c6e9f047c8892?placeholderIfAbsent=true&apiKey=ace3e3ec62584e50ba4d2c77fc4c234f" alt="GitHub icon" width="24" height="24">
                </a>
            </div>
            <div class="footer-links">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms & Conditions</a>
            </div>
            <p class="copyright">&copy; 2024 CodeCafe. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>