<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="blog-list">
        <?php foreach ($arResult["ITEMS"] as $item): ?>
            <div class="blog-item">
                <h2><a href="<?= $item["DETAIL_PAGE_URL"] ?>"><?= $item["NAME"] ?></a></h2>
                <p><?= $item["PREVIEW_TEXT"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>