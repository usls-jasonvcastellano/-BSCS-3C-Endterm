<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @vite('resources/css/app.css')
    <title>Document</title>
</head>
  <body class="p-6 bg-gray-100 ">
    

  <div class="block min-h-screen bg-white" id="inventory">
    <div class="absolute top-0 left-0 h-full w-1/5 bg-cover bg-center" style="background-image: url('{{ asset('img/lines-bg.jpg') }}');"></div>

    <div class="relative z-10 mx-auto w-3/5 p-8">
          <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-bold mb-4">Inventory</h2>
      <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700" onclick="openModal()">
      
        Add Product
      </button>
      <div class="grid grid-cols-5 gap-4 bg-gray-200 p-4 rounded-lg font-bold">
        <div>Category</div>
        <div>Item Name</div>
        <div>Qty</div>
        <div>Price</div>
        <div>Action</div>
      </div>
      <div
        class="grid grid-cols-5 gap-4 p-4 border-b border-gray-300 items-center"
      >
        <div>Electronics</div>
        <div>Smartphone</div>
        <div>10</div>
        <div>$500</div>
        <div class="space-x-2">
          <button
            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"
          >
            Edit
          </button>
          <button
            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"
          >
            Delete
          </button>
        </div>
      </div>
    </div>
    </div>
  </div>

  <!-- Add Item Form -->
  <div id="addItemModal" class="fixed inset-0 flex items-center justify-center bg-gray-200 bg-opacity-75 hidden" onclick="closeModal(event)">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Add Item</h2>
        <button class="text-gray-500 hover:text-gray-700" onclick="closeModal(event)">&times;</button>
      </div>
      
      <form>
        <label class="block mb-2 text-sm">Category</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Enter category">
        
        <label class="block mb-2 text-sm">Item Name</label>
        <input type="text" class="w-full p-2 border rounded mb-3" placeholder="Enter item name">
        
        <label class="block mb-2 text-sm">Quantity</label>
        <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Enter quantity">
        
        <label class="block mb-2 text-sm">Price</label>
        <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Enter price">
        
        <div class="flex justify-end space-x-2 mt-4">
          <button type="button" class="bg-gray-300 px-4 py-2 rounded" onclick="closeModal(event)">Cancel</button>
          <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add</button>
        </div>
      </form>
    </div>
  </div>

  </body>
  <script>
    function openModal() {
      document.getElementById('addItemModal').classList.remove('hidden');
      document.getElementById('inventory').classList.add('hidden');
    }

    function closeModal(event) {
      document.getElementById('addItemModal').classList.add('hidden');
      document.getElementById('inventory').classList.remove('hidden');

    }
  </script>

</html>