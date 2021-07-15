<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="requests form content">
            <?= $this->Form->create($request) ?>
            <fieldset>
                <legend><?= __('Add Request') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('post_id', ['options' => $posts]);
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
