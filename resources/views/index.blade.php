<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Azkia Azzahra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/muslimah.png" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand bg-transparent py-3">
        <div class="container justify-content-center">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                    href="https://drive.google.com/file/d/1zmFUzK9mX_zGAg1fJsIugu8EAbQ4B7e8/view?usp=sharing" 
                    target="_blank" 
                    rel="noopener noreferrer">
                    Resume
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                    href="https://www.linkedin.com/in/tata-azkia-azzahra/" 
                    target="_blank" 
                    rel="noopener noreferrer">
                    LinkedIn
                    </a>
                </li>
            </ul>
        </div>
     </nav>

    <section class="hero container">
        <!-- Row: column order reversed on small, row on md+, and bottom-aligned on md+ -->
        <div class="row flex-column-reverse flex-md-row align-items-md-end g-4">
            <!-- IMAGE column: make the column a flex container and align image to column bottom -->
            <div class="col-12 col-md-6 d-flex align-items-end justify-content-center hero-img">
                <img src="{{ asset('assets/profile_picture.png') }}" alt="Profile"
                    class="img-fluid profile-image" />
            </div>

            <!-- TEXT column: make column a flex column and push content to bottom -->
            <div class="col-12 col-md-5 d-flex flex-column justify-content-end hero-text text-center text-md-start">
                <h1 class="hi-there">Hi there!👋🏻</h1>
                <h1 class="name">I’m Tata Azkia Azzahra, <br /><span class="ui-ux">a UI/UX Designer</span></h1>
                <p class="description">
                    A passionate UI/UX Designer who transforms ideas into intuitive,
                    human-centered, and visually engaging experiences.
                </p>
                <div class="tags mb-3">
                    <span>💡 Curious Mind</span>
                    <span>🎨  Design Thinker</span>
                    <span>🌍  Problem Solver</span>
                </div>
                <a href="mailto:tataazkia123@gmail.com">
                    <button class="btn btn-primary align-self-start align-self-md-none">
                        Contact Me!
                    </button>
                </a>

            </div>
        </div>
    </section>


    <div class="container section-container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="hi-there">About Me</h2>
                <p class="about-me-text">
                    I'm a creative and empathetic <b>UI/UX designer</b> based in Yogyakarta. With a background in Geography Education, I combine <b>analytical thinking and design creativity</b> to craft meaningful digital solutions. I'm passionate about exploring user behavior, simplifying complex problems, and creating digital experiences that make learning and everyday life <b>simpler, smarter, and more enjoyable.</b>
                </p>
            </div>
            <div class="col-md-6">
                <h2 class="hi-there">Skills</h2>
                <div class="mb-4">
                    <span class="skill-badge p2-color">UI Design</span>
                    <span class="skill-badge p2-color">UX Design</span>
                    <span class="skill-badge p3-color">Mobile Design</span>
                    <span class="skill-badge p3-color">Web Design</span>
                    <span class="skill-badge p4-color">User Flow</span>
                    <span class="skill-badge p4-color">Sitemap</span>
                    <span class="skill-badge p4-color">Wireframe</span>
                    <span class="skill-badge p4-color">Prototyping</span>
                </div>

                <h2 class="hi-there">Tools</h2>
                <div>
                    <img src="{{ asset('assets/Figma.png') }}" alt="Figma Icon" class="tool-icon">
                    <img src="{{ asset('assets/Canva.png') }}" alt="Canva Icon" class="tool-icon">
                </div>
            </div>
        </div>
    </div>


    <div class="container section-container">
        <h1 class="hi-there">Work Experience</h1 >

        <div class="row experience-item">
            <div class="col-5 col-md-4 job-details-column text-end">
                <div class="job-title">UI/UX Designer Freelance</div>
                <div class="job-company">Upwork</div>
                <div class="job-date">February – May 2025</div>
            </div>
            <div class="col-7 col-md-8 job-description-column">
                <p class="job-description">
                    Designed intuitive and responsive mobile app interfaces using Figma, ensuring usability and visual appeal. Collaborated with clients and refined designs through user feedback to enhance experience quality.
                </p>
            </div>
        </div>

        <div class="row experience-item">
            <div class="col-5 col-md-4 text-end">
                <div class="job-title sub-heading">Kampus Mengajar Batch 7</div>
                <div class="job-company">Ministry of Education, Culture, Research, and Technology</div>
                <div class="job-date">February – June 2024</div>
            </div>
            <div class="col-7 col-md-8 job-description-column">
                <p class="job-description">
                    Supported students' literacy, numeracy, and comprehension through interactive learning activities. Collaborated with teachers to design engaging educational media that enhanced participation, responsibility, and teamwork.
                </p>
            </div>
        </div>

        <div class="row experience-item">
            <div class="col-5 col-md-4 job-details-column text-end">
                <div class="job-title">Teaching Assistant for Cartography and Remote Sensing Practicum</div>
                <div class="job-company">Geospatial Laboratory FIS UNY</div>
                <div class="job-date">August 2023 – January 2024</div>
            </div>
            <div class="col-7 col-md-8 job-description-column">
                <p class="job-description">
                    Guided students in mapping and remote sensing practices using QGIS, ArcGIS, ENVI, and field surveys. Delivered engaging theoretical and practical sessions while providing constructive feedback to improve students' technical understanding.
                </p>
            </div>
        </div>

    </div>

    <div class="slanted-box">
        <div class="slanted-bg"></div>
        <div class="slanted-content container">
            <!-- certification -->
            <div class="container section-container certification">
                <div class="row g-4 align-items-start">
                    
                    <div class="col-12 col-lg-8">
                        <div class="row g-4 align-items-stretch">
                            <div class="col-6 col-md-6">
                                <div class="info-card">
                                    <h3 class="info-card-title">Certification</h3>
                                    <div class="card-content">
                                        <b>Complete Web & Mobile Designer: UI/UX, Figma, +more</b>
                                        <span>Udemy</span>
                                        <span>November 2025</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="info-card">
                                    <h3 class="info-card-title">Education</h3>
                                    <div class="card-content">
                                        <b>Bachelor of Education</b>
                                        <span>Yogyakarta State University</span>
                                        <span>Sept 2021 – July 2025</span>
                                        <span>GPA 3.85 / 4.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="info-card">
                                    <h3 class="info-card-title">Softskills</h3>
                                    <div class="card-content">
                                        Communication, empathy, collaboration, creativity, problem-solving,
                                        critical thinking, attention to detail, time management, and adaptability.
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="info-card">
                                    <h3 class="info-card-title">Organization</h3>
                                    <div class="card-content">
                                        <b>Staff & Secretary of the Development and Empowerment Division</b>
                                        <span>Geography Education Student Association</span>
                                        <span>Feb 2022 – Jan 2023</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="profile-image-container">
                            <img src="{{ asset('assets/profile_picture_2.png') }}" alt="Profile Picture" class="profile-image">
                        </div>
                    </div>

                </div>
            </div>

            <!-- projects -->
            <div class="container py-3">
                <div class="row align-items-start">
                    
                    <div class="row px-4">
                        <div class="col-12">
                            <h3 class="hi-there mb-4">Projects</h3>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-md-9 order-1 order-md-2 mb-4">
                        <img id="project-image" src="{{ asset('assets/terralith.png') }}" class="project-image" alt="Terralith">
                    </div>

                    <!-- LEFT COLUMN -->
                    <div class="col-12 col-md-3 px-4 order-2 order-md-1">
                        <h1 id="project-title" class="title-2 p1-color">TERRALITH</h1>
                        <p id="project-desc" class="project-desc">
                            <strong>Terralith</strong> is an Android learning app designed for 10th-grade
                            students to explore Lithosphere Dynamics independently...
                        </p>

                        <div id="project-colors" class="d-flex flex-wrap color-row"></div>

                        <h4 class="heading-2 mt-4 p1-color mb-3">Typography</h4>
                        <div id="project-typography"></div>
                    </div>
                </div>
            </div>

            <!-- Carousel Buttons -->
            <div class="container text-center mt-3 mb-5">
                <div class="carousel-buttons d-inline-flex gap-3">
                    <button class="carousel-btn">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="carousel-btn">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer-section py-4">
                <div class="text-center">
                    <span class="footer-name p1-color">TATA AZKIA AZZAHRA</span>
                    <span class="footer-year">Copyright 2025</span>
                </div>
            </footer>
        </div>
       
    </div>
    <script src="/javascript/index.js"></script>
</body>
</html>