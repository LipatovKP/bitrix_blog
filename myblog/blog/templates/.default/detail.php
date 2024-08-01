<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEM"])): ?>
    <div class="blog-detail">
        <h1><?= $arResult["ITEM"]["NAME"] ?></h1>
        <p><?= $arResult["ITEM"]["DETAIL_TEXT"] ?></p>
    </div>
<?php endif; ?>