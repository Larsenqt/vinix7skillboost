@extends('layouts.navbar')

@section('title', 'Laporan')

@section('content')

<div class="laporan-container">
    <!-- Header Section -->
    <div class="laporan-header">
        <div class="header-content">
            <div class="header-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h1>Laporan Training Anda</h1>
            <p>Kelola dan pantau laporan training yang telah Anda submit</p>
        </div>
        <div class="header-stats">
            <div class="stat-card">
                <div class="stat-icon total">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-number">{{ count($reports) }}</span>
                    <span class="stat-label">Total Laporan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Button -->
    <div class="action-section">
        <a href="{{ route('user.laporan.create', $user->id) }}" class="create-btn">
            <span class="btn-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </span>
            Buat Laporan Baru
        </a>
    </div>

    <!-- Reports Table -->
    <div class="reports-card">
        <div class="card-header">
            <h2>Daftar Laporan</h2>
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Cari laporan..." class="search-input">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="search-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        @if(count($reports) > 0)
        <div class="table-container">
            <table class="reports-table">
                <thead>
                    <tr>
                        <th class="column-id">#</th>
                        <th class="column-training">Training</th>
                        <th class="column-status">Status</th>
                        <th class="column-actions">Aksi</th>
                    </tr>
                </thead>
                <tbody id="reportsTable">
                    @foreach($reports as $report)
                    <tr class="report-row">
                        <td class="report-id">{{ $report->id }}</td>
                        <td class="report-training">
                            <div class="training-info">
                                <div class="training-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <span class="training-title">{{ $report->training->title }}</span>
                            </div>
                        </td>
                        <td class="report-status">
                            <span class="status-badge status-{{ $report->status }}">
                                {{ ucfirst($report->status) }}
                            </span>
                        </td>
                        <td class="report-actions">
                            <a href="{{ route('user.laporan.show', [$user->id, $report->id]) }}" class="action-btn detail-btn">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Detail
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="empty-state">
            <div class="empty-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3>Belum Ada Laporan</h3>
            <p>Anda belum memiliki laporan training. Mulai dengan membuat laporan pertama Anda.</p>
            <a href="{{ route('user.laporan.create', $user->id) }}" class="empty-btn">
                Buat Laporan Pertama
            </a>
        </div>
        @endif
    </div>
</div>

<style>
/* Base Styles */
.laporan-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #fefce8 0%, #eff6ff 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Styles */
.laporan-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    flex-wrap: wrap;
    gap: 20px;
}

.header-content {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.header-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

.header-icon svg {
    width: 30px;
    height: 30px;
    color: white;
}

.laporan-header h1 {
    font-size: 2.25rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
    line-height: 1.2;
}

.laporan-header p {
    font-size: 1.125rem;
    color: #64748b;
    margin: 0;
    line-height: 1.5;
}

/* Stats Card */
.header-stats {
    display: flex;
    gap: 20px;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 16px;
    background: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 2px solid #fef3c7;
    min-width: 200px;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-icon.total {
    background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
}

.stat-icon svg {
    width: 24px;
    height: 24px;
    color: white;
}

.stat-info {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.stat-number {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: #64748b;
    font-weight: 500;
}

/* Action Section */
.action-section {
    margin-bottom: 30px;
}

.create-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);
    color: white;
    text-decoration: none;
    padding: 16px 28px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.125rem;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.create-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(245, 158, 11, 0.6);
    background: linear-gradient(135deg, #d97706 0%, #ca8a04 100%);
}

.create-btn:active {
    transform: translateY(0);
}

.btn-icon {
    width: 20px;
    height: 20px;
}

.btn-icon svg {
    width: 100%;
    height: 100%;
}

/* Reports Card */
.reports-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border: 2px solid #fef3c7;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 32px;
    background: linear-gradient(135deg, #fefce8 0%, #fef3c7 100%);
    border-bottom: 2px solid #fef3c7;
    flex-wrap: wrap;
    gap: 16px;
}

.card-header h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.search-box {
    position: relative;
    min-width: 300px;
}

.search-input {
    width: 100%;
    padding: 12px 16px 12px 44px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.95rem;
    background: white;
    transition: all 0.3s ease;
}

.search-input:focus {
    outline: none;
    border-color: #60a5fa;
    box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.1);
}

.search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    color: #94a3b8;
}

/* Table Styles */
.table-container {
    overflow-x: auto;
}

.reports-table {
    width: 100%;
    border-collapse: collapse;
}

.reports-table thead {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
}

.reports-table th {
    padding: 20px 16px;
    text-align: left;
    font-weight: 600;
    color: #1e40af;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-bottom: 2px solid #dbeafe;
}

.reports-table td {
    padding: 20px 16px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
}

.report-row {
    transition: all 0.3s ease;
}

.report-row:hover {
    background: #f8fafc;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Column Styles */
.column-id { width: 80px; }
.column-training { min-width: 300px; }
.column-status { width: 150px; }
.column-actions { width: 120px; }

/* Training Info */
.training-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.training-icon {
    width: 40px;
    height: 40px;
    background: #fef3c7;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #d97706;
    flex-shrink: 0;
}

.training-icon svg {
    width: 20px;
    height: 20px;
}

.training-title {
    font-weight: 500;
    color: #1e293b;
    line-height: 1.4;
}

/* Status Badges */
.status-badge {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: inline-block;
    text-align: center;
    min-width: 80px;
}

.status-pending {
    background: #fef3c7;
    color: #d97706;
    border: 1px solid #fcd34d;
}

.status-approved {
    background: #dcfce7;
    color: #16a34a;
    border: 1px solid #bbf7d0;
}

.status-rejected {
    background: #fee2e2;
    color: #dc2626;
    border: 1px solid #fecaca;
}

.status-review {
    background: #dbeafe;
    color: #2563eb;
    border: 1px solid #bfdbfe;
}

/* Action Buttons */
.report-actions {
    text-align: center;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.detail-btn {
    background: #dbeafe;
    color: #2563eb;
    border: 1px solid #bfdbfe;
}

.detail-btn:hover {
    background: #2563eb;
    color: white;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
}

.detail-btn svg {
    width: 16px;
    height: 16px;
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 60px 40px;
}

.empty-icon {
    width: 80px;
    height: 80px;
    background: #fef3c7;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    color: #d97706;
}

.empty-icon svg {
    width: 40px;
    height: 40px;
}

.empty-state h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 12px;
}

.empty-state p {
    color: #64748b;
    margin-bottom: 24px;
    line-height: 1.6;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

.empty-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);
    color: white;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.empty-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .laporan-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .header-stats {
        width: 100%;
        justify-content: flex-start;
    }
}

@media (max-width: 768px) {
    .laporan-container {
        padding: 16px;
    }
    
    .laporan-header h1 {
        font-size: 1.875rem;
    }
    
    .card-header {
        padding: 20px;
        flex-direction: column;
        align-items: stretch;
    }
    
    .search-box {
        min-width: auto;
    }
    
    .stat-card {
        min-width: auto;
        flex: 1;
    }
    
    .reports-table th,
    .reports-table td {
        padding: 16px 12px;
    }
    
    .training-info {
        gap: 8px;
    }
    
    .training-icon {
        width: 32px;
        height: 32px;
    }
    
    .training-icon svg {
        width: 16px;
        height: 16px;
    }
}

@media (max-width: 640px) {
    .header-stats {
        flex-direction: column;
    }
    
    .stat-card {
        width: 100%;
    }
    
    .reports-table {
        font-size: 0.875rem;
    }
    
    .column-training {
        min-width: 200px;
    }
    
    .action-btn {
        padding: 6px 12px;
        font-size: 0.75rem;
    }
    
    .status-badge {
        padding: 6px 12px;
        font-size: 0.7rem;
        min-width: 70px;
    }
}

@media (max-width: 480px) {
    .laporan-header h1 {
        font-size: 1.5rem;
    }
    
    .header-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
    }
    
    .header-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .create-btn {
        width: 100%;
        justify-content: center;
        padding: 14px 20px;
    }
    
    .empty-state {
        padding: 40px 20px;
    }
    
    .empty-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
    }
    
    .empty-icon svg {
        width: 30px;
        height: 30px;
    }
}

/* Animation for table rows */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.report-row {
    animation: fadeIn 0.5s ease forwards;
}

.report-row:nth-child(even) {
    animation-delay: 0.1s;
}

.report-row:nth-child(odd) {
    animation-delay: 0.2s;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const reportsTable = document.getElementById('reportsTable');
    const reportRows = document.querySelectorAll('.report-row');

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        reportRows.forEach(row => {
            const trainingTitle = row.querySelector('.training-title').textContent.toLowerCase();
            const status = row.querySelector('.status-badge').textContent.toLowerCase();
            const reportId = row.querySelector('.report-id').textContent.toLowerCase();
            
            if (trainingTitle.includes(searchTerm) || status.includes(searchTerm) || reportId.includes(searchTerm)) {
                row.style.display = '';
                row.style.animation = 'fadeIn 0.3s ease forwards';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Add hover effects programmatically
    reportRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });

    // Add loading animation for buttons
    const actionButtons = document.querySelectorAll('.action-btn');
    actionButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.href) {
                this.style.opacity = '0.7';
                this.style.pointerEvents = 'none';
                
                setTimeout(() => {
                    this.style.opacity = '1';
                    this.style.pointerEvents = 'auto';
                }, 1000);
            }
        });
    });
});
</script>

@endsection