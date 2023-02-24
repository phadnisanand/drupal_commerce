<?php

namespace Drupal\mymodule\Plugin\Commerce\CheckoutPane;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutPane\CheckoutPaneBase;
use Drupal\commerce_checkout\Plugin\Commerce\CheckoutPane\CheckoutPaneInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Allows customers to add comments to the order.
 *
 * @CommerceCheckoutPane(
 *   id = "customer_comments",
 *   label = @Translation("Additional Information"),
 *   default_step = "order_information",
 *   wrapper_element = "fieldset",
 * )
 */
class OrderNotes extends CheckoutPaneBase implements CheckoutPaneInterface {
	
	/**
   * {@inheritdoc}
   */
  public function buildPaneForm(array $pane_form, FormStateInterface $form_state, array &$complete_form) {
    $pane_form['customer_comments'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Order notes'),
      '#default_value' => $this->order->get('field_customer_comments')->getString(),
      '#required' => FALSE,
    ];
	
	 $test ='Test data';
	
	 $pane_form['summary'] = [
        '#theme' => 'commerce_checkout_customer_comments',
		'#test_data' => $test
      ];
      return $pane_form;
  }
  
  /**
   * {@inheritdoc}
   */
  public function submitPaneForm(array &$pane_form, FormStateInterface $form_state, array &$complete_form) {
    $value = $form_state->getValue($pane_form['#parents']);
    $this->order->set('field_customer_comments', $value['customer_comments']);
  }
  /**
   * {@inheritdoc}
   */
  public function buildPaneSummary() {
    return ['#markup' => $this->order->get('field_customer_comments')->getString()];
  }
}