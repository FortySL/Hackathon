<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1 class="h3 mb-2 text-gray-800'>Edit Post"></h1>
<?= $this->Form->create($post) ?>
<?php
echo $this->Form->control('customer_id', ['options' => $customers]);
echo $this->Form->control('product_id', ['options' => $products]);
echo $this->Form->control('rental_period');
echo $this->Form->control('price');
echo $this->Form->control('status');
echo $this->Form->control('description');
?>

<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>