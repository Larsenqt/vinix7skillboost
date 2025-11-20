@extends('layouts.navbar')

@section('title', 'Buat Laporan')

@section('content')

<div class="form-container">
    <div class="form-header">
        <div class="header-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
        </div>
        <h1>Buat Laporan Training</h1>
        <p>Upload laporan training Anda dalam format PDF, DOC, DOCX, atau ZIP</p>
    </div>

    <div class="form-card">
        <form method="POST" action="{{ route('user.laporan.store', $user->id) }}" enctype="multipart/form-data" class="laporan-form">
            @csrf

            <!-- Training Selection -->
            <div class="form-group">
                <label class="form-label">
                    <span class="label-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </span>
                    Pilih Training
                </label>
                <div class="select-wrapper">
                    <select name="training_id" class="form-select" required>
                        <option value="" disabled selected>Pilih training yang diikuti...</option>
                        @foreach ($trainings as $training)
                            <option value="{{ $training->id }}">{{ $training->title }}</option>
                        @endforeach
                    </select>
                    <div class="select-arrow">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- File Upload -->
            <div class="form-group">
                <label class="form-label">
                    <span class="label-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                    </span>
                    Upload Laporan
                </label>
                
                <div class="file-upload-area" id="file-upload-area">
                    <input type="file" name="laporan" id="file-input" class="file-input" accept=".pdf,.doc,.docx,.zip" required>
                    
                    <div class="upload-content" id="upload-content">
                        <div class="upload-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        
                        <div class="upload-text">
                            <h3>Klik untuk upload file</h3>
                            <p>Format yang didukung: PDF, DOC, DOCX, ZIP</p>
                            <small>Maksimal ukuran file: 10MB</small>
                        </div>
                        
                        <div class="file-types">
                            <span class="file-type">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                PDF
                            </span>
                            <span class="file-type">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                DOC/DOCX
                            </span>
                            <span class="file-type">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                </svg>
                                ZIP
                            </span>
                        </div>
                    </div>
                    
                    <div class="file-preview" id="file-preview">
                        <div class="file-info">
                            <div class="file-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="file-details">
                                <p class="file-name" id="file-name"></p>
                                <p class="file-size" id="file-size"></p>
                            </div>
                        </div>
                        <button type="button" class="remove-file" id="remove-file">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-submit">
                <button type="submit" class="submit-btn">
                    <span class="btn-content">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Kirim Laporan
                    </span>
                </button>
            </div>
        </form>
    </div>

    <!-- Info Box -->
    <div class="info-box">
        <div class="info-content">
            <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="info-text">
                <h3>Tips Upload Laporan</h3>
                <ul>
                    <li>• Pastikan file laporan sudah lengkap dan sesuai format</li>
                    <li>• Ukuran file maksimal 10MB</li>
                    <li>• Format yang diterima: PDF, DOC, DOCX, ZIP</li>
                    <li>• Untuk file ZIP, pastikan berisi dokumen laporan yang lengkap</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
/* Base Styles */
.form-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Styles */
.form-header {
    text-align: center;
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.header-icon {
    width: 80px;
    height: 80px;
    background: #2563eb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.header-icon svg {
    width: 40px;
    height: 40px;
    color: white;
}

.form-header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 12px;
    line-height: 1.2;
}

.form-header p {
    font-size: 1.125rem;
    color: #6b7280;
    line-height: 1.6;
}

/* Form Card */
.form-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    padding: 40px;
    margin-bottom: 30px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.laporan-form {
    display: flex;
    flex-direction: column;
    gap: 32px;
}

/* Form Groups */
.form-group {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.form-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: #374151;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex;
    align-items: center;
    gap: 8px;
}

.label-icon {
    width: 20px;
    height: 20px;
    color: #2563eb;
}

.label-icon svg {
    width: 100%;
    height: 100%;
}

/* Select Styles */
.select-wrapper {
    position: relative;
    width: 100%;
}

.form-select {
    width: 100%;
    padding: 16px 20px;
    border: 2px solid #d1d5db;
    border-radius: 12px;
    background: white;
    font-size: 1rem;
    color: #374151;
    cursor: pointer;
    appearance: none;
    transition: all 0.3s ease;
}

.form-select:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.form-select:hover {
    border-color: #9ca3af;
}

.select-arrow {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #6b7280;
}

.select-arrow svg {
    width: 20px;
    height: 20px;
}

/* File Upload Styles */
.file-upload-area {
    border: 2px dashed #d1d5db;
    border-radius: 16px;
    padding: 40px;
    text-align: center;
    background: #f9fafb;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.file-upload-area:hover {
    border-color: #60a5fa;
    background: #eff6ff;
}

.file-upload-area.dragover {
    border-color: #2563eb;
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
    gap: 20px;
}

.upload-icon {
    width: 80px;
    height: 80px;
    background: #dbeafe;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2563eb;
}

.upload-icon svg {
    width: 40px;
    height: 40px;
}

.upload-text h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.upload-text p {
    color: #6b7280;
    margin-bottom: 4px;
}

.upload-text small {
    color: #9ca3af;
    font-size: 0.875rem;
}

.file-types {
    display: flex;
    gap: 24px;
    justify-content: center;
    flex-wrap: wrap;
}

.file-type {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #6b7280;
    font-size: 0.875rem;
}

.file-type svg {
    width: 16px;
    height: 16px;
}

/* File Preview */
.file-preview {
    display: none;
    background: #dcfce7;
    border: 1px solid #bbf7d0;
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
}

.file-preview.show {
    display: block;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 16px;
}

.file-icon {
    width: 48px;
    height: 48px;
    background: #bbf7d0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #16a34a;
}

.file-icon svg {
    width: 24px;
    height: 24px;
}

.file-details {
    flex: 1;
}

.file-name {
    font-weight: 600;
    color: #374151;
    margin-bottom: 4px;
}

.file-size {
    color: #6b7280;
    font-size: 0.875rem;
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
    width: 20px;
    height: 20px;
}

/* Submit Button */
.form-submit {
    margin-top: 20px;
}

.submit-btn {
    width: 100%;
    background: linear-gradient(135deg, #2563eb 0%, #4f46e5 100%);
    color: white;
    border: none;
    padding: 20px;
    border-radius: 12px;
    font-size: 1.125rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
    background: linear-gradient(135deg, #1d4ed8 0%, #4338ca 100%);
}

.submit-btn:active {
    transform: translateY(0);
}

.submit-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.btn-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-content svg {
    width: 20px;
    height: 20px;
}

/* Info Box */
.info-box {
    background: #dbeafe;
    border: 1px solid #bfdbfe;
    border-radius: 16px;
    padding: 24px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.info-content {
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

.info-icon {
    width: 32px;
    height: 32px;
    color: #2563eb;
    flex-shrink: 0;
}

.info-icon svg {
    width: 100%;
    height: 100%;
}

.info-text h3 {
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 12px;
    font-size: 1.125rem;
}

.info-text ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.info-text li {
    color: #374151;
    margin-bottom: 6px;
    font-size: 0.95rem;
    line-height: 1.5;
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
@media (max-width: 768px) {
    .form-container {
        padding: 16px;
    }
    
    .form-header h1 {
        font-size: 2rem;
    }
    
    .form-header p {
        font-size: 1rem;
    }
    
    .form-card {
        padding: 24px;
        border-radius: 16px;
    }
    
    .file-upload-area {
        padding: 24px;
    }
    
    .upload-icon {
        width: 60px;
        height: 60px;
    }
    
    .upload-icon svg {
        width: 30px;
        height: 30px;
    }
    
    .upload-text h3 {
        font-size: 1.25rem;
    }
    
    .file-types {
        gap: 16px;
    }
    
    .info-content {
        flex-direction: column;
        text-align: center;
    }
    
    .info-icon {
        align-self: center;
    }
}

@media (max-width: 480px) {
    .form-header h1 {
        font-size: 1.75rem;
    }
    
    .header-icon {
        width: 60px;
        height: 60px;
    }
    
    .header-icon svg {
        width: 30px;
        height: 30px;
    }
    
    .file-upload-area {
        padding: 20px;
    }
    
    .upload-content {
        gap: 16px;
    }
    
    .file-types {
        flex-direction: column;
        gap: 12px;
    }
}

/* Custom Scrollbar for Select */
.form-select::-webkit-scrollbar {
    width: 8px;
}

.form-select::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

.form-select::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}

.form-select::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('file-input');
    const fileUploadArea = document.getElementById('file-upload-area');
    const uploadContent = document.getElementById('upload-content');
    const filePreview = document.getElementById('file-preview');
    const fileName = document.getElementById('file-name');
    const fileSize = document.getElementById('file-size');
    const removeFileBtn = document.getElementById('remove-file');
    const submitBtn = document.querySelector('.submit-btn');

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
        const validTypes = ['application/pdf', 'application/msword', 
                           'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
                           'application/zip'];
        const maxSize = 10 * 1024 * 1024; // 10MB

        if (!validTypes.includes(file.type) && !file.name.match(/\.(pdf|doc|docx|zip)$/i)) {
            alert('Format file tidak didukung. Harap upload file PDF, DOC, DOCX, atau ZIP.');
            return false;
        }

        if (file.size > maxSize) {
            alert('Ukuran file terlalu besar. Maksimal 10MB.');
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
        
        // Enable submit button
        submitBtn.disabled = false;
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
        submitBtn.disabled = true;
    });

    // Form validation
    const form = document.querySelector('.laporan-form');
    form.addEventListener('submit', function(e) {
        const trainingSelect = document.querySelector('select[name="training_id"]');
        const file = fileInput.files[0];

        if (!trainingSelect.value) {
            e.preventDefault();
            alert('Harap pilih training terlebih dahulu.');
            trainingSelect.focus();
            return;
        }

        if (!file) {
            e.preventDefault();
            alert('Harap upload file laporan terlebih dahulu.');
            return;
        }

        if (!validateFile(file)) {
            e.preventDefault();
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <span class="btn-content">
                <svg class="loading-spinner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 12v4m8-10h-4M6 12H2m15.364-7.364l-2.828 2.828M7.464 17.536l-2.828 2.828m12.728 0l-2.828-2.828M7.464 6.464L4.636 3.636"></path>
                </svg>
                Mengupload...
            </span>
        `;
    });
});
</script>

@endsection