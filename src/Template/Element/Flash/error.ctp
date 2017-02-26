<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> <?= $message ?>
</div>
