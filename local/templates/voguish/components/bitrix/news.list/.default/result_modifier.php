<?php 
// foreach ($arResult['ITEMS'] as &$item) {
//     $rsUser = CUser::GetByID($item['PROPERTIES']['AUTHOR']['VALUE']);
//     $arUser = $rsUser->Fetch();
//     $author = !empty($arUser['NAME']) ? $arUser['NAME'] : $arUser['LOGIN'];
//     $item['AUTHOR'] = ucfirst($author);     
// }
foreach ($arResult['ITEMS'] as $item) {
    $ids[] = $item['PROPERTIES']['AUTHOR']['VALUE'];
}

$rsUsers = CUser::GetList(
    ($by='id'), 
    ($order='asc'), 
    ['ID' => implode(' | ', $ids)]
);

while($user = $rsUsers->Fetch()) {
    $userID = $user['ID'];
    $userName = !empty($user['NAME']) ? $user['NAME'] : $user['LOGIN'];
    $arUsers[$userID] = ucfirst($userName);
}

foreach ($arResult['ITEMS'] as &$item) {
    $userID = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $item['AUTHOR'] = $arUsers[$userID];
}
?>
