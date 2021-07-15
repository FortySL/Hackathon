<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>

<h1 class="h3 mb-2 text-gray-800'>Edit Request"></h1>
<?= $this->Form->create($request) ?>
<?php
echo $this->Form->control('customer_id', ['options' => $customers]);
echo $this->Form->control('post_id', ['options' => $posts]);
echo $this->Form->control('message');
?>