<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Closure Entity
 *
 * @property int $id
 * @property int|null $folio
 * @property int|null $shop_id
 * @property int|null $sales
 * @property float|null $total
 * @property float|null $cash
 * @property float|null $card
 * @property \Cake\I18n\FrozenDate|null $cdate
 * @property \Cake\I18n\Time|null $ctime
 * @property int|null $first_ticket
 * @property int|null $last_ticket
 *
 * @property \App\Model\Entity\Shop $shop
 */
class Closure extends Entity
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
        'shop_id' => true,
        'sales' => true,
        'total' => true,
        'cash' => true,
        'card' => true,
        'cdate' => true,
        'ctime' => true,
        'first_ticket' => true,
        'last_ticket' => true,
        'shop' => true,
    ];
}
