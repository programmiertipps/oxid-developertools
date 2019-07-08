[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

[{if $oView->pt_showExceptionlog()}]

    <div class="pt-developer box">
        <h1>[{$oView->pt_getShopName()}] | [{oxmultilang ident='pt_LOGVIEWER_TITLE'}]</h1>
        <h2>[{oxmultilang ident='pt_LOGVIEWER_SUBTITLE'}] ([{$oView->pt_showFileSize()}] KB):</h2>
        <small>([{oxmultilang ident='pt_LOGVIEWER_LASTMODIFY'}]: [{$oView->pt_showLastModify()}] Uhr)</small>
        <hr>
        <div class="exceptionlog-list">
            <pre>[{$oView->pt_showExceptionlog()}]</pre>
        </div>
    </div>

    <form name="clearExeptionlog" id="clearExeptionlog" class="pt_developertool_form" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="ptdevelopertoolslogviewer">
        <input type="hidden" name="fnc" value="pt_clearExeptionlog">
        <input class="pt-submit" type="Submit" value="[{oxmultilang ident="pt_LOGVIEWER_CLEARFILE"}]">
    </form>

[{else}]

    <div class="pt-developer box">
        <h1>[{$oView->pt_getShopName()}] [{oxmultilang ident='pt_LOGVIEWER_TITLE'}]</h1>
        <hr>
        <div class="exceptionlog-list-empty">
            <p>[{oxmultilang ident='pt_LOGVIEWER_EMPTYINFO'}]</p>
        </div>
    </div>

[{/if}]

[{include file=$oViewConf->getModulePath('pt_developertools', 'out/admin/inc/pt_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]
