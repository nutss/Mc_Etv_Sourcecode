<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'censorApproveTime',
'censorUsername',
'censoReson',
'censorStatus',
'entryUserName',
'entryTime' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array( 'censorApproveTime',
'censorUsername',
'censoReson',
'censorStatus' ),
'fieldItems' => array( 'censorApproveTime' => array( 'integrated_edit_field8' ),
'censorUsername' => array( 'integrated_edit_field9' ),
'censoReson' => array( 'integrated_edit_field10' ),
'censorStatus' => array( 'integrated_edit_field11' ),
'entryUserName' => array( 'integrated_edit_field14' ),
'entryTime' => array( 'integrated_edit_field15' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'master_info',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field15' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'update_records' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'integrated_edit_field' => array( 'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field15' ),
'master_info' => array( 'master_info' ),
'update_records' => array( 'update_records' ),
'edit_view' => array( 'edit_view' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array( 'update_records' => array( 'tag' => 'UPDATE_N_RECORDS',
'type' => 2 ) ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => true ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field15' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'integrated_edit_field8' => array( 'field' => 'censorApproveTime',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field9' => array( 'field' => 'censorUsername',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field10' => array( 'field' => 'censoReson',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field11' => array( 'field' => 'censorStatus',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field14' => array( 'field' => 'entryUserName',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field15' => array( 'field' => 'entryTime',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'playlistSub' => 'true' ) ),
'update_records' => array( 'type' => 'update_records' ),
'edit_view' => array( 'type' => 'edit_view' ) ),
'dbProps' => array(  ),
'version' => 7,
'pageWidth' => 'full' );
		?>