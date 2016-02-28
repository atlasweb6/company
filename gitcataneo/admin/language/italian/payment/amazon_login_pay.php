<?php
//Headings
$_['heading_title']                 = 'Accedi e Paga con Amazon';

//Text
$_['text_success']                  = 'Modulo Accedi e Paga con Amazon aggiornato!';
$_['text_ipn_url']					= 'URL Cron Job';
$_['text_ipn_token']				= 'Token Segreto';
$_['text_us']						= 'US';
$_['text_germany']                  = 'Germania';
$_['text_uk']                       = 'Regno Unito';
$_['text_live']                     = 'Live';
$_['text_sandbox']                  = 'Sandbox';
$_['text_auth']						= 'autorizzazione';
$_['text_payment']                  = 'Pagamento';
$_['text_no_capture']               = '--- No Acquisizione Automatica ---';
$_['text_all_geo_zones']            = 'Tutte le zone Geografiche';
$_['text_button_settings']          = 'Impostazioni Pulsante Checkout';
$_['text_colour']                   = 'Colore';
$_['text_orange']                   = 'Arancione';
$_['text_tan']                      = 'Tan';
$_['text_white']                    = 'Bianco';
$_['text_light']                    = 'Chiaro';
$_['text_dark']                     = 'Scuro';
$_['text_size']                     = 'Dimensione';
$_['text_medium']                   = 'Medio';
$_['text_large']                    = 'Largo';
$_['text_x_large']                  = 'Extra largo';
$_['text_background']               = 'Sfondo';
$_['text_edit']						= 'Modifica Login and Pay con Amazon';
$_['text_amazon_login_pay']         = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Iscriviti per accedere e pagare con Amazon"><img src="view/image/payment/amazon.png" alt="Iscriviti per accedere e pagare con Amazon" title="Iscriviti per accedere e pagare con Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']              = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Iscriviti per accedere e pagare con Amazon"><u>Iscriviti per accedere e pagare con Amazon</u></a>';
$_['entry_login_pay_test']          = 'Mod Test';
$_['entry_login_pay_mode']          = 'Modalit&agrave; Pagamento';
$_['text_payment_info']				= 'Informazioni Pagamento';
$_['text_capture_ok']				= 'Acquisizione Avvenuta';
$_['text_capture_ok_order']			= 'Capture was successful, authorization has been fully captured';
$_['text_refund_ok']				= 'Refund was successfully requested';
$_['text_refund_ok_order']			= 'Refund was successfully requested, amount fully refunded';
$_['text_cancel_ok']				= 'Cancel was successful, order status updated to canceled';
$_['text_capture_status']			= 'Pagamento Acquisito';
$_['text_cancel_status']			= 'Pagamento Annullato';
$_['text_refund_status']			= 'Pagamento Rimborsato';
$_['text_order_ref']				= 'Rif ordine';
$_['text_order_total']				= 'Totale Autorizzato';
$_['text_total_captured']			= 'Totale Acquisito';
$_['text_transactions']				= 'Transazioni';
$_['text_column_authorization_id']	= 'ID Autorizzazione Amazon';
$_['text_column_capture_id']		= 'ID Acquisizione Amazon';
$_['text_column_refund_id']			= 'ID Rimborso Amazon';
$_['text_column_amount']			= 'Importo';
$_['text_column_type']				= 'Tipo';
$_['text_column_status']			= 'Stato';
$_['text_column_date_added']		= 'Data Aggiunta';
$_['text_confirm_cancel']			= 'Are you sure you want to cancel the payment?';
$_['text_confirm_capture']			= 'Are you sure you want to capture the payment?';
$_['text_confirm_refund']			= 'Are you sure you want to refund the payment?';
$_['text_minimum_total']            = 'Minimum order Total';
$_['text_geo_zone']                 = 'Zona Geografica';
$_['text_status']                   = 'Stato';
$_['text_declined_codes']           = 'Test Decline Codes';
$_['text_sort_order']               = 'Ordinamento';
$_['text_amazon_invalid']           = 'InvalidPaymentMethod';
$_['text_amazon_rejected']          = 'AmazonRejected';
$_['text_amazon_timeout']           = 'TransactionTimedout';
$_['text_amazon_no_declined']       = '--- No Automatic Declined Authorization ---';

// Columns
$_['column_status']                 = 'Status';

//entry
$_['entry_merchant_id']             = 'ID Commerciante';
$_['entry_access_key']              = 'Access Key';
$_['entry_access_secret']           = 'Secret Key';
$_['entry_client_id']               = 'Client ID';
$_['entry_client_secret']           = 'Client Secret';
$_['entry_marketplace']             = 'Marketplace';
$_['entry_capture_status']          = 'Automatic capture status';
$_['entry_pending_status']          = 'Pending order Status';
$_['entry_ipn_url']					= 'IPN\'s URL';
$_['entry_ipn_token']				= 'Secret Token';
$_['entry_debug']					= 'Debug logging';


// Help
$_['help_pay_mode']					= 'Payment is only available for US marketplace';
$_['help_capture_status']			= 'Choose order staus that will trigger automatic capture of an authorized payment';
$_['help_ipn_url']					= 'Set this as you merhcant URL in Amazon Seller Central';
$_['help_ipn_token']				= 'Make this long and hard to guess';
$_['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$_['help_declined_codes']			= 'This is for testing purposes only';

// order Info
$_['tab_order_adjustment']          = 'order Adjustment';

// Errors
$_['error_permission']              = 'You do not have permissions to modify this module';
$_['error_merchant_id']			    = 'ID Commerciante obbligatorio';
$_['error_access_key']			    = 'Access Key is required';
$_['error_access_secret']		    = 'Secret Key is required';
$_['error_client_id']			    = 'Client ID is required';
$_['error_client_secret']			= 'Client Key is required';
$_['error_pay_mode']				= 'Pagamento disponibile solo sul mercato Americano';
$_['error_curreny']                 = 'Il negozio deve avere %s valute installate ed abilitate';
$_['error_upload']                  = 'Caricamento fallito';
$_['error_data_missing'] 			= 'I dati mancanti sono obbligatori';

// Buttons
$_['button_capture']				= 'Acquisisci';
$_['button_refund']					= 'Rimborso';
$_['button_cancel']					= 'Annulla';
