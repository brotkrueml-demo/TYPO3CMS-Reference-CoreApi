<?php

return [
    [
        'action' => 'createPhpClassDocs',
        'class' => \TYPO3\CMS\Core\Page\AssetCollector::class,
        'targetFileName' => 'CodeSnippets/Manual/Core/AssetCollector.rst.txt',
        'withCode' => false
    ],
    [
        'action' => 'createCodeSnippet',
        'caption' => 'EXT:examples/Classes/Http/MeowInformationRequester.php',
        'sourceFile' => 'EXT:examples/Classes/Http/MeowInformationRequester.php',
        'targetFileName' => 'CodeSnippets/Examples/Http/MeowInformationRequester.rst.txt'
    ],
];