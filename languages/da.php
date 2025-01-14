<?php

	$plugin_tx['newsletter']['publish']="Send Nyhedsbrev";
	$plugin_tx['newsletter']['admin_subscribers']="Postlister";
	$plugin_tx['newsletter']['admin_log']="Log";
	$plugin_tx['newsletter']['mailing_list']="Nyhedslister";
	$plugin_tx['newsletter']['subscribe']="Tilmeld";
	$plugin_tx['newsletter']['subscribe_succes']="Tak for din tilmelding til SAK's nyhedsbrev.";
	$plugin_tx['newsletter']['subscribe_fail']="Din tilmelding til nyhedsbrevet mislykkedes.";
	$plugin_tx['newsletter']['unsubscribe']="Afmeld";
	$plugin_tx['newsletter']['unsubscribe_succes']="Dit nyhedsbrevabonnement er stoppet.";
	$plugin_tx['newsletter']['unsubscribe_not_found']="er ikke fundet. Indtast korrekt e-mail og prøv igen.";
	$plugin_tx['newsletter']['unsubscribe_fail']="Kunne ikke fjerne dit abonnement.";
	$plugin_tx['newsletter']['confirmation_mail']="Du vil modtage en bekræftelsesmail i løbet af kort tid.";
	$plugin_tx['newsletter']['confirmation_mail_error']="Der blev ikke  afsendt bekræftelsesmail på grund af en fejl: ";
	$plugin_tx['newsletter']['mail_not_valid']="Din e-mail adresse kunne ikke bekræftes, Indtast venligst en korrekt e-mail adresse.";
	$plugin_tx['newsletter']['send']="Send";
	$plugin_tx['newsletter']['subject']="Emne: ";
	$plugin_tx['newsletter']['attachment']="Vedhæft fil";
	$plugin_tx['newsletter']['newsletter_subject']="Nyhedsbrev";
	$plugin_tx['newsletter']['test_mail']="Send testmail til";
	$plugin_tx['newsletter']['test_mail_sent']="Test-mail sendt til";
	$plugin_tx['newsletter']['test_mail_nosent']="Ingen test-mail sendt til";
	$plugin_tx['newsletter']['mnu_main']="Plugin Admin";
	$plugin_tx['newsletter']['restart']="Genstart fra";
	$plugin_tx['newsletter']['sendinit']="<br />Forsendelse af nyhedsbreve starter automatisk om et øjeblik. Hold venligst fingerne væk fra browseren medens forsendelsen står på:";
	$plugin_tx['newsletter']['msg_sent']="Sendt";
	$plugin_tx['newsletter']['msg_of']="af";
	$plugin_tx['newsletter']['msg_wait']="Sender vent...";
	$plugin_tx['newsletter']['msg_errorcount']="Antal fejl";
	$plugin_tx['newsletter']['msg_error']="Fejltekst";
	$plugin_tx['newsletter']['recivercount']="Antal abonnenter";
	$plugin_tx['newsletter']['log_success']="OK  ";
	$plugin_tx['newsletter']['log_error']="Fejl";
	$plugin_tx['newsletter']['footer_unsubscribe']="afmelde dit abonnement";
	$plugin_tx['newsletter']['alt_body']="Nyhedsbrevet er ikke læsbar i din e-mail program. 
Men fortvivl ikke. Følg denne link for at læse nyhedsbrevet på vores hjemmeside: ";
	$plugin_tx['newsletter']['alt_footer']="Med venlig hilsen
SAK";
	$plugin_tx['newsletter']['alt_unsubscribe']="Du kan afmelde nyhedsbrevet her: ";
	$plugin_tx['newsletter']['subscribe_succes_subject']="Tak for din tilmelding til nyhedsbrevet.";
	$plugin_tx['newsletter']['subscribe_confirm_subject']="Bekræft venligst dit nyhedsbrevabonnement";
	$plugin_tx['newsletter']['unsubscribe_succes_subject']="Dit nyhedsbrevabonnement er stoppet.";
	$plugin_tx['newsletter']['subscribe_confirm_text']="Tak for din tilmelding til nyhedsbrevet. For at bekræfte dit abonnment besvar venligst en e-mail du vil modtage fra os i løbet af kort tid.";
	$plugin_tx['newsletter']['subscribe_confirm']="Tak for din tilmelding til nyhedsbrevet. For at bekræfte dit abonnment følg venligst denne link: ";
	$plugin_tx['newsletter']['admin_template']="Skabelon";
	$plugin_tx['newsletter']['unreadable']="Klik her";
	$plugin_tx['newsletter']['subscriber_fields_delimiter']=";";
	$plugin_tx['newsletter']['subscriber_fields_label']="";
	$plugin_tx['newsletter']['subscriber_fields_mandatory']="Udfyld venligst alle felter";
	$plugin_tx['newsletter']['subscriber_fields_empty']="Udfyld venligst alle felter";
	$plugin_tx['newsletter']['subscriber_email_empty']="Indtast venligst en korrekt e-mail adresse.";
	$plugin_tx['newsletter']['subscriber_email_label']="Mail adresse";
	$plugin_tx['newsletter']['charset']="utf-8";
	$plugin_tx['newsletter']['date_format']="d-m-Y H:i:s";
	$plugin_tx['newsletter']['admin_confirmation_template']="Bekræftelsesskabelon";
	
	$plugin_tx['newsletter']['cf_separator']=' You can have several newsletters on the same page. Only the one over the separator will be send. Default is "&lt;hr /&gt;".';
	$plugin_tx['newsletter']['cf_adminmail']='The mail address where you want to send test mail. If left empty the CMSimple mailform email is used.';
	$plugin_tx['newsletter']['cf_from']='The senders mail. If left empty the CMSimple mailform email is used instead.';
	$plugin_tx['newsletter']['cf_from_name']='The senders name. If left empty the CMSimple site title from your language file is used (CMSimple_XH only)';
	$plugin_tx['newsletter']['cf_smtp']='Insert your internet providers smtp server name. If left blank newsletter will send mails through php mail command. The best sending method is smtp.';
	$plugin_tx['newsletter']['cf_max_execution_time']='The server time in seconds before timeout. You can find it by executing phpinfo.php on your server. Look for max_execution_time. If you experience timeouts when sending newsletters reduce this value to something lower.';
	$plugin_tx['newsletter']['cf_mail_confirm_subscribtion']='<p>Values: <b>mail</b>, <b>user</b> or <b>no</b> (yes can be used instead of mail).</p><p><b>mail</b> or <b>yes</b>: the mail is send to new subscriber. The content of this mails is defined in a confirmation template in Plugin Main Settings".</p><p><b>user</b>: To activate the subscription the subscriber must reply the mail containing a link to confirmation page on your website. The content of the mail is defined in plugin language options "subscribe confirm subject" and "subscribe confirm". All subscription data is encrypted.</p>';
	$plugin_tx['newsletter']['cf_mail_confirm_unsubscribtion']='<p>Values: yes or no.</p><p>If yes the mail is send to the subscriber otherwise no. The content of this mail is defined in plugin language "unsubscribe success subject" and "unsubscribe success".</p>';
	$plugin_tx['newsletter']['cf_encrypt_key']='8 to 32 arbitrary characters without spaces. Used to encrypt subscription information in activation mail.';
	$plugin_tx['newsletter']['cf_selected_img']='The name of an icon for selected newsletter. Only visible if you have more then one newsletter. Default is selcted.png. The icon image must be located in Newsletter images folder';

//Changes Version: 2.3.0  	
	$plugin_tx['newsletter']['subscription_for']="Abonnement:";
	$plugin_tx['newsletter']['select_newsletters_subscribe']="Vælg venligst nyhedsbreve du ønsker at tilmelde / afmelde fra listen nedenfor";
	$plugin_tx['newsletter']['select_newsletters_unsubscribe']="Vælg venligst nyhedsbreve du ønsker at tilmelde / afmelde fra listen nedenfor";
	$plugin_tx['newsletter']['error_newsletter_selected']="Error: No newsletter specified. Please check at least one newsletter subscription from the list of available newsletters.";
	$plugin_tx['newsletter']['mail_subscribe_succes']="Tak for din tilmedling. Du kan opsige dit abonnement på vores <a href=\"http://sak.dk\">hjemmeside</a>.";
	$plugin_tx['newsletter']['mail_subscribe_thx']="Tak for din tilmelding.";
	$plugin_tx['newsletter']['utf8_marker']="æøå";
	
	//Version .2.3.2
	$plugin_tx['newsletter']['cf_editor_relative_urls']="<p>Values true/false</p><p>Default: true</p><p>If true then Newsletter will rewrite relative urls to absolute</p><p>If links and images does not work in your newsletters then you have to change this value to false and change configuration of your editor to relative urls = false (or absolute urls=true).</p>";
	$plugin_tx['newsletter']['cf_attachment_folder']="<p>The name of the attachment subfolder</p><p>The attachment subfolder must be a subfolder of CMSimple default downloads folder</p><p>If left blank the CMSimple default downloads folder is used.</p><p>You need to use ftp to copy files to attachment folder</p>";
	$plugin_tx['newsletter']['adm_newsletter_subject']="<p>Subject of your newsletter</p>";
	$plugin_tx['newsletter']['adm_newsletter_attachment']="<p>Select an attachment file from the list of files</p><p>Attachment files are stored in a folder defined in plugin configuration variable \"attachment folder\".</p><p>Use FTP to move files to the attchment folder.</p>";
	$plugin_tx['newsletter']['adm_newsletter_sendto']="<p>If \"Send test mail\" is checked then you will send only a test newsletter to the specified e-mail adress.</p><p>Check the content, links and images (they must have an absolute path) and if your received newsletter is as expected then uncheck the check box and push Publish button again to send newsletters to all recipients.</p>";
	$plugin_tx['newsletter']['adm_newsletter_restore']="<p>In case of time out this field will contain the number of the last succesfull newsletter (if the field is empty then you need to insert the number of last succesfull newsletter from the log file).</p><p>Click the Publish button to continue sending mails.</p>";
?>