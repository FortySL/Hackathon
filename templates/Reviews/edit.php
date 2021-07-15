<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>


<h1 class="h3 mb-2 text-gray-800'>Edit Review"></h1>
<?= $this->Form->create($review) ?>
<?php
echo $this->Form->control('customer_id');
echo $this->Form->control('content');
?>