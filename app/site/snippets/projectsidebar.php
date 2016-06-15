<div class="row">
  <div class="hidden-xs col-sm-2 left-col">
    <div class="content-block">
      
      <?php
        if($page->template() == 'projectitem') {
          foreach($page->parent()->children()->visible() as $projectitem) {
            if($projectitem->isOpen()) {
              echo ('<div class="active '. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
            } else {
              echo ('<div class="'. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
            }
          }
        } elseif ($page->template() == 'project') {
          foreach($page->children()->visible() as $projectitem) {
            if($projectitem->isOpen()) {
              echo ('<div class="active '. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
            } else {
              echo ('<div class="'. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
            }
          }
        }
      ?>
        
    </div>
  </div>
</div>