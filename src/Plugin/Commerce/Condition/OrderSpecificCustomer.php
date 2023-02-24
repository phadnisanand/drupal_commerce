<?php

namespace Drupal\mymodule\Plugin\Commerce\Condition;

use Drupal\commerce\Plugin\Commerce\Condition\ConditionBase;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a basic condition for orders.
 *
 * @CommerceCondition(
 *   id = "mymodule_order_specific_customer",
 *   label = @Translation("Specific customer"),
 *   entity_type = "commerce_order",
 *   category = @Translation("Order"),
 * )
 */
 
class OrderSpecificCustomer extends ConditionBase {

  /**
   * {@inheritdoc}
   */
  public function evaluate(EntityInterface $entity) {
    return TRUE;
  }

}