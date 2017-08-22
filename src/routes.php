<?php
$routes = [
    'metadata',
    'createPage',
    'createPageInSection',
    'createSectionDefaultPage',
    'updatePage',
    'getAllPages',
    'getSectionPages',
    'getSinglePage',
    'getPageContent',
    'getPagePreview',
    'deletePage',
    'getAllSections',
    'getNotebookSections',
    'getGroupSections',
    'getSingleSection',
    'createSection',
    'createGroupSection',
    'renameSection',
    'getSectionGroups',
    'getGroupSectionCollection',
    'getSingleSectionGroup',
    'createNotebookSectionGroup',
    'createSectionGroup',
    'getAllNotebooks',
    'getSingleNotebook',
    'createNotebook',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

