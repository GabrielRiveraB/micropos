<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Closure $closure
 * @var \Cake\Collection\CollectionInterface|string[] $shops
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Closures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="closures form content">
            <?= $this->Form->create($closure) ?>
            <fieldset>
                <legend><?= __('Add Closure') ?></legend>
                <?php
                    echo $this->Form->control('folio');
                    echo $this->Form->control('shop_id', ['options' => $shops, 'empty' => true]);
                    echo $this->Form->control('sales');
                    echo $this->Form->control('total');
                    echo $this->Form->control('cash');
                    echo $this->Form->control('card');
                    echo $this->Form->control('cdate', ['empty' => true]);
                    echo $this->Form->control('ctime', ['empty' => true]);
                    echo $this->Form->control('first_ticket');
                    echo $this->Form->control('last_ticket');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
