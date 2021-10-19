<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $price
 * @property int|null $stock
 * @property string|null $code
 * @property string|null $barcode
 * @property string|null $url
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property int|null $category_id
 * @property int|null $shop_id
 * @property bool|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Shop $shop
 * @property \App\Model\Entity\Sale[] $sales
 */
class Product extends Entity
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
        'description' => true,
        'price' => true,
        'stock' => true,
        'code' => true,
        'barcode' => true,
        'url' => true,
        'photo' => true,
        'photo_dir' => true,
        'category_id' => true,
        'shop_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'shop' => true,
        'sales' => true,
    ];
}
