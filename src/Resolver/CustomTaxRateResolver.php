<?php

namespace Drupal\mymodule\Resolver;

use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\commerce_tax\TaxZone;
use Drupal\profile\Entity\ProfileInterface;
use Drupal\commerce_tax\Resolver\TaxRateResolverInterface;

/**
 * Returns the tax zone's default tax rate.
 */
class CustomTaxRateResolver implements TaxRateResolverInterface {

  /**
   * {@inheritdoc}
   */
  public function resolve(TaxZone $zone, OrderItemInterface $order_item, ProfileInterface $customer_profile) {
   // return NULL;
   /* $rates = $zone->getRates();
    $rate_id = 'newtax';
    foreach ($rates as $rate) { // echo $rate->getLabel(); 
        if ($rate->getLabel() == $rate_id) {
          return $rate;
        }
      }*/
  }
}
