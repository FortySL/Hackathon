<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $post_id
 * @property string $message
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Post $post
 */
class Request extends Entity
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
        'post_id' => true,
        'message' => true,
        'customer' => true,
        'post' => true,
    ];
}
