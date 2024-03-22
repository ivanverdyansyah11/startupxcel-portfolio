<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StartUpXcel | Start Up</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- END STYLE CSS --}}
</head>

<body id="home">
    @include('components.navbar')

    <main>
        <div class="container">
            {{-- HERO SECTION --}}
            <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0" id="hero">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="headline" style="margin-bottom: 22px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400" data-aos-delay="1000">Be a Part of the <span
                                class="light">Exciting</span> <span class="primary">StartUpXcel</span> and
                            <span class="light">Experience</span> a Transformational Journey of <span
                                class="light">Empowerment</span>
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400"
                                data-aos-delay="1600">Welcome to StartUpXcel, a platform designed to ignite and empower
                                startups from around the world. We believe in the power of innovation and are committed
                                to providing a stage where aspiring entrepreneurs can showcase their ideas, connect with
                                industry leaders, and gain the recognition they deserve.</p>
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400"
                                data-aos-delay="1900">At StartUpXcel, we believe that great ideas have the potential to
                                change the world. Join us and embark on a transformative journey that can shape the
                                future of your startup.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                            <a href="#schedule" class="button-default" data-aos-once="true" data-aos="fade-right"
                                data-aos-duration="1400" data-aos-delay="400">Schedule Competition</a>
                            <a href="#" class="button-reverse d-flex align-items-center gap-2"
                                data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">
                                Register Now
                                <div class="arrow-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid"
                                        alt="Button Arrow Icon">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-lg-6 col-xxl-5 ps-lg-5 ps-xxl-0 d-none d-lg-inline-block">
                        <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100"
                            alt="Hero Banner" data-aos-once="true" data-aos="fade" data-aos-duration="1400">
                    </div>
                </div>
            </section>
            {{-- END HERO SECTION --}}


            {{-- JUDGING SECTION --}}
            <section class="judging section-gap" id="judging">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Meet the
                            <span class="light">Visionary</span> Panel of <span class="light">Judges</span> Shaping
                            the
                            <span class="light">Future</span> of <span class="primary">Entrepreneurship</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">In the
                            Judging Panel section, we introduce you to the esteemed group of
                            industry experts and entrepreneurs who form the backbone of our startup competition.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper position-relative">
                            <div class="swiper mySwiperJudges position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos-once="true" data-aos="fade-left"
                                        data-aos-duration="1400">
                                        <div class="card-default">
                                            <div class="judges-profile d-flex gap-3">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/judges/judges-1.svg') }}"
                                                        class="img-fluid" alt="Judges Profile Image"
                                                        style="border-radius: 5px;" width="86" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <p class="subtitle" style="margin-bottom: 2px;">CEO of
                                                        TechGenius</p>
                                                    <h6 style="margin-bottom: 6px;">John Smith
                                                    </h6>
                                                    <p class="paragraph-small">John Smith is a successful entrepreneur
                                                        who has founded and led several technology startups.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos-once="true" data-aos="fade-left"
                                        data-aos-duration="1400" data-aos-delay="300">
                                        <div class="card-default">
                                            <div class="judges-profile d-flex gap-3">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/judges/judges-2.svg') }}"
                                                        class="img-fluid" alt="Judges Profile Image"
                                                        style="border-radius: 5px;" width="86" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <p class="subtitle" style="margin-bottom: 2px;">Co-Founder of
                                                        TechLaunch</p>
                                                    <h6 style="margin-bottom: 6px;">Sarah Johnson</h6>
                                                    <p class="paragraph-small">Sarah Johnson is an investor and the
                                                        founder of a venture capital firm that focuses on technology
                                                        startups.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos-once="true" data-aos="fade-left"
                                        data-aos-duration="1400" data-aos-delay="600">
                                        <div class="card-default">
                                            <div class="judges-profile d-flex gap-3">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/judges/judges-3.svg') }}"
                                                        class="img-fluid" alt="Judges Profile Image"
                                                        style="border-radius: 5px;" width="86" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <p class="subtitle" style="margin-bottom: 2px;">Chief Innovation
                                                        at TechVantage</p>
                                                    <h6 style="margin-bottom: 6px;">Amanda Lee</h6>
                                                    <p class="paragraph-small">Amanda Lee is an industry expert with
                                                        years of experience in leading and developing technology
                                                        companies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos-once="true" data-aos="fade-left"
                                        data-aos-duration="1400" data-aos-delay="900">
                                        <div class="card-default">
                                            <div class="judges-profile d-flex gap-3">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/judges/judges-4.svg') }}"
                                                        class="img-fluid" alt="Judges Profile Image"
                                                        style="border-radius: 5px;" width="86" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <p class="subtitle" style="margin-bottom: 2px;">Renowned academic
                                                        and industry expert</p>
                                                    <h6 style="margin-bottom: 6px;">Prof. Michael Lee</h6>
                                                    <p class="paragraph-small">Prof. Lee has published numerous
                                                        research papers on startup success factors and has mentored
                                                        aspiring entrepreneurs.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-judges position-absolute"></div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END JUDGING SECTION --}}


            {{-- ABOUT SECTION --}}
            <section class="about d-flex align-items-center section-gap pt-5" id="about">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-5 pe-lg-5 pe-xxl-0 d-none d-lg-inline-block">
                        <div class="wrapper-banner">
                            <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid w-100"
                                alt="About Banner" data-aos-once="true" data-aos="fade" data-aos-duration="1400">
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-lg-6">
                        <h2 class="title" style="margin-bottom: 20px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">We Open a <span class="light">Gateway</span>
                            for you to the <span class="light">World</span> of
                            <span class="primary">Entrepreneurship</span> and <span class="light">Innovation</span>
                        </h2>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right"
                                data-aos-duration="1400">Welcome to StartupXcel, a dynamic platform dedicated to
                                fostering
                                innovation, fueling entrepreneurship, and propelling startups to excel. We are
                                passionate about providing startups with the resources, support, and connections they
                                need to thrive in a competitive business landscape.</p>
                            <p class="paragraph" data-aos-once="true" data-aos="fade-right"
                                data-aos-duration="1400">Our mission is to empower startups by offering comprehensive
                                programs,
                                mentorship opportunities, networking events, and access to a vibrant ecosystem of
                                like-minded individuals and industry experts.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                            <a href="#adventage" class="button-default" data-aos-once="true" data-aos="fade-right"
                                data-aos-duration="1400" data-aos-delay="400">Award Competition</a>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="button-reverse d-flex align-items-center gap-2" data-aos-once="true"
                                data-aos="fade-right" data-aos-duration="1400">
                                Contact Admin
                                <div class="arrow-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid"
                                        alt="Button Arrow Icon">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT SECTION --}}


            {{-- SCHEDULE SECTION --}}
            <section class="schedule section-gap" id="schedule">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">
                            Unlock the <span class="light">Future</span>, Discover the Action-Packed
                            <span class="light">Schedule</span> of the <span class="primary">Startup</span>
                            <span class="light">Competition</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">The
                            Schedule section is your guide to the action-packed adventure of the
                            StartUpXcel. From the opening ceremony to the final awards ceremony</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">20 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Opening Ceremony and Orientation</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">Opening Ceremony and Orientation
                                mark the official commencement of the Startup Competition, setting the stage for an
                                exciting journey of innovation.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal20">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-none" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">21 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Workshop and Idea Pitch Submission</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Workshop and Idea Pitch
                                Submission session is a crucial component of the Startup Competition, providing
                                participants with valuable guidance.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal21">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-lg-none" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">22 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Idea Evaluation and Mentorship</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Idea Evaluation and Mentorship
                                phase is a pivotal stage of the Startup Competition, where participants receive valuable
                                feedback.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal22">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-none d-lg-inline-block" data-aos-once="true"
                            data-aos="zoom-in-up" data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">23 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Business Plan Development and Semi-Finals</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Business Plan Development and
                                Semi-Finals phase is a critical stage in the Startup Competition, where participants
                                refine their business plans.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal23">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-inline-block d-lg-none" data-aos-once="true"
                            data-aos="zoom-in-up" data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">24 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Semi-Finals and Pitch Training</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Semi-Finals and Pitch Training
                                phase is a crucial stage in the Startup Competition, where participants compete for a
                                spot in the final round.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal24">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-none" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">25 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Finals and Awards Ceremony</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Finals and Awards Ceremony is
                                the highly anticipated culmination of the Startup Competition, the top participants
                                showcase their innovative ideas.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal25">More
                                Detail</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-md-inline-block">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">21 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Workshop and Idea Pitch Submission</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Workshop and Idea Pitch
                                Submission session is a crucial component of the Startup Competition, providing
                                participants with valuable guidance.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal21">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-inline-block d-lg-none" data-aos-once="true"
                            data-aos="zoom-in-up" data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">23 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Business Plan Development and Semi-Finals</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Business Plan Development and
                                Semi-Finals phase is a critical stage in the Startup Competition, where participants
                                refine their business plans.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal23">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-none d-lg-inline-block" data-aos-once="true"
                            data-aos="zoom-in-up" data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">24 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Semi-Finals and Pitch Training</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Semi-Finals and Pitch Training
                                phase is a crucial stage in the Startup Competition, where participants compete for a
                                spot in the final round.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal24">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4 d-md-inline-block d-lg-none" data-aos-once="true"
                            data-aos="zoom-in-up" data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">25 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Finals and Awards Ceremony</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Finals and Awards Ceremony is
                                the highly anticipated culmination of the Startup Competition, the top participants
                                showcase their innovative ideas.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal25">More
                                Detail</button>
                        </div>
                    </div>
                    <div class="col-4 d-none d-lg-inline-block">
                        <div class="card-default" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">22 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Idea Evaluation and Mentorship</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Idea Evaluation and Mentorship
                                phase is a pivotal stage of the Startup Competition, where participants receive valuable
                                feedback.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal22">More
                                Detail</button>
                        </div>
                        <div class="card-default mt-4" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <p class="subtitle" style="margin-bottom: 2px;">25 January 2023</p>
                            <h6 style="margin-bottom: 6px;">Finals and Awards Ceremony</h6>
                            <p class="paragraph-small" style="margin-bottom: 32px">The Finals and Awards Ceremony is
                                the highly anticipated culmination of the Startup Competition, the top participants
                                showcase their innovative ideas.</p>
                            <button class="button-light" data-bs-toggle="modal" data-bs-target="#modal25">More
                                Detail</button>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SCHEDULE SECTION --}}


            {{-- ADVENTAGE SECTION --}}
            <section class="adventage d-flex align-items-center section-gap" id="adventage">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title" style="margin-bottom: 20px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">Where <span class="light">Dreams</span> Are
                            Rewarded, <span class="light">Commemorating</span> the
                            Achievements of <span class="primary">Startup</span> <span class="light">Pioneers</span>
                        </h2>
                        <p class="paragraph" style="margin-bottom: 36px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">The Award section is a testament to the
                            brilliance and determination
                            of startups in the StartUpXcel. Here, we showcase the exceptional talent, disruptive
                            ideas, and remarkable accomplishments that have emerged from the competition.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="adventage-item d-flex align-items-center gap-3" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Innovation Excellence Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Rising Star Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Investor's Choice Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Female Entrepreneur Award</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4 mt-md-0"
                                    data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Social Impact Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Disruptor of the Year Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Tech Innovation Award</p>
                                </div>
                                <div class="adventage-item d-flex align-items-center gap-3 mt-4" data-aos-once="true"
                                    data-aos="fade-right" data-aos-duration="1400">
                                    <img src="{{ asset('assets/img/icon/checklist-icon.svg') }}"
                                        class="img-fluid rounded" alt="Adventage Checklist Icon" width="22">
                                    <p class="paragraph">Best Pitch Award</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-lg-6 col-xxl-5 ps-lg-5 ps-xxl-0 d-none d-lg-inline-block">
                        <div class="wrapper-banner">
                            <img src="{{ asset('assets/img/banner/adventage-banner.svg') }}" class="img-fluid w-100"
                                alt="Adventage Banner" data-aos-once="true" data-aos="fade"
                                data-aos-duration="1400">
                        </div>
                    </div>
            </section>
            {{-- END ADVENTAGE SECTION --}}


            {{-- RULE SECTION --}}
            <section class="rule section-gap" id="rule">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400">Play
                            by the <span class="light">Rules</span>, Win with <span class="light">Strategy</span>,
                            Your Roadmap to <span class="primary">Startup</span>
                            <span class="light">Competition
                                Success</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">
                            Navigate the path to victory by acquainting yourself with the Rules and
                            Regulations section. This section serves as your compass, outlining the guidelines,
                            processes.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left"
                            data-aos-duration="1400">
                            <div class="wrapper-number d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px">
                                <h3>1</h3>
                            </div>
                            <h6 class="primary" style="margin-bottom: 5px">Eligibility</h6>
                            <p class="paragraph light">Must be a legally registered business entity. Startups in all
                                industries are welcome to apply. The competition is open to both early-stage.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400"
                            data-aos-delay="300">
                            <div class="wrapper-number d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px">
                                <h3>2</h3>
                            </div>
                            <h6 class="primary" style="margin-bottom: 5px">Submission Guidelines</h6>
                            <p class="paragraph light">Submissions must include a comprehensive business plan or pitch
                                deck. Startups must provide a clear description of their product/service.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400"
                            data-aos-delay="600">
                            <div class="wrapper-number d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px">
                                <h3>3</h3>
                            </div>
                            <h6 class="primary" style="margin-bottom: 5px">Evaluation Process</h6>
                            <p class="paragraph light">Innovation and uniqueness of the product/service. Market
                                potential and scalability. Business model viability and financial sustainability.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-default" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400"
                            data-aos-delay="900">
                            <div class="wrapper-number d-flex justify-content-center align-items-center"
                                style="margin-bottom: 14px">
                                <h3>4</h3>
                            </div>
                            <h6 class="primary" style="margin-bottom: 5px">Intellectual Property</h6>
                            <p class="paragraph light">Participants retain ownership of their intellectual property,
                                but it is recommended that they take necessary measures to protect ideas.</p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END RULE SECTION --}}


            {{-- TESTIMONI SECTION --}}
            <section class="testimoni section-gap" id="testimoni">
                <div class="row align-items-center justify-content-between row-gap">
                    <div class="col-5 pe-lg-5 pe-xxl-0 d-none d-lg-inline-block">
                        <div class="wrapper-banner">
                            <img src="{{ asset('assets/img/banner/testimonial-banner.svg') }}"
                                class="img-fluid w-100" alt="Testimonial Banner" data-aos-once="true"
                                data-aos="fade" data-aos-duration="1400">
                        </div>
                    </div>

                    <div class="offset-xxl-1  col-lg-7 col-xxl-6">
                        <h2 class="title" style="margin-bottom: 20px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">Hear from the <span class="light">Visionaries</span>, <span
                                class="primary">Inspiring</span> <span class="light">Stories</span>
                            from Past <span class="light">Participants</span></h2>
                        <p class="paragraph" style="margin-bottom: 36px;" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">In the Testimonial section, we bring you the
                            stories of past participants who have experienced the transformative power of the startup
                            competition firsthand.</p>

                        <div class="wrapper position-relative" data-aos-once="true" data-aos="fade-right"
                            data-aos-duration="1400">
                            <div class="swiper mySwiperTestimoni position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper-testimonial d-flex flex-column gap-3">
                                            <div class="wrapper d-flex gap-3 align-items-center">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/testimonial/testimonial-1.svg') }}"
                                                        class="img-fluid" alt="Testimonial Profile Image"
                                                        style="border-radius: 5px;" width="50" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="primary" style="margin-bottom: 2px;">Jessica
                                                        Chen</h6>
                                                    <p class="subtitle" style="color: white;">Co-founder and
                                                        CEO
                                                        of
                                                        TechGenius
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“I am incredibly grateful for the
                                                opportunities
                                                and growth that
                                                the StartUpXcel has provided me as a young entrepreneur. As a
                                                participant in last year's
                                                competition, I had the privilege of showcasing my startup to
                                                industry
                                                experts,
                                                investors, and mentors. The valuable feedback.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper-testimonial d-flex flex-column gap-3">
                                            <div class="wrapper d-flex gap-3 align-items-center">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/testimonial/testimonial-2.svg') }}"
                                                        class="img-fluid" alt="Testimonial Profile Image"
                                                        style="border-radius: 5px;" width="50" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="primary" style="margin-bottom: 2px;">John Smith</h6>
                                                    <p class="subtitle" style="color: white;">Founder & CEO, TechX
                                                        Solutions
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“Participating in the startup competition was a
                                                transformative experience for me. It provided a platform to showcase our
                                                innovative solution and receive valuable feedback from industry experts.
                                                The competition's rigorous judging process helped us refine our business
                                                model.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper-testimonial d-flex flex-column gap-3">
                                            <div class="wrapper d-flex gap-3 align-items-center">
                                                <div
                                                    class="wrapper-profile d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('assets/img/testimonial/testimonial-3.svg') }}"
                                                        class="img-fluid" alt="Testimonial Profile Image"
                                                        style="border-radius: 5px;" width="50" height="86">
                                                </div>
                                                <div class="wrapper">
                                                    <h6 class="primary" style="margin-bottom: 2px;">Sarah Johnson</h6>
                                                    <p class="subtitle" style="color: white;">Venture Capitalist &
                                                        Competition Judge</p>
                                                </div>
                                            </div>
                                            <p class="paragraph-small">“As a judge in the startup competition, I was
                                                impressed by the caliber of talent and innovation on display. It was
                                                inspiring to witness the passion and dedication of the entrepreneurs as
                                                they presented their ideas. The competition provided a valuable
                                                opportunity to identify.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-testimoni position-absolute"></div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END TESTIMONI SECTION --}}


            {{-- FAQ SECTION --}}
            <section class="faq section-gap" id="faq">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6">
                        <h2 class="title" data-aos-once="true" data-aos="fade-right" data-aos-duration="1400"><span
                                class="light">Everything</span> You Need to Know, Frequently <span
                                class="light">Asked Questions</span> about the
                            <span class="primary">Competition</span>
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos-once="true" data-aos="fade-left" data-aos-duration="1400">In
                            the FAQ section, we address the most common questions and concerns that
                            participants may have regarding the startup competition.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <h6>How can I participate in StartUpXcel</h6>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">To participate in StartUpXcel, you need to
                                            submit an application through our official website during the application
                                            period. Make sure to provide detailed information about your startup,
                                            including your business model, market potential, and team members.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <h6>What criteria are used to evaluate the startups in StartUpXcel?</h6>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">StartUpXcel evaluates startups based on various
                                            criteria, including innovation, market potential, scalability, team
                                            capability, and value proposition. The judging panel assesses each startup's
                                            potential for growth and impact in their respective industries.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="true" aria-controls="collapseThree">
                                        <h6>Can I participate if my startup is still at an early stage?</h6>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">Yes, StartUpXcel welcomes startups at different
                                            stages of development, including early-stage ventures. We believe in
                                            fostering innovation and supporting startups in their growth journey.
                                            However, startups should demonstrate a clear value proposition and the
                                            potential for scalability.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="accordion" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        <h6>Are there any fees associated with participating in StartUpXcel?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">No, there are no application or participation
                                            fees for StartUpXcel. We aim to provide an inclusive platform for startups
                                            to showcase their potential without any financial burden. However, selected
                                            startups may need to cover their own travel and accommodation expenses for
                                            the final rounds.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                        <h6>What opportunities are available for the winners of StartUpXcel?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">StartUpXcel offers a range of opportunities for
                                            winners, including cash prizes, mentorship programs, networking events, and
                                            exposure to potential investors and partners. The winners also gain
                                            recognition and credibility within the startup ecosystem, opening doors for
                                            future growth and collaboration.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos-once="true" data-aos="zoom-in-up"
                            data-aos-duration="600">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                        aria-controls="collapseSix">
                                        <h6>How are the finalists and winners selected in StartUpXcel?</h6>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body pt-0">
                                        <p class="paragraph-small pt-3">The selection process involves multiple stages,
                                            including initial screening, pitch presentations, and Q&A sessions with the
                                            judging panel. The finalists are chosen based on their performance
                                            throughout the evaluation process, and the winners are determined by a
                                            combination of judges' scores and audience voting (where applicable).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END FAQ SECTION --}}


            {{-- CTA --}}
            <section class="cta section-gap" data-aos-once="true" data-aos="zoom-in-up" data-aos-duration="600">
                <div class="row justify-content-center position-relative" style="z-index: 9999;">
                    <div
                        class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-md-center d-md-flex flex-md-column align-items-md-center">
                        <h2 class="title" style="margin-bottom: 20px;"><span class="light">Ready</span> to Make
                            an
                            <span class="light">Impact?</span> Take the Leap and <span class="light">Join</span>
                            the <span class="primary">Competition</span>
                        </h2>
                        <p class="paragraph" style="margin-bottom: 36px;">Ready to step into the spotlight? The
                            CTA
                            (Call-to-Action) section is your gateway to a remarkable opportunity to showcase your
                            startup's
                            potential. Join a vibrant community of innovators, entrepreneurs, and investors who are
                            passionate about disrupting industries and driving change.</p>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                            <a href="#adventage" class="button-default">Award Competition</a>
                            <a href="#" class="button-reverse d-flex align-items-center gap-2">
                                Register Now
                                <div class="arrow-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid"
                                        alt="Button Arrow Icon">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END CTA --}}
        </div>
    </main>
    @include('components.footer')
    @include('partials.judges')


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        var swiper = new Swiper(".mySwiperJudges", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                767: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
            },
            pagination: {
                el: ".swiper-pagination-judges",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiperTestimoni", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination-testimoni",
                clickable: true,
            },
        });
    </script>
    {{-- END SCRIPT JS --}}
</body>

</html>
