@extends('template.main')

@section('title', 'Add Inventory Item')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
  <div class="form-box">
    <h4 class="text-center mb-4">Item Form</h4>
    
    <!-- Form Starts -->
    <form action="{{ route('inventory.store') }}" method="POST">
      @csrf

      <!-- Categories Dropdown -->
      <div class="mb-3">
        <label for="categories" class="form-label">Categories:</label>
        <select class="form-select" id="categories" name="category_id" required>
          <option value="" selected disabled>Select a category</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" 
              {{ request('category_id') == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>

      <!-- Item Name Input -->
      <div class="mb-3">
        <label for="item-name" class="form-label">Item Name:</label>
        <input
          type="text"
          class="form-control"
          id="item-name"
          name="name"
          placeholder="Enter item name"
          required
        />
      </div>

      <!-- Price Input -->
      <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input
          type="number"
          class="form-control"
          id="price"
          name="price"
          placeholder="Enter price"
          step="0.01"
          required
        />
      </div>

      <!-- Quantity Input -->
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input
          type="number"
          class="form-control"
          id="quantity"
          name="quantity"
          placeholder="Enter quantity"
          required
        />
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
