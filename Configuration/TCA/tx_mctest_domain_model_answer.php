<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer',
        'label' => 'answer',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
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
        'searchFields' => 'answer,further_information',
        'iconfile' => 'EXT:mctest/Resources/Public/Icons/Extension.svg',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'hideTable' => true
    ],
    'types' => [
        '1' => ['showitem' => 'answer, is_correct, further_information, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_mctest_domain_model_answer',
                'foreign_table_where' => 'AND {#tx_mctest_domain_model_answer}.{#pid}=###CURRENT_PID### AND {#tx_mctest_domain_model_answer}.{#sys_language_uid} IN (-1,0)',
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
        'answer' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer.answer',
            'description' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer.answer.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => 'true',
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'is_correct' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer.is_correct',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['label' => ''],
                ],
                'default' => 0,
            ]
        ],
        'further_information' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer.further_information',
            'description' => 'LLL:EXT:mctest/Resources/Private/Language/locallang_db.xlf:tx_mctest_domain_model_answer.further_information.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => 'true',
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    ],
];
