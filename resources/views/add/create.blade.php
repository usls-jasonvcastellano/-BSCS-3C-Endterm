@extends('navbar') <!-- Extend the navbar layout -->

@section('title', 'Add Items') <!-- Set the page title -->
<!-- <link rel="stylesheet" href="{{ asset('css/additems.css') }}"> -->
@section('content')
    <!-- Add Items Form Content -->
    <div class="form-container">
        <h3 class="text-center mb-4">Add Items Form</h3>
        <form>
            <div class="mb-3">
                <label class="form-label">Categories:</label>
                <select class="form-select">
                    <option>Select Category</option>
                    <!-- Add categories here -->
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Item Name:</label>
                <input type="text" class="form-control" placeholder="Enter item name" />
            </div>
            <div class="mb-3">
                <label class="form-label">Price:</label>
                <input type="number" class="form-control" placeholder="Enter price" />
            </div>
            <div class="mb-3">
                <label class="form-label">Qty:</label>
                <input type="number" class="form-control" placeholder="Enter quantity" />
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
