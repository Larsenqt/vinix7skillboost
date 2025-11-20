@extends('layouts.navbar')

@section('title', 'Detail Laporan')

@section('content')

<div class="detail-container">
    <!-- Header Section -->
    <div class="detail-header">
        <div class="header-content">
            <div class="header-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <div class="header-text">
                <h1>Detail Laporan</h1>
                <p>ID: #{{ $report->id }}</p>
            </div>
        </div>
        <div class="header-actions">
            <a href="{{ url()->previous() }}" class="back-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="detail-content">
        <!-- Info Cards -->
        <div class="info-grid">
            <!-- Training Info Card -->
            <div class="info-card">
                <div class="card-header">
                    <div class="card-icon training">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3>Informasi Training</h3>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Judul Training</span>
                        <span class="info-value">{{ $report->training->title }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Tanggal Submit</span>
                        <span class="info-value">{{ $report->created_at->format('d F Y H:i') }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Terakhir Diupdate</span>
                        <span class="info-value">{{ $report->updated_at->format('d F Y H:i') }}</span>
                    </div>
                </div>
            </div>

            <!-- Status Info Card -->
            <div class="info-card">
                <div class="card-header">
                    <div class="card-icon status">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3>Status Laporan</h3>
                </div>
                <div class="card-body">
                    <div class="status-display">
                        <span class="status-badge status-{{ $report->status }}">
                            {{ ucfirst($report->status) }}
                        </span>
                        <div class="status-info">
                            @if($report->status === 'pending')
                                <p>Laporan Anda sedang dalam proses review oleh tim kami</p>
                            @elseif($report->status === 'approved')
                                <p>Selamat! Laporan Anda telah disetujui</p>
                            @elseif($report->status === 'rejected')
                                <p>Laporan Anda memerlukan perbaikan sebelum disetujui</p>
                            @elseif($report->status === 'review')
                                <p>Laporan Anda sedang dalam tahap peninjauan ulang</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- File Laporan Section -->
        <div class="file-section">
            <div class="section-header">
                <h2>File Laporan</h2>
                <div class="section-actions">
                    <span class="file-count">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        1 File Terupload
                    </span>
                </div>
            </div>
            
            <div class="file-preview-container">
                <div class="file-card">
                    <div class="file-icon">
                        @php
                            $fileExtension = pathinfo($report->laporan, PATHINFO_EXTENSION);
                            $fileType = strtolower($fileExtension);
                        @endphp
                        
                        @if($fileType === 'pdf')
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="file-pdf">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        @elseif(in_array($fileType, ['doc', 'docx']))
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="file-doc">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        @elseif($fileType === 'zip')
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="file-zip">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                        </svg>
                        @else
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="file-generic">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        @endif
                    </div>
                    
                    <div class="file-info">
                        <h3 class="file-name">{{ basename($report->laporan) }}</h3>
                        <div class="file-meta">
                            <span class="file-type">{{ strtoupper($fileExtension) }} File</span>
                            <span class="file-size">{{-- You can add file size logic here --}}~2.5 MB</span>
                            <span class="file-uploaded">Uploaded: {{ $report->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="file-actions">
                            <a href="{{ asset('storage/' . $report->laporan) }}" class="file-btn preview-btn" target="_blank">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Preview
                            </a>
                            <a href="{{ asset('storage/' . $report->laporan) }}" class="file-btn download-btn" download>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download
                            </a>
                        </div>
                    </div>
                    
                    <div class="file-status">
                        <div class="status-indicator status-{{ $report->status }}"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certificate Section -->
        @if ($report->status === 'approved' && $report->training?->orders->first()?->certificate)
        <div class="certificate-section">
            <div class="section-header">
                <h2>Sertifikat Penyelesaian</h2>
                <div class="certificate-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Tersedia
                </div>
            </div>
            <div class="certificate-content">
                <div class="certificate-card premium">
                    <div class="certificate-ribbon">Premium</div>
                    <div class="certificate-info">
                        <div class="certificate-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div class="certificate-details">
                            <h3>Sertifikat Penyelesaian Training</h3>
                            <p class="certificate-training">{{ $report->training->title }}</p>
                            <div class="certificate-meta">
                                <span class="certificate-id">ID: CERT-{{ $report->id }}-{{ $report->training->id }}</span>
                                <span class="certificate-date">Diterbitkan: {{ $report->updated_at->format('d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="certificate-actions">
                        <a href="{{ route('user.certificate.download', [$user->id, $report->training->orders->first()->certificate->id]) }}"
                           class="certificate-download-btn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download Sertifikat
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Progress Timeline -->
        <div class="timeline-section">
            <div class="section-header">
                <h2>Progress Timeline</h2>
            </div>
            <div class="timeline premium">
                <div class="timeline-item completed">
                    <div class="timeline-marker">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="timeline-content">
                        <h4>Laporan Dibuat</h4>
                        <p>{{ $report->created_at->format('d F Y H:i') }}</p>
                        <span class="timeline-badge">Selesai</span>
                    </div>
                </div>
                
                @if($report->status === 'approved' || $report->status === 'rejected')
                <div class="timeline-item completed">
                    <div class="timeline-marker">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="timeline-content">
                        <h4>Laporan {{ ucfirst($report->status) }}</h4>
                        <p>{{ $report->updated_at->format('d F Y H:i') }}</p>
                        <span class="timeline-badge {{ $report->status === 'approved' ? 'success' : 'danger' }}">
                            {{ $report->status === 'approved' ? 'Disetujui' : 'Ditolak' }}
                        </span>
                    </div>
                </div>
                @else
                <div class="timeline-item current">
                    <div class="timeline-marker">
                        <div class="pulse-dot"></div>
                    </div>
                    <div class="timeline-content">
                        <h4>Dalam Review</h4>
                        <p>Menunggu persetujuan admin</p>
                        <span class="timeline-badge warning">Sedang Diproses</span>
                    </div>
                </div>
                @endif

                @if($report->status === 'approved' && $report->training?->orders->first()?->certificate)
                <div class="timeline-item completed">
                    <div class="timeline-marker">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="timeline-content">
                        <h4>Sertifikat Tersedia</h4>
                        <p>Sertifikat dapat diunduh</p>
                        <span class="timeline-badge success">Selesai</span>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Base Styles */
.detail-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Premium Header Styles */
.detail-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 20px;
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
}

.header-content {
    display: flex;
    align-items: center;
    gap: 20px;
}

.header-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    position: relative;
    overflow: hidden;
}

.header-icon::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    transform: rotate(45deg);
    animation: shine 3s infinite;
}

.header-icon svg {
    width: 35px;
    height: 35px;
    color: white;
    z-index: 2;
}

.header-text h1 {
    font-size: 2.25rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 6px 0;
    line-height: 1.2;
    background: linear-gradient(135deg, #1e293b 0%, #475569 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.header-text p {
    font-size: 1.1rem;
    color: #64748b;
    margin: 0;
    font-weight: 500;
}

/* Back Button Premium */
.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    color: #475569;
    text-decoration: none;
    padding: 14px 24px;
    border-radius: 12px;
    font-weight: 600;
    border: 1px solid rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
}

.back-btn:hover {
    background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
    border-color: #667eea;
    color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.back-btn svg {
    width: 18px;
    height: 18px;
}

/* Main Content */
.detail-content {
    max-width: 1200px;
    margin: 0 auto;
}

/* Premium Info Grid */
.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.info-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
    position: relative;
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 25px 30px;
    background: rgba(248, 250, 252, 0.8);
    border-bottom: 1px solid rgba(226, 232, 240, 0.5);
}

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.card-icon.training {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.card-icon.status {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.card-icon svg {
    width: 24px;
    height: 24px;
    color: white;
}

.card-header h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.card-body {
    padding: 30px;
}

.info-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 20px;
    padding: 15px;
    background: rgba(248, 250, 252, 0.5);
    border-radius: 10px;
    border: 1px solid rgba(226, 232, 240, 0.3);
}

.info-item:last-child {
    margin-bottom: 0;
}

.info-label {
    font-size: 0.8rem;
    color: #64748b;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.info-value {
    font-size: 1.1rem;
    color: #1e293b;
    font-weight: 600;
}

/* Status Display Premium */
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
    border: none;
}

.status-pending {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
}

.status-approved {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.status-rejected {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

.status-review {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
}

.status-info p {
    margin: 0;
    color: #64748b;
    font-size: 1rem;
    line-height: 1.6;
    font-style: italic;
}

/* File Section Premium */
.file-section {
    margin-bottom: 40px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 16px;
}

.section-header h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
    background: linear-gradient(135deg, #1e293b 0%, #475569 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.file-count {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    padding: 10px 16px;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 600;
}

.file-count svg {
    width: 16px;
    height: 16px;
}

/* File Card Premium */
.file-preview-container {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
}

.file-card {
    display: flex;
    align-items: center;
    gap: 25px;
    padding: 25px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(226, 232, 240, 0.5);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.file-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #667eea, #764ba2);
}

.file-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.file-icon {
    width: 80px;
    height: 80px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.file-pdf {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
    width: 40px;
    height: 40px;
}

.file-doc {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    width: 40px;
    height: 40px;
}

.file-zip {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
    width: 40px;
    height: 40px;
}

.file-generic {
    background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
    color: white;
    width: 40px;
    height: 40px;
}

.file-info {
    flex: 1;
}

.file-name {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 12px 0;
}

.file-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.file-type, .file-size, .file-uploaded {
    font-size: 0.9rem;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 8px;
}

.file-type {
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
}

.file-size {
    background: rgba(16, 185, 129, 0.1);
    color: #10b981;
}

.file-uploaded {
    background: rgba(245, 158, 11, 0.1);
    color: #f59e0b;
}

.file-actions {
    display: flex;
    gap: 12px;
}

.file-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.preview-btn {
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    border-color: rgba(102, 126, 234, 0.3);
}

.preview-btn:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.download-btn {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.download-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5);
}

.file-btn svg {
    width: 16px;
    height: 16px;
}

.file-status {
    display: flex;
    align-items: center;
}

.status-indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

.status-pending { background: #f59e0b; }
.status-approved { background: #10b981; }
.status-rejected { background: #ef4444; }
.status-review { background: #3b82f6; }

/* Certificate Section Premium */
.certificate-section {
    margin-bottom: 40px;
}

.certificate-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
}

.certificate-badge svg {
    width: 16px;
    height: 16px;
}

.certificate-card.premium {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
    color: white;
}

.certificate-ribbon {
    position: absolute;
    top: 20px;
    right: -30px;
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
    padding: 8px 40px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transform: rotate(45deg);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
}

.certificate-info {
    display: flex;
    align-items: center;
    gap: 25px;
    margin-bottom: 25px;
}

.certificate-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
}

.certificate-icon svg {
    width: 35px;
    height: 35px;
    color: white;
}

.certificate-details h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0 0 8px 0;
    color: white;
}

.certificate-training {
    font-size: 1.1rem;
    margin: 0 0 12px 0;
    opacity: 0.9;
}

.certificate-meta {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.certificate-id, .certificate-date {
    font-size: 0.9rem;
    opacity: 0.8;
    font-weight: 500;
}

.certificate-actions {
    text-align: center;
}

.certificate-download-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    text-decoration: none;
    padding: 16px 30px;
    border-radius: 12px;
    font-weight: 700;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.certificate-download-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
}

.certificate-download-btn svg {
    width: 18px;
    height: 18px;
}

/* Timeline Premium */
.timeline.premium {
    position: relative;
    padding-left: 40px;
}

.timeline.premium::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(180deg, #667eea, #764ba2);
    border-radius: 2px;
}

.timeline-item {
    position: relative;
    margin-bottom: 35px;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: -40px;
    top: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    border: 3px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.timeline-item.completed .timeline-marker {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border-color: #10b981;
    color: white;
}

.timeline-item.current .timeline-marker {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    border-color: #f59e0b;
}

.pulse-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: white;
    animation: pulse 2s infinite;
}

.timeline-marker svg {
    width: 18px;
    height: 18px;
}

.timeline-content {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
}

.timeline-content h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 8px 0;
}

.timeline-content p {
    color: #64748b;
    margin: 0 0 12px 0;
    font-size: 1rem;
}

.timeline-badge {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.timeline-badge.success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.timeline-badge.warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
}

.timeline-badge.danger {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

/* Animations */
@keyframes shine {
    0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
    100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.8;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .detail-container {
        padding: 16px;
    }
    
    .detail-header {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
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
    
    .file-card {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .file-actions {
        justify-content: center;
    }
    
    .certificate-info {
        flex-direction: column;
        text-align: center;
    }
    
    .timeline.premium {
        padding-left: 30px;
    }
    
    .timeline-marker {
        left: -30px;
        width: 30px;
        height: 30px;
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
    
    .file-meta {
        flex-direction: column;
        gap: 8px;
    }
    
    .file-actions {
        flex-direction: column;
    }
    
    .certificate-card.premium {
        padding: 25px;
    }
}
</style>

@endsection