<?php

namespace Drupal\mymodule\EventSubscriber;

use Drupal\commerce_cart\Event\CartEntityAddEvent;
use Drupal\Core\Url;
use Drupal\commerce_cart\EventSubscriber\CartEventSubscriber as BaseSubscriber;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CartEventSubscriber extends BaseSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritDoc}
   */
  public function displayAddToCartMessage(CartEntityAddEvent $event) {
    $this->messenger->addMessage($this->t('Item added to your cart.'));
  }
}