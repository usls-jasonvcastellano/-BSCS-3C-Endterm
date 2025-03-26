<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/lucide@latest"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
   <body class="flex">
        @include("components.sidebar")
        <div class="w-full h-screen p-4 pl-4 select-none">
            <h1 class="text-2xl mt-8 mb-8">List of Products</h1>
            <div class="flex justify-between mb-4 items-center">
                <div class="flex gap-2 p-2 rounded-md items-center border-neutral-300 border ">
                    <i data-lucide="search" class="text-neutral-500 w-5"></i>
                    <input type="text" placeholder="Search product" class="focus:outline-none">
                </div>
                <div class="flex gap-2 cursor-pointer">
                    <i data-lucide="plus" class="w-4 text-sm"></i>
                    <span>New Item</span>
                </div>
            </div>
            <div class="overflow-auto">
                <table class=" w-full">
                    <tr class="bg-neutral-100 *:border *:p-2">
                        <th class="text-left">Actions</th>
                        <th class="text-left">ID</th>
                        <th class="text-left">Name</th>
                        <th class="text-left max-w-16">Description</th>
                        <th class="text-left">Price (PHP)</th>
                        <th class="text-left">Qty</th>
                    </tr>
                    @foreach ($product_items as $item)
                        <tr class="*:border *:p-4">
                            <td class="text-left">
                                <div class="flex gap-2">
                                <i data-lucide="pencil" class="cursor-pointer w-4"></i>
                                <i data-lucide="trash" class="cursor-pointer w-4 text-red-700"></i>
                        </div></td>
                            <td class="text-left">{{$item['id']}}</td>
                            <td class="text-left">{{$item['name']}}</td>
                            <td class="text-left max-w-[32ch] text-ellipsis overflow-hidden whitespace-nowrap">{{$item['description']}}</td>
                            <td class="text-left">{{$item['price']}}</td>
                            <td class="text-left">{{$item['qty']}}</td>
                        </tr>
                    @endforeach
                </table>
        </div>
        </div>
   </body>
   <script>
        lucide.createIcons();
    </script>
</html>
