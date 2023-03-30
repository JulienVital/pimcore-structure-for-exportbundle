<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - fieldManyToOne [manyToOneRelation]
 * - fieldManyToManyObject [manyToManyObjectRelation]
 * - fieldAdvancedManyToMany [advancedManyToManyRelation]
 * - fieldAdvancedManyToManyObject [advancedManyToManyObjectRelation]
 * - fieldReverseObject [reverseObjectRelation]
 * - fieldManyToMany [manyToManyRelation]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'ORelation',
   'name' => 'ObjectRelation',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1680111488,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
             'name' => 'fieldManyToOne',
             'title' => 'Field Many To One ',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'manyToOneRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'assetUploadPath' => '',
             'objectsAllowed' => true,
             'assetsAllowed' => true,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => true,
             'documentTypes' => 
            array (
            ),
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
             'name' => 'fieldManyToManyObject',
             'title' => 'Field Many To Many object',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'manyToManyObjectRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => '',
              ),
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'visibleFields' => 
            array (
            ),
             'allowToCreateNewObject' => false,
             'optimizedAdminLoading' => false,
             'enableTextSelection' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
             'name' => 'fieldAdvancedManyToMany',
             'title' => 'Field Advanced Many To Many',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'advancedManyToManyRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => '',
              ),
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'height' => NULL,
             'maxItems' => NULL,
             'assetUploadPath' => '',
             'objectsAllowed' => true,
             'assetsAllowed' => true,
             'assetTypes' => 
            array (
              0 => 
              array (
                'assetTypes' => '',
              ),
            ),
             'documentsAllowed' => true,
             'documentTypes' => 
            array (
              0 => 
              array (
                'documentTypes' => '',
              ),
            ),
             'enableTextSelection' => false,
             'columns' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'position' => 1,
                'key' => 'name',
              ),
              1 => 
              array (
                'type' => 'text',
                'position' => 2,
                'key' => 'name',
              ),
            ),
             'columnKeys' => 
            array (
              0 => 'name',
              1 => 'name',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
             'optimizedAdminLoading' => false,
             'enableBatchEdit' => false,
             'allowMultipleAssignments' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
             'name' => 'fieldAdvancedManyToManyObject',
             'title' => 'Field Advanced Many To Many Object',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'advancedManyToManyObjectRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'visibleFields' => 'id,fullpath',
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'enableTextSelection' => true,
             'visibleFieldDefinitions' => 
            array (
            ),
             'allowedClassId' => 'ObjectDate',
             'columns' => 
            array (
              0 => 
              array (
                'type' => 'number',
                'position' => 1,
                'key' => 'key1',
                'label' => 'label1',
              ),
              1 => 
              array (
                'type' => 'text',
                'position' => 2,
                'key' => 'key2',
                'label' => 'label2',
              ),
              2 => 
              array (
                'type' => 'select',
                'position' => 3,
                'key' => 'key3',
                'label' => 'label3',
              ),
              3 => 
              array (
                'type' => 'bool',
                'position' => 4,
                'key' => 'key4',
                'label' => 'label4',
                'value' => '',
              ),
              4 => 
              array (
                'type' => 'multiselect',
                'position' => 5,
                'key' => 'key5',
                'label' => 'label5',
              ),
            ),
             'columnKeys' => 
            array (
              0 => 'key1',
              1 => 'key2',
              2 => 'key3',
              3 => 'key4',
              4 => 'key5',
            ),
             'enableBatchEdit' => true,
             'allowMultipleAssignments' => true,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ReverseObjectRelation::__set_state(array(
             'name' => 'fieldReverseObject',
             'title' => 'Field Reverse Object',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'reverseObjectRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'visibleFields' => NULL,
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'enableTextSelection' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
             'ownerClassName' => NULL,
             'ownerClassId' => NULL,
             'ownerFieldName' => NULL,
             'lazyLoading' => true,
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyRelation::__set_state(array(
             'name' => 'fieldManyToMany',
             'title' => 'Field Many To Many',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'manyToManyRelation',
             'relationType' => true,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'folder',
              ),
              1 => 
              array (
                'classes' => 'ObjectDate',
              ),
              2 => 
              array (
                'classes' => 'ObjectImage',
              ),
              3 => 
              array (
                'classes' => 'ObjectSelect',
              ),
              4 => 
              array (
                'classes' => 'ObjectText',
              ),
              5 => 
              array (
                'classes' => 'ObjetRelation',
              ),
              6 => 
              array (
                'classes' => 'ObjetTypeONE',
              ),
              7 => 
              array (
                'classes' => 'ObjetTypeTHREE',
              ),
              8 => 
              array (
                'classes' => 'ObjetTypeTWO',
              ),
              9 => 
              array (
                'classes' => 'newTemp',
              ),
            ),
             'pathFormatterClass' => '',
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'assetUploadPath' => '',
             'objectsAllowed' => true,
             'assetsAllowed' => true,
             'assetTypes' => 
            array (
              0 => 
              array (
                'assetTypes' => '',
              ),
            ),
             'documentsAllowed' => true,
             'documentTypes' => 
            array (
              0 => 
              array (
                'documentTypes' => '',
              ),
            ),
             'enableTextSelection' => false,
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' => 
  array (
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
