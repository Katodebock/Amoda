<?php

// =============================================================================
// NAV-MODAL-CSS.PHP
// -----------------------------------------------------------------------------
// Generated styling.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Include Partial CSS
// =============================================================================

// Include Partial CSS
// =============================================================================


echo cs_get_partial_style( 'anchor', array(
  'selector' => '.x-anchor-toggle',
  'key_prefix'    => 'toggle'
) );

echo cs_get_partial_style( 'modal' );
echo cs_get_partial_style( 'menu' );

echo cs_get_partial_style( 'anchor', array(
  'selector' => '.x-menu .x-anchor',
  'key_prefix'    => ''
) );
