<?php
$page = 'bulkupload';
$parentname = 'bulkupload';
$pagename = 'bulkupload';
$pagetype = 'bulkupload';
?>
@extends('adminview/layout/master')
@section('body')

<div class="container mt-4">
    <h2 class="mb-4">Bulk Upload</h2>
    <div class="card">
        <div class="card-body">
          
                <div class="form-group mb-3">
                    <label for="csv_file" class="form-label">Choose CSV File</label>
                    <input type="file" name="csv_file" id="csv_file" class="form-control" accept=".csv" required>
                </div>
                <div class="mb-3 d-flex gap-2">
                    <a href="{{ asset('sample/sample.csv') }}" class="btn btn-primary" download>Download Sample CSV</a>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#guidelinesModal">Guidelines</button>
                    <button type="submit" class="btn btn-success">Import CSV</button>
                </div>
                
        </div>

<script>
$(document).ready(function(){
    $(".main-loading").hide();

    $('form').on('submit', function() {
        $(".main-loading").show();
    });
});
</script>

@endsection
