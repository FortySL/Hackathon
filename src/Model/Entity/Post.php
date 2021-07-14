<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $product_id
 * @property string $rental_period
 * @property float $price
 * @property string $status
 * @property string $description
 * @property \Cake\I18n\FrozenTime $post_created
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Request[] $requests
 */
class Post extends Entity
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
        'customer_id' => true,
        'product_id' => true,
        'rental_period' => true,
        'price' => true,
        'status' => true,
        'description' => true,
        'post_created' => true,
        'customer' => true,
        'product' => true,
        'requests' => true,
    ];
}
