<?php
/**
 * WooCommerce Payment token for PayPal.
 *
 * @package WooCommerce\PayPalCommerce\Vaulting
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\Vaulting;

use WC_Payment_Token;

/**
 * Class PaymentTokenPayPal
 */
class PaymentTokenPayPal extends WC_Payment_Token {
	/**
	 * Token Type String.
	 *
	 * @var string
	 */
	protected $type = 'PayPal';

	public function get_email() {
		return $this->get_meta( 'email' );
	}

	public function set_email( $email ) {
		$this->add_meta_data( 'email', $email, true );
	}
}
