<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'type' => 'type',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,type,width,has_pairs,',
        'iconfile' => 'EXT:glpairs/Resources/Public/Icons/tx_glpairs_domain_model_pairs.gif'
	],
	'types' => [
	    '0' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, splitmode, width, bordersize, cardheight, cardwidth, pluspoints, minuspoints, backimage, custom_backimage1, custom_backimage2, maxcards, has_pairs, 
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabfinalinfo, finaltextwidth, finaltextheight, finalpicwidth, finalpicheight,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabadvanced, turnbackdelay, hintdelay, turnduration, stackduration, testmodeturndelay, testmode,
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'
				],
	    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, splitmode, width, bordersize, cardheight, cardwidth, pluspoints, minuspoints, backimage, custom_backimage1, custom_backimage2, maxcards, has_pairs,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabfinalinfo, finaltextwidth, finaltextheight, finalpicwidth, finalpicheight,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabadvanced, turnbackdelay, hintdelay, turnduration, stackduration, testmodeturndelay, testmode,
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'
				],
	    '2' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, splitmode, width, bordersize, cardheight, cardwidth, fontsize, pluspoints, minuspoints, backimage, custom_backimage1, custom_backimage2, maxcards, has_pairs,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabfinalinfo, finaltextwidth, finaltextheight, finalpicwidth, finalpicheight,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabadvanced, turnbackdelay, hintdelay, turnduration, stackduration, testmodeturndelay, testmode,
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'
				],
	    '3' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, splitmode, width, bordersize, cardheight, cardwidth, fontsize, pluspoints, minuspoints, backimage, custom_backimage1, custom_backimage2, maxcards, has_pairs,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabfinalinfo, finaltextwidth, finaltextheight, finalpicwidth, finalpicheight,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.tabadvanced, turnbackdelay, hintdelay, turnduration, stackduration, testmodeturndelay, testmode,
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'
				],
	],
	'palettes' => [
		'1' => ['showitem' => ''],
	],
	'columns' => [
	    'sys_language_uid' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
	        'config' => [
	            'type' => 'language',
	        ],
	    ],
	    'l10n_parent' => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
			'config' => [
				'type' => 'select',
				'items' => [
					['', 0],
				],
				'foreign_table' => 'tx_glpairs_domain_model_pairs',
				'foreign_table_where' => 'AND tx_glpairs_domain_model_pairs.pid=###CURRENT_PID### AND tx_glpairs_domain_model_pairs.sys_language_uid IN (-1,0)',
				'renderType' => 'selectSingle',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		't3ver_label' => [
			'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			]
		],
		'hidden' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
			'config' => [
				'type' => 'check',
			],
		],
		'starttime' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime,int',
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			    'behaviour' => [
			        'allowLanguageSynchronization' => true
			    ],
			    'renderType' => 'inputDateTime',
			],
		],
		'endtime' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime,int',
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			    'behaviour' => [
			        'allowLanguageSynchronization' => true
			    ],
			    'renderType' => 'inputDateTime',
			],
		],
		'name' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.name',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			],
		],
		'type' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.type',
			'config' => [
				'type' => 'select',
			    'items' => 	[
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.same', 0 ],
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.2pics', 1 ],
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.text', 2 ],
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.textonly', 3 ]
			    			],
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required',
				'default' => 0,
				'renderType' => 'selectSingle',
			],
		],
		'splitmode' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.splitmode',
			'config' => [
				'type' => 'check',
			],
		],
		'width' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.width',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required',
				'default' => 5,
				'range' => [
							  'lower' => 1,
							  'upper' => 9999
							]
			],
		],
		'bordersize' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.bordersize',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'num,required',
				'default' => 3,
				'range' => [
							  'lower' => 0,
							  'upper' => 9999
							]
			],
		],
		'cardheight' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.cardheight',
			'config' => [
				'type' => 'input',
				'size' => 4,
			    'eval' => 'int',
			    'default' => 0
			],
		],
		'cardwidth' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.cardwidth',
			'config' => [
				'type' => 'input',
				'size' => 4,
			    'eval' => 'int',
			    'default' => 0
			],
		], 
		'fontsize' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.fontsize',
			'config' => [
				'type' => 'input',
				'size' => 4,
			    'eval' => 'int',
			    'default' => 0
			],
		], 
		'pluspoints' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.pluspoints',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'num,required',
				'default' => 5,
				'range' => [
							  'lower' => 0,
							  'upper' => 9999
							]
			],
		],
		'minuspoints' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.minuspoints',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'num,required',
				'default' => 1,
				'range' => [
							  'lower' => 0,
							  'upper' => 9999
							]
			],
		],
		'backimage' => [
			'exclude' => 0,
		    'onChange' => 'reload',
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.backimage',
			'config' => [
				'type' => 'select',
			    'items' => 	[
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.backimage.red', 0 ],
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.backimage.blue', 1 ],
			    				['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.backimage.mixed', 2 ],
            			        ['LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.backimage.custom', 3 ]
            			    ],
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required',
				'default' => 0,
				'renderType' => 'selectSingle',
			],
		],
	    'custom_backimage1' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:backimage:=:3',
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.customBackimage1',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'custom_backimage1',
                [
                    'maxitems' => 1,
                    'minitems' => 1,
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
                ),
	    ],
	    'custom_backimage2' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:backimage:=:3',
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.customBackimage2',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
	            'custom_backimage2',
	            [
	                'maxitems' => 1,
	                'minitems' => 1,
	            ],
	            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
	        ),
	    ],
	    'turnbackdelay' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.turnbackdelay',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'num,required',
				'default' => 20000,
				'range' => [
							  'lower' => 0,
							  'upper' => 999999
				]
			],
		],
		'hintdelay' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.hintdelay',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'num,required',
						'default' => 10000,
						'range' => [
								'lower' => 0,
								'upper' => 999999
						]
				],
		],
		'turnduration' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.turnduration',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required',
						'default' => 500,
						'range' => [
								'lower' => 0,
								'upper' => 999999
						]
				],
		],
		'stackduration' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.stackduration',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required',
						'default' => 500,
						'range' => [
								'lower' => 0,
								'upper' => 999999
						]
				],
		],
		'testmodeturndelay' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.testmodeturndelay',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required',
						'default' => 100,
						'range' => [
								'lower' => 0,
								'upper' => 999999
						]
				],
		],
		'testmode' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.testmode',
			'config' => [
				'type' => 'check',
			],
		],
		'maxcards' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.maxcards',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'int',
						'default' => 500,
						'range' => [
								'lower' => 0,
								'upper' => 999999
						]
				],
		],
		'has_pairs' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.has_pairs',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'tx_glpairs_domain_model_pair',
				'foreign_table_where' => 'AND {#tx_glpairs_domain_model_pair}.{#type}=###REC_FIELD_type###',
				'MM' => 'tx_glpairs_pairs_pair_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'minitems' => 0,
				'multiple' => 0,
				'renderType' => 'selectMultipleSideBySide',
			    'default' => 0
			],
		],
		'finaltextwidth' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.finaltextwidth',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finaltextheight' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.finaltextheight',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finalpicwidth' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.finalpic_width',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finalpicheight' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pairs.finalpic_height',
			'config' => [
				'type' => 'input',
				'size' => 4,
			    'eval' => 'int',
			    'default' => 0
			]
		]
	]
];
?>