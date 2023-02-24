<?php

namespace Drupal\mymodule\Resolver;

use Drupal\commerce\Context;
use Drupal\commerce\PurchasableEntityInterface;
use Drupal\commerce_price\Resolver\PriceResolverInterface;
use Drupal\user\Entity\User;

/**
 * Provides the default price, taking it directly from the purchasable entity.
 */
class CustomPriceResolver implements PriceResolverInterface {

  /**
   * {@inheritdoc}
   */
  public function resolve(PurchasableEntityInterface $entity, $quantity, Context $context) {
    /*$current_user_id = \Drupal::currentUser()->id();
    $account = User::load($current_user_id);

   // print_r($entity->bundle()());exit;
    if ($entity->bundle() == 'car') { //echo 'coming'; exit;
        return $entity->getPrice()->divide(100000);
    }
    return $entity->getPrice();
	*/
  }
}
