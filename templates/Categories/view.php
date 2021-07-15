<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->name) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($category->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($category->products)) : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Description') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($category->products as $products) : ?>
                                <tr>
                                    <td><?= h($products->id) ?></td>
                                    <td><?= h($products->name) ?></td>
                                    <td><?= h($products->description) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link("<i class=\"far fa-eye\"></i>", ['controller' => 'Products', 'action' => 'view', $products->id], ['escape' => false,]) ?>
                                        <?= $this->Html->link("<i class=\"far fa-edit\"></i>", ['controller' => 'Products', 'action' => 'edit', $products->id], ['escape' => false,]) ?>
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