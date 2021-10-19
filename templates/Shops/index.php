<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shop[]|\Cake\Collection\CollectionInterface $shops
 */
?>
<div class="shops index content">
    <?= $this->Html->link(__('New Shop'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Shops') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('zipcode') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shops as $shop): ?>
                <tr>
                    <td><?= $this->Number->format($shop->id) ?></td>
                    <td><?= h($shop->name) ?></td>
                    <td><?= h($shop->address) ?></td>
                    <td><?= h($shop->phone) ?></td>
                    <td><?= h($shop->email) ?></td>
                    <td><?= h($shop->zipcode) ?></td>
                    <td><?= $shop->has('company') ? $this->Html->link($shop->company->name, ['controller' => 'Companies', 'action' => 'view', $shop->company->id]) : '' ?></td>
                    <td><?= h($shop->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shop->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shop->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
