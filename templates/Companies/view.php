<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companies view content">
            <h3><?= h($company->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($company->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($company->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($company->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facebook') ?></th>
                    <td><?= h($company->facebook) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webpage') ?></th>
                    <td><?= h($company->webpage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($company->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($company->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($company->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Shops') ?></h4>
                <?php if (!empty($company->shops)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Zipcode') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->shops as $shops) : ?>
                        <tr>
                            <td><?= h($shops->id) ?></td>
                            <td><?= h($shops->name) ?></td>
                            <td><?= h($shops->address) ?></td>
                            <td><?= h($shops->phone) ?></td>
                            <td><?= h($shops->email) ?></td>
                            <td><?= h($shops->zipcode) ?></td>
                            <td><?= h($shops->company_id) ?></td>
                            <td><?= h($shops->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Shops', 'action' => 'view', $shops->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Shops', 'action' => 'edit', $shops->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shops', 'action' => 'delete', $shops->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shops->id)]) ?>
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
