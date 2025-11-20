@extends('layouts.navbar')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" id="beranda">
        <div class="container hero-content">

            <div class="hero-text">
            
                <h1>
                        <span style="color: var(--);">Temukan Pelatihan untuk</span>
                        <span style="color: var(--vinix-blue);">Tingkatkan Kompetensi Anda</span>
                    </span></h1>
                <p>
                    Vinix SkillBoost menyediakan program pelatihan digital singkat bersertifikasi profesional untuk 
                    meningkatkan keterampilan kerja praktis dengan hasil nyata. Mulai karir Anda hari ini!
                </p>
                <a href="#category" class="btn-primary">
                    Telusuri Kelas 
                </a>
            </div>

            <div class="hero-image">
                <img src="images/hero1.png" alt="Ilustrasi belajar">
            </div>

        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="features-section">
        <div class="container">

            <div class="features-grid">

                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-book-open"></i></div>
                    <h3>Kurikulum Disusun <strong>Berstandar Industri</strong></h3>
                    <p>Materi relevan dan terbaru sesuai kebutuhan pasar kerja global.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                    <h3>Pelatihan <strong>Sesuai Jadwal Anda</strong></h3>
                    <p>Belajar kapan saja, di mana saja. Sangat fleksibel dengan sesi interaktif.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Belajar Dari <strong>Dasar Hingga Expert</strong></h3>
                    <p>Dipandu mentor berpengalaman dari industri melalui kelas langsung.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-award"></i></div>
                    <h3>Belajar Berbasis <strong>Projek Portofolio</strong></h3>
                    <p>Sertifikasi profesional diakui dan portofolio siap kerja yang terstruktur.</p>
                </div>

            </div>

            <div class="stats">
                <div class="stat">
                    <h3>500+</h3>
                    <p>Peserta Terdaftar</p>
                </div>
                <div class="stat">
                    <h3>120</h3>
                    <p>Pelatihan Tersedia</p>
                </div>
                <div class="stat">
                    <h3>50+</h3>
                    <p>Mentor Profesional</p>
                </div>
                <div class="stat">
                    <h3>1000+</h3>
                    <p>Sertifikat Diterbitkan</p>
                </div>
            </div>

        </div>
    </section>

    <!-- TARGET PROGRAM SECTION -->
    <section class="grid-section" id="target-section" style="background-color: var(--bg-white);">
        <div class="container">

            <h2>
                Program Tepat Untuk Anda: <strong>Pilih Jalur Belajarmu</strong>
            </h2>
            <p class="subtitle">
                Kami menyediakan program pelatihan yang disesuaikan dengan latar belakang dan tujuan karir Anda.
            </p>

            <div class="custom-grid">

                <div class="custom-card">
                    <div class="card-image">
                        <i class="fas fa-user-graduate" style="font-size: 4rem; color: #f39c12;"></i>
                    </div>
                    <h3>Fresh Graduate</h3>
                    <p>Program intensif untuk mempersiapkan karir pertama. Fokus pada portofolio dan wawancara.</p>
                </div>

                <div class="custom-card">
                    <div class="card-image">
                        <i class="fas fa-university" style="font-size: 4rem; color: #2ecc71;"></i>
                    </div>
                    <h3>Mahasiswa</h3>
                    <p>Pelatihan paruh waktu yang fleksibel untuk mengisi waktu luang dan meningkatkan CV.</p>
                </div>

                <div class="custom-card">
                    <div class="card-image">
                        <i class="fas fa-briefcase" style="font-size: 4rem; color: #3498db;"></i>
                    </div>
                    <h3>Pekerja Muda</h3>
                    <p>Program upskilling & reskilling untuk transisi karir atau kenaikan jabatan.</p>
                </div>

            </div>

        </div>
    </section>

<style>
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


.hero-section {
    background: #fff;
    padding: 100px 0 120px;
    border-bottom: 1px solid #eee;
}

.hero-content {
    display: flex;
    align-items: center;
    gap: 60px;
    flex-wrap: wrap;
}

.hero-text {
    flex: 1;
    min-width: 300px;
}

.hero-text h1 {
    font-size: 3.5rem;
    margin-bottom: 20px;
    line-height: 1.2;
    font-weight: 800;
}

.hero-text p {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 40px;
}

.hero-image {
    flex: 1;
    min-width: 300px;
    text-align: right;
}

.hero-image img {
    max-width: 100%;
    border-radius: var(--radius-default);
    
}


.features-section {
    background: var(--vinix-blue);
    color: #fff;
    padding: 80px 0 40px;
    border-radius: 0 0 70px 70px;
    margin-top: -60px;
    position: relative;
    z-index: 10;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.features-grid {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 40px;
}

.feature-card {
    flex-basis: 23%;
    background: rgba(255, 255, 255, 0.15);
    text-align: center;
    padding: 30px 20px;
    border-radius: var(--radius-default);
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.feature-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.3);
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 15px;
    color: #fff;
}

.feature-card h3 {
    margin-bottom: 5px;
    font-size: 1.15rem;
    font-weight: 600;
}

.feature-card p {
    opacity: 0.9;
    font-size: 0.85rem;
}

.stats {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px 0;
}

.stat {
    text-align: center;
    margin: 10px;
}

.stat h3 {
    font-size: 2.8rem;
    font-weight: 700;
}

.stat p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
}

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


</style>
@endsection