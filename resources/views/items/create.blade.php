@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <h4 class="section-header">ADD ITEM</h4>
        <hr class="divider">
        
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            
            <div class="form-group mb-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <label for="item_name" class="form-label">Item Name</label>
                </div>
                <div class="field-container">
                    <input 
                        type="text" 
                        id="item_name" 
                        name="item_name" 
                        class="form-control dropdown-style" 
                        value="{{ old('item_name') }}" 
                        required
                    >
                </div>
            </div>
            
            <div class="form-group mb-3">
                <label for="qty" class="form-label">Quantity</label>
                <div class="field-container">
                    <input 
                        type="number" 
                        id="qty" 
                        name="qty" 
                        class="form-control dropdown-style" 
                        value="{{ old('qty') }}" 
                        required
                    >
                </div>
            </div>
            
            <div class="form-group mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="field-container">
                    <input 
                        type="number" 
                        id="price" 
                        name="price" 
                        class="form-control dropdown-style" 
                        value="{{ old('price') }}" 
                        step="0.01"
                        required
                    >
                </div>
            </div>
            
            <div class="form-group mb-3">
                <label for="category_id" class="form-label">Category</label>
                <div class="field-container">
                    <select 
                        id="category_id" 
                        name="category_id" 
                        class="form-select dropdown-style" 
                        required
                    >
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option 
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="button-container mt-4">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>

<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }
    
    .form-container {
        max-width: 480px;
        margin: 40px auto;
        padding: 0;
    }
    
    .section-header {
        color: #888;
        font-weight: normal;
        font-size: 16px;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
        text-transform: uppercase;
    }
    
    .divider {
        border-top: 1px solid #e5e5e5;
        margin-bottom: 25px;
        opacity: 1;
    }
    
    .form-label {
        font-weight: 500;
        color: #555;
        font-size: 14px;
        margin-bottom: 8px;
        display: block;
    }
    
    /* Container to ensure consistent field width */
    .field-container {
        width: 100%;
    }
    
    .dropdown-style {
        border-radius: 4px;
        border: 1px solid #ced4da;
        padding: 10px 15px;
        color: #333;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        appearance: none;
        height: 42px;
        width: 100%;
    }
    
    /* Ensure all form controls have the same height */
    .form-control, .form-select {
        height: 42px;
    }
    
    .text-link {
        color: #0d6efd;
        text-decoration: none;
        font-size: 14px;
    }
    
    .text-link:hover {
        text-decoration: underline;
    }
    
    .button-container {
        display: flex;
        justify-content: space-around;
        gap: 10px;
    }
    
    .btn {
        padding: 8px 20px;
        border-radius: 4px;
        font-weight: 500;
        font-size: 14px;
    }
    
    .btn-primary {
        background-color:rgb(5, 99, 7);
        border-color: rgb(5, 99, 7);
    }
    
    .btn-secondary {
        background-color:rgb(225, 11, 11);
        border-color: #6c757d;
        color: white;
    }
    
    /* Force consistent box heights and alignments */
    input, select {
        line-height: normal !important;
        box-sizing: border-box !important;
    }
</style>
@endsection