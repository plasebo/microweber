<?php

/*

type: layout

name: Slider

description: Pictures slider

*/

  ?>


 <?php if(is_array($data )): ?>
 <?php $id = "slider-".uniqid(); ?>
 <div class="well mw-module-images">
    <div class="autoscale mw-rotator mw-rotator-template-slider" id="<?php print $id; ?>">
      <div class="autoscale mw-gallery-holder">
        <?php foreach($data  as $item): ?>
        <div class="autoscale mw-gallery-item mw-gallery-item-<?php print $item['id']; ?>">
            <img src="<?php print thumbnail($item['filename'], 700); ?>" alt="" />
            <?php if($item['title'] != ''){ ?><i class="mw-rotator-description"><i class="mw-rotator-description-content"><?php print $item['title']; ?></i></i><?php } ?>
        </div>
        <?php endforeach ; ?>
      </div>
    </div>
</div>
<script type="text/javascript">
    mw.require("<?php print $config['url_to_module']; ?>css/style.css", true);
    mw.require("<?php print $config['url_to_module']; ?>js/api.js", true);
</script>
<script type="text/javascript">
  Rotator = null;
  $(document).ready(function(){
    if($('#<?php print $id; ?>').find('.mw-gallery-item').length>1){
      Rotator = mw.rotator('#<?php print $id; ?>');
      if (!Rotator) return false;
      Rotator.options({
          paging:true,
          next:true,
          prev:true
      });
     // Rotator.autoRotate(5000);
    }
  });
</script>
<?php else : ?>
<?php endif; ?>