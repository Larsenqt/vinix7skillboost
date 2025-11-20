@extends('layouts.navbar')

@section('title', 'Detail Order')

@section('content')

<div class="order-detail-container">
    <!-- Header Section -->
    <div class="order-header">
        <div class="header-content">
            <div class="header-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <div class="header-text">
                <h1>Detail Order</h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="order-content">
        <div class="content-grid">
            <!-- Left Column - Order Details -->
            <div class="left-column">
                <!-- Order Info Card -->
                <div class="detail-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2>Informasi Order</h2>
                    </div>
                    <div class="card-body">
                        <div class="info-grid">
                            <div class="info-item">
                                <span class="info-label">ID Order</span>
                                <span class="info-value">#{{ $order->id }}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Tanggal Order</span>
                                <span class="info-value">{{ $order->created_at->format('d F Y H:i') }}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Training</span>
                                <span class="info-value">{{ $order->training->title }}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Kategori</span>
                                <span class="info-value">{{ $order->training->category->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Card -->
                <div class="detail-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2>Status Order</h2>
                    </div>
                    <div class="card-body">
                        <div class="status-display">
                            <span class="status-badge status-{{ $order->status }}">
                                @if($order->status === 'pending')
                                    Menunggu Pembayaran
                                @elseif($order->status === 'completed')
                                    Selesai
                                @elseif($order->status === 'processing')
                                    Diproses
                                @elseif($order->status === 'cancelled')
                                    Dibatalkan
                                @else
                                    {{ $order->status }}
                                @endif
                            </span>
                            <div class="status-info">
                                @if($order->status === 'pending')
                                    <p>Silakan upload bukti pembayaran untuk melanjutkan proses verifikasi.</p>
                                @elseif($order->status === 'completed')
                                    <p>Order Anda telah selesai dan diverifikasi. Selamat menikmati training!</p>
                                @elseif($order->status === 'processing')
                                    <p>Order Anda sedang dalam proses verifikasi oleh admin.</p>
                                @elseif($order->status === 'cancelled')
                                    <p>Order Anda telah dibatalkan.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Note Card -->
                @if($order->admin_note)
                <div class="detail-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                        </div>
                        <h2>Pesan dari Admin</h2>
                    </div>
                    <div class="card-body">
                        <div class="note-content">
                            <p>{{ $order->admin_note }}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Right Column - Payment Section -->
            <div class="right-column">
                <!-- Payment Proof Card -->
                <div class="detail-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h2>Bukti Pembayaran</h2>
                    </div>
                    <div class="card-body">
                        @if ($order->payment_proof)
                        <div class="payment-proof-display">
                            <div class="proof-preview">
                                <img src="{{ asset('storage/' . $order->payment_proof) }}" 
                                     alt="Bukti Pembayaran" 
                                     class="proof-image">
                                <div class="proof-overlay">
                                    <a href="{{ asset('storage/' . $order->payment_proof) }}" 
                                       target="_blank" 
                                       class="view-proof-btn">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Lihat Full Size
                                    </a>
                                </div>
                            </div>
                            <div class="proof-info">
                                <span class="proof-status verified">Terverifikasi</span>
                                <span class="proof-date">Diupload: {{ $order->updated_at->format('d M Y H:i') }}</span>
                            </div>
                        </div>
                        @else
                        <div class="no-payment-proof">
                            <div class="no-proof-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3>Belum Ada Bukti Pembayaran</h3>
                            <p>Silakan upload bukti pembayaran untuk melanjutkan proses verifikasi.</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Upload Form Card -->
                @if($order->status === 'pending' || !$order->payment_proof)
                <div class="detail-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        <h2>Upload Bukti Pembayaran</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.order.uploadPayment', [$user->id, $order->id]) }}" 
                              method="POST" 
                              enctype="multipart/form-data"
                              class="upload-form">
                            @csrf
                            
                            <div class="form-group">
                                <label class="form-label">Pilih File Bukti Pembayaran</label>
                                <div class="file-upload-area" id="fileUploadArea">
                                    <input type="file" 
                                           name="payment_proof" 
                                           id="paymentProof" 
                                           class="file-input" 
                                           accept="image/*,.pdf"
                                           required>
                                    <div class="upload-content" id="uploadContent">
                                        <div class="upload-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                            </svg>
                                        </div>
                                        <div class="upload-text">
                                            <h4>Klik untuk upload file</h4>
                                            <p>Format: JPG, PNG, PDF (Maks. 5MB)</p>
                                        </div>
                                    </div>
                                    <div class="file-preview" id="filePreview">
                                        <div class="preview-info">
                                            <div class="file-icon">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="file-details">
                                                <p class="file-name" id="fileName"></p>
                                                <p class="file-size" id="fileSize"></p>
                                            </div>
                                        </div>
                                        <button type="button" class="remove-file" id="removeFile">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-notes">
                                <h4>Pastikan bukti pembayaran:</h4>
                                <ul>
                                    <li>Jelas terbaca</li>
                                    <li>Menampilkan nominal yang sesuai</li>
                                    <li>Berisi informasi transfer yang lengkap</li>
                                    <li>Format JPG, PNG, atau PDF</li>
                                </ul>
                            </div>

                            <button type="submit" class="upload-btn">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                Upload Bukti Pembayaran
                            </button>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Header Styles */
.order-header {
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 24px;
    overflow: hidden;
    margin-bottom: 40px;
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.header-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #3b82f6 0%, #1d4ed8 50%, #6366f1 100%);
}

.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
}

.header-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 80px;
    height: 80px;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.shape-2 {
    width: 120px;
    height: 120px;
    top: 60%;
    right: 10%;
    animation-delay: 2s;
}

.shape-3 {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 15%;
    animation-delay: 4s;
}

.shape-4 {
    width: 100px;
    height: 100px;
    top: 20%;
    right: 20%;
    animation-delay: 1s;
}

.header-content {
    position: relative;
    z-index: 2;
    padding: 40px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 30px;
    flex-wrap: wrap;
}

.header-main {
    display: flex;
    align-items: flex-start;
    gap: 25px;
    flex: 1;
}

.header-icon-container {
    position: relative;
    flex-shrink: 0;
}

.header-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
    position: relative;
    z-index: 2;
}

.header-icon svg {
    width: 40px;
    height: 40px;
    color: #3b82f6;
}

.icon-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 110px;
    height: 110px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.4) 0%, rgba(59, 130, 246, 0) 70%);
    border-radius: 50%;
    animation: pulse-glow 2s ease-in-out infinite alternate;
}

.header-text {
    flex: 1;
}

.title-container {
    margin-bottom: 15px;
}

.header-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: white;
    margin: 0 0 8px 0;
    line-height: 1.1;
    display: flex;
    align-items: baseline;
    gap: 12px;
    flex-wrap: wrap;
}

.title-main {
    background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.title-accent {
    background: linear-gradient(135deg, #fef3c7 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 2.2rem;
    font-weight: 700;
}

.title-underline {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #f59e0b 0%, #fbbf24 100%);
    border-radius: 2px;
    margin-top: 8px;
}

.header-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    margin: 0 0 25px 0;
    font-weight: 500;
    line-height: 1.4;
}

.header-meta {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.1);
    padding: 10px 16px;
    border-radius: 12px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 500;
}

.meta-item svg {
    width: 16px;
    height: 16px;
    color: #fef3c7;
}

/* Header Actions */
.header-actions {
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: flex-end;
    flex-shrink: 0;
}

.back-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 14px;
    font-weight: 600;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
    overflow: hidden;
}

.back-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.back-btn:hover::before {
    left: 100%;
}

.back-btn:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.btn-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
    border-radius: 14px;
}

.btn-content {
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
    z-index: 2;
}

.back-btn svg {
    width: 18px;
    height: 18px;
    transition: transform 0.3s ease;
}

.back-btn:hover svg {
    transform: translateX(-3px);
}

.status-indicator {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.1);
    padding: 12px 20px;
    border-radius: 14px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.status-label {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    font-weight: 500;
}

.status-value {
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.status-pending {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
}

.status-completed {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.status-processing {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
}

.status-cancelled {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

/* Animations */
@keyframes float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    33% {
        transform: translateY(-20px) rotate(120deg);
    }
    66% {
        transform: translateY(10px) rotate(240deg);
    }
}

@keyframes pulse-glow {
    0% {
        opacity: 0.6;
        transform: translate(-50%, -50%) scale(1);
    }
    100% {
        opacity: 0.8;
        transform: translate(-50%, -50%) scale(1.1);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .header-content {
        flex-direction: column;
        align-items: stretch;
        gap: 25px;
    }
    
    .header-actions {
        align-items: stretch;
        flex-direction: row;
        justify-content: space-between;
    }
}

@media (max-width: 768px) {
    .order-header {
        border-radius: 20px;
        margin-bottom: 30px;
    }
    
    .header-content {
        padding: 30px 25px;
    }
    
    .header-main {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 20px;
    }
    
    .header-title {
        font-size: 2.2rem;
        justify-content: center;
    }
    
    .title-accent {
        font-size: 1.8rem;
    }
    
    .header-icon {
        width: 80px;
        height: 80px;
        border-radius: 20px;
    }
    
    .header-icon svg {
        width: 35px;
        height: 35px;
    }
    
    .icon-glow {
        width: 100px;
        height: 100px;
    }
    
    .header-meta {
        justify-content: center;
    }
    
    .header-actions {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .header-content {
        padding: 25px 20px;
    }
    
    .header-title {
        font-size: 1.8rem;
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }
    
    .title-accent {
        font-size: 1.5rem;
    }
    
    .header-subtitle {
        font-size: 1.1rem;
    }
    
    .header-meta {
        flex-direction: column;
        gap: 12px;
    }
    
    .meta-item {
        justify-content: center;
    }
    
    .back-btn {
        padding: 12px 20px;
    }
    
    .status-indicator {
        flex-direction: column;
        gap: 8px;
        text-align: center;
    }
}

/* Additional Effects */
.order-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #3b82f6, #1d4ed8, #6366f1);
    opacity: 0.8;
}

.header-text {
    position: relative;
}

.header-text::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    border-radius: 20px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.header-text:hover::before {
    opacity: 1;
}
/* Main Content */
.order-content {
    max-width: 1200px;
    margin: 0 auto;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 30px;
}

/* Detail Cards */
.detail-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    overflow: hidden;
    margin-bottom: 30px;
    transition: all 0.3s ease;
}

.detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 25px 30px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-bottom: 2px solid #e0f2fe;
}

.card-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-icon svg {
    width: 24px;
    height: 24px;
    color: white;
}

.card-header h2 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.card-body {
    padding: 30px;
}

/* Info Grid */
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.info-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
    padding: 15px;
    background: #f8fafc;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
}

.info-label {
    font-size: 0.85rem;
    color: #64748b;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.info-value {
    font-size: 1.1rem;
    color: #1e293b;
    font-weight: 600;
}

/* Status Display */
.status-display {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.status-badge {
    padding: 12px 24px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    display: inline-block;
    text-align: center;
    width: fit-content;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.status-pending {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
}

.status-completed {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.status-processing {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
}

.status-cancelled {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

.status-info p {
    margin: 0;
    color: #64748b;
    font-size: 1rem;
    line-height: 1.6;
}

/* Note Content */
.note-content {
    background: #fef3c7;
    border: 1px solid #fcd34d;
    border-radius: 10px;
    padding: 20px;
}

.note-content p {
    margin: 0;
    color: #92400e;
    line-height: 1.6;
    font-style: italic;
}

/* Payment Proof Display */
.payment-proof-display {
    text-align: center;
}

.proof-preview {
    position: relative;
    margin-bottom: 20px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.proof-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.proof-preview:hover .proof-image {
    transform: scale(1.05);
}

.proof-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.proof-preview:hover .proof-overlay {
    opacity: 1;
}

.view-proof-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.9);
    color: #1e293b;
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.view-proof-btn:hover {
    background: white;
    transform: translateY(-2px);
}

.view-proof-btn svg {
    width: 16px;
    height: 16px;
}

.proof-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}

.proof-status {
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.proof-status.verified {
    background: #dcfce7;
    color: #16a34a;
}

.proof-date {
    color: #64748b;
    font-size: 0.9rem;
}

/* No Payment Proof */
.no-payment-proof {
    text-align: center;
    padding: 40px 20px;
    color: #64748b;
}

.no-proof-icon {
    width: 80px;
    height: 80px;
    background: #f1f5f9;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: #94a3b8;
}

.no-proof-icon svg {
    width: 40px;
    height: 40px;
}

.no-payment-proof h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 12px 0;
}

.no-payment-proof p {
    margin: 0;
    line-height: 1.6;
}

/* Upload Form */
.upload-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.form-label {
    font-size: 1rem;
    font-weight: 600;
    color: #1e293b;
}

/* File Upload Area */
.file-upload-area {
    border: 2px dashed #d1d5db;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
    background: #f9fafb;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.file-upload-area:hover {
    border-color: #3b82f6;
    background: #eff6ff;
}

.file-upload-area.dragover {
    border-color: #3b82f6;
    background: #dbeafe;
    animation: pulse 2s infinite;
}

.file-input {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}

.upload-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.upload-icon {
    width: 60px;
    height: 60px;
    background: #dbeafe;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3b82f6;
}

.upload-icon svg {
    width: 30px;
    height: 30px;
}

.upload-text h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #374151;
    margin: 0 0 8px 0;
}

.upload-text p {
    color: #6b7280;
    margin: 0;
    font-size: 0.9rem;
}

/* File Preview */
.file-preview {
    display: none;
    background: #dcfce7;
    border: 1px solid #bbf7d0;
    border-radius: 12px;
    padding: 20px;
    margin-top: 15px;
}

.file-preview.show {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.preview-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.file-icon {
    width: 40px;
    height: 40px;
    background: #bbf7d0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #16a34a;
}

.file-icon svg {
    width: 20px;
    height: 20px;
}

.file-details {
    flex: 1;
}

.file-name {
    font-weight: 600;
    color: #374151;
    margin: 0 0 4px 0;
}

.file-size {
    color: #6b7280;
    font-size: 0.875rem;
    margin: 0;
}

.remove-file {
    background: none;
    border: none;
    color: #ef4444;
    cursor: pointer;
    padding: 8px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

.remove-file:hover {
    background: #fecaca;
}

.remove-file svg {
    width: 18px;
    height: 18px;
}

/* Form Notes */
.form-notes {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 20px;
}

.form-notes h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 12px 0;
}

.form-notes ul {
    margin: 0;
    padding-left: 20px;
    color: #64748b;
}

.form-notes li {
    margin-bottom: 6px;
    line-height: 1.5;
}

.form-notes li:last-child {
    margin-bottom: 0;
}

/* Upload Button */
.upload-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    border: none;
    padding: 18px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
}

.upload-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(59, 130, 246, 0.6);
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
}

.upload-btn:active {
    transform: translateY(-1px);
}

.upload-btn svg {
    width: 20px;
    height: 20px;
}

/* Animations */
@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.02);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .order-detail-container {
        padding: 16px;
    }
    
    .order-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .header-text h1 {
        font-size: 1.8rem;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .card-header {
        padding: 20px;
    }
    
    .card-body {
        padding: 20px;
    }
    
    .file-upload-area {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .header-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
    }
    
    .header-icon svg {
        width: 28px;
        height: 28px;
    }
    
    .proof-info {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .upload-btn {
        padding: 16px;
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('paymentProof');
    const fileUploadArea = document.getElementById('fileUploadArea');
    const uploadContent = document.getElementById('uploadContent');
    const filePreview = document.getElementById('filePreview');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const removeFileBtn = document.getElementById('removeFile');
    const uploadBtn = document.querySelector('.upload-btn');

    // Click event untuk file upload area
    fileUploadArea.addEventListener('click', function(e) {
        if (e.target !== removeFileBtn && !removeFileBtn.contains(e.target)) {
            fileInput.click();
        }
    });

    // Drag and drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        fileUploadArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        fileUploadArea.addEventListener(eventName, function() {
            fileUploadArea.classList.add('dragover');
        }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        fileUploadArea.addEventListener(eventName, function() {
            fileUploadArea.classList.remove('dragover');
        }, false);
    });

    // Handle file drop
    fileUploadArea.addEventListener('drop', function(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles(files);
    }, false);

    // Handle file input change
    fileInput.addEventListener('change', function() {
        handleFiles(this.files);
    });

    // Handle files
    function handleFiles(files) {
        if (files.length > 0) {
            const file = files[0];
            if (validateFile(file)) {
                displayFileInfo(file);
            }
        }
    }

    // Validate file
    function validateFile(file) {
        const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
        const maxSize = 5 * 1024 * 1024; // 5MB

        if (!validTypes.includes(file.type)) {
            alert('Format file tidak didukung. Harap upload file JPG, PNG, atau PDF.');
            return false;
        }

        if (file.size > maxSize) {
            alert('Ukuran file terlalu besar. Maksimal 5MB.');
            return false;
        }

        return true;
    }

    // Display file info
    function displayFileInfo(file) {
        const fileSizeFormatted = formatFileSize(file.size);
        
        fileName.textContent = file.name;
        fileSize.textContent = fileSizeFormatted;
        
        uploadContent.style.display = 'none';
        filePreview.classList.add('show');
        
        // Enable upload button
        uploadBtn.disabled = false;
    }

    // Format file size
    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Remove file
    removeFileBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        fileInput.value = '';
        uploadContent.style.display = 'flex';
        filePreview.classList.remove('show');
        uploadBtn.disabled = true;
    });

    // Form validation
    const form = document.querySelector('.upload-form');
    form.addEventListener('submit', function(e) {
        const file = fileInput.files[0];

        if (!file) {
            e.preventDefault();
            alert('Harap pilih file bukti pembayaran terlebih dahulu.');
            return;
        }

        if (!validateFile(file)) {
            e.preventDefault();
            return;
        }

        // Show loading state
        uploadBtn.disabled = true;
        uploadBtn.innerHTML = `
            <svg class="loading-spinner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 12v4m8-10h-4M6 12H2m15.364-7.364l-2.828 2.828M7.464 17.536l-2.828 2.828m12.728 0l-2.828-2.828M7.464 6.464L4.636 3.636"></path>
            </svg>
            Mengupload...
        `;
    });
});
</script>

@endsection