<?php wp_footer() ?>
<?php $links =  wp_get_nav_menu_items('footer-links'); ?>
<?php $contact =  wp_get_nav_menu_items('footer-contacts'); ?>

<footer class="w-full bg-kinodeepblack">
    <section class="pl-5 md:flex justify-between items-center md:pl-10 md:py-20 md:pr-12 lg:pl-20 lg:py-16 lg:pr-40">
        <section class="py-10 flex flex-col gap-10 pr-10">
            <section class="flex gap-10 items-center">
                <svg width="69" height="37" viewBox="0 0 69 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.8503 22.3678C31.3639 21.909 31.8684 21.3525 32.1207 20.7734C32.7547 19.3244 32.8365 18.3274 32.8365 17.5461C32.8365 16.7648 32.6502 15.0819 32.0184 14.0031C31.7366 13.5239 31.3344 12.9947 30.9367 12.5269L33.3706 11.7797L68.6843 0.939453H36.7568L24.1485 8.38428L16.6535 12.8108V1.00077H0V36.9395H16.6535V21.1209L24.9575 27.5687L36.9817 36.9031H68.6843L33.3706 23.3353L30.8503 22.3678ZM29.2845 21.7636L16.6535 16.9125L29.2845 13.0356V21.7636Z" fill="#FCFBF9" />
                </svg>
                <svg width="91" height="57" viewBox="0 0 91 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.593 10.9395V23.0313H30.5713V10.9395H17.9895V30.774C17.4496 30.434 16.8364 30.1362 16.2609 30.054C14.7301 29.8317 13.7659 30.0117 13.0305 30.214C12.2951 30.4162 10.751 31.0251 9.8978 31.9007C9.50232 32.3052 9.08908 32.8497 8.74248 33.3631L0.0576172 20.6067V41.1724L17.9917 46.9395L9.68007 34.7343L17.9917 32.4586V46.9395L30.5735 41.1724V27.3649H43.5953V43.597H58.0323V10.9395H43.5953H43.593Z" fill="#FCFBF9" />
                </svg>
            </section>
            <section>
                <a href="contact">
                    <button class="py-[13.9px] group flex gap-x-4 justify-center items-center text-kinowhite rounded-sm text-xl pl-5 pr-7 bg-kinored md:px-8 md:text-2xl hover:bg-kinowhite hover:text-kinored">
                        Contact us
                        <svg class="fill-current h-4" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" />
                        </svg>
                    </button>
                </a>
            </section>
        </section>
        <section class="py-6 md:flex">
            <div class="flex flex-col border-b pb-7 border-solid md:gap-2.5 md:p-0 md:border-b-0 md:border-r md:pr-24">
                <h3 class="text-base font-bold">LINKS</h3>
                <?php foreach ($links as $link) : ?>
                    <a class="text-sm w-fit" href="<?= $link->url ?>"><?= $link->title ?></a>
                <?php endforeach ?>
            </div>
            <div class="flex flex-col pt-7 md:gap-2.5 md:pt-0 md:pl-24">
                <h3 class="text-base font-bold">CONTACT</h3>
                <p class="text-sm">Bo Persson och Joanna Helander</p>


                <?php foreach ($contact as $item) : ?>
                    <a class="text-sm w-fit" href="<?= $item->url ?>"><?= $item->title ?></a>
                <?php endforeach ?>
                <!-- <a class="text-sm w-fit" href="https://www.google.com/maps/search/?api=1&query=Konstepidimins+v%C3%A4g+6" target="_blank">Konstepidimins väg 6</a> -->

            </div>
        </section>
    </section>
    <section class="bg-kinogrey md:pl-10 lg:pl-20">
        <h4 class="text-kinoblack pl-3 pt-3 pb-6">Collaboration partners</h4>
        <section class="pb-6 flex flex-col gap-6 md:flex-row md:gap-10 md:pl-3">
            <div class="flex justify-around md:flex-row md:gap-10">
                <img src="<?= get_template_directory_uri(); ?>/images/svt.svg" alt="svt logo">
                <img src="<?= get_template_directory_uri(); ?>/images/keds.svg" alt="keds logo">
                <img src="<?= get_template_directory_uri(); ?>/images/filminstitutet.svg" alt="film institutet logo">
            </div>
            <div class="flex justify-around md:flex-row md:gap-10">
                <img src="<?= get_template_directory_uri(); ?>/images/filmivast.svg" alt="film i väst logo">
                <img src="<?= get_template_directory_uri(); ?>/images/arte.svg" alt="arte logo">
                <img src="<?= get_template_directory_uri(); ?>/images/ard.svg" alt="ard logo">
            </div>
        </section>
    </section>
    <section class="flex justify-center items-center py-4">
        <p class="text-xs text-kinowhite">Copyright © 2023 · All Rights Reserved · Kino Koszyk</p>
    </section>
</footer>
</body>

</html>