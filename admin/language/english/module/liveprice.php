<?php

// Heading
$_['module_name']         = 'Live Price';
$_['heading_title']       = 'LIVEOPENCART: '.$_['module_name'];
$_['text_edit']           = 'Edit '.$_['module_name'].' Module';

// Text
$_['text_module']         = 'Modules';
$_['text_success']        = 'Module "'.$_['heading_title'].'" successfully updated!';
$_['text_content_top']    = 'Content Top';
$_['text_content_bottom'] = 'Content Bottom';
$_['text_column_left']    = 'Column Left';
$_['text_column_right']   = 'Column Right';
$_['text_category_all']   = '-- all categories --';
$_['text_manufacturer_all'] = '-- all manufacturers --';
$_['liveprice_all_customers_groups']      = '-- all groups --';

$_['text_edit_position']  = 'Edit position';

// VALUES
$_['text_value_disabled']               = 'Disabled';
$_['text_value_starting_from_required'] = 'Enabled for products with required options';
$_['text_value_starting_from_all']      = 'Enabled for all products';
$_['text_value_show_from_min']          = 'For minimal prices';
$_['text_value_show_from_all']          = 'For all products';

// Entry
$_['entry_layout']        = 'Layout:';
$_['entry_position']      = 'Position:';
$_['entry_status']        = 'Status:';
$_['entry_sort_order']    = 'Sort Order:';
$_['entry_discount_quantity'] = 'Quantity for discounts:';
$_['text_discount_quantity_0'] = 'quantity per product';
$_['text_discount_quantity_1'] = 'quantity per product options combination';
$_['text_discount_quantity_2'] = 'quantity per product Related Options combination';
$_['entry_discount_quantity_spec'] = 'Quantity for discounts:';
$_['entry_multiplied_price'] = 'Show price multiplied by quantity:';
$_['entry_about'] = 'About';
$_['entry_settings'] = 'Settings';
$_['entry_discounts'] = 'Global Discounts';
$_['text_discounts_description'] = 'Global discounts apply only for products without their own discounts (when product has empty list of discounts). Category condition works only for products directly linked to selected category.';
$_['entry_specials'] = 'Global Specials';
$_['text_specials_description'] = 'Global specials apply only for products without their own specials (when product has empty list of specials). Category condition works only for products directly linked to selected category.';
$_['entry_customize_discounts']    = 'Quantity for discounts (customize)';
$_['entry_add_customize_discounts']    = 'Add customized product discount settings';
$_['entry_ropro_discounts_addition'] 			= 'Use price prefixes for discounts<br> of Related Options:';
$_['text_ropro_discounts_addition_help'] 	= 'Use price prefixes for discounts of Related Options like it basically works for the prices';
$_['entry_ropro_specials_addition'] 			= 'Use price prefixes for specials<br> of Related Options:';
$_['text_ropro_specials_addition_help'] 	= 'Use price prefixes for specials of Related Options like it basically works for the prices';

$_['entry_manufacturers_spec'] = 'Manufactures';
$_['entry_categories_spec'] = 'Categories';
$_['entry_products_spec'] = 'Products';

$_['entry_percent_discount_to_total'] = 'Apply percent discount to total price';
$_['entry_entry_percent_discount_to_total_help'] = 'Apply percent discount to total price (including option price modifiers)';

$_['entry_percent_special_to_total'] = 'Apply percent special to total price';
$_['entry_entry_percent_special_to_total_help'] = 'Apply percent special to total price (including option price modifiers)';

$_['entry_default_price']      = 'Show prices with default options';
$_['entry_default_price_help'] = 'Show products prices uncluding default options price modificators in products lists like category page, latest block, etc (Improved Options module is required )';

$_['entry_starting_from']      = 'Show prices starting "from ..."';
$_['entry_starting_from_help'] = 'Show minimal products prices uncluding options price modificators in products lists like category page, latest block, etc (including specials, but not quantity discounts)';

$_['entry_show_from']          = 'Show prefix "from" for prices';
$_['entry_show_from_help']     = 'Show prefix "from" for products prices in products lists like category page, latest block, etc (including specials, but not quantity discounts)';

$_['entry_discount_like_special']          = 'Display discounts is style of specials';
$_['entry_discount_like_special_help']     = 'Display applied discounts using style of specials on the product page in the customer section';

$_['entry_ignore_cart']      	= 'Ignore cart quantity';
$_['entry_ignore_cart_help'] 	= 'Ignore product quantity already added to cart, on discount calculation';

$_['entry_hide_tax']      		= 'Hide tax on price update';
$_['entry_hide_tax_help'] 		= 'Do not display product taxes on price update on the product page in the customer section';

$_['entry_calculate_once']      = 'Live Price: Calculate once';
$_['entry_calculate_once_help'] = 'Calculate this option price, weight, points at once. To be not multiplied by product quantity. ';

$_['entry_animation']      			= 'Price changing animation';
$_['entry_animation_help']      = 'Fading animation, works not for all themes';

$_['text_success'] = 'Settings are modified!';
$_['text_update_alert']     = '(new version available)';

$_['module_description']    = 'The module is designed to dynamic price update on a product page, depending on the quantity and options currenly chosen by the customer. <br>
To get the available discounts the module uses total quantity: quantity from product page and product quantity already added to the cart (feature can be disabled).<br>
Price calculation for some options can be changed to "calculate once" (to be not dependent on product quantity), by checkbox on option edit page.
<br><br>
<span class="help">Required <a href="http://github.com/vqmod/vqmod" target="_blank">vQmod</a> version 2.6.1 or later.</span>';


$_['text_conversation'] = 'We are open for conversation. If you need modify or integrate our modules, add new functionality or develop new modules, email as to <b>support@liveopencart.com</b>.';

$_['entry_we_recommend'] = 'We also recommend:';
$_['entry_show_we_recommend'] = 'show';

$_['module_copyright'] = '"'.$_['module_name'].'" is a commercial extension. Please do not resell or transfer it to other users. By purchasing this module, you get it for use on one site.<br> 
If you want to use the module on multiple sites, you should purchase a separate copy for each site. Thank you.';


// Error
$_['error_permission']    = 'Warning: You do not have permission to modify module "'.$_['heading_title'].'"!';
