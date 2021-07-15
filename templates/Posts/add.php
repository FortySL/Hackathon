<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('rental_period');
                    echo $this->Form->control('price');
                    echo $this->Form->control('status');
                    echo $this->Form->control('description');
                    echo $this->Form->control('post_created');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
