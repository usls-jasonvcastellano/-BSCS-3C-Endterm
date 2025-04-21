<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Stylish header -->
    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-2xl font-bold">My Items</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:bg-blue-700 px-3 py-2 rounded">Home</a></li>
                    <li><a href="#" class="hover:bg-blue-700 px-3 py-2 rounded">About</a></li>
                    <li><a href="#" class="hover:bg-blue-700 px-3 py-2 rounded">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Items</h1>
        <!-- Replaced Search Bar -->
        <form class="flex items-center max-w-sm mx-auto mb-6">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                    </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search items..." required />
            </div>
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>

        <div class="text-center mb-4">
            <a href="{{ route('items.create') }}" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">Create New Item</a>
        </div>
        <div class="overflow-x-auto">
            <table id="itemsTable" class="min-w-full bg-white border rounded shadow">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="px-6 py-3 text-left text-sm font-medium">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium">Quantity</th>
                        <th class="px-6 py-3 text-left text-sm font-medium">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-medium">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="even:bg-gray-100 odd:bg-gray-50 hover:bg-gray-200">
                            <td class="px-6 py-4">{{ $item->id }}</td>
                            <td class="px-6 py-4">{{ $item->item_name }}</td>
                            <td class="px-6 py-4">{{ $item->qty }}</td>
                            <td class="px-6 py-4">{{ $item->price }}</td>
                            <td class="px-6 py-4">{{ $item->category->name ?? 'Uncategorized' }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('items.edit', $item->id) }}" class="text-red-400 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTables on the #itemsTable
            $('#itemsTable').DataTable({
                paging: true, // Enable pagination
                searching: true, // Enable search
                ordering: true, // Enable column sorting
                responsive: true // Make table responsive
            });
        });
    </script>
</body>
</html>