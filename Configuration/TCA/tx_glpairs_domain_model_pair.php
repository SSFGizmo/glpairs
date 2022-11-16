<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair',
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
        'searchFields' => 'name,fal_image1,fal_image2,description,use_description,',
        'iconfile' => 'EXT:glpairs/Resources/Public/Icons/tx_glpairs_domain_model_pair.gif'
    ],
	'types' => [
	    '0' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, bordersize, finaltextactive, 
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabimage1,fal_image1, height1, width1, 
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime',
									'subtype_value_field' => 'finaltextactive',
									'subtypes_addlist' => ['1' => 'finaltextheight, finaltextwidth, finalpicheight, finalpicwidth, finaltext' ]
		],
	    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, bordersize, finaltextactive,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabimage1, fal_image1, height1, width1, 
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabimage2, fal_image2, height2, width2, 
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime',
                        	        'subtype_value_field' => 'finaltextactive',
                        	        'subtypes_addlist' => ['1' => 'finaltextheight, finaltextwidth, finalpicheight, finalpicwidth, finaltext' ]
	    ],
	    '2' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, bordersize, finaltextactive,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabtext1, description1, fontsize1, textheight1, textwidth1,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabimage1, fal_image1, height1, width1, 
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime',
                        	        'subtype_value_field' => 'finaltextactive',
                        	        'subtypes_addlist' => ['1' => 'finaltextheight, finaltextwidth, finalpicheight, finalpicwidth, finaltext' ]
	    ],
	    '3' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;1, type, name, bordersize, finaltextactive,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabtext1, description1, fontsize1, textheight1, textwidth1,
									--div--;LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.tabtext2, description2, fontsize2, textheight2, textwidth2,
									--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime',
                        	        'subtype_value_field' => 'finaltextactive',
                        	        'subtypes_addlist' => ['1' => 'finaltextheight, finaltextwidth, finalpicheight, finalpicwidth, finaltext' ]
	    ]
	],
	'palettes' => [
		'1' => ['showitem' => '']
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
				'foreign_table' => 'tx_glpairs_domain_model_pair',
				'foreign_table_where' => 'AND tx_glpairs_domain_model_pair.pid=###CURRENT_PID### AND tx_glpairs_domain_model_pair.sys_language_uid IN (-1,0)',
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
		'type' =>[
				'exclude' => 1,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.type',
				'config' => [
					'type' => 'select',
				    'items' => 	[
				    				[	'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.same', 0 ],
				    				[	'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.2pics', 1 ],
				    				[	'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.text', 2 ],
				    				[	'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model.type.textonly', 3 ]
				    ],
					'size' => 1,
					'maxitems' => 1,
					'eval' => 'required',
					'default' => 0,
					'renderType' => 'selectSingle',
			    ],
		],
		'name' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.name',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			],
		],
	    'fal_image1' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.image1',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
	            'fal_image1',
	            [
	                'maxitems' => 1,
	            ],
	            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
	        ),
	    ],
	    // legacy field should never displayed
	    'image1' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:uid:<:0',
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.image1',
	        'config' => [
	            'type' => 'input',
	            'size' => 30,
	            'eval' => 'trim,required',
	            'default' => ''
	        ],
	    ],
	    'height1' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.height1',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			],
		],
		'width1' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.width1',
			'config' => [
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			],
		], 
	    'fal_image2' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.image1',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
	            'fal_image2',
	            [
	                'maxitems' => 1,
	            ],
	            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
	        ),
	    ],
	    // legacy field should never displayed
	    'image2' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:uid:<:0',
	        'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.image1',
	        'config' => [
	            'type' => 'input',
	            'size' => 30,
	            'eval' => 'trim,required',
	            'default' => ''
	        ],
	    ],
	    'height2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.height2',
				'config' => [
						'type' => 'input',
						'size' => 4,
						'eval' => 'int',
                        'default' => 0
				],
		],
		'width2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.width2',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'bordersize' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.bordersize',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'description1' => [
			'exclude' => 0,
			'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.description',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			],
		],
		'fontsize1' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.fontsize',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],

		'textheight1' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.textheight',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'textwidth1' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.textwidth',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'description2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.description',
				'config' => [
						'type' => 'input',
						'size' => 30,
						'eval' => 'trim,required'
				],
		],
		'fontsize2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.fontsize',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'textheight2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.textheight',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'textwidth2' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.textwidth',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finaltextactive' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finaltextactive',
				'config' => [
						'type' => 'check',
				],
		        'onChange' => 'reload',
		],
		'finaltext' => [
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finaltext',
				'config' => [
					'type' => 'text',
				    'enableRichtext' => true,
					'cols' => '80',
					'rows' => '15',
				]
		],
		'finaltextwidth' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finaltextwidth',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finaltextheight' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finaltextheight',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finalpicwidth' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finalpic_width',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		],
		'finalpicheight' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:glpairs/Resources/Private/Language/locallang_db.xlf:tx_glpairs_domain_model_pair.finalpic_height',
				'config' => [
					'type' => 'input',
					'size' => 4,
				    'eval' => 'int',
				    'default' => 0
				],
		]
	]
];


?>