<?php
$page = 'bulkupload';
$parentname = 'bulkupload';
$pagename = 'bulkupload';
$pagetype = 'bulkupload';
?>
@extends('adminview/layout/master')
@section('body')

<div class="upload-container">
    <h1 class="upload-title">Bulk Upload</h1>
    <div class="file-input-wrapper">
        <label class="file-label-text">Choose CSV File</label>
        <label for="fileInput" class="custom-file-button">
            Choose File
        </label>
        <span class="file-name-display" id="fileName">No file chosen</span>
        <input type="file" id="fileInput" class="file-input" accept=".csv,.xlsx,.xls">
        <div class="button-group">
            <button class="btn-import" onclick="importFile()">
                IMPORT FILE
            </button>
            <button class="btn-download" onclick="downloadSample('csv')">
                DOWNLOAD SAMPLE CSV
            </button>
        </div>
</div>
    <div class="drop-zone" id="dropZone">
        <div class="upload-icon">
            <svg viewBox="0 0 400 250" xmlns="http://www.w3.org/2000/svg">
                <!-- Background circles -->
                <circle cx="100" cy="180" r="8" fill="#e3f2fd" opacity="0.6"/>
                <circle cx="320" cy="100" r="12" fill="#e8f5e9" opacity="0.5"/>
                <circle cx="80" cy="80" r="6" fill="#fff3e0" opacity="0.6"/>
                <circle cx="340" cy="180" r="10" fill="#fce4ec" opacity="0.5"/>
                
                <!-- Plus signs -->
                <g fill="#b0bec5" opacity="0.4">
                    <rect x="155" y="50" width="2" height="12"/>
                    <rect x="150" y="55" width="12" height="2"/>
                    <rect x="340" y="220" width="2" height="10"/>
                    <rect x="336" y="224" width="10" height="2"/>
                </g>
                
                <!-- Laptop -->
                <rect x="40" y="120" width="140" height="90" rx="4" fill="#5c6bc0"/>
                <rect x="50" y="128" width="120" height="70" fill="#7986cb"/>
                <line x1="60" y1="140" x2="100" y2="140" stroke="#9fa8da" stroke-width="2"/>
                <line x1="60" y1="150" x2="160" y2="150" stroke="#9fa8da" stroke-width="2"/>
                <line x1="60" y1="160" x2="150" y2="160" stroke="#9fa8da" stroke-width="2"/>
                <line x1="60" y1="170" x2="140" y2="170" stroke="#9fa8da" stroke-width="2"/>
                <line x1="60" y1="180" x2="155" y2="180" stroke="#9fa8da" stroke-width="2"/>
                
                <!-- Laptop base -->
                <path d="M 30 210 L 50 210 L 40 220 L 180 220 L 170 210 L 190 210 Z" fill="#424242"/>
                
                <!-- CSV Badge -->
                <rect x="150" y="75" width="50" height="35" rx="4" fill="#66bb6a"/>
                <text x="175" y="97" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">CSV</text>
                
                <!-- Excel Badge -->
                <rect x="205" y="75" width="50" height="35" rx="4" fill="#217346"/>
                <text x="230" y="97" font-family="Arial, sans-serif" font-size="11" font-weight="bold" fill="white" text-anchor="middle">XLSX</text>
                
                <!-- Spreadsheet -->
                <rect x="180" y="140" width="90" height="70" rx="4" fill="white" stroke="#e0e0e0" stroke-width="2"/>
                <line x1="180" y1="155" x2="270" y2="155" stroke="#e0e0e0" stroke-width="2"/>
                <line x1="180" y1="170" x2="270" y2="170" stroke="#e0e0e0" stroke-width="2"/>
                <line x1="180" y1="185" x2="270" y2="185" stroke="#e0e0e0" stroke-width="2"/>
                <line x1="210" y1="140" x2="210" y2="210" stroke="#e0e0e0" stroke-width="2"/>
                <line x1="240" y1="140" x2="240" y2="210" stroke="#e0e0e0" stroke-width="2"/>
                
                <!-- Upload Arrow -->
                <g fill="#66bb6a">
                    <polygon points="305,100 320,120 312,120 312,145 298,145 298,120 290,120"/>
                    <rect x="290" y="148" width="30" height="8" rx="2"/>
                </g>
                
                <!-- Folder -->
                <path d="M 280 160 L 280 220 L 370 220 L 370 175 L 350 175 L 345 160 Z" fill="#ffa726"/>
                <path d="M 280 160 L 345 160 L 350 170 L 370 170 L 370 175 L 280 175 Z" fill="#ffb74d"/>
            </svg>
        </div>
        
        <p class="drop-text">Drag & drop your CSV or Excel file here or click the button above</p>
        <p class="drop-subtext" style="font-size: 0.875rem; color: #888; margin-top: 0.5rem;">Supported formats: .csv, .xlsx, .xls</p>
    </div>

</div>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script> --}}
<script>
$(document).ready(function () {

$(".main-loading").hide();

const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('fileInput');
const fileName = document.getElementById('fileName');
let selectedFile = null;

fileInput.addEventListener('change', function (e) {
    if (e.target.files.length > 0) {
        selectedFile = e.target.files[0];
        fileName.textContent = selectedFile.name;
    }
});

dropZone.addEventListener('dragover', e => {
    e.preventDefault();
    dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', e => {
    e.preventDefault();
    dropZone.classList.remove('dragover');
});

dropZone.addEventListener('drop', e => {
    e.preventDefault();
    dropZone.classList.remove('dragover');

    const file = e.dataTransfer.files[0];
    if (file && file.name.toLowerCase().endsWith('.csv')) {
        selectedFile = file;
        fileInput.files = e.dataTransfer.files;
        fileName.textContent = file.name;
    } else {
        Swal.fire('Invalid File', 'Only CSV files are allowed', 'error');
    }
});

dropZone.addEventListener('click', () => fileInput.click());

window.importFile = function () {
    if (!selectedFile) {
        Swal.fire('No File Selected', 'Please upload a CSV file', 'warning');
        return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
        const rows = e.target.result.split('\n').map(r => r.split(','));
        console.log(rows);

        Swal.fire(
            'CSV Loaded',
            `File: ${selectedFile.name} | Rows: ${rows.length}`,
            'success'
        );
    };
    reader.readAsText(selectedFile);
};

    // Sample CSV
    window.downloadSample = function () {
        const csv =
    `Name,Email,Phone,Address
    John Doe,john@example.com,1234567890,123 Main St
    Jane Smith,jane@example.com,0987654321,456 Oak Ave`;

    const blob = new Blob([csv], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);

    const a = document.createElement('a');
    a.href = url;
    a.download = 'sample_upload.csv';
    a.click();

    URL.revokeObjectURL(url);
};

});
</script>

@endsection