<?php if(is_array($childs_list) and count($childs_list) > 0): ?>
   <ul class="subcat-section hidden">
    <?php 
    $lavel += 1;
    $_nbsp = '';
    for($i = 0; $i < $lavel; $i++) {
        $_nbsp .= '<div class="iteration">-</div>';
    }
    foreach($childs_list as $_key => $_item): ?>
        <li id="custom">
            <div class="item-sorttable left"><?= $_nbsp ?><a class="tabledrag" href="#"> <?= $lavel ?>  </a></div>
            <div class="item-sorttable left"><?= $_item['TimeCreated'] ?></div>
            <div class="item-sorttable left"><?= $_item['SectionAlias'] ?></div>
            <div class="item-sorttable left"><?= $_item['UserID'] ?></div>
            <div class="item-sorttable left"><?= $_item['SectionType'] ?></div>
            <div class="item-sorttable left"><?= $_item['SectionName'] ?></div>
            <div class="item-sorttable left"><?= $_item['SectionController'] ?></div>
            <div class="item-sorttable left"><?= $_item['SectionAction'] ?></div>
 
            <div class="item-sorttable ch Children left"><input type="checkbox" name="checkbox" value="1" class="styled" /></div>
            <div class="action right">
                <div class="controls center">
                    <a href="#" title="Edit task" class="tip"><span class="icon12 icomoon-icon-pencil"></span></a>
                    <a class="delete" href="#" title="Remove task" class="tip"><span class="icon12 icomoon-icon-remove"></span></a>
                </div>
            </div>
          </li>

          <?php
          // childs
          if(isset($_item['childs']) and !empty($_item['childs'])) :
              $this->renderView('childs', array('childs_list' => $_item['childs'], 'lavel' => $lavel));
          endif; ?>

    <?php endforeach; ?>
   </ul>      
  <?php endif; ?> 