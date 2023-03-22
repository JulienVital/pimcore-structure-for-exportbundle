<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - textarea [textarea]
 * - firstInput [input]
 * - wys [wysiwyg]
 * - password [password]
 * - quantityvaluetext [inputQuantityValue]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'Otext',
   'name' => 'ObjectText',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1679497858,
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'Text',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Text',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                     'name' => 'textarea',
                     'title' => 'Textarea',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'textarea',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'width' => '',
                     'height' => '',
                     'maxLength' => NULL,
                     'showCharCount' => false,
                     'excludeFromSearchIndex' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'name' => 'firstInput',
                     'title' => 'First Input',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'input',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'width' => '',
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'regexFlags' => 
                    array (
                    ),
                     'unique' => false,
                     'showCharCount' => false,
                     'defaultValueGenerator' => '',
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                     'name' => 'wys',
                     'title' => 'Wys',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'wysiwyg',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'width' => '',
                     'height' => '',
                     'toolbarConfig' => '',
                     'excludeFromSearchIndex' => false,
                     'maxCharacters' => '',
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                     'name' => 'password',
                     'title' => 'Password',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'password',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'width' => '',
                     'algorithm' => 'password_hash',
                     'salt' => '',
                     'saltlocation' => 'back',
                     'minimumLength' => NULL,
                  )),
                  4 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\InputQuantityValue::__set_state(array(
                     'name' => 'quantityvaluetext',
                     'title' => 'Quantity',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'fieldtype' => 'inputQuantityValue',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' => 
                    array (
                    ),
                     'width' => '',
                     'unitWidth' => NULL,
                     'defaultValue' => NULL,
                     'defaultUnit' => NULL,
                     'validUnits' => 
                    array (
                    ),
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => NULL,
                     'decimalPrecision' => NULL,
                     'autoConvert' => false,
                     'defaultValueGenerator' => '',
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
             'fieldtype' => 'tabpanel',
             'border' => false,
             'tabPosition' => NULL,
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
    0 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ExternalImage::__set_state(array(
       'name' => 'externalImage',
       'title' => 'External Image',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'externalImage',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'previewWidth' => NULL,
       'inputWidth' => NULL,
       'previewHeight' => NULL,
       'queryColumnType' => 'longtext',
       'columnType' => 'longtext',
    )),
    1 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Hotspotimage::__set_state(array(
       'name' => 'ImageAdvanced',
       'title' => 'Image Advanced',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'hotspotimage',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'queryColumnType' => 
      array (
        'image' => 'int(11)',
        'hotspots' => 'text',
      ),
       'columnType' => 
      array (
        'image' => 'int(11)',
        'hotspots' => 'text',
      ),
       'ratioX' => NULL,
       'ratioY' => NULL,
       'predefinedDataTemplates' => '',
       'width' => '',
       'height' => '',
       'uploadPath' => '',
    )),
    2 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
       'name' => 'ImageGallery',
       'title' => 'Image Gallery',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'imageGallery',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'queryColumnType' => 
      array (
        'images' => 'text',
        'hotspots' => 'longtext',
      ),
       'columnType' => 
      array (
        'images' => 'text',
        'hotspots' => 'longtext',
      ),
       'width' => '',
       'height' => '',
       'uploadPath' => '',
       'ratioX' => NULL,
       'ratioY' => NULL,
       'predefinedDataTemplates' => '',
    )),
    3 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Video::__set_state(array(
       'name' => 'Video',
       'title' => 'Video',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'video',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'width' => '',
       'height' => '',
       'queryColumnType' => 'text',
       'columnType' => 'text',
       'allowedTypes' => 
      array (
      ),
       'supportedTypes' => 
      array (
        0 => 'asset',
        1 => 'youtube',
        2 => 'vimeo',
        3 => 'dailymotion',
      ),
    )),
    4 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
       'name' => 'image',
       'title' => 'Image',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'image',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'queryColumnType' => 'int(11)',
       'columnType' => 'int(11)',
       'width' => '',
       'height' => '',
       'uploadPath' => '',
    )),
    5 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
       'name' => 'booleanSelect',
       'title' => 'Boolean Select',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'booleanSelect',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'yesLabel' => 'yes',
       'noLabel' => 'no',
       'emptyLabel' => 'empty',
       'options' => 
      array (
        0 => 
        array (
          'key' => 'empty',
          'value' => 0,
        ),
        1 => 
        array (
          'key' => 'yes',
          'value' => 1,
        ),
        2 => 
        array (
          'key' => 'no',
          'value' => -1,
        ),
      ),
       'width' => '',
       'queryColumnType' => 'tinyint(1) null',
       'columnType' => 'tinyint(1) null',
    )),
    6 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
       'name' => 'Select',
       'title' => 'Select',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'select',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'name 1',
          'value' => 'value 1',
        ),
        1 => 
        array (
          'key' => 'name 2',
          'value' => 'value 2',
        ),
      ),
       'width' => '',
       'defaultValue' => '',
       'optionsProviderClass' => '',
       'optionsProviderData' => '',
       'queryColumnType' => 'varchar',
       'columnType' => 'varchar',
       'columnLength' => 190,
       'dynamicOptions' => false,
       'defaultValueGenerator' => '',
    )),
    7 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\User::__set_state(array(
       'name' => 'User',
       'title' => 'User',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'user',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'value' => 2,
          'key' => 'pimcore',
        ),
      ),
       'width' => 0,
       'defaultValue' => NULL,
       'optionsProviderClass' => NULL,
       'optionsProviderData' => NULL,
       'queryColumnType' => 'varchar',
       'columnType' => 'varchar',
       'columnLength' => 190,
       'dynamicOptions' => false,
       'defaultValueGenerator' => '',
       'unique' => false,
    )),
    8 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
       'name' => 'Country',
       'title' => 'Country',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'country',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'Afghanistan',
          'value' => 'AF',
        ),
        1 => 
        array (
          'key' => 'Albania',
          'value' => 'AL',
        ),
        2 => 
        array (
          'key' => 'Algeria',
          'value' => 'DZ',
        ),
        3 => 
        array (
          'key' => 'American Samoa',
          'value' => 'AS',
        ),
        4 => 
        array (
          'key' => 'Andorra',
          'value' => 'AD',
        ),
        5 => 
        array (
          'key' => 'Angola',
          'value' => 'AO',
        ),
        6 => 
        array (
          'key' => 'Anguilla',
          'value' => 'AI',
        ),
        7 => 
        array (
          'key' => 'Antarctica',
          'value' => 'AQ',
        ),
        8 => 
        array (
          'key' => 'Antigua & Barbuda',
          'value' => 'AG',
        ),
        9 => 
        array (
          'key' => 'Argentina',
          'value' => 'AR',
        ),
        10 => 
        array (
          'key' => 'Armenia',
          'value' => 'AM',
        ),
        11 => 
        array (
          'key' => 'Aruba',
          'value' => 'AW',
        ),
        12 => 
        array (
          'key' => 'Australia',
          'value' => 'AU',
        ),
        13 => 
        array (
          'key' => 'Austria',
          'value' => 'AT',
        ),
        14 => 
        array (
          'key' => 'Azerbaijan',
          'value' => 'AZ',
        ),
        15 => 
        array (
          'key' => 'Bahamas',
          'value' => 'BS',
        ),
        16 => 
        array (
          'key' => 'Bahrain',
          'value' => 'BH',
        ),
        17 => 
        array (
          'key' => 'Bangladesh',
          'value' => 'BD',
        ),
        18 => 
        array (
          'key' => 'Barbados',
          'value' => 'BB',
        ),
        19 => 
        array (
          'key' => 'Belarus',
          'value' => 'BY',
        ),
        20 => 
        array (
          'key' => 'Belgium',
          'value' => 'BE',
        ),
        21 => 
        array (
          'key' => 'Belize',
          'value' => 'BZ',
        ),
        22 => 
        array (
          'key' => 'Benin',
          'value' => 'BJ',
        ),
        23 => 
        array (
          'key' => 'Bermuda',
          'value' => 'BM',
        ),
        24 => 
        array (
          'key' => 'Bhutan',
          'value' => 'BT',
        ),
        25 => 
        array (
          'key' => 'Bolivia',
          'value' => 'BO',
        ),
        26 => 
        array (
          'key' => 'Bosnia & Herzegovina',
          'value' => 'BA',
        ),
        27 => 
        array (
          'key' => 'Botswana',
          'value' => 'BW',
        ),
        28 => 
        array (
          'key' => 'Bouvet Island',
          'value' => 'BV',
        ),
        29 => 
        array (
          'key' => 'Brazil',
          'value' => 'BR',
        ),
        30 => 
        array (
          'key' => 'British Indian Ocean Territory',
          'value' => 'IO',
        ),
        31 => 
        array (
          'key' => 'British Virgin Islands',
          'value' => 'VG',
        ),
        32 => 
        array (
          'key' => 'Brunei',
          'value' => 'BN',
        ),
        33 => 
        array (
          'key' => 'Bulgaria',
          'value' => 'BG',
        ),
        34 => 
        array (
          'key' => 'Burkina Faso',
          'value' => 'BF',
        ),
        35 => 
        array (
          'key' => 'Burundi',
          'value' => 'BI',
        ),
        36 => 
        array (
          'key' => 'Cambodia',
          'value' => 'KH',
        ),
        37 => 
        array (
          'key' => 'Cameroon',
          'value' => 'CM',
        ),
        38 => 
        array (
          'key' => 'Canada',
          'value' => 'CA',
        ),
        39 => 
        array (
          'key' => 'Cape Verde',
          'value' => 'CV',
        ),
        40 => 
        array (
          'key' => 'Caribbean Netherlands',
          'value' => 'BQ',
        ),
        41 => 
        array (
          'key' => 'Cayman Islands',
          'value' => 'KY',
        ),
        42 => 
        array (
          'key' => 'Central African Republic',
          'value' => 'CF',
        ),
        43 => 
        array (
          'key' => 'Chad',
          'value' => 'TD',
        ),
        44 => 
        array (
          'key' => 'Chile',
          'value' => 'CL',
        ),
        45 => 
        array (
          'key' => 'China',
          'value' => 'CN',
        ),
        46 => 
        array (
          'key' => 'Christmas Island',
          'value' => 'CX',
        ),
        47 => 
        array (
          'key' => 'Cocos (Keeling) Islands',
          'value' => 'CC',
        ),
        48 => 
        array (
          'key' => 'Colombia',
          'value' => 'CO',
        ),
        49 => 
        array (
          'key' => 'Comoros',
          'value' => 'KM',
        ),
        50 => 
        array (
          'key' => 'Congo - Brazzaville',
          'value' => 'CG',
        ),
        51 => 
        array (
          'key' => 'Congo - Kinshasa',
          'value' => 'CD',
        ),
        52 => 
        array (
          'key' => 'Cook Islands',
          'value' => 'CK',
        ),
        53 => 
        array (
          'key' => 'Costa Rica',
          'value' => 'CR',
        ),
        54 => 
        array (
          'key' => 'Croatia',
          'value' => 'HR',
        ),
        55 => 
        array (
          'key' => 'Cuba',
          'value' => 'CU',
        ),
        56 => 
        array (
          'key' => 'Curaçao',
          'value' => 'CW',
        ),
        57 => 
        array (
          'key' => 'Cyprus',
          'value' => 'CY',
        ),
        58 => 
        array (
          'key' => 'Czechia',
          'value' => 'CZ',
        ),
        59 => 
        array (
          'key' => 'Côte d’Ivoire',
          'value' => 'CI',
        ),
        60 => 
        array (
          'key' => 'Denmark',
          'value' => 'DK',
        ),
        61 => 
        array (
          'key' => 'Djibouti',
          'value' => 'DJ',
        ),
        62 => 
        array (
          'key' => 'Dominica',
          'value' => 'DM',
        ),
        63 => 
        array (
          'key' => 'Dominican Republic',
          'value' => 'DO',
        ),
        64 => 
        array (
          'key' => 'Ecuador',
          'value' => 'EC',
        ),
        65 => 
        array (
          'key' => 'Egypt',
          'value' => 'EG',
        ),
        66 => 
        array (
          'key' => 'El Salvador',
          'value' => 'SV',
        ),
        67 => 
        array (
          'key' => 'Equatorial Guinea',
          'value' => 'GQ',
        ),
        68 => 
        array (
          'key' => 'Eritrea',
          'value' => 'ER',
        ),
        69 => 
        array (
          'key' => 'Estonia',
          'value' => 'EE',
        ),
        70 => 
        array (
          'key' => 'Eswatini',
          'value' => 'SZ',
        ),
        71 => 
        array (
          'key' => 'Ethiopia',
          'value' => 'ET',
        ),
        72 => 
        array (
          'key' => 'Falkland Islands',
          'value' => 'FK',
        ),
        73 => 
        array (
          'key' => 'Faroe Islands',
          'value' => 'FO',
        ),
        74 => 
        array (
          'key' => 'Fiji',
          'value' => 'FJ',
        ),
        75 => 
        array (
          'key' => 'Finland',
          'value' => 'FI',
        ),
        76 => 
        array (
          'key' => 'France',
          'value' => 'FR',
        ),
        77 => 
        array (
          'key' => 'French Guiana',
          'value' => 'GF',
        ),
        78 => 
        array (
          'key' => 'French Polynesia',
          'value' => 'PF',
        ),
        79 => 
        array (
          'key' => 'French Southern Territories',
          'value' => 'TF',
        ),
        80 => 
        array (
          'key' => 'Gabon',
          'value' => 'GA',
        ),
        81 => 
        array (
          'key' => 'Gambia',
          'value' => 'GM',
        ),
        82 => 
        array (
          'key' => 'Georgia',
          'value' => 'GE',
        ),
        83 => 
        array (
          'key' => 'Germany',
          'value' => 'DE',
        ),
        84 => 
        array (
          'key' => 'Ghana',
          'value' => 'GH',
        ),
        85 => 
        array (
          'key' => 'Gibraltar',
          'value' => 'GI',
        ),
        86 => 
        array (
          'key' => 'Greece',
          'value' => 'GR',
        ),
        87 => 
        array (
          'key' => 'Greenland',
          'value' => 'GL',
        ),
        88 => 
        array (
          'key' => 'Grenada',
          'value' => 'GD',
        ),
        89 => 
        array (
          'key' => 'Guadeloupe',
          'value' => 'GP',
        ),
        90 => 
        array (
          'key' => 'Guam',
          'value' => 'GU',
        ),
        91 => 
        array (
          'key' => 'Guatemala',
          'value' => 'GT',
        ),
        92 => 
        array (
          'key' => 'Guernsey',
          'value' => 'GG',
        ),
        93 => 
        array (
          'key' => 'Guinea',
          'value' => 'GN',
        ),
        94 => 
        array (
          'key' => 'Guinea-Bissau',
          'value' => 'GW',
        ),
        95 => 
        array (
          'key' => 'Guyana',
          'value' => 'GY',
        ),
        96 => 
        array (
          'key' => 'Haiti',
          'value' => 'HT',
        ),
        97 => 
        array (
          'key' => 'Heard & McDonald Islands',
          'value' => 'HM',
        ),
        98 => 
        array (
          'key' => 'Honduras',
          'value' => 'HN',
        ),
        99 => 
        array (
          'key' => 'Hong Kong SAR China',
          'value' => 'HK',
        ),
        100 => 
        array (
          'key' => 'Hungary',
          'value' => 'HU',
        ),
        101 => 
        array (
          'key' => 'Iceland',
          'value' => 'IS',
        ),
        102 => 
        array (
          'key' => 'India',
          'value' => 'IN',
        ),
        103 => 
        array (
          'key' => 'Indonesia',
          'value' => 'ID',
        ),
        104 => 
        array (
          'key' => 'Iran',
          'value' => 'IR',
        ),
        105 => 
        array (
          'key' => 'Iraq',
          'value' => 'IQ',
        ),
        106 => 
        array (
          'key' => 'Ireland',
          'value' => 'IE',
        ),
        107 => 
        array (
          'key' => 'Isle of Man',
          'value' => 'IM',
        ),
        108 => 
        array (
          'key' => 'Israel',
          'value' => 'IL',
        ),
        109 => 
        array (
          'key' => 'Italy',
          'value' => 'IT',
        ),
        110 => 
        array (
          'key' => 'Jamaica',
          'value' => 'JM',
        ),
        111 => 
        array (
          'key' => 'Japan',
          'value' => 'JP',
        ),
        112 => 
        array (
          'key' => 'Jersey',
          'value' => 'JE',
        ),
        113 => 
        array (
          'key' => 'Jordan',
          'value' => 'JO',
        ),
        114 => 
        array (
          'key' => 'Kazakhstan',
          'value' => 'KZ',
        ),
        115 => 
        array (
          'key' => 'Kenya',
          'value' => 'KE',
        ),
        116 => 
        array (
          'key' => 'Kiribati',
          'value' => 'KI',
        ),
        117 => 
        array (
          'key' => 'Kuwait',
          'value' => 'KW',
        ),
        118 => 
        array (
          'key' => 'Kyrgyzstan',
          'value' => 'KG',
        ),
        119 => 
        array (
          'key' => 'Laos',
          'value' => 'LA',
        ),
        120 => 
        array (
          'key' => 'Latvia',
          'value' => 'LV',
        ),
        121 => 
        array (
          'key' => 'Lebanon',
          'value' => 'LB',
        ),
        122 => 
        array (
          'key' => 'Lesotho',
          'value' => 'LS',
        ),
        123 => 
        array (
          'key' => 'Liberia',
          'value' => 'LR',
        ),
        124 => 
        array (
          'key' => 'Libya',
          'value' => 'LY',
        ),
        125 => 
        array (
          'key' => 'Liechtenstein',
          'value' => 'LI',
        ),
        126 => 
        array (
          'key' => 'Lithuania',
          'value' => 'LT',
        ),
        127 => 
        array (
          'key' => 'Luxembourg',
          'value' => 'LU',
        ),
        128 => 
        array (
          'key' => 'Macao SAR China',
          'value' => 'MO',
        ),
        129 => 
        array (
          'key' => 'Madagascar',
          'value' => 'MG',
        ),
        130 => 
        array (
          'key' => 'Malawi',
          'value' => 'MW',
        ),
        131 => 
        array (
          'key' => 'Malaysia',
          'value' => 'MY',
        ),
        132 => 
        array (
          'key' => 'Maldives',
          'value' => 'MV',
        ),
        133 => 
        array (
          'key' => 'Mali',
          'value' => 'ML',
        ),
        134 => 
        array (
          'key' => 'Malta',
          'value' => 'MT',
        ),
        135 => 
        array (
          'key' => 'Marshall Islands',
          'value' => 'MH',
        ),
        136 => 
        array (
          'key' => 'Martinique',
          'value' => 'MQ',
        ),
        137 => 
        array (
          'key' => 'Mauritania',
          'value' => 'MR',
        ),
        138 => 
        array (
          'key' => 'Mauritius',
          'value' => 'MU',
        ),
        139 => 
        array (
          'key' => 'Mayotte',
          'value' => 'YT',
        ),
        140 => 
        array (
          'key' => 'Mexico',
          'value' => 'MX',
        ),
        141 => 
        array (
          'key' => 'Micronesia',
          'value' => 'FM',
        ),
        142 => 
        array (
          'key' => 'Moldova',
          'value' => 'MD',
        ),
        143 => 
        array (
          'key' => 'Monaco',
          'value' => 'MC',
        ),
        144 => 
        array (
          'key' => 'Mongolia',
          'value' => 'MN',
        ),
        145 => 
        array (
          'key' => 'Montenegro',
          'value' => 'ME',
        ),
        146 => 
        array (
          'key' => 'Montserrat',
          'value' => 'MS',
        ),
        147 => 
        array (
          'key' => 'Morocco',
          'value' => 'MA',
        ),
        148 => 
        array (
          'key' => 'Mozambique',
          'value' => 'MZ',
        ),
        149 => 
        array (
          'key' => 'Myanmar (Burma)',
          'value' => 'MM',
        ),
        150 => 
        array (
          'key' => 'Namibia',
          'value' => 'NA',
        ),
        151 => 
        array (
          'key' => 'Nauru',
          'value' => 'NR',
        ),
        152 => 
        array (
          'key' => 'Nepal',
          'value' => 'NP',
        ),
        153 => 
        array (
          'key' => 'Netherlands',
          'value' => 'NL',
        ),
        154 => 
        array (
          'key' => 'New Caledonia',
          'value' => 'NC',
        ),
        155 => 
        array (
          'key' => 'New Zealand',
          'value' => 'NZ',
        ),
        156 => 
        array (
          'key' => 'Nicaragua',
          'value' => 'NI',
        ),
        157 => 
        array (
          'key' => 'Niger',
          'value' => 'NE',
        ),
        158 => 
        array (
          'key' => 'Nigeria',
          'value' => 'NG',
        ),
        159 => 
        array (
          'key' => 'Niue',
          'value' => 'NU',
        ),
        160 => 
        array (
          'key' => 'Norfolk Island',
          'value' => 'NF',
        ),
        161 => 
        array (
          'key' => 'North Korea',
          'value' => 'KP',
        ),
        162 => 
        array (
          'key' => 'North Macedonia',
          'value' => 'MK',
        ),
        163 => 
        array (
          'key' => 'Northern Mariana Islands',
          'value' => 'MP',
        ),
        164 => 
        array (
          'key' => 'Norway',
          'value' => 'NO',
        ),
        165 => 
        array (
          'key' => 'Oman',
          'value' => 'OM',
        ),
        166 => 
        array (
          'key' => 'Pakistan',
          'value' => 'PK',
        ),
        167 => 
        array (
          'key' => 'Palau',
          'value' => 'PW',
        ),
        168 => 
        array (
          'key' => 'Palestinian Territories',
          'value' => 'PS',
        ),
        169 => 
        array (
          'key' => 'Panama',
          'value' => 'PA',
        ),
        170 => 
        array (
          'key' => 'Papua New Guinea',
          'value' => 'PG',
        ),
        171 => 
        array (
          'key' => 'Paraguay',
          'value' => 'PY',
        ),
        172 => 
        array (
          'key' => 'Peru',
          'value' => 'PE',
        ),
        173 => 
        array (
          'key' => 'Philippines',
          'value' => 'PH',
        ),
        174 => 
        array (
          'key' => 'Pitcairn Islands',
          'value' => 'PN',
        ),
        175 => 
        array (
          'key' => 'Poland',
          'value' => 'PL',
        ),
        176 => 
        array (
          'key' => 'Portugal',
          'value' => 'PT',
        ),
        177 => 
        array (
          'key' => 'Puerto Rico',
          'value' => 'PR',
        ),
        178 => 
        array (
          'key' => 'Qatar',
          'value' => 'QA',
        ),
        179 => 
        array (
          'key' => 'Romania',
          'value' => 'RO',
        ),
        180 => 
        array (
          'key' => 'Russia',
          'value' => 'RU',
        ),
        181 => 
        array (
          'key' => 'Rwanda',
          'value' => 'RW',
        ),
        182 => 
        array (
          'key' => 'Réunion',
          'value' => 'RE',
        ),
        183 => 
        array (
          'key' => 'Samoa',
          'value' => 'WS',
        ),
        184 => 
        array (
          'key' => 'San Marino',
          'value' => 'SM',
        ),
        185 => 
        array (
          'key' => 'Saudi Arabia',
          'value' => 'SA',
        ),
        186 => 
        array (
          'key' => 'Senegal',
          'value' => 'SN',
        ),
        187 => 
        array (
          'key' => 'Serbia',
          'value' => 'RS',
        ),
        188 => 
        array (
          'key' => 'Seychelles',
          'value' => 'SC',
        ),
        189 => 
        array (
          'key' => 'Sierra Leone',
          'value' => 'SL',
        ),
        190 => 
        array (
          'key' => 'Singapore',
          'value' => 'SG',
        ),
        191 => 
        array (
          'key' => 'Sint Maarten',
          'value' => 'SX',
        ),
        192 => 
        array (
          'key' => 'Slovakia',
          'value' => 'SK',
        ),
        193 => 
        array (
          'key' => 'Slovenia',
          'value' => 'SI',
        ),
        194 => 
        array (
          'key' => 'Solomon Islands',
          'value' => 'SB',
        ),
        195 => 
        array (
          'key' => 'Somalia',
          'value' => 'SO',
        ),
        196 => 
        array (
          'key' => 'South Africa',
          'value' => 'ZA',
        ),
        197 => 
        array (
          'key' => 'South Georgia & South Sandwich Islands',
          'value' => 'GS',
        ),
        198 => 
        array (
          'key' => 'South Korea',
          'value' => 'KR',
        ),
        199 => 
        array (
          'key' => 'South Sudan',
          'value' => 'SS',
        ),
        200 => 
        array (
          'key' => 'Spain',
          'value' => 'ES',
        ),
        201 => 
        array (
          'key' => 'Sri Lanka',
          'value' => 'LK',
        ),
        202 => 
        array (
          'key' => 'St. Barthélemy',
          'value' => 'BL',
        ),
        203 => 
        array (
          'key' => 'St. Helena',
          'value' => 'SH',
        ),
        204 => 
        array (
          'key' => 'St. Kitts & Nevis',
          'value' => 'KN',
        ),
        205 => 
        array (
          'key' => 'St. Lucia',
          'value' => 'LC',
        ),
        206 => 
        array (
          'key' => 'St. Martin',
          'value' => 'MF',
        ),
        207 => 
        array (
          'key' => 'St. Pierre & Miquelon',
          'value' => 'PM',
        ),
        208 => 
        array (
          'key' => 'St. Vincent & Grenadines',
          'value' => 'VC',
        ),
        209 => 
        array (
          'key' => 'Sudan',
          'value' => 'SD',
        ),
        210 => 
        array (
          'key' => 'Suriname',
          'value' => 'SR',
        ),
        211 => 
        array (
          'key' => 'Svalbard & Jan Mayen',
          'value' => 'SJ',
        ),
        212 => 
        array (
          'key' => 'Sweden',
          'value' => 'SE',
        ),
        213 => 
        array (
          'key' => 'Switzerland',
          'value' => 'CH',
        ),
        214 => 
        array (
          'key' => 'Syria',
          'value' => 'SY',
        ),
        215 => 
        array (
          'key' => 'São Tomé & Príncipe',
          'value' => 'ST',
        ),
        216 => 
        array (
          'key' => 'Taiwan',
          'value' => 'TW',
        ),
        217 => 
        array (
          'key' => 'Tajikistan',
          'value' => 'TJ',
        ),
        218 => 
        array (
          'key' => 'Tanzania',
          'value' => 'TZ',
        ),
        219 => 
        array (
          'key' => 'Thailand',
          'value' => 'TH',
        ),
        220 => 
        array (
          'key' => 'Timor-Leste',
          'value' => 'TL',
        ),
        221 => 
        array (
          'key' => 'Togo',
          'value' => 'TG',
        ),
        222 => 
        array (
          'key' => 'Tokelau',
          'value' => 'TK',
        ),
        223 => 
        array (
          'key' => 'Tonga',
          'value' => 'TO',
        ),
        224 => 
        array (
          'key' => 'Trinidad & Tobago',
          'value' => 'TT',
        ),
        225 => 
        array (
          'key' => 'Tunisia',
          'value' => 'TN',
        ),
        226 => 
        array (
          'key' => 'Turkey',
          'value' => 'TR',
        ),
        227 => 
        array (
          'key' => 'Turkmenistan',
          'value' => 'TM',
        ),
        228 => 
        array (
          'key' => 'Turks & Caicos Islands',
          'value' => 'TC',
        ),
        229 => 
        array (
          'key' => 'Tuvalu',
          'value' => 'TV',
        ),
        230 => 
        array (
          'key' => 'U.S. Outlying Islands',
          'value' => 'UM',
        ),
        231 => 
        array (
          'key' => 'U.S. Virgin Islands',
          'value' => 'VI',
        ),
        232 => 
        array (
          'key' => 'Uganda',
          'value' => 'UG',
        ),
        233 => 
        array (
          'key' => 'Ukraine',
          'value' => 'UA',
        ),
        234 => 
        array (
          'key' => 'United Arab Emirates',
          'value' => 'AE',
        ),
        235 => 
        array (
          'key' => 'United Kingdom',
          'value' => 'GB',
        ),
        236 => 
        array (
          'key' => 'United States',
          'value' => 'US',
        ),
        237 => 
        array (
          'key' => 'Uruguay',
          'value' => 'UY',
        ),
        238 => 
        array (
          'key' => 'Uzbekistan',
          'value' => 'UZ',
        ),
        239 => 
        array (
          'key' => 'Vanuatu',
          'value' => 'VU',
        ),
        240 => 
        array (
          'key' => 'Vatican City',
          'value' => 'VA',
        ),
        241 => 
        array (
          'key' => 'Venezuela',
          'value' => 'VE',
        ),
        242 => 
        array (
          'key' => 'Vietnam',
          'value' => 'VN',
        ),
        243 => 
        array (
          'key' => 'Wallis & Futuna',
          'value' => 'WF',
        ),
        244 => 
        array (
          'key' => 'Western Sahara',
          'value' => 'EH',
        ),
        245 => 
        array (
          'key' => 'Yemen',
          'value' => 'YE',
        ),
        246 => 
        array (
          'key' => 'Zambia',
          'value' => 'ZM',
        ),
        247 => 
        array (
          'key' => 'Zimbabwe',
          'value' => 'ZW',
        ),
        248 => 
        array (
          'key' => 'Åland Islands',
          'value' => 'AX',
        ),
      ),
       'width' => '',
       'defaultValue' => NULL,
       'optionsProviderClass' => NULL,
       'optionsProviderData' => NULL,
       'queryColumnType' => 'varchar',
       'columnType' => 'varchar',
       'columnLength' => 190,
       'dynamicOptions' => false,
       'defaultValueGenerator' => '',
       'restrictTo' => '',
    )),
    9 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Language::__set_state(array(
       'name' => 'LanguageSelect',
       'title' => 'Language',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'language',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'Afrikaans',
          'value' => 'af',
        ),
        1 => 
        array (
          'key' => 'Afrikaans (Namibia)',
          'value' => 'af_NA',
        ),
        2 => 
        array (
          'key' => 'Afrikaans (South Africa)',
          'value' => 'af_ZA',
        ),
        3 => 
        array (
          'key' => 'Aghem',
          'value' => 'agq',
        ),
        4 => 
        array (
          'key' => 'Aghem (Cameroon)',
          'value' => 'agq_CM',
        ),
        5 => 
        array (
          'key' => 'Akan',
          'value' => 'ak',
        ),
        6 => 
        array (
          'key' => 'Akan (Ghana)',
          'value' => 'ak_GH',
        ),
        7 => 
        array (
          'key' => 'Albanian',
          'value' => 'sq',
        ),
        8 => 
        array (
          'key' => 'Albanian (Albania)',
          'value' => 'sq_AL',
        ),
        9 => 
        array (
          'key' => 'Albanian (Kosovo)',
          'value' => 'sq_XK',
        ),
        10 => 
        array (
          'key' => 'Albanian (North Macedonia)',
          'value' => 'sq_MK',
        ),
        11 => 
        array (
          'key' => 'Amharic',
          'value' => 'am',
        ),
        12 => 
        array (
          'key' => 'Amharic (Ethiopia)',
          'value' => 'am_ET',
        ),
        13 => 
        array (
          'key' => 'Arabic',
          'value' => 'ar',
        ),
        14 => 
        array (
          'key' => 'Arabic (Algeria)',
          'value' => 'ar_DZ',
        ),
        15 => 
        array (
          'key' => 'Arabic (Bahrain)',
          'value' => 'ar_BH',
        ),
        16 => 
        array (
          'key' => 'Arabic (Chad)',
          'value' => 'ar_TD',
        ),
        17 => 
        array (
          'key' => 'Arabic (Comoros)',
          'value' => 'ar_KM',
        ),
        18 => 
        array (
          'key' => 'Arabic (Djibouti)',
          'value' => 'ar_DJ',
        ),
        19 => 
        array (
          'key' => 'Arabic (Egypt)',
          'value' => 'ar_EG',
        ),
        20 => 
        array (
          'key' => 'Arabic (Eritrea)',
          'value' => 'ar_ER',
        ),
        21 => 
        array (
          'key' => 'Arabic (Iraq)',
          'value' => 'ar_IQ',
        ),
        22 => 
        array (
          'key' => 'Arabic (Israel)',
          'value' => 'ar_IL',
        ),
        23 => 
        array (
          'key' => 'Arabic (Jordan)',
          'value' => 'ar_JO',
        ),
        24 => 
        array (
          'key' => 'Arabic (Kuwait)',
          'value' => 'ar_KW',
        ),
        25 => 
        array (
          'key' => 'Arabic (Lebanon)',
          'value' => 'ar_LB',
        ),
        26 => 
        array (
          'key' => 'Arabic (Libya)',
          'value' => 'ar_LY',
        ),
        27 => 
        array (
          'key' => 'Arabic (Mauritania)',
          'value' => 'ar_MR',
        ),
        28 => 
        array (
          'key' => 'Arabic (Morocco)',
          'value' => 'ar_MA',
        ),
        29 => 
        array (
          'key' => 'Arabic (Oman)',
          'value' => 'ar_OM',
        ),
        30 => 
        array (
          'key' => 'Arabic (Palestinian Territories)',
          'value' => 'ar_PS',
        ),
        31 => 
        array (
          'key' => 'Arabic (Qatar)',
          'value' => 'ar_QA',
        ),
        32 => 
        array (
          'key' => 'Arabic (Saudi Arabia)',
          'value' => 'ar_SA',
        ),
        33 => 
        array (
          'key' => 'Arabic (Somalia)',
          'value' => 'ar_SO',
        ),
        34 => 
        array (
          'key' => 'Arabic (South Sudan)',
          'value' => 'ar_SS',
        ),
        35 => 
        array (
          'key' => 'Arabic (Sudan)',
          'value' => 'ar_SD',
        ),
        36 => 
        array (
          'key' => 'Arabic (Syria)',
          'value' => 'ar_SY',
        ),
        37 => 
        array (
          'key' => 'Arabic (Tunisia)',
          'value' => 'ar_TN',
        ),
        38 => 
        array (
          'key' => 'Arabic (United Arab Emirates)',
          'value' => 'ar_AE',
        ),
        39 => 
        array (
          'key' => 'Arabic (Western Sahara)',
          'value' => 'ar_EH',
        ),
        40 => 
        array (
          'key' => 'Arabic (World)',
          'value' => 'ar_001',
        ),
        41 => 
        array (
          'key' => 'Arabic (Yemen)',
          'value' => 'ar_YE',
        ),
        42 => 
        array (
          'key' => 'Armenian',
          'value' => 'hy',
        ),
        43 => 
        array (
          'key' => 'Armenian (Armenia)',
          'value' => 'hy_AM',
        ),
        44 => 
        array (
          'key' => 'Assamese',
          'value' => 'as',
        ),
        45 => 
        array (
          'key' => 'Assamese (India)',
          'value' => 'as_IN',
        ),
        46 => 
        array (
          'key' => 'Asturian',
          'value' => 'ast',
        ),
        47 => 
        array (
          'key' => 'Asturian (Spain)',
          'value' => 'ast_ES',
        ),
        48 => 
        array (
          'key' => 'Asu',
          'value' => 'asa',
        ),
        49 => 
        array (
          'key' => 'Asu (Tanzania)',
          'value' => 'asa_TZ',
        ),
        50 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az',
        ),
        51 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az_Cyrl',
        ),
        52 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az_Latn',
        ),
        53 => 
        array (
          'key' => 'Azerbaijani (Azerbaijan)',
          'value' => 'az_Cyrl_AZ',
        ),
        54 => 
        array (
          'key' => 'Azerbaijani (Azerbaijan)',
          'value' => 'az_Latn_AZ',
        ),
        55 => 
        array (
          'key' => 'Bafia',
          'value' => 'ksf',
        ),
        56 => 
        array (
          'key' => 'Bafia (Cameroon)',
          'value' => 'ksf_CM',
        ),
        57 => 
        array (
          'key' => 'Bambara',
          'value' => 'bm',
        ),
        58 => 
        array (
          'key' => 'Bambara (Mali)',
          'value' => 'bm_ML',
        ),
        59 => 
        array (
          'key' => 'Bangla',
          'value' => 'bn',
        ),
        60 => 
        array (
          'key' => 'Bangla (Bangladesh)',
          'value' => 'bn_BD',
        ),
        61 => 
        array (
          'key' => 'Bangla (India)',
          'value' => 'bn_IN',
        ),
        62 => 
        array (
          'key' => 'Basaa',
          'value' => 'bas',
        ),
        63 => 
        array (
          'key' => 'Basaa (Cameroon)',
          'value' => 'bas_CM',
        ),
        64 => 
        array (
          'key' => 'Basque',
          'value' => 'eu',
        ),
        65 => 
        array (
          'key' => 'Basque (Spain)',
          'value' => 'eu_ES',
        ),
        66 => 
        array (
          'key' => 'Belarusian',
          'value' => 'be',
        ),
        67 => 
        array (
          'key' => 'Belarusian (Belarus)',
          'value' => 'be_BY',
        ),
        68 => 
        array (
          'key' => 'Bemba',
          'value' => 'bem',
        ),
        69 => 
        array (
          'key' => 'Bemba (Zambia)',
          'value' => 'bem_ZM',
        ),
        70 => 
        array (
          'key' => 'Bena',
          'value' => 'bez',
        ),
        71 => 
        array (
          'key' => 'Bena (Tanzania)',
          'value' => 'bez_TZ',
        ),
        72 => 
        array (
          'key' => 'Bodo',
          'value' => 'brx',
        ),
        73 => 
        array (
          'key' => 'Bodo (India)',
          'value' => 'brx_IN',
        ),
        74 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs',
        ),
        75 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs_Cyrl',
        ),
        76 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs_Latn',
        ),
        77 => 
        array (
          'key' => 'Bosnian (Bosnia & Herzegovina)',
          'value' => 'bs_Cyrl_BA',
        ),
        78 => 
        array (
          'key' => 'Bosnian (Bosnia & Herzegovina)',
          'value' => 'bs_Latn_BA',
        ),
        79 => 
        array (
          'key' => 'Breton',
          'value' => 'br',
        ),
        80 => 
        array (
          'key' => 'Breton (France)',
          'value' => 'br_FR',
        ),
        81 => 
        array (
          'key' => 'Bulgarian',
          'value' => 'bg',
        ),
        82 => 
        array (
          'key' => 'Bulgarian (Bulgaria)',
          'value' => 'bg_BG',
        ),
        83 => 
        array (
          'key' => 'Burmese',
          'value' => 'my',
        ),
        84 => 
        array (
          'key' => 'Burmese (Myanmar (Burma))',
          'value' => 'my_MM',
        ),
        85 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue',
        ),
        86 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue_Hans',
        ),
        87 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue_Hant',
        ),
        88 => 
        array (
          'key' => 'Cantonese (China)',
          'value' => 'yue_Hans_CN',
        ),
        89 => 
        array (
          'key' => 'Cantonese (Hong Kong SAR China)',
          'value' => 'yue_Hant_HK',
        ),
        90 => 
        array (
          'key' => 'Catalan',
          'value' => 'ca',
        ),
        91 => 
        array (
          'key' => 'Catalan (Andorra)',
          'value' => 'ca_AD',
        ),
        92 => 
        array (
          'key' => 'Catalan (France)',
          'value' => 'ca_FR',
        ),
        93 => 
        array (
          'key' => 'Catalan (Italy)',
          'value' => 'ca_IT',
        ),
        94 => 
        array (
          'key' => 'Catalan (Spain)',
          'value' => 'ca_ES',
        ),
        95 => 
        array (
          'key' => 'Cebuano',
          'value' => 'ceb',
        ),
        96 => 
        array (
          'key' => 'Cebuano (Philippines)',
          'value' => 'ceb_PH',
        ),
        97 => 
        array (
          'key' => 'Central Atlas Tamazight',
          'value' => 'tzm',
        ),
        98 => 
        array (
          'key' => 'Central Atlas Tamazight (Morocco)',
          'value' => 'tzm_MA',
        ),
        99 => 
        array (
          'key' => 'Central Kurdish',
          'value' => 'ckb',
        ),
        100 => 
        array (
          'key' => 'Central Kurdish (Iran)',
          'value' => 'ckb_IR',
        ),
        101 => 
        array (
          'key' => 'Central Kurdish (Iraq)',
          'value' => 'ckb_IQ',
        ),
        102 => 
        array (
          'key' => 'Chakma',
          'value' => 'ccp',
        ),
        103 => 
        array (
          'key' => 'Chakma (Bangladesh)',
          'value' => 'ccp_BD',
        ),
        104 => 
        array (
          'key' => 'Chakma (India)',
          'value' => 'ccp_IN',
        ),
        105 => 
        array (
          'key' => 'Chechen',
          'value' => 'ce',
        ),
        106 => 
        array (
          'key' => 'Chechen (Russia)',
          'value' => 'ce_RU',
        ),
        107 => 
        array (
          'key' => 'Cherokee',
          'value' => 'chr',
        ),
        108 => 
        array (
          'key' => 'Cherokee (United States)',
          'value' => 'chr_US',
        ),
        109 => 
        array (
          'key' => 'Chiga',
          'value' => 'cgg',
        ),
        110 => 
        array (
          'key' => 'Chiga (Uganda)',
          'value' => 'cgg_UG',
        ),
        111 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh',
        ),
        112 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh_Hans',
        ),
        113 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh_Hant',
        ),
        114 => 
        array (
          'key' => 'Chinese (China)',
          'value' => 'zh_Hans_CN',
        ),
        115 => 
        array (
          'key' => 'Chinese (Hong Kong SAR China)',
          'value' => 'zh_Hans_HK',
        ),
        116 => 
        array (
          'key' => 'Chinese (Hong Kong SAR China)',
          'value' => 'zh_Hant_HK',
        ),
        117 => 
        array (
          'key' => 'Chinese (Macao SAR China)',
          'value' => 'zh_Hans_MO',
        ),
        118 => 
        array (
          'key' => 'Chinese (Macao SAR China)',
          'value' => 'zh_Hant_MO',
        ),
        119 => 
        array (
          'key' => 'Chinese (Singapore)',
          'value' => 'zh_Hans_SG',
        ),
        120 => 
        array (
          'key' => 'Chinese (Taiwan)',
          'value' => 'zh_Hant_TW',
        ),
        121 => 
        array (
          'key' => 'Colognian',
          'value' => 'ksh',
        ),
        122 => 
        array (
          'key' => 'Colognian (Germany)',
          'value' => 'ksh_DE',
        ),
        123 => 
        array (
          'key' => 'Cornish',
          'value' => 'kw',
        ),
        124 => 
        array (
          'key' => 'Cornish (United Kingdom)',
          'value' => 'kw_GB',
        ),
        125 => 
        array (
          'key' => 'Croatian',
          'value' => 'hr',
        ),
        126 => 
        array (
          'key' => 'Croatian (Bosnia & Herzegovina)',
          'value' => 'hr_BA',
        ),
        127 => 
        array (
          'key' => 'Croatian (Croatia)',
          'value' => 'hr_HR',
        ),
        128 => 
        array (
          'key' => 'Czech',
          'value' => 'cs',
        ),
        129 => 
        array (
          'key' => 'Czech (Czechia)',
          'value' => 'cs_CZ',
        ),
        130 => 
        array (
          'key' => 'Danish',
          'value' => 'da',
        ),
        131 => 
        array (
          'key' => 'Danish (Denmark)',
          'value' => 'da_DK',
        ),
        132 => 
        array (
          'key' => 'Danish (Greenland)',
          'value' => 'da_GL',
        ),
        133 => 
        array (
          'key' => 'Duala',
          'value' => 'dua',
        ),
        134 => 
        array (
          'key' => 'Duala (Cameroon)',
          'value' => 'dua_CM',
        ),
        135 => 
        array (
          'key' => 'Dutch',
          'value' => 'nl',
        ),
        136 => 
        array (
          'key' => 'Dutch (Aruba)',
          'value' => 'nl_AW',
        ),
        137 => 
        array (
          'key' => 'Dutch (Belgium)',
          'value' => 'nl_BE',
        ),
        138 => 
        array (
          'key' => 'Dutch (Caribbean Netherlands)',
          'value' => 'nl_BQ',
        ),
        139 => 
        array (
          'key' => 'Dutch (Curaçao)',
          'value' => 'nl_CW',
        ),
        140 => 
        array (
          'key' => 'Dutch (Netherlands)',
          'value' => 'nl_NL',
        ),
        141 => 
        array (
          'key' => 'Dutch (Sint Maarten)',
          'value' => 'nl_SX',
        ),
        142 => 
        array (
          'key' => 'Dutch (Suriname)',
          'value' => 'nl_SR',
        ),
        143 => 
        array (
          'key' => 'Dzongkha',
          'value' => 'dz',
        ),
        144 => 
        array (
          'key' => 'Dzongkha (Bhutan)',
          'value' => 'dz_BT',
        ),
        145 => 
        array (
          'key' => 'Embu',
          'value' => 'ebu',
        ),
        146 => 
        array (
          'key' => 'Embu (Kenya)',
          'value' => 'ebu_KE',
        ),
        147 => 
        array (
          'key' => 'English',
          'value' => 'en',
        ),
        148 => 
        array (
          'key' => 'English (American Samoa)',
          'value' => 'en_AS',
        ),
        149 => 
        array (
          'key' => 'English (Anguilla)',
          'value' => 'en_AI',
        ),
        150 => 
        array (
          'key' => 'English (Antigua & Barbuda)',
          'value' => 'en_AG',
        ),
        151 => 
        array (
          'key' => 'English (Australia)',
          'value' => 'en_AU',
        ),
        152 => 
        array (
          'key' => 'English (Austria)',
          'value' => 'en_AT',
        ),
        153 => 
        array (
          'key' => 'English (Bahamas)',
          'value' => 'en_BS',
        ),
        154 => 
        array (
          'key' => 'English (Barbados)',
          'value' => 'en_BB',
        ),
        155 => 
        array (
          'key' => 'English (Belgium)',
          'value' => 'en_BE',
        ),
        156 => 
        array (
          'key' => 'English (Belize)',
          'value' => 'en_BZ',
        ),
        157 => 
        array (
          'key' => 'English (Bermuda)',
          'value' => 'en_BM',
        ),
        158 => 
        array (
          'key' => 'English (Botswana)',
          'value' => 'en_BW',
        ),
        159 => 
        array (
          'key' => 'English (British Indian Ocean Territory)',
          'value' => 'en_IO',
        ),
        160 => 
        array (
          'key' => 'English (British Virgin Islands)',
          'value' => 'en_VG',
        ),
        161 => 
        array (
          'key' => 'English (Burundi)',
          'value' => 'en_BI',
        ),
        162 => 
        array (
          'key' => 'English (Cameroon)',
          'value' => 'en_CM',
        ),
        163 => 
        array (
          'key' => 'English (Canada)',
          'value' => 'en_CA',
        ),
        164 => 
        array (
          'key' => 'English (Cayman Islands)',
          'value' => 'en_KY',
        ),
        165 => 
        array (
          'key' => 'English (Christmas Island)',
          'value' => 'en_CX',
        ),
        166 => 
        array (
          'key' => 'English (Cocos (Keeling) Islands)',
          'value' => 'en_CC',
        ),
        167 => 
        array (
          'key' => 'English (Cook Islands)',
          'value' => 'en_CK',
        ),
        168 => 
        array (
          'key' => 'English (Cyprus)',
          'value' => 'en_CY',
        ),
        169 => 
        array (
          'key' => 'English (Denmark)',
          'value' => 'en_DK',
        ),
        170 => 
        array (
          'key' => 'English (Diego Garcia)',
          'value' => 'en_DG',
        ),
        171 => 
        array (
          'key' => 'English (Dominica)',
          'value' => 'en_DM',
        ),
        172 => 
        array (
          'key' => 'English (Eritrea)',
          'value' => 'en_ER',
        ),
        173 => 
        array (
          'key' => 'English (Eswatini)',
          'value' => 'en_SZ',
        ),
        174 => 
        array (
          'key' => 'English (Europe)',
          'value' => 'en_150',
        ),
        175 => 
        array (
          'key' => 'English (Falkland Islands)',
          'value' => 'en_FK',
        ),
        176 => 
        array (
          'key' => 'English (Fiji)',
          'value' => 'en_FJ',
        ),
        177 => 
        array (
          'key' => 'English (Finland)',
          'value' => 'en_FI',
        ),
        178 => 
        array (
          'key' => 'English (Gambia)',
          'value' => 'en_GM',
        ),
        179 => 
        array (
          'key' => 'English (Germany)',
          'value' => 'en_DE',
        ),
        180 => 
        array (
          'key' => 'English (Ghana)',
          'value' => 'en_GH',
        ),
        181 => 
        array (
          'key' => 'English (Gibraltar)',
          'value' => 'en_GI',
        ),
        182 => 
        array (
          'key' => 'English (Grenada)',
          'value' => 'en_GD',
        ),
        183 => 
        array (
          'key' => 'English (Guam)',
          'value' => 'en_GU',
        ),
        184 => 
        array (
          'key' => 'English (Guernsey)',
          'value' => 'en_GG',
        ),
        185 => 
        array (
          'key' => 'English (Guyana)',
          'value' => 'en_GY',
        ),
        186 => 
        array (
          'key' => 'English (Hong Kong SAR China)',
          'value' => 'en_HK',
        ),
        187 => 
        array (
          'key' => 'English (India)',
          'value' => 'en_IN',
        ),
        188 => 
        array (
          'key' => 'English (Ireland)',
          'value' => 'en_IE',
        ),
        189 => 
        array (
          'key' => 'English (Isle of Man)',
          'value' => 'en_IM',
        ),
        190 => 
        array (
          'key' => 'English (Israel)',
          'value' => 'en_IL',
        ),
        191 => 
        array (
          'key' => 'English (Jamaica)',
          'value' => 'en_JM',
        ),
        192 => 
        array (
          'key' => 'English (Jersey)',
          'value' => 'en_JE',
        ),
        193 => 
        array (
          'key' => 'English (Kenya)',
          'value' => 'en_KE',
        ),
        194 => 
        array (
          'key' => 'English (Kiribati)',
          'value' => 'en_KI',
        ),
        195 => 
        array (
          'key' => 'English (Lesotho)',
          'value' => 'en_LS',
        ),
        196 => 
        array (
          'key' => 'English (Liberia)',
          'value' => 'en_LR',
        ),
        197 => 
        array (
          'key' => 'English (Macao SAR China)',
          'value' => 'en_MO',
        ),
        198 => 
        array (
          'key' => 'English (Madagascar)',
          'value' => 'en_MG',
        ),
        199 => 
        array (
          'key' => 'English (Malawi)',
          'value' => 'en_MW',
        ),
        200 => 
        array (
          'key' => 'English (Malaysia)',
          'value' => 'en_MY',
        ),
        201 => 
        array (
          'key' => 'English (Malta)',
          'value' => 'en_MT',
        ),
        202 => 
        array (
          'key' => 'English (Marshall Islands)',
          'value' => 'en_MH',
        ),
        203 => 
        array (
          'key' => 'English (Mauritius)',
          'value' => 'en_MU',
        ),
        204 => 
        array (
          'key' => 'English (Micronesia)',
          'value' => 'en_FM',
        ),
        205 => 
        array (
          'key' => 'English (Montserrat)',
          'value' => 'en_MS',
        ),
        206 => 
        array (
          'key' => 'English (Namibia)',
          'value' => 'en_NA',
        ),
        207 => 
        array (
          'key' => 'English (Nauru)',
          'value' => 'en_NR',
        ),
        208 => 
        array (
          'key' => 'English (Netherlands)',
          'value' => 'en_NL',
        ),
        209 => 
        array (
          'key' => 'English (New Zealand)',
          'value' => 'en_NZ',
        ),
        210 => 
        array (
          'key' => 'English (Nigeria)',
          'value' => 'en_NG',
        ),
        211 => 
        array (
          'key' => 'English (Niue)',
          'value' => 'en_NU',
        ),
        212 => 
        array (
          'key' => 'English (Norfolk Island)',
          'value' => 'en_NF',
        ),
        213 => 
        array (
          'key' => 'English (Northern Mariana Islands)',
          'value' => 'en_MP',
        ),
        214 => 
        array (
          'key' => 'English (Pakistan)',
          'value' => 'en_PK',
        ),
        215 => 
        array (
          'key' => 'English (Palau)',
          'value' => 'en_PW',
        ),
        216 => 
        array (
          'key' => 'English (Papua New Guinea)',
          'value' => 'en_PG',
        ),
        217 => 
        array (
          'key' => 'English (Philippines)',
          'value' => 'en_PH',
        ),
        218 => 
        array (
          'key' => 'English (Pitcairn Islands)',
          'value' => 'en_PN',
        ),
        219 => 
        array (
          'key' => 'English (Puerto Rico)',
          'value' => 'en_PR',
        ),
        220 => 
        array (
          'key' => 'English (Rwanda)',
          'value' => 'en_RW',
        ),
        221 => 
        array (
          'key' => 'English (Samoa)',
          'value' => 'en_WS',
        ),
        222 => 
        array (
          'key' => 'English (Seychelles)',
          'value' => 'en_SC',
        ),
        223 => 
        array (
          'key' => 'English (Sierra Leone)',
          'value' => 'en_SL',
        ),
        224 => 
        array (
          'key' => 'English (Singapore)',
          'value' => 'en_SG',
        ),
        225 => 
        array (
          'key' => 'English (Sint Maarten)',
          'value' => 'en_SX',
        ),
        226 => 
        array (
          'key' => 'English (Slovenia)',
          'value' => 'en_SI',
        ),
        227 => 
        array (
          'key' => 'English (Solomon Islands)',
          'value' => 'en_SB',
        ),
        228 => 
        array (
          'key' => 'English (South Africa)',
          'value' => 'en_ZA',
        ),
        229 => 
        array (
          'key' => 'English (South Sudan)',
          'value' => 'en_SS',
        ),
        230 => 
        array (
          'key' => 'English (St. Helena)',
          'value' => 'en_SH',
        ),
        231 => 
        array (
          'key' => 'English (St. Kitts & Nevis)',
          'value' => 'en_KN',
        ),
        232 => 
        array (
          'key' => 'English (St. Lucia)',
          'value' => 'en_LC',
        ),
        233 => 
        array (
          'key' => 'English (St. Vincent & Grenadines)',
          'value' => 'en_VC',
        ),
        234 => 
        array (
          'key' => 'English (Sudan)',
          'value' => 'en_SD',
        ),
        235 => 
        array (
          'key' => 'English (Sweden)',
          'value' => 'en_SE',
        ),
        236 => 
        array (
          'key' => 'English (Switzerland)',
          'value' => 'en_CH',
        ),
        237 => 
        array (
          'key' => 'English (Tanzania)',
          'value' => 'en_TZ',
        ),
        238 => 
        array (
          'key' => 'English (Tokelau)',
          'value' => 'en_TK',
        ),
        239 => 
        array (
          'key' => 'English (Tonga)',
          'value' => 'en_TO',
        ),
        240 => 
        array (
          'key' => 'English (Trinidad & Tobago)',
          'value' => 'en_TT',
        ),
        241 => 
        array (
          'key' => 'English (Turks & Caicos Islands)',
          'value' => 'en_TC',
        ),
        242 => 
        array (
          'key' => 'English (Tuvalu)',
          'value' => 'en_TV',
        ),
        243 => 
        array (
          'key' => 'English (U.S. Outlying Islands)',
          'value' => 'en_UM',
        ),
        244 => 
        array (
          'key' => 'English (U.S. Virgin Islands)',
          'value' => 'en_VI',
        ),
        245 => 
        array (
          'key' => 'English (Uganda)',
          'value' => 'en_UG',
        ),
        246 => 
        array (
          'key' => 'English (United Arab Emirates)',
          'value' => 'en_AE',
        ),
        247 => 
        array (
          'key' => 'English (United Kingdom)',
          'value' => 'en_GB',
        ),
        248 => 
        array (
          'key' => 'English (United States)',
          'value' => 'en_US',
        ),
        249 => 
        array (
          'key' => 'English (United States)',
          'value' => 'en_US_POSIX',
        ),
        250 => 
        array (
          'key' => 'English (Vanuatu)',
          'value' => 'en_VU',
        ),
        251 => 
        array (
          'key' => 'English (World)',
          'value' => 'en_001',
        ),
        252 => 
        array (
          'key' => 'English (Zambia)',
          'value' => 'en_ZM',
        ),
        253 => 
        array (
          'key' => 'English (Zimbabwe)',
          'value' => 'en_ZW',
        ),
        254 => 
        array (
          'key' => 'Esperanto',
          'value' => 'eo',
        ),
        255 => 
        array (
          'key' => 'Esperanto (World)',
          'value' => 'eo_001',
        ),
        256 => 
        array (
          'key' => 'Estonian',
          'value' => 'et',
        ),
        257 => 
        array (
          'key' => 'Estonian (Estonia)',
          'value' => 'et_EE',
        ),
        258 => 
        array (
          'key' => 'Ewe',
          'value' => 'ee',
        ),
        259 => 
        array (
          'key' => 'Ewe (Ghana)',
          'value' => 'ee_GH',
        ),
        260 => 
        array (
          'key' => 'Ewe (Togo)',
          'value' => 'ee_TG',
        ),
        261 => 
        array (
          'key' => 'Ewondo',
          'value' => 'ewo',
        ),
        262 => 
        array (
          'key' => 'Ewondo (Cameroon)',
          'value' => 'ewo_CM',
        ),
        263 => 
        array (
          'key' => 'Faroese',
          'value' => 'fo',
        ),
        264 => 
        array (
          'key' => 'Faroese (Denmark)',
          'value' => 'fo_DK',
        ),
        265 => 
        array (
          'key' => 'Faroese (Faroe Islands)',
          'value' => 'fo_FO',
        ),
        266 => 
        array (
          'key' => 'Filipino',
          'value' => 'fil',
        ),
        267 => 
        array (
          'key' => 'Filipino (Philippines)',
          'value' => 'fil_PH',
        ),
        268 => 
        array (
          'key' => 'Finnish',
          'value' => 'fi',
        ),
        269 => 
        array (
          'key' => 'Finnish (Finland)',
          'value' => 'fi_FI',
        ),
        270 => 
        array (
          'key' => 'French',
          'value' => 'fr',
        ),
        271 => 
        array (
          'key' => 'French (Algeria)',
          'value' => 'fr_DZ',
        ),
        272 => 
        array (
          'key' => 'French (Belgium)',
          'value' => 'fr_BE',
        ),
        273 => 
        array (
          'key' => 'French (Benin)',
          'value' => 'fr_BJ',
        ),
        274 => 
        array (
          'key' => 'French (Burkina Faso)',
          'value' => 'fr_BF',
        ),
        275 => 
        array (
          'key' => 'French (Burundi)',
          'value' => 'fr_BI',
        ),
        276 => 
        array (
          'key' => 'French (Cameroon)',
          'value' => 'fr_CM',
        ),
        277 => 
        array (
          'key' => 'French (Canada)',
          'value' => 'fr_CA',
        ),
        278 => 
        array (
          'key' => 'French (Central African Republic)',
          'value' => 'fr_CF',
        ),
        279 => 
        array (
          'key' => 'French (Chad)',
          'value' => 'fr_TD',
        ),
        280 => 
        array (
          'key' => 'French (Comoros)',
          'value' => 'fr_KM',
        ),
        281 => 
        array (
          'key' => 'French (Congo - Brazzaville)',
          'value' => 'fr_CG',
        ),
        282 => 
        array (
          'key' => 'French (Congo - Kinshasa)',
          'value' => 'fr_CD',
        ),
        283 => 
        array (
          'key' => 'French (Côte d’Ivoire)',
          'value' => 'fr_CI',
        ),
        284 => 
        array (
          'key' => 'French (Djibouti)',
          'value' => 'fr_DJ',
        ),
        285 => 
        array (
          'key' => 'French (Equatorial Guinea)',
          'value' => 'fr_GQ',
        ),
        286 => 
        array (
          'key' => 'French (France)',
          'value' => 'fr_FR',
        ),
        287 => 
        array (
          'key' => 'French (French Guiana)',
          'value' => 'fr_GF',
        ),
        288 => 
        array (
          'key' => 'French (French Polynesia)',
          'value' => 'fr_PF',
        ),
        289 => 
        array (
          'key' => 'French (Gabon)',
          'value' => 'fr_GA',
        ),
        290 => 
        array (
          'key' => 'French (Guadeloupe)',
          'value' => 'fr_GP',
        ),
        291 => 
        array (
          'key' => 'French (Guinea)',
          'value' => 'fr_GN',
        ),
        292 => 
        array (
          'key' => 'French (Haiti)',
          'value' => 'fr_HT',
        ),
        293 => 
        array (
          'key' => 'French (Luxembourg)',
          'value' => 'fr_LU',
        ),
        294 => 
        array (
          'key' => 'French (Madagascar)',
          'value' => 'fr_MG',
        ),
        295 => 
        array (
          'key' => 'French (Mali)',
          'value' => 'fr_ML',
        ),
        296 => 
        array (
          'key' => 'French (Martinique)',
          'value' => 'fr_MQ',
        ),
        297 => 
        array (
          'key' => 'French (Mauritania)',
          'value' => 'fr_MR',
        ),
        298 => 
        array (
          'key' => 'French (Mauritius)',
          'value' => 'fr_MU',
        ),
        299 => 
        array (
          'key' => 'French (Mayotte)',
          'value' => 'fr_YT',
        ),
        300 => 
        array (
          'key' => 'French (Monaco)',
          'value' => 'fr_MC',
        ),
        301 => 
        array (
          'key' => 'French (Morocco)',
          'value' => 'fr_MA',
        ),
        302 => 
        array (
          'key' => 'French (New Caledonia)',
          'value' => 'fr_NC',
        ),
        303 => 
        array (
          'key' => 'French (Niger)',
          'value' => 'fr_NE',
        ),
        304 => 
        array (
          'key' => 'French (Rwanda)',
          'value' => 'fr_RW',
        ),
        305 => 
        array (
          'key' => 'French (Réunion)',
          'value' => 'fr_RE',
        ),
        306 => 
        array (
          'key' => 'French (Senegal)',
          'value' => 'fr_SN',
        ),
        307 => 
        array (
          'key' => 'French (Seychelles)',
          'value' => 'fr_SC',
        ),
        308 => 
        array (
          'key' => 'French (St. Barthélemy)',
          'value' => 'fr_BL',
        ),
        309 => 
        array (
          'key' => 'French (St. Martin)',
          'value' => 'fr_MF',
        ),
        310 => 
        array (
          'key' => 'French (St. Pierre & Miquelon)',
          'value' => 'fr_PM',
        ),
        311 => 
        array (
          'key' => 'French (Switzerland)',
          'value' => 'fr_CH',
        ),
        312 => 
        array (
          'key' => 'French (Syria)',
          'value' => 'fr_SY',
        ),
        313 => 
        array (
          'key' => 'French (Togo)',
          'value' => 'fr_TG',
        ),
        314 => 
        array (
          'key' => 'French (Tunisia)',
          'value' => 'fr_TN',
        ),
        315 => 
        array (
          'key' => 'French (Vanuatu)',
          'value' => 'fr_VU',
        ),
        316 => 
        array (
          'key' => 'French (Wallis & Futuna)',
          'value' => 'fr_WF',
        ),
        317 => 
        array (
          'key' => 'Friulian',
          'value' => 'fur',
        ),
        318 => 
        array (
          'key' => 'Friulian (Italy)',
          'value' => 'fur_IT',
        ),
        319 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff',
        ),
        320 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff_Adlm',
        ),
        321 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff_Latn',
        ),
        322 => 
        array (
          'key' => 'Fulah (Burkina Faso)',
          'value' => 'ff_Adlm_BF',
        ),
        323 => 
        array (
          'key' => 'Fulah (Burkina Faso)',
          'value' => 'ff_Latn_BF',
        ),
        324 => 
        array (
          'key' => 'Fulah (Cameroon)',
          'value' => 'ff_Adlm_CM',
        ),
        325 => 
        array (
          'key' => 'Fulah (Cameroon)',
          'value' => 'ff_Latn_CM',
        ),
        326 => 
        array (
          'key' => 'Fulah (Gambia)',
          'value' => 'ff_Adlm_GM',
        ),
        327 => 
        array (
          'key' => 'Fulah (Gambia)',
          'value' => 'ff_Latn_GM',
        ),
        328 => 
        array (
          'key' => 'Fulah (Ghana)',
          'value' => 'ff_Adlm_GH',
        ),
        329 => 
        array (
          'key' => 'Fulah (Ghana)',
          'value' => 'ff_Latn_GH',
        ),
        330 => 
        array (
          'key' => 'Fulah (Guinea)',
          'value' => 'ff_Adlm_GN',
        ),
        331 => 
        array (
          'key' => 'Fulah (Guinea)',
          'value' => 'ff_Latn_GN',
        ),
        332 => 
        array (
          'key' => 'Fulah (Guinea-Bissau)',
          'value' => 'ff_Adlm_GW',
        ),
        333 => 
        array (
          'key' => 'Fulah (Guinea-Bissau)',
          'value' => 'ff_Latn_GW',
        ),
        334 => 
        array (
          'key' => 'Fulah (Liberia)',
          'value' => 'ff_Adlm_LR',
        ),
        335 => 
        array (
          'key' => 'Fulah (Liberia)',
          'value' => 'ff_Latn_LR',
        ),
        336 => 
        array (
          'key' => 'Fulah (Mauritania)',
          'value' => 'ff_Adlm_MR',
        ),
        337 => 
        array (
          'key' => 'Fulah (Mauritania)',
          'value' => 'ff_Latn_MR',
        ),
        338 => 
        array (
          'key' => 'Fulah (Niger)',
          'value' => 'ff_Adlm_NE',
        ),
        339 => 
        array (
          'key' => 'Fulah (Niger)',
          'value' => 'ff_Latn_NE',
        ),
        340 => 
        array (
          'key' => 'Fulah (Nigeria)',
          'value' => 'ff_Adlm_NG',
        ),
        341 => 
        array (
          'key' => 'Fulah (Nigeria)',
          'value' => 'ff_Latn_NG',
        ),
        342 => 
        array (
          'key' => 'Fulah (Senegal)',
          'value' => 'ff_Adlm_SN',
        ),
        343 => 
        array (
          'key' => 'Fulah (Senegal)',
          'value' => 'ff_Latn_SN',
        ),
        344 => 
        array (
          'key' => 'Fulah (Sierra Leone)',
          'value' => 'ff_Adlm_SL',
        ),
        345 => 
        array (
          'key' => 'Fulah (Sierra Leone)',
          'value' => 'ff_Latn_SL',
        ),
        346 => 
        array (
          'key' => 'Galician',
          'value' => 'gl',
        ),
        347 => 
        array (
          'key' => 'Galician (Spain)',
          'value' => 'gl_ES',
        ),
        348 => 
        array (
          'key' => 'Ganda',
          'value' => 'lg',
        ),
        349 => 
        array (
          'key' => 'Ganda (Uganda)',
          'value' => 'lg_UG',
        ),
        350 => 
        array (
          'key' => 'Georgian',
          'value' => 'ka',
        ),
        351 => 
        array (
          'key' => 'Georgian (Georgia)',
          'value' => 'ka_GE',
        ),
        352 => 
        array (
          'key' => 'German',
          'value' => 'de',
        ),
        353 => 
        array (
          'key' => 'German (Austria)',
          'value' => 'de_AT',
        ),
        354 => 
        array (
          'key' => 'German (Belgium)',
          'value' => 'de_BE',
        ),
        355 => 
        array (
          'key' => 'German (Germany)',
          'value' => 'de_DE',
        ),
        356 => 
        array (
          'key' => 'German (Italy)',
          'value' => 'de_IT',
        ),
        357 => 
        array (
          'key' => 'German (Liechtenstein)',
          'value' => 'de_LI',
        ),
        358 => 
        array (
          'key' => 'German (Luxembourg)',
          'value' => 'de_LU',
        ),
        359 => 
        array (
          'key' => 'German (Switzerland)',
          'value' => 'de_CH',
        ),
        360 => 
        array (
          'key' => 'Greek',
          'value' => 'el',
        ),
        361 => 
        array (
          'key' => 'Greek (Cyprus)',
          'value' => 'el_CY',
        ),
        362 => 
        array (
          'key' => 'Greek (Greece)',
          'value' => 'el_GR',
        ),
        363 => 
        array (
          'key' => 'Gujarati',
          'value' => 'gu',
        ),
        364 => 
        array (
          'key' => 'Gujarati (India)',
          'value' => 'gu_IN',
        ),
        365 => 
        array (
          'key' => 'Gusii',
          'value' => 'guz',
        ),
        366 => 
        array (
          'key' => 'Gusii (Kenya)',
          'value' => 'guz_KE',
        ),
        367 => 
        array (
          'key' => 'Hausa',
          'value' => 'ha',
        ),
        368 => 
        array (
          'key' => 'Hausa (Ghana)',
          'value' => 'ha_GH',
        ),
        369 => 
        array (
          'key' => 'Hausa (Niger)',
          'value' => 'ha_NE',
        ),
        370 => 
        array (
          'key' => 'Hausa (Nigeria)',
          'value' => 'ha_NG',
        ),
        371 => 
        array (
          'key' => 'Hawaiian',
          'value' => 'haw',
        ),
        372 => 
        array (
          'key' => 'Hawaiian (United States)',
          'value' => 'haw_US',
        ),
        373 => 
        array (
          'key' => 'Hebrew',
          'value' => 'he',
        ),
        374 => 
        array (
          'key' => 'Hebrew (Israel)',
          'value' => 'he_IL',
        ),
        375 => 
        array (
          'key' => 'Hindi',
          'value' => 'hi',
        ),
        376 => 
        array (
          'key' => 'Hindi (India)',
          'value' => 'hi_IN',
        ),
        377 => 
        array (
          'key' => 'Hungarian',
          'value' => 'hu',
        ),
        378 => 
        array (
          'key' => 'Hungarian (Hungary)',
          'value' => 'hu_HU',
        ),
        379 => 
        array (
          'key' => 'Icelandic',
          'value' => 'is',
        ),
        380 => 
        array (
          'key' => 'Icelandic (Iceland)',
          'value' => 'is_IS',
        ),
        381 => 
        array (
          'key' => 'Igbo',
          'value' => 'ig',
        ),
        382 => 
        array (
          'key' => 'Igbo (Nigeria)',
          'value' => 'ig_NG',
        ),
        383 => 
        array (
          'key' => 'Inari Sami',
          'value' => 'smn',
        ),
        384 => 
        array (
          'key' => 'Inari Sami (Finland)',
          'value' => 'smn_FI',
        ),
        385 => 
        array (
          'key' => 'Indonesian',
          'value' => 'id',
        ),
        386 => 
        array (
          'key' => 'Indonesian (Indonesia)',
          'value' => 'id_ID',
        ),
        387 => 
        array (
          'key' => 'Interlingua',
          'value' => 'ia',
        ),
        388 => 
        array (
          'key' => 'Interlingua (World)',
          'value' => 'ia_001',
        ),
        389 => 
        array (
          'key' => 'Irish',
          'value' => 'ga',
        ),
        390 => 
        array (
          'key' => 'Irish (Ireland)',
          'value' => 'ga_IE',
        ),
        391 => 
        array (
          'key' => 'Irish (United Kingdom)',
          'value' => 'ga_GB',
        ),
        392 => 
        array (
          'key' => 'Italian',
          'value' => 'it',
        ),
        393 => 
        array (
          'key' => 'Italian (Italy)',
          'value' => 'it_IT',
        ),
        394 => 
        array (
          'key' => 'Italian (San Marino)',
          'value' => 'it_SM',
        ),
        395 => 
        array (
          'key' => 'Italian (Switzerland)',
          'value' => 'it_CH',
        ),
        396 => 
        array (
          'key' => 'Italian (Vatican City)',
          'value' => 'it_VA',
        ),
        397 => 
        array (
          'key' => 'Japanese',
          'value' => 'ja',
        ),
        398 => 
        array (
          'key' => 'Japanese (Japan)',
          'value' => 'ja_JP',
        ),
        399 => 
        array (
          'key' => 'Javanese',
          'value' => 'jv',
        ),
        400 => 
        array (
          'key' => 'Javanese (Indonesia)',
          'value' => 'jv_ID',
        ),
        401 => 
        array (
          'key' => 'Jola-Fonyi',
          'value' => 'dyo',
        ),
        402 => 
        array (
          'key' => 'Jola-Fonyi (Senegal)',
          'value' => 'dyo_SN',
        ),
        403 => 
        array (
          'key' => 'Kabuverdianu',
          'value' => 'kea',
        ),
        404 => 
        array (
          'key' => 'Kabuverdianu (Cape Verde)',
          'value' => 'kea_CV',
        ),
        405 => 
        array (
          'key' => 'Kabyle',
          'value' => 'kab',
        ),
        406 => 
        array (
          'key' => 'Kabyle (Algeria)',
          'value' => 'kab_DZ',
        ),
        407 => 
        array (
          'key' => 'Kako',
          'value' => 'kkj',
        ),
        408 => 
        array (
          'key' => 'Kako (Cameroon)',
          'value' => 'kkj_CM',
        ),
        409 => 
        array (
          'key' => 'Kalaallisut',
          'value' => 'kl',
        ),
        410 => 
        array (
          'key' => 'Kalaallisut (Greenland)',
          'value' => 'kl_GL',
        ),
        411 => 
        array (
          'key' => 'Kalenjin',
          'value' => 'kln',
        ),
        412 => 
        array (
          'key' => 'Kalenjin (Kenya)',
          'value' => 'kln_KE',
        ),
        413 => 
        array (
          'key' => 'Kamba',
          'value' => 'kam',
        ),
        414 => 
        array (
          'key' => 'Kamba (Kenya)',
          'value' => 'kam_KE',
        ),
        415 => 
        array (
          'key' => 'Kannada',
          'value' => 'kn',
        ),
        416 => 
        array (
          'key' => 'Kannada (India)',
          'value' => 'kn_IN',
        ),
        417 => 
        array (
          'key' => 'Kashmiri',
          'value' => 'ks',
        ),
        418 => 
        array (
          'key' => 'Kashmiri',
          'value' => 'ks_Arab',
        ),
        419 => 
        array (
          'key' => 'Kashmiri (India)',
          'value' => 'ks_Arab_IN',
        ),
        420 => 
        array (
          'key' => 'Kazakh',
          'value' => 'kk',
        ),
        421 => 
        array (
          'key' => 'Kazakh (Kazakhstan)',
          'value' => 'kk_KZ',
        ),
        422 => 
        array (
          'key' => 'Khmer',
          'value' => 'km',
        ),
        423 => 
        array (
          'key' => 'Khmer (Cambodia)',
          'value' => 'km_KH',
        ),
        424 => 
        array (
          'key' => 'Kikuyu',
          'value' => 'ki',
        ),
        425 => 
        array (
          'key' => 'Kikuyu (Kenya)',
          'value' => 'ki_KE',
        ),
        426 => 
        array (
          'key' => 'Kinyarwanda',
          'value' => 'rw',
        ),
        427 => 
        array (
          'key' => 'Kinyarwanda (Rwanda)',
          'value' => 'rw_RW',
        ),
        428 => 
        array (
          'key' => 'Konkani',
          'value' => 'kok',
        ),
        429 => 
        array (
          'key' => 'Konkani (India)',
          'value' => 'kok_IN',
        ),
        430 => 
        array (
          'key' => 'Korean',
          'value' => 'ko',
        ),
        431 => 
        array (
          'key' => 'Korean (North Korea)',
          'value' => 'ko_KP',
        ),
        432 => 
        array (
          'key' => 'Korean (South Korea)',
          'value' => 'ko_KR',
        ),
        433 => 
        array (
          'key' => 'Koyra Chiini',
          'value' => 'khq',
        ),
        434 => 
        array (
          'key' => 'Koyra Chiini (Mali)',
          'value' => 'khq_ML',
        ),
        435 => 
        array (
          'key' => 'Koyraboro Senni',
          'value' => 'ses',
        ),
        436 => 
        array (
          'key' => 'Koyraboro Senni (Mali)',
          'value' => 'ses_ML',
        ),
        437 => 
        array (
          'key' => 'Kurdish',
          'value' => 'ku',
        ),
        438 => 
        array (
          'key' => 'Kurdish (Turkey)',
          'value' => 'ku_TR',
        ),
        439 => 
        array (
          'key' => 'Kwasio',
          'value' => 'nmg',
        ),
        440 => 
        array (
          'key' => 'Kwasio (Cameroon)',
          'value' => 'nmg_CM',
        ),
        441 => 
        array (
          'key' => 'Kyrgyz',
          'value' => 'ky',
        ),
        442 => 
        array (
          'key' => 'Kyrgyz (Kyrgyzstan)',
          'value' => 'ky_KG',
        ),
        443 => 
        array (
          'key' => 'Lakota',
          'value' => 'lkt',
        ),
        444 => 
        array (
          'key' => 'Lakota (United States)',
          'value' => 'lkt_US',
        ),
        445 => 
        array (
          'key' => 'Langi',
          'value' => 'lag',
        ),
        446 => 
        array (
          'key' => 'Langi (Tanzania)',
          'value' => 'lag_TZ',
        ),
        447 => 
        array (
          'key' => 'Lao',
          'value' => 'lo',
        ),
        448 => 
        array (
          'key' => 'Lao (Laos)',
          'value' => 'lo_LA',
        ),
        449 => 
        array (
          'key' => 'Latvian',
          'value' => 'lv',
        ),
        450 => 
        array (
          'key' => 'Latvian (Latvia)',
          'value' => 'lv_LV',
        ),
        451 => 
        array (
          'key' => 'Lingala',
          'value' => 'ln',
        ),
        452 => 
        array (
          'key' => 'Lingala (Angola)',
          'value' => 'ln_AO',
        ),
        453 => 
        array (
          'key' => 'Lingala (Central African Republic)',
          'value' => 'ln_CF',
        ),
        454 => 
        array (
          'key' => 'Lingala (Congo - Brazzaville)',
          'value' => 'ln_CG',
        ),
        455 => 
        array (
          'key' => 'Lingala (Congo - Kinshasa)',
          'value' => 'ln_CD',
        ),
        456 => 
        array (
          'key' => 'Lithuanian',
          'value' => 'lt',
        ),
        457 => 
        array (
          'key' => 'Lithuanian (Lithuania)',
          'value' => 'lt_LT',
        ),
        458 => 
        array (
          'key' => 'Low German',
          'value' => 'nds',
        ),
        459 => 
        array (
          'key' => 'Low German (Germany)',
          'value' => 'nds_DE',
        ),
        460 => 
        array (
          'key' => 'Low German (Netherlands)',
          'value' => 'nds_NL',
        ),
        461 => 
        array (
          'key' => 'Lower Sorbian',
          'value' => 'dsb',
        ),
        462 => 
        array (
          'key' => 'Lower Sorbian (Germany)',
          'value' => 'dsb_DE',
        ),
        463 => 
        array (
          'key' => 'Luba-Katanga',
          'value' => 'lu',
        ),
        464 => 
        array (
          'key' => 'Luba-Katanga (Congo - Kinshasa)',
          'value' => 'lu_CD',
        ),
        465 => 
        array (
          'key' => 'Luo',
          'value' => 'luo',
        ),
        466 => 
        array (
          'key' => 'Luo (Kenya)',
          'value' => 'luo_KE',
        ),
        467 => 
        array (
          'key' => 'Luxembourgish',
          'value' => 'lb',
        ),
        468 => 
        array (
          'key' => 'Luxembourgish (Luxembourg)',
          'value' => 'lb_LU',
        ),
        469 => 
        array (
          'key' => 'Luyia',
          'value' => 'luy',
        ),
        470 => 
        array (
          'key' => 'Luyia (Kenya)',
          'value' => 'luy_KE',
        ),
        471 => 
        array (
          'key' => 'Macedonian',
          'value' => 'mk',
        ),
        472 => 
        array (
          'key' => 'Macedonian (North Macedonia)',
          'value' => 'mk_MK',
        ),
        473 => 
        array (
          'key' => 'Machame',
          'value' => 'jmc',
        ),
        474 => 
        array (
          'key' => 'Machame (Tanzania)',
          'value' => 'jmc_TZ',
        ),
        475 => 
        array (
          'key' => 'Maithili',
          'value' => 'mai',
        ),
        476 => 
        array (
          'key' => 'Maithili (India)',
          'value' => 'mai_IN',
        ),
        477 => 
        array (
          'key' => 'Makhuwa-Meetto',
          'value' => 'mgh',
        ),
        478 => 
        array (
          'key' => 'Makhuwa-Meetto (Mozambique)',
          'value' => 'mgh_MZ',
        ),
        479 => 
        array (
          'key' => 'Makonde',
          'value' => 'kde',
        ),
        480 => 
        array (
          'key' => 'Makonde (Tanzania)',
          'value' => 'kde_TZ',
        ),
        481 => 
        array (
          'key' => 'Malagasy',
          'value' => 'mg',
        ),
        482 => 
        array (
          'key' => 'Malagasy (Madagascar)',
          'value' => 'mg_MG',
        ),
        483 => 
        array (
          'key' => 'Malay',
          'value' => 'ms',
        ),
        484 => 
        array (
          'key' => 'Malay (Brunei)',
          'value' => 'ms_BN',
        ),
        485 => 
        array (
          'key' => 'Malay (Indonesia)',
          'value' => 'ms_ID',
        ),
        486 => 
        array (
          'key' => 'Malay (Malaysia)',
          'value' => 'ms_MY',
        ),
        487 => 
        array (
          'key' => 'Malay (Singapore)',
          'value' => 'ms_SG',
        ),
        488 => 
        array (
          'key' => 'Malayalam',
          'value' => 'ml',
        ),
        489 => 
        array (
          'key' => 'Malayalam (India)',
          'value' => 'ml_IN',
        ),
        490 => 
        array (
          'key' => 'Maltese',
          'value' => 'mt',
        ),
        491 => 
        array (
          'key' => 'Maltese (Malta)',
          'value' => 'mt_MT',
        ),
        492 => 
        array (
          'key' => 'Manipuri',
          'value' => 'mni',
        ),
        493 => 
        array (
          'key' => 'Manipuri',
          'value' => 'mni_Beng',
        ),
        494 => 
        array (
          'key' => 'Manipuri (India)',
          'value' => 'mni_Beng_IN',
        ),
        495 => 
        array (
          'key' => 'Manx',
          'value' => 'gv',
        ),
        496 => 
        array (
          'key' => 'Manx (Isle of Man)',
          'value' => 'gv_IM',
        ),
        497 => 
        array (
          'key' => 'Maori',
          'value' => 'mi',
        ),
        498 => 
        array (
          'key' => 'Maori (New Zealand)',
          'value' => 'mi_NZ',
        ),
        499 => 
        array (
          'key' => 'Marathi',
          'value' => 'mr',
        ),
        500 => 
        array (
          'key' => 'Marathi (India)',
          'value' => 'mr_IN',
        ),
        501 => 
        array (
          'key' => 'Masai',
          'value' => 'mas',
        ),
        502 => 
        array (
          'key' => 'Masai (Kenya)',
          'value' => 'mas_KE',
        ),
        503 => 
        array (
          'key' => 'Masai (Tanzania)',
          'value' => 'mas_TZ',
        ),
        504 => 
        array (
          'key' => 'Mazanderani',
          'value' => 'mzn',
        ),
        505 => 
        array (
          'key' => 'Mazanderani (Iran)',
          'value' => 'mzn_IR',
        ),
        506 => 
        array (
          'key' => 'Meru',
          'value' => 'mer',
        ),
        507 => 
        array (
          'key' => 'Meru (Kenya)',
          'value' => 'mer_KE',
        ),
        508 => 
        array (
          'key' => 'Metaʼ',
          'value' => 'mgo',
        ),
        509 => 
        array (
          'key' => 'Metaʼ (Cameroon)',
          'value' => 'mgo_CM',
        ),
        510 => 
        array (
          'key' => 'Mongolian',
          'value' => 'mn',
        ),
        511 => 
        array (
          'key' => 'Mongolian (Mongolia)',
          'value' => 'mn_MN',
        ),
        512 => 
        array (
          'key' => 'Morisyen',
          'value' => 'mfe',
        ),
        513 => 
        array (
          'key' => 'Morisyen (Mauritius)',
          'value' => 'mfe_MU',
        ),
        514 => 
        array (
          'key' => 'Mundang',
          'value' => 'mua',
        ),
        515 => 
        array (
          'key' => 'Mundang (Cameroon)',
          'value' => 'mua_CM',
        ),
        516 => 
        array (
          'key' => 'Nama',
          'value' => 'naq',
        ),
        517 => 
        array (
          'key' => 'Nama (Namibia)',
          'value' => 'naq_NA',
        ),
        518 => 
        array (
          'key' => 'Nepali',
          'value' => 'ne',
        ),
        519 => 
        array (
          'key' => 'Nepali (India)',
          'value' => 'ne_IN',
        ),
        520 => 
        array (
          'key' => 'Nepali (Nepal)',
          'value' => 'ne_NP',
        ),
        521 => 
        array (
          'key' => 'Ngiemboon',
          'value' => 'nnh',
        ),
        522 => 
        array (
          'key' => 'Ngiemboon (Cameroon)',
          'value' => 'nnh_CM',
        ),
        523 => 
        array (
          'key' => 'Ngomba',
          'value' => 'jgo',
        ),
        524 => 
        array (
          'key' => 'Ngomba (Cameroon)',
          'value' => 'jgo_CM',
        ),
        525 => 
        array (
          'key' => 'Nigerian Pidgin',
          'value' => 'pcm',
        ),
        526 => 
        array (
          'key' => 'Nigerian Pidgin (Nigeria)',
          'value' => 'pcm_NG',
        ),
        527 => 
        array (
          'key' => 'North Ndebele',
          'value' => 'nd',
        ),
        528 => 
        array (
          'key' => 'North Ndebele (Zimbabwe)',
          'value' => 'nd_ZW',
        ),
        529 => 
        array (
          'key' => 'Northern Luri',
          'value' => 'lrc',
        ),
        530 => 
        array (
          'key' => 'Northern Luri (Iran)',
          'value' => 'lrc_IR',
        ),
        531 => 
        array (
          'key' => 'Northern Luri (Iraq)',
          'value' => 'lrc_IQ',
        ),
        532 => 
        array (
          'key' => 'Northern Sami',
          'value' => 'se',
        ),
        533 => 
        array (
          'key' => 'Northern Sami (Finland)',
          'value' => 'se_FI',
        ),
        534 => 
        array (
          'key' => 'Northern Sami (Norway)',
          'value' => 'se_NO',
        ),
        535 => 
        array (
          'key' => 'Northern Sami (Sweden)',
          'value' => 'se_SE',
        ),
        536 => 
        array (
          'key' => 'Norwegian Bokmål',
          'value' => 'nb',
        ),
        537 => 
        array (
          'key' => 'Norwegian Bokmål (Norway)',
          'value' => 'nb_NO',
        ),
        538 => 
        array (
          'key' => 'Norwegian Bokmål (Svalbard & Jan Mayen)',
          'value' => 'nb_SJ',
        ),
        539 => 
        array (
          'key' => 'Norwegian Nynorsk',
          'value' => 'nn',
        ),
        540 => 
        array (
          'key' => 'Norwegian Nynorsk (Norway)',
          'value' => 'nn_NO',
        ),
        541 => 
        array (
          'key' => 'Nuer',
          'value' => 'nus',
        ),
        542 => 
        array (
          'key' => 'Nuer (South Sudan)',
          'value' => 'nus_SS',
        ),
        543 => 
        array (
          'key' => 'Nyankole',
          'value' => 'nyn',
        ),
        544 => 
        array (
          'key' => 'Nyankole (Uganda)',
          'value' => 'nyn_UG',
        ),
        545 => 
        array (
          'key' => 'Odia',
          'value' => 'or',
        ),
        546 => 
        array (
          'key' => 'Odia (India)',
          'value' => 'or_IN',
        ),
        547 => 
        array (
          'key' => 'Oromo',
          'value' => 'om',
        ),
        548 => 
        array (
          'key' => 'Oromo (Ethiopia)',
          'value' => 'om_ET',
        ),
        549 => 
        array (
          'key' => 'Oromo (Kenya)',
          'value' => 'om_KE',
        ),
        550 => 
        array (
          'key' => 'Ossetic',
          'value' => 'os',
        ),
        551 => 
        array (
          'key' => 'Ossetic (Georgia)',
          'value' => 'os_GE',
        ),
        552 => 
        array (
          'key' => 'Ossetic (Russia)',
          'value' => 'os_RU',
        ),
        553 => 
        array (
          'key' => 'Pashto',
          'value' => 'ps',
        ),
        554 => 
        array (
          'key' => 'Pashto (Afghanistan)',
          'value' => 'ps_AF',
        ),
        555 => 
        array (
          'key' => 'Pashto (Pakistan)',
          'value' => 'ps_PK',
        ),
        556 => 
        array (
          'key' => 'Persian',
          'value' => 'fa',
        ),
        557 => 
        array (
          'key' => 'Persian (Afghanistan)',
          'value' => 'fa_AF',
        ),
        558 => 
        array (
          'key' => 'Persian (Iran)',
          'value' => 'fa_IR',
        ),
        559 => 
        array (
          'key' => 'Polish',
          'value' => 'pl',
        ),
        560 => 
        array (
          'key' => 'Polish (Poland)',
          'value' => 'pl_PL',
        ),
        561 => 
        array (
          'key' => 'Portuguese',
          'value' => 'pt',
        ),
        562 => 
        array (
          'key' => 'Portuguese (Angola)',
          'value' => 'pt_AO',
        ),
        563 => 
        array (
          'key' => 'Portuguese (Brazil)',
          'value' => 'pt_BR',
        ),
        564 => 
        array (
          'key' => 'Portuguese (Cape Verde)',
          'value' => 'pt_CV',
        ),
        565 => 
        array (
          'key' => 'Portuguese (Equatorial Guinea)',
          'value' => 'pt_GQ',
        ),
        566 => 
        array (
          'key' => 'Portuguese (Guinea-Bissau)',
          'value' => 'pt_GW',
        ),
        567 => 
        array (
          'key' => 'Portuguese (Luxembourg)',
          'value' => 'pt_LU',
        ),
        568 => 
        array (
          'key' => 'Portuguese (Macao SAR China)',
          'value' => 'pt_MO',
        ),
        569 => 
        array (
          'key' => 'Portuguese (Mozambique)',
          'value' => 'pt_MZ',
        ),
        570 => 
        array (
          'key' => 'Portuguese (Portugal)',
          'value' => 'pt_PT',
        ),
        571 => 
        array (
          'key' => 'Portuguese (Switzerland)',
          'value' => 'pt_CH',
        ),
        572 => 
        array (
          'key' => 'Portuguese (São Tomé & Príncipe)',
          'value' => 'pt_ST',
        ),
        573 => 
        array (
          'key' => 'Portuguese (Timor-Leste)',
          'value' => 'pt_TL',
        ),
        574 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa',
        ),
        575 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa_Arab',
        ),
        576 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa_Guru',
        ),
        577 => 
        array (
          'key' => 'Punjabi (India)',
          'value' => 'pa_Guru_IN',
        ),
        578 => 
        array (
          'key' => 'Punjabi (Pakistan)',
          'value' => 'pa_Arab_PK',
        ),
        579 => 
        array (
          'key' => 'Quechua',
          'value' => 'qu',
        ),
        580 => 
        array (
          'key' => 'Quechua (Bolivia)',
          'value' => 'qu_BO',
        ),
        581 => 
        array (
          'key' => 'Quechua (Ecuador)',
          'value' => 'qu_EC',
        ),
        582 => 
        array (
          'key' => 'Quechua (Peru)',
          'value' => 'qu_PE',
        ),
        583 => 
        array (
          'key' => 'Romanian',
          'value' => 'ro',
        ),
        584 => 
        array (
          'key' => 'Romanian (Moldova)',
          'value' => 'ro_MD',
        ),
        585 => 
        array (
          'key' => 'Romanian (Romania)',
          'value' => 'ro_RO',
        ),
        586 => 
        array (
          'key' => 'Romansh',
          'value' => 'rm',
        ),
        587 => 
        array (
          'key' => 'Romansh (Switzerland)',
          'value' => 'rm_CH',
        ),
        588 => 
        array (
          'key' => 'Rombo',
          'value' => 'rof',
        ),
        589 => 
        array (
          'key' => 'Rombo (Tanzania)',
          'value' => 'rof_TZ',
        ),
        590 => 
        array (
          'key' => 'Rundi',
          'value' => 'rn',
        ),
        591 => 
        array (
          'key' => 'Rundi (Burundi)',
          'value' => 'rn_BI',
        ),
        592 => 
        array (
          'key' => 'Russian',
          'value' => 'ru',
        ),
        593 => 
        array (
          'key' => 'Russian (Belarus)',
          'value' => 'ru_BY',
        ),
        594 => 
        array (
          'key' => 'Russian (Kazakhstan)',
          'value' => 'ru_KZ',
        ),
        595 => 
        array (
          'key' => 'Russian (Kyrgyzstan)',
          'value' => 'ru_KG',
        ),
        596 => 
        array (
          'key' => 'Russian (Moldova)',
          'value' => 'ru_MD',
        ),
        597 => 
        array (
          'key' => 'Russian (Russia)',
          'value' => 'ru_RU',
        ),
        598 => 
        array (
          'key' => 'Russian (Ukraine)',
          'value' => 'ru_UA',
        ),
        599 => 
        array (
          'key' => 'Rwa',
          'value' => 'rwk',
        ),
        600 => 
        array (
          'key' => 'Rwa (Tanzania)',
          'value' => 'rwk_TZ',
        ),
        601 => 
        array (
          'key' => 'Sakha',
          'value' => 'sah',
        ),
        602 => 
        array (
          'key' => 'Sakha (Russia)',
          'value' => 'sah_RU',
        ),
        603 => 
        array (
          'key' => 'Samburu',
          'value' => 'saq',
        ),
        604 => 
        array (
          'key' => 'Samburu (Kenya)',
          'value' => 'saq_KE',
        ),
        605 => 
        array (
          'key' => 'Sango',
          'value' => 'sg',
        ),
        606 => 
        array (
          'key' => 'Sango (Central African Republic)',
          'value' => 'sg_CF',
        ),
        607 => 
        array (
          'key' => 'Sangu',
          'value' => 'sbp',
        ),
        608 => 
        array (
          'key' => 'Sangu (Tanzania)',
          'value' => 'sbp_TZ',
        ),
        609 => 
        array (
          'key' => 'Santali',
          'value' => 'sat',
        ),
        610 => 
        array (
          'key' => 'Santali',
          'value' => 'sat_Olck',
        ),
        611 => 
        array (
          'key' => 'Santali (India)',
          'value' => 'sat_Olck_IN',
        ),
        612 => 
        array (
          'key' => 'Scottish Gaelic',
          'value' => 'gd',
        ),
        613 => 
        array (
          'key' => 'Scottish Gaelic (United Kingdom)',
          'value' => 'gd_GB',
        ),
        614 => 
        array (
          'key' => 'Sena',
          'value' => 'seh',
        ),
        615 => 
        array (
          'key' => 'Sena (Mozambique)',
          'value' => 'seh_MZ',
        ),
        616 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr',
        ),
        617 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr_Cyrl',
        ),
        618 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr_Latn',
        ),
        619 => 
        array (
          'key' => 'Serbian (Bosnia & Herzegovina)',
          'value' => 'sr_Cyrl_BA',
        ),
        620 => 
        array (
          'key' => 'Serbian (Bosnia & Herzegovina)',
          'value' => 'sr_Latn_BA',
        ),
        621 => 
        array (
          'key' => 'Serbian (Kosovo)',
          'value' => 'sr_Cyrl_XK',
        ),
        622 => 
        array (
          'key' => 'Serbian (Kosovo)',
          'value' => 'sr_Latn_XK',
        ),
        623 => 
        array (
          'key' => 'Serbian (Montenegro)',
          'value' => 'sr_Cyrl_ME',
        ),
        624 => 
        array (
          'key' => 'Serbian (Montenegro)',
          'value' => 'sr_Latn_ME',
        ),
        625 => 
        array (
          'key' => 'Serbian (Serbia)',
          'value' => 'sr_Cyrl_RS',
        ),
        626 => 
        array (
          'key' => 'Serbian (Serbia)',
          'value' => 'sr_Latn_RS',
        ),
        627 => 
        array (
          'key' => 'Shambala',
          'value' => 'ksb',
        ),
        628 => 
        array (
          'key' => 'Shambala (Tanzania)',
          'value' => 'ksb_TZ',
        ),
        629 => 
        array (
          'key' => 'Shona',
          'value' => 'sn',
        ),
        630 => 
        array (
          'key' => 'Shona (Zimbabwe)',
          'value' => 'sn_ZW',
        ),
        631 => 
        array (
          'key' => 'Sichuan Yi',
          'value' => 'ii',
        ),
        632 => 
        array (
          'key' => 'Sichuan Yi (China)',
          'value' => 'ii_CN',
        ),
        633 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd',
        ),
        634 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd_Arab',
        ),
        635 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd_Deva',
        ),
        636 => 
        array (
          'key' => 'Sindhi (India)',
          'value' => 'sd_Deva_IN',
        ),
        637 => 
        array (
          'key' => 'Sindhi (Pakistan)',
          'value' => 'sd_Arab_PK',
        ),
        638 => 
        array (
          'key' => 'Sinhala',
          'value' => 'si',
        ),
        639 => 
        array (
          'key' => 'Sinhala (Sri Lanka)',
          'value' => 'si_LK',
        ),
        640 => 
        array (
          'key' => 'Slovak',
          'value' => 'sk',
        ),
        641 => 
        array (
          'key' => 'Slovak (Slovakia)',
          'value' => 'sk_SK',
        ),
        642 => 
        array (
          'key' => 'Slovenian',
          'value' => 'sl',
        ),
        643 => 
        array (
          'key' => 'Slovenian (Slovenia)',
          'value' => 'sl_SI',
        ),
        644 => 
        array (
          'key' => 'Soga',
          'value' => 'xog',
        ),
        645 => 
        array (
          'key' => 'Soga (Uganda)',
          'value' => 'xog_UG',
        ),
        646 => 
        array (
          'key' => 'Somali',
          'value' => 'so',
        ),
        647 => 
        array (
          'key' => 'Somali (Djibouti)',
          'value' => 'so_DJ',
        ),
        648 => 
        array (
          'key' => 'Somali (Ethiopia)',
          'value' => 'so_ET',
        ),
        649 => 
        array (
          'key' => 'Somali (Kenya)',
          'value' => 'so_KE',
        ),
        650 => 
        array (
          'key' => 'Somali (Somalia)',
          'value' => 'so_SO',
        ),
        651 => 
        array (
          'key' => 'Spanish',
          'value' => 'es',
        ),
        652 => 
        array (
          'key' => 'Spanish (Argentina)',
          'value' => 'es_AR',
        ),
        653 => 
        array (
          'key' => 'Spanish (Belize)',
          'value' => 'es_BZ',
        ),
        654 => 
        array (
          'key' => 'Spanish (Bolivia)',
          'value' => 'es_BO',
        ),
        655 => 
        array (
          'key' => 'Spanish (Brazil)',
          'value' => 'es_BR',
        ),
        656 => 
        array (
          'key' => 'Spanish (Canary Islands)',
          'value' => 'es_IC',
        ),
        657 => 
        array (
          'key' => 'Spanish (Ceuta & Melilla)',
          'value' => 'es_EA',
        ),
        658 => 
        array (
          'key' => 'Spanish (Chile)',
          'value' => 'es_CL',
        ),
        659 => 
        array (
          'key' => 'Spanish (Colombia)',
          'value' => 'es_CO',
        ),
        660 => 
        array (
          'key' => 'Spanish (Costa Rica)',
          'value' => 'es_CR',
        ),
        661 => 
        array (
          'key' => 'Spanish (Cuba)',
          'value' => 'es_CU',
        ),
        662 => 
        array (
          'key' => 'Spanish (Dominican Republic)',
          'value' => 'es_DO',
        ),
        663 => 
        array (
          'key' => 'Spanish (Ecuador)',
          'value' => 'es_EC',
        ),
        664 => 
        array (
          'key' => 'Spanish (El Salvador)',
          'value' => 'es_SV',
        ),
        665 => 
        array (
          'key' => 'Spanish (Equatorial Guinea)',
          'value' => 'es_GQ',
        ),
        666 => 
        array (
          'key' => 'Spanish (Guatemala)',
          'value' => 'es_GT',
        ),
        667 => 
        array (
          'key' => 'Spanish (Honduras)',
          'value' => 'es_HN',
        ),
        668 => 
        array (
          'key' => 'Spanish (Latin America)',
          'value' => 'es_419',
        ),
        669 => 
        array (
          'key' => 'Spanish (Mexico)',
          'value' => 'es_MX',
        ),
        670 => 
        array (
          'key' => 'Spanish (Nicaragua)',
          'value' => 'es_NI',
        ),
        671 => 
        array (
          'key' => 'Spanish (Panama)',
          'value' => 'es_PA',
        ),
        672 => 
        array (
          'key' => 'Spanish (Paraguay)',
          'value' => 'es_PY',
        ),
        673 => 
        array (
          'key' => 'Spanish (Peru)',
          'value' => 'es_PE',
        ),
        674 => 
        array (
          'key' => 'Spanish (Philippines)',
          'value' => 'es_PH',
        ),
        675 => 
        array (
          'key' => 'Spanish (Puerto Rico)',
          'value' => 'es_PR',
        ),
        676 => 
        array (
          'key' => 'Spanish (Spain)',
          'value' => 'es_ES',
        ),
        677 => 
        array (
          'key' => 'Spanish (United States)',
          'value' => 'es_US',
        ),
        678 => 
        array (
          'key' => 'Spanish (Uruguay)',
          'value' => 'es_UY',
        ),
        679 => 
        array (
          'key' => 'Spanish (Venezuela)',
          'value' => 'es_VE',
        ),
        680 => 
        array (
          'key' => 'Standard Moroccan Tamazight',
          'value' => 'zgh',
        ),
        681 => 
        array (
          'key' => 'Standard Moroccan Tamazight (Morocco)',
          'value' => 'zgh_MA',
        ),
        682 => 
        array (
          'key' => 'Sundanese',
          'value' => 'su',
        ),
        683 => 
        array (
          'key' => 'Sundanese',
          'value' => 'su_Latn',
        ),
        684 => 
        array (
          'key' => 'Sundanese (Indonesia)',
          'value' => 'su_Latn_ID',
        ),
        685 => 
        array (
          'key' => 'Swahili',
          'value' => 'sw',
        ),
        686 => 
        array (
          'key' => 'Swahili (Congo - Kinshasa)',
          'value' => 'sw_CD',
        ),
        687 => 
        array (
          'key' => 'Swahili (Kenya)',
          'value' => 'sw_KE',
        ),
        688 => 
        array (
          'key' => 'Swahili (Tanzania)',
          'value' => 'sw_TZ',
        ),
        689 => 
        array (
          'key' => 'Swahili (Uganda)',
          'value' => 'sw_UG',
        ),
        690 => 
        array (
          'key' => 'Swedish',
          'value' => 'sv',
        ),
        691 => 
        array (
          'key' => 'Swedish (Finland)',
          'value' => 'sv_FI',
        ),
        692 => 
        array (
          'key' => 'Swedish (Sweden)',
          'value' => 'sv_SE',
        ),
        693 => 
        array (
          'key' => 'Swedish (Åland Islands)',
          'value' => 'sv_AX',
        ),
        694 => 
        array (
          'key' => 'Swiss German',
          'value' => 'gsw',
        ),
        695 => 
        array (
          'key' => 'Swiss German (France)',
          'value' => 'gsw_FR',
        ),
        696 => 
        array (
          'key' => 'Swiss German (Liechtenstein)',
          'value' => 'gsw_LI',
        ),
        697 => 
        array (
          'key' => 'Swiss German (Switzerland)',
          'value' => 'gsw_CH',
        ),
        698 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi',
        ),
        699 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi_Latn',
        ),
        700 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi_Tfng',
        ),
        701 => 
        array (
          'key' => 'Tachelhit (Morocco)',
          'value' => 'shi_Latn_MA',
        ),
        702 => 
        array (
          'key' => 'Tachelhit (Morocco)',
          'value' => 'shi_Tfng_MA',
        ),
        703 => 
        array (
          'key' => 'Taita',
          'value' => 'dav',
        ),
        704 => 
        array (
          'key' => 'Taita (Kenya)',
          'value' => 'dav_KE',
        ),
        705 => 
        array (
          'key' => 'Tajik',
          'value' => 'tg',
        ),
        706 => 
        array (
          'key' => 'Tajik (Tajikistan)',
          'value' => 'tg_TJ',
        ),
        707 => 
        array (
          'key' => 'Tamil',
          'value' => 'ta',
        ),
        708 => 
        array (
          'key' => 'Tamil (India)',
          'value' => 'ta_IN',
        ),
        709 => 
        array (
          'key' => 'Tamil (Malaysia)',
          'value' => 'ta_MY',
        ),
        710 => 
        array (
          'key' => 'Tamil (Singapore)',
          'value' => 'ta_SG',
        ),
        711 => 
        array (
          'key' => 'Tamil (Sri Lanka)',
          'value' => 'ta_LK',
        ),
        712 => 
        array (
          'key' => 'Tasawaq',
          'value' => 'twq',
        ),
        713 => 
        array (
          'key' => 'Tasawaq (Niger)',
          'value' => 'twq_NE',
        ),
        714 => 
        array (
          'key' => 'Tatar',
          'value' => 'tt',
        ),
        715 => 
        array (
          'key' => 'Tatar (Russia)',
          'value' => 'tt_RU',
        ),
        716 => 
        array (
          'key' => 'Telugu',
          'value' => 'te',
        ),
        717 => 
        array (
          'key' => 'Telugu (India)',
          'value' => 'te_IN',
        ),
        718 => 
        array (
          'key' => 'Teso',
          'value' => 'teo',
        ),
        719 => 
        array (
          'key' => 'Teso (Kenya)',
          'value' => 'teo_KE',
        ),
        720 => 
        array (
          'key' => 'Teso (Uganda)',
          'value' => 'teo_UG',
        ),
        721 => 
        array (
          'key' => 'Thai',
          'value' => 'th',
        ),
        722 => 
        array (
          'key' => 'Thai (Thailand)',
          'value' => 'th_TH',
        ),
        723 => 
        array (
          'key' => 'Tibetan',
          'value' => 'bo',
        ),
        724 => 
        array (
          'key' => 'Tibetan (China)',
          'value' => 'bo_CN',
        ),
        725 => 
        array (
          'key' => 'Tibetan (India)',
          'value' => 'bo_IN',
        ),
        726 => 
        array (
          'key' => 'Tigrinya',
          'value' => 'ti',
        ),
        727 => 
        array (
          'key' => 'Tigrinya (Eritrea)',
          'value' => 'ti_ER',
        ),
        728 => 
        array (
          'key' => 'Tigrinya (Ethiopia)',
          'value' => 'ti_ET',
        ),
        729 => 
        array (
          'key' => 'Tongan',
          'value' => 'to',
        ),
        730 => 
        array (
          'key' => 'Tongan (Tonga)',
          'value' => 'to_TO',
        ),
        731 => 
        array (
          'key' => 'Turkish',
          'value' => 'tr',
        ),
        732 => 
        array (
          'key' => 'Turkish (Cyprus)',
          'value' => 'tr_CY',
        ),
        733 => 
        array (
          'key' => 'Turkish (Turkey)',
          'value' => 'tr_TR',
        ),
        734 => 
        array (
          'key' => 'Turkmen',
          'value' => 'tk',
        ),
        735 => 
        array (
          'key' => 'Turkmen (Turkmenistan)',
          'value' => 'tk_TM',
        ),
        736 => 
        array (
          'key' => 'Ukrainian',
          'value' => 'uk',
        ),
        737 => 
        array (
          'key' => 'Ukrainian (Ukraine)',
          'value' => 'uk_UA',
        ),
        738 => 
        array (
          'key' => 'Upper Sorbian',
          'value' => 'hsb',
        ),
        739 => 
        array (
          'key' => 'Upper Sorbian (Germany)',
          'value' => 'hsb_DE',
        ),
        740 => 
        array (
          'key' => 'Urdu',
          'value' => 'ur',
        ),
        741 => 
        array (
          'key' => 'Urdu (India)',
          'value' => 'ur_IN',
        ),
        742 => 
        array (
          'key' => 'Urdu (Pakistan)',
          'value' => 'ur_PK',
        ),
        743 => 
        array (
          'key' => 'Uyghur',
          'value' => 'ug',
        ),
        744 => 
        array (
          'key' => 'Uyghur (China)',
          'value' => 'ug_CN',
        ),
        745 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz',
        ),
        746 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Arab',
        ),
        747 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Cyrl',
        ),
        748 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Latn',
        ),
        749 => 
        array (
          'key' => 'Uzbek (Afghanistan)',
          'value' => 'uz_Arab_AF',
        ),
        750 => 
        array (
          'key' => 'Uzbek (Uzbekistan)',
          'value' => 'uz_Cyrl_UZ',
        ),
        751 => 
        array (
          'key' => 'Uzbek (Uzbekistan)',
          'value' => 'uz_Latn_UZ',
        ),
        752 => 
        array (
          'key' => 'Vai',
          'value' => 'vai',
        ),
        753 => 
        array (
          'key' => 'Vai',
          'value' => 'vai_Latn',
        ),
        754 => 
        array (
          'key' => 'Vai',
          'value' => 'vai_Vaii',
        ),
        755 => 
        array (
          'key' => 'Vai (Liberia)',
          'value' => 'vai_Latn_LR',
        ),
        756 => 
        array (
          'key' => 'Vai (Liberia)',
          'value' => 'vai_Vaii_LR',
        ),
        757 => 
        array (
          'key' => 'Vietnamese',
          'value' => 'vi',
        ),
        758 => 
        array (
          'key' => 'Vietnamese (Vietnam)',
          'value' => 'vi_VN',
        ),
        759 => 
        array (
          'key' => 'Vunjo',
          'value' => 'vun',
        ),
        760 => 
        array (
          'key' => 'Vunjo (Tanzania)',
          'value' => 'vun_TZ',
        ),
        761 => 
        array (
          'key' => 'Walser',
          'value' => 'wae',
        ),
        762 => 
        array (
          'key' => 'Walser (Switzerland)',
          'value' => 'wae_CH',
        ),
        763 => 
        array (
          'key' => 'Welsh',
          'value' => 'cy',
        ),
        764 => 
        array (
          'key' => 'Welsh (United Kingdom)',
          'value' => 'cy_GB',
        ),
        765 => 
        array (
          'key' => 'Western Frisian',
          'value' => 'fy',
        ),
        766 => 
        array (
          'key' => 'Western Frisian (Netherlands)',
          'value' => 'fy_NL',
        ),
        767 => 
        array (
          'key' => 'Wolof',
          'value' => 'wo',
        ),
        768 => 
        array (
          'key' => 'Wolof (Senegal)',
          'value' => 'wo_SN',
        ),
        769 => 
        array (
          'key' => 'Xhosa',
          'value' => 'xh',
        ),
        770 => 
        array (
          'key' => 'Xhosa (South Africa)',
          'value' => 'xh_ZA',
        ),
        771 => 
        array (
          'key' => 'Yangben',
          'value' => 'yav',
        ),
        772 => 
        array (
          'key' => 'Yangben (Cameroon)',
          'value' => 'yav_CM',
        ),
        773 => 
        array (
          'key' => 'Yiddish',
          'value' => 'yi',
        ),
        774 => 
        array (
          'key' => 'Yiddish (World)',
          'value' => 'yi_001',
        ),
        775 => 
        array (
          'key' => 'Yoruba',
          'value' => 'yo',
        ),
        776 => 
        array (
          'key' => 'Yoruba (Benin)',
          'value' => 'yo_BJ',
        ),
        777 => 
        array (
          'key' => 'Yoruba (Nigeria)',
          'value' => 'yo_NG',
        ),
        778 => 
        array (
          'key' => 'Zarma',
          'value' => 'dje',
        ),
        779 => 
        array (
          'key' => 'Zarma (Niger)',
          'value' => 'dje_NE',
        ),
        780 => 
        array (
          'key' => 'Zulu',
          'value' => 'zu',
        ),
        781 => 
        array (
          'key' => 'Zulu (South Africa)',
          'value' => 'zu_ZA',
        ),
      ),
       'width' => 0,
       'defaultValue' => NULL,
       'optionsProviderClass' => NULL,
       'optionsProviderData' => NULL,
       'queryColumnType' => 'varchar',
       'columnType' => 'varchar',
       'columnLength' => 190,
       'dynamicOptions' => false,
       'defaultValueGenerator' => '',
       'onlySystemLanguages' => false,
    )),
    10 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
       'name' => 'Multiselect',
       'title' => 'Multiselect',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'multiselect',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'name1',
          'value' => 'name1',
        ),
        1 => 
        array (
          'key' => 'name 2',
          'value' => 'name 2',
        ),
        2 => 
        array (
          'key' => 'name 3',
          'value' => 'name 3',
        ),
        3 => 
        array (
          'key' => 'name 4',
          'value' => 'name 4',
        ),
      ),
       'width' => '',
       'height' => '',
       'maxItems' => NULL,
       'renderType' => 'list',
       'optionsProviderClass' => '',
       'optionsProviderData' => '',
       'queryColumnType' => 'text',
       'columnType' => 'text',
       'dynamicOptions' => false,
    )),
    11 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Countrymultiselect::__set_state(array(
       'name' => 'CountryMulti',
       'title' => 'Country Multi',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'countrymultiselect',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'Afghanistan',
          'value' => 'AF',
        ),
        1 => 
        array (
          'key' => 'Albania',
          'value' => 'AL',
        ),
        2 => 
        array (
          'key' => 'Algeria',
          'value' => 'DZ',
        ),
        3 => 
        array (
          'key' => 'American Samoa',
          'value' => 'AS',
        ),
        4 => 
        array (
          'key' => 'Andorra',
          'value' => 'AD',
        ),
        5 => 
        array (
          'key' => 'Angola',
          'value' => 'AO',
        ),
        6 => 
        array (
          'key' => 'Anguilla',
          'value' => 'AI',
        ),
        7 => 
        array (
          'key' => 'Antarctica',
          'value' => 'AQ',
        ),
        8 => 
        array (
          'key' => 'Antigua & Barbuda',
          'value' => 'AG',
        ),
        9 => 
        array (
          'key' => 'Argentina',
          'value' => 'AR',
        ),
        10 => 
        array (
          'key' => 'Armenia',
          'value' => 'AM',
        ),
        11 => 
        array (
          'key' => 'Aruba',
          'value' => 'AW',
        ),
        12 => 
        array (
          'key' => 'Australia',
          'value' => 'AU',
        ),
        13 => 
        array (
          'key' => 'Austria',
          'value' => 'AT',
        ),
        14 => 
        array (
          'key' => 'Azerbaijan',
          'value' => 'AZ',
        ),
        15 => 
        array (
          'key' => 'Bahamas',
          'value' => 'BS',
        ),
        16 => 
        array (
          'key' => 'Bahrain',
          'value' => 'BH',
        ),
        17 => 
        array (
          'key' => 'Bangladesh',
          'value' => 'BD',
        ),
        18 => 
        array (
          'key' => 'Barbados',
          'value' => 'BB',
        ),
        19 => 
        array (
          'key' => 'Belarus',
          'value' => 'BY',
        ),
        20 => 
        array (
          'key' => 'Belgium',
          'value' => 'BE',
        ),
        21 => 
        array (
          'key' => 'Belize',
          'value' => 'BZ',
        ),
        22 => 
        array (
          'key' => 'Benin',
          'value' => 'BJ',
        ),
        23 => 
        array (
          'key' => 'Bermuda',
          'value' => 'BM',
        ),
        24 => 
        array (
          'key' => 'Bhutan',
          'value' => 'BT',
        ),
        25 => 
        array (
          'key' => 'Bolivia',
          'value' => 'BO',
        ),
        26 => 
        array (
          'key' => 'Bosnia & Herzegovina',
          'value' => 'BA',
        ),
        27 => 
        array (
          'key' => 'Botswana',
          'value' => 'BW',
        ),
        28 => 
        array (
          'key' => 'Bouvet Island',
          'value' => 'BV',
        ),
        29 => 
        array (
          'key' => 'Brazil',
          'value' => 'BR',
        ),
        30 => 
        array (
          'key' => 'British Indian Ocean Territory',
          'value' => 'IO',
        ),
        31 => 
        array (
          'key' => 'British Virgin Islands',
          'value' => 'VG',
        ),
        32 => 
        array (
          'key' => 'Brunei',
          'value' => 'BN',
        ),
        33 => 
        array (
          'key' => 'Bulgaria',
          'value' => 'BG',
        ),
        34 => 
        array (
          'key' => 'Burkina Faso',
          'value' => 'BF',
        ),
        35 => 
        array (
          'key' => 'Burundi',
          'value' => 'BI',
        ),
        36 => 
        array (
          'key' => 'Cambodia',
          'value' => 'KH',
        ),
        37 => 
        array (
          'key' => 'Cameroon',
          'value' => 'CM',
        ),
        38 => 
        array (
          'key' => 'Canada',
          'value' => 'CA',
        ),
        39 => 
        array (
          'key' => 'Cape Verde',
          'value' => 'CV',
        ),
        40 => 
        array (
          'key' => 'Caribbean Netherlands',
          'value' => 'BQ',
        ),
        41 => 
        array (
          'key' => 'Cayman Islands',
          'value' => 'KY',
        ),
        42 => 
        array (
          'key' => 'Central African Republic',
          'value' => 'CF',
        ),
        43 => 
        array (
          'key' => 'Chad',
          'value' => 'TD',
        ),
        44 => 
        array (
          'key' => 'Chile',
          'value' => 'CL',
        ),
        45 => 
        array (
          'key' => 'China',
          'value' => 'CN',
        ),
        46 => 
        array (
          'key' => 'Christmas Island',
          'value' => 'CX',
        ),
        47 => 
        array (
          'key' => 'Cocos (Keeling) Islands',
          'value' => 'CC',
        ),
        48 => 
        array (
          'key' => 'Colombia',
          'value' => 'CO',
        ),
        49 => 
        array (
          'key' => 'Comoros',
          'value' => 'KM',
        ),
        50 => 
        array (
          'key' => 'Congo - Brazzaville',
          'value' => 'CG',
        ),
        51 => 
        array (
          'key' => 'Congo - Kinshasa',
          'value' => 'CD',
        ),
        52 => 
        array (
          'key' => 'Cook Islands',
          'value' => 'CK',
        ),
        53 => 
        array (
          'key' => 'Costa Rica',
          'value' => 'CR',
        ),
        54 => 
        array (
          'key' => 'Croatia',
          'value' => 'HR',
        ),
        55 => 
        array (
          'key' => 'Cuba',
          'value' => 'CU',
        ),
        56 => 
        array (
          'key' => 'Curaçao',
          'value' => 'CW',
        ),
        57 => 
        array (
          'key' => 'Cyprus',
          'value' => 'CY',
        ),
        58 => 
        array (
          'key' => 'Czechia',
          'value' => 'CZ',
        ),
        59 => 
        array (
          'key' => 'Côte d’Ivoire',
          'value' => 'CI',
        ),
        60 => 
        array (
          'key' => 'Denmark',
          'value' => 'DK',
        ),
        61 => 
        array (
          'key' => 'Djibouti',
          'value' => 'DJ',
        ),
        62 => 
        array (
          'key' => 'Dominica',
          'value' => 'DM',
        ),
        63 => 
        array (
          'key' => 'Dominican Republic',
          'value' => 'DO',
        ),
        64 => 
        array (
          'key' => 'Ecuador',
          'value' => 'EC',
        ),
        65 => 
        array (
          'key' => 'Egypt',
          'value' => 'EG',
        ),
        66 => 
        array (
          'key' => 'El Salvador',
          'value' => 'SV',
        ),
        67 => 
        array (
          'key' => 'Equatorial Guinea',
          'value' => 'GQ',
        ),
        68 => 
        array (
          'key' => 'Eritrea',
          'value' => 'ER',
        ),
        69 => 
        array (
          'key' => 'Estonia',
          'value' => 'EE',
        ),
        70 => 
        array (
          'key' => 'Eswatini',
          'value' => 'SZ',
        ),
        71 => 
        array (
          'key' => 'Ethiopia',
          'value' => 'ET',
        ),
        72 => 
        array (
          'key' => 'Falkland Islands',
          'value' => 'FK',
        ),
        73 => 
        array (
          'key' => 'Faroe Islands',
          'value' => 'FO',
        ),
        74 => 
        array (
          'key' => 'Fiji',
          'value' => 'FJ',
        ),
        75 => 
        array (
          'key' => 'Finland',
          'value' => 'FI',
        ),
        76 => 
        array (
          'key' => 'France',
          'value' => 'FR',
        ),
        77 => 
        array (
          'key' => 'French Guiana',
          'value' => 'GF',
        ),
        78 => 
        array (
          'key' => 'French Polynesia',
          'value' => 'PF',
        ),
        79 => 
        array (
          'key' => 'French Southern Territories',
          'value' => 'TF',
        ),
        80 => 
        array (
          'key' => 'Gabon',
          'value' => 'GA',
        ),
        81 => 
        array (
          'key' => 'Gambia',
          'value' => 'GM',
        ),
        82 => 
        array (
          'key' => 'Georgia',
          'value' => 'GE',
        ),
        83 => 
        array (
          'key' => 'Germany',
          'value' => 'DE',
        ),
        84 => 
        array (
          'key' => 'Ghana',
          'value' => 'GH',
        ),
        85 => 
        array (
          'key' => 'Gibraltar',
          'value' => 'GI',
        ),
        86 => 
        array (
          'key' => 'Greece',
          'value' => 'GR',
        ),
        87 => 
        array (
          'key' => 'Greenland',
          'value' => 'GL',
        ),
        88 => 
        array (
          'key' => 'Grenada',
          'value' => 'GD',
        ),
        89 => 
        array (
          'key' => 'Guadeloupe',
          'value' => 'GP',
        ),
        90 => 
        array (
          'key' => 'Guam',
          'value' => 'GU',
        ),
        91 => 
        array (
          'key' => 'Guatemala',
          'value' => 'GT',
        ),
        92 => 
        array (
          'key' => 'Guernsey',
          'value' => 'GG',
        ),
        93 => 
        array (
          'key' => 'Guinea',
          'value' => 'GN',
        ),
        94 => 
        array (
          'key' => 'Guinea-Bissau',
          'value' => 'GW',
        ),
        95 => 
        array (
          'key' => 'Guyana',
          'value' => 'GY',
        ),
        96 => 
        array (
          'key' => 'Haiti',
          'value' => 'HT',
        ),
        97 => 
        array (
          'key' => 'Heard & McDonald Islands',
          'value' => 'HM',
        ),
        98 => 
        array (
          'key' => 'Honduras',
          'value' => 'HN',
        ),
        99 => 
        array (
          'key' => 'Hong Kong SAR China',
          'value' => 'HK',
        ),
        100 => 
        array (
          'key' => 'Hungary',
          'value' => 'HU',
        ),
        101 => 
        array (
          'key' => 'Iceland',
          'value' => 'IS',
        ),
        102 => 
        array (
          'key' => 'India',
          'value' => 'IN',
        ),
        103 => 
        array (
          'key' => 'Indonesia',
          'value' => 'ID',
        ),
        104 => 
        array (
          'key' => 'Iran',
          'value' => 'IR',
        ),
        105 => 
        array (
          'key' => 'Iraq',
          'value' => 'IQ',
        ),
        106 => 
        array (
          'key' => 'Ireland',
          'value' => 'IE',
        ),
        107 => 
        array (
          'key' => 'Isle of Man',
          'value' => 'IM',
        ),
        108 => 
        array (
          'key' => 'Israel',
          'value' => 'IL',
        ),
        109 => 
        array (
          'key' => 'Italy',
          'value' => 'IT',
        ),
        110 => 
        array (
          'key' => 'Jamaica',
          'value' => 'JM',
        ),
        111 => 
        array (
          'key' => 'Japan',
          'value' => 'JP',
        ),
        112 => 
        array (
          'key' => 'Jersey',
          'value' => 'JE',
        ),
        113 => 
        array (
          'key' => 'Jordan',
          'value' => 'JO',
        ),
        114 => 
        array (
          'key' => 'Kazakhstan',
          'value' => 'KZ',
        ),
        115 => 
        array (
          'key' => 'Kenya',
          'value' => 'KE',
        ),
        116 => 
        array (
          'key' => 'Kiribati',
          'value' => 'KI',
        ),
        117 => 
        array (
          'key' => 'Kuwait',
          'value' => 'KW',
        ),
        118 => 
        array (
          'key' => 'Kyrgyzstan',
          'value' => 'KG',
        ),
        119 => 
        array (
          'key' => 'Laos',
          'value' => 'LA',
        ),
        120 => 
        array (
          'key' => 'Latvia',
          'value' => 'LV',
        ),
        121 => 
        array (
          'key' => 'Lebanon',
          'value' => 'LB',
        ),
        122 => 
        array (
          'key' => 'Lesotho',
          'value' => 'LS',
        ),
        123 => 
        array (
          'key' => 'Liberia',
          'value' => 'LR',
        ),
        124 => 
        array (
          'key' => 'Libya',
          'value' => 'LY',
        ),
        125 => 
        array (
          'key' => 'Liechtenstein',
          'value' => 'LI',
        ),
        126 => 
        array (
          'key' => 'Lithuania',
          'value' => 'LT',
        ),
        127 => 
        array (
          'key' => 'Luxembourg',
          'value' => 'LU',
        ),
        128 => 
        array (
          'key' => 'Macao SAR China',
          'value' => 'MO',
        ),
        129 => 
        array (
          'key' => 'Madagascar',
          'value' => 'MG',
        ),
        130 => 
        array (
          'key' => 'Malawi',
          'value' => 'MW',
        ),
        131 => 
        array (
          'key' => 'Malaysia',
          'value' => 'MY',
        ),
        132 => 
        array (
          'key' => 'Maldives',
          'value' => 'MV',
        ),
        133 => 
        array (
          'key' => 'Mali',
          'value' => 'ML',
        ),
        134 => 
        array (
          'key' => 'Malta',
          'value' => 'MT',
        ),
        135 => 
        array (
          'key' => 'Marshall Islands',
          'value' => 'MH',
        ),
        136 => 
        array (
          'key' => 'Martinique',
          'value' => 'MQ',
        ),
        137 => 
        array (
          'key' => 'Mauritania',
          'value' => 'MR',
        ),
        138 => 
        array (
          'key' => 'Mauritius',
          'value' => 'MU',
        ),
        139 => 
        array (
          'key' => 'Mayotte',
          'value' => 'YT',
        ),
        140 => 
        array (
          'key' => 'Mexico',
          'value' => 'MX',
        ),
        141 => 
        array (
          'key' => 'Micronesia',
          'value' => 'FM',
        ),
        142 => 
        array (
          'key' => 'Moldova',
          'value' => 'MD',
        ),
        143 => 
        array (
          'key' => 'Monaco',
          'value' => 'MC',
        ),
        144 => 
        array (
          'key' => 'Mongolia',
          'value' => 'MN',
        ),
        145 => 
        array (
          'key' => 'Montenegro',
          'value' => 'ME',
        ),
        146 => 
        array (
          'key' => 'Montserrat',
          'value' => 'MS',
        ),
        147 => 
        array (
          'key' => 'Morocco',
          'value' => 'MA',
        ),
        148 => 
        array (
          'key' => 'Mozambique',
          'value' => 'MZ',
        ),
        149 => 
        array (
          'key' => 'Myanmar (Burma)',
          'value' => 'MM',
        ),
        150 => 
        array (
          'key' => 'Namibia',
          'value' => 'NA',
        ),
        151 => 
        array (
          'key' => 'Nauru',
          'value' => 'NR',
        ),
        152 => 
        array (
          'key' => 'Nepal',
          'value' => 'NP',
        ),
        153 => 
        array (
          'key' => 'Netherlands',
          'value' => 'NL',
        ),
        154 => 
        array (
          'key' => 'New Caledonia',
          'value' => 'NC',
        ),
        155 => 
        array (
          'key' => 'New Zealand',
          'value' => 'NZ',
        ),
        156 => 
        array (
          'key' => 'Nicaragua',
          'value' => 'NI',
        ),
        157 => 
        array (
          'key' => 'Niger',
          'value' => 'NE',
        ),
        158 => 
        array (
          'key' => 'Nigeria',
          'value' => 'NG',
        ),
        159 => 
        array (
          'key' => 'Niue',
          'value' => 'NU',
        ),
        160 => 
        array (
          'key' => 'Norfolk Island',
          'value' => 'NF',
        ),
        161 => 
        array (
          'key' => 'North Korea',
          'value' => 'KP',
        ),
        162 => 
        array (
          'key' => 'North Macedonia',
          'value' => 'MK',
        ),
        163 => 
        array (
          'key' => 'Northern Mariana Islands',
          'value' => 'MP',
        ),
        164 => 
        array (
          'key' => 'Norway',
          'value' => 'NO',
        ),
        165 => 
        array (
          'key' => 'Oman',
          'value' => 'OM',
        ),
        166 => 
        array (
          'key' => 'Pakistan',
          'value' => 'PK',
        ),
        167 => 
        array (
          'key' => 'Palau',
          'value' => 'PW',
        ),
        168 => 
        array (
          'key' => 'Palestinian Territories',
          'value' => 'PS',
        ),
        169 => 
        array (
          'key' => 'Panama',
          'value' => 'PA',
        ),
        170 => 
        array (
          'key' => 'Papua New Guinea',
          'value' => 'PG',
        ),
        171 => 
        array (
          'key' => 'Paraguay',
          'value' => 'PY',
        ),
        172 => 
        array (
          'key' => 'Peru',
          'value' => 'PE',
        ),
        173 => 
        array (
          'key' => 'Philippines',
          'value' => 'PH',
        ),
        174 => 
        array (
          'key' => 'Pitcairn Islands',
          'value' => 'PN',
        ),
        175 => 
        array (
          'key' => 'Poland',
          'value' => 'PL',
        ),
        176 => 
        array (
          'key' => 'Portugal',
          'value' => 'PT',
        ),
        177 => 
        array (
          'key' => 'Puerto Rico',
          'value' => 'PR',
        ),
        178 => 
        array (
          'key' => 'Qatar',
          'value' => 'QA',
        ),
        179 => 
        array (
          'key' => 'Romania',
          'value' => 'RO',
        ),
        180 => 
        array (
          'key' => 'Russia',
          'value' => 'RU',
        ),
        181 => 
        array (
          'key' => 'Rwanda',
          'value' => 'RW',
        ),
        182 => 
        array (
          'key' => 'Réunion',
          'value' => 'RE',
        ),
        183 => 
        array (
          'key' => 'Samoa',
          'value' => 'WS',
        ),
        184 => 
        array (
          'key' => 'San Marino',
          'value' => 'SM',
        ),
        185 => 
        array (
          'key' => 'Saudi Arabia',
          'value' => 'SA',
        ),
        186 => 
        array (
          'key' => 'Senegal',
          'value' => 'SN',
        ),
        187 => 
        array (
          'key' => 'Serbia',
          'value' => 'RS',
        ),
        188 => 
        array (
          'key' => 'Seychelles',
          'value' => 'SC',
        ),
        189 => 
        array (
          'key' => 'Sierra Leone',
          'value' => 'SL',
        ),
        190 => 
        array (
          'key' => 'Singapore',
          'value' => 'SG',
        ),
        191 => 
        array (
          'key' => 'Sint Maarten',
          'value' => 'SX',
        ),
        192 => 
        array (
          'key' => 'Slovakia',
          'value' => 'SK',
        ),
        193 => 
        array (
          'key' => 'Slovenia',
          'value' => 'SI',
        ),
        194 => 
        array (
          'key' => 'Solomon Islands',
          'value' => 'SB',
        ),
        195 => 
        array (
          'key' => 'Somalia',
          'value' => 'SO',
        ),
        196 => 
        array (
          'key' => 'South Africa',
          'value' => 'ZA',
        ),
        197 => 
        array (
          'key' => 'South Georgia & South Sandwich Islands',
          'value' => 'GS',
        ),
        198 => 
        array (
          'key' => 'South Korea',
          'value' => 'KR',
        ),
        199 => 
        array (
          'key' => 'South Sudan',
          'value' => 'SS',
        ),
        200 => 
        array (
          'key' => 'Spain',
          'value' => 'ES',
        ),
        201 => 
        array (
          'key' => 'Sri Lanka',
          'value' => 'LK',
        ),
        202 => 
        array (
          'key' => 'St. Barthélemy',
          'value' => 'BL',
        ),
        203 => 
        array (
          'key' => 'St. Helena',
          'value' => 'SH',
        ),
        204 => 
        array (
          'key' => 'St. Kitts & Nevis',
          'value' => 'KN',
        ),
        205 => 
        array (
          'key' => 'St. Lucia',
          'value' => 'LC',
        ),
        206 => 
        array (
          'key' => 'St. Martin',
          'value' => 'MF',
        ),
        207 => 
        array (
          'key' => 'St. Pierre & Miquelon',
          'value' => 'PM',
        ),
        208 => 
        array (
          'key' => 'St. Vincent & Grenadines',
          'value' => 'VC',
        ),
        209 => 
        array (
          'key' => 'Sudan',
          'value' => 'SD',
        ),
        210 => 
        array (
          'key' => 'Suriname',
          'value' => 'SR',
        ),
        211 => 
        array (
          'key' => 'Svalbard & Jan Mayen',
          'value' => 'SJ',
        ),
        212 => 
        array (
          'key' => 'Sweden',
          'value' => 'SE',
        ),
        213 => 
        array (
          'key' => 'Switzerland',
          'value' => 'CH',
        ),
        214 => 
        array (
          'key' => 'Syria',
          'value' => 'SY',
        ),
        215 => 
        array (
          'key' => 'São Tomé & Príncipe',
          'value' => 'ST',
        ),
        216 => 
        array (
          'key' => 'Taiwan',
          'value' => 'TW',
        ),
        217 => 
        array (
          'key' => 'Tajikistan',
          'value' => 'TJ',
        ),
        218 => 
        array (
          'key' => 'Tanzania',
          'value' => 'TZ',
        ),
        219 => 
        array (
          'key' => 'Thailand',
          'value' => 'TH',
        ),
        220 => 
        array (
          'key' => 'Timor-Leste',
          'value' => 'TL',
        ),
        221 => 
        array (
          'key' => 'Togo',
          'value' => 'TG',
        ),
        222 => 
        array (
          'key' => 'Tokelau',
          'value' => 'TK',
        ),
        223 => 
        array (
          'key' => 'Tonga',
          'value' => 'TO',
        ),
        224 => 
        array (
          'key' => 'Trinidad & Tobago',
          'value' => 'TT',
        ),
        225 => 
        array (
          'key' => 'Tunisia',
          'value' => 'TN',
        ),
        226 => 
        array (
          'key' => 'Turkey',
          'value' => 'TR',
        ),
        227 => 
        array (
          'key' => 'Turkmenistan',
          'value' => 'TM',
        ),
        228 => 
        array (
          'key' => 'Turks & Caicos Islands',
          'value' => 'TC',
        ),
        229 => 
        array (
          'key' => 'Tuvalu',
          'value' => 'TV',
        ),
        230 => 
        array (
          'key' => 'U.S. Outlying Islands',
          'value' => 'UM',
        ),
        231 => 
        array (
          'key' => 'U.S. Virgin Islands',
          'value' => 'VI',
        ),
        232 => 
        array (
          'key' => 'Uganda',
          'value' => 'UG',
        ),
        233 => 
        array (
          'key' => 'Ukraine',
          'value' => 'UA',
        ),
        234 => 
        array (
          'key' => 'United Arab Emirates',
          'value' => 'AE',
        ),
        235 => 
        array (
          'key' => 'United Kingdom',
          'value' => 'GB',
        ),
        236 => 
        array (
          'key' => 'United States',
          'value' => 'US',
        ),
        237 => 
        array (
          'key' => 'Uruguay',
          'value' => 'UY',
        ),
        238 => 
        array (
          'key' => 'Uzbekistan',
          'value' => 'UZ',
        ),
        239 => 
        array (
          'key' => 'Vanuatu',
          'value' => 'VU',
        ),
        240 => 
        array (
          'key' => 'Vatican City',
          'value' => 'VA',
        ),
        241 => 
        array (
          'key' => 'Venezuela',
          'value' => 'VE',
        ),
        242 => 
        array (
          'key' => 'Vietnam',
          'value' => 'VN',
        ),
        243 => 
        array (
          'key' => 'Wallis & Futuna',
          'value' => 'WF',
        ),
        244 => 
        array (
          'key' => 'Western Sahara',
          'value' => 'EH',
        ),
        245 => 
        array (
          'key' => 'Yemen',
          'value' => 'YE',
        ),
        246 => 
        array (
          'key' => 'Zambia',
          'value' => 'ZM',
        ),
        247 => 
        array (
          'key' => 'Zimbabwe',
          'value' => 'ZW',
        ),
        248 => 
        array (
          'key' => 'Åland Islands',
          'value' => 'AX',
        ),
      ),
       'width' => '',
       'height' => '',
       'maxItems' => NULL,
       'renderType' => 'list',
       'optionsProviderClass' => NULL,
       'optionsProviderData' => NULL,
       'queryColumnType' => 'text',
       'columnType' => 'text',
       'dynamicOptions' => false,
       'restrictTo' => '',
    )),
    12 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Languagemultiselect::__set_state(array(
       'name' => 'LangMulti',
       'title' => 'Lang Multi',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'languagemultiselect',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'options' => 
      array (
        0 => 
        array (
          'key' => 'Afrikaans',
          'value' => 'af',
        ),
        1 => 
        array (
          'key' => 'Afrikaans (Namibia)',
          'value' => 'af_NA',
        ),
        2 => 
        array (
          'key' => 'Afrikaans (South Africa)',
          'value' => 'af_ZA',
        ),
        3 => 
        array (
          'key' => 'Aghem',
          'value' => 'agq',
        ),
        4 => 
        array (
          'key' => 'Aghem (Cameroon)',
          'value' => 'agq_CM',
        ),
        5 => 
        array (
          'key' => 'Akan',
          'value' => 'ak',
        ),
        6 => 
        array (
          'key' => 'Akan (Ghana)',
          'value' => 'ak_GH',
        ),
        7 => 
        array (
          'key' => 'Albanian',
          'value' => 'sq',
        ),
        8 => 
        array (
          'key' => 'Albanian (Albania)',
          'value' => 'sq_AL',
        ),
        9 => 
        array (
          'key' => 'Albanian (Kosovo)',
          'value' => 'sq_XK',
        ),
        10 => 
        array (
          'key' => 'Albanian (North Macedonia)',
          'value' => 'sq_MK',
        ),
        11 => 
        array (
          'key' => 'Amharic',
          'value' => 'am',
        ),
        12 => 
        array (
          'key' => 'Amharic (Ethiopia)',
          'value' => 'am_ET',
        ),
        13 => 
        array (
          'key' => 'Arabic',
          'value' => 'ar',
        ),
        14 => 
        array (
          'key' => 'Arabic (Algeria)',
          'value' => 'ar_DZ',
        ),
        15 => 
        array (
          'key' => 'Arabic (Bahrain)',
          'value' => 'ar_BH',
        ),
        16 => 
        array (
          'key' => 'Arabic (Chad)',
          'value' => 'ar_TD',
        ),
        17 => 
        array (
          'key' => 'Arabic (Comoros)',
          'value' => 'ar_KM',
        ),
        18 => 
        array (
          'key' => 'Arabic (Djibouti)',
          'value' => 'ar_DJ',
        ),
        19 => 
        array (
          'key' => 'Arabic (Egypt)',
          'value' => 'ar_EG',
        ),
        20 => 
        array (
          'key' => 'Arabic (Eritrea)',
          'value' => 'ar_ER',
        ),
        21 => 
        array (
          'key' => 'Arabic (Iraq)',
          'value' => 'ar_IQ',
        ),
        22 => 
        array (
          'key' => 'Arabic (Israel)',
          'value' => 'ar_IL',
        ),
        23 => 
        array (
          'key' => 'Arabic (Jordan)',
          'value' => 'ar_JO',
        ),
        24 => 
        array (
          'key' => 'Arabic (Kuwait)',
          'value' => 'ar_KW',
        ),
        25 => 
        array (
          'key' => 'Arabic (Lebanon)',
          'value' => 'ar_LB',
        ),
        26 => 
        array (
          'key' => 'Arabic (Libya)',
          'value' => 'ar_LY',
        ),
        27 => 
        array (
          'key' => 'Arabic (Mauritania)',
          'value' => 'ar_MR',
        ),
        28 => 
        array (
          'key' => 'Arabic (Morocco)',
          'value' => 'ar_MA',
        ),
        29 => 
        array (
          'key' => 'Arabic (Oman)',
          'value' => 'ar_OM',
        ),
        30 => 
        array (
          'key' => 'Arabic (Palestinian Territories)',
          'value' => 'ar_PS',
        ),
        31 => 
        array (
          'key' => 'Arabic (Qatar)',
          'value' => 'ar_QA',
        ),
        32 => 
        array (
          'key' => 'Arabic (Saudi Arabia)',
          'value' => 'ar_SA',
        ),
        33 => 
        array (
          'key' => 'Arabic (Somalia)',
          'value' => 'ar_SO',
        ),
        34 => 
        array (
          'key' => 'Arabic (South Sudan)',
          'value' => 'ar_SS',
        ),
        35 => 
        array (
          'key' => 'Arabic (Sudan)',
          'value' => 'ar_SD',
        ),
        36 => 
        array (
          'key' => 'Arabic (Syria)',
          'value' => 'ar_SY',
        ),
        37 => 
        array (
          'key' => 'Arabic (Tunisia)',
          'value' => 'ar_TN',
        ),
        38 => 
        array (
          'key' => 'Arabic (United Arab Emirates)',
          'value' => 'ar_AE',
        ),
        39 => 
        array (
          'key' => 'Arabic (Western Sahara)',
          'value' => 'ar_EH',
        ),
        40 => 
        array (
          'key' => 'Arabic (World)',
          'value' => 'ar_001',
        ),
        41 => 
        array (
          'key' => 'Arabic (Yemen)',
          'value' => 'ar_YE',
        ),
        42 => 
        array (
          'key' => 'Armenian',
          'value' => 'hy',
        ),
        43 => 
        array (
          'key' => 'Armenian (Armenia)',
          'value' => 'hy_AM',
        ),
        44 => 
        array (
          'key' => 'Assamese',
          'value' => 'as',
        ),
        45 => 
        array (
          'key' => 'Assamese (India)',
          'value' => 'as_IN',
        ),
        46 => 
        array (
          'key' => 'Asturian',
          'value' => 'ast',
        ),
        47 => 
        array (
          'key' => 'Asturian (Spain)',
          'value' => 'ast_ES',
        ),
        48 => 
        array (
          'key' => 'Asu',
          'value' => 'asa',
        ),
        49 => 
        array (
          'key' => 'Asu (Tanzania)',
          'value' => 'asa_TZ',
        ),
        50 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az',
        ),
        51 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az_Cyrl',
        ),
        52 => 
        array (
          'key' => 'Azerbaijani',
          'value' => 'az_Latn',
        ),
        53 => 
        array (
          'key' => 'Azerbaijani (Azerbaijan)',
          'value' => 'az_Cyrl_AZ',
        ),
        54 => 
        array (
          'key' => 'Azerbaijani (Azerbaijan)',
          'value' => 'az_Latn_AZ',
        ),
        55 => 
        array (
          'key' => 'Bafia',
          'value' => 'ksf',
        ),
        56 => 
        array (
          'key' => 'Bafia (Cameroon)',
          'value' => 'ksf_CM',
        ),
        57 => 
        array (
          'key' => 'Bambara',
          'value' => 'bm',
        ),
        58 => 
        array (
          'key' => 'Bambara (Mali)',
          'value' => 'bm_ML',
        ),
        59 => 
        array (
          'key' => 'Bangla',
          'value' => 'bn',
        ),
        60 => 
        array (
          'key' => 'Bangla (Bangladesh)',
          'value' => 'bn_BD',
        ),
        61 => 
        array (
          'key' => 'Bangla (India)',
          'value' => 'bn_IN',
        ),
        62 => 
        array (
          'key' => 'Basaa',
          'value' => 'bas',
        ),
        63 => 
        array (
          'key' => 'Basaa (Cameroon)',
          'value' => 'bas_CM',
        ),
        64 => 
        array (
          'key' => 'Basque',
          'value' => 'eu',
        ),
        65 => 
        array (
          'key' => 'Basque (Spain)',
          'value' => 'eu_ES',
        ),
        66 => 
        array (
          'key' => 'Belarusian',
          'value' => 'be',
        ),
        67 => 
        array (
          'key' => 'Belarusian (Belarus)',
          'value' => 'be_BY',
        ),
        68 => 
        array (
          'key' => 'Bemba',
          'value' => 'bem',
        ),
        69 => 
        array (
          'key' => 'Bemba (Zambia)',
          'value' => 'bem_ZM',
        ),
        70 => 
        array (
          'key' => 'Bena',
          'value' => 'bez',
        ),
        71 => 
        array (
          'key' => 'Bena (Tanzania)',
          'value' => 'bez_TZ',
        ),
        72 => 
        array (
          'key' => 'Bodo',
          'value' => 'brx',
        ),
        73 => 
        array (
          'key' => 'Bodo (India)',
          'value' => 'brx_IN',
        ),
        74 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs',
        ),
        75 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs_Cyrl',
        ),
        76 => 
        array (
          'key' => 'Bosnian',
          'value' => 'bs_Latn',
        ),
        77 => 
        array (
          'key' => 'Bosnian (Bosnia & Herzegovina)',
          'value' => 'bs_Cyrl_BA',
        ),
        78 => 
        array (
          'key' => 'Bosnian (Bosnia & Herzegovina)',
          'value' => 'bs_Latn_BA',
        ),
        79 => 
        array (
          'key' => 'Breton',
          'value' => 'br',
        ),
        80 => 
        array (
          'key' => 'Breton (France)',
          'value' => 'br_FR',
        ),
        81 => 
        array (
          'key' => 'Bulgarian',
          'value' => 'bg',
        ),
        82 => 
        array (
          'key' => 'Bulgarian (Bulgaria)',
          'value' => 'bg_BG',
        ),
        83 => 
        array (
          'key' => 'Burmese',
          'value' => 'my',
        ),
        84 => 
        array (
          'key' => 'Burmese (Myanmar (Burma))',
          'value' => 'my_MM',
        ),
        85 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue',
        ),
        86 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue_Hans',
        ),
        87 => 
        array (
          'key' => 'Cantonese',
          'value' => 'yue_Hant',
        ),
        88 => 
        array (
          'key' => 'Cantonese (China)',
          'value' => 'yue_Hans_CN',
        ),
        89 => 
        array (
          'key' => 'Cantonese (Hong Kong SAR China)',
          'value' => 'yue_Hant_HK',
        ),
        90 => 
        array (
          'key' => 'Catalan',
          'value' => 'ca',
        ),
        91 => 
        array (
          'key' => 'Catalan (Andorra)',
          'value' => 'ca_AD',
        ),
        92 => 
        array (
          'key' => 'Catalan (France)',
          'value' => 'ca_FR',
        ),
        93 => 
        array (
          'key' => 'Catalan (Italy)',
          'value' => 'ca_IT',
        ),
        94 => 
        array (
          'key' => 'Catalan (Spain)',
          'value' => 'ca_ES',
        ),
        95 => 
        array (
          'key' => 'Cebuano',
          'value' => 'ceb',
        ),
        96 => 
        array (
          'key' => 'Cebuano (Philippines)',
          'value' => 'ceb_PH',
        ),
        97 => 
        array (
          'key' => 'Central Atlas Tamazight',
          'value' => 'tzm',
        ),
        98 => 
        array (
          'key' => 'Central Atlas Tamazight (Morocco)',
          'value' => 'tzm_MA',
        ),
        99 => 
        array (
          'key' => 'Central Kurdish',
          'value' => 'ckb',
        ),
        100 => 
        array (
          'key' => 'Central Kurdish (Iran)',
          'value' => 'ckb_IR',
        ),
        101 => 
        array (
          'key' => 'Central Kurdish (Iraq)',
          'value' => 'ckb_IQ',
        ),
        102 => 
        array (
          'key' => 'Chakma',
          'value' => 'ccp',
        ),
        103 => 
        array (
          'key' => 'Chakma (Bangladesh)',
          'value' => 'ccp_BD',
        ),
        104 => 
        array (
          'key' => 'Chakma (India)',
          'value' => 'ccp_IN',
        ),
        105 => 
        array (
          'key' => 'Chechen',
          'value' => 'ce',
        ),
        106 => 
        array (
          'key' => 'Chechen (Russia)',
          'value' => 'ce_RU',
        ),
        107 => 
        array (
          'key' => 'Cherokee',
          'value' => 'chr',
        ),
        108 => 
        array (
          'key' => 'Cherokee (United States)',
          'value' => 'chr_US',
        ),
        109 => 
        array (
          'key' => 'Chiga',
          'value' => 'cgg',
        ),
        110 => 
        array (
          'key' => 'Chiga (Uganda)',
          'value' => 'cgg_UG',
        ),
        111 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh',
        ),
        112 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh_Hans',
        ),
        113 => 
        array (
          'key' => 'Chinese',
          'value' => 'zh_Hant',
        ),
        114 => 
        array (
          'key' => 'Chinese (China)',
          'value' => 'zh_Hans_CN',
        ),
        115 => 
        array (
          'key' => 'Chinese (Hong Kong SAR China)',
          'value' => 'zh_Hans_HK',
        ),
        116 => 
        array (
          'key' => 'Chinese (Hong Kong SAR China)',
          'value' => 'zh_Hant_HK',
        ),
        117 => 
        array (
          'key' => 'Chinese (Macao SAR China)',
          'value' => 'zh_Hans_MO',
        ),
        118 => 
        array (
          'key' => 'Chinese (Macao SAR China)',
          'value' => 'zh_Hant_MO',
        ),
        119 => 
        array (
          'key' => 'Chinese (Singapore)',
          'value' => 'zh_Hans_SG',
        ),
        120 => 
        array (
          'key' => 'Chinese (Taiwan)',
          'value' => 'zh_Hant_TW',
        ),
        121 => 
        array (
          'key' => 'Colognian',
          'value' => 'ksh',
        ),
        122 => 
        array (
          'key' => 'Colognian (Germany)',
          'value' => 'ksh_DE',
        ),
        123 => 
        array (
          'key' => 'Cornish',
          'value' => 'kw',
        ),
        124 => 
        array (
          'key' => 'Cornish (United Kingdom)',
          'value' => 'kw_GB',
        ),
        125 => 
        array (
          'key' => 'Croatian',
          'value' => 'hr',
        ),
        126 => 
        array (
          'key' => 'Croatian (Bosnia & Herzegovina)',
          'value' => 'hr_BA',
        ),
        127 => 
        array (
          'key' => 'Croatian (Croatia)',
          'value' => 'hr_HR',
        ),
        128 => 
        array (
          'key' => 'Czech',
          'value' => 'cs',
        ),
        129 => 
        array (
          'key' => 'Czech (Czechia)',
          'value' => 'cs_CZ',
        ),
        130 => 
        array (
          'key' => 'Danish',
          'value' => 'da',
        ),
        131 => 
        array (
          'key' => 'Danish (Denmark)',
          'value' => 'da_DK',
        ),
        132 => 
        array (
          'key' => 'Danish (Greenland)',
          'value' => 'da_GL',
        ),
        133 => 
        array (
          'key' => 'Duala',
          'value' => 'dua',
        ),
        134 => 
        array (
          'key' => 'Duala (Cameroon)',
          'value' => 'dua_CM',
        ),
        135 => 
        array (
          'key' => 'Dutch',
          'value' => 'nl',
        ),
        136 => 
        array (
          'key' => 'Dutch (Aruba)',
          'value' => 'nl_AW',
        ),
        137 => 
        array (
          'key' => 'Dutch (Belgium)',
          'value' => 'nl_BE',
        ),
        138 => 
        array (
          'key' => 'Dutch (Caribbean Netherlands)',
          'value' => 'nl_BQ',
        ),
        139 => 
        array (
          'key' => 'Dutch (Curaçao)',
          'value' => 'nl_CW',
        ),
        140 => 
        array (
          'key' => 'Dutch (Netherlands)',
          'value' => 'nl_NL',
        ),
        141 => 
        array (
          'key' => 'Dutch (Sint Maarten)',
          'value' => 'nl_SX',
        ),
        142 => 
        array (
          'key' => 'Dutch (Suriname)',
          'value' => 'nl_SR',
        ),
        143 => 
        array (
          'key' => 'Dzongkha',
          'value' => 'dz',
        ),
        144 => 
        array (
          'key' => 'Dzongkha (Bhutan)',
          'value' => 'dz_BT',
        ),
        145 => 
        array (
          'key' => 'Embu',
          'value' => 'ebu',
        ),
        146 => 
        array (
          'key' => 'Embu (Kenya)',
          'value' => 'ebu_KE',
        ),
        147 => 
        array (
          'key' => 'English',
          'value' => 'en',
        ),
        148 => 
        array (
          'key' => 'English (American Samoa)',
          'value' => 'en_AS',
        ),
        149 => 
        array (
          'key' => 'English (Anguilla)',
          'value' => 'en_AI',
        ),
        150 => 
        array (
          'key' => 'English (Antigua & Barbuda)',
          'value' => 'en_AG',
        ),
        151 => 
        array (
          'key' => 'English (Australia)',
          'value' => 'en_AU',
        ),
        152 => 
        array (
          'key' => 'English (Austria)',
          'value' => 'en_AT',
        ),
        153 => 
        array (
          'key' => 'English (Bahamas)',
          'value' => 'en_BS',
        ),
        154 => 
        array (
          'key' => 'English (Barbados)',
          'value' => 'en_BB',
        ),
        155 => 
        array (
          'key' => 'English (Belgium)',
          'value' => 'en_BE',
        ),
        156 => 
        array (
          'key' => 'English (Belize)',
          'value' => 'en_BZ',
        ),
        157 => 
        array (
          'key' => 'English (Bermuda)',
          'value' => 'en_BM',
        ),
        158 => 
        array (
          'key' => 'English (Botswana)',
          'value' => 'en_BW',
        ),
        159 => 
        array (
          'key' => 'English (British Indian Ocean Territory)',
          'value' => 'en_IO',
        ),
        160 => 
        array (
          'key' => 'English (British Virgin Islands)',
          'value' => 'en_VG',
        ),
        161 => 
        array (
          'key' => 'English (Burundi)',
          'value' => 'en_BI',
        ),
        162 => 
        array (
          'key' => 'English (Cameroon)',
          'value' => 'en_CM',
        ),
        163 => 
        array (
          'key' => 'English (Canada)',
          'value' => 'en_CA',
        ),
        164 => 
        array (
          'key' => 'English (Cayman Islands)',
          'value' => 'en_KY',
        ),
        165 => 
        array (
          'key' => 'English (Christmas Island)',
          'value' => 'en_CX',
        ),
        166 => 
        array (
          'key' => 'English (Cocos (Keeling) Islands)',
          'value' => 'en_CC',
        ),
        167 => 
        array (
          'key' => 'English (Cook Islands)',
          'value' => 'en_CK',
        ),
        168 => 
        array (
          'key' => 'English (Cyprus)',
          'value' => 'en_CY',
        ),
        169 => 
        array (
          'key' => 'English (Denmark)',
          'value' => 'en_DK',
        ),
        170 => 
        array (
          'key' => 'English (Diego Garcia)',
          'value' => 'en_DG',
        ),
        171 => 
        array (
          'key' => 'English (Dominica)',
          'value' => 'en_DM',
        ),
        172 => 
        array (
          'key' => 'English (Eritrea)',
          'value' => 'en_ER',
        ),
        173 => 
        array (
          'key' => 'English (Eswatini)',
          'value' => 'en_SZ',
        ),
        174 => 
        array (
          'key' => 'English (Europe)',
          'value' => 'en_150',
        ),
        175 => 
        array (
          'key' => 'English (Falkland Islands)',
          'value' => 'en_FK',
        ),
        176 => 
        array (
          'key' => 'English (Fiji)',
          'value' => 'en_FJ',
        ),
        177 => 
        array (
          'key' => 'English (Finland)',
          'value' => 'en_FI',
        ),
        178 => 
        array (
          'key' => 'English (Gambia)',
          'value' => 'en_GM',
        ),
        179 => 
        array (
          'key' => 'English (Germany)',
          'value' => 'en_DE',
        ),
        180 => 
        array (
          'key' => 'English (Ghana)',
          'value' => 'en_GH',
        ),
        181 => 
        array (
          'key' => 'English (Gibraltar)',
          'value' => 'en_GI',
        ),
        182 => 
        array (
          'key' => 'English (Grenada)',
          'value' => 'en_GD',
        ),
        183 => 
        array (
          'key' => 'English (Guam)',
          'value' => 'en_GU',
        ),
        184 => 
        array (
          'key' => 'English (Guernsey)',
          'value' => 'en_GG',
        ),
        185 => 
        array (
          'key' => 'English (Guyana)',
          'value' => 'en_GY',
        ),
        186 => 
        array (
          'key' => 'English (Hong Kong SAR China)',
          'value' => 'en_HK',
        ),
        187 => 
        array (
          'key' => 'English (India)',
          'value' => 'en_IN',
        ),
        188 => 
        array (
          'key' => 'English (Ireland)',
          'value' => 'en_IE',
        ),
        189 => 
        array (
          'key' => 'English (Isle of Man)',
          'value' => 'en_IM',
        ),
        190 => 
        array (
          'key' => 'English (Israel)',
          'value' => 'en_IL',
        ),
        191 => 
        array (
          'key' => 'English (Jamaica)',
          'value' => 'en_JM',
        ),
        192 => 
        array (
          'key' => 'English (Jersey)',
          'value' => 'en_JE',
        ),
        193 => 
        array (
          'key' => 'English (Kenya)',
          'value' => 'en_KE',
        ),
        194 => 
        array (
          'key' => 'English (Kiribati)',
          'value' => 'en_KI',
        ),
        195 => 
        array (
          'key' => 'English (Lesotho)',
          'value' => 'en_LS',
        ),
        196 => 
        array (
          'key' => 'English (Liberia)',
          'value' => 'en_LR',
        ),
        197 => 
        array (
          'key' => 'English (Macao SAR China)',
          'value' => 'en_MO',
        ),
        198 => 
        array (
          'key' => 'English (Madagascar)',
          'value' => 'en_MG',
        ),
        199 => 
        array (
          'key' => 'English (Malawi)',
          'value' => 'en_MW',
        ),
        200 => 
        array (
          'key' => 'English (Malaysia)',
          'value' => 'en_MY',
        ),
        201 => 
        array (
          'key' => 'English (Malta)',
          'value' => 'en_MT',
        ),
        202 => 
        array (
          'key' => 'English (Marshall Islands)',
          'value' => 'en_MH',
        ),
        203 => 
        array (
          'key' => 'English (Mauritius)',
          'value' => 'en_MU',
        ),
        204 => 
        array (
          'key' => 'English (Micronesia)',
          'value' => 'en_FM',
        ),
        205 => 
        array (
          'key' => 'English (Montserrat)',
          'value' => 'en_MS',
        ),
        206 => 
        array (
          'key' => 'English (Namibia)',
          'value' => 'en_NA',
        ),
        207 => 
        array (
          'key' => 'English (Nauru)',
          'value' => 'en_NR',
        ),
        208 => 
        array (
          'key' => 'English (Netherlands)',
          'value' => 'en_NL',
        ),
        209 => 
        array (
          'key' => 'English (New Zealand)',
          'value' => 'en_NZ',
        ),
        210 => 
        array (
          'key' => 'English (Nigeria)',
          'value' => 'en_NG',
        ),
        211 => 
        array (
          'key' => 'English (Niue)',
          'value' => 'en_NU',
        ),
        212 => 
        array (
          'key' => 'English (Norfolk Island)',
          'value' => 'en_NF',
        ),
        213 => 
        array (
          'key' => 'English (Northern Mariana Islands)',
          'value' => 'en_MP',
        ),
        214 => 
        array (
          'key' => 'English (Pakistan)',
          'value' => 'en_PK',
        ),
        215 => 
        array (
          'key' => 'English (Palau)',
          'value' => 'en_PW',
        ),
        216 => 
        array (
          'key' => 'English (Papua New Guinea)',
          'value' => 'en_PG',
        ),
        217 => 
        array (
          'key' => 'English (Philippines)',
          'value' => 'en_PH',
        ),
        218 => 
        array (
          'key' => 'English (Pitcairn Islands)',
          'value' => 'en_PN',
        ),
        219 => 
        array (
          'key' => 'English (Puerto Rico)',
          'value' => 'en_PR',
        ),
        220 => 
        array (
          'key' => 'English (Rwanda)',
          'value' => 'en_RW',
        ),
        221 => 
        array (
          'key' => 'English (Samoa)',
          'value' => 'en_WS',
        ),
        222 => 
        array (
          'key' => 'English (Seychelles)',
          'value' => 'en_SC',
        ),
        223 => 
        array (
          'key' => 'English (Sierra Leone)',
          'value' => 'en_SL',
        ),
        224 => 
        array (
          'key' => 'English (Singapore)',
          'value' => 'en_SG',
        ),
        225 => 
        array (
          'key' => 'English (Sint Maarten)',
          'value' => 'en_SX',
        ),
        226 => 
        array (
          'key' => 'English (Slovenia)',
          'value' => 'en_SI',
        ),
        227 => 
        array (
          'key' => 'English (Solomon Islands)',
          'value' => 'en_SB',
        ),
        228 => 
        array (
          'key' => 'English (South Africa)',
          'value' => 'en_ZA',
        ),
        229 => 
        array (
          'key' => 'English (South Sudan)',
          'value' => 'en_SS',
        ),
        230 => 
        array (
          'key' => 'English (St. Helena)',
          'value' => 'en_SH',
        ),
        231 => 
        array (
          'key' => 'English (St. Kitts & Nevis)',
          'value' => 'en_KN',
        ),
        232 => 
        array (
          'key' => 'English (St. Lucia)',
          'value' => 'en_LC',
        ),
        233 => 
        array (
          'key' => 'English (St. Vincent & Grenadines)',
          'value' => 'en_VC',
        ),
        234 => 
        array (
          'key' => 'English (Sudan)',
          'value' => 'en_SD',
        ),
        235 => 
        array (
          'key' => 'English (Sweden)',
          'value' => 'en_SE',
        ),
        236 => 
        array (
          'key' => 'English (Switzerland)',
          'value' => 'en_CH',
        ),
        237 => 
        array (
          'key' => 'English (Tanzania)',
          'value' => 'en_TZ',
        ),
        238 => 
        array (
          'key' => 'English (Tokelau)',
          'value' => 'en_TK',
        ),
        239 => 
        array (
          'key' => 'English (Tonga)',
          'value' => 'en_TO',
        ),
        240 => 
        array (
          'key' => 'English (Trinidad & Tobago)',
          'value' => 'en_TT',
        ),
        241 => 
        array (
          'key' => 'English (Turks & Caicos Islands)',
          'value' => 'en_TC',
        ),
        242 => 
        array (
          'key' => 'English (Tuvalu)',
          'value' => 'en_TV',
        ),
        243 => 
        array (
          'key' => 'English (U.S. Outlying Islands)',
          'value' => 'en_UM',
        ),
        244 => 
        array (
          'key' => 'English (U.S. Virgin Islands)',
          'value' => 'en_VI',
        ),
        245 => 
        array (
          'key' => 'English (Uganda)',
          'value' => 'en_UG',
        ),
        246 => 
        array (
          'key' => 'English (United Arab Emirates)',
          'value' => 'en_AE',
        ),
        247 => 
        array (
          'key' => 'English (United Kingdom)',
          'value' => 'en_GB',
        ),
        248 => 
        array (
          'key' => 'English (United States)',
          'value' => 'en_US',
        ),
        249 => 
        array (
          'key' => 'English (United States)',
          'value' => 'en_US_POSIX',
        ),
        250 => 
        array (
          'key' => 'English (Vanuatu)',
          'value' => 'en_VU',
        ),
        251 => 
        array (
          'key' => 'English (World)',
          'value' => 'en_001',
        ),
        252 => 
        array (
          'key' => 'English (Zambia)',
          'value' => 'en_ZM',
        ),
        253 => 
        array (
          'key' => 'English (Zimbabwe)',
          'value' => 'en_ZW',
        ),
        254 => 
        array (
          'key' => 'Esperanto',
          'value' => 'eo',
        ),
        255 => 
        array (
          'key' => 'Esperanto (World)',
          'value' => 'eo_001',
        ),
        256 => 
        array (
          'key' => 'Estonian',
          'value' => 'et',
        ),
        257 => 
        array (
          'key' => 'Estonian (Estonia)',
          'value' => 'et_EE',
        ),
        258 => 
        array (
          'key' => 'Ewe',
          'value' => 'ee',
        ),
        259 => 
        array (
          'key' => 'Ewe (Ghana)',
          'value' => 'ee_GH',
        ),
        260 => 
        array (
          'key' => 'Ewe (Togo)',
          'value' => 'ee_TG',
        ),
        261 => 
        array (
          'key' => 'Ewondo',
          'value' => 'ewo',
        ),
        262 => 
        array (
          'key' => 'Ewondo (Cameroon)',
          'value' => 'ewo_CM',
        ),
        263 => 
        array (
          'key' => 'Faroese',
          'value' => 'fo',
        ),
        264 => 
        array (
          'key' => 'Faroese (Denmark)',
          'value' => 'fo_DK',
        ),
        265 => 
        array (
          'key' => 'Faroese (Faroe Islands)',
          'value' => 'fo_FO',
        ),
        266 => 
        array (
          'key' => 'Filipino',
          'value' => 'fil',
        ),
        267 => 
        array (
          'key' => 'Filipino (Philippines)',
          'value' => 'fil_PH',
        ),
        268 => 
        array (
          'key' => 'Finnish',
          'value' => 'fi',
        ),
        269 => 
        array (
          'key' => 'Finnish (Finland)',
          'value' => 'fi_FI',
        ),
        270 => 
        array (
          'key' => 'French',
          'value' => 'fr',
        ),
        271 => 
        array (
          'key' => 'French (Algeria)',
          'value' => 'fr_DZ',
        ),
        272 => 
        array (
          'key' => 'French (Belgium)',
          'value' => 'fr_BE',
        ),
        273 => 
        array (
          'key' => 'French (Benin)',
          'value' => 'fr_BJ',
        ),
        274 => 
        array (
          'key' => 'French (Burkina Faso)',
          'value' => 'fr_BF',
        ),
        275 => 
        array (
          'key' => 'French (Burundi)',
          'value' => 'fr_BI',
        ),
        276 => 
        array (
          'key' => 'French (Cameroon)',
          'value' => 'fr_CM',
        ),
        277 => 
        array (
          'key' => 'French (Canada)',
          'value' => 'fr_CA',
        ),
        278 => 
        array (
          'key' => 'French (Central African Republic)',
          'value' => 'fr_CF',
        ),
        279 => 
        array (
          'key' => 'French (Chad)',
          'value' => 'fr_TD',
        ),
        280 => 
        array (
          'key' => 'French (Comoros)',
          'value' => 'fr_KM',
        ),
        281 => 
        array (
          'key' => 'French (Congo - Brazzaville)',
          'value' => 'fr_CG',
        ),
        282 => 
        array (
          'key' => 'French (Congo - Kinshasa)',
          'value' => 'fr_CD',
        ),
        283 => 
        array (
          'key' => 'French (Côte d’Ivoire)',
          'value' => 'fr_CI',
        ),
        284 => 
        array (
          'key' => 'French (Djibouti)',
          'value' => 'fr_DJ',
        ),
        285 => 
        array (
          'key' => 'French (Equatorial Guinea)',
          'value' => 'fr_GQ',
        ),
        286 => 
        array (
          'key' => 'French (France)',
          'value' => 'fr_FR',
        ),
        287 => 
        array (
          'key' => 'French (French Guiana)',
          'value' => 'fr_GF',
        ),
        288 => 
        array (
          'key' => 'French (French Polynesia)',
          'value' => 'fr_PF',
        ),
        289 => 
        array (
          'key' => 'French (Gabon)',
          'value' => 'fr_GA',
        ),
        290 => 
        array (
          'key' => 'French (Guadeloupe)',
          'value' => 'fr_GP',
        ),
        291 => 
        array (
          'key' => 'French (Guinea)',
          'value' => 'fr_GN',
        ),
        292 => 
        array (
          'key' => 'French (Haiti)',
          'value' => 'fr_HT',
        ),
        293 => 
        array (
          'key' => 'French (Luxembourg)',
          'value' => 'fr_LU',
        ),
        294 => 
        array (
          'key' => 'French (Madagascar)',
          'value' => 'fr_MG',
        ),
        295 => 
        array (
          'key' => 'French (Mali)',
          'value' => 'fr_ML',
        ),
        296 => 
        array (
          'key' => 'French (Martinique)',
          'value' => 'fr_MQ',
        ),
        297 => 
        array (
          'key' => 'French (Mauritania)',
          'value' => 'fr_MR',
        ),
        298 => 
        array (
          'key' => 'French (Mauritius)',
          'value' => 'fr_MU',
        ),
        299 => 
        array (
          'key' => 'French (Mayotte)',
          'value' => 'fr_YT',
        ),
        300 => 
        array (
          'key' => 'French (Monaco)',
          'value' => 'fr_MC',
        ),
        301 => 
        array (
          'key' => 'French (Morocco)',
          'value' => 'fr_MA',
        ),
        302 => 
        array (
          'key' => 'French (New Caledonia)',
          'value' => 'fr_NC',
        ),
        303 => 
        array (
          'key' => 'French (Niger)',
          'value' => 'fr_NE',
        ),
        304 => 
        array (
          'key' => 'French (Rwanda)',
          'value' => 'fr_RW',
        ),
        305 => 
        array (
          'key' => 'French (Réunion)',
          'value' => 'fr_RE',
        ),
        306 => 
        array (
          'key' => 'French (Senegal)',
          'value' => 'fr_SN',
        ),
        307 => 
        array (
          'key' => 'French (Seychelles)',
          'value' => 'fr_SC',
        ),
        308 => 
        array (
          'key' => 'French (St. Barthélemy)',
          'value' => 'fr_BL',
        ),
        309 => 
        array (
          'key' => 'French (St. Martin)',
          'value' => 'fr_MF',
        ),
        310 => 
        array (
          'key' => 'French (St. Pierre & Miquelon)',
          'value' => 'fr_PM',
        ),
        311 => 
        array (
          'key' => 'French (Switzerland)',
          'value' => 'fr_CH',
        ),
        312 => 
        array (
          'key' => 'French (Syria)',
          'value' => 'fr_SY',
        ),
        313 => 
        array (
          'key' => 'French (Togo)',
          'value' => 'fr_TG',
        ),
        314 => 
        array (
          'key' => 'French (Tunisia)',
          'value' => 'fr_TN',
        ),
        315 => 
        array (
          'key' => 'French (Vanuatu)',
          'value' => 'fr_VU',
        ),
        316 => 
        array (
          'key' => 'French (Wallis & Futuna)',
          'value' => 'fr_WF',
        ),
        317 => 
        array (
          'key' => 'Friulian',
          'value' => 'fur',
        ),
        318 => 
        array (
          'key' => 'Friulian (Italy)',
          'value' => 'fur_IT',
        ),
        319 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff',
        ),
        320 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff_Adlm',
        ),
        321 => 
        array (
          'key' => 'Fulah',
          'value' => 'ff_Latn',
        ),
        322 => 
        array (
          'key' => 'Fulah (Burkina Faso)',
          'value' => 'ff_Adlm_BF',
        ),
        323 => 
        array (
          'key' => 'Fulah (Burkina Faso)',
          'value' => 'ff_Latn_BF',
        ),
        324 => 
        array (
          'key' => 'Fulah (Cameroon)',
          'value' => 'ff_Adlm_CM',
        ),
        325 => 
        array (
          'key' => 'Fulah (Cameroon)',
          'value' => 'ff_Latn_CM',
        ),
        326 => 
        array (
          'key' => 'Fulah (Gambia)',
          'value' => 'ff_Adlm_GM',
        ),
        327 => 
        array (
          'key' => 'Fulah (Gambia)',
          'value' => 'ff_Latn_GM',
        ),
        328 => 
        array (
          'key' => 'Fulah (Ghana)',
          'value' => 'ff_Adlm_GH',
        ),
        329 => 
        array (
          'key' => 'Fulah (Ghana)',
          'value' => 'ff_Latn_GH',
        ),
        330 => 
        array (
          'key' => 'Fulah (Guinea)',
          'value' => 'ff_Adlm_GN',
        ),
        331 => 
        array (
          'key' => 'Fulah (Guinea)',
          'value' => 'ff_Latn_GN',
        ),
        332 => 
        array (
          'key' => 'Fulah (Guinea-Bissau)',
          'value' => 'ff_Adlm_GW',
        ),
        333 => 
        array (
          'key' => 'Fulah (Guinea-Bissau)',
          'value' => 'ff_Latn_GW',
        ),
        334 => 
        array (
          'key' => 'Fulah (Liberia)',
          'value' => 'ff_Adlm_LR',
        ),
        335 => 
        array (
          'key' => 'Fulah (Liberia)',
          'value' => 'ff_Latn_LR',
        ),
        336 => 
        array (
          'key' => 'Fulah (Mauritania)',
          'value' => 'ff_Adlm_MR',
        ),
        337 => 
        array (
          'key' => 'Fulah (Mauritania)',
          'value' => 'ff_Latn_MR',
        ),
        338 => 
        array (
          'key' => 'Fulah (Niger)',
          'value' => 'ff_Adlm_NE',
        ),
        339 => 
        array (
          'key' => 'Fulah (Niger)',
          'value' => 'ff_Latn_NE',
        ),
        340 => 
        array (
          'key' => 'Fulah (Nigeria)',
          'value' => 'ff_Adlm_NG',
        ),
        341 => 
        array (
          'key' => 'Fulah (Nigeria)',
          'value' => 'ff_Latn_NG',
        ),
        342 => 
        array (
          'key' => 'Fulah (Senegal)',
          'value' => 'ff_Adlm_SN',
        ),
        343 => 
        array (
          'key' => 'Fulah (Senegal)',
          'value' => 'ff_Latn_SN',
        ),
        344 => 
        array (
          'key' => 'Fulah (Sierra Leone)',
          'value' => 'ff_Adlm_SL',
        ),
        345 => 
        array (
          'key' => 'Fulah (Sierra Leone)',
          'value' => 'ff_Latn_SL',
        ),
        346 => 
        array (
          'key' => 'Galician',
          'value' => 'gl',
        ),
        347 => 
        array (
          'key' => 'Galician (Spain)',
          'value' => 'gl_ES',
        ),
        348 => 
        array (
          'key' => 'Ganda',
          'value' => 'lg',
        ),
        349 => 
        array (
          'key' => 'Ganda (Uganda)',
          'value' => 'lg_UG',
        ),
        350 => 
        array (
          'key' => 'Georgian',
          'value' => 'ka',
        ),
        351 => 
        array (
          'key' => 'Georgian (Georgia)',
          'value' => 'ka_GE',
        ),
        352 => 
        array (
          'key' => 'German',
          'value' => 'de',
        ),
        353 => 
        array (
          'key' => 'German (Austria)',
          'value' => 'de_AT',
        ),
        354 => 
        array (
          'key' => 'German (Belgium)',
          'value' => 'de_BE',
        ),
        355 => 
        array (
          'key' => 'German (Germany)',
          'value' => 'de_DE',
        ),
        356 => 
        array (
          'key' => 'German (Italy)',
          'value' => 'de_IT',
        ),
        357 => 
        array (
          'key' => 'German (Liechtenstein)',
          'value' => 'de_LI',
        ),
        358 => 
        array (
          'key' => 'German (Luxembourg)',
          'value' => 'de_LU',
        ),
        359 => 
        array (
          'key' => 'German (Switzerland)',
          'value' => 'de_CH',
        ),
        360 => 
        array (
          'key' => 'Greek',
          'value' => 'el',
        ),
        361 => 
        array (
          'key' => 'Greek (Cyprus)',
          'value' => 'el_CY',
        ),
        362 => 
        array (
          'key' => 'Greek (Greece)',
          'value' => 'el_GR',
        ),
        363 => 
        array (
          'key' => 'Gujarati',
          'value' => 'gu',
        ),
        364 => 
        array (
          'key' => 'Gujarati (India)',
          'value' => 'gu_IN',
        ),
        365 => 
        array (
          'key' => 'Gusii',
          'value' => 'guz',
        ),
        366 => 
        array (
          'key' => 'Gusii (Kenya)',
          'value' => 'guz_KE',
        ),
        367 => 
        array (
          'key' => 'Hausa',
          'value' => 'ha',
        ),
        368 => 
        array (
          'key' => 'Hausa (Ghana)',
          'value' => 'ha_GH',
        ),
        369 => 
        array (
          'key' => 'Hausa (Niger)',
          'value' => 'ha_NE',
        ),
        370 => 
        array (
          'key' => 'Hausa (Nigeria)',
          'value' => 'ha_NG',
        ),
        371 => 
        array (
          'key' => 'Hawaiian',
          'value' => 'haw',
        ),
        372 => 
        array (
          'key' => 'Hawaiian (United States)',
          'value' => 'haw_US',
        ),
        373 => 
        array (
          'key' => 'Hebrew',
          'value' => 'he',
        ),
        374 => 
        array (
          'key' => 'Hebrew (Israel)',
          'value' => 'he_IL',
        ),
        375 => 
        array (
          'key' => 'Hindi',
          'value' => 'hi',
        ),
        376 => 
        array (
          'key' => 'Hindi (India)',
          'value' => 'hi_IN',
        ),
        377 => 
        array (
          'key' => 'Hungarian',
          'value' => 'hu',
        ),
        378 => 
        array (
          'key' => 'Hungarian (Hungary)',
          'value' => 'hu_HU',
        ),
        379 => 
        array (
          'key' => 'Icelandic',
          'value' => 'is',
        ),
        380 => 
        array (
          'key' => 'Icelandic (Iceland)',
          'value' => 'is_IS',
        ),
        381 => 
        array (
          'key' => 'Igbo',
          'value' => 'ig',
        ),
        382 => 
        array (
          'key' => 'Igbo (Nigeria)',
          'value' => 'ig_NG',
        ),
        383 => 
        array (
          'key' => 'Inari Sami',
          'value' => 'smn',
        ),
        384 => 
        array (
          'key' => 'Inari Sami (Finland)',
          'value' => 'smn_FI',
        ),
        385 => 
        array (
          'key' => 'Indonesian',
          'value' => 'id',
        ),
        386 => 
        array (
          'key' => 'Indonesian (Indonesia)',
          'value' => 'id_ID',
        ),
        387 => 
        array (
          'key' => 'Interlingua',
          'value' => 'ia',
        ),
        388 => 
        array (
          'key' => 'Interlingua (World)',
          'value' => 'ia_001',
        ),
        389 => 
        array (
          'key' => 'Irish',
          'value' => 'ga',
        ),
        390 => 
        array (
          'key' => 'Irish (Ireland)',
          'value' => 'ga_IE',
        ),
        391 => 
        array (
          'key' => 'Irish (United Kingdom)',
          'value' => 'ga_GB',
        ),
        392 => 
        array (
          'key' => 'Italian',
          'value' => 'it',
        ),
        393 => 
        array (
          'key' => 'Italian (Italy)',
          'value' => 'it_IT',
        ),
        394 => 
        array (
          'key' => 'Italian (San Marino)',
          'value' => 'it_SM',
        ),
        395 => 
        array (
          'key' => 'Italian (Switzerland)',
          'value' => 'it_CH',
        ),
        396 => 
        array (
          'key' => 'Italian (Vatican City)',
          'value' => 'it_VA',
        ),
        397 => 
        array (
          'key' => 'Japanese',
          'value' => 'ja',
        ),
        398 => 
        array (
          'key' => 'Japanese (Japan)',
          'value' => 'ja_JP',
        ),
        399 => 
        array (
          'key' => 'Javanese',
          'value' => 'jv',
        ),
        400 => 
        array (
          'key' => 'Javanese (Indonesia)',
          'value' => 'jv_ID',
        ),
        401 => 
        array (
          'key' => 'Jola-Fonyi',
          'value' => 'dyo',
        ),
        402 => 
        array (
          'key' => 'Jola-Fonyi (Senegal)',
          'value' => 'dyo_SN',
        ),
        403 => 
        array (
          'key' => 'Kabuverdianu',
          'value' => 'kea',
        ),
        404 => 
        array (
          'key' => 'Kabuverdianu (Cape Verde)',
          'value' => 'kea_CV',
        ),
        405 => 
        array (
          'key' => 'Kabyle',
          'value' => 'kab',
        ),
        406 => 
        array (
          'key' => 'Kabyle (Algeria)',
          'value' => 'kab_DZ',
        ),
        407 => 
        array (
          'key' => 'Kako',
          'value' => 'kkj',
        ),
        408 => 
        array (
          'key' => 'Kako (Cameroon)',
          'value' => 'kkj_CM',
        ),
        409 => 
        array (
          'key' => 'Kalaallisut',
          'value' => 'kl',
        ),
        410 => 
        array (
          'key' => 'Kalaallisut (Greenland)',
          'value' => 'kl_GL',
        ),
        411 => 
        array (
          'key' => 'Kalenjin',
          'value' => 'kln',
        ),
        412 => 
        array (
          'key' => 'Kalenjin (Kenya)',
          'value' => 'kln_KE',
        ),
        413 => 
        array (
          'key' => 'Kamba',
          'value' => 'kam',
        ),
        414 => 
        array (
          'key' => 'Kamba (Kenya)',
          'value' => 'kam_KE',
        ),
        415 => 
        array (
          'key' => 'Kannada',
          'value' => 'kn',
        ),
        416 => 
        array (
          'key' => 'Kannada (India)',
          'value' => 'kn_IN',
        ),
        417 => 
        array (
          'key' => 'Kashmiri',
          'value' => 'ks',
        ),
        418 => 
        array (
          'key' => 'Kashmiri',
          'value' => 'ks_Arab',
        ),
        419 => 
        array (
          'key' => 'Kashmiri (India)',
          'value' => 'ks_Arab_IN',
        ),
        420 => 
        array (
          'key' => 'Kazakh',
          'value' => 'kk',
        ),
        421 => 
        array (
          'key' => 'Kazakh (Kazakhstan)',
          'value' => 'kk_KZ',
        ),
        422 => 
        array (
          'key' => 'Khmer',
          'value' => 'km',
        ),
        423 => 
        array (
          'key' => 'Khmer (Cambodia)',
          'value' => 'km_KH',
        ),
        424 => 
        array (
          'key' => 'Kikuyu',
          'value' => 'ki',
        ),
        425 => 
        array (
          'key' => 'Kikuyu (Kenya)',
          'value' => 'ki_KE',
        ),
        426 => 
        array (
          'key' => 'Kinyarwanda',
          'value' => 'rw',
        ),
        427 => 
        array (
          'key' => 'Kinyarwanda (Rwanda)',
          'value' => 'rw_RW',
        ),
        428 => 
        array (
          'key' => 'Konkani',
          'value' => 'kok',
        ),
        429 => 
        array (
          'key' => 'Konkani (India)',
          'value' => 'kok_IN',
        ),
        430 => 
        array (
          'key' => 'Korean',
          'value' => 'ko',
        ),
        431 => 
        array (
          'key' => 'Korean (North Korea)',
          'value' => 'ko_KP',
        ),
        432 => 
        array (
          'key' => 'Korean (South Korea)',
          'value' => 'ko_KR',
        ),
        433 => 
        array (
          'key' => 'Koyra Chiini',
          'value' => 'khq',
        ),
        434 => 
        array (
          'key' => 'Koyra Chiini (Mali)',
          'value' => 'khq_ML',
        ),
        435 => 
        array (
          'key' => 'Koyraboro Senni',
          'value' => 'ses',
        ),
        436 => 
        array (
          'key' => 'Koyraboro Senni (Mali)',
          'value' => 'ses_ML',
        ),
        437 => 
        array (
          'key' => 'Kurdish',
          'value' => 'ku',
        ),
        438 => 
        array (
          'key' => 'Kurdish (Turkey)',
          'value' => 'ku_TR',
        ),
        439 => 
        array (
          'key' => 'Kwasio',
          'value' => 'nmg',
        ),
        440 => 
        array (
          'key' => 'Kwasio (Cameroon)',
          'value' => 'nmg_CM',
        ),
        441 => 
        array (
          'key' => 'Kyrgyz',
          'value' => 'ky',
        ),
        442 => 
        array (
          'key' => 'Kyrgyz (Kyrgyzstan)',
          'value' => 'ky_KG',
        ),
        443 => 
        array (
          'key' => 'Lakota',
          'value' => 'lkt',
        ),
        444 => 
        array (
          'key' => 'Lakota (United States)',
          'value' => 'lkt_US',
        ),
        445 => 
        array (
          'key' => 'Langi',
          'value' => 'lag',
        ),
        446 => 
        array (
          'key' => 'Langi (Tanzania)',
          'value' => 'lag_TZ',
        ),
        447 => 
        array (
          'key' => 'Lao',
          'value' => 'lo',
        ),
        448 => 
        array (
          'key' => 'Lao (Laos)',
          'value' => 'lo_LA',
        ),
        449 => 
        array (
          'key' => 'Latvian',
          'value' => 'lv',
        ),
        450 => 
        array (
          'key' => 'Latvian (Latvia)',
          'value' => 'lv_LV',
        ),
        451 => 
        array (
          'key' => 'Lingala',
          'value' => 'ln',
        ),
        452 => 
        array (
          'key' => 'Lingala (Angola)',
          'value' => 'ln_AO',
        ),
        453 => 
        array (
          'key' => 'Lingala (Central African Republic)',
          'value' => 'ln_CF',
        ),
        454 => 
        array (
          'key' => 'Lingala (Congo - Brazzaville)',
          'value' => 'ln_CG',
        ),
        455 => 
        array (
          'key' => 'Lingala (Congo - Kinshasa)',
          'value' => 'ln_CD',
        ),
        456 => 
        array (
          'key' => 'Lithuanian',
          'value' => 'lt',
        ),
        457 => 
        array (
          'key' => 'Lithuanian (Lithuania)',
          'value' => 'lt_LT',
        ),
        458 => 
        array (
          'key' => 'Low German',
          'value' => 'nds',
        ),
        459 => 
        array (
          'key' => 'Low German (Germany)',
          'value' => 'nds_DE',
        ),
        460 => 
        array (
          'key' => 'Low German (Netherlands)',
          'value' => 'nds_NL',
        ),
        461 => 
        array (
          'key' => 'Lower Sorbian',
          'value' => 'dsb',
        ),
        462 => 
        array (
          'key' => 'Lower Sorbian (Germany)',
          'value' => 'dsb_DE',
        ),
        463 => 
        array (
          'key' => 'Luba-Katanga',
          'value' => 'lu',
        ),
        464 => 
        array (
          'key' => 'Luba-Katanga (Congo - Kinshasa)',
          'value' => 'lu_CD',
        ),
        465 => 
        array (
          'key' => 'Luo',
          'value' => 'luo',
        ),
        466 => 
        array (
          'key' => 'Luo (Kenya)',
          'value' => 'luo_KE',
        ),
        467 => 
        array (
          'key' => 'Luxembourgish',
          'value' => 'lb',
        ),
        468 => 
        array (
          'key' => 'Luxembourgish (Luxembourg)',
          'value' => 'lb_LU',
        ),
        469 => 
        array (
          'key' => 'Luyia',
          'value' => 'luy',
        ),
        470 => 
        array (
          'key' => 'Luyia (Kenya)',
          'value' => 'luy_KE',
        ),
        471 => 
        array (
          'key' => 'Macedonian',
          'value' => 'mk',
        ),
        472 => 
        array (
          'key' => 'Macedonian (North Macedonia)',
          'value' => 'mk_MK',
        ),
        473 => 
        array (
          'key' => 'Machame',
          'value' => 'jmc',
        ),
        474 => 
        array (
          'key' => 'Machame (Tanzania)',
          'value' => 'jmc_TZ',
        ),
        475 => 
        array (
          'key' => 'Maithili',
          'value' => 'mai',
        ),
        476 => 
        array (
          'key' => 'Maithili (India)',
          'value' => 'mai_IN',
        ),
        477 => 
        array (
          'key' => 'Makhuwa-Meetto',
          'value' => 'mgh',
        ),
        478 => 
        array (
          'key' => 'Makhuwa-Meetto (Mozambique)',
          'value' => 'mgh_MZ',
        ),
        479 => 
        array (
          'key' => 'Makonde',
          'value' => 'kde',
        ),
        480 => 
        array (
          'key' => 'Makonde (Tanzania)',
          'value' => 'kde_TZ',
        ),
        481 => 
        array (
          'key' => 'Malagasy',
          'value' => 'mg',
        ),
        482 => 
        array (
          'key' => 'Malagasy (Madagascar)',
          'value' => 'mg_MG',
        ),
        483 => 
        array (
          'key' => 'Malay',
          'value' => 'ms',
        ),
        484 => 
        array (
          'key' => 'Malay (Brunei)',
          'value' => 'ms_BN',
        ),
        485 => 
        array (
          'key' => 'Malay (Indonesia)',
          'value' => 'ms_ID',
        ),
        486 => 
        array (
          'key' => 'Malay (Malaysia)',
          'value' => 'ms_MY',
        ),
        487 => 
        array (
          'key' => 'Malay (Singapore)',
          'value' => 'ms_SG',
        ),
        488 => 
        array (
          'key' => 'Malayalam',
          'value' => 'ml',
        ),
        489 => 
        array (
          'key' => 'Malayalam (India)',
          'value' => 'ml_IN',
        ),
        490 => 
        array (
          'key' => 'Maltese',
          'value' => 'mt',
        ),
        491 => 
        array (
          'key' => 'Maltese (Malta)',
          'value' => 'mt_MT',
        ),
        492 => 
        array (
          'key' => 'Manipuri',
          'value' => 'mni',
        ),
        493 => 
        array (
          'key' => 'Manipuri',
          'value' => 'mni_Beng',
        ),
        494 => 
        array (
          'key' => 'Manipuri (India)',
          'value' => 'mni_Beng_IN',
        ),
        495 => 
        array (
          'key' => 'Manx',
          'value' => 'gv',
        ),
        496 => 
        array (
          'key' => 'Manx (Isle of Man)',
          'value' => 'gv_IM',
        ),
        497 => 
        array (
          'key' => 'Maori',
          'value' => 'mi',
        ),
        498 => 
        array (
          'key' => 'Maori (New Zealand)',
          'value' => 'mi_NZ',
        ),
        499 => 
        array (
          'key' => 'Marathi',
          'value' => 'mr',
        ),
        500 => 
        array (
          'key' => 'Marathi (India)',
          'value' => 'mr_IN',
        ),
        501 => 
        array (
          'key' => 'Masai',
          'value' => 'mas',
        ),
        502 => 
        array (
          'key' => 'Masai (Kenya)',
          'value' => 'mas_KE',
        ),
        503 => 
        array (
          'key' => 'Masai (Tanzania)',
          'value' => 'mas_TZ',
        ),
        504 => 
        array (
          'key' => 'Mazanderani',
          'value' => 'mzn',
        ),
        505 => 
        array (
          'key' => 'Mazanderani (Iran)',
          'value' => 'mzn_IR',
        ),
        506 => 
        array (
          'key' => 'Meru',
          'value' => 'mer',
        ),
        507 => 
        array (
          'key' => 'Meru (Kenya)',
          'value' => 'mer_KE',
        ),
        508 => 
        array (
          'key' => 'Metaʼ',
          'value' => 'mgo',
        ),
        509 => 
        array (
          'key' => 'Metaʼ (Cameroon)',
          'value' => 'mgo_CM',
        ),
        510 => 
        array (
          'key' => 'Mongolian',
          'value' => 'mn',
        ),
        511 => 
        array (
          'key' => 'Mongolian (Mongolia)',
          'value' => 'mn_MN',
        ),
        512 => 
        array (
          'key' => 'Morisyen',
          'value' => 'mfe',
        ),
        513 => 
        array (
          'key' => 'Morisyen (Mauritius)',
          'value' => 'mfe_MU',
        ),
        514 => 
        array (
          'key' => 'Mundang',
          'value' => 'mua',
        ),
        515 => 
        array (
          'key' => 'Mundang (Cameroon)',
          'value' => 'mua_CM',
        ),
        516 => 
        array (
          'key' => 'Nama',
          'value' => 'naq',
        ),
        517 => 
        array (
          'key' => 'Nama (Namibia)',
          'value' => 'naq_NA',
        ),
        518 => 
        array (
          'key' => 'Nepali',
          'value' => 'ne',
        ),
        519 => 
        array (
          'key' => 'Nepali (India)',
          'value' => 'ne_IN',
        ),
        520 => 
        array (
          'key' => 'Nepali (Nepal)',
          'value' => 'ne_NP',
        ),
        521 => 
        array (
          'key' => 'Ngiemboon',
          'value' => 'nnh',
        ),
        522 => 
        array (
          'key' => 'Ngiemboon (Cameroon)',
          'value' => 'nnh_CM',
        ),
        523 => 
        array (
          'key' => 'Ngomba',
          'value' => 'jgo',
        ),
        524 => 
        array (
          'key' => 'Ngomba (Cameroon)',
          'value' => 'jgo_CM',
        ),
        525 => 
        array (
          'key' => 'Nigerian Pidgin',
          'value' => 'pcm',
        ),
        526 => 
        array (
          'key' => 'Nigerian Pidgin (Nigeria)',
          'value' => 'pcm_NG',
        ),
        527 => 
        array (
          'key' => 'North Ndebele',
          'value' => 'nd',
        ),
        528 => 
        array (
          'key' => 'North Ndebele (Zimbabwe)',
          'value' => 'nd_ZW',
        ),
        529 => 
        array (
          'key' => 'Northern Luri',
          'value' => 'lrc',
        ),
        530 => 
        array (
          'key' => 'Northern Luri (Iran)',
          'value' => 'lrc_IR',
        ),
        531 => 
        array (
          'key' => 'Northern Luri (Iraq)',
          'value' => 'lrc_IQ',
        ),
        532 => 
        array (
          'key' => 'Northern Sami',
          'value' => 'se',
        ),
        533 => 
        array (
          'key' => 'Northern Sami (Finland)',
          'value' => 'se_FI',
        ),
        534 => 
        array (
          'key' => 'Northern Sami (Norway)',
          'value' => 'se_NO',
        ),
        535 => 
        array (
          'key' => 'Northern Sami (Sweden)',
          'value' => 'se_SE',
        ),
        536 => 
        array (
          'key' => 'Norwegian Bokmål',
          'value' => 'nb',
        ),
        537 => 
        array (
          'key' => 'Norwegian Bokmål (Norway)',
          'value' => 'nb_NO',
        ),
        538 => 
        array (
          'key' => 'Norwegian Bokmål (Svalbard & Jan Mayen)',
          'value' => 'nb_SJ',
        ),
        539 => 
        array (
          'key' => 'Norwegian Nynorsk',
          'value' => 'nn',
        ),
        540 => 
        array (
          'key' => 'Norwegian Nynorsk (Norway)',
          'value' => 'nn_NO',
        ),
        541 => 
        array (
          'key' => 'Nuer',
          'value' => 'nus',
        ),
        542 => 
        array (
          'key' => 'Nuer (South Sudan)',
          'value' => 'nus_SS',
        ),
        543 => 
        array (
          'key' => 'Nyankole',
          'value' => 'nyn',
        ),
        544 => 
        array (
          'key' => 'Nyankole (Uganda)',
          'value' => 'nyn_UG',
        ),
        545 => 
        array (
          'key' => 'Odia',
          'value' => 'or',
        ),
        546 => 
        array (
          'key' => 'Odia (India)',
          'value' => 'or_IN',
        ),
        547 => 
        array (
          'key' => 'Oromo',
          'value' => 'om',
        ),
        548 => 
        array (
          'key' => 'Oromo (Ethiopia)',
          'value' => 'om_ET',
        ),
        549 => 
        array (
          'key' => 'Oromo (Kenya)',
          'value' => 'om_KE',
        ),
        550 => 
        array (
          'key' => 'Ossetic',
          'value' => 'os',
        ),
        551 => 
        array (
          'key' => 'Ossetic (Georgia)',
          'value' => 'os_GE',
        ),
        552 => 
        array (
          'key' => 'Ossetic (Russia)',
          'value' => 'os_RU',
        ),
        553 => 
        array (
          'key' => 'Pashto',
          'value' => 'ps',
        ),
        554 => 
        array (
          'key' => 'Pashto (Afghanistan)',
          'value' => 'ps_AF',
        ),
        555 => 
        array (
          'key' => 'Pashto (Pakistan)',
          'value' => 'ps_PK',
        ),
        556 => 
        array (
          'key' => 'Persian',
          'value' => 'fa',
        ),
        557 => 
        array (
          'key' => 'Persian (Afghanistan)',
          'value' => 'fa_AF',
        ),
        558 => 
        array (
          'key' => 'Persian (Iran)',
          'value' => 'fa_IR',
        ),
        559 => 
        array (
          'key' => 'Polish',
          'value' => 'pl',
        ),
        560 => 
        array (
          'key' => 'Polish (Poland)',
          'value' => 'pl_PL',
        ),
        561 => 
        array (
          'key' => 'Portuguese',
          'value' => 'pt',
        ),
        562 => 
        array (
          'key' => 'Portuguese (Angola)',
          'value' => 'pt_AO',
        ),
        563 => 
        array (
          'key' => 'Portuguese (Brazil)',
          'value' => 'pt_BR',
        ),
        564 => 
        array (
          'key' => 'Portuguese (Cape Verde)',
          'value' => 'pt_CV',
        ),
        565 => 
        array (
          'key' => 'Portuguese (Equatorial Guinea)',
          'value' => 'pt_GQ',
        ),
        566 => 
        array (
          'key' => 'Portuguese (Guinea-Bissau)',
          'value' => 'pt_GW',
        ),
        567 => 
        array (
          'key' => 'Portuguese (Luxembourg)',
          'value' => 'pt_LU',
        ),
        568 => 
        array (
          'key' => 'Portuguese (Macao SAR China)',
          'value' => 'pt_MO',
        ),
        569 => 
        array (
          'key' => 'Portuguese (Mozambique)',
          'value' => 'pt_MZ',
        ),
        570 => 
        array (
          'key' => 'Portuguese (Portugal)',
          'value' => 'pt_PT',
        ),
        571 => 
        array (
          'key' => 'Portuguese (Switzerland)',
          'value' => 'pt_CH',
        ),
        572 => 
        array (
          'key' => 'Portuguese (São Tomé & Príncipe)',
          'value' => 'pt_ST',
        ),
        573 => 
        array (
          'key' => 'Portuguese (Timor-Leste)',
          'value' => 'pt_TL',
        ),
        574 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa',
        ),
        575 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa_Arab',
        ),
        576 => 
        array (
          'key' => 'Punjabi',
          'value' => 'pa_Guru',
        ),
        577 => 
        array (
          'key' => 'Punjabi (India)',
          'value' => 'pa_Guru_IN',
        ),
        578 => 
        array (
          'key' => 'Punjabi (Pakistan)',
          'value' => 'pa_Arab_PK',
        ),
        579 => 
        array (
          'key' => 'Quechua',
          'value' => 'qu',
        ),
        580 => 
        array (
          'key' => 'Quechua (Bolivia)',
          'value' => 'qu_BO',
        ),
        581 => 
        array (
          'key' => 'Quechua (Ecuador)',
          'value' => 'qu_EC',
        ),
        582 => 
        array (
          'key' => 'Quechua (Peru)',
          'value' => 'qu_PE',
        ),
        583 => 
        array (
          'key' => 'Romanian',
          'value' => 'ro',
        ),
        584 => 
        array (
          'key' => 'Romanian (Moldova)',
          'value' => 'ro_MD',
        ),
        585 => 
        array (
          'key' => 'Romanian (Romania)',
          'value' => 'ro_RO',
        ),
        586 => 
        array (
          'key' => 'Romansh',
          'value' => 'rm',
        ),
        587 => 
        array (
          'key' => 'Romansh (Switzerland)',
          'value' => 'rm_CH',
        ),
        588 => 
        array (
          'key' => 'Rombo',
          'value' => 'rof',
        ),
        589 => 
        array (
          'key' => 'Rombo (Tanzania)',
          'value' => 'rof_TZ',
        ),
        590 => 
        array (
          'key' => 'Rundi',
          'value' => 'rn',
        ),
        591 => 
        array (
          'key' => 'Rundi (Burundi)',
          'value' => 'rn_BI',
        ),
        592 => 
        array (
          'key' => 'Russian',
          'value' => 'ru',
        ),
        593 => 
        array (
          'key' => 'Russian (Belarus)',
          'value' => 'ru_BY',
        ),
        594 => 
        array (
          'key' => 'Russian (Kazakhstan)',
          'value' => 'ru_KZ',
        ),
        595 => 
        array (
          'key' => 'Russian (Kyrgyzstan)',
          'value' => 'ru_KG',
        ),
        596 => 
        array (
          'key' => 'Russian (Moldova)',
          'value' => 'ru_MD',
        ),
        597 => 
        array (
          'key' => 'Russian (Russia)',
          'value' => 'ru_RU',
        ),
        598 => 
        array (
          'key' => 'Russian (Ukraine)',
          'value' => 'ru_UA',
        ),
        599 => 
        array (
          'key' => 'Rwa',
          'value' => 'rwk',
        ),
        600 => 
        array (
          'key' => 'Rwa (Tanzania)',
          'value' => 'rwk_TZ',
        ),
        601 => 
        array (
          'key' => 'Sakha',
          'value' => 'sah',
        ),
        602 => 
        array (
          'key' => 'Sakha (Russia)',
          'value' => 'sah_RU',
        ),
        603 => 
        array (
          'key' => 'Samburu',
          'value' => 'saq',
        ),
        604 => 
        array (
          'key' => 'Samburu (Kenya)',
          'value' => 'saq_KE',
        ),
        605 => 
        array (
          'key' => 'Sango',
          'value' => 'sg',
        ),
        606 => 
        array (
          'key' => 'Sango (Central African Republic)',
          'value' => 'sg_CF',
        ),
        607 => 
        array (
          'key' => 'Sangu',
          'value' => 'sbp',
        ),
        608 => 
        array (
          'key' => 'Sangu (Tanzania)',
          'value' => 'sbp_TZ',
        ),
        609 => 
        array (
          'key' => 'Santali',
          'value' => 'sat',
        ),
        610 => 
        array (
          'key' => 'Santali',
          'value' => 'sat_Olck',
        ),
        611 => 
        array (
          'key' => 'Santali (India)',
          'value' => 'sat_Olck_IN',
        ),
        612 => 
        array (
          'key' => 'Scottish Gaelic',
          'value' => 'gd',
        ),
        613 => 
        array (
          'key' => 'Scottish Gaelic (United Kingdom)',
          'value' => 'gd_GB',
        ),
        614 => 
        array (
          'key' => 'Sena',
          'value' => 'seh',
        ),
        615 => 
        array (
          'key' => 'Sena (Mozambique)',
          'value' => 'seh_MZ',
        ),
        616 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr',
        ),
        617 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr_Cyrl',
        ),
        618 => 
        array (
          'key' => 'Serbian',
          'value' => 'sr_Latn',
        ),
        619 => 
        array (
          'key' => 'Serbian (Bosnia & Herzegovina)',
          'value' => 'sr_Cyrl_BA',
        ),
        620 => 
        array (
          'key' => 'Serbian (Bosnia & Herzegovina)',
          'value' => 'sr_Latn_BA',
        ),
        621 => 
        array (
          'key' => 'Serbian (Kosovo)',
          'value' => 'sr_Cyrl_XK',
        ),
        622 => 
        array (
          'key' => 'Serbian (Kosovo)',
          'value' => 'sr_Latn_XK',
        ),
        623 => 
        array (
          'key' => 'Serbian (Montenegro)',
          'value' => 'sr_Cyrl_ME',
        ),
        624 => 
        array (
          'key' => 'Serbian (Montenegro)',
          'value' => 'sr_Latn_ME',
        ),
        625 => 
        array (
          'key' => 'Serbian (Serbia)',
          'value' => 'sr_Cyrl_RS',
        ),
        626 => 
        array (
          'key' => 'Serbian (Serbia)',
          'value' => 'sr_Latn_RS',
        ),
        627 => 
        array (
          'key' => 'Shambala',
          'value' => 'ksb',
        ),
        628 => 
        array (
          'key' => 'Shambala (Tanzania)',
          'value' => 'ksb_TZ',
        ),
        629 => 
        array (
          'key' => 'Shona',
          'value' => 'sn',
        ),
        630 => 
        array (
          'key' => 'Shona (Zimbabwe)',
          'value' => 'sn_ZW',
        ),
        631 => 
        array (
          'key' => 'Sichuan Yi',
          'value' => 'ii',
        ),
        632 => 
        array (
          'key' => 'Sichuan Yi (China)',
          'value' => 'ii_CN',
        ),
        633 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd',
        ),
        634 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd_Arab',
        ),
        635 => 
        array (
          'key' => 'Sindhi',
          'value' => 'sd_Deva',
        ),
        636 => 
        array (
          'key' => 'Sindhi (India)',
          'value' => 'sd_Deva_IN',
        ),
        637 => 
        array (
          'key' => 'Sindhi (Pakistan)',
          'value' => 'sd_Arab_PK',
        ),
        638 => 
        array (
          'key' => 'Sinhala',
          'value' => 'si',
        ),
        639 => 
        array (
          'key' => 'Sinhala (Sri Lanka)',
          'value' => 'si_LK',
        ),
        640 => 
        array (
          'key' => 'Slovak',
          'value' => 'sk',
        ),
        641 => 
        array (
          'key' => 'Slovak (Slovakia)',
          'value' => 'sk_SK',
        ),
        642 => 
        array (
          'key' => 'Slovenian',
          'value' => 'sl',
        ),
        643 => 
        array (
          'key' => 'Slovenian (Slovenia)',
          'value' => 'sl_SI',
        ),
        644 => 
        array (
          'key' => 'Soga',
          'value' => 'xog',
        ),
        645 => 
        array (
          'key' => 'Soga (Uganda)',
          'value' => 'xog_UG',
        ),
        646 => 
        array (
          'key' => 'Somali',
          'value' => 'so',
        ),
        647 => 
        array (
          'key' => 'Somali (Djibouti)',
          'value' => 'so_DJ',
        ),
        648 => 
        array (
          'key' => 'Somali (Ethiopia)',
          'value' => 'so_ET',
        ),
        649 => 
        array (
          'key' => 'Somali (Kenya)',
          'value' => 'so_KE',
        ),
        650 => 
        array (
          'key' => 'Somali (Somalia)',
          'value' => 'so_SO',
        ),
        651 => 
        array (
          'key' => 'Spanish',
          'value' => 'es',
        ),
        652 => 
        array (
          'key' => 'Spanish (Argentina)',
          'value' => 'es_AR',
        ),
        653 => 
        array (
          'key' => 'Spanish (Belize)',
          'value' => 'es_BZ',
        ),
        654 => 
        array (
          'key' => 'Spanish (Bolivia)',
          'value' => 'es_BO',
        ),
        655 => 
        array (
          'key' => 'Spanish (Brazil)',
          'value' => 'es_BR',
        ),
        656 => 
        array (
          'key' => 'Spanish (Canary Islands)',
          'value' => 'es_IC',
        ),
        657 => 
        array (
          'key' => 'Spanish (Ceuta & Melilla)',
          'value' => 'es_EA',
        ),
        658 => 
        array (
          'key' => 'Spanish (Chile)',
          'value' => 'es_CL',
        ),
        659 => 
        array (
          'key' => 'Spanish (Colombia)',
          'value' => 'es_CO',
        ),
        660 => 
        array (
          'key' => 'Spanish (Costa Rica)',
          'value' => 'es_CR',
        ),
        661 => 
        array (
          'key' => 'Spanish (Cuba)',
          'value' => 'es_CU',
        ),
        662 => 
        array (
          'key' => 'Spanish (Dominican Republic)',
          'value' => 'es_DO',
        ),
        663 => 
        array (
          'key' => 'Spanish (Ecuador)',
          'value' => 'es_EC',
        ),
        664 => 
        array (
          'key' => 'Spanish (El Salvador)',
          'value' => 'es_SV',
        ),
        665 => 
        array (
          'key' => 'Spanish (Equatorial Guinea)',
          'value' => 'es_GQ',
        ),
        666 => 
        array (
          'key' => 'Spanish (Guatemala)',
          'value' => 'es_GT',
        ),
        667 => 
        array (
          'key' => 'Spanish (Honduras)',
          'value' => 'es_HN',
        ),
        668 => 
        array (
          'key' => 'Spanish (Latin America)',
          'value' => 'es_419',
        ),
        669 => 
        array (
          'key' => 'Spanish (Mexico)',
          'value' => 'es_MX',
        ),
        670 => 
        array (
          'key' => 'Spanish (Nicaragua)',
          'value' => 'es_NI',
        ),
        671 => 
        array (
          'key' => 'Spanish (Panama)',
          'value' => 'es_PA',
        ),
        672 => 
        array (
          'key' => 'Spanish (Paraguay)',
          'value' => 'es_PY',
        ),
        673 => 
        array (
          'key' => 'Spanish (Peru)',
          'value' => 'es_PE',
        ),
        674 => 
        array (
          'key' => 'Spanish (Philippines)',
          'value' => 'es_PH',
        ),
        675 => 
        array (
          'key' => 'Spanish (Puerto Rico)',
          'value' => 'es_PR',
        ),
        676 => 
        array (
          'key' => 'Spanish (Spain)',
          'value' => 'es_ES',
        ),
        677 => 
        array (
          'key' => 'Spanish (United States)',
          'value' => 'es_US',
        ),
        678 => 
        array (
          'key' => 'Spanish (Uruguay)',
          'value' => 'es_UY',
        ),
        679 => 
        array (
          'key' => 'Spanish (Venezuela)',
          'value' => 'es_VE',
        ),
        680 => 
        array (
          'key' => 'Standard Moroccan Tamazight',
          'value' => 'zgh',
        ),
        681 => 
        array (
          'key' => 'Standard Moroccan Tamazight (Morocco)',
          'value' => 'zgh_MA',
        ),
        682 => 
        array (
          'key' => 'Sundanese',
          'value' => 'su',
        ),
        683 => 
        array (
          'key' => 'Sundanese',
          'value' => 'su_Latn',
        ),
        684 => 
        array (
          'key' => 'Sundanese (Indonesia)',
          'value' => 'su_Latn_ID',
        ),
        685 => 
        array (
          'key' => 'Swahili',
          'value' => 'sw',
        ),
        686 => 
        array (
          'key' => 'Swahili (Congo - Kinshasa)',
          'value' => 'sw_CD',
        ),
        687 => 
        array (
          'key' => 'Swahili (Kenya)',
          'value' => 'sw_KE',
        ),
        688 => 
        array (
          'key' => 'Swahili (Tanzania)',
          'value' => 'sw_TZ',
        ),
        689 => 
        array (
          'key' => 'Swahili (Uganda)',
          'value' => 'sw_UG',
        ),
        690 => 
        array (
          'key' => 'Swedish',
          'value' => 'sv',
        ),
        691 => 
        array (
          'key' => 'Swedish (Finland)',
          'value' => 'sv_FI',
        ),
        692 => 
        array (
          'key' => 'Swedish (Sweden)',
          'value' => 'sv_SE',
        ),
        693 => 
        array (
          'key' => 'Swedish (Åland Islands)',
          'value' => 'sv_AX',
        ),
        694 => 
        array (
          'key' => 'Swiss German',
          'value' => 'gsw',
        ),
        695 => 
        array (
          'key' => 'Swiss German (France)',
          'value' => 'gsw_FR',
        ),
        696 => 
        array (
          'key' => 'Swiss German (Liechtenstein)',
          'value' => 'gsw_LI',
        ),
        697 => 
        array (
          'key' => 'Swiss German (Switzerland)',
          'value' => 'gsw_CH',
        ),
        698 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi',
        ),
        699 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi_Latn',
        ),
        700 => 
        array (
          'key' => 'Tachelhit',
          'value' => 'shi_Tfng',
        ),
        701 => 
        array (
          'key' => 'Tachelhit (Morocco)',
          'value' => 'shi_Latn_MA',
        ),
        702 => 
        array (
          'key' => 'Tachelhit (Morocco)',
          'value' => 'shi_Tfng_MA',
        ),
        703 => 
        array (
          'key' => 'Taita',
          'value' => 'dav',
        ),
        704 => 
        array (
          'key' => 'Taita (Kenya)',
          'value' => 'dav_KE',
        ),
        705 => 
        array (
          'key' => 'Tajik',
          'value' => 'tg',
        ),
        706 => 
        array (
          'key' => 'Tajik (Tajikistan)',
          'value' => 'tg_TJ',
        ),
        707 => 
        array (
          'key' => 'Tamil',
          'value' => 'ta',
        ),
        708 => 
        array (
          'key' => 'Tamil (India)',
          'value' => 'ta_IN',
        ),
        709 => 
        array (
          'key' => 'Tamil (Malaysia)',
          'value' => 'ta_MY',
        ),
        710 => 
        array (
          'key' => 'Tamil (Singapore)',
          'value' => 'ta_SG',
        ),
        711 => 
        array (
          'key' => 'Tamil (Sri Lanka)',
          'value' => 'ta_LK',
        ),
        712 => 
        array (
          'key' => 'Tasawaq',
          'value' => 'twq',
        ),
        713 => 
        array (
          'key' => 'Tasawaq (Niger)',
          'value' => 'twq_NE',
        ),
        714 => 
        array (
          'key' => 'Tatar',
          'value' => 'tt',
        ),
        715 => 
        array (
          'key' => 'Tatar (Russia)',
          'value' => 'tt_RU',
        ),
        716 => 
        array (
          'key' => 'Telugu',
          'value' => 'te',
        ),
        717 => 
        array (
          'key' => 'Telugu (India)',
          'value' => 'te_IN',
        ),
        718 => 
        array (
          'key' => 'Teso',
          'value' => 'teo',
        ),
        719 => 
        array (
          'key' => 'Teso (Kenya)',
          'value' => 'teo_KE',
        ),
        720 => 
        array (
          'key' => 'Teso (Uganda)',
          'value' => 'teo_UG',
        ),
        721 => 
        array (
          'key' => 'Thai',
          'value' => 'th',
        ),
        722 => 
        array (
          'key' => 'Thai (Thailand)',
          'value' => 'th_TH',
        ),
        723 => 
        array (
          'key' => 'Tibetan',
          'value' => 'bo',
        ),
        724 => 
        array (
          'key' => 'Tibetan (China)',
          'value' => 'bo_CN',
        ),
        725 => 
        array (
          'key' => 'Tibetan (India)',
          'value' => 'bo_IN',
        ),
        726 => 
        array (
          'key' => 'Tigrinya',
          'value' => 'ti',
        ),
        727 => 
        array (
          'key' => 'Tigrinya (Eritrea)',
          'value' => 'ti_ER',
        ),
        728 => 
        array (
          'key' => 'Tigrinya (Ethiopia)',
          'value' => 'ti_ET',
        ),
        729 => 
        array (
          'key' => 'Tongan',
          'value' => 'to',
        ),
        730 => 
        array (
          'key' => 'Tongan (Tonga)',
          'value' => 'to_TO',
        ),
        731 => 
        array (
          'key' => 'Turkish',
          'value' => 'tr',
        ),
        732 => 
        array (
          'key' => 'Turkish (Cyprus)',
          'value' => 'tr_CY',
        ),
        733 => 
        array (
          'key' => 'Turkish (Turkey)',
          'value' => 'tr_TR',
        ),
        734 => 
        array (
          'key' => 'Turkmen',
          'value' => 'tk',
        ),
        735 => 
        array (
          'key' => 'Turkmen (Turkmenistan)',
          'value' => 'tk_TM',
        ),
        736 => 
        array (
          'key' => 'Ukrainian',
          'value' => 'uk',
        ),
        737 => 
        array (
          'key' => 'Ukrainian (Ukraine)',
          'value' => 'uk_UA',
        ),
        738 => 
        array (
          'key' => 'Upper Sorbian',
          'value' => 'hsb',
        ),
        739 => 
        array (
          'key' => 'Upper Sorbian (Germany)',
          'value' => 'hsb_DE',
        ),
        740 => 
        array (
          'key' => 'Urdu',
          'value' => 'ur',
        ),
        741 => 
        array (
          'key' => 'Urdu (India)',
          'value' => 'ur_IN',
        ),
        742 => 
        array (
          'key' => 'Urdu (Pakistan)',
          'value' => 'ur_PK',
        ),
        743 => 
        array (
          'key' => 'Uyghur',
          'value' => 'ug',
        ),
        744 => 
        array (
          'key' => 'Uyghur (China)',
          'value' => 'ug_CN',
        ),
        745 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz',
        ),
        746 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Arab',
        ),
        747 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Cyrl',
        ),
        748 => 
        array (
          'key' => 'Uzbek',
          'value' => 'uz_Latn',
        ),
        749 => 
        array (
          'key' => 'Uzbek (Afghanistan)',
          'value' => 'uz_Arab_AF',
        ),
        750 => 
        array (
          'key' => 'Uzbek (Uzbekistan)',
          'value' => 'uz_Cyrl_UZ',
        ),
        751 => 
        array (
          'key' => 'Uzbek (Uzbekistan)',
          'value' => 'uz_Latn_UZ',
        ),
        752 => 
        array (
          'key' => 'Vai',
          'value' => 'vai',
        ),
        753 => 
        array (
          'key' => 'Vai',
          'value' => 'vai_Latn',
        ),
        754 => 
        array (
          'key' => 'Vai',
          'value' => 'vai_Vaii',
        ),
        755 => 
        array (
          'key' => 'Vai (Liberia)',
          'value' => 'vai_Latn_LR',
        ),
        756 => 
        array (
          'key' => 'Vai (Liberia)',
          'value' => 'vai_Vaii_LR',
        ),
        757 => 
        array (
          'key' => 'Vietnamese',
          'value' => 'vi',
        ),
        758 => 
        array (
          'key' => 'Vietnamese (Vietnam)',
          'value' => 'vi_VN',
        ),
        759 => 
        array (
          'key' => 'Vunjo',
          'value' => 'vun',
        ),
        760 => 
        array (
          'key' => 'Vunjo (Tanzania)',
          'value' => 'vun_TZ',
        ),
        761 => 
        array (
          'key' => 'Walser',
          'value' => 'wae',
        ),
        762 => 
        array (
          'key' => 'Walser (Switzerland)',
          'value' => 'wae_CH',
        ),
        763 => 
        array (
          'key' => 'Welsh',
          'value' => 'cy',
        ),
        764 => 
        array (
          'key' => 'Welsh (United Kingdom)',
          'value' => 'cy_GB',
        ),
        765 => 
        array (
          'key' => 'Western Frisian',
          'value' => 'fy',
        ),
        766 => 
        array (
          'key' => 'Western Frisian (Netherlands)',
          'value' => 'fy_NL',
        ),
        767 => 
        array (
          'key' => 'Wolof',
          'value' => 'wo',
        ),
        768 => 
        array (
          'key' => 'Wolof (Senegal)',
          'value' => 'wo_SN',
        ),
        769 => 
        array (
          'key' => 'Xhosa',
          'value' => 'xh',
        ),
        770 => 
        array (
          'key' => 'Xhosa (South Africa)',
          'value' => 'xh_ZA',
        ),
        771 => 
        array (
          'key' => 'Yangben',
          'value' => 'yav',
        ),
        772 => 
        array (
          'key' => 'Yangben (Cameroon)',
          'value' => 'yav_CM',
        ),
        773 => 
        array (
          'key' => 'Yiddish',
          'value' => 'yi',
        ),
        774 => 
        array (
          'key' => 'Yiddish (World)',
          'value' => 'yi_001',
        ),
        775 => 
        array (
          'key' => 'Yoruba',
          'value' => 'yo',
        ),
        776 => 
        array (
          'key' => 'Yoruba (Benin)',
          'value' => 'yo_BJ',
        ),
        777 => 
        array (
          'key' => 'Yoruba (Nigeria)',
          'value' => 'yo_NG',
        ),
        778 => 
        array (
          'key' => 'Zarma',
          'value' => 'dje',
        ),
        779 => 
        array (
          'key' => 'Zarma (Niger)',
          'value' => 'dje_NE',
        ),
        780 => 
        array (
          'key' => 'Zulu',
          'value' => 'zu',
        ),
        781 => 
        array (
          'key' => 'Zulu (South Africa)',
          'value' => 'zu_ZA',
        ),
      ),
       'width' => '',
       'height' => '',
       'maxItems' => NULL,
       'renderType' => 'list',
       'optionsProviderClass' => NULL,
       'optionsProviderData' => NULL,
       'queryColumnType' => 'text',
       'columnType' => 'text',
       'dynamicOptions' => false,
       'onlySystemLanguages' => false,
    )),
    13 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Date::__set_state(array(
       'name' => 'date',
       'title' => 'Date',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'date',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'queryColumnType' => 'bigint(20)',
       'columnType' => 'bigint(20)',
       'defaultValue' => NULL,
       'useCurrentDate' => false,
       'defaultValueGenerator' => '',
    )),
    14 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
       'name' => 'dateandtime',
       'title' => 'Date  and  time',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'datetime',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'queryColumnType' => 'bigint(20)',
       'columnType' => 'bigint(20)',
       'defaultValue' => NULL,
       'useCurrentDate' => false,
       'defaultValueGenerator' => '',
    )),
    15 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Time::__set_state(array(
       'name' => 'time',
       'title' => 'Time',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'time',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'width' => 0,
       'defaultValue' => NULL,
       'queryColumnType' => 'varchar',
       'columnType' => 'varchar',
       'columnLength' => 5,
       'regex' => '',
       'regexFlags' => 
      array (
      ),
       'unique' => false,
       'showCharCount' => false,
       'defaultValueGenerator' => '',
       'minValue' => NULL,
       'maxValue' => NULL,
       'increment' => 15,
    )),
    16 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
       'name' => 'relationmanytoone',
       'title' => 'Relationmanytoone',
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
        0 => 
        array (
          'classes' => 'ObjetTypeTWO',
        ),
        1 => 
        array (
          'classes' => 'ObjetTypeTHREE',
        ),
        2 => 
        array (
          'classes' => 'ObjetTypeONE',
        ),
      ),
       'pathFormatterClass' => '',
       'width' => '',
       'assetUploadPath' => '',
       'queryColumnType' => 
      array (
        'id' => 'int(11)',
        'type' => 'enum(\'document\',\'asset\',\'object\')',
      ),
       'objectsAllowed' => true,
       'assetsAllowed' => false,
       'assetTypes' => 
      array (
      ),
       'documentsAllowed' => false,
       'documentTypes' => 
      array (
      ),
    )),
    17 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
       'name' => 'manytomany',
       'title' => 'Manytomany',
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
      ),
       'pathFormatterClass' => '',
       'width' => '',
       'height' => '',
       'maxItems' => NULL,
       'queryColumnType' => 'text',
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
    18 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
       'name' => 'advancedmanytomany',
       'title' => 'Advancedmanytomany',
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
          'classes' => 'ObjetTypeTWO',
        ),
        1 => 
        array (
          'classes' => 'ObjetTypeTHREE',
        ),
        2 => 
        array (
          'classes' => 'ObjetTypeONE',
        ),
      ),
       'pathFormatterClass' => '',
       'width' => '',
       'height' => NULL,
       'maxItems' => NULL,
       'assetUploadPath' => '',
       'queryColumnType' => 'text',
       'objectsAllowed' => true,
       'assetsAllowed' => false,
       'assetTypes' => 
      array (
      ),
       'documentsAllowed' => false,
       'documentTypes' => 
      array (
      ),
       'enableTextSelection' => false,
       'columns' => 
      array (
        0 => 
        array (
          'type' => 'number',
          'position' => 1,
          'key' => 'key1',
          'label' => 'label1',
          'value' => '',
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
          'value' => '',
          'width' => NULL,
        ),
        3 => 
        array (
          'type' => 'bool',
          'position' => 4,
          'key' => 'key4',
          'label' => 'label4',
        ),
        4 => 
        array (
          'type' => 'columnbool',
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
       'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
       'optimizedAdminLoading' => false,
       'enableBatchEdit' => false,
       'allowMultipleAssignments' => false,
    )),
    19 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
       'name' => 'advancedmanytomanyobjectrelation',
       'title' => 'Advancedmanytomanyobject',
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
       'queryColumnType' => 'text',
       'visibleFields' => NULL,
       'allowToCreateNewObject' => false,
       'optimizedAdminLoading' => false,
       'enableTextSelection' => false,
       'visibleFieldDefinitions' => 
      array (
      ),
       'allowedClassId' => 'classOne',
       'columns' => 
      array (
      ),
       'columnKeys' => 
      array (
      ),
       'enableBatchEdit' => false,
       'allowMultipleAssignments' => false,
    )),
    20 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ReverseObjectRelation::__set_state(array(
       'name' => 'reverseobjectrelation',
       'title' => 'Reverseobjectrelation',
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
       'queryColumnType' => 'text',
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
    21 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyRelation::__set_state(array(
       'name' => 'manytomanyrelation',
       'title' => 'Manytomanyrelation',
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
      ),
       'pathFormatterClass' => '',
       'width' => '',
       'height' => '',
       'maxItems' => NULL,
       'assetUploadPath' => '',
       'queryColumnType' => 'text',
       'objectsAllowed' => false,
       'assetsAllowed' => false,
       'assetTypes' => 
      array (
      ),
       'documentsAllowed' => false,
       'documentTypes' => 
      array (
      ),
       'enableTextSelection' => false,
    )),
    22 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
       'name' => 'number',
       'title' => 'Number',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'numeric',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'width' => '',
       'defaultValue' => NULL,
       'queryColumnType' => 'double',
       'columnType' => 'double',
       'integer' => false,
       'unsigned' => false,
       'minValue' => NULL,
       'maxValue' => NULL,
       'unique' => false,
       'decimalSize' => NULL,
       'decimalPrecision' => NULL,
       'defaultValueGenerator' => '',
    )),
    23 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Slider::__set_state(array(
       'name' => 'slider',
       'title' => 'Slider',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'slider',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'width' => '',
       'height' => '',
       'minValue' => NULL,
       'maxValue' => NULL,
       'vertical' => false,
       'increment' => NULL,
       'decimalPrecision' => NULL,
       'queryColumnType' => 'double',
       'columnType' => 'double',
    )),
    24 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
       'name' => 'quantityValuenumber',
       'title' => 'Quantity Value',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => false,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'quantityValue',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => false,
       'visibleSearch' => false,
       'blockedVarsForExport' => 
      array (
      ),
       'width' => '',
       'unitWidth' => '',
       'defaultValue' => NULL,
       'defaultUnit' => NULL,
       'validUnits' => 
      array (
      ),
       'integer' => false,
       'unsigned' => false,
       'minValue' => NULL,
       'maxValue' => NULL,
       'unique' => false,
       'decimalSize' => NULL,
       'decimalPrecision' => NULL,
       'autoConvert' => false,
       'queryColumnType' => 
      array (
        'value' => 'double',
        'unit' => 'varchar(64)',
      ),
       'columnType' => 
      array (
        'value' => 'double',
        'unit' => 'varchar(64)',
      ),
       'defaultValueGenerator' => '',
    )),
    25 => 
    Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
       'name' => 'localizedfields',
       'title' => '',
       'tooltip' => '',
       'mandatory' => false,
       'noteditable' => false,
       'index' => NULL,
       'locked' => false,
       'style' => '',
       'permissions' => NULL,
       'datatype' => 'data',
       'fieldtype' => 'localizedfields',
       'relationType' => false,
       'invisible' => false,
       'visibleGridView' => true,
       'visibleSearch' => true,
       'blockedVarsForExport' => 
      array (
      ),
       'children' => 
      array (
        0 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
           'name' => 'inputlocalized',
           'title' => 'Inputlocalized',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'input',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => false,
           'visibleSearch' => false,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => '',
           'defaultValue' => NULL,
           'queryColumnType' => 'varchar',
           'columnType' => 'varchar',
           'columnLength' => 190,
           'regex' => '',
           'regexFlags' => 
          array (
          ),
           'unique' => false,
           'showCharCount' => false,
           'defaultValueGenerator' => '',
        )),
      ),
       'region' => NULL,
       'layout' => NULL,
       'width' => '',
       'height' => '',
       'maxTabs' => NULL,
       'border' => false,
       'provideSplitView' => false,
       'tabPosition' => NULL,
       'hideLabelsWhenTabsReached' => NULL,
       'referencedFields' => 
      array (
      ),
       'fieldDefinitionsCache' => NULL,
       'permissionView' => NULL,
       'permissionEdit' => NULL,
       'labelWidth' => 0,
       'labelAlign' => 'left',
       'childs' => 
      array (
        0 => 
        Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
           'name' => 'inputlocalized',
           'title' => 'Inputlocalized',
           'tooltip' => '',
           'mandatory' => false,
           'noteditable' => false,
           'index' => false,
           'locked' => false,
           'style' => '',
           'permissions' => NULL,
           'datatype' => 'data',
           'fieldtype' => 'input',
           'relationType' => false,
           'invisible' => false,
           'visibleGridView' => false,
           'visibleSearch' => false,
           'blockedVarsForExport' => 
          array (
          ),
           'width' => '',
           'defaultValue' => NULL,
           'queryColumnType' => 'varchar',
           'columnType' => 'varchar',
           'columnLength' => 190,
           'regex' => '',
           'regexFlags' => 
          array (
          ),
           'unique' => false,
           'showCharCount' => false,
           'defaultValueGenerator' => '',
        )),
      ),
    )),
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
