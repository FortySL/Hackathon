<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h3><?= h($post->id) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $post->has('customer') ? $this->Html->link($post->customer->id, ['controller' => 'Customers', 'action' => 'view', $post->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $post->has('product') ? $this->Html->link($post->product->name, ['controller' => 'Products', 'action' => 'view', $post->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rental Period') ?></th>
                    <td><?= h($post->rental_period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($post->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($post->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($post->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($post->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Created') ?></th>
                    <td><?= h($post->post_created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Requests') ?></h4>
                <?php if (!empty($post->requests)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Post Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($post->requests as $requests) : ?>
                        <tr>
                            <td><?= h($requests->id) ?></td>
                            <td><?= h($requests->customer_id) ?></td>
                            <td><?= h($requests->post_id) ?></td>
                            <td><?= h($requests->message) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Requests', 'action' => 'view', $requests->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Requests', 'action' => 'edit', $requests->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
