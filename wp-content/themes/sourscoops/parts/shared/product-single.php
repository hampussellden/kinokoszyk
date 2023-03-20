<?php

$spline_url = get_field('spline_url');

?>
<div class="w-screen grid grid-cols-12 gap-6 grid-rows-1 max-w-7xl mx-auto p-8">
    <div class="col-span-6 border border-brown rounded-xl overflow-hidden bg-blue aspect-square">
        <canvas data-spline="<?= $spline_url ?>" class="w-full h-full border"></canvas>
    </div>
    <div class="col-span-<?= $spline_url ? '6' : 'full' ?> flex flex-col gap-6 justify-center text-center px-6">
        <h1 class="font-oi text-4xl lg:text-7xl"> <?= the_title() ?></h1>
        <p class="font-sans">
            <?= the_content() ?>
        </p>
        <ul class="text-left p-8 rounded-lg border border-brown">
            <div class="border-b py-2 mb-2 border-brown uppercase">Product Details
            </div>
            <li>
                <?= the_field('product_details'); ?>
            </li>
        </ul>
    </div>
</div>