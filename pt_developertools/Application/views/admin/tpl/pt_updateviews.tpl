[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<div class="pt-developer box">
    <h1>[{$oView->pt_getShopName()}] | [{oxmultilang ident='pt_UPDATEVIEW_HEADLINE'}]</h1>
    <p>[{oxmultilang ident='pt_UPDATEVIEW_HINWEIS'}]</p>
    <hr>
    [{if $blViewSuccess}]
        <div class="cachelog-success">[{oxmultilang ident="pt_UPDATEVIEW_SUCCESS"}]</div>
    [{/if}]
</div>

<form name="updateViews" id="updateViews" class="pt_developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="ptdevelopertoolsupdateview">
    <input type="hidden" name="fnc" value="pt_rebuildViews">
    <input class="pt-submit" type="Submit" value="[{oxmultilang ident="pt_UPDATEVIEW_BUTTON"}]">
</form>

[{include file=$oViewConf->getModulePath('pt_developertools', 'out/admin/inc/pt_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]