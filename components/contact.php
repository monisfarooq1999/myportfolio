
    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <!-- <a class="btn btn-primary py-3 px-5" href="">Say Hello</a> -->
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">A-113 , Karachi, Pakistan</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+92 341 2105345</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">farooq.ayubie@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://pk.linkedin.com/in/monis-farooq-ayubi" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Ready to embark on your next digital journey? Whether you're seeking consultation or eager to discuss a new project, I'm all ears! Drop me a message via the form below, and let's bring your ideas to life together..</p>
                    <!-- <a href="https://htmlcodex.com/contact-form">Download Now</a> -->
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="fullname" required>
                                    <label for="name">Your Name <span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                    <label for="email">Your Email <span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                                    <label for="phone">Phone <span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select type="text" class="form-control" id="subject" placeholder="Subject" name="services" required>
                                    <?php
                                    $query = $pdocon->query(" SELECT * FROM services");
                                    $services = $query->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($services as $services){
                                    ?>
                                    <option hidden selected>--</option>
                                    <option value="<?php echo $services['serviceid'] ?>"><?php echo $services['servicename'] ?></option>

                                    <?php
                                    }
                                    ?>
                                    </select>
                                    <label for="phone">Select Service <span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message" required></textarea>
                                    <label for="message">Message <span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submitlead">Contact Me!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

