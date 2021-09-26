<?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
    <li><?php print $row; ?></li>
    <?php endforeach; ?>
<?php print $list_type_suffix; ?>