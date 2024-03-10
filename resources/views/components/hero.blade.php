    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    @if (isset($title))
                        <h2 class="animate__animated animate__fadeInDown">
                            <span>{{ $title }}</span>
                        </h2>
                        <p class="animate__animated animate__fadeInUp">
                            {{ $description }}
                        </p>
                    @else
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>WorldCraft</span></h2>
                        <p class="animate__animated animate__fadeInUp">
                            Empower Your Vision: Our Services Redefine Digital Excellence
                            Transform your aspirations into reality with our comprehensive suite of services. From
                            groundbreaking web development to immersive mobile app experiences, we tailor solutions that
                            resonate with your audience and drive tangible results. Harness the power of innovative
                            technologies, expert craftsmanship, and unparalleled dedication as we partner with you to
                            elevate your digital presence. Discover limitless possibilities and unlock the true
                            potential of
                            your business with our unmatched service offerings.
                        </p>
                    @endif
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Cross Platform App</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Step into the Future of Mobile: Unleash the full potential of your app with the dynamic fusion
                        of Flutter, React Native technologies. Seamlessly blend native performance and cross-platform
                        versatility, delivering an unparalleled user experience across devices. Our bespoke solution
                        empowers your app to break barriers, offering agility, scalability, and stunning UI/UX design.
                        Embrace the forefront of mobile innovation and elevate your app to new heights with our
                        revolutionary tech stack.
                    </p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Website Development</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Embark on a Journey of Innovation: Seamlessly integrate the power of Laravel, React, and Next.js
                        technologies into your website, propelling it to the forefront of digital excellence. With our
                        bespoke solution, embrace the synergy of cutting-edge frameworks, ensuring unparalleled
                        performance, scalability, and user engagement. Let your website transcend expectations and lead
                        the way in the ever-evolving landscape of digital transformation.
                    </p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <!-- End Hero -->
