<?php
$pageTitle = __('Browse Items');
echo head(array(
    'title' => $pageTitle,
    'bodyid' => 'items',
    'bodyclass' => 'tags',
));
?>
 <div class="row">
      <div class="large-12 medium-12 columns ">
          <div class="page-header">
               <h1><?php echo $pageTitle; ?> <small><?php echo __('By Current Tags'); ?></small></h1>
          </div>
      </div>
  </div>
  <div class="nav nav-tabs" id="secondary-nav">
      <?php echo public_nav_items()->setUlClass('menu'); ?>
  </div>
  <div id="pagination-top" class="pagination pagination-centered">
      <?php echo pagination_links(); ?>
  </div>


    <div class="large-12 columns">
        <?php //echo public_nav_items()->setUlClass('nav nav-pills'); ?>
        <?php
            asort($tags);
            echo tag_cloud($tags, url('items/browse'));
        ?>
    </div>
</div><!-- end primary -->
<?php echo foot(); ?>
