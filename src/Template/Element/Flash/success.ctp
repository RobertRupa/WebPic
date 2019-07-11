<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-dismissible alert-success" onclick="this.classList.add('hidden')"><?= $message ?></div>
