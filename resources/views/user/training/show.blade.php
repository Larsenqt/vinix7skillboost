@extends('layouts.navbar')

@section('content')

<div class="training-detail-container">
    <!-- Header Section -->
    <div class="training-header">
        <div class="header-background">
            <img src="{{ asset('storage/' . $training->thumbnail) }}" 
                 alt="{{ $training->title }}" 
                 class="header-image">
        </div>
        <div class="header-content">
            <div class="header-actions">
                <a href="{{ route('user.training.index', $user->id) }}" class="back-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar
                </a>
            </div>
            <div class="header-info">
                <div class="category-badge">
                    {{ $training->category->name }}
                </div>
                <h1 class="training-title">{{ $training->title }}</h1>
                <p class="training-subtitle">Bergabunglah dalam training ini untuk meningkatkan skill dan pengetahuan Anda</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="training-content">
        <div class="content-grid">
            <!-- Left Column - Training Details -->
            <div class="left-column">
                <!-- Description Section -->
                <div class="detail-section">
                    <div class="section-header">
                        <h2>Deskripsi Training</h2>
                        <div class="section-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="section-content">
                        <p class="training-description">{{ $training->description }}</p>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="detail-section">
                    <div class="section-header">
                        <h2>Apa yang Anda Dapatkan</h2>
                        <div class="section-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Sertifikat Penyelesaian</h4>
                                    <p>Dapatkan sertifikat resmi setelah menyelesaikan training</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Akses Seumur Hidup</h4>
                                    <p>Akses materi training selamanya tanpa batas waktu</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Komunitas Eksklusif</h4>
                                    <p>Bergabung dengan komunitas peserta training</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Dukungan Mentor</h4>
                                    <p>Bimbingan langsung dari mentor berpengalaman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Order Card -->
            <div class="right-column">
                <div class="order-card">
                    <div class="card-header">
                        <h3>Informasi Training</h3>
                    </div>
                    <div class="card-content">
                        <!-- Price Display -->
                        <div class="price-section">
                            @if($training->price == 0)
                            <div class="price-free">
                                <span class="price-label">Gratis</span>
                                <span class="price-amount">Rp 0</span>
                            </div>
                            @else
                            <div class="price-paid">
                                <span class="price-label">Harga Training</span>
                                <span class="price-amount">Rp {{ number_format($training->price, 0, ',', '.') }}</span>
                                @if($training->price > 1000000)
                                <span class="price-installment">atau 3x cicilan Rp {{ number_format($training->price / 3, 0, ',', '.') }}</span>
                                @endif
                            </div>
                            @endif
                        </div>

                        <!-- Training Details -->
                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Durasi</span>
                                    <span class="info-value">8 Jam Pelajaran</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Level</span>
                                    <span class="info-value">Pemula - Menengah</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Peserta</span>
                                    <span class="info-value">500+ Sudah Bergabung</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Rating</span>
                                    <span class="info-value">4.8/5 (1.2k reviews)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Order Form -->
                        <form action="{{ route('user.order.store', [$user->id, $training->id]) }}" method="POST" class="order-form">
                            @csrf
                            <button type="submit" class="order-btn">
                                <span class="btn-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                </span>
                                <span class="btn-text">
                                    @if($training->price == 0)
                                    Daftar Training Gratis
                                    @else
                                    Order Training Sekarang
                                    @endif
                                </span>
                            </button>
                        </form>

                        <!-- Module Access Section -->
                        <div class="module-access-section">
                            @if($order && $order->status === 'approved')
                                @if($training->module_file)
                                    <div class="download-module-card">
                                        <div class="download-header">
                                            <div class="download-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <h4>Modul Training Tersedia</h4>
                                        </div>
                                        <p class="download-description">Download modul lengkap untuk belajar lebih efektif</p>
                                        <a href="{{ route('user.training.download.module', [$user->id, $training->id]) }}" class="download-btn">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                                            </svg>
                                            <span>Download Modul PDF</span>
                                        </a>
                                    </div>
                                @endif
                            @else
                                <div class="module-access-info">
                                    @if(!$order)
                                        <div class="access-status pending">
                                            <div class="status-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                </svg>
                                            </div>
                                            <div class="status-content">
                                                <h4>Belum Memiliki Akses</h4>
                                                <p>Anda belum dapat mengakses modul karena <strong>belum memesan training ini</strong>.</p>
                                                <p class="status-cta">Yuk pesan dulu supaya bisa mendapatkan akses modul 📘✨</p>
                                            </div>
                                        </div>
                                    @elseif($order->status === 'pending')
                                        <div class="access-status processing">
                                            <div class="status-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="status-content">
                                                <h4>Menunggu Persetujuan</h4>
                                                <p>Order kamu masih <strong>menunggu persetujuan</strong>.</p>
                                                <p class="status-cta">Modul akan terbuka otomatis setelah admin menyetujuinya ⏳</p>
                                            </div>
                                        </div>
                                    @elseif($order->status === 'rejected')
                                        <div class="access-status rejected">
                                            <div class="status-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </div>
                                            <div class="status-content">
                                                <h4>Order Ditolak</h4>
                                                <p>Order kamu <strong>ditolak</strong>.</p>
                                                <p class="status-cta">Silakan pesan ulang untuk mendapatkan akses modul ❗</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <!-- Additional Info -->
                        <div class="additional-info">
                            <div class="guarantee">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <span>Garansi 30 hari uang kembali</span>
                            </div>
                            <div class="support">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Dukungan penuh 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Base Styles */
.training-detail-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Section */
.training-header {
    position: relative;
    height: 500px;
    overflow: hidden;
}

.header-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.header-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.header-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 40px;
    color: white;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.3) 100%);
}

.header-actions {
    display: flex;
    justify-content: flex-start;
}

.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-weight: 600;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
}

.back-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.back-btn svg {
    width: 18px;
    height: 18px;
}

.header-info {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.category-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    backdrop-filter: blur(10px);
    margin-bottom: 20px;
}

.training-title {
    font-size: 3rem;
    font-weight: 700;
    margin: 0 0 16px 0;
    line-height: 1.2;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.training-subtitle {
    font-size: 1.3rem;
    margin: 0;
    opacity: 0.9;
    line-height: 1.5;
}

/* Main Content */
.training-content {
    padding: 60px 40px;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 40px;
    max-width: 1400px;
    margin: 0 auto;
}

/* Left Column */
.left-column {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.detail-section {
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    border: 2px solid #e0f2fe;
    overflow: hidden;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-bottom: 2px solid #e0f2fe;
}

.section-header h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.section-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.section-icon svg {
    width: 20px;
    height: 20px;
    color: white;
}

.section-content {
    padding: 30px;
}

.training-description {
    color: #374151;
    line-height: 1.7;
    font-size: 1.1rem;
    margin: 0;
}

/* Features Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.feature-item {
    display: flex;
    gap: 16px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: white;
    border-color: #3b82f6;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.1);
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon svg {
    width: 24px;
    height: 24px;
    color: white;
}

.feature-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 8px 0;
}

.feature-content p {
    color: #64748b;
    margin: 0;
    line-height: 1.5;
    font-size: 0.95rem;
}

/* Right Column - Order Card */
.right-column {
    position: sticky;
    top: 40px;
    height: fit-content;
}

.order-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    overflow: hidden;
}

.card-header {
    padding: 25px 30px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    text-align: center;
}

.card-header h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin: 0;
}

.card-content {
    padding: 30px;
}

/* Price Section */
.price-section {
    margin-bottom: 25px;
    text-align: center;
}

.price-free {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
}

.price-paid {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
}

.price-label {
    display: block;
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 8px;
    opacity: 0.9;
}

.price-amount {
    display: block;
    font-size: 2.2rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 8px;
}

.price-installment {
    display: block;
    font-size: 0.9rem;
    opacity: 0.9;
    font-weight: 500;
}

/* Info List */
.info-list {
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 0;
    border-bottom: 1px solid #f1f5f9;
}

.info-item:last-child {
    border-bottom: none;
}

.info-icon {
    width: 40px;
    height: 40px;
    background: #f1f5f9;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-icon svg {
    width: 18px;
    height: 18px;
    color: #3b82f6;
}

.info-content {
    flex: 1;
}

.info-label {
    display: block;
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 500;
    margin-bottom: 4px;
}

.info-value {
    display: block;
    font-size: 1rem;
    color: #1e293b;
    font-weight: 600;
}

/* Order Form */
.order-form {
    margin-bottom: 25px;
}

.order-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    border: none;
    padding: 20px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
}

.order-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(59, 130, 246, 0.6);
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
}

.order-btn:active {
    transform: translateY(-1px);
}

.btn-icon svg {
    width: 20px;
    height: 20px;
}

/* Module Access Section */
.module-access-section {
    margin: 25px 0;
}

.download-module-card {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    border: 2px solid #bae6fd;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
}

.download-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 12px;
}

.download-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.download-icon svg {
    width: 20px;
    height: 20px;
    color: white;
}

.download-header h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.download-description {
    color: #64748b;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.download-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.download-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
}

.download-btn svg {
    width: 18px;
    height: 18px;
}

/* Module Access Status */
.access-status {
    display: flex;
    gap: 15px;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 15px;
}

.access-status.pending {
    background: #fef3c7;
    border: 1px solid #fbbf24;
}

.access-status.processing {
    background: #dbeafe;
    border: 1px solid #60a5fa;
}

.access-status.rejected {
    background: #fee2e2;
    border: 1px solid #f87171;
}

.status-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.access-status.pending .status-icon {
    background: #f59e0b;
}

.access-status.processing .status-icon {
    background: #3b82f6;
}

.access-status.rejected .status-icon {
    background: #ef4444;
}

.status-icon svg {
    width: 20px;
    height: 20px;
    color: white;
}

.status-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 0 0 8px 0;
}

.access-status.pending .status-content h4 {
    color: #92400e;
}

.access-status.processing .status-content h4 {
    color: #1e40af;
}

.access-status.rejected .status-content h4 {
    color: #991b1b;
}

.status-content p {
    margin: 0 0 8px 0;
    font-size: 0.95rem;
}

.access-status.pending .status-content p {
    color: #92400e;
}

.access-status.processing .status-content p {
    color: #1e40af;
}

.access-status.rejected .status-content p {
    color: #991b1b;
}

.status-cta {
    font-weight: 600;
    margin-bottom: 0 !important;
}

/* Additional Info */
.additional-info {
    border-top: 1px solid #f1f5f9;
    padding-top: 20px;
}

.guarantee, .support {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 12px;
}

.guarantee:last-child, .support:last-child {
    margin-bottom: 0;
}

.guarantee svg, .support svg {
    width: 16px;
    height: 16px;
    color: #10b981;
}

.support svg {
    color: #3b82f6;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .right-column {
        position: static;
    }
    
    .training-header {
        height: 400px;
    }
    
    .training-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .training-content {
        padding: 40px 20px;
    }
    
    .header-content {
        padding: 30px 20px;
    }
    
    .training-title {
        font-size: 2rem;
    }
    
    .training-subtitle {
        font-size: 1.1rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
    
    .section-header {
        padding: 20px;
    }
    
    .section-content {
        padding: 20px;
    }
    
    .card-content {
        padding: 20px;
    }
    
    .access-status {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .training-header {
        height: 350px;
    }
    
    .training-title {
        font-size: 1.75rem;
    }
    
    .header-info {
        text-align: left;
    }
    
    .header-actions {
        justify-content: center;
    }
    
    .price-amount {
        font-size: 1.8rem;
    }
    
    .feature-item {
        flex-direction: column;
        text-align: center;
    }
    
    .order-btn {
        padding: 16px;
        font-size: 1rem;
    }
}

/* Animation for sections */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.detail-section, .order-card {
    animation: fadeInUp 0.6s ease forwards;
}

.detail-section:nth-child(odd) {
    animation-delay: 0.1s;
}

.detail-section:nth-child(even) {
    animation-delay: 0.2s;
}

.order-card {
    animation-delay: 0.3s;
}
</style>

@endsection