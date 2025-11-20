@extends('layouts.navbar')

@section('content')

<div class="trainings-container">
    <!-- Header Section -->
    <div class="trainings-header">
        <div class="header-content">
            <div class="header-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <div class="header-text">
                <h1>Daftar Training</h1>
                <p>Untuk {{ $user->name }}</p>
            </div>
        </div>
        <div class="header-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-number">{{ count($trainings) }}</span>
                    <span class="stat-label">Total Training</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="filters-section">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari training..." class="search-input">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="search-icon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <div class="filter-options">
            <select id="categoryFilter" class="filter-select">
                <option value="">Semua Kategori</option>
                @foreach($trainings->pluck('category')->unique() as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <select id="priceFilter" class="filter-select">
                <option value="">Semua Harga</option>
                <option value="free">Gratis</option>
                <option value="paid">Berbayar</option>
            </select>
        </div>
    </div>

    <!-- Training Grid -->
    <div class="trainings-grid" id="trainingsGrid">
        @foreach ($trainings as $training)
        <div class="training-card" data-category="{{ $training->category->name }}" data-price="{{ $training->price == 0 ? 'free' : 'paid' }}">
            <div class="card-image">
                <img src="{{ asset('storage/' . $training->thumbnail) }}" 
                     alt="{{ $training->title }}" 
                     class="training-thumbnail">
                <div class="card-overlay">
                    <div class="category-badge">
                        {{ $training->category->name }}
                    </div>
                    @if($training->price == 0)
                    <div class="price-badge free">
                        Gratis
                    </div>
                    @else
                    <div class="price-badge paid">
                        Rp {{ number_format($training->price, 0, ',', '.') }}
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="card-content">
                <h3 class="training-title">{{ $training->title }}</h3>
                <p class="training-description">
                    {{ Str::limit($training->description ?? 'Deskripsi training akan segera tersedia.', 120) }}
                </p>
                
                <div class="training-meta">
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>8 Jam</span>
                    </div>
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>Level: Pemula</span>
                    </div>
                </div>
                
                <div class="card-actions">
                    <a href="{{ route('user.training.show', [$user->id, $training->id]) }}" class="detail-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Lihat Detail
                    </a>
                    <button class="wishlist-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Empty State -->
    @if(count($trainings) === 0)
    <div class="empty-state">
        <div class="empty-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
        </div>
        <h3>Belum Ada Training Tersedia</h3>
        <p>Training akan segera ditambahkan. Silakan periksa kembali nanti.</p>
    </div>
    @endif
</div>

<style>
/* Base Styles */
.trainings-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #bae6fd 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Styles */
.trainings-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 20px;
}

.header-content {
    display: flex;
    align-items: center;
    gap: 20px;
}

.header-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
}

.header-icon svg {
    width: 35px;
    height: 35px;
    color: white;
}

.header-text h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 8px 0;
    line-height: 1.2;
}

.header-text p {
    font-size: 1.2rem;
    color: #64748b;
    margin: 0;
    font-weight: 500;
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
    padding: 20px 25px;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
    min-width: 200px;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
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

/* Filters Section */
.filters-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    flex-wrap: wrap;
    gap: 20px;
    background: white;
    padding: 20px 25px;
    border-radius: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
}

.search-box {
    position: relative;
    min-width: 300px;
    flex: 1;
}

.search-input {
    width: 100%;
    padding: 14px 20px 14px 50px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    background: #f8fafc;
    transition: all 0.3s ease;
    color: #1e293b;
}

.search-input:focus {
    outline: none;
    border-color: #3b82f6;
    background: white;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.search-input::placeholder {
    color: #94a3b8;
}

.search-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    color: #64748b;
}

.filter-options {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.filter-select {
    padding: 14px 20px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    background: #f8fafc;
    color: #1e293b;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 150px;
}

.filter-select:focus {
    outline: none;
    border-color: #3b82f6;
    background: white;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Training Grid */
.trainings-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

/* Training Card */
.training-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border: 2px solid #e0f2fe;
    transition: all 0.3s ease;
    position: relative;
}

.training-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
    border-color: #3b82f6;
}

.card-image {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.training-thumbnail {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.training-card:hover .training-thumbnail {
    transform: scale(1.05);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 40%, rgba(0, 0, 0, 0.7));
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 15px;
}

.category-badge {
    background: rgba(59, 130, 246, 0.9);
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    backdrop-filter: blur(10px);
}

.price-badge {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 700;
    color: white;
    backdrop-filter: blur(10px);
}

.price-badge.free {
    background: rgba(16, 185, 129, 0.9);
}

.price-badge.paid {
    background: rgba(245, 158, 11, 0.9);
}

/* Card Content */
.card-content {
    padding: 25px;
}

.training-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 12px 0;
    line-height: 1.3;
}

.training-description {
    color: #64748b;
    line-height: 1.6;
    margin: 0 0 20px 0;
    font-size: 0.95rem;
}

.training-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #64748b;
    font-size: 0.875rem;
    font-weight: 500;
}

.meta-item svg {
    width: 16px;
    height: 16px;
    color: #3b82f6;
}

/* Card Actions */
.card-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
}

.detail-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    text-decoration: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    flex: 1;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}

.detail-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(59, 130, 246, 0.6);
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
}

.detail-btn svg {
    width: 16px;
    height: 16px;
}

.wishlist-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    background: #f8fafc;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    color: #64748b;
    cursor: pointer;
    transition: all 0.3s ease;
}

.wishlist-btn:hover {
    background: #fee2e2;
    border-color: #fecaca;
    color: #ef4444;
    transform: scale(1.1);
}

.wishlist-btn svg {
    width: 20px;
    height: 20px;
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 80px 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border: 2px solid #e0f2fe;
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
    max-width: 400px;
    margin: 0 auto;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .trainings-grid {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    }
}

@media (max-width: 768px) {
    .trainings-container {
        padding: 16px;
    }
    
    .trainings-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .header-text h1 {
        font-size: 2rem;
    }
    
    .filters-section {
        flex-direction: column;
        align-items: stretch;
    }
    
    .search-box {
        min-width: auto;
    }
    
    .filter-options {
        justify-content: center;
    }
    
    .trainings-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
    }
    
    .stat-card {
        min-width: auto;
        width: 100%;
        justify-content: center;
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
    
    .header-text h1 {
        font-size: 1.75rem;
    }
    
    .trainings-grid {
        grid-template-columns: 1fr;
    }
    
    .card-content {
        padding: 20px;
    }
    
    .training-meta {
        flex-direction: column;
        gap: 10px;
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

/* Animation for cards */
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

.training-card {
    animation: fadeInUp 0.6s ease forwards;
}

.training-card:nth-child(odd) {
    animation-delay: 0.1s;
}

.training-card:nth-child(even) {
    animation-delay: 0.2s;
}

/* Custom scrollbar for selects */
.filter-select::-webkit-scrollbar {
    width: 8px;
}

.filter-select::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

.filter-select::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}

.filter-select::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const priceFilter = document.getElementById('priceFilter');
    const trainingsGrid = document.getElementById('trainingsGrid');
    const trainingCards = document.querySelectorAll('.training-card');

    // Filter functionality
    function filterTrainings() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        const selectedPrice = priceFilter.value;

        trainingCards.forEach(card => {
            const title = card.querySelector('.training-title').textContent.toLowerCase();
            const category = card.getAttribute('data-category');
            const price = card.getAttribute('data-price');
            
            const matchesSearch = title.includes(searchTerm);
            const matchesCategory = !selectedCategory || category === selectedCategory;
            const matchesPrice = !selectedPrice || price === selectedPrice;

            if (matchesSearch && matchesCategory && matchesPrice) {
                card.style.display = 'block';
                card.style.animation = 'fadeInUp 0.4s ease forwards';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Event listeners for filters
    searchInput.addEventListener('input', filterTrainings);
    categoryFilter.addEventListener('change', filterTrainings);
    priceFilter.addEventListener('change', filterTrainings);

    // Wishlist functionality
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');
    wishlistButtons.forEach(button => {
        button.addEventListener('click', function() {
            this.classList.toggle('active');
            const svg = this.querySelector('svg');
            
            if (this.classList.contains('active')) {
                svg.style.fill = '#ef4444';
                svg.style.stroke = '#ef4444';
                this.style.background = '#fef2f2';
                this.style.borderColor = '#fecaca';
            } else {
                svg.style.fill = 'none';
                svg.style.stroke = '#64748b';
                this.style.background = '#f8fafc';
                this.style.borderColor = '#e2e8f0';
            }
        });
    });

    // Add hover effects programmatically
    trainingCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

@endsection