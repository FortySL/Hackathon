<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<h1 class="h3 mb-2 text-gray-800'>Edit Product Category"></h1>
<?= $this->Form->create($category) ?>
<?php
echo $this->Form->control('name');
echo $this->Form->control('description');
?>

<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

