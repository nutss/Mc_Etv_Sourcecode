<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'fileNo',
'fileName',
'fileTeacherName',
'fileRaw',
'entryUserName',
'entryTime',
'fileDuration',
'fileMD5',
'fileTeacherInfo',
'filedate',
'producerName' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'fileNo' => array( 'integrated_edit_field' ),
'fileName' => array( 'integrated_edit_field1' ),
'fileTeacherName' => array( 'integrated_edit_field6' ),
'fileRaw' => array( 'integrated_edit_field7' ),
'entryUserName' => array( 'integrated_edit_field14' ),
'entryTime' => array( 'integrated_edit_field15' ),
'fileDuration' => array( 'integrated_edit_field12' ),
'fileMD5' => array( 'integrated_edit_field8' ),
'fileTeacherInfo' => array( 'integrated_edit_field9' ),
'filedate' => array( 'integrated_edit_field10' ),
'producerName' => array( 'integrated_edit_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field10',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field15' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field12',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field10',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
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
'integrated_edit_field',
'integrated_edit_field10',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field15' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => true,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'fileNo',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field1' => array( 'field' => 'fileName',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field6' => array( 'field' => 'fileTeacherName',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field7' => array( 'field' => 'fileRaw',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field14' => array( 'field' => 'entryUserName',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field15' => array( 'field' => 'entryTime',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field12' => array( 'field' => 'fileDuration',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'playlistSub' => 'true' ) ),
'integrated_edit_field8' => array( 'field' => 'fileMD5',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field9' => array( 'field' => 'fileTeacherInfo',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field10' => array( 'field' => 'filedate',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field11' => array( 'field' => 'producerName',
'type' => 'integrated_edit_field',
'orientation' => 1 ) ),
'dbProps' => array(  ),
'version' => 7,
'pageWidth' => 'full' );
		?>