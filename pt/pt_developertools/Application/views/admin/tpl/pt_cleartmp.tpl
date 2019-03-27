[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<div class="pt-developer box">
    <h1>[{$oView->pt_getShopName()}] | [{oxmultilang ident='pt_CLEARCACHE_HEADLINE'}]</h1>
    [{if $pt_clearcachesuccess && !$pt_clearcachelog}]
        <div class="cachelog-success">[{$pt_clearcachesuccess}]</div>
    [{/if}]

    [{if $pt_clearcachelog}]
        <hr>
        <div class="cachelog-details">
            <h3>[{oxmultilang ident='pt_CLEARCACHE_ERRORLOG'}]:</h3>
            [{$pt_clearcachelog}]
        </div>
    [{/if}]

    <h2>[{oxmultilang ident='pt_CLEARCACHE_TMPDIR'}]:</h2>
    <hr>
    <pre>[{$oView->pt_getTmpFiles()}]</pre>
</div>

<form name="clearTmpDir" id="clearTmpDir" class="pt_developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="pt_ClearTmp">
    <input type="hidden" name="fnc" value="pt_cleartmpfiles">
    <input class="pt-submit" type="Submit" value="[{oxmultilang ident="pt_CLEARCACHE_TMPDIR_DELETE_BUTTON"}]">
</form>

[{include file=$oViewConf->getModulePath('pt_developertools', 'out/admin/inc/pt_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]