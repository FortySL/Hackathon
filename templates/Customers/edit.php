<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<h1 class="h3 mb-2 text-gray-800'>Edit Customer"></h1>
<?= $this->Form->create($customer) ?>
<?php
echo $this->Form->control('username');
echo $this->Form->control('password');
echo $this->Form->control('contact_number');
echo $this->Form->control('email');
echo $this->Form->control('credit');
?>

<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>