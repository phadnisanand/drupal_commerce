<?php

namespace Drupal\mymodule\Plugin\Commerce\CheckoutFlow;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutFlow\CheckoutFlowWithPanesBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @CommerceCheckoutFlow(
 *  id = "custom_checkout_flow",
 *  label = @Translation("Custom Anand flow"),
 * )
 */
class CustomCheckoutFlow extends CheckoutFlowWithPanesBase {

  /**
   * {@inheritdoc}
   */
  public function getSteps() {
	return [
	  'login' => [
		'label' => $this->t('Login'),
		'previous_label' => $this->t('Return to login'),
		'has_sidebar' => TRUE,
	  ],
	  'order_info' => [
		'label' => $this->t('Order Information'),
		'has_sidebar' => TRUE,
		'next_label' => $this->t('Continue to Next Step'),
	  ],
	   'custom_step' => [
		'label' => $this->t('Custom step'),
		'has_sidebar' => TRUE,
		'next_label' => $this->t('Continue to Payment'),
		'previous_label' => $this->t('Go back to the previous step'),
	  ],
	  'review' => [
		'label' => $this->t('Review'),
		'has_sidebar' => TRUE,
		'next_label' => $this->t('Complete Checkout'),
		'previous_label' => $this->t('Go back to the previous step'),
	  ],
	  
	] + parent::getSteps();
  }

}