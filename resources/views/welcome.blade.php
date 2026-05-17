<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer Portfolio</title>

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #111;
            color: #fff;
            padding: 15px 30px;
        }

        nav h1 {
            font-size: 20px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Hero Section */
        .hero {
            height: 90vh;
            background: url('https://picsum.photos/1200/800?grayscale') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h2 {
            font-size: 40px;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
        }

        /* Section */
        section {
            padding: 50px 20px;
            text-align: center;
        }

        /* Gallery */
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding-top: 20px;
        }

        .gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* About */
        .about {
            max-width: 700px;
            margin: auto;
        }

        /* Contact */
        .contact input,
        .contact textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .contact button {
            padding: 10px 20px;
            border: none;
            background: #111;
            color: white;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 15px;
        }

        /* Responsive */
        @media(max-width: 900px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 600px) {
            nav {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                margin-top: 10px;
            }

            .gallery {
                grid-template-columns: 1fr;
            }

            .hero h2 {
                font-size: 28px;
            }
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav>
        <h1>My Photography</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="/services">About</a></li>
            <li><a href="/contact-us">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <h2>Capturing Moments</h2>
    </div>

    <!-- Gallery -->
    <section id="gallery">
        <h2>My Work</h2>
        <div class="gallery">
            <img src="https://picsum.photos/300/300?1">
            <img src="https://picsum.photos/300/300?2">
            <img src="https://picsum.photos/300/300?3">
            <img src="https://picsum.photos/300/300?4">
            <img src="https://picsum.photos/300/300?5">
            <img src="https://picsum.photos/300/300?6">
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <h2>About Me</h2>
        <p class="about">
            I am a passionate photographer who loves capturing nature, people, and moments.
            My goal is to tell stories through images and create lasting memories.
        </p>
    </section>

    <!-- Contact -->
    <section id="contact">
        <h2>Contact Me</h2>
        <div class="contact">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea rows="5" placeholder="Your Message"></textarea>
            <button>Send</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 My Photography</p>
    </footer>

</body>

</html>