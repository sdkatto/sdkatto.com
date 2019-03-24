<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <meta name="title" content="aria – designer, developer, tech nomad">
        <meta name="description" content="I like alpacas">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://aria.ph/">
        <meta property="og:title" content="aria – designer, developer, tech nomad">
        <meta property="og:description" content="I like alpacas">
        <meta property="og:image" content="{{ asset('img/tb.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://aria.ph/">
        <meta property="twitter:title" content="aria – designer, developer, tech nomad">
        <meta property="twitter:description" content="I like alpacas">
        <meta property="twitter:image" content="{{ asset('img/tb.png') }}">

        <meta name="theme-color" content="#212121">
        <title>aria</title>
        
        <link rel="stylesheet" type="text/css" href="{{ mix('css/index.css') }}"/>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-center text-white" style="min-height: 100vh;">
                    <div>
                        <h1 class="my-5">i'm ar<span class="text-primary">i</span>a</h1>
                        <div class="my-5">
                            <p data-aos="fade-right" data-aos-delay="500" data-aos-duration="600">
                                I design and develop web applications as a <span class="text-secondary font-weight-bold">software engineer</span>
                                at <a class="font-weight-bold" href="https://www.thinkingpandas.com/">Thinking Pandas</a>
                            </p>
                            <p data-aos="fade-right" data-aos-delay="1000" data-aos-duration="600">                                
                                I supervise incubation and acceleration programs
                                as the <span class="text-secondary font-weight-bold">VP for Innovation</span>
                                at <a class="font-weight-bold" href="https://developh.org/">Developh</a> – an international
                                nonprofit accelerating student-led tech and innovation
                            </p>
                            <p data-aos="fade-right" data-aos-delay="1500" data-aos-duration="600">    
                                I also <span class="text-secondary font-weight-bold">co-founded</span>
                                <a class="font-weight-bold" href="https://justbecause.ph">Just Because</a> where we research and develop
                                IT solutions
                            </p>
                        </div>
                        <div class="my-5" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="800">
                            <div>
                                <a href="https://github.com/fengxiaoyue" class="mr-3 text-decoration-none">
                                    <i data-eva="github-outline" data-eva-fill="#fff" data-eva-animation="pulse" data-eva-infinite="true"></i>
                                    <span class="sr-only">GitHub</span>
                                </a>
                                <a href="https://twitter.com/f_xyue" class="mr-3 text-decoration-none">
                                    <i data-eva="twitter-outline" data-eva-fill="#fff" data-eva-animation="pulse" data-eva-infinite="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="mailto:hi@aria.ph" class="mr-3 text-decoration-none">
                                    <i data-eva="email-outline" data-eva-fill="#fff" data-eva-animation="pulse" data-eva-infinite="true"></i>
                                    <span class="sr-only">Email</span>
                                </a>
                            </div>
                        </div>      
                    </div>              
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
