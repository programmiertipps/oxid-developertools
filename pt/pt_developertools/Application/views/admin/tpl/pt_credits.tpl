[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

    <div class="pt-developer box">
        <h1>[{$oView->pt_getShopName()}] | [{oxmultilang ident='pt_DEVELOPERTOOLS_TITLE'}]</h1>
        <h2>[{oxmultilang ident='pt_DEVELOPERTOOLS_SUBTITLE'}]</h2>
        <hr>
        <div class="pt-developer-content">
            <div class="left-column">
                <ul>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=pt_LogViewer">[{oxmultilang ident='pt_LOGVIEWER_MENUITEM'}]</a></li>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=pt_ClearTmp">[{oxmultilang ident='pt_CLEARCACHE_MENUITEM'}]</a></li>
                    <li><a href="[{$oViewConf->getSelfLink()}]cl=pt_updateView">[{oxmultilang ident='pt_UPDATEVIEW_MENUITEM'}]</a></li>
                </ul>
            </div>
            <div class="right-column">
            	<a href="https://www.paypal.me/PTMarkus" target="_blank"><img src="[{$oViewConf->getModuleUrl('pt_developertools', 'out/admin/src/img/donation.png')}]"></a>
            </div>
        </div>
    </div>

[{include file=$oViewConf->getModulePath('pt_developertools', 'out/admin/inc/pt_developertools_bottom.tpl')}]
[{include file="bottomitem.tpl"}]
