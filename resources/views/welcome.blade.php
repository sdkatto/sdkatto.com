<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <meta name="title" content="@fengxiaoyue">
        <meta name="description" content="profile of aria fong aka fengxiaoyue">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://fengxiaoyue.dev/">
        <meta property="og:title" content="@fengxiaoyue">
        <meta property="og:description" content="profile of aria fong aka fengxiaoyue">
        <meta property="og:image" content="{{ asset('img/tb.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://fengxiaoyue.dev/">
        <meta property="twitter:title" content="@fengxiaoyue">
        <meta property="twitter:description" content="profile of aria fong aka fengxiaoyue">
        <meta property="twitter:image" content="{{ asset('img/tb.png') }}">

        <meta name="theme-color" content="#212121">
        <title>fengxiaoyue</title>
        
        <link rel="stylesheet" type="text/css" href="{{ mix('css/index.css') }}"/>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-center text-white" style="min-height: 100vh;">
                    <div>
                        <div class="my-5 text-center">
                            <h1 class="mb-0">@fengxiaoyue</h1>
                        </div>
                        <div class="my-5">
                            <p data-aos="fade-right" data-aos-delay="500" data-aos-duration="600">
                                layout janitor, devops demon, OSINT cat
                            </p>
                            <p data-aos="fade-right" data-aos-delay="1500" data-aos-duration="600">
                                "Brute force is the last resort of the incompetent"
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
                                <a href="mailto:hi@fengxiaoyue.dev" class="mr-3 text-decoration-none">
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
