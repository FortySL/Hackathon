<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<h1 class="h3 mb-2 text-gray-800'>Edit Product"></h1>
<?= $this->Form->create($product) ?>
<?php
echo $this->Form->control('category_id', ['options' => $categories]);
echo $this->Form->control('name');
echo $this->Form->control('description');
?>