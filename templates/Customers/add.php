<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="customers form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Add Customer') ?></legend>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('credit');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
