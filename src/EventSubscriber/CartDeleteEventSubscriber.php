<?php

namespace Drupal\mymodule\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\commerce_cart\Event\CartOrderItemRemoveEvent;
use Drupal\commerce_cart\Event\CartEvents;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;

use Drupal\Core\Url;

class CartDeleteEventSubscriber implements EventSubscriberInterface {

  use StringTranslationTrait;

  /**
   * The messenger.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * Constructs a new CartEventSubscriber object.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation.
   */
  public function __construct(MessengerInterface $messenger, TranslationInterface $string_translation) {
    $this->messenger = $messenger;
    $this->stringTranslation = $string_translation;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events = [
      CartEvents::CART_ORDER_ITEM_REMOVE => ['onCartOrderItemRemove', -100],
    ];
    return $events;
  }


    /**
   * Creates a log when an order item has been removed from the cart.
   *
   * @param \Drupal\commerce_cart\Event\CartOrderItemRemoveEvent $event
   *   The cart event.
   */
  public function onCartOrderItemRemove(CartOrderItemRemoveEvent $event) {
    $this->messenger->addMessage($this->t('Removed item from your cart'));
  }

}
