<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Closure[]|\Cake\Collection\CollectionInterface $closures
 */
?>
<div class="closures index content">
    <?= $this->Html->link(__('New Closure'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Closures') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('folio') ?></th>
                    <th><?= $this->Paginator->sort('shop_id') ?></th>
                    <th><?= $this->Paginator->sort('sales') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('cash') ?></th>
                    <th><?= $this->Paginator->sort('card') ?></th>
                    <th><?= $this->Paginator->sort('cdate') ?></th>
                    <th><?= $this->Paginator->sort('ctime') ?></th>
                    <th><?= $this->Paginator->sort('first_ticket') ?></th>
                    <th><?= $this->Paginator->sort('last_ticket') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($closures as $closure): ?>
                <tr>
                    <td><?= $this->Number->format($closure->id) ?></td>
                    <td><?= $this->Number->format($closure->folio) ?></td>
                    <td><?= $closure->has('shop') ? $this->Html->link($closure->shop->name, ['controller' => 'Shops', 'action' => 'view', $closure->shop->id]) : '' ?></td>
                    <td><?= $this->Number->format($closure->sales) ?></td>
                    <td><?= $this->Number->format($closure->total) ?></td>
                    <td><?= $this->Number->format($closure->cash) ?></td>
                    <td><?= $this->Number->format($closure->card) ?></td>
                    <td><?= h($closure->cdate) ?></td>
                    <td><?= h($closure->ctime) ?></td>
                    <td><?= $this->Number->format($closure->first_ticket) ?></td>
                    <td><?= $this->Number->format($closure->last_ticket) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $closure->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $closure->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $closure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closure->id)]) ?>
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
