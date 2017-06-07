<?php
  include_once('paypal.class.php');

  function execute_payment( $sandbox, $api_username, $api_password, $api_signature, $currency, $fees_payer, $receivers, $return_page ) { 
  // Create PayPal object.
      $PayPalConfig = array(
         'Sandbox' => $sandbox,
         'DeveloperAccountEmail' => '',
         'ApplicationID' =>
         'APP-80W284485P519543T',
         'DeviceID' => '',
         'IPAddress' => $_SERVER['REMOTE_ADDR'],
         'APIUsername' => $api_username,
         'APIPassword' => $api_password,
         'APISignature' => $api_signature,
         'APISubject' => ''
      );

      $PayPal = new PayPal_Adaptive($PayPalConfig);

      // Prepare request arrays
      $PayRequestFields = array(
         'ActionType' => 'CREATE',
         'CancelURL' => $return_page,
         'CurrencyCode' => $currency,
         'FeesPayer' => $fees_payer,
         'IPNNotificationURL' => '',
         'Memo' => '',
         'Pin' => '',
         'PreapprovalKey' => '',
         'ReturnURL' => $current_page,
         'ReverseAllParallelPaymentsOnError' => '',
         'SenderEmail' => '',
         'TrackingID' => ''
      );

      $ClientDetailsFields = array(
         'CustomerID' => '',
         'CustomerType' => '',
         'GeoLocation' => '',
         'Model' => '',
         'PartnerName' => 'Always Give Back'
      );

      $FundingTypes = array('ECHECK', 'BALANCE', 'CREDITCARD');
      $SenderIdentifierFields = array( 'UseCredentials' => '' );
      $AccountIdentifierFields = array(
         'Email' => '',
         'Phone' => array('CountryCode' => '', 'PhoneNumber' => '', 'Extension' => '')
      );

      $PayPalRequestData = array( 'PayRequestFields' => $PayRequestFields, 'ClientDetailsFields' => $ClientDetailsFields, 'FundingTypes' => $FundingTypes, 'Receivers' => $receivers, 'SenderIdentifierFields' => $SenderIdentifierFields, 'AccountIdentifierFields' => $AccountIdentifierFields );
      $PayPalResult = $PayPal->Pay($PayPalRequestData);

      return $PayPalResult;
  }
?>
