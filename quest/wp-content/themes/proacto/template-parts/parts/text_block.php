<?php $text_block = get_sub_field('text_block'); ?>
<?php $mode = get_sub_field('mode'); ?>

<section class="text_block <?php echo $mode ?>">
    <div class="container">
        <div class="text_block__wrap text-20">
            <?php echo $text_block ?>
        </div>
    </div>
</section>
