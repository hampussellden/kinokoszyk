<?php
//$video = get_field('hero_movie');
//die(var_dump($video));



?>
<article>
    <video width="100%" height="100%" controls loop autoplay>
        <source src="<?= $video['url']; ?>" type="video/mp4">
    </video>


</article>