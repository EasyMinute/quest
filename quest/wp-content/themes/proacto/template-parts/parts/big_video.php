<?php $big_video = get_sub_field('big_video'); ?>
<?php $mode = get_sub_field('mode'); ?>

<section class="big_video <?php echo $mode ?>">
    <div class="container">
        <div class="big_video__wrap">
            <?php echo $big_video ?>
        </div>
    </div>
</section>