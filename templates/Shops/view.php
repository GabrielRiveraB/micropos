<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shop $shop
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shop'), ['action' => 'edit', $shop->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shop'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shops'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shop'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shops view content">
            <h3><?= h($shop->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($shop->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($shop->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($shop->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($shop->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zipcode') ?></th>
                    <td><?= h($shop->zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $shop->has('company') ? $this->Html->link($shop->company->name, ['controller' => 'Companies', 'action' => 'view', $shop->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shop->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($shop->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Closures') ?></h4>
                <?php if (!empty($shop->closures)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Shop Id') ?></th>
                            <th><?= __('Sales') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Cash') ?></th>
                            <th><?= __('Card') ?></th>
                            <th><?= __('Cdate') ?></th>
                            <th><?= __('Ctime') ?></th>
                            <th><?= __('First Ticket') ?></th>
                            <th><?= __('Last Ticket') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($shop->closures as $closures) : ?>
                        <tr>
                            <td><?= h($closures->id) ?></td>
                            <td><?= h($closures->folio) ?></td>
                            <td><?= h($closures->shop_id) ?></td>
                            <td><?= h($closures->sales) ?></td>
                            <td><?= h($closures->total) ?></td>
                            <td><?= h($closures->cash) ?></td>
                            <td><?= h($closures->card) ?></td>
                            <td><?= h($closures->cdate) ?></td>
                            <td><?= h($closures->ctime) ?></td>
                            <td><?= h($closures->first_ticket) ?></td>
                            <td><?= h($closures->last_ticket) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Closures', 'action' => 'view', $closures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Closures', 'action' => 'edit', $closures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Closures', 'action' => 'delete', $closures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $closures->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($shop->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Stock') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Barcode') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Shop Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($shop->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->price) ?></td>
                            <td><?= h($products->stock) ?></td>
                            <td><?= h($products->code) ?></td>
                            <td><?= h($products->barcode) ?></td>
                            <td><?= h($products->url) ?></td>
                            <td><?= h($products->photo) ?></td>
                            <td><?= h($products->photo_dir) ?></td>
                            <td><?= h($products->category_id) ?></td>
                            <td><?= h($products->shop_id) ?></td>
                            <td><?= h($products->status) ?></td>
                            <td><?= h($products->created) ?></td>
                            <td><?= h($products->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tickets') ?></h4>
                <?php if (!empty($shop->tickets)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Folio') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Shop Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($shop->tickets as $tickets) : ?>
                        <tr>
                            <td><?= h($tickets->id) ?></td>
                            <td><?= h($tickets->folio) ?></td>
                            <td><?= h($tickets->subtotal) ?></td>
                            <td><?= h($tickets->total) ?></td>
                            <td><?= h($tickets->status) ?></td>
                            <td><?= h($tickets->shop_id) ?></td>
                            <td><?= h($tickets->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
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
