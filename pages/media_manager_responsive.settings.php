
<div class="row">
    <div class="col-lg-8">

</div>
    <div class="col-lg-4">
        <?php

$anchor = '<a target="_blank" href="https://donate.alexplus.de/?addon=media_manager_responsive"><img src="'.rex_url::addonAssets('media_manager_responsive', 'jetzt-beauftragen.svg').'" style="width: 100% max-width: 400px;"></a>';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $this->i18n('media_manager_responsive_donate'), false);
$fragment->setVar('body', '<p>' . $this->i18n('media_manager_responsive_info_donate') . '</p>' . $anchor, false);
echo !rex_config::get("alexplusde", "donated") ? $fragment->parse('core/page/section.php') : "";
?>
    </div>
</div>
