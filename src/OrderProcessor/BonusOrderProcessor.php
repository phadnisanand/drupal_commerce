<?php

namespace Drupal\mymodule\OrderProcessor;

use Drupal\commerce_order\Adjustment;
use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_order\OrderProcessorInterface;

/**
 * Applies a 5% discount per high quanity item because it is Thursday.
 */
class BonusOrderProcessor implements OrderProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function process(OrderInterface $order) {
    $vat_adjustment = new Adjustment([
        'type' => 'tax',
        'label' => t('Custom Bonus'),
        'amount' => $order->getTotalPrice()->multiply('0.1'),
      ]);
      $order->addAdjustment($vat_adjustment);
  }

}