<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name',
        'iconfile' => 'EXT:simplequiz/Resources/Public/Icons/tx_simplequiz_domain_model_quiz.gif',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'name, possible_questions, questions, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_simplequiz_domain_model_quiz',
                'foreign_table_where' => 'AND {#tx_simplequiz_domain_model_quiz}.{#pid}=###CURRENT_PID### AND {#tx_simplequiz_domain_model_quiz}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.name',
            'description' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true,
                'default' => ''
            ],
        ],
        'possible_questions' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.possible_questions',
            'description' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.possible_questions.description',
            'config' => [
                'type' => 'number',
                'size' => 30,
                'required' => true,
                'default' => 0
            ]
        ],
        'questions' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.questions',
            'description' => 'LLL:EXT:simplequiz/Resources/Private/Language/locallang_db.xlf:tx_simplequiz_domain_model_quiz.questions.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_simplequiz_domain_model_question',
                'size' => 10,
                'minitems' => 2,
                'maxitems' => 0,
            ],
        ],
    
    ],
];
