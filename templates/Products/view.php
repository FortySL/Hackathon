<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($product->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Posts') ?></h4>
                <?php if (!empty($product->posts)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Rental Period') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Post Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->posts as $posts) : ?>
                        <tr>
                            <td><?= h($posts->id) ?></td>
                            <td><?= h($posts->rental_period) ?></td>
                            <td><?= h($posts->price) ?></td>
                            <td><?= h($posts->status) ?></td>
                            <td><?= h($posts->description) ?></td>
                            <td><?= h($posts->post_created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
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
