add_filter( 'woocommerce_variable_price_html', 'show_first_variation_price_only', 10, 2 );
function show_first_variation_price_only( $price, $product ) {
    $variations = $product->get_available_variations();
    if ( ! empty( $variations ) ) {
        $variation = $variations[0];
        $price = '<span class="price">' .number_format( $variation['display_price'] , 2). get_woocommerce_currency_symbol().'</span>';
    }
    return $price;
}
