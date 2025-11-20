@extends('layouts.navbar')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Elegant Registration Card -->
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="border-top: 4px solid #2c82e0;">
                <!-- Card Header -->
                <div class="card-header bg-gradient-blue text-white py-4 text-center">
                    <h3 class="mb-0 fw-bold" style="font-family: 'Playfair Display', serif;">
                        <i class="fas fa-user-plus me-2"></i> Create Your Account
                    </h3>
                </div>
                
                <!-- Card Body -->
                <div class="card-body p-5">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        
                        <!-- Name Input -->
                        <div class="form-group mb-4">
                            <label for="name" class="form-label fw-bold text-blue-dark">
                                <i class="fas fa-user me-2"></i> Full Name
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-blue-soft border-end-0">
                                    <i class="fas fa-user text-blue"></i>
                                </span>
                                <input type="text" 
                                       class="form-control border-start-0 ps-3 py-3 @error('name') is-invalid @enderror" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}"
                                       placeholder="Enter your full name"
                                       style="border-color: #e0e9f7;">
                            </div>
                            @error('name')
                                <div class="text-blue mt-2 small">
                                    <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <!-- Email Input -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label fw-bold text-blue-dark">
                                <i class="fas fa-envelope me-2"></i> Email Address
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-blue-soft border-end-0">
                                    <i class="fas fa-at text-blue"></i>
                                </span>
                                <input type="email" 
                                       class="form-control border-start-0 ps-3 py-3 @error('email') is-invalid @enderror" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       placeholder="your@email.com"
                                       style="border-color: #e0e9f7;">
                            </div>
                            @error('email')
                                <div class="text-blue mt-2 small">
                                    <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <!-- Password Input -->
                        <div class="form-group mb-4">
                            <label for="password" class="form-label fw-bold text-blue-dark">
                                <i class="fas fa-lock me-2"></i> Password
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-blue-soft border-end-0">
                                    <i class="fas fa-key text-blue"></i>
                                </span>
                                <input type="password" 
                                       class="form-control border-start-0 ps-3 py-3 @error('password') is-invalid @enderror" 
                                       id="password" 
                                       name="password"
                                       placeholder="Create a password"
                                       style="border-color: #e0e9f7;">
                                <button class="btn btn-outline-blue toggle-password" type="button">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                            <div class="password-strength mt-2">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-blue" role="progressbar" style="width: 0%"></div>
                                </div>
                                <small class="text-muted">Password strength</small>
                            </div>
                            @error('password')
                                <div class="text-blue mt-2 small">
                                    <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <!-- Confirm Password Input -->
                        <div class="form-group mb-4">
                            <label for="password_confirmation" class="form-label fw-bold text-blue-dark">
                                <i class="fas fa-lock me-2"></i> Confirm Password
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-blue-soft border-end-0">
                                    <i class="fas fa-key text-blue"></i>
                                </span>
                                <input type="password" 
                                       class="form-control border-start-0 ps-3 py-3" 
                                       id="password_confirmation" 
                                       name="password_confirmation"
                                       placeholder="Confirm your password"
                                       style="border-color: #e0e9f7;">
                                <button class="btn btn-outline-blue toggle-password" type="button">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-blue-gradient py-3 fw-bold rounded-3">
                                <i class="fas fa-user-plus me-2"></i> Create Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --blue: #2c82e0;
        --blue-dark: #1a5fa8;
        --blue-light: #e0e9f7;
        --blue-soft: #f0f5ff;
        --blue-ultralight: #f8fbff;
    }
    
    .text-blue {
        color: var(--blue) !important;
    }
    
    .text-blue-dark {
        color: var(--blue-dark) !important;
    }
    
    .bg-blue {
        background-color: var(--blue) !important;
    }
    
    .bg-blue-soft {
        background-color: var(--blue-soft) !important;
    }
    
    .bg-blue-ultralight {
        background-color: var(--blue-ultralight) !important;
    }
    
    .bg-gradient-blue {
        background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%) !important;
    }
    
    .btn-blue-gradient {
        background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
        color: white;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(44, 130, 224, 0.2);
    }
    
    .btn-blue-gradient:hover {
        background: linear-gradient(135deg, var(--blue-dark) 0%, #154b83 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(44, 130, 224, 0.3);
    }
    
    .btn-outline-blue {
        border-color: var(--blue-light);
        color: var(--blue);
    }
    
    .btn-outline-blue:hover {
        background-color: var(--blue-soft);
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
    }
    
    .card {
        border: none;
        overflow: hidden;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.98);
    }
    
    .form-control {
        padding: 12px 15px;
        border-radius: 0.375rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 0.25rem rgba(44, 130, 224, 0.15);
    }
    
    .input-group-text {
        transition: all 0.3s ease;
    }
    
    .toggle-password {
        border-radius: 0 0.375rem 0.375rem 0 !important;
    }
    
    .toggle-password:hover {
        background-color: var(--blue-soft);
    }
    
    .rounded-4 {
        border-radius: 1rem !important;
    }
    
    .form-check-input:checked {
        background-color: var(--blue);
        border-color: var(--blue);
    }
    
    .password-strength .progress {
        background-color: #e0e9f7;
    }
    
    .password-strength .progress-bar {
        transition: width 0.5s ease;
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
    
    // Password strength indicator
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strengthBar = document.querySelector('.password-strength .progress-bar');
        let strength = 0;
        
        // Length check
        if (password.length > 0) strength += 20;
        if (password.length >= 8) strength += 20;
        
        // Complexity checks
        if (/[A-Z]/.test(password)) strength += 20;
        if (/\d/.test(password)) strength += 20;
        if (/[^A-Za-z0-9]/.test(password)) strength += 20;
        
        // Update progress bar
        strengthBar.style.width = strength + '%';
        
        // Change color based on strength
        if (strength < 40) {
            strengthBar.classList.remove('bg-success', 'bg-warning');
            strengthBar.classList.add('bg-danger');
        } else if (strength < 80) {
            strengthBar.classList.remove('bg-danger', 'bg-success');
            strengthBar.classList.add('bg-warning');
        } else {
            strengthBar.classList.remove('bg-danger', 'bg-warning');
            strengthBar.classList.add('bg-success');
        }
    });
</script>
@endsection