<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'fileNo' => array( 'totalsType' => '' ),
'filedate' => array( 'totalsType' => '' ),
'fileName' => array( 'totalsType' => '' ),
'fileType' => array( 'totalsType' => '' ),
'fileDuration' => array( 'totalsType' => '' ),
'fileSubject' => array( 'totalsType' => '' ),
'fileTitle' => array( 'totalsType' => '' ),
'fileClassLevel' => array( 'totalsType' => '' ),
'fileTeacherName' => array( 'totalsType' => '' ),
'fileTeacherInfo' => array( 'totalsType' => '' ),
'fileRaw' => array( 'totalsType' => '' ),
'fileMD5' => array( 'totalsType' => '' ),
'censorApproveTime' => array( 'totalsType' => '' ),
'censorUsername' => array( 'totalsType' => '' ),
'censoReson' => array( 'totalsType' => '' ),
'censorStatus' => array( 'totalsType' => '' ),
'fileStatus' => array( 'totalsType' => '' ),
'filePath' => array( 'totalsType' => '' ),
'entryUserName' => array( 'totalsType' => '' ),
'entryTime' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'fileNo',
'fileName',
'fileRaw',
'censorStatus',
'fileTitle',
'fileSubject',
'fileType',
'fileClassLevel',
'fileTeacherName',
'fileDuration' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'fileMD5',
'filePath',
'fileStatus',
'filedate',
'fileTeacherInfo',
'censorStatus',
'censoReson',
'censorUsername',
'censorApproveTime',
'fileDuration',
'fileRaw',
'fileType',
'fileTitle',
'fileTeacherName',
'fileSubject',
'fileNo',
'fileName',
'fileClassLevel',
'entryUserName',
'entryTime' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'fileNo' => array( 'simple_grid_field1',
'simple_grid_field' ),
'fileName' => array( 'simple_grid_field2',
'simple_grid_field8' ),
'fileRaw' => array( 'simple_grid_field10',
'simple_grid_field11' ),
'censorStatus' => array( 'simple_grid_field13',
'simple_grid_field14' ),
'fileTitle' => array( 'simple_grid_field5',
'simple_grid_field12' ),
'fileSubject' => array( 'simple_grid_field4',
'simple_grid_field15' ),
'fileType' => array( 'simple_grid_field3',
'simple_grid_field16' ),
'fileClassLevel' => array( 'simple_grid_field6',
'simple_grid_field17' ),
'fileTeacherName' => array( 'simple_grid_field7',
'simple_grid_field18' ),
'fileDuration' => array( 'simple_grid_field9',
'simple_grid_field19' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel',
'filter_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'above-grid' => array( 'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field8',
'simple_grid_field2',
'simple_grid_field11',
'simple_grid_field10',
'simple_grid_field14',
'simple_grid_field13',
'simple_grid_field12',
'simple_grid_field5',
'simple_grid_field15',
'simple_grid_field4',
'simple_grid_field16',
'simple_grid_field3',
'simple_grid_field17',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field7',
'simple_grid_field19',
'simple_grid_field9',
'grid_checkbox_head',
'grid_checkbox',
'grid_view' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'mastertable_block' ),
'above-grid' => array( 'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'filter_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field9' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'search_panel' => 5,
'filter_panel' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'delete' => array( 'delete' ),
'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_records' => array( 'print_records' ),
'print_button' => array( 'print_button' ),
'pagination' => array( 'pagination' ),
'search_panel_field' => array( 'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field15',
'search_panel_field16',
'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field17',
'search_panel_field14',
'search_panel_field18',
'search_panel_field19' ),
'export_selected' => array( 'export_selected' ),
'delete_selected' => array( 'delete_selected' ),
'-' => array( '-4',
'-2',
'-3',
'-',
'-1' ),
'advsearch_link' => array( 'advsearch_link' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'export' => array( 'export' ),
'import' => array( 'import' ),
'lang_selector' => array( 'lang_selector' ),
'logout_link' => array( 'logout_link' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'logo' => array( 'logo' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'master_info' => array( 'master_info' ),
'filter_panel' => array( 'filter_panel' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'userinfo_link' => array( 'userinfo_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field10',
'simple_grid_field13',
'simple_grid_field5',
'simple_grid_field4',
'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field9' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field8',
'simple_grid_field11',
'simple_grid_field14',
'simple_grid_field12',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_view' => array( 'grid_view' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'fileNo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'fileName_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'fileRaw_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'censorStatus_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'fileTitle_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'fileSubject_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'fileType_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'fileClassLevel_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'fileTeacherName_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'fileDuration_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'view_column' ),
'items' => array( 'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'fileNo_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'fileName_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'fileRaw_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'censorStatus_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'fileTitle_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'fileSubject_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'fileType_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'fileClassLevel_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'fileTeacherName_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'fileDuration_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 12,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'deleteInfo',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-menu',
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
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'fileNo',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'fileNo',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'fileName',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'fileName',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'fileRaw',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'fileRaw',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'censorStatus',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'censorStatus',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'fileTitle',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'fileTitle',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'fileSubject',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'fileSubject',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'fileType',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'fileType',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'fileClassLevel',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'fileClassLevel',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'fileTeacherName',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'fileTeacherName',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'fileDuration',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'fileDuration',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'delete' => array( 'type' => 'delete' ),
'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_records' => array( 'type' => 'print_records' ),
'print_button' => array( 'type' => 'print_button' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel_field13' => array( 'field' => 'fileType',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'fileTitle',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'fileTeacherName',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'fileSubject',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'fileNo',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'fileName',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'fileRaw',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'fileClassLevel',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'entryUserName',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'entryTime',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'export_selected' => array( 'type' => 'export_selected' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'-4' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'-2' => array( 'type' => '-' ),
'export' => array( 'type' => 'export' ),
'-3' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-' => array( 'type' => '-' ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'logout_link' => array( 'type' => 'logout_link' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field16',
'search_panel_field19',
'search_panel_field18',
'search_panel_field14',
'search_panel_field17',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1',
'search_panel_field',
'search_panel_field15',
'search_panel_field7',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4' ),
'_flexiblePanel' => true ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-4',
'-1',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-2',
'export',
'-3',
'import',
'-',
'lang_selector' ) ),
'-1' => array( 'type' => '-' ),
'logo' => array( 'type' => 'logo' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'playlistSub' => 'true' ) ),
'search_panel_field15' => array( 'field' => 'fileDuration',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field16' => array( 'field' => 'fileMD5',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field' => array( 'field' => 'censorApproveTime',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field1' => array( 'field' => 'censorUsername',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field2' => array( 'field' => 'censoReson',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field3' => array( 'field' => 'censorStatus',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array(  ) ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'search_panel_field17' => array( 'field' => 'fileTeacherInfo',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'search_panel_field14' => array( 'field' => 'filedate',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field18' => array( 'field' => 'fileStatus',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field19' => array( 'field' => 'filePath',
'type' => 'search_panel_field',
'required' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'simple_grid_field1' => array( 'field' => 'fileNo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'fileNo',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'fileName',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'fileName',
'clickSort' => true ),
'simple_grid_field10' => array( 'field' => 'fileRaw',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'fileRaw' ),
'simple_grid_field13' => array( 'field' => 'censorStatus',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'censorStatus' ),
'simple_grid_field5' => array( 'field' => 'fileTitle',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'fileTitle',
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'fileSubject',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'fileSubject',
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 'fileType',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'fileType',
'clickSort' => true ),
'simple_grid_field6' => array( 'field' => 'fileClassLevel',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'fileClassLevel',
'clickSort' => true ),
'simple_grid_field7' => array( 'field' => 'fileTeacherName',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'fileTeacherName',
'clickSort' => true ),
'simple_grid_field9' => array( 'field' => 'fileDuration',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'fileDuration' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 7,
'pageWidth' => 'full' );
		?>