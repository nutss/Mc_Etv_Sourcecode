<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'mediaInfo',
'page' => 'list' ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'playlistMain',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'playlistSub',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'FileAdmin',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'staffUsers',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item2',
'welcome_item',
'welcome_item1',
'welcome_item4',
'welcome_item3' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item2' => 'grid',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item4' => 'grid',
'welcome_item3' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4' ),
'list_options' => array( 'list_options' ),
'lang_selector' => array( 'lang_selector' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'userinfo_link' => array( 'userinfo_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item2',
'welcome_item',
'welcome_item1',
'welcome_item4',
'welcome_item3' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'playlistMain',
'linkPage' => 'list',
'linkText' => array( 'table' => 'playlistMain',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Playlist Main description',
'type' => 0 ),
'background' => '#B22222',
'linkType' => 0 ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'lang_selector' ) ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'playlistSub',
'linkPage' => 'list',
'linkText' => array( 'table' => 'playlistSub',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Playlist Sub description',
'type' => 0 ),
'background' => '#8FBC8B',
'linkType' => 0 ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'mediaInfo',
'linkPage' => 'list',
'linkText' => array( 'table' => 'mediaInfo',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Media Info description',
'type' => 0 ),
'background' => '#E67349',
'linkType' => 0 ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'staffUsers',
'linkPage' => 'list',
'linkText' => array( 'table' => 'staffUsers',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Staff Users description',
'type' => 0 ),
'background' => '#2F4F4F',
'linkType' => 0 ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'FileAdmin',
'linkPage' => 'list',
'linkText' => array( 'table' => 'FileAdmin',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'shopping-cart' ),
'linkComments' => array( 'text' => 'Censor All description',
'type' => 0 ),
'background' => '#B22222',
'linkType' => 0 ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ) ),
'dbProps' => array(  ),
'version' => 7,
'pageWidth' => 'full' );
		?>