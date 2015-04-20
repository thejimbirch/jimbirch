<?php
    hide($content['comments']);
    hide($content['links']);
    print render($content);
?>
<?php print render($content['links']); ?>
<?php print render($content['comments']); ?>