<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'fileNo',
'fileName',
'fileType',
'fileDuration',
'fileSubject',
'fileTitle',
'fileClassLevel',
'fileTeacherName',
'fileTeacherInfo',
'fileRaw',
'fileMD5',
'censorApproveTime',
'censorUsername',
'censoReson',
'entryUserName',
'entryTime',
'filedate',
'filePath',
'fileStatus',
'producerName' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'fileNo' => array( 'report_grid_field1' ),
'fileName' => array( 'report_grid_field2' ),
'fileType' => array( 'report_grid_field3' ),
'fileDuration' => array( 'report_grid_field4' ),
'fileSubject' => array( 'report_grid_field5' ),
'fileTitle' => array( 'report_grid_field6' ),
'fileClassLevel' => array( 'report_grid_field7' ),
'fileTeacherName' => array( 'report_grid_field8' ),
'fileTeacherInfo' => array( 'report_grid_field9' ),
'fileRaw' => array( 'report_grid_field10' ),
'fileMD5' => array( 'report_grid_field11' ),
'censorApproveTime' => array( 'report_grid_field12' ),
'censorUsername' => array( 'report_grid_field13' ),
'censoReson' => array( 'report_grid_field14' ),
'entryUserName' => array( 'report_grid_field16' ),
'entryTime' => array( 'report_grid_field17' ),
'censorStatus' => array( 'report_group_field' ),
'filedate' => array( 'report_grid_field15' ),
'filePath' => array( 'report_grid_field18' ),
'fileStatus' => array( 'report_grid_field19' ),
'producerName' => array( 'report_grid_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_group_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field14',
'report_grid_field16',
'report_grid_field17',
'report_grid_field15',
'report_grid_field18',
'report_grid_field19',
'report_grid_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'report_group_field' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid',
'report_grid_field11' => 'grid',
'report_grid_field12' => 'grid',
'report_grid_field13' => 'grid',
'report_grid_field14' => 'grid',
'report_grid_field16' => 'grid',
'report_grid_field17' => 'grid',
'report_grid_field15' => 'grid',
'report_grid_field18' => 'grid',
'report_grid_field19' => 'grid',
'report_grid_field' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field14',
'report_grid_field16',
'report_grid_field17',
'report_grid_field15',
'report_grid_field18',
'report_grid_field19',
'report_grid_field' ),
'report_group_field' => array( 'report_group_field' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'B1D4B1',
'summary' => 'D1FAD1' ),
'field' => 'censorStatus' ) ),
'fields' => array( array( 'avg' => false,
'field' => 'fileNo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileType',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileDuration',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileSubject',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTitle',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileClassLevel',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTeacherName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTeacherInfo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileRaw',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileMD5',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censorApproveTime',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censorUsername',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censoReson',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'entryUserName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'entryTime',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'filedate',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'filePath',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileStatus',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'producerName',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'stepped',
'vertSummary' => false ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field14',
'report_grid_field16',
'report_grid_field17',
'report_grid_field15',
'report_grid_field18',
'report_grid_field19',
'report_grid_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'B1D4B1',
'summary' => 'D1FAD1' ),
'field' => 'censorStatus' ) ),
'fields' => array( array( 'avg' => false,
'field' => 'fileNo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileType',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileDuration',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileSubject',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTitle',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileClassLevel',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTeacherName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileTeacherInfo',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileRaw',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileMD5',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censorApproveTime',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censorUsername',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'censoReson',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'entryUserName',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'entryTime',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'filedate',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'filePath',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'fileStatus',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'producerName',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'stepped',
'vertSummary' => false ) ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field1' => array( 'field' => 'fileNo',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field2' => array( 'field' => 'fileName',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field3' => array( 'field' => 'fileType',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field4' => array( 'field' => 'fileDuration',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field5' => array( 'field' => 'fileSubject',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field6' => array( 'field' => 'fileTitle',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field7' => array( 'field' => 'fileClassLevel',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field8' => array( 'field' => 'fileTeacherName',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field9' => array( 'field' => 'fileTeacherInfo',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field10' => array( 'field' => 'fileRaw',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field11' => array( 'field' => 'fileMD5',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field12' => array( 'field' => 'censorApproveTime',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field13' => array( 'field' => 'censorUsername',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field14' => array( 'field' => 'censoReson',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field16' => array( 'field' => 'entryUserName',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field17' => array( 'field' => 'entryTime',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_group_field' => array( 'field' => 'censorStatus',
'type' => 'report_group_field',
'axis' => 0,
'summary' => true,
'interval' => 0 ),
'report_grid_field15' => array( 'field' => 'filedate',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field18' => array( 'field' => 'filePath',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field19' => array( 'field' => 'fileStatus',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field' => array( 'field' => 'producerName',
'type' => 'report_grid_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>