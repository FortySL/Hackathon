<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($customer->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($customer->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Number') ?></th>
                    <td><?= h($customer->contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Credit') ?></th>
                    <td><?= $this->Number->format($customer->credit) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reviews') ?></h4>
                <?php if (!empty($customer->reviews)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Content') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->reviews as $reviews) : ?>
                        <tr>
                            <td><?= h($reviews->id) ?></td>
                            <td><?= h($reviews->customer_id) ?></td>
                            <td><?= h($reviews->content) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Posts') ?></h4>
                <?php if (!empty($customer->posts)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Rental Period') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Post Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->posts as $posts) : ?>
                        <tr>
                            <td><?= h($posts->id) ?></td>
                            <td><?= h($posts->customer_id) ?></td>
                            <td><?= h($posts->product_id) ?></td>
                            <td><?= h($posts->rental_period) ?></td>
                            <td><?= h($posts->price) ?></td>
                            <td><?= h($posts->status) ?></td>
                            <td><?= h($posts->description) ?></td>
                            <td><?= h($posts->post_created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Requests') ?></h4>
                <?php if (!empty($customer->requests)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Post Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->requests as $requests) : ?>
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
