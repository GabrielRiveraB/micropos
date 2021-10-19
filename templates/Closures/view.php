<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Closure $closure
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Closure'), ['action' => 'edit', $closure->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Closure'), ['action' => 'delete', $closure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closure->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Closures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Closure'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="closures view content">
            <h3><?= h($closure->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Shop') ?></th>
                    <td><?= $closure->has('shop') ? $this->Html->link($closure->shop->name, ['controller' => 'Shops', 'action' => 'view', $closure->shop->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($closure->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folio') ?></th>
                    <td><?= $this->Number->format($closure->folio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sales') ?></th>
                    <td><?= $this->Number->format($closure->sales) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($closure->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cash') ?></th>
                    <td><?= $this->Number->format($closure->cash) ?></td>
                </tr>
                <tr>
                    <th><?= __('Card') ?></th>
                    <td><?= $this->Number->format($closure->card) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Ticket') ?></th>
                    <td><?= $this->Number->format($closure->first_ticket) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Ticket') ?></th>
                    <td><?= $this->Number->format($closure->last_ticket) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cdate') ?></th>
                    <td><?= h($closure->cdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ctime') ?></th>
                    <td><?= h($closure->ctime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
