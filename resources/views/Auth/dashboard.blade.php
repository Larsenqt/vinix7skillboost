@extends('layouts.navbar')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Luxurious Blue Dashboard Card -->
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="border-top: 4px solid #2c82e0;">
                <!-- Card Header with Blue Accent -->
                <div class="card-header bg-gradient-blue text-white py-3 position-relative">
                    <h4 class="mb-0" style="font-family: 'Playfair Display', serif;">
                        <i class="fas fa-user-shield me-2"></i> User Dashboard
                    </h4>
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-blue-light rounded-pill px-3 py-2">Vinix7 SkillBoost</span>
                    </div>
                </div>
                
                <!-- Card Body -->
                <div class="card-body p-5">
                    <!-- Success Message -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-blue border-0 rounded-3 shadow-sm mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-3 fs-4 text-blue"></i>
                                <div>
                                    <h5 class="mb-1" style="font-family: 'Playfair Display', serif;">Success!</h5>
                                    <p class="mb-0">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-light-blue border rounded-3 shadow-sm mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-door-open me-3 fs-4 text-blue"></i>
                                <div>
                                    <h5 class="mb-1" style="font-family: 'Playfair Display', serif;">Selamat Datang Kembali</h5>
                                    <p class="mb-0">Kamu Berhasil Login</p>
                                </div>
                            </div>
                        </div>
                    @endif 
                    
                    <!-- Password Change Section -->
                    <div class="mt-5 pt-3">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <h3 class="mb-0" style="font-family: 'Playfair Display', serif;">
                                    <i class="fas fa-key me-2 text-blue"></i> Ganti Password
                                </h3>
                                <p class="text-muted mb-0">Amankan akun Anda dengan password baru</p>
                            </div>
                            <div class="password-meter-icon">
                                <i class="fas fa-lock fs-1 text-blue"></i>
                            </div>
                        </div>
                        
                        <form action="{{ route('password.update') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            
                            <!-- Current Password -->
                            <div class="form-group mb-4">
                                <label for="current_password" class="form-label fw-bold">Password Saat Ini</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-blue-ultralight border-end-0">
                                        <i class="fas fa-lock text-blue"></i>
                                    </span>
                                    <input type="password" 
                                           name="current_password" 
                                           class="form-control border-start-0 ps-3 py-3" 
                                           placeholder="Masukkan password saat ini" 
                                           required>
                                    <button class="btn btn-outline-blue toggle-password" type="button">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                                @error('current_password')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-circle me-1 text-blue"></i> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <!-- New Password -->
                            <div class="form-group mb-4">
                                <label for="new_password" class="form-label fw-bold">Password Baru</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-blue-ultralight border-end-0">
                                        <i class="fas fa-key text-blue"></i>
                                    </span>
                                    <input type="password" 
                                           name="new_password" 
                                           class="form-control border-start-0 ps-3 py-3" 
                                           placeholder="Buat password baru" 
                                           required
                                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                    <button class="btn btn-outline-blue toggle-password" type="button">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                                <div class="password-requirements mt-2">
                                    <small class="text-muted">Password harus mengandung:</small>
                                    <ul class="list-unstyled mb-0">
                                        <li class="text-sm"><span class="requirement-icon"><i class="fas fa-check-circle text-blue"></i></span> Minimal 8 karakter</li>
                                        <li class="text-sm"><span class="requirement-icon"><i class="fas fa-check-circle text-blue"></i></span> 1 huruf besar</li>
                                        <li class="text-sm"><span class="requirement-icon"><i class="fas fa-check-circle text-blue"></i></span> 1 huruf kecil</li>
                                        <li class="text-sm"><span class="requirement-icon"><i class="fas fa-check-circle text-blue"></i></span> 1 angka</li>
                                    </ul>
                                </div>
                                @error('new_password')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-circle me-1 text-blue"></i> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <!-- Confirm New Password -->
                            <div class="form-group mb-4">
                                <label for="new_password_confirmation" class="form-label fw-bold">Konfirmasi Password Baru</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-blue-ultralight border-end-0">
                                        <i class="fas fa-key text-blue"></i>
                                    </span>
                                    <input type="password" 
                                           name="new_password_confirmation" 
                                           class="form-control border-start-0 ps-3 py-3" 
                                           placeholder="Konfirmasi password baru" 
                                           required>
                                    <button class="btn btn-outline-blue toggle-password" type="button">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-blue-gradient py-3 fw-bold rounded-3">
                                    <i class="fas fa-save me-2"></i> Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --blue: #2c82e0;
        --blue-dark: #1a5fa8;
        --blue-light: #4a9aff;
        --blue-ultralight: #f0f7ff;
        --blue-gradient: linear-gradient(135deg, #2c82e0 0%, #1a5fa8 100%);
    }
    
    .text-blue {
        color: var(--blue) !important;
    }
    
    .bg-blue {
        background-color: var(--blue) !important;
    }
    
    .bg-blue-light {
        background-color: var(--blue-light) !important;
    }
    
    .bg-blue-ultralight {
        background-color: var(--blue-ultralight) !important;
    }
    
    .bg-gradient-blue {
        background: var(--blue-gradient) !important;
    }
    
    .btn-blue-gradient {
        background: var(--blue-gradient);
        color: white;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-blue-gradient:hover {
        background: linear-gradient(135deg, #1a5fa8 0%, #154b83 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(44, 130, 224, 0.3);
    }
    
    .btn-outline-blue {
        border-color: var(--blue);
        color: var(--blue);
    }
    
    .btn-outline-blue:hover {
        background-color: var(--blue-ultralight);
    }
    
    .alert-blue {
        background-color: var(--blue-ultralight);
        border-left: 4px solid var(--blue);
    }
    
    .alert-light-blue {
        background-color: #f8fbff;
        border-left: 4px solid var(--blue);
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f8fbff;
    }
    
    .card {
        border: none;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .password-meter-icon {
        width: 60px;
        height: 60px;
        background-color: rgba(44, 130, 224, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 20px;
    }
    
    .form-control {
        padding: 12px 15px;
        border-radius: 0.375rem;
        border: 1px solid #d1e3ff;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 0.25rem rgba(44, 130, 224, 0.25);
    }
    
    .input-group-text {
        transition: all 0.3s ease;
    }
    
    .toggle-password {
        border-radius: 0 0.375rem 0.375rem 0 !important;
    }
    
    .toggle-password:hover {
        background-color: #e1ecff;
    }
    
    .password-requirements {
        background-color: rgba(44, 130, 224, 0.03);
        padding: 12px;
        border-radius: 0.375rem;
        margin-top: 8px;
        border: 1px solid #e1ecff;
    }
    
    .password-requirements ul {
        padding-left: 5px;
    }
    
    .requirement-icon {
        display: inline-block;
        width: 18px;
        text-align: center;
        margin-right: 5px;
    }
    
    .rounded-4 {
        border-radius: 1rem !important;
    }
</style>

<script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(function(button) {
        button.addEventListener('click', function() {
            const input = this.parentNode.querySelector('input');
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
    
    // Password strength validation
    document.querySelector('input[name="new_password"]').addEventListener('input', function() {
        const password = this.value;
        const requirements = {
            length: password.length >= 8,
            upper: /[A-Z]/.test(password),
            lower: /[a-z]/.test(password),
            number: /\d/.test(password)
        };
        
        // Update requirement icons
        document.querySelectorAll('.password-requirements li').forEach((li, index) => {
            const icon = li.querySelector('.requirement-icon i');
            const requirementMet = Object.values(requirements)[index];
            
            if (requirementMet) {
                icon.classList.remove('fa-times-circle', 'text-danger');
                icon.classList.add('fa-check-circle', 'text-blue');
            } else {
                icon.classList.remove('fa-check-circle', 'text-blue');
                icon.classList.add('fa-times-circle', 'text-danger');
            }
        });
    });
</script>
@endsection