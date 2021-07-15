<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $reviews
 */
?>
<div class="reviews index content">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-grey-800"><?= __('Requests') ?></h1>
        
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reviews as $review): ?>
                <tr>
                    <td><?= $this->Number->format($review->id) ?></td>
                    <td><?= $this->Number->format($review->customer_id) ?></td>
                    <td><?= h($review->content) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $review->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->id]) ?>
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
