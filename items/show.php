<?php echo head(array(
    'title' => metadata('item', array('Dublin Core', 'Title')),
    'bodyclass' => 'items show',
)); ?>
<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-12 columns paginationrow">

            <ul class="pagination" role="navigation" aria-label="Pagination">
              <div class="medium-2 columns paginationrow" >
                <li style="float: left;" class="pagination-previous"><?php echo link_to_previous_item_show(); ?></li>
              </div>
                <div class="medium-2 columns paginationrow">
                <li style="float:right;" id="pagination-next"><?php echo link_to_next_item_show(); ?></li>
              </div>
            </ul>
      </div>
      </div>

    <div class="row">
        <div class="large-12 columns">
            <div class="page-header"><h1><?php echo metadata($item,array('Dublin Core', 'Title')); ?></h1></div>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns">
            <!-- Item Description -->
            <div class="row">
                <div class="large-12 columns">
                    <h4><i class="fa fa-thumb-tack"></i> Description: </h4>
                    <?php if ($itemDescription = metadata($item,array('Dublin Core','Description'))): ?>
                        <p class="lead"><?php echo $itemDescription; ?></p>
                    <?php else: ?>

                        <p class="alert">No description recorded yet.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Item Collection Information (if available) -->
            <?php if (get_collection_for_item($item)): ?>
            <div class="row"><div class="large-12 columns">
                <div id="collection" class="element">
                    <h4 style="display:inline"><?php echo __('Collection'); ?>: </h4>
                    <h4 style="display:inline"><?php echo link_to_collection_for_item(); ?></h4>
                </div>
            </div></div>
            <?php endif; ?>

            <div class="row"><div class="large-12 columns"><hr /></div></div>

            <div class="row">
                <div class="large-4 columns">
                <!-- Item Date Information -->
                    <h4><i class="fa fa-calendar"></i> Date: </h4>
                    <?php if ($itemDate = metadata($item,array('Dublin Core','Date'))): // TODO: create a date format function...?>
                        <div><?php echo $itemDate; ?></div>
                    <?php else: ?>
                        <div>None recorded.</div>
                    <?php endif; ?>
                </div>
                <div class="large-4 columns">
                <!-- Item Creator Information -->
                    <h4><i class="fa fa-user"></i> Creator: </h4>
                    <div>
                    <?php if ($itemCreator = metadata($item,array('Dublin Core','Creator'))): ?>
                        <?php echo $itemCreator; ?>
                    <?php else: ?>
                        None recorded.
                    <?php endif; ?>
                    </div>
                </div>
                <!-- Subject -->
                <div class="large-4 columns">
                     <h4><i class="fa fa-book"></i><?php echo __(' Subject'); ?></h4>
                    <?php if ($itemCreator = metadata($item,array('Dublin Core','Subject'))): ?>
                        <?php echo $itemCreator; ?>
                    <?php else: ?>
                        None recorded.
                    <?php endif; ?>
                </div>
            </div>
            <div class="row"><hr />

                <!-- Identifier -->
                <!-- <div class="large-4 columns">
                    <h4><i class="fa fa-bookmark"></i><?php echo __(' Identifier'); ?></h4>
                    <?php //if ($itemCreator = metadata($item,array('Dublin Core','Identifier'))): ?>
                        <?php //echo $itemCreator; ?>
                    <?php// else: ?>
                        None recorded.
                    <?php //endif; ?>
                </div> -->
                <!-- Contributor -->
                <div class="large-6 columns">
                    <h4><i class="fa fa-university"></i><?php echo __(' Contributor'); ?></h4>
                    <?php if ($itemCreator = metadata($item,array('Dublin Core','Contributor'))): ?>
                        <?php echo $itemCreator; ?>
                    <?php else: ?>
                        None recorded.
                    <?php endif; ?>
                </div>
                <div class="large-6 columns">
                  <h4><i class="fa fa-picture-o"></i><?php echo __(' Format'); ?></h4>
                  <?php if ($format = metadata($item, array('Dublin Core', 'Format'))): ?>
                    <?php echo $format; ?>
                  <?php else: ?>
                    None recorded.
                  <?php endif; ?>
                </div>
            </div>
            <!-- If the item belongs to a collection, the following creates a link to that collection. -->
            <div class="row"><hr />
            <div class="large-12 columns">
            <!-- Item Recipient Information (if available) -->
              <h4><i class="fa fa-archive"></i> Source: </h4>
                <div>
                <?php if ($itemCreator = metadata($item,array('Dublin Core','Source'))): ?>
                    <?php echo $itemCreator; ?>
                <?php else: ?>
                    None recorded.
                <?php endif; ?>
                </div>
              </div>
            </div>

            <!-- The following prints a list of all tags associated with the item -->
            <div class="row"><hr />
                <div class="large-12 columns">

                    <h4><i class="fa fa-tags"></i> Tags</h4>
                    <div class="tags well well-small">
                        <?php if (tag_string($item) != null) {
                            echo tag_string($item); }
                            else {
                            echo 'No tags recorded for this item.';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row"><hr />
                <!-- Rights -->
                    <div class="large-12 columns">
                        <h4><i class="fa fa-copyright"></i><?php echo __(' Rights'); ?></h4>
                        <?php if ($itemCreator = metadata($item,array('Dublin Core','Rights'))): ?>
                            <?php echo $itemCreator; ?>
                        <?php else: ?>
                            None recorded.
                        <?php endif; ?>
                    </div>
            </div>


             <div class="row"><hr />
                <div class="large-12 columns">

                    <!-- The following prints a citation for this item. -->
                    <h4><i class="fa fa-retweet"></i> <?php echo __('Citation'); ?></h4>
                    <div class="element-text"><?php echo metadata($item,'citation',array('no_escape' => true)); ?></div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
                </div>
            </div>
        </div>
        <!-- The following returns all of the files associated with an item. -->
        <div id="itemfiles" class="large-6 columns">
            <!-- <h3><?php //echo __('Files'); ?></h3> -->
            <?php if ($text = metadata('item', array('Item Type Metadata', 'Text'))): ?>
                <p><?php echo $text; ?></p>
              </div>
            <?php else: ?>
            <div class="element-text" style="float:right;"><?php echo files_for_item(
                array('imageSize'=>'fullsize','linkToFile'=>true,'linkToMetadata'=>false),//options
                array('class'=>'file-image'),
                null);
        endif; ?></div>
        </div>
    </div>
    <div class="row">
      <div class="large-12 columns paginationrow-bottom">

            <ul class="pagination" role="navigation" aria-label="Pagination">
              <div class="medium-2 columns paginationrow" >
                <li style="float: left;" class="pagination-previous"><?php echo link_to_previous_item_show(); ?></li>
              </div>
                <div class="medium-2 columns paginationrow">
                <li style="float:right;" id="pagination-next"><?php echo link_to_next_item_show(); ?></li>
              </div>
            </ul>
      </div>
      </div>
</div>
</div>
<!-- end primary -->

<?php echo foot(); ?>
