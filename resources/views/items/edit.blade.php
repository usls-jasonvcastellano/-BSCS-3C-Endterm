<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 700px;
            margin: 40px auto;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border: none;
        }
        .card-header {
            background-color: #4e73df;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 1.5rem;
        }
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
            transform: translateY(-2px);
        }
        .form-control:focus, .form-select:focus {
            border-color: #bac8f3;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        .input-group-text {
            background-color: #f8f9fa;
        }
        .form-floating label {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Update Item</h3>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('items.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input 
                                    type="text" 
                                    id="item_name" 
                                    name="item_name" 
                                    class="form-control" 
                                    value="{{ old('item_name', $item->item_name) }}" 
                                    placeholder="Item Name"
                                    required
                                >
                                <label for="item_name">Item Name</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="form-floating">
                                <input 
                                    type="number" 
                                    id="qty" 
                                    name="qty" 
                                    class="form-control" 
                                    value="{{ old('qty', $item->qty) }}" 
                                    placeholder="Quantity"
                                    required
                                >
                                <label for="qty">Quantity</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <div class="form-floating flex-grow-1">
                                        <input 
                                            type="text" 
                                            id="price" 
                                            name="price" 
                                            class="form-control" 
                                            value="{{ old('price', $item->price) }}" 
                                            placeholder="Price"
                                            required
                                        >
                                        <label for="price">Price</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="form-floating">
                                <select 
                                    id="category_id" 
                                    name="category_id" 
                                    class="form-select" 
                                    required
                                >
                                    <option value="" disabled>Select a category</option>
                                    @foreach ($categories as $category)
                                        <option 
                                            value="{{ $category->id }}" 
                                            {{ $item->category_id == $category->id ? 'selected' : '' }}
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="category_id">Category</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-check-circle me-2"></i>Update Item
                        </button>
                        <a href="{{ route('items.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Back to Items
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>