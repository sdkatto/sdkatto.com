<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>aria – designer, developer, tech nomad</title>
        <meta name="title" content="aria – designer, developer, tech nomad">
        <meta name="description" content="I like alpacas">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://aria.ph/">
        <meta property="og:title" content="aria – designer, developer, tech nomad">
        <meta property="og:description" content="I like alpacas">
        <meta property="og:image" content="">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://aria.ph/">
        <meta property="twitter:title" content="aria – designer, developer, tech nomad">
        <meta property="twitter:description" content="I like alpacas">
        <meta property="twitter:image" content="">
        
        <title>Aria</title>
        
        <link rel="stylesheet" type="text/css" href="{{ mix('css/index.css') }}"/>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center text-white" style="min-height: 100vh;">
                    <div>
                        <h1 class="my-5">i'm aria, the tech nomad</h1>
                        <div class="my-5">
                            <p>
                                I design and develop web applications as a <span class="text-secondary">software engineer</span>
                                at <a href="https://www.thinkingpandas.com/">Thinking Pandas</a>
                            </p>
                            <p>                                
                                I supervise incubation and acceleration programs
                                as the <span class="text-secondary">VP for Innovation</span>
                                at <a href="https://developh.org/">Developh</a> – an international
                                nonprofit accelerating student-led tech and innovation
                            </p>
                            <p>    
                                I also <span class="text-secondary">co-founded</span>
                                <a href="https://justbecause.ph">Just Because</a> where we research and develop
                                IT solutions
                            </p>
                        </div>
                        <div class="my-5">
                            <div>
                                <a href="https://github.com/fengxiaoyue"><i data-eva="github-outline" data-eva-fill="#fff"></i></a>
                                <a href="https://twitter.com/f_xyue"><i data-eva="twitter-outline" data-eva-fill="#fff"></i></a>
                                <a href="mailto:hi@aria.ph"><i data-eva="email-outline" data-eva-fill="#fff"></i></a>
                            </div>
                            <p>ping me at <a href="mailto:hi@aria.ph">hi@aria.ph</a></p>
                        </div>      
                    </div>              
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
