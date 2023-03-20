<?php
$number = get_field('number_of_vendors');
?>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-4 px-8 py-20 max-w-7xl mx-auto bg-pink-dark">
    <div class="col-span-full lg:col-span-10 lg:col-start-2">
        <div class="flex gap-4 items-center mb-6">
            <div class="flex-grow border-b border-brown h-0"></div>
            <div class="p-6 flex items-center justify-center">
                <img class="h-16 w-auto" src="<?= get_template_directory_uri(); ?>/src/images/sour-scoops-logo.svg" />
            </div>
            <div class="flex-grow border-b border-brown h-0"></div>
        </div>
        <div class="grid lg:grid-cols-2 gap-y-8 items-center mb-6 items-center">
            <div>
                <h2 class="text-4xl lg:text-6xl font-oi mb-6 text-center lg:text-left">
                    Available at <span class="text-blue-dark"><?= $number ? $number : 'Can not find number'; ?></span> locations near
                    you!
                </h2>
                <p class="text-center lg:text-left">
                    Find your local retailer that sells our products.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?= get_template_directory_uri(); ?>/src/images/map-marker.svg" />
                <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4 hover:bg-slate-100" href="<?= get_post_type_archive_link('ice-cream') ?>">Check out our flavors 👉</a>
            </div>
        </div>
    </div>
</div>