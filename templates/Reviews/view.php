<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="reviews view content">
            <h3><?= h($review->id) ?></h3>
            <table class="table-responsive">
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($review->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($review->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($review->customer_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
