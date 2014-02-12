<?php # 

/**
 *  @file UTF-8/lang_de.inc.php 1.4.7 2014-02-12 Ian
 *  @version 1.4.7
 *  @author Translator Name <yourmail@example.com>
 *  DE-Revision: Revision of UTF-8/lang_de.inc.php
 */

@define('PLUGIN_EVENT_CKEDITOR_NAME', 'CKEditor');
@define('PLUGIN_EVENT_CKEDITOR_DESC', 'Nutzt CKEditor als den Standard WYSIWYG Editor. Dieser ist zur Zeit der state-of-the-art Editor im Internet. Benutzung: Empfohlen! Nach der Installation, lies die Plugin Konfigurations Seite für weitere Informationen.');
@define('PLUGIN_EVENT_CKEDITOR_REVISION_TITLE', '<h3>Das Plugin enthält:</h3>');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL', '<h2>Installation</h2>
<div class="msg_notice">
    <p><strong>Abhängigkeiten:</strong> Deaktiviere body, extended und nugget parsing im <strong>NL2BR</strong> plugin!</p>
</div>
<ol style="line-height: 1.6">
    <li>Um anderen Plugins Zugriff auf das Plugin oder dessen Hook zu gewähren, plaziere das (CKEditor) Plugin nahe dem Ende deiner Pluginliste.</li>
    <li>Versichere dich, dass der WYSIWYG Modus in den "Persönlichen Einstellungen" eingeschaltet ist.</li>
</ol>
<div class="cke_config_block msg_dialogue">
    <h3>Manuelle Erweiterungen mit anderen CKEDITOR Plugins</h3>
    <ol style="line-height: 1.6">
        <li>Definiere manuell hinzugefügte Plugins (analog zu <em>{ name: \'mediaembed\' },</em>) in der custom cke_config.js, in der <em>CKEDITOR.config.toolbarGroups = [...]</em> Definition.</li>
        <li>Außerdem füge den neuen Pluginnamen (analog zu mediaembed) der <em>var extraPluginList = \'...\'</em> Definition in der cke_plugin.js Datei hinzu.</li>
    </ol>

    <h3>Upgrading</h3>
    <p>Dieses Plugin wird von Zeit zu Zeit selber Updates via Spartacus bereitstellen.<hr>Wenn jemals ein manuelles oder persönliches Update des mitgelieferten CKEditor Paketes benötigt wird:</p>
    <ol style="line-height: 1.6">
        <li><a href="http://ckeditor.com/download" target="_blank">Download CKEditor</a></li>
        <li>Extrahiere nach: <em>' . realpath(dirname(__FILE__) . '/..') . '</em> (dies sollte das <em>"ckeditor"</em> Sub-Verzeichnis automatisch erstellen)</li>
    </ol>
</div>');
@define('PLUGIN_EVENT_CKEDITOR_CONFIG', '');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL_PLUGPATH', 'HTTP Pfad des S9y Plugins Verzeichnisses');
@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION', 'Stelle Advanced-Content-Filter (ACF) ab?');
@define('PLUGIN_EVENT_CKEDITOR_TOOLBAR_OPTION', 'Nutze den (default) 2-Zeiler toolbar-group Umbruch?');

@define('PLUGIN_EVENT_CKEDITOR_CODEBUTTON_OPTION', 'Nutze "code toolbar button"?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION', 'Nutze "prettify code" im Frontend?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION_BLAHBLAH', 'Erweitert "code toolbar button" Option, um lokal geladene prettify.js und prettify.ccs Dateien im Frontend. (Apache License v. 2.0)');
@define('PLUGIN_EVENT_CKEDITOR_OPTION_BLAHBLAH', 'Normalerweise: ');

@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION', 'Entpacke Zip Datei (im Notfall)');
@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION_BLAHBLAH', 'Nur bei upgrade Fehlern: Entpacke augenblicklich die mitgelieferte ');

@define('PLUGIN_EVENT_CKEDITOR_KCFINDER_OPTION', 'Erlaube KCFINDER Integration?');
@define('PLUGIN_EVENT_CKEDITOR_KCFINDER_OPTION_BLAHBLAH', 'Nutze dies unabhängige Paket im CKEDITOR [Bild] Widget, um eine nahezu vollständige S9y Medien-Datenbank-Integration in CKEDITOR zu ermöglichen. Das es jedoch Kompatibilitäts Beschränkungen gibt, lese bitte sorgfältig die diesbezüglichen Aussagen unter "http://kcfinder.sunhater.com/" (Compat Section), bevor du die Integration hier erlaubst.');

@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION_BLAHBLAH', 'Dieser CKEDITOR "Housekeeper" Filter erlaubt nur bestimmtes Markup. Normalerweise ist dies gut und sollte als Einstellung erhalten bleiben, da es bereits eingebaute Workarounds für auffälliges Markup, zB. "iframe" Video-Media via den "Embed Media"-Knopf, oder "audio" und "andere Serendipity" tags via "Quellcode"-Anzeige, gibt. Bitte lese dazu auch: "http://ckeditor.com/blog/Integrating-Plugins-with-Advanced-Content-Filter".');
