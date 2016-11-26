<?php get_header(); ?>

<?php
$args = array(
    'cat'      => 'post',
    'order'    => 'ASC'
  );
  query_posts( $args );
  $i = 0;
  while ( have_posts() ) : the_post();
  $idImg = get_field('image_project');
  $videoPreview = get_field('video_preview');
  $iframeID = get_field('iframe_video');
  $urlImg = wp_get_attachment_image_src($idImg, 'full_screen')[0];
  $terms = get_terms()[0];
?>

 <div class="background-full <?php if($i == 0): echo 'active'; endif;?>" <?php if(!$videoPreview): ?>style="background-image: url('<?php echo $urlImg; ?>');"<?php endif; ?>>
     <?php if($videoPreview): ?>
        <video class="video-bg" width="320" height="240" muted loop autoplay>
            <source src="<?php echo $videoPreview; ?>" type="video/mp4">
        </video>
        <div class="iframe">
            <div class="close">
                Return
            </div>
        </div>
     <?php endif; ?>
     <div class="content">
         <?php if(!$videoPreview): ?>
             <a href="<?php echo get_the_permalink(); ?>" class="text">
                 <div class="title">
                     <?php echo get_the_title(); ?>
                 </div>
                 <div class="link">
                     see video
                 </div>
             </a>

         <?php else: ?>
            <div class="text">
                <div class="title">
                    <?php echo get_the_title(); ?>
                </div>
                <div class="link link-video" data-iframe="<?php echo $iframeID; ?>">
                    see video
                </div>
            </div>
         <?php endif; ?>
         <div class="category">
            <?php echo $terms->name;?>
         </div>
         <div class="date">
            <?php echo get_field('date_project');?>
         </div>
     </div>
 </div>
  <?php $i++; endwhile;
  wp_reset_query();
?>
<?php get_footer(); ?>
