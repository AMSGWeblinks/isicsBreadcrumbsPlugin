<?php $last_key = count($items) - 1 ?>

<?php !isset($separator) and $separator = '&raquo;' ?>

<?php foreach ($items as $key => $item): ?>
  <?php if ($key < $last_key): ?>
    <?php echo link_to($item->getText(), $item->getUri(ESC_RAW)) ?> <?php echo $separator ?>
  <?php else: ?>
    <strong><?php echo $item->getText() ?></strong>
  <?php endif ?>
<?php endforeach ?>