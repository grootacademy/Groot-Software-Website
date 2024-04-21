<?php include 'includes/header.php'; ?>

<style>
.rs-services-single .contact-widget .form-control {
    padding: 20px 20px 20px 20px;
    border-radius: 5px 5px 5px 5px;
    border-style: solid;
    border-width: 0px 0px 0px 0px;
    background-color: #F6F7F9;
    width: 100%;
    max-width: 100%;
}

.btn-resume {
    position: relative;
    padding: 11px 16px;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 3px;
    color: black;
    background-color: #F6F7F9;
    border: 0;
    transition: 0.2s;
    overflow: hidden;
}

.btn-resume input[type="file"] {
    cursor: pointer;
    position: absolute;
    left: 0%;
    top: 0%;
    transform: scale(3);
    opacity: 0;
}

.btn-resume:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

ul li {
    line-height: 30px;
}

.rs-services-single .contact-wrap {
    background: #ffffff;
    padding: 25px 40px 50px;
    border-radius: 10px 10px 10px 10px;
}

.rs-services-single .contact-wrap .content-part {
    text-align: center;
}

.rs-services-single .contact-wrap .content-part .title {
    font-size: 24px;
    line-height: 40px;
    font-weight: 700;
    color: #0a0a0a;
    margin: 0;
}

.rs-services-single .contact-wrap .content-part .desc {
    margin: 0;
}

.rs-services-single .contact-wrap .from-control {
    padding: 12px 16px 12px 16px;
    border-radius: 5px 5px 5px 5px;
    border-style: solid;
    border-color: #02010100;
    background-color: #F6F7F9;
    color: #454545;
    width: 100%;
    opacity: 4;
}

.rs-services-single .contact-wrap ::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-wrap ::-moz-placeholder {
    /* Firefox 19+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-wrap :-ms-input-placeholder {
    /* IE 10+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-wrap :-moz-placeholder {
    /* Firefox 18- */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-box {
    background-image: linear-gradient(250deg, #4e95ed 0%, #03228f 100%);
    padding: 80px 30px 80px 30px;
    border-radius: 5px 5px 5px 5px;
}

.rs-services-single .contact-box .address-box {
    display: flex;
}

.rs-services-single .contact-box .address-box .address-icon {
    background-image: linear-gradient(275deg, #ffffff 0%, #fcfcff 100%);
    min-width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    width: 40px;
    border-radius: 50%;
    margin-right: 23px;
}

.rs-services-single .contact-box .address-box .address-icon i {
    font-size: 20px;
    line-height: 20px;
    color: #03228F;
}

.rs-services-single .contact-box .address-box .address-text .label {
    font-size: 16px;
    font-weight: 600;
    color: #ffffff;
    display: block;
    margin-bottom: 5px;
}

.rs-services-single .contact-box .address-box .address-text a {
    color: #ffffff;
}

.rs-services-single .contact-box .address-box .address-text a:hover {
    color: #ccc;
}

.rs-services-single .contact-box .address-box .address-text .desc {
    color: #ffffff;
}

.rs-services-single .contact-box.onepage-box {
    background-image: linear-gradient(220deg, #f27c1e 0%, #dd4c23 79%);
}

.rs-services-single .contact-box.onepage-box .address-box .address-icon {
    background: white-color;
}

.rs-services-single .contact-box.onepage-box .address-box .address-icon i {
    color: #f2541b;
}

.rs-services-single .contact-box.onepage-box.modify1 {
    background-image: linear-gradient(250deg, #9c9ff9 0%, #6e71db 100%);
}

.rs-services-single .contact-box.onepage-box.modify1 .address-box .address-icon {
    background: white-color;
}

.rs-services-single .contact-box.onepage-box.modify1 .address-box .address-icon i {
    color: #787cf2;
}

.rs-services-single .contact-widget .from-control {
    padding: 20px 20px 20px 20px;
    border-radius: 5px 5px 5px 5px;
    border-style: solid;
    border-width: 0px 0px 0px 0px;
    background-color: #F6F7F9;
    width: 100%;
    max-width: 100%;
}

.rs-services-single .contact-widget textarea {
    height: 120px;
}

.rs-services-single .contact-widget ::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-widget ::-moz-placeholder {
    /* Firefox 19+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-widget :-ms-input-placeholder {
    /* IE 10+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-widget :-moz-placeholder {
    /* Firefox 18- */
    color: #454545;
    opacity: 1;
}

.rs-services-single .contact-widget.onepage-style .from-control {
    background: #fff;
}

.rs-services-single .map-canvas {
    overflow: hidden;
}

.rs-services-single .map-canvas iframe {
    float: left;
    width: 100%;
    height: 620px;
    border: unset;
}

.rs-services-single.style2 .contact-box-wrap {
    background-image: linear-gradient(270deg, #4e95ed 0%, #03228f 100%);
    border-radius: 5px 5px 5px 5px;
    padding: 90px 60px 60px 60px;
}

.rs-services-single.style2 .contact-box-wrap .from-control {
    padding: 16px 16px 16px 16px;
    border-radius: 5px 5px 5px 5px;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #F1F5FB;
    width: 100%;
    max-width: 100%;
}

.rs-services-single.style2 .contact-box-wrap textarea {
    height: 120px;
}

.rs-services-single.style2 .contact-box-wrap ::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #454545;
    opacity: 1;
}

.rs-services-single.style2 .contact-box-wrap ::-moz-placeholder {
    /* Firefox 19+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single.style2 .contact-box-wrap :-ms-input-placeholder {
    /* IE 10+ */
    color: #454545;
    opacity: 1;
}

.rs-services-single.style2 .contact-box-wrap :-moz-placeholder {
    /* Firefox 18- */
    color: #454545;
    opacity: 1;
}

.rs-services-single.negative-margin {
    margin-top: -315px;
}
</style>

<!-- Breadcrumbs Start -->
<!-- <div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h5 class="page-title">Web Development </h5>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.php">Home</a>
            </li>
            <li title="Go To Services">
                <a class="active" href="index.php">Services</a>
            </li>
            <li>Web Development</li>
        </ul>
    </div>
</div> -->
<!-- Breadcrumbs End -->

<!-- Services Single Start -->
<div class="rs-services-single pt-50 pb-50 md-pt-40 md-pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 md-mb-50">
                <div class="services-img mb-4">
                    <!-- <img src="assets/images/services/single/1.jpg" alt=""> -->
                    <h2>Internship in Full Stack Development with NodeJS (MERN Stack) at Groot Software</h2>
                    <p>Welcome to Groot Software Pvt. Ltd., Jaipur's leading provider of innovative software solutions.
                        We are excited to announce our internship program in Full Stack Development with a focus on
                        NodeJS and MERN stack development. If you're passionate about diving deep into web development
                        technologies and eager to learn from industry experts, this internship opportunity is for you..
                    </p>
                    <h4>Why Choose Groot Software Pvt. Ltd.</h4>
                    <ul style=list-style-type:disc>
                        <li>Expert Guidance: Learn from seasoned professionals in the field of Full Stack Development.
                        </li>
                        <li>Real-world Projects: Gain hands-on experience by working on live projects that impact real
                            businesses.</li>
                        <li>Career Growth: Unlock opportunities for career advancement and skill enhancement.</li>
                        <li>Friendly Work Environment: Join a collaborative team culture that fosters creativity and
                            innovation.</li>
                    </ul>
                    <h4 class="mt-4">Program Overview</h4>
                    <p>Our internship program is designed to provide participants with a comprehensive understanding of
                        Full Stack Development, with a specific focus on NodeJS and the MERN stack (MongoDB, ExpressJS,
                        ReactJS, NodeJS). Throughout the program, interns will delve into various aspects of web
                        development, including front-end and back-end technologies, database management, API
                        integration, and more.</p>
                    <h4>Key Features</h4>
                    <ul style=list-style-type:disc>
                        <li>Hands-on Training: Get practical experience through guided projects and coding exercises.
                        </li>
                        <li>One-on-One Mentoring: Receive personalized guidance and support from experienced mentors.
                        </li>
                        <li>Industry Exposure: Gain insights into industry best practices and emerging trends.</li>
                        <li>Networking Opportunities: Connect with professionals and peers to expand your professional
                            network.</li>

                    </ul>
                    <h4 class="mt-4">Requirements</h4>
                    <ul style=list-style-type:disc>
                        <li>Basic understanding of web development concepts
                        </li>
                        <li>Proficiency in JavaScript</li>
                        <li>Eagerness to learn and grow in a dynamic environment</li>
                    </ul>
                    <h4 class="mt-4">How to Apply</h4>
                    <p>To apply for the internship program, please submit your resume along with a brief cover letter
                        highlighting your interest in Full Stack Development and any relevant experience. Shortlisted
                        candidates will be contacted for further interviews.</p>
                        
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Expert Engineers.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Phone:</span>
                                        <a href="tel:+91-9610967825">+91-9610967825</a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Email:</span>
                                       <a href="mailto:info@grootsoftware.com">info@grootsoftware.com</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc">Plot no 26, JAIPUR ELECTRONIC MARKET, Mansarovar Link Rd, in front of manglam, Mohan Nagar, Triveni Nagar, Arjun Nagar, Jaipur, Rajasthan 302019</div>
                                   </div>
                               </div>
                           </div>
                       
                </div>


            </div>
            <div class="col-lg-4 pl-32 md-pl-15">
                <div class="contact-widget mb-50">
                    <div class="sec-title2 mb-20">
                        <span class="sub-text contact">Get In Touch</span>
                        <h4 class="title testi-title">Apply Now</h4>
                    </div>
                    <div id="form-messages"></div>
                    <form method="post" action="./process.php">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Name"
                                        required="">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input class="form-control" type="email" id="email" name="email"
                                        placeholder="E-Mail" required="">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input class="form-control" type="text" id="phone" name="phone"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input class="form-control" type="text" id="website" name="requirment_issue"
                                        placeholder="Enter your requirement or issue do you have" required="">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Your message Here" required=""></textarea>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <div class="upload">
                                        <button type="button" class="btn-resume">
                                            <i class="fa fa-upload"></i> Upload Resume
                                            <input type="file" accept=".pdf">
                                        </button>
                                    </div>
                                </div>





                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon learn-more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <ul class="services-list">
                    <li><a href="software-development.php">Software Development</a></li>
                    <li><a class="active" href="#">Web Development</a></li>
                    <li><a href="case-studies-single.php">Analytic Solutions</a></li>
                    <li><a href="cloud-and-devops.php">Cloud and DevOps</a></li>
                    <li><a href="product-design.php">Project Design</a></li>
                    <li><a href="#">Data Center</a></li>
                </ul>

                <div class="services-add mb-50 mt-50">
                    <div class="address-item mb-35">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <h2 class="title">Have any Questions? <br> Call us Today!</h2>
                    <div class="contact">
                        <a href="tel:123222-8888">+91-7790847091</a>
                    </div>
                </div>
                <div class="brochures">
                    <h3>Brochures</h3>
                    <p>
                        Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis
                        nulla sollicitudin.
                    </p>
                    <div class="pdf-btn">
                        <a class="readon learn-more pdf" href="contact.php">Download Now<i
                                class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Services Single End -->

<!-- Cta section start -->
<div class="rs-cta style1 bg7 pt-80 pb-80">
    <div class="container">
        <div class="cta-wrap">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12 md-mb-30">
                    <span>Plan to Start a Project</span>
                    <div class="title-wrap">
                        <h2 class="epx-title">Our Experts Ready to Help You</h2>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-12">
                    <div class="button-wrap">
                        <a class="readon learn-more" href="contact-us.php">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cta section end -->

</div>
<!-- Main content End -->

<!-- Partner Start -->
<?php include("./our-partners-compnies.php"); ?>
<!-- Partner End -->

<?php include 'includes/footer.php'; ?>