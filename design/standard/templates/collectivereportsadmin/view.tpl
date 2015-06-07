<form name="eZpCollectiveReportsAdminView" method="post" action={'collectivereportsadmin/view'|ezurl}>

<div class="context-block">

    {* DESIGN: Header START *}<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">

    <h1 class="context-title">{'Reports'|i18n('design/standard/collectivereportsadmin')}</h1>

    {* DESIGN: Mainline *}<div class="header-mainline"></div>

    {* DESIGN: Header END *}</div></div></div></div></div></div>

    {* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">

    {* DESIGN: Content END *}</div></div></div>

    <div class="controlbar">
    {* DESIGN: Control bar START *}<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-tc"><div class="box-bl"><div class="box-br">
        <div class="block">
            <p>Generate and view the reports available within the system</p>
            <ul>
            {if $extensions|contains( 'ezpcontenttreereport' )}
                <li>Reports of content tree content object nodes: <a href={'contenttreereport/report'|ezurl()}>Content Tree Report</a></li>
            {/if}
            {if $extensions|contains( 'ezpsectioncontentreport' )}
                <li>Reports of content within specific sections: <a href={'section/list'|ezurl()}>Section Reports</a></li>
            {/if}
            {if $extensions|contains( 'ezpliteralobjectsreport' )}
                <li>Report of content which contains literal tag usage: <a href={'literalreport/report'|ezurl()}>Literal Report</a></li>
            {/if}
            {if $extensions|contains( 'ezpfolderswithnocontentreport' )}
                <li>Report of folders which contains no content: <a href={'folderswithnocontentreport/report'|ezurl()}>Folders With No Content Report</a></li>
            {/if}
            {if $extensions|contains( 'extract' )}
                <li>Dynamic reports of content which can be extracted from the system: <a href={'extract/csv'|ezurl()}>Extract Report Generator</a></li>
            {/if}
            </ul>
        </div>
    {* DESIGN: Control bar END *}</div></div></div></div></div></div>
    </div>

</div>

</form>