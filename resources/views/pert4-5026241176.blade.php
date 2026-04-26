<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 4 5026241176</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
        }

        .main-content {
            background-color: #ffffff;
            padding: 80px 80px 0 80px;
            min-height: 100vh;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .testi-row {
            margin-top: 50px;
        }

        .testi-item {
            margin-bottom: 60px;
            padding: 0 15px;
        }

        .testimonial-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonial-text {
            font-style: italic;
            color: #666;
            font-size: 0.85rem;
            line-height: 1.6;
        }

        .client-name {
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 10px;
            margin-bottom: 0;
            color: #333;
        }

        .client-title {
            font-size: 0.75rem;
            color: #999;
        }

        .logo-section {
            background-color: #e9ecef;
            /* Area footer logo */
            padding: 50px 0;
            margin-left: -80px;
            margin-right: -80px;
            margin-top: auto;
        }

        .company-logo {
            max-height: 40px;
            width: auto;
        }
    </style>
</head>

<body>

    <div class="container main-content shadow-sm">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-weight: 400; font-size: 1.8rem; color: #444;">Our clients love us.</h2>
            </div>
        </div>

        <div class="row justify-content-center testi-row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6 testi-item d-flex align-items-start">
                        <img src="https://th.bing.com/th/id/OIP.-dvq6TtdPkEag9lU2k0xWQHaEK?w=305&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                            alt="Client 1" class="testimonial-img mr-4">
                        <div>
                            <p class="testimonial-text">"The attention to detail and creative approach this team took
                                was beyond our expectations. Simply brilliant."</p>
                            <p class="client-name">Bill Gates</p>
                            <p class="client-title"> Co-Founder of Microsoft</p>
                        </div>
                    </div>

                    <div class="col-md-6 testi-item d-flex align-items-start">
                        <img src="https://th.bing.com/th/id/OIP.F_qFBlR-S9Oa1qc_apdtOQHaEK?w=296&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                            alt="Client 2" class="testimonial-img mr-4">
                        <div>
                            <p class="testimonial-text">"Working with them felt like a true partnership. They understood
                                our vision from day one."</p>
                            <p class="client-name">Mark Zuckerberg</p>
                            <p class="client-title">CEO of Facebook</p>
                        </div>
                    </div>

                    <div class="col-md-6 testi-item d-flex align-items-start">
                        <img src="data:image/webp;base64,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"
                            alt="Client 3" class="testimonial-img mr-4">
                        <div>
                            <p class="testimonial-text">"Efficiency and aesthetics combined. Our user engagement has
                                increased by 40% since the redesign."</p>
                            <p class="client-name">Tim Cook</p>
                            <p class="client-title">CEO of Apple</p>
                        </div>
                    </div>

                    <div class="col-md-6 testi-item d-flex align-items-start">
                        <img src="https://th.bing.com/th/id/OIP.R-LVdzRecRFhwxZqgoobQwHaE8?w=269&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                            alt="Client 4" class="testimonial-img mr-4">
                        <div>
                            <p class="testimonial-text">"The best decision we made this year. Professional, responsive,
                                and incredibly talented designers."</p>
                            <p class="client-name">Elon Musk</p>
                            <p class="client-title">CEO of Tesla</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row logo-section no-gutters">
            <div class="col-12 d-flex justify-content-around align-items-center flex-wrap">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon"
                    class="company-logo px-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google"
                    class="company-logo px-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg" alt="eBay"
                    class="company-logo px-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/50/Oracle_logo.svg" alt="Oracle"
                    class="company-logo px-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg"
                    alt="Meta" class="company-logo px-3">
            </div>
        </div>
    </div>
    </div>

</body>

</html>
