<?php
$sql = "SELECT rater_name, rating, comment, submitted_at 
FROM tbl_reviews ORDER BY RAND() DESC LIMIT 6";
$result = $conn->query($sql);
?>

<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">A few words from people that chose to work with me</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <!-- Testimonial Card -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="rating mt-1">
                                    <?php
                                    $rating = (int)$row['rating'];
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo $i <= $rating
                                            ? '<i class="fas fa-star text-warning"></i>'
                                            : '<i class="far fa-star text-warning"></i>';
                                    }
                                    ?>
                                </div>
                                <p class="testimonial-text">“<?= htmlspecialchars($row['comment']) ?>”</p>
                                <div class="details">
                                    <div class="testimonial-author fw-bold"><?= htmlspecialchars($row['rater_name']) ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="card">
                        <div class="card-body">
                            <p class="testimonial-text">No reviews found yet. Be the first to leave one!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- end of testimonials -->

<!-- Footer -->
<div class="footer bg-dark text-light py-5 mt-5">
    <div class="container mt-2">
        <div class="row">
            <!-- Social Media Links -->
            <div class="col-lg-4 mb-4 text-left">
                <h5 class="text-uppercase text-light mb-3">Connect with Us</h5>
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="https://facebook.com/yourprofile" target="_blank" class="social-icon">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://twitter.com/yourhandle" target="_blank" class="social-icon">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://pinterest.com/yourprofile" target="_blank" class="social-icon">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://instagram.com/yourprofile" target="_blank" class="social-icon">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://youtube.com/yourchannel" target="_blank" class="social-icon">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4 mb-4 text-left">
                <h5 class="text-uppercase text-light mb-3">Contact Us</h5>
                <p class="text-light"><a href="mailto:info@yourdomain.com" class="text-light">info@samsonosaretin.com</a></p>
                <p class="text-light"><a href="tel:+1234567890" class="text-light">+44 0 7448 222483</a></p>
                <p class="text-light">Walsall, West Midlnads, UK</p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 mb-4 text-left">
                <h5 class="text-uppercase text-light mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/about" class="text-light">About Us</a></li>
                    <li><a href="/privacy" class="text-light">Privacy Policy</a></li>
                    <li><a href="/terms" class="text-light">Terms of Service</a></li>
                    <li><a href="/contact" class="text-light">Contact</a></li>
                </ul>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->

<!-- Newsletter Signup -->
<div class="newsletter bg-light py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <h5 class="text-uppercase mb-3">Stay Informed</h5>
                <p class="mb-4">Subscribe to our newsletter and get the latest updates straight to your inbox.</p>
                <form action="/subscribe" method="POST" class="newsletter-form d-flex justify-content-start">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control w-50 mr-2" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="copyright bg-dark text-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <p class="p-small">Copyright © <a class="no-line text-light" href="https://samsonosaretin.com">Osaretin Gift Samson</a> | All rights reserved</p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>