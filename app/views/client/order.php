<?php require APPROOT . '/views/inc/header.php'; ?>

    <section class="w-[100vw] h-[100vh] bg-gray-200 flex justify-evenly items-center">
        <div class="w-[50%] h-[90%] bg-white rounded-lg">
            
            <!-- TITLE -->
            <h1 class="m-6 text-2xl font-extrabold">Order</h1>

            <!-- DIVIDER -->
            <div class="w-[95%] m-auto border-t-2 border-black"></div>

            <div class="w-[90%] flex flex-col p-8 rounded">
                <div class="w-full flex justify-between">
                    <div class="w-[90%] flex">
                        <img class="max-h-[200px] max-w-[200px] border-2 border-black rounded" src="<?= URLROOT . '/images/book1.jpg'?>" alt="">
                        <div class="flex flex-col justify-end p-2 ml-4">
                            <h1 class="text-2xl font-black m-2">PHP Pocket Reference</h1>
                            <p class="w-[50%] m-2">$19.88</p>
                            <div class="flex items-center m-2">
                                <div class="bg-yellow-400 border-2 border-black border-r-0 px-1 rounded-l">+</div>
                                <input class="w-[20%] border-2 border-black my-2 text-center" name="quantity" id="" value="1">
                                <div class="bg-yellow-400 border-2 border-black border-l-0 px-1 rounded-r">-</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center m-2">
                        <h1>$19.88</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[30%] h-[70%] bg-white rounded-lg">rr</div>
    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>