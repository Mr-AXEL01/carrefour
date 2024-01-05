<?php require APPROOT . '/views/inc/header.php'; ?>

<main>
    <section class="mt-5">
        <div class="container flex justify-between">
            <div class="flex flex-wrap space-x-4 mb-4">
                <?php
                foreach ($data['categories'] as $category) {
                    echo '<button class="bg-green-700 text-white px-3 py-1 rounded hover:text-black hover:bg-green-500">' . $category->name . '</button>';
                }
                ?>
            </div>
            <div class="flex items-center mb-4">
                <input type="text" placeholder="Search for products..." class="w-full px-4 py-2 border border-gray-300 rounded-4 focus:outline-none focus:border-blue-500">
            </div>
        </div>
    </section>
    <section class="products-by-category m-4 w-full flex flex-wrap space-x-10">
        <?php
        foreach ($data['products'] as $product) {
            echo '<div class="product-card bg-gray-100  p-4 rounded-md shadow-md" style="width: 200px; height: 300px;">';
            echo '<img src="' . URLROOT . '/public/uploads/' . $product->picture. '" alt="' . $product->name. '" class="mb-2 flex items-center justify-center rounded-md product-image" style="width: 100%; height: 60%;">';
            echo '<div class="product-details">';
            echo '<div class="bg-blue-700 text-white text-center px-4 py-2 rounded-md mb-2">';
            echo $product->price.'DH';
            echo '</div>';
            echo '<h3 class="text-blue-700 text-center font-semibold mb-2">' . $product->name . '</h3>';
            echo '<button class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-500">Add to Cart</button>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </section>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
