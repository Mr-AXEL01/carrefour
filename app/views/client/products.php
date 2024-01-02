<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <section>
            <div class="container mx-auto flex justify-between ">
                <div class="flex flex-wrap space-x-4 mb-4">
                    <button class="bg-green-700 text-white px-3 py-1 rounded hover:text-black hover:bg-green-500">Fruit</button>
                    <button class="bg-green-700 text-white px-3 py-1 rounded hover:text-black hover:bg-green-500">Vegitable</button>
                    <button class="bg-green-700 text-white px-3 py-1 rounded hover:text-black hover:bg-green-500">Drinks</button>
                </div>
                <div class="flex items-center mb-4">
                    <input type="text" placeholder="Search for products..." class="w-full px-4 py-2 border border-gray-300 rounded-4 focus:outline-none focus:border-blue-500">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-700">Search</button>
                </div>
            </div>
        </section>
        <section class="products-by-category">

        </section>
    </main>
</body>
</html>