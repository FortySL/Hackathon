<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="requests view content">
            <h3><?= h($request->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $request->has('customer') ? $this->Html->link($request->customer->id, ['controller' => 'Customers', 'action' => 'view', $request->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Post') ?></th>
                    <td><?= $request->has('post') ? $this->Html->link($request->post->id, ['controller' => 'Posts', 'action' => 'view', $request->post->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($request->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($request->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
