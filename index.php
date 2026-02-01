<?php
include_once('header_panel.php');
$sql = "SELECT * FROM uploaded_projects ORDER BY uploaded_at DESC LIMIT 6";
$result = mysqli_query($conn, $sql);
?>

<!-- Header Section -->
<header id="header" class="header" style="position: relative; overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="text-container" data-aos="zoom-in">
                    <h1 class="h1-large">Crafting elegant and high-performance websites with passion</h1>
                    <a class="btn btn-info btn-lg page-scroll text-decoration-none" href="#about">Learn More</a>
                    <a class="btn btn-success btn-lg page-scroll text-decoration-none" href="#contact">
                        Get in Touch
                    </a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- Stars container -->
    <canvas id="starCanvas" style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"></canvas>
</header>
<!-- End of Header Section -->


<!-- About-->
<div id="about" class="basic-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container first">
                    <h2>Hello, I'm Samson Gift Osaretin</h2>
                    <p>I’m a passionate Full Stack Web Developer based in Wolverhampton, UK. With over six years of experience, I specialize in building modern, responsive websites and mobile applications. I enjoy transforming ideas into functional digital solutions, from planning and design to development and deployment.</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container second">
                    <div class="time">2023 - PRESENT</div>
                    <h6>Full Stack Web Developer</h6>
                    <p>Driving web and app development at Geocare Services Limited</p>
                    <div class="time">2017 - 2023</div>
                    <h6>Full Stack Web Developer</h6>
                    <p>Built custom web applications for various clients at Ese Sphere Enterprise</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="text-container third">
                    <div class="time">2016 - 2017</div>
                    <h6>Freelance Web Developer</h6>
                    <p>Delivered bespoke websites and solutions for small businesses</p>
                    <div class="time">2014 - 2016</div>
                    <h6>IT Intern / Junior Developer</h6>
                    <p>Gained hands-on experience while studying at ST. Winifred Polytechnic</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of about -->


<!-- Services -->
<div id="services" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">What I Offer</h2>
                <p class="p-heading">With over 6 years of hands-on experience in web and mobile development, I help startups, small businesses, and enterprises build scalable, secure, and user-friendly digital products. Below are the key services I provide:</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->

        <div class="row">
            <!-- Design -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="far fa-gem"></i>
                    <h5>UI/UX & Web Design</h5>
                    <p>Great digital products begin with great design. I craft intuitive, modern interfaces that enhance user experience and support seamless navigation across devices.</p>
                </div>
            </div>

            <!-- Development -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="fas fa-code"></i>
                    <h5>Web Development</h5>
                    <p>I develop custom, responsive websites and web apps using clean, well-structured code whether from scratch or based on client designs ensuring reliability and scalability.</p>
                </div>
            </div>

            <!-- SEO -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="fas fa-tv"></i>
                    <h5>Search Engine Optimization (SEO)</h5>
                    <p>I implement essential SEO techniques to help your website rank higher in search engines, attract more traffic, and reduce dependence on paid ads.</p>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="fas fa-mobile-alt"></i>
                    <h5>Mobile App Development</h5>
                    <p>I build cross-platform mobile apps using Flutter, enabling fast and efficient development with native performance for Android and iOS devices.</p>
                </div>
            </div>

            <!-- System Administration -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="fas fa-server"></i>
                    <h5>System Administration</h5>
                    <p>From Apache server setup to Linux-based system administration, I ensure your digital infrastructure is secure, optimized, and always available.</p>
                </div>
            </div>

            <!-- Cloud Computing -->
            <div class="col-lg-4">
                <div class="text-box">
                    <i class="fas fa-cloud"></i>
                    <h5>Cloud Computing</h5>
                    <p>I provide cloud-based solutions that allow businesses to scale efficiently, from cloud hosting to fully managed cloud infrastructure to enhance flexibility and performance.</p>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of services -->


<!-- Details Section -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <img src="./images/programming.avif" class="w-100 h-100" alt="Programming Illustration">
        </div>

        <div style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;" class="col-lg-6">
            <!-- Text Container -->
            <div class="text-container mt-3">
                <h2>Why Collaborate With Me?</h2>
                <p>I'm a proactive communicator who takes the time to fully understand client requirements. I believe that clear understanding is key to delivering successful digital solutions that truly solve real-world problems.</p>

                <h5>UI/UX & Design Expertise</h5>
                <p>While Photoshop and Illustrator are my go-to tools, I'm equally comfortable designing intuitive and user-friendly interfaces using Figma, Sketch, and Adobe XD.</p>

                <h5>Frontend Development</h5>
                <p>I have hands-on experience developing responsive, mobile-first web applications using HTML5, CSS3, JavaScript, Bootstrap, and modern frameworks like Tailwind CSS and AJAX.</p>

                <h5>Backend & Database Skills</h5>
                <p>I work extensively with PHP, MySQL, RESTful APIs, and frameworks like CodeIgniter to build fast, secure, and scalable backend systems.</p>

                <h5>Mobile App Development</h5>
                <p>I develop cross-platform mobile apps using Flutter, enabling clients to reach Android and iOS users with a single codebase.</p>
            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->


<!-- Projects -->
<div id="projects" class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Delivered projects</h2>
                <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
            </div>
        </div>

        <div class="row">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="col-lg-4">
                        <div class="text-container">
                            <div class="image-container">
                                <a href="./view?slug=<?= $row['slug'] ?>">
                                    <img src="./admin/uploads/<?= htmlspecialchars($row['file_url']) ?>" style="height: 200px; width:100%;" class="img-fluid" alt="<?= htmlspecialchars($row['title']) ?>">
                                </a>
                            </div>
                            <p>
                                <strong>Project:</strong> <?= htmlspecialchars($row['title']) ?><br>
                                <?= htmlspecialchars(mb_strimwidth($row['description'], 0, 80, "...")) ?>
                                <br>
                                <a type="button" class="btn btn-sm btn-info block text-decoration-none" href="./view?slug=<?= $row['slug'] ?>">More</a>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-lg-12">
                    <p>No projects found.</p>
                </div>
            <?php endif; ?>
        </div> <!-- end of row -->
    </div>
</div> <!-- end of basic-3 -->


<!-- Section Divider -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <hr class="section-divider">
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->
<!-- end of section divider -->


<!-- Questions -->
<div class="accordion-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="accordion" id="accordionExample">
                    <!-- Contact & Quote -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How can I contact you and quickly get a quote for my project?
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                You can reach me via the <a href="#contact">contact form</a> on my website or through my social media profiles. For the fastest and most accurate quote, please include details such as the project type, scope, functionality, preferred timeline, and budget range.
                            </div>
                        </div>
                    </div>

                    <!-- Custom Design -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you build websites and apps from scratch or use pre-built themes?
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                I create custom solutions tailored to your brand and requirements. While I can work with themes or templates upon request, I specialize in building fully bespoke websites and applications from the ground up using clean, scalable code.
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance & Support -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer post-launch maintenance or support?
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes, I offer maintenance and support packages based on your needs. Basic support is often included after project delivery, and extended services like updates, monitoring, and backups can be arranged through a separate agreement.
                            </div>
                        </div>
                    </div>

                    <!-- Refund Policy -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What happens if I'm not satisfied with the final result?
                            </button>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Client satisfaction is my top priority. I offer revisions based on our agreement and always work collaboratively to meet your expectations. Refunds may be considered depending on the scope of work and stage of the project, as outlined in our initial agreement.
                            </div>
                        </div>
                    </div>

                    <!-- Payment Terms -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What are your payment terms? Do you require a deposit?
                            </button>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes, I typically require a 30–50% upfront deposit to begin work. The remaining balance is due upon project completion or as specified in our agreement. I accept bank transfers, PayPal, and other secure payment methods.
                            </div>
                        </div>
                    </div>

                    <!-- Project Timeline -->
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How long will it take to complete my project?
                            </button>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                Project duration depends on the complexity and scope. Simple websites may take 1–2 weeks, while more advanced platforms or mobile apps can take 4–8 weeks or more. I’ll provide a timeline estimate after our initial consultation.
                            </div>
                        </div>
                    </div>

                    <!-- Revisions -->
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                How many revisions are included with the project?
                            </button>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                Most projects include 2–3 rounds of revisions. Additional revisions can be arranged if needed, but may incur extra charges depending on the scope. Clear communication from the start helps minimize the need for excessive changes.
                            </div>
                        </div>
                    </div>
                </div> <!-- end of accordion -->

            </div>
        </div>
    </div>
</div>
<!-- end of questions -->


<!-- Contact -->
<div id="contact" class="form-1 bg-gray">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center">
                <h2>Get in Touch</h2>
                <p class="p-heading">
                    Have a project in mind or need a reliable developer for your business or startup? I'm always open to new opportunities and collaborations. Reach out via the form below or contact me directly.
                </p>
            </div>
        </div>

        <!-- Contact Cards -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card shadow-sm p-3 rounded bg-white">
                    <h5 class="mb-2">Email</h5>
                    <p><a class="no-line text-decoration-none" href="mailto:samsonosaretin@yahoo.com">samsonosaretin@yahoo.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm p-3 rounded bg-white">
                    <h5 class="mb-2">Phone</h5>
                    <p><a class="no-line text-decoration-none" href="tel:+447448222483">07448 222 483</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm p-3 rounded bg-white">
                    <h5 class="mb-2">Git Repo</h5>
                    <p><a class="no-line text-decoration-none" href="https://github.com/esesphere" target="_blank">https://github.com/esesphere</a></p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Your Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Your Email</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Tell me about your project</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Contact -->


<script>
    const canvas = document.getElementById('starCanvas');
    const ctx = canvas.getContext('2d');
    let stars = [];

    function resizeCanvas() {
        canvas.width = header.offsetWidth;
        canvas.height = header.offsetHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    // Create a star object
    class Star {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.size = Math.random() * 3 + 1;
            this.speedX = (Math.random() - 0.5) * 1.5;
            this.speedY = (Math.random() - 0.5) * 1.5;
            this.alpha = 1;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            this.alpha -= 0.01;
        }

        draw() {
            ctx.globalAlpha = this.alpha;
            ctx.fillStyle = "#fff";
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.globalAlpha = 1;
        }
    }

    // Add stars on mouse move
    header.addEventListener('mousemove', (e) => {
        for (let i = 0; i < 3; i++) {
            stars.push(new Star(e.clientX - header.getBoundingClientRect().left, e.clientY - header.getBoundingClientRect().top));
        }
    });

    function animateStars() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        stars.forEach((star, index) => {
            star.update();
            star.draw();
            if (star.alpha <= 0) {
                stars.splice(index, 1);
            }
        });
        requestAnimationFrame(animateStars);
    }
    animateStars();
</script>
<?php include_once('footer_panel.php'); ?>