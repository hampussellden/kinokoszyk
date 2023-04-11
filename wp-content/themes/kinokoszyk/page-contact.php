<?php get_header('jh'); ?>

<section class="w-full flex flex-col items-start px-9 pt-20 bg-kinoblack text-white">
    <h2 class="pb-12 text-6xl font-display font-medium md:pb-20 md:text-8xl lg:text-9xl">Contact us</h2>
    <section class="w-full flex flex-col md:items-top md:flex-row md:justify-between">
        <section class="flex flex-col gap-8 pb-14">
            <h2 class="text-3xl font-display font-medium md:text-3xl lg:text-4xl">Contact information</h2>
            <a href="mailto:kino.koszyk@email.com" class="flex items-center">
                <img src="../../../wp-admin/images/email.svg" alt="email icon" class="w-6 h-6">
                <span class="text-base pl-4 md:text-lg lg:text-2xl">kino.koszyk@email.com</span>
            </a>
            <a href="tel:+46768327455" class="flex items-center">
                <img src="../../../wp-admin/images/phone.svg" alt="phone icon" class="w-6 h-6">
                <span class="text-base pl-4 md:text-lg lg:text-2xl">Tel. +46 768 32 74 55</span>
            </a>
            <a href="https://www.google.com/maps/search/?api=1&query=Konstepidimins+v%C3%A4g+6" class="flex items-center" target="_blank">
                <img src="../../../wp-admin/images/location_svg.svg" alt="location icon" class="w-6 h-6">
                <span class="text-base pl-4 md:text-lg lg:text-2xl">Konstepidimins väg 6</span>
            </a>
        </section>
        <section class="flex gap-12">
            <div class="flex flex-col items-left">
                <img src="../../../wp-admin/images/Joanna.png" srcset="../../../wp-admin/images/Joanna.png 500w,
                     ../../../wp-admin/images/Joanna-tablet.png 768w,
                     ../../../wp-admin/images/Joanna-desktop.png 1280w" alt="black and white, upper body, image of Joanna Helander outdoors" sizes="(max-width: 640px) 100vw, 50vw" class="w-32 h-32 md:w-40 md:h-40 lg:w-52 lg:h-52">
                <p class="mt-3">Joanna Helander</p>
            </div>
            <div class="flex flex-col items-left">
                <img src="../../../wp-admin/images/Bo.png" srcset="../../../wp-admin/images/Bo.png 500w,
                     ../../../wp-admin/images/Bo-tablet.png 768w,
                     ../../../wp-admin/images/Bo-desktop.png 1280w" alt="black and white, upper body, image of Bo Persson outdoors" sizes="(max-width: 640px) 100vw, 50vw" class="w-32 h-32 md:w-40 md:h-40 lg:w-52 lg:h-52">
                <p class="mt-3">Bo Persson</p>
            </div>
        </section>

    </section>
</section>

<?php get_footer(); ?>