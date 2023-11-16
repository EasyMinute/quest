<?php
$small_videos = get_sub_field('small_videos');
$mode = get_sub_field('mode');
?>

<section class="small_videos <?php echo $mode ?>">
    <div class="container">
        <h2 class="title-40">
            <?php echo $small_videos['title'] ?>
        </h2>
        <?php if(count($small_videos['videos'])): ?>
            <?php foreach ($small_videos['videos'] as $key => $item) : ?>
                <div class="small_video">
                    <div class="small_video__texts">
                        <div class="small_video__number">
                            <?php echo $key + 1 ?>
                        </div>
                        <div class="small_video__description">
                            <h3 class="title-24">
                                <?php echo $item['title'] ?>
                            </h3>
                            <p class="text-20">
                                <?php echo $item['text'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="small_video__frame">
                        <div class="small_video__frame_wrap">
                            <?php echo $item['video'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
