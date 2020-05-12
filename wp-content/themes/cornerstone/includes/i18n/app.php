<?php

// =============================================================================
// CORNERSTONE/INCLUDES/I18N/APP.PHP
// -----------------------------------------------------------------------------
// Localization strings.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Messaging
//   02. General Purpose
//   03. Status
//   04. Accessibility
//   05. Formatting
//   06. Breakpoints
//   07. Titles
//   08. Content
//   09. Inspector
//   10. Elements
//   11. Forms
//   12. Controls
//   13. Notifications
//   14. Assignments
//   15. Presets
//   16. Confirm
//   17. Options
//   18. Manage
//   19. Templates
//   20. Design Cloud
//   21. Fonts
//   22. Colors
//   23. Responsive Text
//   24. Font Weights
//   25. Custom Code
//   26. Choices
//   27. Sort
//   28. Actions
//   29. Errors
//   30. Preferences
//   31. Skeleton Mode
//   32. Dynamic Content
//   33. Global Blocks
//   34. Launchpad
//   35. Regions
//   36. History
// =============================================================================

return array(

  'powered-by-themeco'                            => __( 'Powered by Themeco', 'cornerstone' ),


  // Messaging
  // ---------

  'welcome-app'                                   => __( '<strong>Howdy!</strong> What would you like to launch?', 'cornerstone' ),
  'save'                                          => __( 'Save', 'cornerstone' ),
  'apply'                                         => __( 'Apply', 'cornerstone' ),
  'loading'                                       => __( 'Loading&hellip;', 'cornerstone' ),
  'unauthorized'                                  => __( 'You don&apos;t have permission to do that.', 'cornerstone' ),
  'exit-to-dashboard'                             => __( 'Exit to Dashboard', 'cornerstone' ),
  'unsaved-warning'                               => __( 'You have unsaved changes that will be lost if you continue. Are you sure you wish to leave?', 'cornerstone' ),
  'unauthorized'                                  => __( '<strong>Oops!</strong> Looks like you are trying to view something you are not allowed to access. Check your permissions in the plugin settings.', 'cornerstone' ),

  'translate'                                     => __( 'Translate', 'cornerstone' ),
  'translation.entity'                            => __( 'Translation', 'cornerstone' ),
  'translation.blank'                             => __( 'This content has not been translated into the active language.', 'cornerstone' ),
  'translation.start-blank'                       => __( 'Start Blank', 'cornerstone' ),
  'translation.or'                                => __( 'or', 'cornerstone' ),
  'translation.copy-existing'                     => __( 'Copy Existing', 'cornerstone' ),
  'translation.create-message'                    => __( 'This <strong>{{context}}</strong> does not have a <strong>{{lang}}</strong> translation. Start with a blank slate or choose an existing translation to begin with.', 'cornerstone' ),

  'streamline-nav-unsaved'                        => __( 'Would you like to edit this {{context}}? You have unsaved changes that will be lost if you continue.', 'cornerstone' ),
  'streamline-nav'                                => __( 'Would you like to edit this {{context}}? You can safely leave as there are no unsaved changes.', 'cornerstone' ),


  // General Purpose
  // ---------------

  'global'                                        => __( 'Global', 'cornerstone' ),
  'copy'                                          => __( 'Copy', 'cornerstone' ),
  'copy-thing'                                    => __( 'Copy {{context', 'cornerstone' ),
  'copy-of'                                       => __( 'Copy of {{title}}', 'cornerstone' ),
  'copy-of-numeric'                               => __( '{{title}} ({{index}})', 'cornerstone' ),
  'indexed'                                       => __( '{{label}} {{index}}', 'cornerstone'),
  'search'                                        => __( 'Search', 'cornerstone' ),
  'search-thing'                                  => __( 'Search {{context}}', 'cornerstone' ),
  'go-validate'                                   => __( 'Go Validate', 'cornerstone' ),
  'title'                                         => __( 'Title', 'cornerstone' ),
  'thing-title'                                   => __( '{{context}} Title', 'cornerstone' ),
  'back'                                          => __( 'Back', 'cornerstone' ),
  'back-to'                                       => __( 'Back to {{to}}', 'cornerstone' ),
  'item'                                          => __( 'Item', 'cornerstone'),
  'add-item'                                      => __( 'Add Item', 'cornerstone' ),
  'add'                                           => __( 'Add', 'cornerstone' ),
  'add-new'                                       => __( 'Add New', 'cornerstone' ),
  'add-thing'                                     => __( 'Add {{context}}', 'cornerstone' ),
  'edit'                                          => __( 'Edit', 'cornerstone' ),
  'edit-thing'                                    => __( 'Edit {{context}}', 'cornerstone' ),
  'unassigned'                                    => __( 'Unassigned', 'cornerstone' ),
  'select'                                        => __( 'Select', 'cornerstone' ),
  'select-thing'                                  => __( 'Select {{context}}', 'cornerstone' ),
  'choose'                                        => __( '– Choose –', 'cornerstone' ),
  'custom'                                        => __( 'Custom', 'cornerstone' ),
  'save'                                          => __( 'Save', 'cornerstone' ),
  'save-thing'                                    => __( 'Save {{context}}', 'cornerstone' ),
  'create'                                        => __( 'Create', 'cornerstone' ),
  'remove'                                        => __( 'Remove', 'cornerstone' ),
  'create-thing'                                  => __( 'Create {{context}}', 'cornerstone' ),
  'insert'                                        => __( 'Insert', 'cornerstone' ),
  'insert-thing'                                  => __( 'Insert {{context}}', 'cornerstone' ),
  'default'                                       => __( 'Default', 'cornerstone' ),
  'default-thing'                                 => __( 'Default {{context}}', 'cornerstone' ),
  'name'                                          => __( 'Name', 'cornerstone' ),
  'thing-name'                                    => __( '{{context}} Name', 'cornerstone' ),
  'name-thing'                                    => __( 'Name {{context}}', 'cornerstone' ),
  'no-things'                                     => __( 'No {{context}}', 'cornerstone' ),
  'no-things-found'                               => __( 'No {{context}} Found', 'cornerstone' ),
  'refine-search'                                 => __( 'Try refining your search to locate your desired {{context}}.', 'cornerstone' ),
  'settings-format'                               => __( '{{type}} Settings', 'cornerstone' ),
  'context-css'                                   => __( '{{context}} CSS', 'cornerstone' ),
  'context-js'                                    => __( '{{context}} JS', 'cornerstone' ),
  'post-type'                                     => __( 'Post Type', 'cornerstone' ),
  'created'                                       => __( '{{context}} Created', 'cornerstone' ),
  'added'                                         => __( '{{context}} Added', 'cornerstone' ),
  'moved'                                         => __( '{{context}} Moved', 'cornerstone' ),
  'duplicated'                                    => __( '{{context}} Duplicated', 'cornerstone' ),
  'deleted'                                       => __( '{{context}} Deleted', 'cornerstone' ),
  'updated'                                       => __( '{{context}} Updated', 'cornerstone' ),


  // Status
  // ------

  'status'                                        => __( 'Status', '__x__' ),
  'status.draft'                                  => __( 'Draft', 'cornerstone`' ),
  'status.publish'                                => __( 'Publish', 'cornerstone' ),
  'status.private'                                => __( 'Private', 'cornerstone' ),


  // Accessibility
  // -------------

  'a11y.resize'                                   => __( 'Resize', 'cornerstone' ),
  'a11y.close'                                    => __( 'Close', 'cornerstone' ),
  'a11y.expand'                                   => __( 'Expand', 'cornerstone' ),
  'a11y.collapse'                                 => __( 'Collapse', 'cornerstone' ),


  // Formatting
  // ----------

  'formatting-colon'                              => __( '{{prefix}}: {{content}}', 'cornerstone'),


  // Breakpoints
  // -----------

  'breakpoints.size.xl'                           => __( 'Extra Large', 'cornerstone' ),
  'breakpoints.size.lg'                           => __( 'Large', 'cornerstone' ),
  'breakpoints.size.md'                           => __( 'Medium', 'cornerstone' ),
  'breakpoints.size.sm'                           => __( 'Small', 'cornerstone' ),
  'breakpoints.size.xs'                           => __( 'Extra Small', 'cornerstone' ),
  'breakpoints.size-abbr.xl'                      => __( 'XL', 'cornerstone' ),
  'breakpoints.size-abbr.lg'                      => __( 'LG', 'cornerstone' ),
  'breakpoints.size-abbr.md'                      => __( 'MD', 'cornerstone' ),
  'breakpoints.size-abbr.sm'                      => __( 'SM', 'cornerstone' ),
  'breakpoints.size-abbr.xs'                      => __( 'XS', 'cornerstone' ),
  'breakpoints.desc.xl'                           => __( '1200px &amp; Up', 'cornerstone' ),
  'breakpoints.desc.lg'                           => __( '980px-1199px', 'cornerstone' ),
  'breakpoints.desc.md'                           => __( '768px-979px', 'cornerstone' ),
  'breakpoints.desc.sm'                           => __( '481px-767px', 'cornerstone' ),
  'breakpoints.desc.xs'                           => __( '480px &amp; Smaller', 'cornerstone' ),


  // Titles
  // ------

  'home.title'                                    => __( 'Home', 'cornerstone' ),
  'options.title'                                 => __( 'Options', 'cornerstone' ),
  'managers.title'                                => __( 'Managers', 'cornerstone' ),
  'layout.title'                                  => __( 'Layout', 'cornerstone' ),
  'inspector.title'                               => __( 'Inspector', 'cornerstone' ),
  'settings.title'                                => __( 'Settings', 'cornerstone' ),
  'elements.title'                                => __( 'Elements', 'cornerstone' ),
  'cheatsheet.title'                              => __( 'Cheatsheet', 'cornerstone' ),


  // Content
  // -------

  'content.sections'                              => __( 'Sections', 'cornerstone' ),
  'content.rows'                                  => __( 'Rows', 'cornerstone' ),
  'content.columns'                               => __( 'Columns', 'cornerstone' ),
  'content.first-row'                             => __( 'Add your first Row to this Section.', 'cornerstone' ),
  'content.notify-before-save-template'           => __( 'Add some Sections before saving a Template', 'cornerstone' ),
  'content.remove-spacing'                        => __( 'Remove Spacing', 'cornerstone' ),
  'content.remove-spacing-confirm'                => __( 'Would you like to remove all margin and padding from this section, its rows and its columns?', 'cornerstone' ),


  // Elements
  // --------

  'elements.entity'                               => __( 'Element', 'cornerstone' ),
  'elements.entities'                             => __( 'Elements', 'cornerstone' ),
  'elements.classic-title'                        => __( 'Classic Elements', 'cornerstone' ),
  'elements.classic-description'                  => __( 'Does not include advanced controls.', 'cornerstone' ),

  'elements-confirm-delete'                       => __( 'Are you sure you want to delete this {{title}}?', 'cornerstone' ),
  'elements-confirm-erase'                        => __( 'Are you sure you want to delete this element&apos;s contents?', 'cornerstone' ),
  'elements-preview-template-error'               => __( 'This element could not render due to invalid markup. You may have unclosed HTML tags in your content.', 'cornerstone' ),
  'elements-undefined-preview'                    => __( 'This element could not render because its definition is missing. You might need to activate a plugin.', 'cornerstone' ),
  'elements-preview-unavailable'                  => __( 'No Preview Available (<a target="_blank" href="{{url}}">View Live</a>)', 'cornerstone' ),


  // Inspector
  // ---------

  'inspector.na-title'                            => __( 'Nothing Selected', 'cornerstone' ),
  'inspector.na-message'                          => __( 'Click an element in the site preview, or use the magnifying glass icon on elements in the <strong>Layout</strong> pane.', 'cornerstone' ),
  'inspector.search'                              => __( 'Search Inspector...', 'cornerstone' ),
  'inspector.apply-preset-warning'                => __( 'This action will replace all element styling. Proceed?', 'cornerstone' ),

  'inspector.undefined-title'                     => __( 'Undefined Element', 'cornerstone' ),
  'inspector.undefined-message'                   => __( 'The definition for this element could not be located. You may need to activate a plugin. The type declared for this element is: <strong>{{type}}</strong>', 'cornerstone' ),

  'inspector.classic-element-title'               => __( 'Classic Element', 'cornerstone' ),
  'inspector.classic-element-message'             => __( 'This is a classic element. These are supported, but have less controls to configure.', 'cornerstone' ),

  'inspector.group.content'                       => __( 'Content', 'cornerstone' ),
  'inspector.group.design'                        => __( 'Design', 'cornerstone' ),
  'inspector.group.customize'                     => __( 'Customize', 'cornerstone' ),


  // Forms
  // -----

  'forms.icon-picker.blank'                       => __( 'No icons found.', 'cornerstone' ),
  'forms.icon-picker.search-context'              => __( 'Icons', 'cornerstone' ),
  'forms.label-input.placeholder'                 => __( 'Double click to edit.', 'cornerstone'),

  'forms.toggle.on'                               => __( 'On', 'cornerstone'),
  'forms.toggle.off'                              => __( 'Off', 'cornerstone'),

  'forms.flex.standard'                           => __( 'Standard', 'cornerstone' ),
  'forms.flex.no-shrink'                          => __( 'No Shrink', 'cornerstone' ),
  'forms.flex.fill-space'                         => __( 'Fill Space', 'cornerstone' ),
  'forms.flex.fill-space-equally'                 => __( 'Fill Space Equally', 'cornerstone' ),
  'forms.flex.flex-grow'                          => __( 'Flex<br>Grow', 'cornerstone' ),
  'forms.flex.flex-shrink'                        => __( 'Flex<br>Shrink', 'cornerstone' ),
  'forms.flex.flex-basis'                         => __( 'Flex<br>Basis', 'cornerstone' ),
  'forms.flex.start'                              => __( 'Start', 'cornerstone' ),
  'forms.flex.flex-start'                         => __( 'Start', 'cornerstone' ),
  'forms.flex.center'                             => __( 'Center', 'cornerstone' ),
  'forms.flex.end'                                => __( 'End', 'cornerstone' ),
  'forms.flex.flex-end'                           => __( 'End', 'cornerstone' ),
  'forms.flex.space-around'                       => __( 'S-Around', 'cornerstone' ),
  'forms.flex.space-between'                      => __( 'S-Between', 'cornerstone' ),
  'forms.flex.space-evenly'                       => __( 'S-Evenly', 'cornerstone' ),
  'forms.flex.baseline'                           => __( 'Baseline', 'cornerstone' ),
  'forms.flex.stretch'                            => __( 'Stretch', 'cornerstone' ),
  'forms.flex.auto'                               => __( 'Auto', 'cornerstone' ),
  'forms.flex.baseline'                           => __( 'Baseline', 'cornerstone' ),

  'border.none'                                   => __( 'None', 'cornerstone' ),
  'border.solid'                                  => __( 'Solid', 'cornerstone' ),
  'border.dotted'                                 => __( 'Dotted', 'cornerstone' ),
  'border.dashed'                                 => __( 'Dashed', 'cornerstone' ),
  'border.double'                                 => __( 'Double', 'cornerstone' ),
  'border.groove'                                 => __( 'Groove', 'cornerstone' ),
  'border.ridge'                                  => __( 'Ridge', 'cornerstone' ),
  'border.inset'                                  => __( 'Inset', 'cornerstone' ),
  'border.outset'                                 => __( 'Outset', 'cornerstone' ),


  // Controls
  // --------

  'controls.setup'                                => __( 'Setup', 'cornerstone' ),
  'controls.id'                                   => __( 'ID', 'cornerstone' ),
  'controls.class'                                => __( 'Class', 'cornerstone' ),
  'controls.style'                                => __( 'Style', 'cornerstone' ),
  'controls.inline-css'                           => __( 'Inline CSS', 'cornerstone' ),
  'controls.edit-css'                             => __( 'Edit CSS', 'cornerstone' ),
  'controls.element-css'                          => __( 'Element CSS', 'cornerstone' ),
  'controls.element-css-placeholder'              => __( '/*\n\nUse "$el" in this editor to\ntarget this element (it will\nbecome the generated class).\n\ne.g.\n\n$el    { property: value; }\n↓\n.el123 { property: value; }\n\n*/', 'cornerstone' ),
  'controls.toggle-hash'                          => __( 'Toggle Hash', 'cornerstone' ),
  'controls.hide-bp'                              => __( 'Hide During<br>Breakpoints', 'cornerstone' ),
  'controls.base'                                 => __( 'Base', 'cornerstone' ),
  'controls.hover'                                => __( 'Hover', 'cornerstone' ),

  'controls.font-family.select'                   => __( '{{family}} ({{source}})', 'cornerstone' ),
  'controls.text-editor.click-to-edit'            => __( 'Click to Edit', 'cornerstone' ),
  'controls.text-editor.edit-text'                => __( 'Edit Text', 'cornerstone' ),
  'controls.text-editor.mode-html'                => __( 'HTML', 'cornerstone' ),
  'controls.text-editor.mode-rich-text'           => __( 'Rich Text', 'cornerstone' ),
  'controls.classic.title'                        => __('Title', 'cornerstone'),

  'controls.unlinked'                             => __( 'Unlinked', 'cornerstone' ),
  'controls.linked'                               => __( 'Linked', 'cornerstone' ),
  'controls.link-sides'                           => __( 'Link Sides', 'cornerstone' ),
  'controls.side'                                 => __( 'Side', 'cornerstone' ),
  'controls.style'                                => __( 'Style', 'cornerstone' ),
  'controls.width'                                => __( 'Width', 'cornerstone' ),
  'controls.color'                                => __( 'Color', 'cornerstone' ),
  'controls.blur'                                 => __( 'Blur', 'cornerstone' ),
  'controls.x-offset'                             => __( 'X Offset', 'cornerstone' ),
  'controls.y-offset'                             => __( 'Y Offset', 'cornerstone' ),
  'controls.spread-position'                      => __( 'Spread &amp;<br>Position', 'cornerstone' ),

  'controls.box.top'                              => __( 'Top', 'cornerstone' ),
  'controls.box.right'                            => __( 'Right', 'cornerstone' ),
  'controls.box.bottom'                           => __( 'Bottom', 'cornerstone' ),
  'controls.box.bttm'                             => _x( 'Bttm', 'Short version of bottom for dimension control', 'cornerstone' ),
  'controls.box.left'                             => __( 'Left', 'cornerstone' ),

  'controls.box.top-left'                         => __( 'Top<br>Left', 'cornerstone' ),
  'controls.box.top-right'                        => __( 'Top<br>Right', 'cornerstone' ),
  'controls.box.bttm-right'                       => __( 'Bttm<br>Right', 'cornerstone' ),
  'controls.box.bttm-left'                        => __( 'Bttm<br>Left', 'cornerstone' ),

  'controls.font-style'                           => __( 'Font Style', 'cornerstone' ),
  'controls.font-style.normal'                    => __( 'Normal', 'cornerstone' ),
  'controls.font-style.italic'                    => __( 'Italic', 'cornerstone' ),

  'controls.info.type'                            => __( 'Type', 'cornerstone' ),
  'controls.info.normal'                          => __( 'Normal', 'cornerstone' ),
  'controls.info.popover'                         => __( 'Popover', 'cornerstone' ),
  'controls.info.placement'                       => __( 'Placement', 'cornerstone' ),
  'controls.info.trigger'                         => __( 'Trigger', 'cornerstone' ),
  'controls.info.hover'                           => __( 'Hover', 'cornerstone' ),
  'controls.info.focus'                           => __( 'Focus', 'cornerstone' ),
  'controls.info.click'                           => __( 'Click', 'cornerstone' ),
  'controls.info.title'                           => __( 'Title', 'cornerstone' ),
  'controls.info.content'                         => __( 'Content', 'cornerstone' ),

  'controls.media.audio-url'                      => __( 'Audio URL', 'cornerstone' ),
  'controls.media.preload-content'                => __( 'Preload<br>Content', 'cornerstone' ),
  'controls.media.none'                           => __( 'None', 'cornerstone' ),
  'controls.media.auto'                           => __( 'Auto', 'cornerstone' ),
  'controls.media.metadata'                       => __( 'Metadata', 'cornerstone' ),
  'controls.media.advanced'                       => __( 'Advanced', 'cornerstone' ),
  'controls.media.loop'                           => __( 'Loop', 'cornerstone' ),
  'controls.media.autoplay'                       => __( 'Autoplay', 'cornerstone' ),
  'controls.media.display-function'               => __( 'Display &<br>Function', 'cornerstone' ),

  'controls.sidebar.select'                       => __( 'Select Widget Area', 'cornerstone' ),

  'controls.text-align.label'                     => __( 'Text Align', 'cornerstone' ),
  'controls.text-align.left'                      => __( 'Left', 'cornerstone' ),
  'controls.text-align.center'                    => __( 'Center', 'cornerstone' ),
  'controls.text-align.right'                     => __( 'Right', 'cornerstone' ),
  'controls.text-align.justify'                   => __( 'Justify', 'cornerstone' ),
  'controls.text.html-tag'                        => __( 'HTML Tag', 'cornerstone' ),
  'controls.text.looks-like'                      => __( 'Looks Like', 'cornerstone' ),
  'controls.text.label'                           => __( 'Text', 'cornerstone' ),
  'controls.text.color'                           => __( 'Text<br>Color', 'cornerstone' ),

  'controls.text-decoration.label'                => __( 'Text Decoration', 'cornerstone' ),
  'controls.text-decoration.underline'            => __( 'Underline', 'cornerstone' ),
  'controls.text-decoration.line-through'         => __( 'Line Through', 'cornerstone' ),

  'controls.text-format.font-family'              => __( 'Font Family', 'cornerstone' ),
  'controls.text-format.font-weight'              => __( 'Font Weight', 'cornerstone' ),
  'controls.text-format.font-size'                => __( 'Font Size', 'cornerstone' ),
  'controls.text-format.letter-spacing'           => __( 'Letter Spacing', 'cornerstone' ),
  'controls.text-format.line-height'              => __( 'Line Height', 'cornerstone' ),

  'controls.text-transform.label'                 => __( 'Text Transform', 'cornerstone' ),
  'controls.text-transform.uppercase'             => __( 'Uppercase', 'cornerstone' ),
  'controls.text-transform.capitalize'            => __( 'Capitalize', 'cornerstone' ),
  'controls.text-transform.lowercase'             => __( 'Lowercase', 'cornerstone' ),

  'controls.image.retina'                         => __( 'Retina & Dimensions', 'cornerstone' ),
  'controls.image.dim-preview'                    => __( 'Dimensions Preview', 'cornerstone' ),
  'controls.image.alt-text'                       => __( 'Describe Your Image', 'cornerstone' ),
  'controls.image.source'                         => __( 'Source', 'cornerstone' ),
  'controls.image.alt-text'                       => __( 'Alt Text', 'cornerstone' ),
  'controls.image.link'                           => __( 'Link', 'cornerstone' ),
  'controls.image.info'                           => __( 'Info', 'cornerstone' ),
  'controls.image.w'                              => __( 'W', 'cornerstone' ),
  'controls.image.h'                              => __( 'H', 'cornerstone' ),

  'controls.flex.children'                        => __( 'Child Placement', 'cornerstone' ),
  'controls.flex.row'                             => __( 'Row', 'cornerstone' ),
  'controls.flex.column'                          => __( 'Column', 'cornerstone' ),
  'controls.flex.self'                            => __( 'Self Flex', 'cornerstone' ),
  'controls.flex.reverse'                         => __( 'Reverse', 'cornerstone' ),
  'controls.flex.wrap'                            => __( 'Wrap', 'cornerstone' ),
  'controls.flex.align-h'                         => __( 'Align Horizontal', 'cornerstone' ),
  'controls.flex.align-v'                         => __( 'Align Vertical', 'cornerstone' ),

  'controls.link.preview'                         => __( 'Preview', 'cornerstone' ),
  'controls.link.type'                            => __( 'Type', 'cornerstone' ),
  'controls.link.content'                         => __( 'Content', 'cornerstone' ),
  'controls.link.url'                             => __( 'URL', 'cornerstone' ),
  'controls.link.url-placeholder'                 => __( 'e.g. http://theme.co/', 'cornerstone' ),
  'controls.link.new-tab'                         => __( 'New Tab', 'cornerstone' ),
  'controls.link.email'                           => __( 'Email', 'cornerstone' ),
  'controls.link.email-placeholder'               => __( 'e.g. hello@example.com', 'cornerstone' ),
  'controls.link.email-subject'                   => __( 'Subject', 'cornerstone' ),
  'controls.link.email-subject-placeholder'       => __( 'e.g. Howdy!', 'cornerstone' ),
  'controls.link.phone'                           => __( 'Phone', 'cornerstone' ),
  'controls.link.phone-placeholder'               => __( 'e.g. 18885551234', 'cornerstone' ),

  'controls.share'                                => __( 'Share', 'cornerstone' ),
  'controls.share.title'                          => __( 'Title', 'cornerstone' ),
  'controls.share.link'                           => __( 'Link', 'cornerstone' ),
  'controls.share.type'                           => __( 'Type', 'cornerstone' ),


  // Notifications
  // -------------

  'notification-notice'                           => __( 'Hey!', 'cornerstone' ),
  'notification-success'                          => __( 'Awesome!', 'cornerstone' ),
  'notification-error'                            => __( 'Uh oh!', 'cornerstone' ),

  'notification-refreshing-preview'               => __( 'Refreshing preview.', 'cornerstone' ),
  'notification-refreshing-preview-save-reminder' => __( 'Refreshing preview. Don\'t forget to save.', 'cornerstone' ),

  'notify.saved'                                  => __( 'Saved {{context}}!', 'cornerstone' ),
  'notify.failed-to-save'                         => __( 'Failed to save {{context}}.', 'cornerstone' ),
  'notify.delete-confirm'                         => __( 'Are you sure you want to delete this {{context}}?', 'cornerstone' ),
  'notify.delete-confirm-perm'                    => __( 'Are you sure you want to delete this {{context}}? This can not be undone.', 'cornerstone' ),
  'notify.duplicated'                             => __( 'Duplicated {{context}}.', 'cornerstone' ),
  'notify.failed-to-duplicate'                    => __( 'Failed to duplicate {{context}}.', 'cornerstone' ),
  'notify.deleted'                                => __( 'Deleted {{context}}.', 'cornerstone' ),
  'notify.failed-to-delete'                       => __( 'Failed to delete {{context}}.', 'cornerstone' ),
  'notify.title-updated'                          => __( '{{context}} title updated.', 'cornerstone' ),
  'notify.failed-to-update-title'                 => __( 'Failed to update {{context}} title.', 'cornerstone' ),
  'notify.created'                                => __( '{{context}} created!', 'cornerstone' ),
  'notify.failed-to-create'                       => __( 'Failed to create {{context}}.', 'cornerstone' ),
  'notify.updated'                                => __( 'Updated {{context}}!', 'cornerstone' ),
  'notify.failed-to-update'                       => __( 'Failed to update {{context}}.', 'cornerstone' ),
  'notify.loading'                                => __( 'Loading {{context}}.', 'cornerstone' ),
  'notify.inserted'                               => __( '{{context}} inserted!', 'cornerstone' ),
  'notify.failed-to-insert'                       => __( 'Failed to insert {{context}}.', 'cornerstone' ),
  'notify.installing'                             => __( 'Installing {{context}}.', 'cornerstone' ),
  'notify.installed'                              => __( '{{context}} installed!', 'cornerstone' ),
  'notify.failed-to-install'                      => __( 'Failed to install {{context}}.', 'cornerstone' ),
  'notify.title-required'                         => __( 'Your {{context}} needs a title.', 'cornerstone' ),
  'notify.name-required'                          => __( 'Your {{context}} needs a name.', 'cornerstone' ),
  'notify.name-overwrite-confirm'                 => __( 'An existing {{context}} already has that name. Would you like to overwrite it?', 'cornerstone' ),
  'notify.preview-updating'                       => __( 'Preview Updating.', 'cornerstone' ),
  'notify.elements-max-children'                  => __( 'This element already has the maximum number of children.', 'cornerstone' ),
  'notify.elements-min-children'                  => __( 'This element requires a minimum number of children.', 'cornerstone' ),
  'notify.tinymce-failed'                         => __( 'Rich Text Editing is disabled because we found a problem with your Wordpress Visual Editor. You can still edit the text in HTML mode.', 'cornerstone' ),


  // Assignments
  // -----------

  'assign.entities'                               => __( 'Assignments', 'cornerstone' ),
  'assign.global'                                 => __( 'Global', 'cornerstone' ),
  'assign.unassigned'                             => __( 'Unassigned', 'cornerstone' ),
  'assign.tagged'                                 => __( '{{tag}}: {{title}}', 'cornerstone' ),
  'assign.multiple'                               => __( 'Multiple Assignments', 'cornerstone' ),
  'assign.make-global'                            => __( 'Make Global', 'cornerstone' ),
  'assign.manage'                                 => __( 'Manage assignments.', 'cornerstone' ),
  'assign.global-message'                         => __( 'This {{context}} is currently assigned as your global (default) {{context}}.', 'cornerstone' ),
  'assign.collision'                              => __( 'This context is already assigned to another {{context}}. Would you like to move that assignment here instead?', 'cornerstone' ),
  'assign.collision-global'                       => __( 'You already have a global {{context}} assigned. Would you like to use this {{context}} instead?', 'cornerstone' ),
  'assign.collision-global-yep'                   => __( 'Yes, make this my global {{context}}', 'cornerstone' ),
  'assign.collision-global-nope'                  => __( 'No, keep my current {{context}}', 'cornerstone' ),

  'create-index.start-blank'                      => __( 'Start Blank', 'cornerstone' ),
  'create-index.use-template'                     => __( 'Use Template', 'cornerstone' ),
  'create-index.manage-blank'                     => __( 'Start blank or use template to get started.', 'cornerstone'),


  // Presets
  // -------

  'presets.placeholder'                           => __( 'Nothing Selected', 'cornerstone' ),
  'presets.na'                                    => __( 'No Presets', 'cornerstone' ),
  'presets.save'                                  => __( 'Save Preset', 'cornerstone' ),
  'presets.apply'                                 => __( 'Apply Preset', 'cornerstone' ),
  'presets.replace-content'                       => __( 'Replace Content', 'cornerstone' ),
  'presets.apply-confirm'                         => __( 'Yes, Apply', 'cornerstone' ),
  'presets.apply-decline'                         => __( 'No thanks', 'cornerstone' ),


  // Confirm
  // -------

  'confirm-yep'                                   => __( 'Yes, Proceed', 'cornerstone' ),
  'confirm-no-thanks'                             => __( 'No Thanks', 'cornerstone' ),
  'confirm-nope'                                  => __( 'No, Go Back', 'cornerstone' ),


  // Options
  // -------

  'options.entities'                              => __( 'Options', 'cornerstone' ),
  'options.info'                                  => __( 'Info:', 'cornerstone' ),
  'options.launch-headers'                        => __( 'Launch Header Builder', 'cornerstone' ),
  'options.launch-footers'                        => __( 'Launch Footer Builder', 'cornerstone' ),
  'options.confirm-header-switch-back'            => __( 'Are you sure you wish to switch back to Original Headers? This will unassign remove your global Pro Header.', 'cornerstone' ),
  'options.confirm-footer-switch-back'            => __( 'Are you sure you wish to switch back to Original Footers? This will unassign remove your global Pro Footer.', 'cornerstone' ),


  // Manage
  // ------

  'manage.welcome'                                => __( 'Manage all of your templates, fonts, and colors from one central location!', 'cornerstone' ),


  // Templates
  // ---------

  'templates.manager'                             => __( 'Template Manager', 'cornerstone' ),
  'templates.entity'                              => __( 'Template', 'cornerstone'),
  'templates.entities'                            => __( 'Templates', 'cornerstone'),
  'templates.preset.entity'                       => __( 'Preset', 'cornerstone'),
  'templates.preset.entities'                     => __( 'Presets', 'cornerstone'),
  'templates.save-as'                             => __( 'Save as Template', 'cornerstone'),
  'templates.load'                                => __( 'Load Template', 'cornerstone' ),
  'templates.save'                                => __( 'Save Template', 'cornerstone' ),
  'templates.no-templates'                        => __( 'No Templates', 'cornerstone'),
  'templates.no-thing-templates'                  => __( 'No {{context}} Templates', 'cornerstone'),
  'templates.visit-manager'                       => __( 'Visit Template Manager', 'cornerstone'),
  'templates.blank-welcome'                       => __( 'Begin with a blank slate.', 'cornerstone'),

  'templates.download-label.one'                  => __( 'Download Template', 'cornerstone'),
  'templates.download-label.other'                => __( 'Download {{count}} Templates', 'cornerstone'),
  'templates.delete-label.one'                    => __( 'Delete Template', 'cornerstone'),
  'templates.delete-label.other'                  => __( 'Delete {{count}} Templates', 'cornerstone'),
  'templates.delete-popover.one'                  => __( 'Are you sure you want to delete the selected template?', 'cornerstone'),
  'templates.delete-popover.other'                => __( 'Are you sure you want to delete the {{count}} selected templates?', 'cornerstone'),

  'templates.filter-all'                          => __( 'All', 'cornerstone'),
  'templates.filter-site'                         => __( 'Sites', 'cornerstone'),
  'templates.filter-header'                       => __( 'Headers', 'cornerstone'),
  'templates.filter-footer'                       => __( 'Footers', 'cornerstone'),
  'templates.filter-content'                      => __( 'Content', 'cornerstone'),
  'templates.filter-preset'                       => __( 'Presets', 'cornerstone'),
  'templates.filter-my-templates'                 => __( 'My Templates', 'cornerstone'),
  'templates.filter-themeco-templates'            => __( 'Themeco Templates', 'cornerstone'),

  'templates.type-site'                           => __( 'Site', 'cornerstone'),
  'templates.type-header'                         => __( 'Header', 'cornerstone'),
  'templates.type-footer'                         => __( 'Footer', 'cornerstone'),
  'templates.type-content'                        => __( 'Content', 'cornerstone'),
  'templates.type-preset'                         => __( 'Preset', 'cornerstone'),
  'templates.subtype-format'                      => __( '<strong>{{type}}</strong>: {{subtype}}', 'cornerstone'),
  'templates.element-defaults.entity'             => __( 'Element Defaults', 'cornerstone' ),
  'templates.element-defaults.message'            => __( 'When adding new Elements in the builders they will start with the Preset you assign.', 'cornerstone' ),

  'templates.import.choose'                       => __( '<strong>Choose a Template</strong><br>or drag it here to import.', 'cornerstone' ),
  'templates.import.imported'                     => __( '<strong>Here we go!</strong>Templates are importing.', 'cornerstone' ),
  'templates.import.done'                         => __( '<strong>All done!</strong> Templates have been added.', 'cornerstone' ),
  'templates.import.error'                        => __( '<strong>Uh oh!</strong> This file you chose was not valid and could not be imported.', 'cornerstone' ),

  'templates.confirm-hide-starter'                => __( 'Are you sure you want to hide the starter pack? This will prevent you from importing them.', 'cornerstone'),
  'templates.confirm-reimport'                    => __( 'It looks like you have imported this template package before. Would you like to import it again?', 'cornerstone' ),
  'templates.upload-error'                        => __( 'Sorry! Your file is not properly formatted.', 'cornerstone' ),

  'templates.unauthorized'                        => __( 'View your Templates to the right.', 'cornerstone' ),
  'templates.notify.importing-starter'            => __( 'Importing Starter Pack. This could take a minute.', 'cornerstone' ),
  'templates.notify.imported-starter'             => __( 'Imported Starter Pack!', 'cornerstone' ),
  'templates.notify.upload-error'                 => __( 'Sorry! Your file is not properly formatted.', 'cornerstone' ),
  'templates.notify.uploaded'                     => __( 'Template Uploaded!', 'cornerstone' ),

  'templates.remove-preview-image'                => __( 'Remove Preview Image', 'cornerstone'),


  // Design Cloud
  // ------------

  'design-cloud.title'                            => __( 'Design Cloud', 'cornerstone' ),
  'design-cloud.validate.title'                   => __( 'Validation Required.', 'cornerstone' ),
  'design-cloud.validate.confirm'                 => __( 'Your license must be validated before installing premium assets from Design Cloud.', 'cornerstone' ),

  'design-cloud.how.title'                        => __( 'How It Works', 'cornerstone' ),
  'design-cloud.how.one'                          => __( 'Our team of designers create<br>beautiful premium templates.', 'cornerstone' ),
  'design-cloud.how.two'                          => __( 'They are added to Design Cloud<br>and show up automagically.', 'cornerstone' ),
  'design-cloud.how.three'                        => __( 'Demo and install directly to<br>your Template Manager.', 'cornerstone' ),

  'design-cloud.faq.title'                        => __( 'Frequently Asked Questions', 'cornerstone' ),

  'design-cloud.install'                          => __( 'Install', 'cornerstone' ),
  'design-cloud.installed'                        => __( 'Installed', 'cornerstone' ),
  'design-cloud.installing'                       => __( 'Installing', 'cornerstone' ),

  'design-cloud.see-it-live'                      => __( 'See it Live', 'cornerstone' ),
  'design-cloud.demo-unavailable'                 => __( 'Demo Unavailable', 'cornerstone' ),
  'design-cloud.by-author-url'                    => __( 'By <a href="{{url}}">{{author}}</a>', 'cornerstone' ),
  'design-cloud.by-author'                        => __( 'By {{author}}', 'cornerstone' ),

  'design-cloud.site-import.start'     => __( 'Let&apos;s get started!', 'cornerstone' ),
  'design-cloud.site-import.complete'  => __( 'Have fun!', 'cornerstone' ),
  'design-cloud.site-import.simulated' => __( 'Working on it...', 'cornerstone' ),

  'design-cloud.site-import.timeout1'  => __( 'Working on it...', 'cornerstone' ),
  'design-cloud.site-import.timeout2'  => __( 'Hang in there, trying to reconnect...', 'cornerstone' ),
  'design-cloud.site-import.timeout3'  => __( 'Experiencing technical difficulties...', 'cornerstone' ),
  'design-cloud.site-import.failure'   => __( 'We&apos;re sorry, the demo failed to finish importing.', 'cornerstone' ),

  // Fonts
  // -----

  'fonts.entity'                                  => __( 'Font', 'cornerstone' ),
  'fonts.entity-selection'                        => __( 'Font Selection', 'cornerstone' ),
  'fonts.manager'                                 => __( 'Font Manager', 'cornerstone' ),
  'fonts.description'                             => __( 'Once a new font has been added, click the arrow to the side of the label to reveal the selection tool for font families and weights. Double-click the label to rename the added font if desired. Make sure to save all changes before exiting.', 'cornerstone' ),

  'fonts.duplicate-name-error'                    => __( 'Two fonts selections can not share the same name.', 'cornerstone' ),
  'fonts.min-one-error'                           => __( 'You need at least one font. Create another before deleting this one.', 'cornerstone' ),

  'fonts.select-family'                           => __( 'Select a Font Family', 'cornerstone' ),
  'fonts.preview'                                 => __( 'Preview', 'cornerstone' ),
  'fonts.preview-text'                            => __( 'Click here to type and preview your font selection...', 'cornerstone' ),
  'fonts.upload'                                  => __( 'Upload Fonts', 'cornerstone' ),
  'fonts.select-files'                            => __( 'Select Font File(s)', 'cornerstone' ),

  'fonts.regular'                                 => __( 'Regular', 'cornerstone' ),
  'fonts.italic'                                  => __( 'Italic', 'cornerstone' ),
  'fonts.import-files'                            => __( 'Import Font Files', 'cornerstone' ),
  'fonts.manager-add'                             => __( 'Add to Font Manager', 'cornerstone' ),
  'fonts.item-name'                               => __( 'Font Item Name', 'cornerstone' ),

  'fonts.google.subsets'                          => __( 'Enable Font Subsets', 'cornerstone' ),
  'fonts.google.placeholder'                      => __( 'Additional Subsets', 'cornerstone' ),

  'fonts.adobe.project-id'                        => __( 'Adobe Fonts Project ID', 'cornerstone' ),
  'fonts.adobe.available'                         => __( 'Available Fonts', 'cornerstone' ),
  'fonts.adobe.fonts'                             => __( 'Fonts', 'cornerstone' ),
  'fonts.adobe.weights'                           => __( 'Weights', 'cornerstone' ),
  'fonts.adobe.enter-id'                          => __( 'Enter your Adobe Fonts project ID above and click refresh.', 'cornerstone' ),
  'fonts.adobe.not-found'                         => __( 'Your project was not found. Please check to make sure the project ID is correct and try again.', 'cornerstone' ),
  'fonts.adobe.refreshing'                        => __( 'Refreshing&hellip;', 'cornerstone' ),
  'fonts.adobe.refresh'                           => __( 'Refresh', 'cornerstone' ),

  'fonts.group.custom'                            => __( 'Custom Fonts', 'cornerstone' ),
  'fonts.group.adobe'                             => __( 'Adobe Fonts (Typekit)', 'cornerstone' ),
  'fonts.group.system'                            => __( 'System Fonts', 'cornerstone' ),
  'fonts.group.google'                            => __( 'Google Fonts', 'cornerstone' ),

  'fonts.google.title'                            => __( 'Google Subsets', 'cornerstone' ),
  'fonts.google.description'                      => __( 'Specify which character subsets you would like to enable below. All subsets included extended support. Latin is always loaded by default.', 'cornerstone' ),
  'fonts.adobe.title'                             => __( 'Adobe Fonts (Typekit)', 'cornerstone' ),
  'fonts.adobe.description'                       => __( 'To integrate your Adobe Fonts projects on this website, enter a project ID into the input below. You can find this by logging into Adobe Fonts, clicking on <strong>Web Projects</strong> and then looking for the <strong>Project ID</strong>.', 'cornerstone' ),
  'fonts.custom.title'                            => __( 'Custom Fonts', 'cornerstone' ),
  'fonts.custom.description'                      => __( 'Use this section to create custom font families. Upload custom font files to a family, then assign a weight and style. These families will become selectable in the Font Manager above. We recommend using the .woff or .woff2 file format.', 'cornerstone' ),

  'fonts.body-copy'                               => __( 'Body Copy', 'cornerstone' ),
  'fonts.headings'                                => __( 'Headings', 'cornerstone' ),

  'fonts.display.title'                           => __( 'Font Display', 'cornerstone' ),
  'fonts.display.description'                     => __( 'The <code>font-display</code> property gives users control over how the timeline for fonts being loaded into the browser should be executed. The value selected below will be utilized in supported browsers where applicable across your site. You can learn more about the nuances of each available option <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display" target="_blank" rel="nofollow">here</a>.', 'cornerstone' ),
  'fonts.display.label'                           => __( 'Select Value', 'cornerstone' ),


  // Colors
  // ------

  'colors.entity'                                 => __( 'Color', 'cornerstone' ),
  'colors.title'                                  => __( 'Color Manager', 'cornerstone' ),
  'colors.description'                            => __( 'Once a new color has been added, clicking it will reveal the color-picker in addition to an input where you can rename each color for clearer labeling. Duplicate and delete buttons are visible on hover. Make sure to save all changes before exiting.', 'cornerstone' ),
  'colors.duplicate-name-error'                   => __( 'Two colors selections can not share the same name.', 'cornerstone' ),

  'colors.brand-primary'                          => __( 'Brand Primary', 'cornerstone' ),
  'colors.brand-secondary'                        => __( 'Brand Secondary', 'cornerstone' ),
  'colors.link'                                   => __( 'Link', 'cornerstone' ),
  'colors.link-interaction'                       => __( 'Link Interaction', 'cornerstone' ),


  // Responsive Text
  // ---------------

  'responsive-text.selector'                      => __( 'Selector', 'cornerstone' ),
  'responsive-text.compress'                      => __( 'Compress', 'cornerstone' ),
  'responsive-text.min-size'                      => __( 'Minimum Size', 'cornerstone' ),
  'responsive-text.max-size'                      => __( 'Maximum Size', 'cornerstone' ),


  // Font Weights
  // ------------

  'font-weight.100'                               => __( '100 &ndash; Ultra Light', 'cornerstone' ),
  'font-weight.100italic'                         => __( '100 &ndash; Ultra Light (Italic)', 'cornerstone' ),
  'font-weight.200'                               => __( '200 &ndash; Light', 'cornerstone' ),
  'font-weight.200italic'                         => __( '200 &ndash; Light (Italic)', 'cornerstone' ),
  'font-weight.300'                               => __( '300 &ndash; Book', 'cornerstone' ),
  'font-weight.300italic'                         => __( '300 &ndash; Book (Italic)', 'cornerstone' ),
  'font-weight.400'                               => __( '400 &ndash; Regular', 'cornerstone' ),
  'font-weight.400italic'                         => __( '400 &ndash; Regular (Italic)', 'cornerstone' ),
  'font-weight.500'                               => __( '500 &ndash; Medium', 'cornerstone' ),
  'font-weight.500italic'                         => __( '500 &ndash; Medium (Italic)', 'cornerstone' ),
  'font-weight.600'                               => __( '600 &ndash; Semi-Bold', 'cornerstone' ),
  'font-weight.600italic'                         => __( '600 &ndash; Semi-Bold (Italic)', 'cornerstone' ),
  'font-weight.700'                               => __( '700 &ndash; Bold', 'cornerstone' ),
  'font-weight.700italic'                         => __( '700 &ndash; Bold (Italic)', 'cornerstone' ),
  'font-weight.800'                               => __( '800 &ndash; Extra Bold', 'cornerstone' ),
  'font-weight.800italic'                         => __( '800 &ndash; Extra Bold (Italic)', 'cornerstone' ),
  'font-weight.900'                               => __( '900 &ndash; Ultra Bold', 'cornerstone' ),
  'font-weight.900italic'                         => __( '900 &ndash; Ultra Bold (Italic)', 'cornerstone' ),


  // Custom Code
  // -----------

  'code-editors.custom_css_placeholder'           => __( "/*\nNo need for style tags here;\nsimply get started by writing\nCSS! Watch as your changes\nare reflected live in the\npreview area. Have fun!\n*/\n\n", 'cornerstone' ),
  'code-editors.custom_js_placeholder'            => __( "//\n// No need to add script tags\n// here; simply get started\n// by writing JavaScript!\n// Click \"Run\" to see your\n// changes applied :)\n//\n\n", 'cornerstone' ),


  // Choices
  // -------

  'choices.menu-named'                            => __('Menu: %s', 'cornerstone'),
  'choices.menu-location'                         => __('Location: %s', 'cornerstone'),

  'choices.menu-sample-default'                   => __( 'Sample', 'cornerstone' ),
  'choices.menu-sample-no-dropdowns'              => __( 'Sample (No Dropdowns)', 'cornerstone' ),
  'choices.menu-sample-split-1'                   => __( 'Sample (Split #1)', 'cornerstone' ),
  'choices.menu-sample-split-2'                   => __( 'Sample (Split #2)', 'cornerstone' ),


  // Sort
  // ----

  'sort.new-old'                                  => __( 'Newest', 'cornerstone' ),
  'sort.old-new'                                  => __( 'Oldest', 'cornerstone' ),
  'sort.a-z'                                      => __( 'A-Z', 'cornerstone' ),
  'sort.z-a'                                      => __( 'Z-A', 'cornerstone' ),
  'sort.popular'                                  => __( 'Popular', 'cornerstone' ),


  // Actions
  // -------

  'inspect'                                       => __( 'Inspect', 'cornerstone' ),
  'duplicate'                                     => __( 'Duplicate', 'cornerstone' ),
  'delete'                                        => __( 'Delete', 'cornerstone' ),
  'really-delete'                                 => __( 'Really Delete?', 'cornerstone' ),
  'erase'                                         => __( 'Erase', 'cornerstone' ),
  'really-erase'                                  => __( 'Really Erase?', 'cornerstone' ),
  'manage-layout'                                 => __( 'Manage Layout', 'cornerstone' ),


  // Errors
  // ------

  'preview-error.missing-zone.x_masthead'         => __('No suitable preview area found. This is most common when you are using a "No Header" page template. Try changing the page template, or assigning this header to a context where the template allows the header output.', 'cornerstone'),
  'preview-error.missing-zone.x_colophon'         => __('No suitable preview area found. This is most common when you are using a "No Footer" page template. Try changing the page template, or assigning this footer to a context where the template allows the footer output.', 'cornerstone'),
  'preview-error.missing-zone.cs_content'         => __('No suitable preview area found. This could happen when a third party plugin is overrinding the content area.', 'cornerstone'),

  'preview-error.load.default'                    => __('The preview could not load. This is most often related to a plugin conflict or aggressive page cacheing. Checking the developer console for errors could indicate what went wrong.', 'cornerstone'),
  'preview-error.load.https-mismatch'             => __('The preview could not load due to a http/https mismatch. Please check that HTTPS is properly configured on your site.', 'cornerstone'),
  'preview-error.load.cross-origin'               => __('The preview could not load due to misconfigured URLs. This could happen if you are using multiple environments and the site URL was not updated after migrating.', 'cornerstone'),
  'preview-error.load.incomplete'                 => __('The preview could not load due to the iframe response being incomplete. This is most often related to a plugin conflict, or customizations introducing a PHP error.', 'cornerstone'),
  'preview-error.load.timeout'                    => __('The preview was unresponsive after loading. This is most often related to a plugin conflict or aggressive page cacheing.', 'cornerstone'),

  'preview-error.loading.incomplete-html'         => __('The preview HTML did not include a closing </html>; tag. It may fail to load or work properly.', 'cornerstone'),


  // Preferences
  // -----------

  'preferences.description'                       => __('Configure how Cornerstone should look and behave. These settings are specific to your user account.', 'cornerstone'),
  'preferences.wp-toolbar-on'                     => __('The WordPress toolbar will be shown on next reload.', 'cornerstone'),
  'preferences.wp-toolbar-off'                    => __('The WordPress toolbar will be hidden on next reload.', 'cornerstone'),


  // Skeleton Mode
  // -------------

  'skeleton-item-handle'                          => __("{{type}} - {{title}}", 'cornerstone'),


  // Dynamic Content
  // ---------------

  'dc.field'                                      => __( 'Field', 'cornerstone'),
  'dc.title'                                      => __( 'Title', 'cornerstone'),
  'dc.description'                                => __( 'Description', 'cornerstone' ),
  'dc.url'                                        => __( 'URL', 'cornerstone' ),
  'dc.meta-key'                                   => __( 'Meta Key', 'cornerstone' ),
  'dc.meta'                                       => __( 'Meta', 'cornerstone' ),
  'dc.key'                                        => __( 'Key', 'cornerstone' ),
  'dc.id'                                         => __( 'ID', 'cornerstone' ),

  'dc.group-title-post'                           => __( 'Post', 'cornerstone' ),
  'dc.group-title-archive'                        => __( 'Archive', 'cornerstone' ),
  'dc.group-title-global'                         => __( 'Global', 'cornerstone' ),
  'dc.group-title-user'                           => __( 'User', 'cornerstone' ),
  'dc.group-title-acf'                            => __( 'ACF', 'cornerstone' ),
  'dc.group-title-toolset'                        => __( 'Toolset', 'cornerstone' ),
  'dc.group-title-woocommerce'                    => __( 'WooCommerce', 'cornerstone' ),

  'dc.global.site-title'                          => __( 'Site Title', 'cornerstone' ),
  'dc.global.site-tagline'                        => __( 'Site Tagline', 'cornerstone' ),
  'dc.global.home-url'                            => __( 'Home URL', 'cornerstone' ),
  'dc.global.admin-url'                           => __( 'Admin URL', 'cornerstone' ),
  'dc.global.current-date'                        => __( 'Current Date', 'cornerstone' ),
  'dc.global.current-time'                        => __( 'Current Time', 'cornerstone' ),

  'dc.global.display-name'                        => __( 'Display Name', 'cornerstone' ),
  'dc.global.email-address'                       => __( 'Email Address', 'cornerstone' ),
  'dc.global.gravatar-url'                        => __( 'Gravatar URL', 'cornerstone' ),
  'dc.global.registration-date'                   => __( 'Registration Date', 'cornerstone' ),
  'dc.global.registration-time'                   => __( 'Registration Time', 'cornerstone' ),
  'dc.global.usermeta'                            => __( 'Usermeta', 'cornerstone' ),

  'dc.wc.shop-url'                                => __( 'Shop URL', 'cornerstone' ),
  'dc.wc.cart-url'                                => __( 'Cart URL', 'cornerstone' ),
  'dc.wc.checkout-url'                            => __( 'Checkout URL', 'cornerstone' ),
  'dc.wc.account-url'                             => __( 'Account URL', 'cornerstone' ),
  'dc.wc.terms-url'                               => __( 'Terms URL', 'cornerstone' ),
  'dc.wc.cart-item-count'                         => __( 'Cart Item Count', 'cornerstone' ),
  'dc.wc.cart-total'                              => __( 'Cart Total', 'cornerstone' ),
  'dc.wc.product-price'                           => __( 'Product Price', 'cornerstone' ),


  // Global Blocks
  // -------------

  'global-blocks.entities'                        => __( 'Global Blocks', 'cornerstone' ),
  'global-blocks.add-placeholder'                 => __( 'Global Block Name', 'cornerstone' ),
  'global-blocks.blank'                           => __( 'Click + to create your first Global Block.', 'cornerstone' ),
  'global-blocks.no-preview-available'            => __( 'No Preview Available', 'cornerstone' ),
  'global-blocks.click-to-edit'                   => __( 'Click {{icon}} to edit.', 'cornerstone' ),


  // Launchpad
  // ---------

  'launchpad.content.description'                 => __( 'Design engaging layouts throughout your site.', 'cornerstone' ),
  'launchpad.design-cloud.description'            => __( 'Premium design assets.', 'cornerstone' ),
  'launchpad.templates.description'               => __( 'Save and reuse snapshots of content.', 'cornerstone' ),
  'launchpad.global-blocks.description'           => __( 'Design once. Use anywhere.', 'cornerstone' ),
  'launchpad.options.description'                 => __( 'Foundational styling for your site.', 'cornerstone' ),


  // Regions
  // -------

  'regions.top'                                   => __( 'Top', 'cornerstone' ),
  'regions.left'                                  => __( 'Left', 'cornerstone' ),
  'regions.right'                                 => __( 'Right', 'cornerstone' ),
  'regions.bottom'                                => __( 'Bottom', 'cornerstone' ),
  'regions.footer'                                => __( 'Footer', 'cornerstone' ),


  // History
  // -------

  'history.title'                                 => __( 'History', 'cornerstone' ),
  'history.builder-loaded'                        => __( 'Builder Loaded', 'cornerstone' ),
  'history.column-layout-updated'                 => __( 'Column Layout Updated', 'cornerstone' ),
  'history.contents-deleted'                      => __( '{{context}} Contents Deleted', 'cornerstone' ),
  'history.spacing-removed'                       => __( '{{context}} Spacing Removed', 'cornerstone' ),
  'history.reset-style'                           => __( '{{context}} Style Reset', 'cornerstone' ),
  'history.set-label'                             => __( '{{context}} Renamed', 'cornerstone' ),
  'history.create-row-layout'                     => __( 'Row Layout Created', 'cornerstone' ),

);
