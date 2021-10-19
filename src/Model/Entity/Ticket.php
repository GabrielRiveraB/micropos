<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int|null $folio
 * @property float|null $subtotal
 * @property float|null $total
 * @property int|null $status
 * @property int|null $shop_id
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Shop $shop
 * @property \App\Model\Entity\Sale[] $sales
 */
class Ticket extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'folio' => true,
        'subtotal' => true,
        'total' => true,
        'status' => true,
        'shop_id' => true,
        'created' => true,
        'shop' => true,
        'sales' => true,
    ];
}
