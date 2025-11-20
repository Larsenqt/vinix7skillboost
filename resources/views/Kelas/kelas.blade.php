@extends('layouts.navbar')

@section('content')

<section class="micro-learning-section">
        <div class="container micro-learning-content">

            <div class="micro-learning-image">
                <img src="images/hero3.jpg" alt="Ilustrasi pria memegang laptop dengan berbagai skill di sekitarnya">
            </div>

            <div class="micro-learning-text">
                <h2>
                    Mulai Langkah bersama <br>
                    <span>
                        <span style="color: var(--vinix-blue);">VINIX</span>
                        <span style="color: var(--btn-yellow);">7</span>
                        <span style="color: var(--vinix-blue);">SKILL</span>
                        <strong style="color: var(--btn-yellow);">Boost</strong>
                    </span>
                </h2>
                <ul class="benefit-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        Pembelajaran berbasis micro-learning dengan durasi 1-2 jam per sesi selama 3-7 hari.
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        Kurikulum Terstruktur & Mentor ahli
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        Berbagai jenis learning path!
                    </li>
                </ul>
                <a href="#category" class="btn-primary" style="margin-top: 20px;">
                    Lihat Semua Learning Path</i>
                </a>
            </div>
        </div>
    </section>

    <!-- CATEGORY SECTION -->
    <section class="grid-section" id="category">
        <div class="container">

            <h2>
                Kuasai Ratusan Skill, Bangun Portofolio & Bersertifikat. <br>
                <span style="color: var(--vinix-blue);">Pilih kategori kelas</span>
            </h2>
            <p class="subtitle">
                Temukan pelatihan yang relevan dengan tujuan karir masa depan Anda.
            </p>
        

            <div class="custom-grid">

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori1.png" alt="Data Scientist">
                    </div>
                    <p>Data Scientist</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori2.jpg" alt="Digital Forensic">
                    </div>
                    <p>Digital Forensic Engineer</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori3.jpg" alt="Financial Market">
                    </div>
                    <p>Financial Market Analyst</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori4.jpg" alt="Business Digital Specialist">
                    </div>
                    <p>Business Digital Specialist</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori5.jpg" alt="Cybersecurity Engineer">
                    </div>
                    <p>Cybersecurity Engineer</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori6.jpg" alt="Web Dev & UI/UX">
                    </div>
                    <p>Web Dev & UI/UX</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori7.jpg" alt="Designer & Marketer">
                    </div>
                    <p>Designer & Marketer</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori8.jpg" alt="SDM Management">
                    </div>
                    <p>SDM Management</p>
                </a>

                <a href="" class="custom-card category-card">
                    <div class="card-image">
                        <img src="images/kategori9.jpg" alt="TikTok Micro-Influencer">
                    </div>
                    <p>TikTok Micro-Influencer</p>
                </a>

            </div>

        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-section" id="testimoni">
        <div class="container">

            <h2>Apa Kata Peserta Kami? 💬</h2>
            <p class="subtitle">
                Pengalaman nyata peserta setelah mengikuti pelatihan Vinix SkillBoost, membuktikan hasil nyata dalam karir mereka.
            </p>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide testimonial-card">
                        <p>"Pelatihan ini sangat membantu saya meningkatkan skill dan mendapatkan pekerjaan impian! Desain materinya modern dan mudah dicerna. Sangat *worth it*!"</p>
                        <h4>- Rina, Web Developer</h4>
                    </div>

                    <div class="swiper-slide testimonial-card">
                        <p>"Instrukturnya profesional, sangat sabar, dan materinya mudah dipahami. Recommended banget untuk yang mau *career switch* atau ingin mendalami bidang Data Analyst!"</p>
                        <h4>- Budi, Data Analyst</h4>
                    </div>

                    <div class="swiper-slide testimonial-card">
                        <p>"Fleksibilitas waktu belajar membuat saya bisa menyesuaikan dengan jadwal kerja saya. Ini adalah platform belajar digital paling efektif yang pernah saya ikuti. Portofolio saya kini lebih kuat!"</p>
                        <h4>- Siti, Digital Marketer</h4>
                    </div>

                    <div class="swiper-slide testimonial-card">
                        <p>"Saya yang awalnya hanya tahu dasar, kini bisa mengimplementasikan strategi *cybersecurity* kompleks. Kurikulumnya benar-benar standar industri."</p>
                        <h4>- Alex, Cybersecurity Engineer</h4>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
<style>
/* ========================================================== */
/* RESPONSIVE STYLES */
/* ========================================================== */

/* Tablet Landscape dan Desktop Kecil (992px - 1200px) */
@media (max-width: 1200px) {
    .micro-learning-text h2 {
        font-size: 2.4rem;
    }
    
    .custom-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Tablet (768px - 992px) */
@media (max-width: 992px) {
    .micro-learning-content {
        flex-direction: column;
        text-align: center;
        gap: 30px;
    }
    
    .micro-learning-image,
    .micro-learning-text {
        max-width: 100%;
    }
    
    .micro-learning-text h2 {
        font-size: 2.2rem;
    }
    
    .grid-section h2 {
        font-size: 2rem;
    }
    
    .testimonial-section h2 {
        font-size: 2rem;
    }
    
    .class-detail-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .class-detail-sidebar {
        position: static;
    }
}

/* Mobile Landscape (576px - 768px) */
@media (max-width: 768px) {
    .micro-learning-section,
    .grid-section,
    .testimonial-section {
        padding: 60px 0;
    }
    
    .micro-learning-text h2 {
        font-size: 1.8rem;
    }
    
    .benefit-list li {
        font-size: 1rem;
        text-align: left;
    }
    
    .custom-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .category-card {
        min-height: 200px;
        padding: 20px;
    }
    
    .category-card .card-image {
        height: 80px;
    }
    
    .category-card .card-image img {
        max-width: 60%;
    }
    
    .grid-section h2 {
        font-size: 1.8rem;
    }
    
    .grid-section .subtitle {
        margin-bottom: 40px;
    }
    
    .testimonial-card {
        padding: 25px;
        min-height: auto;
    }
    
    .class-detail-main {
        padding: 25px;
    }
    
    .class-detail-section h3 {
        font-size: 1.3rem;
    }
    
    .detail-price {
        font-size: 2.5rem;
    }
    
    .checkout-grid {
        flex-direction: column;
    }
    
    .order-summary {
        flex-basis: 100%;
        position: static;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .btn-checkout,
    .btn-cancel {
        width: 100%;
        margin-bottom: 10px;
    }
}

/* Mobile Portrait (di bawah 576px) */
@media (max-width: 576px) {
    .container {
        width: 95%;
    }
    
    .micro-learning-section,
    .grid-section,
    .testimonial-section {
        padding: 40px 0;
    }
    
    .micro-learning-text h2 {
        font-size: 1.6rem;
    }
    
    .benefit-list li {
        font-size: 0.95rem;
        margin-bottom: 10px;
    }
    
    .grid-section h2 {
        font-size: 1.6rem;
    }
    
    .grid-section .subtitle {
        font-size: 0.9rem;
        margin-bottom: 30px;
    }
    
    .category-card {
        min-height: 180px;
        padding: 15px;
    }
    
    .category-card p {
        font-size: 1rem;
    }
    
    .testimonial-section h2 {
        font-size: 1.6rem;
    }
    
    .testimonial-section .subtitle {
        font-size: 0.9rem;
        margin-bottom: 40px;
    }
    
    .testimonial-card {
        padding: 20px;
    }
    
    .class-detail-container {
        padding: 20px 15px;
    }
    
    .class-detail-main {
        padding: 20px;
    }
    
    .class-detail-hero h1 {
        font-size: 1.8rem;
    }
    
    .detail-price {
        font-size: 2.2rem;
    }
    
    .btn-buy-large {
        padding: 15px;
        font-size: 1.1rem;
        width: 100%;
    }
    
    .detail-features ul {
        columns: 1;
    }
    
    .additional-benefits ul {
        columns: 1;
    }
    
    .receipt-box {
        padding: 25px;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

/* Very Small Mobile (di bawah 400px) */
@media (max-width: 400px) {
    .micro-learning-text h2 {
        font-size: 1.4rem;
    }
    
    .btn-primary {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
    
    .category-card .card-image img {
        max-width: 70%;
    }
    
    .card-actions {
        flex-direction: column;
        gap: 10px;
    }
    
    .card-actions a {
        width: 100%;
        text-align: center;
    }
    
    .class-detail-meta {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
}

/* ========================================================== */
/* PERBAIKAN TAMBAHAN UNTUK RESPONSIVITAS */
/* ========================================================== */

/* Pastikan gambar responsif */
img {
    max-width: 100%;
    height: auto;
}

/* Perbaikan untuk teks yang panjang */
.micro-learning-text h2,
.grid-section h2,
.testimonial-section h2 {
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Perbaikan untuk elemen dengan teks panjang */
.benefit-list li,
.testimonial-card p,
.class-card p {
    word-wrap: break-word;
}

/* Perbaikan untuk grid yang lebih fleksibel */
.class-grid {
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

/* Perbaikan untuk card actions pada class card */
.class-card .card-actions {
    flex-wrap: wrap;
}

/* Perbaikan untuk form elements */
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    box-sizing: border-box;
}

/* Perbaikan untuk swiper di mobile */
@media (max-width: 768px) {
    .swiper {
        padding: 0 10px 50px;
    }
}

/* Perbaikan untuk micro-learning section di mobile */
@media (max-width: 768px) {
    .micro-learning-image {
        order: -1; /* Gambar di atas teks di mobile */
    }
}

/* ========================================================== */
/* 7. MICRO-LEARNING SECTION */
/* ========================================================== */
.micro-learning-section {
    padding: 80px 0;
    background-color: var(--bg-white); 
}

.micro-learning-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
}

.micro-learning-image {
    flex: 1;
    text-align: center;
    max-width: 45%;
}

.micro-learning-image img {
    max-width: 100%;
    height: auto;
    display: block;
}

.micro-learning-text {
    flex: 1;
    max-width: 55%;
}

.micro-learning-text h2 {
    font-size: 2.8rem;
    line-height: 1.2;
    margin-bottom: 30px;
    font-weight: 800;
}

.micro-learning-text h2 strong {
    color: var(--btn-yellow); 
}

/* List Manfaat */
.benefit-list {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.benefit-list li {
    font-size: 1.1rem;
    color: var(--text-color);
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    font-weight: 500;
}

.benefit-list i {
    color: var(--primary-blue);
    margin-right: 15px;
    font-size: 1.2rem;
    margin-top: 4px;
}

.class-detail-hero {
    background: linear-gradient(135deg, var(--vinix-blue) 0%, #0056b3 100%);
    color: white;
    padding: 60px 0 40px;
    text-align: center;
}

.class-detail-hero h1 {
    font-size: 2.8rem;
    font-weight: 800;
    margin-bottom: 15px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.class-detail-meta {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.class-detail-meta .badge {
    background: rgba(255,255,255,0.2);
    border: 1px solid rgba(255,255,255,0.3);
    font-size: 0.9rem;
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 500;
}

.class-detail-description {
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.7;
    opacity: 0.9;
}

.class-detail-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.class-detail-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    align-items: start;
}

.class-detail-main {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: var(--shadow-light);
}

.class-detail-sidebar {
    position: sticky;
    top: 100px;
}

.class-detail-section {
    margin-bottom: 40px;
}

.class-detail-section:last-child {
    margin-bottom: 0;
}

.class-detail-section h3 {
    color: var(--vinix-blue);
    font-size: 1.5rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 10px;
}

.class-detail-section h3 i {
    font-size: 1.3rem;
    width: 30px;
    text-align: center;
}

/* Checklist Styles */
.checklist {
    list-style: none;
    padding: 0;
}

.checklist li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    font-size: 1.05rem;
    padding: 8px 0;
    border-bottom: 1px solid #f5f5f5;
}

.checklist li:last-child {
    border-bottom: none;
}

.checklist i {
    margin-right: 12px;
    margin-top: 3px;
    font-size: 1.1rem;
    flex-shrink: 0;
    width: 20px;
}

.fa-check-circle {
    color: var(--highlight-green);
}

.fa-circle {
    color: var(--text-secondary);
}

/* Divider */
.section-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent 0%, var(--border-light) 50%, transparent 100%);
    margin: 40px 0;
    border: none;
}

/* Sidebar Styles */
.detail-price-section {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: var(--shadow-light);
    margin-bottom: 25px;
    text-align: center;
}

.detail-price {
    font-size: 2rem;
    font-weight: 800;
    color: var(--vinix-red);
    margin: 20px 0;
}

.btn-buy-large {
    background-color: var(--btn-yellow);
    color: var(--text-dark);
    border: 2px solid var(--btn-yellow);
    padding: 8px 60px;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color var(--transition-speed);
    flex: 1;
}

.btn-buy-large:hover {
    background-color:var(--btn-yellow-dark);
    box-shadow: var(--shadow-yellow); 
}

.detail-info-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: var(--shadow-light);
    margin-bottom: 25px;
}

.detail-info-card h4 {
    color: var(--vinix-blue);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.detail-info-card h4 i {
    font-size: 1.2rem;
}

.info-item {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #f0f0f0;
}

.info-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.info-label {
    font-weight: 600;
    color: var(--text-color);
    margin-bottom: 5px;
    display: block;
    font-size: 0.95rem;
}

.info-value {
    color: var(--text-secondary);
    font-size: 0.95rem;
    line-height: 1.5;
}

.certification-list {
    margin-top: 15px;
}

.materials-info {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px dashed var(--border-light);
}

/* Responsive Design */
@media (max-width: 992px) {
    .class-detail-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .class-detail-sidebar {
        position: static;
    }
    
    .class-detail-hero h1 {
        font-size: 2.2rem;
    }
    
    .detail-price {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .class-detail-main {
        padding: 25px;
    }
    
    .class-detail-section h3 {
        font-size: 1.3rem;
    }
    
    .class-detail-meta {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
}

@media (max-width: 480px) {
    .class-detail-container {
        padding: 20px 15px;
    }
    
    .class-detail-main {
        padding: 20px;
    }
    
    .class-detail-hero h1 {
        font-size: 1.8rem;
    }
    
    .detail-price {
        font-size: 2.2rem;
    }
    
    .btn-buy-large {
        padding: 15px;
        font-size: 1.1rem;
    }
}
/* =========================================== */
/* GRID SECTIONS (Target & Category) */
/* =========================================== */
.grid-section {
    padding: 80px 0;
    text-align: center;
}

.grid-section h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.grid-section .subtitle {
    font-size: 1rem;
    color: var(--text-secondary);
    margin-bottom: 60px;
}

.custom-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.custom-card {
    background: var(--bg-white);
    border-radius: 20px;
    padding: 40px 20px;
    box-shadow: var(--shadow-light);
    transition: 0.3s;
    text-align: center;
    height: auto;
    min-height: 220px;
    
    
}



.card-image {
    height: 100px;
    margin-bottom: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-image img {
    max-width: 100%;
    max-height: 100px;
    height: auto;
}

.custom-card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-color);
    margin-bottom: 5px;
}

.custom-card p {
    font-size: 0.9rem;
    color: var(--text-secondary);
    font-weight: 500;
}
    #category {
    background-color: var(--accent-gray);
}

.category-card {
    min-height: 250px;
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: var(--radius-default);
    position: relative;
    overflow: hidden;
    background: #fff;
    border: 1.5px solid #e0e6f1;
    transition: all 0.25s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.category-card .card-image {
    height: 100px;
    width: 100%;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
}

.category-card .card-image img {
    max-width: 45%;
    max-height: 85px;
    height: auto;
    object-fit: contain;
    border-radius: 10px;
    transition: 0.3s ease;
}

.category-card p {
    font-weight: 700;
    font-size: 1.15rem;
    color: var(--text-dark);
    margin-top: 10px;
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    border-color: var(--vinix-blue);
}

.category-card:hover .card-image img {
    transform: scale(1.08);
}

/* =========================================== */
/* CATEGORY HERO (Kategori.html) */
/* =========================================== */
.category-hero {
    background-color: var(--vinix-blue);
    color: #fff;
    text-align: center;
    padding: 100px 20px;
    min-height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.category-hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.2;
}

.category-hero p {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.5;
    opacity: 0.9;
}

/* =========================================== */
/* CLASS LIST SECTION (Kategori.html) */
/* =========================================== */
.class-list-section {
    padding: 80px 0;
    background-color: var(--bg-light);
    min-height: 50vh;
}

.class-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.class-card {
    background: var(--bg-white);
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-light);
    transition: 0.3s;
    border: 1px solid #f0f0f0;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.class-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
    border-color: var(--vinix-blue);
}

.class-card-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-top-left-radius: var(--radius-default);
    border-top-right-radius: var(--radius-default);
}

.class-content-wrapper {
    flex-grow: 1;
    padding: 25px;
}

.class-card h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: var(--text-color);
}

.badge {
    display: inline-block;
    background: var(--vinix-blue);
    color: #fff;
    padding: 5px 12px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.class-card ul {
    list-style: none;
    margin: 15px 0;
    padding-left: 0;
    margin-bottom: 20px;
}

.class-card ul li {
    margin-bottom: 8px;
    font-size: 0.95rem;
    color: var(--text-secondary);
}

.class-card ul li i {
    margin-right: 10px;
    color: var(--vinix-blue);
}

.class-card .price {
    font-size: 2rem;
    font-weight: 700;
    color: var(--vinix-red);
    margin-top: 10px;
    margin-bottom: 15px;
    padding: 0 25px;
}

.card-actions {
    margin-top: auto;
    display: flex;
    gap: 10px;
    padding: 0 25px 25px 25px;
}

.card-actions a {
    flex: 1;
    padding: 10px 15px;
    font-size: 0.95rem;
    white-space: nowrap;
}

/* =========================================== */
/* CLASS DETAIL STYLES (Kategori.html) */
/* =========================================== */
#classDetailContainer {
    background-color: #fff;
    padding: 40px;
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-light);
}

.detail-header {
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 20px;
    margin-bottom: 30px;
}

.detail-price {
    font-size: 3rem;
    font-weight: 800;
    color: #e74c3c;
    margin-top: 10px;
}

.detail-section h4 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--vinix-blue);
    margin-bottom: 15px;
    border-left: 4px solid var(--vinix-blue);
    padding-left: 15px;
}

.detail-section h5 {
    font-size: 1.1rem;
    color: var(--text-color);
    margin-bottom: 10px;
}

.mentor-info {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.mentor-info i {
    font-size: 2rem;
    color: var(--text-secondary);
    margin-right: 15px;
}

.mentor-info strong {
    display: block;
    font-size: 1.1rem;
}

.detail-features ul {
    list-style: disc;
    padding-left: 20px;
}

.outcomes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.outcome-item {
    display: flex;
    align-items: center;
    background-color: #f4f4f8;
    padding: 15px;
    border-radius: var(--radius-default);
}

.outcome-item i {
    font-size: 1.5rem;
    color: #2ecc71;
    margin-right: 15px;
    min-width: 25px;
}

.material-list {
    margin-top: 15px;
    font-weight: 600;
    color: var(--text-color);
    padding-top: 15px;
    border-top: 1px dashed #eee;
}

.additional-benefits ul {
    list-style: none;
    padding-left: 0;
    columns: 2;
    column-gap: 30px;
    margin-top: 15px;
}

.additional-benefits ul li {
    margin-bottom: 8px;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.additional-benefits ul li::before {
    content: "\f058";
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #2ecc71;
    margin-right: 8px;
}

/* =========================================== */
/* CHECKOUT STYLES (checkout.html) */
/* =========================================== */
.checkout-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
}

.checkout-grid {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    align-items: flex-start;
}

.user-form {
    background: var(--bg-white);
    padding: 30px;
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-light);
    flex: 1;
    min-width: 300px;
}

.order-summary {
    background-color: var(--bg-white);
    border: 1px solid var(--vinix-blue);
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-light);
    padding: 30px;
    flex-basis: 380px;
    flex-grow: 0;
    position: sticky;
    top: 100px;
    align-self: flex-start;
}

.order-summary h3 {
    color: var(--vinix-blue);
    border-bottom: 2px solid var(--border-light);
    padding-bottom: 10px;
    margin-bottom: 20px;
    margin-top: 0;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
    font-size: 0.95rem;
}

.summary-item .label {
    color: var(--text-secondary);
    flex: 1;
    padding-right: 10px;
}

.summary-item .value {
    color: var(--text-primary);
    font-weight: 600;
    flex: 2;
    text-align: right;
    word-break: break-all;
}

.summary-item .value.placeholder {
    color: var(--text-secondary);
    font-style: italic;
    font-weight: 400;
}

.summary-item .value.free {
    color: var(--highlight-green);
    font-weight: 700;
}

.summary-divider {
    margin: 20px 0;
    border: 0;
    border-top: 1px dashed var(--border-light);
}

.total-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--vinix-red);
    margin-top: 20px;
    padding-top: 15px;
    border-top: 2px solid var(--text-primary);
}

.total-price .label {
    color: var(--text-primary);
    font-size: 1.2rem;
    font-weight: 700;
}

.user-form h3 {
    margin-top: 30px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
}

.user-form h3:first-of-type {
    margin-top: 0;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--text-primary);
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
}

.payment-instruction-box {
    background-color: #fffaf0;
    border: 1px solid var(--btn-yellow-dark);
    border-radius: var(--radius-default);
    padding: 20px;
    margin-bottom: 30px;
}

.payment-instruction-box h4 {
    margin-top: 0;
    color: var(--btn-yellow-dark);
}

.payment-instruction-box ul {
    list-style: none;
    padding-left: 0;
    margin: 10px 0;
}

.payment-instruction-box ul li {
    margin-bottom: 8px;
    font-size: 0.95rem;
}

.form-group input[type="file"] {
    padding: 10px;
    background-color: var(--bg-light);
}

.form-group input[type="file"]::file-selector-button {
    background-color: var(--vinix-blue);
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.form-group input[type="file"]::file-selector-button:hover {
    background-color: var(--dark-blue);
}

.form-actions {
    display: flex;
    flex-wrap: nowrap;
    gap: 15px;
    margin-top: 25px;
}

/* =========================================== */
/* RECEIPT STYLES (receipt.html) */
/* =========================================== */
.receipt-page {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: var(--bg-light);
}

.receipt-box {
    background-color: var(--bg-white);
    border-radius: var(--radius-default);
    padding: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.receipt-header {
    text-align: center;
    border-bottom: 2px solid var(--border-light);
    padding-bottom: 20px;
    margin-bottom: 30px;
}

.receipt-header h1 {
    color: var(--vinix-blue);
    margin: 0;
    font-size: 1.7rem;
}

.receipt-header p {
    color: var(--text-secondary);
    font-size: 0.95rem;
    margin-top: 5px;
}

.receipt-detail-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 1rem;
}

.receipt-detail-item .label {
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.receipt-detail-item .value {
    font-weight: 600;
    text-align: right;
    font-size: 1rem;
}

.receipt-total {
    border-top: 2px dashed var(--text-primary);
    padding-top: 20px;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-primary);
}

.receipt-info-box {
    background-color: #f0fff0;
    border: 1px solid var(--highlight-green);
    border-radius: var(--radius-default);
    padding: 15px;
    margin-top: 30px;
    text-align: center;
}

.receipt-info-box p {
    margin: 5px 0;
    color: var(--highlight-green);
    font-weight: 600;
    font-size: 0.95rem;
}

.proof-section {
    margin-top: 30px;
    padding-top: 15px;
    border-top: 1px solid var(--border-light);
    text-align: center;
}

.proof-section h3 {
    font-size: 1.2rem;
    color: var(--vinix-blue);
    margin-bottom: 15px;
}

#proofImageContainer img {
    max-width: 100%;
    height: auto;
    border-radius: var(--radius-default);
    border: 2px solid var(--border-light);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.action-buttons {
    margin-top: 30px;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    margin: 0;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: opacity 0.2s, background-color 0.2s;
    cursor: pointer;
    border: none;
    font-size: 1rem;
    flex: 1;
    min-width: 150px;
}

.btn-print {
    background-color: var(--vinix-blue);
    color: white;
}

.btn-print:hover {
    background-color: #0056b3;
}

.btn-whatsapp {
    background-color: var(--highlight-green);
    color: white;
}

.btn-whatsapp:hover {
    opacity: 0.9;
}

.btn-home {
    background-color: var(--btn-yellow);
    color: var(--text-color);
}

.btn-home:hover {
    opacity: 0.9;
}

/* =========================================== */
/* PROOF OF REGISTRATION STYLES */
/* =========================================== */
.proof-container {
    max-width: 700px;
    margin: 80px auto;
    padding: 40px;
    background: var(--bg-white);
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-hover);
    text-align: center;
}

.icon-check {
    font-size: 5rem;
    color: var(--vinix-blue);
    margin-bottom: 20px;
}

.proof-box {
    background: #e9f7ff;
    padding: 25px;
    border-radius: 8px;
    margin: 30px 0;
    border: 1px solid var(--vinix-blue);
    text-align: left;
}

.proof-box p {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px dashed #ddd;
    padding: 8px 0;
}

.whatsapp-button {
    background-color: #25D366;
    color: white;
    padding: 15px 25px;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    display: block;
    margin-top: 30px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.whatsapp-button:hover {
    background-color: #1EBE5A;
}

#waLinkContainer {
    min-height: 100px;
}

/* =========================================== */
/* TESTIMONIALS SECTION */
/* =========================================== */
.testimonial-section {
    padding: 80px 0;
    background: #fff;
    text-align: center;
}

.testimonial-section h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.testimonial-section .subtitle {
    font-size: 1rem;
    color: var(--text-secondary);
    margin-bottom: 60px;
}

.swiper {
    padding-bottom: 50px;
}

.testimonial-card {
    background: #f8f9fa;
    padding: 35px;
    border-radius: var(--radius-default);
    box-shadow: var(--shadow-light);
    text-align: left;
    min-height: 200px;
    border-left: 5px solid var(--vinix-blue);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.testimonial-card p {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #333;
    font-style: italic;
}

.testimonial-card h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--vinix-blue);
    margin-top: auto;
}

.swiper-pagination-bullet-active {
    background: var(--vinix-blue) !important;
}

/* =========================================== */
/* VARIABLES & RESET */
/* =========================================== */
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

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background: var(--bg-light);
}

a {
    text-decoration: none;
    color: inherit;
}

button {
    cursor: pointer;
    border: none;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* =========================================== */
/* UTILITY CLASSES */
/* =========================================== */
.btn-primary {
    background: var(--btn-yellow);
    color: var(--text-color) !important;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 700;
    transition: 0.3s ease;
    text-align: center;
    display: inline-block;
    box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
    white-space: nowrap;
}

.btn-primary:hover {
    background: var(--btn-yellow-dark);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255, 173, 0, 0.5);
}

.btn-buy {
    background-color: var(--btn-yellow);
    color: var(--text-dark);
    border: 2px solid var(--btn-yellow);
    border-radius: 50px;
    transition: background-color 0.2s;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    padding: 10px 15px;
}

.btn-buy:hover {
    background-color:var(--btn-yellow-dark);
    box-shadow: var(--shadow-yellow); 
}

.btn-detail {
    background-color: #e9ecef;
    color: var(--text-dark);
    border: 1px solid #e9ecef;
    border-radius: 50px;
    transition: background-color 0.2s;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    padding: 10px 15px;
}

.btn-detail:hover {
    background-color: #dae0e5;
    border-color: #dae0e5;
}

.btn-checkout {
    background-color: var(--btn-yellow);
    color: var(--text-color);
    padding: 15px 50px;
    border: 1px solid var(--btn-yellow);
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s;
    
}

.btn-checkout:hover {
    background-color: var(--btn-yellow-dark);
    border-color: var(--btn-yellow-dark);
}

.btn-cancel {
    background-color: var(--bg-light);
    color: var(--text-secondary);
    border: 1px solid var(--border-light);
    padding: 15px 50px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-cancel:hover {
    background-color: var(--border-light);
    color: var(--text-primary);
}
</style>

<script>



// Tambahkan fungsi untuk menangani perubahan ukuran layar
function handleResponsiveLayout() {
    const screenWidth = window.innerWidth;
    
    // Sesuaikan jumlah kolom grid berdasarkan lebar layar
    const gridElement = document.querySelector('.custom-grid');
    if (gridElement) {
        if (screenWidth < 576) {
            gridElement.style.gridTemplateColumns = '1fr';
        } else if (screenWidth < 992) {
            gridElement.style.gridTemplateColumns = 'repeat(2, 1fr)';
        } else {
            gridElement.style.gridTemplateColumns = 'repeat(3, 1fr)';
        }
    }
    
    // Sesuaikan layout micro-learning section
    const microLearningContent = document.querySelector('.micro-learning-content');
    if (microLearningContent && screenWidth < 992) {
        microLearningContent.style.flexDirection = 'column';
        microLearningContent.style.textAlign = 'center';
    }
}

// Jalankan saat halaman dimuat dan saat ukuran layar berubah
window.addEventListener('load', handleResponsiveLayout);
window.addEventListener('resize', handleResponsiveLayout);

// Perbaikan fungsi showClassDetail untuk mobile
function showClassDetail(classId) {
    if (!currentCategory) return;
    
    const selectedClass = currentCategory.classes.find(cls => cls.id === classId);
    if (!selectedClass) return;

    const classListWrapper = document.getElementById('classListWrapper');
    const classDetailWrapper = document.getElementById('classDetailWrapper');
    const detailContainer = document.getElementById('classDetailContainer');
    
    // Sembunyikan daftar dan tampilkan detail
    classListWrapper.style.display = 'none';
    classDetailWrapper.style.display = 'block';

    // Perbarui Hero Section untuk fokus pada kelas
    document.getElementById('heroCategoryTitle').textContent = selectedClass.name;
    document.getElementById('heroCategoryDescription').textContent = selectedClass.detail.description.split('. ')[0] + '.'; 
    document.getElementById('pageTitle').textContent = `${selectedClass.name} - Detail Kelas`;

    // Render Detail Kelas - sesuaikan untuk mobile
    const mentorInfo = selectedClass.detail.mentor;
    const schedule = selectedClass.detail.schedule;
    const durationHours = selectedClass.detail.duration_hours;
    
    // Tentukan jumlah kolom berdasarkan lebar layar
    const screenWidth = window.innerWidth;
    const featuresColumns = screenWidth < 768 ? 1 : 2;
    const benefitsColumns = screenWidth < 576 ? 1 : 2;
    
    const mainFeatures = selectedClass.features.map(f => `<li><i class="fas fa-arrow-right" style="margin-right: 8px; color: var(--vinix-blue);"></i>${f}</li>`).join(''); 
    
    const coreOutcomes = selectedClass.detail.core_outcomes ? 
                         selectedClass.detail.core_outcomes.map(o => `<li><i class="fas fa-check-circle" style="color: #2ecc71; margin-right: 8px;"></i>${o}</li>`).join('') :
                         '<li>Data outcomes tidak spesifik tersedia.</li>'; 
    
    const additionalBenefits = selectedClass.detail.outcomes.benefits.map(b => `<li>${b}</li>`).join(''); 

    const mentorName = mentorInfo.includes('(') ? mentorInfo.split('(')[0].trim() : mentorInfo;
    const mentorDescription = mentorInfo.includes('(') ? mentorInfo.split('(')[1].replace(')', '') : 'Expert Industry Professional';

    detailContainer.innerHTML = `
        <div class="detail-header">
            <h2>${selectedClass.name}</h2>
            <p style="color: var(--text-secondary); margin-top: 5px;">${selectedClass.detail.description.split('. ')[0]}.</p>
            <span class="badge" style="background:#2ecc71; margin-bottom: 15px;">${selectedClass.duration}</span>
            <div class="detail-price">${selectedClass.price}</div>
        </div>
        
        <div class="detail-section" style="margin-bottom: 40px; border: 1px solid #ddd; padding: 25px; border-radius: var(--radius-default); background-color: var(--bg-white);">
            <h4 style="border-left: 4px solid #f39c12; color: #f39c12;"><i class="fas fa-user-tie"></i> Profil Mentor</h4>
            <div class="mentor-info">
                <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--vinix-blue);"></i>
                <div>
                    <strong style="font-size: 1.2rem; color: var(--text-color);">${mentorName}</strong>
                    <p style="color: var(--text-secondary); margin: 0; font-size: 0.95rem;">${mentorDescription}</p>
                </div>
            </div>
            
            <h5 style="margin-top:20px;">Informasi Pelaksanaan:</h5>
            <ul style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 5px; color: var(--text-secondary);"><i class="fas fa-calendar-alt" style="margin-right: 8px; color: var(--vinix-blue);"></i> Jadwal Kelas Live: <strong>${schedule}</strong></li>
                <li style="margin-bottom: 5px; color: var(--text-secondary);"><i class="fas fa-clock" style="margin-right: 8px; color: var(--vinix-blue);"></i> Total Durasi: <strong>${durationHours}</strong></li>
            </ul>
        </div>

        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-book-open"></i> Yang Akan Dipelajari (Curriculum Highlights)</h4>
            <ul class="detail-features" style="list-style: none; padding-left: 0; columns: ${featuresColumns}; column-gap: 30px;">
                ${mainFeatures}
            </ul>
        </div>
        
        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-brain"></i> Outcome / Skill yang Dikuasai</h4>
            <ul class="detail-features" style="list-style: none; padding-left: 0;">
                ${coreOutcomes}
            </ul>
        </div>

        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-gift"></i> Benefit & Fasilitas Kelas</h4>
            <h5 style="margin-top:10px; font-weight:700;">Fasilitas Utama:</h5>
            <div class="additional-benefits">
                <ul style="columns: ${benefitsColumns};">
                    ${additionalBenefits}
                    <li>Template analisis data (Excel, Python)</li>
                    <li>Mini project untuk portofolio</li>
                </ul>
            </div>
            
            <h5 style="margin-top:20px; font-weight:700;">Sertifikasi:</h5>
            <div class="outcomes-grid" style="margin-top: 10px;">
                ${selectedClass.detail.outcomes.main.map(item => `
                    <div class="outcome-item" style="background-color: #e8f5e9;">
                        <i class="${item.icon}" style="color: var(--vinix-blue);"></i>
                        <span>${item.text}</span>
                    </div>
                `).join('')}
            </div>
            <p style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 15px;">Materi Kursus Mencakup: <strong>${selectedClass.detail.outcomes.material}</strong></p>
        </div>
        
        <a href="checkout.html?classId=${selectedClass.id}" class="btn-primary" style="margin-top: 20px; padding: 15px 30px; font-size: 1.1rem; display: block; text-align: center; background-color: var(--btn-yellow); color: var(--text-color); font-weight: 700;">Daftar Sekarang!</a>
    `;
    
    // Gulir ke atas halaman detail
    window.scrollTo({ top: document.querySelector('.category-hero').offsetTop, behavior: 'smooth' });
}


// ===========================================
// KATEGORI.HTML FUNCTIONALITY
// ===========================================
const categoryDetails = {
    'data_scientist': {
        heroTitle: "Kelas Data Scientist",
        heroDescription: "Kuasai analisis data, machine learning, dan visualisasi untuk mengambil keputusan berbasis data.",
        classes: [
            { 
                id: 1, 
                name: "Data Science Fundamental", 
                duration: "Beginner", 
                features: ["Pengenalan Data Science", "Dasar Python untuk Data Science", "Data Cleaning & Data Wrangling","Exploratory Data Analysis (EDA)","Mini Project"], 
                price: "Rp 500.000",
                classImage: "hero1.png",
                detail: {
                    description: "Paket ini dirancang untuk peserta yang baru mulai memasuki dunia data science. Materi disusun dengan bahasa yang mudah dipahami dan latihan praktis sehingga cocok untuk pemula tanpa latar belakang IT. Peserta akan mempelajari dasar-dasar pemrograman Python, cara mengolah data, hingga mampu membuat analisis sederhana sendiri.",
                    mentor: "Rizky Firmansyah, M.Kom (Senior Data Analyst)",
                    schedule: "Setiap Sabtu & Minggu, 19.00 - 21.00 WIB (8 Sesi Live)",
                    duration_hours: "16 Jam Live + 20 Jam Materi Mandiri",
                    outcomes: {
                        main: [
                            { icon: "fas fa-award", text: "Sertifikat Penyelesaian (CoC)" },
                            { icon: "fas fa-clipboard-check", text: "Sertifikat Kehadiran (CoA)" },
                            { icon: "fas fa-star", text: "Skill Badge Digital" }
                        ],
                        material: "5 Video, 15 PDF, 20 Tes, 1 Proyek Akhir",
                        benefits: ["Akses ke Grup Diskusi Eksklusif", "Bertemu dengan Expert Industry", "Praktik Langsung (Hands-on)", "Pengembangan Softskill"]
                    },
                    core_outcomes: [
                        "Memahami alur kerja Data Science",
                        "Mampu mengolah data mentah menjadi informasi",
                        "Membuat grafik profesional untuk laporan",
                        "Menyelesaikan mini project berbasis dataset real",
                        "Siap melanjutkan ke Machine Learning"
                    ]
                }
            },
            { 
                id: 2, 
                name: "Machine Learning Applied", 
                duration: "Intermediate", 
                features: ["Review Python & Data Science Workflow", "Supervised Learning", "Unsupervised Learning", "Model Evaluation & Training","Feature Engineering","Mini Project"], 
                price: "Rp 750.000",
                classImage: "hero1.png",
                detail: {
                    description: "Paket intermediate dirancang untuk peserta yang sudah memahami dasar Python dan ingin naik level ke pembuatan model machine learning. Pada paket ini, peserta belajar berbagai algoritma populer, cara melatih model, mengevaluasi performa, dan membuat prediksi dengan data nyata.",
                    mentor: "Dr. Citra Dewi (Lead Data Scientist at TechCorp)",
                    schedule: "Setiap Senin & Kamis, 19.30 - 21.30 WIB (16 Sesi Live)",
                    duration_hours: "32 Jam Live + 40 Jam Materi Mandiri",
                    outcomes: {
                        main: [
                            { icon: "fas fa-award", text: "Sertifikat Penyelesaian (CoC)" },
                            { icon: "fas fa-clipboard-check", text: "Sertifikat Kehadiran (CoA)" },
                            { icon: "fas fa-star", text: "Skill Badge Premium" }
                        ],
                        material: "10 Video, 30 PDF, 40 Tes, 2 Proyek Utama",
                        benefits: ["Akses Komunitas Eksklusif", "Sesi Mentoring 1-on-1", "Bimbingan Portofolio", "Akses Materi Seumur Hidup"]
                    },
                    core_outcomes: [
                        "Menguasai alur kerja Machine Learning dari A-Z",
                        "Mampu membuat model prediksi Supervised dan Unsupervised",
                        "Melakukan evaluasi model secara mendalam",
                        "Membuat solusi berbasis Machine Learning dengan data nyata"
                    ]
                }
            },
            { 
                id: 3, 
                name: "Deep Learning & Deployment", 
                duration: "Advanced", 
                features: ["Advanced Machine Learning", "Deep Learning (TensorFlow / PyTorch)", "Natural Language Processing (NLP)", "Model Deployment", "Capstone Project"], 
                price: "Rp 1.000.000",
                classImage: "hero1.png",
                detail: {
                    description: "Paket advanced difokuskan pada skill yang dibutuhkan data scientist profesional: deep learning, NLP, computer vision, hingga deployment model ke aplikasi web. Peserta akan mempelajari framework TensorFlow / PyTorch dan membuat model end-to-end yang siap digunakan.",
                    mentor: "Bambang Wijaya, Ph.D (CTO & AI Consultant)",
                    schedule: "Setiap Selasa, Rabu, & Jumat, 19.00 - 22.00 WIB (36 Sesi Live)",
                    duration_hours: "108 Jam Live + 60 Jam Materi Mandiri",
                    outcomes: {
                        main: [
                            { icon: "fas fa-trophy", text: "Sertifikat Kelulusan + Cap Kompetensi" },
                            { icon: "fas fa-clipboard-check", text: "Sertifikat Kehadiran (CoA)" },
                            { icon: "fas fa-certificate", text: "Sertifikasi Partner Industri" }
                        ],
                        material: "20 Video, 50 PDF, 80 Tes, 4 Proyek Industri",
                        benefits: ["Job Connect Program", "Bimbingan Karir Personal", "Akses Seumur Hidup ke Materi", "Jaminan Retake (Syarat Berlaku)"]
                    },
                    core_outcomes: [
                        "Membangun model Deep Learning tingkat lanjut (NLP/Vision)",
                        "Menguasai Framework TensorFlow/PyTorch",
                        "Mampu melakukan deployment model ke lingkungan produksi",
                        "Menyelesaikan Capstone Project berstandar industri"
                    ]
                }
            }
        ]
    }
    // Tambahkan kategori lain di sini
};

let currentCategory = null;

function loadCategoryContent() {
    const urlParams = new URLSearchParams(window.location.search);
    const categoryId = urlParams.get('id');
    const data = categoryDetails[categoryId]; 

    const heroTitleElement = document.getElementById('heroCategoryTitle');
    const heroDescriptionElement = document.getElementById('heroCategoryDescription');
    const classListContainer = document.getElementById('classListContainer');
    const notFoundElement = document.getElementById('notFound');
    const classListWrapper = document.getElementById('classListWrapper');
    const classDetailWrapper = document.getElementById('classDetailWrapper');
    
    // Sembunyikan Detail, Tampilkan Daftar Kelas
    classListWrapper.style.display = 'block';
    classDetailWrapper.style.display = 'none';

    if (data) {
        currentCategory = data;
        
        // Perbarui Hero Section
        heroTitleElement.textContent = data.heroTitle;
        heroDescriptionElement.textContent = data.heroDescription;
        document.getElementById('pageTitle').textContent = `${data.heroTitle} - Vinix SkillBoost`;

        // Tampilkan Daftar Kelas
        if (data.classes && data.classes.length > 0) {
            classListContainer.innerHTML = ''; // Bersihkan kontainer
            notFoundElement.style.display = 'none';
            
            data.classes.forEach(cls => {
                // Menggunakan ikon check-circle untuk fitur card
                const featuresList = cls.features.map(f => `<li><i class="fas fa-check-circle"></i>${f}</li>`).join('');
                
                const card = document.createElement('div');
                card.classList.add('class-card');
                
                card.innerHTML = `
                    <img src="${cls.classImage}" alt="Cover Kelas ${cls.name}" class="class-card-image">

                    <div class="class-content-wrapper"> 
                        <span class="badge">${cls.duration}</span>
                        <h3>${cls.name}</h3>
                        <ul>${featuresList}</ul>
                    </div>
                    
                    <div class="price">${cls.price}</div>
                    
                    <div class="card-actions">
                        <a href="#" onclick="event.preventDefault(); showClassDetail(${cls.id})" class="btn-detail">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                        <a href="checkout.html?classId=${cls.id}" class="btn-buy">
                            <i class="fas fa-shopping-cart"></i> Beli Kelas
                        </a>
                    </div>
                `;

                classListContainer.appendChild(card);
            });
        } else {
            classListContainer.style.display = 'none';
            notFoundElement.style.display = 'block';
            heroTitleElement.textContent = `Kelas ${data.heroTitle}`;
            heroDescriptionElement.textContent = `Mohon maaf, daftar kelas untuk kategori ini belum tersedia.`;
        }
    } else {
        // Jika kategori tidak ditemukan
        classListWrapper.style.display = 'none';
        notFoundElement.style.display = 'block';
        notFoundElement.querySelector('h3').textContent = "Kategori Tidak Ditemukan 🚫";
        notFoundElement.querySelector('p').textContent = "Kami tidak dapat menemukan kategori yang Anda minta. Silakan kembali ke beranda.";
        heroTitleElement.textContent = "Kategori Tidak Ditemukan";
        heroDescriptionElement.textContent = "Mohon maaf, kategori yang Anda cari tidak tersedia.";
    }
}

/**
 * Menampilkan tampilan detail untuk kelas tertentu
 * @param {number} classId ID kelas yang akan ditampilkan.
 */
function showClassDetail(classId) {
    if (!currentCategory) return;
    
    const selectedClass = currentCategory.classes.find(cls => cls.id === classId);
    if (!selectedClass) return;

    const classListWrapper = document.getElementById('classListWrapper');
    const classDetailWrapper = document.getElementById('classDetailWrapper');
    const detailContainer = document.getElementById('classDetailContainer');
    
    // 1. Sembunyikan daftar dan tampilkan detail
    classListWrapper.style.display = 'none';
    classDetailWrapper.style.display = 'block';

    // 2. Perbarui Hero Section untuk fokus pada kelas
    document.getElementById('heroCategoryTitle').textContent = selectedClass.name;
    document.getElementById('heroCategoryDescription').textContent = selectedClass.detail.description.split('. ')[0] + '.'; 
    document.getElementById('pageTitle').textContent = `${selectedClass.name} - Detail Kelas`;

    // 3. Render Detail Kelas
    
    // Data preparation for the new structure
    const mentorInfo = selectedClass.detail.mentor;
    const schedule = selectedClass.detail.schedule;
    const durationHours = selectedClass.detail.duration_hours;
    
    // Menyiapkan list untuk Yang Akan Dipelajari (📚)
    const mainFeatures = selectedClass.features.map(f => `<li><i class="fas fa-arrow-right" style="margin-right: 8px; color: var(--vinix-blue);"></i>${f}</li>`).join(''); 
    
    // Menyiapkan list untuk Outcome/Skill (🧠)
    const coreOutcomes = selectedClass.detail.core_outcomes ? 
                         selectedClass.detail.core_outcomes.map(o => `<li><i class="fas fa-check-circle" style="color: #2ecc71; margin-right: 8px;"></i>${o}</li>`).join('') :
                         '<li>Data outcomes tidak spesifik tersedia.</li>'; 
    
    // Menyiapkan list untuk Benefit Tambahan (🎁)
    const additionalBenefits = selectedClass.detail.outcomes.benefits.map(b => `<li>${b}</li>`).join(''); 

    // Memisahkan Nama Mentor dan deskripsi (asumsi ada tanda kurung)
    const mentorName = mentorInfo.includes('(') ? mentorInfo.split('(')[0].trim() : mentorInfo;
    const mentorDescription = mentorInfo.includes('(') ? mentorInfo.split('(')[1].replace(')', '') : 'Expert Industry Professional';


    detailContainer.innerHTML = `
        <div class="detail-header">
            <h2>${selectedClass.name}</h2>
            <p style="color: var(--text-secondary); margin-top: 5px;">${selectedClass.detail.description.split('. ')[0]}.</p>
            <span class="badge" style="background:#2ecc71; margin-bottom: 15px;">${selectedClass.duration}</span>
            <div class="detail-price">${selectedClass.price}</div>
        </div>
        
        <div class="detail-section" style="margin-bottom: 40px; border: 1px solid #ddd; padding: 25px; border-radius: var(--radius-default); background-color: var(--bg-white);">
            <h4 style="border-left: 4px solid #f39c12; color: #f39c12;"><i class="fas fa-user-tie"></i> Profil Mentor</h4>
            <div class="mentor-info">
                <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: var(--vinix-blue);"></i>
                <div>
                    <strong style="font-size: 1.2rem; color: var(--text-color);">${mentorName}</strong>
                    <p style="color: var(--text-secondary); margin: 0; font-size: 0.95rem;">${mentorDescription}</p>
                </div>
            </div>
            
            <h5 style="margin-top:20px;">Informasi Pelaksanaan:</h5>
            <ul style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 5px; color: var(--text-secondary);"><i class="fas fa-calendar-alt" style="margin-right: 8px; color: var(--vinix-blue);"></i> Jadwal Kelas Live: <strong>${schedule}</strong></li>
                <li style="margin-bottom: 5px; color: var(--text-secondary);"><i class="fas fa-clock" style="margin-right: 8px; color: var(--vinix-blue);"></i> Total Durasi: <strong>${durationHours}</strong></li>
            </ul>
        </div>

        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-book-open"></i> Yang Akan Dipelajari (Curriculum Highlights)</h4>
            <ul class="detail-features" style="list-style: none; padding-left: 0; columns: 2; column-gap: 30px;">
                ${mainFeatures}
            </ul>
        </div>
        
        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-brain"></i> Outcome / Skill yang Dikuasai</h4>
            <ul class="detail-features" style="list-style: none; padding-left: 0;">
                ${coreOutcomes}
            </ul>
        </div>

        <div class="detail-section" style="margin-bottom: 40px;">
            <h4><i class="fas fa-gift"></i> Benefit & Fasilitas Kelas</h4>
            <h5 style="margin-top:10px; font-weight:700;">Fasilitas Utama:</h5>
            <div class="additional-benefits">
                <ul style="columns: 2;">
                    ${additionalBenefits}
                    <li>Template analisis data (Excel, Python)</li>
                    <li>Mini project untuk portofolio</li>
                </ul>
            </div>
            
            <h5 style="margin-top:20px; font-weight:700;">Sertifikasi:</h5>
            <div class="outcomes-grid" style="margin-top: 10px;">
                ${selectedClass.detail.outcomes.main.map(item => `
                    <div class="outcome-item" style="background-color: #e8f5e9;">
                        <i class="${item.icon}" style="color: var(--vinix-blue);"></i>
                        <span>${item.text}</span>
                    </div>
                `).join('')}
            </div>
            <p style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 15px;">Materi Kursus Mencakup: <strong>${selectedClass.detail.outcomes.material}</strong></p>
        </div>
        
        <a href="checkout.html?classId=${selectedClass.id}" class="btn-primary" style="margin-top: 20px; padding: 15px 30px; font-size: 1.1rem; display: block; text-align: center; background-color: var(--btn-yellow); color: var(--text-color); font-weight: 700;">Daftar Sekarang!</a>
    `;
    
    // Gulir ke atas halaman detail
    window.scrollTo({ top: document.querySelector('.category-hero').offsetTop, behavior: 'smooth' });
}
</script>
@endsection