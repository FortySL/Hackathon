<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<div class="posts index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-grey-800"><?= __('Posts') ?></h1>
        <a href="<?= $this->Url->build( ['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> New Post</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('rental_period') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('post_created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $this->Number->format($post->id) ?></td>
                    <td><?= $post->has('customer') ? $this->Html->link($post->customer->id, ['controller' => 'Customers', 'action' => 'view', $post->customer->id]) : '' ?></td>
                    <td><?= $post->has('product') ? $this->Html->link($post->product->name, ['controller' => 'Products', 'action' => 'view', $post->product->id]) : '' ?></td>
                    <td><?= h($post->rental_period) ?></td>
                    <td><?= $this->Number->format($post->price) ?></td>
                    <td><?= h($post->status) ?></td>
                    <td><?= h($post->description) ?></td>
                    <td><?= h($post->post_created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
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
