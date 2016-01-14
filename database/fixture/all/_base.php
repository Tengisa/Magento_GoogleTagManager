<?php
// NOTE: Don't work in this file as it will be overridden each time the scaffold is re-generated
$installer = $this;
$installer->startSetup();

$installer->run("
REPLACE INTO `{$this->getTable('core_cache_option')}`(`code`, `value`) VALUES
('block_html', 0),
('collections', 0),
('config', 0),
('config_api', 0),
('config_api2', 0),
('eav', 0),
('layout', 0),
('translate', 0);
");

$installer->run("
DELETE FROM `{$this->getTable('cms_page')}` WHERE `identifier` = 'tengisa-home-page';
");

$installer->run("
REPLACE INTO `{$this->getTable('core_config_data')}`(`scope`, `scope_id`, `path`,`value`) VALUES
('default', 0, 'web/default/cms_home_page', 'home');
");

$installer->run("
REPLACE INTO `{$this->getTable('core_config_data')}`(`scope`, `scope_id`, `path`,`value`) VALUES
/* Skin */
('default', 0, 'design/package/name', 'tengisa'),
('default', 0, 'design/theme/default', 'default'),
('default', 0, 'design/theme/skin', 'default'),
('default', 0, 'checkout/sidebar/display', 1),
/* Site */
('default', 0, 'web/default/cms_home_page', 'tengisa-home-page'),
('default', 0, 'web/secure/use_in_frontend', '0'),
('default', 0, 'web/secure/use_in_adminhtml', '0'),
('default', 0, 'dev/template/allow_symlink', 1),
('default', 0, 'design/head/default_title', 'Tengisa'),
('default', 0, 'design/head/title_prefix', NULL),
('default', 0, 'design/head/title_suffix', ' | Tengisa'),
('default', 0, 'design/header/logo_src', 'images/media/logo.png'),
('default', 0, 'design/header/logo_src_small', 'images/media/logo_small.png'),
('default', 0, 'design/header/logo_alt', 'Tengisa'),
('default', 0, 'design/header/welcome', 'Welcome to Tengisa!'),
('default', 0, 'design/footer/copyright', '&copy; 2016 Tengisa. All Rights Reserved.'),
/* Information */
('default', '0', 'general/store_information/name', 'Tengisa'),
('default', '0', 'general/store_information/phone', '011-123-4567'),
('default', '0', 'general/store_information/merchant_country', 'ZA'),
('default', '0', 'general/store_information/merchant_vat_number', ''),
('default', '0', 'general/store_information/address', ''),
('default', '0', 'general/store_information/hours', '08:00am to 05:00pm'),
/* Url */
('default', 0, 'web/url/redirect_to_base', '301'),
/* Session */
('default', 0, 'web/cookie/cookie_lifetime', '1814400'),
('default', 0, 'web/cookie/cookie_httponly', '1'),
/* Startup Page */
('default', 0, 'admin/startup/page', 'dashboard'),
/* Countries */
('default', 0, 'general/country/allow', 'AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,VG,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,KP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,KR,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UY,UM,VI,UZ,VU,VA,VE,VN,WF,EH,YE,ZM,ZW'),
('default', 0, 'general/country/optional_zip_countries', 'AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,VG,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,KP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,KR,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UY,UM,VI,UZ,VU,VA,VE,VN,WF,EH,YE,ZM,ZW'),
('default', 0, 'general/country/eu_countries', 'AT,BE,BG,CY,CZ,DK,EE,FI,FR,DE,GR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE,GB'),
('default', 0, 'general/region/state_required', 'AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,VG,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,KP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,RS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,KR,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UY,UM,VI,UZ,VU,VA,VE,VN,WF,EH,YE,ZM,ZW'),
/* Persistent Cart */
('default', 0, 'persistent/options/enabled', '1'),
('default', 0, 'persistent/options/lifetime', '31536000'),
('default', 0, 'persistent/options/remember_enabled', '1'),
('default', 0, 'persistent/options/remember_default', '1'),
('default', 0, 'persistent/options/logout_clear', '1'),
('default', 0, 'persistent/options/shopping_cart', '1'),
/* Emails */
('default', 0, 'trans_email/ident_general/name', 'Tengisa'),
('default', 0, 'trans_email/ident_general/email', 'info@tengisa.co.za'),
('default', 0, 'trans_email/ident_sales/name', 'Tengisa'),
('default', 0, 'trans_email/ident_sales/email', 'info@tengisa.co.za'),
('default', 0, 'trans_email/ident_support/name', 'Tengisa'),
('default', 0, 'trans_email/ident_support/email', 'info@tengisa.co.za'),
('default', 0, 'trans_email/ident_custom1/name', 'Tengisa'),
('default', 0, 'trans_email/ident_custom1/email', 'info@tengisa.co.za'),
('default', 0, 'trans_email/ident_custom2/name', 'Tengisa'),
('default', 0, 'trans_email/ident_custom2/email', 'info@tengisa.co.za'),
/* Contact Us */
('default', 0, 'contacts/contacts/enabled', '1'),
('default', 0, 'contacts/email/recipient_email', 'info@tengisa.co.za'),
('default', 0, 'contacts/email/sender_email_identity', 'custom2'),
('default', 0, 'contacts/email/email_template', 'contacts_email_email_template'),
/* Inventory */
('default', 0, 'cataloginventory/options/can_subtract', '0'),
('default', 0, 'cataloginventory/options/can_back_in_stock', '0'),
('default', 0, 'cataloginventory/options/show_out_of_stock', '0'),
('default', 0, 'cataloginventory/options/stock_threshold_qty', '0'),
('default', 0, 'cataloginventory/item_options/manage_stock', '0'),
('default', 0, 'cataloginventory/item_options/backorders', '0'),
('default', 0, 'cataloginventory/item_options/max_sale_qty', '100000'),
('default', 0, 'cataloginventory/item_options/min_qty', '0'),
('default', 0, 'cataloginventory/item_options/min_sale_qty', '1'),
('default', 0, 'cataloginventory/item_options/notify_stock_qty', '1'),
('default', 0, 'cataloginventory/item_options/enable_qty_increments', '0'),
('default', 0, 'cataloginventory/item_options/auto_return', '0'),
('default', 0, 'cataloginventory/options/display_product_stock_status', '0'),
/* Disable Default Payment Services */
('default', 0, 'payment/authorizenet/active', 0),
('default', 0, 'payment/authorizenet_directpost/active', 0),
('default', 0, 'payment/cash/active', 0),
('default', 0, 'payment/ccsave/active', 0),
('default', 0, 'payment/checkmo/active', 0),
('default', 0, 'payment/free/active', 0),
('default', 0, 'payment/paypal_billing_agreement/active', 0),
('default', 0, 'payment/paypal_express/active', 0),
('default', 0, 'payment/paypal_express_bml/active', 0),
('default', 0, 'payment/paypal_standard/active', 0),
('default', 0, 'payment/purchaseorder/active', 0),
/* SEO */
('default', 0, 'catalog/seo/product_url_suffix', '-product.html'),
('default', 0, 'catalog/seo/category_url_suffix', '-category.html');
");

$installer->endSetup();
