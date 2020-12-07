<?php
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
        die();
    
    if ($arResult['NavPageCount'] < 2)
        return;
    
    $queryString = $arResult['sUrlPathParams'].'PAGEN_'.$arResult['NavNum'].'=';
    
    $prev = $arResult['NavPageNomer'] - 1;
    $next = $arResult['NavPageNomer'] + 1;

    if ($prev > 1)
        $prevQueryString = $queryString . $prev;
    elseif ($prev = 1)
        $prevQueryString = $arResult['sUrlPath'];
    
    if ($next <= $arResult['NavPageCount'])
        $nextQueryString = $queryString . $next;
?>

<nav>
  <ul class="pagination">

    <?php if ($arResult['NavPageNomer'] > 1): ?>
        <li>
          <a href="<?= $prevQueryString ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
    <?php endif ?>
    
    <?php for ($i = 1; $i <= $arResult['NavPageCount']; $i++): ?>
        <?php if ($arResult['NavPageNomer'] == $i): ?>
            <li class="active">
                <a><?= $i ?></a>
            </li>
        <?php else: ?>
            <li>
                <a href="<?= $queryString.$i ?>"><?= $i ?></a>
            </li>
        <?php endif ?>
    <?php endfor ?>
    
    <?php if ($arResult['NavPageNomer'] < $arResult['NavPageCount']): ?>
        <li>
          <a href="<?= $nextQueryString ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
    <?php endif ?>
    
  </ul>
</nav>
