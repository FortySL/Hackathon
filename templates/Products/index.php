<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
<div class="products index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-grey-800"><?= __('Products') ?></h1>
        <a href="<?= $this->Url->build( ['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> New Product</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= h($product->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</div>
