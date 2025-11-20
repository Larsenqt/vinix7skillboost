@extends('layouts.navbar')

@section('title', 'Daftar Order')

@section('content')

<div class="orders-container">
    <!-- Header Section -->
    <div class="orders-header">
        <div class="header-content">
            <div class="header-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <div class="header-text">
                <h1>Daftar Order Anda</h1>
                <p>Kelola dan pantau semua order training Anda di satu tempat</p>
            </div>
        </div>
        <div class="header-stats">
            <div class="stat-card">
                <div class="stat-icon total">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-number">{{ count($orders) }}</span>
                    <span class="stat-label">Total Order</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon completed">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-number">{{ $orders->where('status', 'completed')->count() }}</span>
                    <span class="stat-label">Selesai</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon pending">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-number">{{ $orders->where('status', 'pending')->count() }}</span>
                    <span class="stat-label">Pending</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Content -->
    <div class="orders-content">
        @if(count($orders) > 0)
        <div class="orders-card">
            <div class="card-header">
                <h2>Semua Order Training</h2>
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Cari order..." class="search-input">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="search-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <select id="statusFilter" class="filter-select">
                        <option value="">Semua Status</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="processing">Processing</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
            </div>

            <div class="table-container">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th class="column-id">ID Order</th>
                            <th class="column-training">Training</th>
                            <th class="column-date">Tanggal</th>
                            <th class="column-status">Status</th>
                            <th class="column-actions">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="ordersTable">
                        @foreach ($orders as $order)
                        <tr class="order-row" data-status="{{ $order->status }}">
                            <td class="order-id">
                                <div class="id-display">
                                    <span class="id-prefix">#</span>
                                    {{ $order->id }}
                                </div>
                            </td>
                            <td class="order-training">
                                <div class="training-info">
                                    <div class="training-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <div class="training-details">
                                        <h4 class="training-title">{{ $order->training->title }}</h4>
                                        <p class="training-category">{{ $order->training->category->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="order-date">
                                <div class="date-display">
                                    <span class="date-day">{{ $order->created_at->format('d') }}</span>
                                    <span class="date-month">{{ $order->created_at->format('M') }}</span>
                                    <span class="date-year">{{ $order->created_at->format('Y') }}</span>
                                </div>
                            </td>
                            <td class="order-status">
                                <span class="status-badge status-{{ $order->status }}">
                                    @if($order->status === 'pending')
                                        Menunggu
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
                            </td>
                            <td class="order-actions">
                                <a href="{{ route('user.order.show', [$user->id, $order->id]) }}" class="action-btn detail-btn">
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
        </div>
        @else
        <div class="empty-state">
            <div class="empty-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <h3>Belum Ada Order</h3>
            <p>Anda belum memiliki order training. Mulai dengan mencari training yang sesuai dengan kebutuhan Anda.</p>
            <a href="{{ route('user.training.index', $user->id) }}" class="empty-btn">
                Jelajahi Training
            </a>
        </div>
        @endif
    </div>
</div>

<style>
/* Base Styles */
.orders-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Styles */
.orders-header {
    margin-bottom: 40px;
}

.header-content {
    text-align: center;
    margin-bottom: 40px;
}

.header-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
}

.header-icon svg {
    width: 40px;
    height: 40px;
    color: white;
}

.header-text h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 12px 0;
    line-height: 1.2;
}

.header-text p {
    font-size: 1.2rem;
    color: #64748b;
    margin: 0;
    line-height: 1.5;
}

/* Stats Cards */
.header-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 16px;
    background: white;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    border-color: #3b82f6;
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon.total {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
}

.stat-icon.completed {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.stat-icon.pending {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.stat-icon svg {
    width: 28px;
    height: 28px;
    color: white;
}

.stat-info {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1;
}

.stat-label {
    font-size: 0.9rem;
    color: #64748b;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Orders Card */
.orders-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    overflow: hidden;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-bottom: 2px solid #e0f2fe;
    flex-wrap: wrap;
    gap: 20px;
}

.card-header h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
}

.header-actions {
    display: flex;
    gap: 15px;
    align-items: center;
    flex-wrap: wrap;
}

.search-box {
    position: relative;
    min-width: 250px;
}

.search-input {
    width: 100%;
    padding: 12px 16px 12px 44px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.95rem;
    background: white;
    transition: all 0.3s ease;
    color: #1e293b;
}

.search-input:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.search-input::placeholder {
    color: #94a3b8;
}

.search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    color: #64748b;
}

.filter-select {
    padding: 12px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.95rem;
    background: white;
    color: #1e293b;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 150px;
}

.filter-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Table Styles */
.table-container {
    overflow-x: auto;
}

.orders-table {
    width: 100%;
    border-collapse: collapse;
}

.orders-table thead {
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
}

.orders-table th {
    padding: 20px 16px;
    text-align: left;
    font-weight: 600;
    color: #1e40af;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-bottom: 2px solid #dbeafe;
}

.orders-table td {
    padding: 20px 16px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
}

.order-row {
    transition: all 0.3s ease;
}

.order-row:hover {
    background: #f8fafc;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Column Styles */
.column-id { width: 120px; }
.column-training { min-width: 300px; }
.column-date { width: 120px; }
.column-status { width: 140px; }
.column-actions { width: 120px; }

/* Order ID */
.order-id .id-display {
    display: flex;
    align-items: center;
    gap: 4px;
    font-weight: 600;
    color: #1e293b;
}

.id-prefix {
    color: #3b82f6;
    font-weight: 700;
}

/* Training Info */
.training-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.training-icon {
    width: 40px;
    height: 40px;
    background: #f1f5f9;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3b82f6;
    flex-shrink: 0;
}

.training-icon svg {
    width: 20px;
    height: 20px;
}

.training-details h4 {
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 4px 0;
    line-height: 1.3;
}

.training-category {
    color: #64748b;
    font-size: 0.875rem;
    margin: 0;
}

/* Date Display */
.order-date .date-display {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.date-day {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1;
}

.date-month {
    font-size: 0.75rem;
    font-weight: 600;
    color: #3b82f6;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.date-year {
    font-size: 0.75rem;
    color: #64748b;
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
    min-width: 100px;
}

.status-pending {
    background: #fef3c7;
    color: #d97706;
    border: 1px solid #fcd34d;
}

.status-completed {
    background: #dcfce7;
    color: #16a34a;
    border: 1px solid #bbf7d0;
}

.status-processing {
    background: #dbeafe;
    color: #2563eb;
    border: 1px solid #bfdbfe;
}

.status-cancelled {
    background: #fee2e2;
    color: #dc2626;
    border: 1px solid #fecaca;
}

/* Action Buttons */
.order-actions {
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
    padding: 80px 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    max-width: 600px;
    margin: 0 auto;
}

.empty-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    color: #3b82f6;
}

.empty-icon svg {
    width: 50px;
    height: 50px;
}

.empty-state h3 {
    font-size: 1.75rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 12px;
}

.empty-state p {
    color: #64748b;
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 30px;
}

.empty-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}

.empty-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(59, 130, 246, 0.6);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .header-stats {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .orders-container {
        padding: 16px;
    }
    
    .header-text h1 {
        font-size: 2rem;
    }
    
    .header-text p {
        font-size: 1.1rem;
    }
    
    .header-stats {
        grid-template-columns: 1fr;
    }
    
    .card-header {
        flex-direction: column;
        align-items: stretch;
        padding: 20px;
    }
    
    .header-actions {
        flex-direction: column;
    }
    
    .search-box {
        min-width: auto;
    }
    
    .orders-table th,
    .orders-table td {
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
    .header-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
    }
    
    .header-icon svg {
        width: 30px;
        height: 30px;
    }
    
    .orders-table {
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
        min-width: 80px;
    }
    
    .empty-state {
        padding: 60px 20px;
    }
    
    .empty-icon {
        width: 80px;
        height: 80px;
        border-radius: 20px;
    }
    
    .empty-icon svg {
        width: 40px;
        height: 40px;
    }
}

@media (max-width: 480px) {
    .header-text h1 {
        font-size: 1.75rem;
    }
    
    .stat-card {
        padding: 20px;
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
    }
    
    .stat-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .stat-number {
        font-size: 1.75rem;
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

.order-row {
    animation: fadeIn 0.5s ease forwards;
}

.order-row:nth-child(even) {
    animation-delay: 0.1s;
}

.order-row:nth-child(odd) {
    animation-delay: 0.2s;
}

/* Custom scrollbar for table */
.table-container::-webkit-scrollbar {
    height: 8px;
}

.table-container::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

.table-container::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}

.table-container::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const ordersTable = document.getElementById('ordersTable');
    const orderRows = document.querySelectorAll('.order-row');

    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        orderRows.forEach(row => {
            const trainingTitle = row.querySelector('.training-title').textContent.toLowerCase();
            const orderId = row.querySelector('.id-display').textContent.toLowerCase();
            
            if (trainingTitle.includes(searchTerm) || orderId.includes(searchTerm)) {
                row.style.display = '';
                row.style.animation = 'fadeIn 0.3s ease forwards';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Status filter functionality
    statusFilter.addEventListener('change', function() {
        const selectedStatus = this.value;
        
        orderRows.forEach(row => {
            const rowStatus = row.getAttribute('data-status');
            
            if (!selectedStatus || rowStatus === selectedStatus) {
                row.style.display = '';
                row.style.animation = 'fadeIn 0.3s ease forwards';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Add hover effects programmatically
    orderRows.forEach(row => {
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