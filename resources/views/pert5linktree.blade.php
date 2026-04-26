<!DOCTYPE html>
<html lang="id">

<head>
    <title>ARAH COFFEE | TikTok | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #eceef1;
        }

        .fw-medium {
            font-weight: 500 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .app-container {
            width: 100%;
            max-width: 36.25rem;
            position: relative;
            background-color: #eceef1;
            min-height: 100vh;
        }

        @media (min-width: 36rem) {
            body {
                background-color: #9ba0a3;
            }

            .app-container {
                box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15);
                border-radius: 1.5rem 1.5rem 0 0;
                margin-top: 2.5rem;
            }
        }

        .icon-circle {
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(255, 255, 255, 0.7);
            border: 0.0625rem solid rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(0.25rem);
            transition: transform 0.2s;
            cursor: pointer;
        }

        .icon-circle:hover {
            background: #fff;
            transform: scale(0.95);
        }

        .icon-circle svg.icon-sun {
            width: 1.125rem;
            height: 1.125rem;
        }

        .icon-circle svg.icon-share {
            width: 1.25rem;
            height: 1.25rem;
        }

        .profile-img {
            width: 6rem;
            height: 6rem;
            object-fit: contain;
            background-color: #fff;
        }

        .social-link {
            transition: transform 0.2s;
            color: #000;
        }

        .social-link:hover {
            transform: scale(1.1);
            color: #000;
        }

        .social-link svg {
            width: 2rem;
            height: 2rem;
        }

        .links {
            gap: 0.875rem;
        }

        .link-item {
            transition: transform 0.15s ease, background-color 0.15s;
            color: #000;
            text-decoration: none !important;
            box-shadow: 0.018rem 0.031rem 0.043rem rgba(0, 0, 0, 0.02), 0.125rem 0.25rem 0.343rem rgba(0, 0, 0, 0.03);
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }

        @media (min-width: 36rem) {
            .link-item {
                font-size: 1rem;
            }
        }

        .link-item:hover {
            transform: scale(1.02);
            background-color: #f9f9f9;
            color: #000;
        }

        .link-item .text-wrap {
            padding: 0 2.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.2;
        }

        /* --- PERBAIKAN CSS TITIK TIGA (DOTS) --- */
        .link-item .dots {
            opacity: 0.5;
            width: 1.5rem;
            height: 1.5rem;
            transition: 0.2s;
            /* Pastikan terpisah dari flow flexbox agar right: 1rem bekerja sempurna */
            position: absolute;
            right: 1rem;
        }

        .link-item:hover .dots {
            opacity: 1;
            background-color: rgba(0, 0, 0, 0.05);
        }

        .link-item .dots svg {
            width: 0.1875rem;
            height: 0.6875rem;
        }

        .footer-links {
            padding: 1rem 1.25rem 8.75rem;
            font-size: 0.6875rem;
        }

        .footer-links a {
            color: #000;
            text-decoration: none;
            margin: 0 0.25rem;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .floating-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 100%;
            max-width: 36.25rem;
            padding: 3.75rem 1rem 1.5rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, transparent 100%);
            z-index: 100;
        }

        .pill-button {
            border-radius: 99rem;
            transition: transform 0.2s;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            font-size: 0.9375rem;
        }

        .pill-button:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="d-flex justify-content-center text-dark">

    <div class="app-container pb-5">

        <div class="top-bar d-flex justify-content-between p-3 position-absolute w-100">
            <div class="icon-circle rounded-circle d-flex align-items-center justify-content-center">
                <svg class="icon-sun" viewBox="0 0 28 28" fill="currentColor">
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z">
                    </path>
                </svg>
            </div>
            <div class="icon-circle rounded-circle d-flex align-items-center justify-content-center">
                <svg class="icon-share" viewBox="0 0 256 256" fill="currentColor">
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                    </path>
                </svg>
            </div>
        </div>

        <div class="profile d-flex flex-column align-items-center pt-5 mt-4 text-center">
            <img src="https://ugc.production.linktr.ee/d848c928-3cba-4402-97d1-9f26b4c849df_Untitled-design.png?io=true&size=avatar-v3_0"
                alt="ARAH COFFEE" class="profile-img rounded-circle mb-3 shadow-sm">
            <h1 class="h4 fw-semibold mb-1">ARAH COFFEE</h1>
            <p class="mb-3 px-4 fw-medium">PT Arah Rasa Nusantara</p>

            <div class="social-links">
                <a href="https://tiktok.com/@arahcoffee.id" target="_blank" rel="noopener noreferrer"
                    class="social-link d-inline-block">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="links d-flex flex-column p-4 pt-4">

            <a href="http://wa.me/6281128512545" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Customer Care</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="https://wa.me/6289654962216" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Marketing Event, Sponsorship, Advertising</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="http://wa.me/6281127011977" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Brand Collaboration</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="https://arahcoffee.co.id/partnership" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Open my Own ARAHome (Kemitraan)</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="https://arahcoffee.co.id/project" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Profit Sharing on Assets</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="http://bit.ly/APPLY-ENERGISTA" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Career</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

            <a href="https://arahcoffee.co.id/" target="_blank"
                class="link-item bg-white p-3 d-flex justify-content-center align-items-center position-relative fw-medium">
                <div class="text-wrap text-center">Website</div>
                <div class="dots rounded-circle d-flex align-items-center justify-content-center">
                    <svg viewBox="0 0 3 11" fill="currentColor">
                        <circle cx="1.5" cy="1.5" r="1.5" />
                        <circle cx="1.5" cy="5.5" r="1.5" />
                        <circle cx="1.5" cy="9.5" r="1.5" />
                    </svg>
                </div>
            </a>

        </div>

        <div class="footer-links text-center fw-medium w-100 d-block">
            <a href="#">Cookie Preferences</a> &bull;
            <a href="#">Report</a> &bull;
            <a href="#">Privacy</a>
        </div>

        <div class="floating-cta d-flex flex-column align-items-center">
            <a href="https://linktr.ee/" target="_blank"
                class="pill-button bg-white text-dark d-flex align-items-center mb-2 fw-semibold px-4 py-2 text-decoration-none">
                linktr.ee/you ✕
            </a>
            <div class="cta-text text-white fw-medium">Join arah.coffee on Linktree today</div>
        </div>

    </div>

</body>

</html>
