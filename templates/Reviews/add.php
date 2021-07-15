<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="reviews form content">
            <?= $this->Form->create($review) ?>
            <fieldset>
                <legend><?= __('Add Review') ?></legend>
                <?php
                    echo $this->Form->control('customer_id');
                    echo $this->Form->control('content');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
