<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $requests
 */
?>
<div class="requests index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-grey-800"><?= __('Requests') ?></h1>
        
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('post_id') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                <tr>
                    <td><?= $this->Number->format($request->id) ?></td>
                    <td><?= $request->has('customer') ? $this->Html->link($request->customer->id, ['controller' => 'Customers', 'action' => 'view', $request->customer->id]) : '' ?></td>
                    <td><?= $request->has('post') ? $this->Html->link($request->post->id, ['controller' => 'Posts', 'action' => 'view', $request->post->id]) : '' ?></td>
                    <td><?= h($request->message) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $request->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?>
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
