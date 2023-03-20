<!-- Product Card -->
<div class="flex flex-col gap-6">
    <div class="rounded-xl border border-brown overflow-hidden relative aspect-square bg-white">
        <canvas class="absolute object-cover inset-0 w-full h-full" data-spline="https://prod.spline.design/LvRa4Y-edxnROzmX/scene.splinecode"></canvas>
    </div>
    <div class="rounded-xl bg-blue py-4 border border-brown">
        <h3 class="text-3xl lg:text-4xl font-oi mb-12 px-5"> <?= the_title() ?></h3>
        <a class="block border-t border-brown px-5 pt-3" title="<?= the_title() ?>" href="<?= the_permalink() ?>">Read more 👉</a>
    </div>
</div>
<!-- EOF: Product Card -->