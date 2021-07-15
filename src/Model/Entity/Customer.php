<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $contact_number
 * @property string $email
 * @property int $credit
 *
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\Post[] $posts
 * @property \App\Model\Entity\Request[] $requests
 */
class Customer extends Entity
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
        'username' => true,
        'password' => true,
        'contact_number' => true,
        'email' => true,
        'credit' => true,
        'reviews' => true,
        'posts' => true,
        'requests' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
