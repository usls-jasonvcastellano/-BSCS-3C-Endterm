<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This specifies the HTTP method as PUT -->
    
    <label for="item_name">Name:</label>
    <input type="text" id="item_name" name="item_name" value="{{ old('item_name', $item->item_name) }}" required>
    <br>

    <label for="qty">Quantity:</label>
    <input type="number" id="qty" name="qty" value="{{ old('qty', $item->qty) }}" required>
    <br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="{{ old('price', $item->price) }}" required>
    <br>

    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <br>

    <button type="submit">Update Item</button>
</form>