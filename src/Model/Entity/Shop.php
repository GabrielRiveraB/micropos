<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shop Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $zipcode
 * @property int|null $company_id
 * @property \Cake\I18n\FrozenDate|null $created
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Closure[] $closures
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Shop extends Entity
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
        'name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'zipcode' => true,
        'company_id' => true,
        'created' => true,
        'company' => true,
        'closures' => true,
        'products' => true,
        'tickets' => true,
    ];
}
