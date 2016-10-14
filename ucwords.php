<<ul>
<?php
foreach ($task as $heading => $value) {
?>
<li>
    <strong><?= ucwords($heading); ?>
  </strong><?= $value; ?>
</li>
<?php
}
?>
</ul>
