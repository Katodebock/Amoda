<?php

// =============================================================================
// VIEWS/BARS/ACCORDION.PHP
// -----------------------------------------------------------------------------
// Accordion element.
// =============================================================================

$mod_id = ( isset( $mod_id ) ) ? $mod_id : '';
$class  = ( isset( $class )  ) ? $class  : '';


// Atts: Accordion
// ---------------

$atts_accordion = array(
  'class' => x_attr_class( array( $mod_id, 'x-acc', $class ) ),
  'role'  => 'tablist',
);

if ( isset( $id ) && ! empty( $id ) ) {
  $atts_accordion['id'] = $id;
} else {
  $atts_accordion['id'] = 'x-acc-' . $mod_id;
}


// Output
// ------

?>

<div <?php echo x_atts( $atts_accordion, $custom_atts ); ?>>
  <?php do_action( 'x_render_children', $_modules, $_view_data ); ?>
</div>
