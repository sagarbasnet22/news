<?php
$title = 'Contact Page';
include 'header.php';
?>


<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
</nav>


<!-- Contact Page  -->
<section class="contact_page mb">
    <div class="container">
        <div class="contact_page_wrap">
            <div class="contact_page_info">
                <h3>Contact Us</h3>
                <ul class="contact_list">
                    <li>News Portal Website</li>
                    <li>Kapan Faika, Kathmandu, Nepal</li>
                    <li>Email Us: <a href="#">info@yourwebsite.com.np</a></li>
                    <li>Call Us: <a href="#">+977 123 456 789</a></li>
                    <li>Website: <a href="#">yourwebsite.com.np</a></li>
                </ul>
                <p>
                    If you have business inquiries or other questions, please fill out the following form to contact us.
                    Thank you.
                </p>
                <ul class="contact_social">
                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                    <li><a href="#"><i class="lab la-instagram"></i></a></li>
                    <li><a href="#"><i class="lab la-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="contact_page_form">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id="" rows="5" class="form-control" placeholder="Write your message..."></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Page End  -->



<?php
include 'footer.php';
?>