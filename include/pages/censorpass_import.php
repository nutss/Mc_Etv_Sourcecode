<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'fileNo',
'fileName',
'fileType',
'fileSubject',
'fileTitle',
'fileClassLevel',
'fileTeacherName',
'entryUserName',
'entryTime',
'fileRaw',
'fileDuration',
'fileMD5',
'censorApproveTime',
'censorUsername',
'censoReson',
'censorStatus',
'fileStatus',
'filePath' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'fileNo' => array( 'import_field1' ),
'fileName' => array( 'import_field2' ),
'fileType' => array( 'import_field3' ),
'fileSubject' => array( 'import_field4' ),
'fileTitle' => array( 'import_field5' ),
'fileClassLevel' => array( 'import_field6' ),
'fileTeacherName' => array( 'import_field7' ),
'entryUserName' => array( 'import_field15' ),
'entryTime' => array( 'import_field16' ),
'fileRaw' => array( 'import_field' ),
'fileDuration' => array( 'import_field8' ),
'fileMD5' => array( 'import_field13' ),
'censorApproveTime' => array( 'import_field9' ),
'censorUsername' => array( 'import_field10' ),
'censoReson' => array( 'import_field11' ),
'censorStatus' => array( 'import_field12' ),
'fileStatus' => array( 'import_field14' ),
'filePath' => array( 'import_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field',
'import_field4',
'import_field5',
'import_field8',
'import_field6',
'import_field7',
'import_field15',
'import_field16',
'import_field13',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field17' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field8' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field13' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field14' => 'grid',
'import_field17' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field15',
'import_field16',
'import_field',
'import_field8',
'import_field13',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field17' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
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
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field',
'import_field4',
'import_field5',
'import_field8',
'import_field6',
'import_field7',
'import_field15',
'import_field16',
'import_field13',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field14',
'import_field17' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'fileNo',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'fileName',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'fileType',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'fileSubject',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'fileTitle',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'fileClassLevel',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'fileTeacherName',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'entryUserName',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'entryTime',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'fileRaw',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'fileDuration',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'fileMD5',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'censorApproveTime',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'censorUsername',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'censoReson',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'censorStatus',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'fileStatus',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'filePath',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>