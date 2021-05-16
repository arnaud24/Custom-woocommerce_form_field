add_filter( 'woocommerce_form_field', 'my_woocommerce_form_field' );
function my_woocommerce_form_field( $field ) {
	$field = preg_replace('#<span[^>]+\>#', '', $field);
	$field = preg_replace('#<p class="form-row (.*?)"(.*?)>(.*?)</p>#', '<div class="form-row $1"$2>$3</div>', $field);
    return $field;
}
