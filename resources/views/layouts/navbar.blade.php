<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vinix7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <style>
        .navbar {
            background-color:rgb(255, 255, 255) !important; 
        }
        .navbar .nav-link {
            color: black!important; 
            transition: all 0.3s ease;
            
        }
        .navbar .nav-link:hover {
            color: black !important;
            font-weight: bold !important;
        }
    </style>
</head>
<body>
   <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ URL('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ URL('/') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('kelas')) ? 'active' : '' }}" href="{{ URL('kelas') }}">Kelas</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <a class="nav-link {{ request()->is('user/' . auth()->id() . '/training') ? 'active' : '' }}"
                    href="{{ route('user.training.index', auth()->id()) }}">
                    Training
                    </a>
                    <a class="nav-link {{ request()->is('user/' . auth()->id() . '/order') ? 'active' : '' }}"
                    href="{{ route('user.order.index', auth()->id()) }}">
                        Order
                    </a>
                        <a class="nav-link 
                            {{ request()->is('user/' . auth()->id() . '/laporan') ? 'active' : '' }}"
                            href="{{ route('user.laporan.index', auth()->id()) }}">
                            Laporan
                        </a>
                        <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ URL('dashboard') }}">Dashboard</a>
                    </li>    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                   
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    @yield('content')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    

</body>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1 -->
            <div class="footer-column">
                <a href="#" class="footer-logo">
                    <span class="vinix">VINIX</span><span class="seven">7</span>
                    <strong class="skill">Skill</strong><strong class="boost">Boost</strong>
                </a>
                <p class="footer-description">
                    Platform edukasi profesional bersertifikat untuk mempersiapkan Anda menghadapi tuntutan industri masa depan.
                </p>
                <p class="footer-contact">
                    <i class="fas fa-envelope"></i> support@vinix.id
                </p>
            </div>

            <!-- Column 2 -->
            <div class="footer-column">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#category">Kelas</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                    <li><a href="sertifikat.html">Sertifikat</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="footer-column">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                    <li><a href="https://www.TikTok.com/" target="_blank">Tiktok</a></li>
                    <li><a href="https://www.Linkedin.com/" target="_blank">Linkedin</a></li>
                    <li><a href="https://www.Behance.com/" target="_blank">Behance</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 VINIX SkillBoost. All rights reserved.
        </div>
    </div>
</footer>

<style>
:root {
    --vinix-blue: #007bff;
    --dark-blue: #0056b3;
    --vinix-red: #e74c3c;
    --btn-yellow: #FFC107;
    --btn-yellow-dark: #FFAD00;
    --highlight-green: #2ecc71;
    --text-color: #333;
    --text-secondary: #666;
    --bg-light: #f7f9fc;
    --bg-white: #ffffff;
    --bg-dark: #2c3e50;
    --shadow-light: 0 5px 20px rgba(0, 0, 0, 0.05);
    --shadow-hover: 0 10px 35px rgba(0, 0, 0, 0.1);
    --radius-default: 12px;
    --border-light: #e0e0e0;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* FOOTER STYLES */
.footer {
    background: var(--bg-dark);
    color: #ecf0f1;
    padding: 60px 0 30px;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 40px;
    padding-bottom: 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}

.footer-column h4 {
    color: #fff;
    margin-bottom: 15px;
    font-weight: 600;
    font-size: 1.2rem;
}

.footer-column ul {
    list-style: none;
}

.footer-column ul li a {
    color: #bdc3c7;
    transition: color 0.3s;
    display: block;
    padding: 5px 0;
    text-decoration: none;
    font-size: 0.95rem;
}

.footer-column ul li a:hover {
    color: var(--vinix-blue);
    transform: translateX(5px);
}

.footer-logo {
    font-size: 2rem;
    font-weight: 700;
    color: var(--vinix-blue);
    margin-bottom: 15px;
    display: block;
    text-decoration: none;
}

.footer-logo .vinix {
    color: var(--vinix-blue);
}

.footer-logo .seven {
    color: var(--btn-yellow);
}

.footer-logo .skill {
    color: var(--vinix-blue);
}

.footer-logo .boost {
    color: var(--btn-yellow);
}

.footer-description {
    font-size: 0.9rem;
    margin-top: 15px;
    color: #bdc3c7;
    line-height: 1.6;
}

.footer-contact {
    font-size: 0.9rem;
    margin-top: 10px;
    color: #bdc3c7;
    display: flex;
    align-items: center;
    gap: 8px;
}

.footer-bottom {
    text-align: center;
    font-size: 0.85rem;
    padding-top: 20px;
    color: #bdc3c7;
}

/* =========================================== */
/* RESPONSIVE STYLES */
/* =========================================== */

/* Tablet Landscape (992px - 1200px) */
@media (max-width: 1200px) {
    .footer-grid {
        gap: 30px;
    }
    
    .footer-logo {
        font-size: 1.8rem;
    }
}

/* Tablet (768px - 992px) */
@media (max-width: 992px) {
    .footer {
        padding: 50px 0 25px;
    }
    
    .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 40px 30px;
    }
    
    .footer-column:first-child {
        grid-column: 1 / -1;
        text-align: center;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .footer-logo {
        font-size: 1.7rem;
        justify-content: center;
    }
    
    .footer-description {
        font-size: 0.95rem;
    }
}

/* Mobile Landscape (576px - 768px) */
@media (max-width: 768px) {
    .footer {
        padding: 40px 0 20px;
    }
    
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        text-align: center;
    }
    
    .footer-column:first-child {
        grid-column: 1;
    }
    
    .footer-logo {
        font-size: 1.6rem;
    }
    
    .footer-column h4 {
        font-size: 1.1rem;
        margin-bottom: 12px;
    }
    
    .footer-column ul li a {
        padding: 4px 0;
        font-size: 0.9rem;
    }
    
    .footer-contact {
        justify-content: center;
        font-size: 0.85rem;
    }
}

/* Mobile Portrait (di bawah 576px) */
@media (max-width: 576px) {
    .footer {
        padding: 30px 0 15px;
    }
    
    .container {
        width: 95%;
    }
    
    .footer-grid {
        gap: 25px;
    }
    
    .footer-logo {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    
    .footer-description {
        font-size: 0.85rem;
        margin-top: 10px;
    }
    
    .footer-column h4 {
        font-size: 1rem;
        margin-bottom: 10px;
    }
    
    .footer-column ul li a {
        font-size: 0.85rem;
        padding: 3px 0;
    }
    
    .footer-contact {
        font-size: 0.8rem;
    }
    
    .footer-bottom {
        font-size: 0.8rem;
        padding-top: 15px;
    }
}

/* Very Small Mobile (di bawah 400px) */
@media (max-width: 400px) {
    .footer {
        padding: 25px 0 15px;
    }
    
    .footer-logo {
        font-size: 1.4rem;
    }
    
    .footer-description {
        font-size: 0.8rem;
    }
    
    .footer-column h4 {
        font-size: 0.95rem;
    }
    
    .footer-column ul li a {
        font-size: 0.8rem;
    }
}

/* Tambahan untuk aksesibilitas dan pengalaman pengguna */
@media (hover: hover) {
    .footer-column ul li a {
        transition: all 0.3s ease;
    }
    
    .footer-column ul li a:hover {
        color: var(--vinix-blue);
        transform: translateX(5px);
    }
}

/* High DPI Screens */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .footer-logo {
        font-weight: 800;
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    .footer {
        background: #1a252f;
    }
}

/* Print styles */
@media print {
    .footer {
        display: none;
    }
}
</style>
</html>
