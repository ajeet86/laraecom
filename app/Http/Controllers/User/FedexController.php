<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Config;
use Illuminate\Http\Request;
use FedEx\AddressValidationService\Request as AddressValidateRequest;
use FedEx\AddressValidationService\ComplexType as AddressValidationComplexType;
use FedEx\AddressValidationService\SimpleType as AddressValidationSimpleType;
use FedEx\RateService\Request as RateRequest;
use FedEx\RateService\ComplexType;
use FedEx\RateService\SimpleType;
use FedEx\OpenShipService\Request as OpenShipServiceRequest;
use FedEx\OpenShipService\ComplexType as OpenShipServiceComplexType;
use FedEx\OpenShipService\SimpleType as OpenShipServiceSimpleType;
use FedEx\TrackService\Request as TrackServiceRequest;
use FedEx\TrackService\ComplexType as TrackServiceComplexType;
use FedEx\TrackService\SimpleType as TrackServiceSimpleType;
use FedEx\ShipService\Request as ShipServiceRequest;
use FedEx\ShipService\ComplexType as ShipServiceComplexType;
use FedEx\ShipService\SimpleType as ShipServiceSimpleType;

class FedexController extends Controller {
    public function fedex_addr_validation(){
        $addressValidationRequest = new AddressValidationComplexType\AddressValidationRequest();
        // User Credentials
        $addressValidationRequest->WebAuthenticationDetail->UserCredential->Key = 'ivfEYX8HZPgzdgsh';
        $addressValidationRequest->WebAuthenticationDetail->UserCredential->Password = 'bDKw3F3ZRA214qZa4m0mwIPKT';
		//$addressValidationRequest->WebAuthenticationDetail->UserCredential->Key = 'h5Olb0Vb1Iq86weU';
        //$addressValidationRequest->WebAuthenticationDetail->UserCredential->Password = '3KLQQacleFTlzGJpVO6JRIZDB';
        // Client Detail
        $addressValidationRequest->ClientDetail->AccountNumber = '510087283';
        $addressValidationRequest->ClientDetail->MeterNumber = '118748019';
		//$addressValidationRequest->ClientDetail->AccountNumber = '510087100';
        //$addressValidationRequest->ClientDetail->MeterNumber = '113999407';
        // Version
        $addressValidationRequest->Version->ServiceId = 'aval';
        $addressValidationRequest->Version->Major = 4;
        $addressValidationRequest->Version->Intermediate = 0;
        $addressValidationRequest->Version->Minor = 0;
        // Address(es) to validate.
        $addressValidationRequest->AddressesToValidate = [new AddressValidationComplexType\AddressToValidate()]; // just validating 1 address in this example.
        $addressValidationRequest->AddressesToValidate[0]->Address->StreetLines = [$request->street_line];
        $addressValidationRequest->AddressesToValidate[0]->Address->City = $request->city;
        $addressValidationRequest->AddressesToValidate[0]->Address->StateOrProvinceCode = $request->state;
        $addressValidationRequest->AddressesToValidate[0]->Address->PostalCode = $request->postal_code;
        $addressValidationRequest->AddressesToValidate[0]->Address->CountryCode = $request->country;
        $request = new AddressValidateRequest();
        $addressValidationReply = $request->getAddressValidationReply($addressValidationRequest);
        //echo "<pre>";
        //var_dump($addressValidationReply);
		return $addressValidationReply;
    }

    public function fedex_rate_request(Request $request, $seller_id, $item_info) {
        $rateRequest = new \FedEx\RateService\ComplexType\RateRequest();
        //authentication & client details
		$rateRequest->WebAuthenticationDetail->UserCredential->Key = 'ivfEYX8HZPgzdgsh';
        $rateRequest->WebAuthenticationDetail->UserCredential->Password = 'bDKw3F3ZRA214qZa4m0mwIPKT';
        $rateRequest->ClientDetail->AccountNumber = '510087283';
        $rateRequest->ClientDetail->MeterNumber = '118748019';
        $rateRequest->TransactionDetail->CustomerTransactionId = 'testing rate service request';
		
        //version
        $rateRequest->Version->ServiceId = 'crs';
        $rateRequest->Version->Major = 24;
        $rateRequest->Version->Minor = 0;
        $rateRequest->Version->Intermediate = 0;
        $rateRequest->ReturnTransitAndCommit = true;

        //shipper
        $shipper_addr = DB::table('users')->select('street_line', 'city', 'state', 'country', 'postal_code')->where('id', $seller_id)->first();
        $rateRequest->RequestedShipment->PreferredCurrency = 'USD';
        $rateRequest->RequestedShipment->Shipper->Address->StreetLines = [$shipper_addr->street_line];
        $rateRequest->RequestedShipment->Shipper->Address->City = $shipper_addr->city;
        $rateRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = $shipper_addr->state;
        $rateRequest->RequestedShipment->Shipper->Address->PostalCode = $shipper_addr->postal_code;
        $rateRequest->RequestedShipment->Shipper->Address->CountryCode = $shipper_addr->country;

        //recipient
        $rateRequest->RequestedShipment->Recipient->Address->StreetLines = [$request->address];
        $rateRequest->RequestedShipment->Recipient->Address->City = $request->city;
        $rateRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = $request->state;
        $rateRequest->RequestedShipment->Recipient->Address->PostalCode = $request->pin_code;
        $rateRequest->RequestedShipment->Recipient->Address->CountryCode = $request->country;

        //shipping charges payment
        $rateRequest->RequestedShipment->ShippingChargesPayment->PaymentType = SimpleType\PaymentType::_SENDER;

        //rate request types
        $rateRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_PREFERRED, SimpleType\RateRequestType::_LIST];


        for ($i = 0; $i < sizeof($item_info); $i++) {
            $requestedPackageLineItems[] = new ComplexType\RequestedPackageLineItem();
        }
        //create package line items
        $rateRequest->RequestedShipment->RequestedPackageLineItems = $requestedPackageLineItems;
        //package 1
        for ($i = 0; $i < sizeof($item_info); $i++) {
            $rateRequest->RequestedShipment->RequestedPackageLineItems[$i]->Weight->Value = $item_info[$i]['weight'];
            $rateRequest->RequestedShipment->RequestedPackageLineItems[$i]->Weight->Units = SimpleType\WeightUnits::_LB;
            //$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Length = 10;
            //$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Width = 10;
            //$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Height = 3;
            //$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Units = SimpleType\LinearUnits::_IN;
            $rateRequest->RequestedShipment->RequestedPackageLineItems[$i]->GroupPackageCount = $item_info[$i]['quantity'];
            $packageCount[] = $item_info[$i]['quantity'];
        }
        $rateRequest->RequestedShipment->PackageCount = array_sum($packageCount);
        $rateServiceRequest = new RateRequest();
        //$rateServiceRequest->getSoapClient()->__setLocation(RateRequest::PRODUCTION_URL); //use production URL
        $rateReply = $rateServiceRequest->getGetRatesReply($rateRequest); // send true as the 2nd argument to return the SoapClient's stdClass response.
        /* if (!empty($rateReply->RateReplyDetails)) {
          foreach ($rateReply->RateReplyDetails as $rateReplyDetail) {
          var_dump($rateReplyDetail->ServiceType);
          if (!empty($rateReplyDetail->RatedShipmentDetails)) {
          foreach ($rateReplyDetail->RatedShipmentDetails as $ratedShipmentDetail) {
          var_dump($ratedShipmentDetail->ShipmentRateDetail->RateType . ": " . $ratedShipmentDetail->ShipmentRateDetail->TotalNetCharge->Amount);
          }
          }
          echo "<hr />";
          }
          } */
		
        return $rateReply;
    }

    public function fedex_open_shipment_req($seller) {
        $user_id = Auth::id();
        $user_shipping_addr = DB::table('shipping_infos')->where('user_id', $user_id)->orderBy('id', 'DESC')->first();
        $shipDate = new \DateTime();
        $shipping_type = session('shipping_type');

        $shipDate = new \DateTime();
        $createOpenShipmentRequest = new OpenShipServiceComplexType\CreateOpenShipmentRequest();
        // web authentication detail
        $createOpenShipmentRequest->WebAuthenticationDetail->UserCredential->Key = 'ivfEYX8HZPgzdgsh';
        $createOpenShipmentRequest->WebAuthenticationDetail->UserCredential->Password = 'bDKw3F3ZRA214qZa4m0mwIPKT';
        // client detail
        $createOpenShipmentRequest->ClientDetail->MeterNumber = '118748019';
        $createOpenShipmentRequest->ClientDetail->AccountNumber = '510087283';
        // version
        $createOpenShipmentRequest->Version->ServiceId = 'ship';
        $createOpenShipmentRequest->Version->Major = 15;
        $createOpenShipmentRequest->Version->Intermediate = 0;
        $createOpenShipmentRequest->Version->Minor = 0;

        // package 1
        $requestedPackageLineItem1 = new OpenShipServiceComplexType\RequestedPackageLineItem();
        $requestedPackageLineItem1->SequenceNumber = 1;
        $requestedPackageLineItem1->ItemDescription = 'Product description 1';
        //$requestedPackageLineItem1->Dimensions->Width = 10;
        //$requestedPackageLineItem1->Dimensions->Height = 10;
        //$requestedPackageLineItem1->Dimensions->Length = 15;
        //$requestedPackageLineItem1->Dimensions->Units = OpenShipServiceSimpleType\LinearUnits::_IN;
        $requestedPackageLineItem1->Weight->Value = 2;
        $requestedPackageLineItem1->Weight->Units = OpenShipServiceSimpleType\WeightUnits::_KG;

        // requested shipment
        $createOpenShipmentRequest->RequestedShipment->DropoffType = OpenShipServiceSimpleType\DropoffType::_REGULAR_PICKUP;
        $createOpenShipmentRequest->RequestedShipment->ShipTimestamp = $shipDate->format('c');
        $createOpenShipmentRequest->RequestedShipment->ServiceType = $shipping_type;
        $createOpenShipmentRequest->RequestedShipment->PackagingType = OpenShipServiceSimpleType\PackagingType::_YOUR_PACKAGING;
        $createOpenShipmentRequest->RequestedShipment->LabelSpecification->ImageType = OpenShipServiceSimpleType\ShippingDocumentImageType::_PDF;
        $createOpenShipmentRequest->RequestedShipment->LabelSpecification->LabelFormatType = OpenShipServiceSimpleType\LabelFormatType::_COMMON2D;
        $createOpenShipmentRequest->RequestedShipment->LabelSpecification->LabelStockType = OpenShipServiceSimpleType\LabelStockType::_PAPER_4X6;
        $createOpenShipmentRequest->RequestedShipment->RateRequestTypes = [OpenShipServiceSimpleType\RateRequestType::_PREFERRED];
        $createOpenShipmentRequest->RequestedShipment->PackageCount = 1;
        $createOpenShipmentRequest->RequestedShipment->RequestedPackageLineItems = [$requestedPackageLineItem1];

        // requested shipment shipper
        $shipper_addr = DB::table('users')->select('name', 'email', 'phone', 'street_line', 'city', 'state', 'country', 'postal_code')->where('id', $seller)->first();
        $createOpenShipmentRequest->RequestedShipment->Shipper->AccountNumber = '510087283';
        $createOpenShipmentRequest->RequestedShipment->Shipper->Address->StreetLines = [$shipper_addr->street_line];
        $createOpenShipmentRequest->RequestedShipment->Shipper->Address->City = $shipper_addr->city;
        $createOpenShipmentRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = $shipper_addr->state;
        $createOpenShipmentRequest->RequestedShipment->Shipper->Address->PostalCode = $shipper_addr->postal_code;
        $createOpenShipmentRequest->RequestedShipment->Shipper->Address->CountryCode = $shipper_addr->country;
        //$createOpenShipmentRequest->RequestedShipment->Shipper->Contact->CompanyName = Config::get('constants.shipper_contact_dtls.CompanyName');
        $createOpenShipmentRequest->RequestedShipment->Shipper->Contact->PersonName = $shipper_addr->name;
        $createOpenShipmentRequest->RequestedShipment->Shipper->Contact->EMailAddress = $shipper_addr->email;
        $createOpenShipmentRequest->RequestedShipment->Shipper->Contact->PhoneNumber = $shipper_addr->phone;

        // requested shipment recipient

        $createOpenShipmentRequest->RequestedShipment->Recipient->Address->StreetLines = $user_shipping_addr->address;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Address->City = $user_shipping_addr->city;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = $user_shipping_addr->state;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Address->PostalCode = $user_shipping_addr->pin_code;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Address->CountryCode = $user_shipping_addr->country;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Contact->PersonName = $user_shipping_addr->first_name . " " . $user_shipping_addr->last_name;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Contact->EMailAddress = Auth::user()->email;
        $createOpenShipmentRequest->RequestedShipment->Recipient->Contact->PhoneNumber = $user_shipping_addr->phone_number;

        // shipping charges payment
        $createOpenShipmentRequest->RequestedShipment->ShippingChargesPayment->Payor->ResponsibleParty = $createOpenShipmentRequest->RequestedShipment->Shipper;
        $createOpenShipmentRequest->RequestedShipment->ShippingChargesPayment->PaymentType = OpenShipServiceSimpleType\PaymentType::_SENDER;

        // Add to CustomsClearanceDetail
        /* $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->PaymentType = OpenShipServiceSimpleType\PaymentType::_SENDER;
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->AccountNumber ='510087283';
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Contact->PersonName = Config::get('constants.shipper_contact_dtls.PersonName');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Contact->CompanyName = Config::get('constants.shipper_contact_dtls.CompanyName');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Contact->PhoneNumber = Config::get('constants.shipper_contact_dtls.PhoneNumber');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Contact->EMailAddress = Config::get('constants.shipper_contact_dtls.EMailAddress');

          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Address->StreetLines = Config::get('constants.shipper_address.StreetLines');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Address->City = Config::get('constants.shipper_address.City');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Address->StateOrProvinceCode = Config::get('constants.shipper_address.StateOrProvinceCode');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Address->PostalCode = Config::get('constants.shipper_address.PostalCode');
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->DutiesPayment->Payor->ResponsibleParty->Address->CountryCode = Config::get('constants.shipper_address.CountryCode');
          //Add custom values
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->CustomsValue->Currency = 'USD';
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->CustomsValue->Amount = $item_data['amount_to_pay']; */


        //Commodities
        /* $Commodity = new OpenShipServiceComplexType\Commodity();
          $Commodity->Name = $item_data['item_name'];
          $Commodity->NumberOfPieces = $item_data['no_of_pieces'];
          $Commodity->Description = "Book";
          $Commodity->CountryOfManufacture = 'CL';
          $Commodity->Weight->Units = OpenShipServiceSimpleType\WeightUnits::_KG;
          $Commodity->Weight->Value = 2;
          $Commodity->Quantity = 1;
          $Commodity->QuantityUnits = OpenShipServiceSimpleType\WeightUnits::_KG;
          $Commodity->UnitPrice->Currency = 'USD';
          $Commodity->UnitPrice->Amount = $item_data['unit_amount'];
          $createOpenShipmentRequest->RequestedShipment->CustomsClearanceDetail->Commodities = [$Commodity]; */

        // send the create open shipment request
        $openShipServiceRequest = new OpenShipServiceRequest();
        //$openShipServiceRequest->getSoapClient()->__setLocation($openShipServiceRequest::PRODUCTION_URL);
        $createOpenShipmentReply = $openShipServiceRequest->getCreateOpenShipmentReply($createOpenShipmentRequest);
        // shipment is created and we have an index number
        $index = $createOpenShipmentReply->Index;


        /*         * ******************************
         * Add a package to open shipment
         * ****************************** */
        //$addPackagesToOpenShipmentRequest = new OpenShipServiceComplexType\AddPackagesToOpenShipmentRequest();
        // set index
        //$addPackagesToOpenShipmentRequest->Index = $index;
        // reuse web authentication detail from previous request
        //$addPackagesToOpenShipmentRequest->WebAuthenticationDetail = $createOpenShipmentRequest->WebAuthenticationDetail;
        // reuse client detail from previous request
        //$addPackagesToOpenShipmentRequest->ClientDetail = $createOpenShipmentRequest->ClientDetail;
        // reuse version from previous request
        //$addPackagesToOpenShipmentRequest->Version = $createOpenShipmentRequest->Version;
        // requested package line item
        //$requestedPackageLineItem2 = new OpenShipServiceComplexType\RequestedPackageLineItem();
        //$requestedPackageLineItem2->SequenceNumber = 2;
        //$requestedPackageLineItem2->ItemDescription = 'New package added to open shipment';
        //$requestedPackageLineItem2->Dimensions->Width = 20;
        //$requestedPackageLineItem2->Dimensions->Height = 10;
        //$requestedPackageLineItem2->Dimensions->Length = 12;
        //$requestedPackageLineItem2->Dimensions->Units = OpenShipServiceSimpleType\LinearUnits::_IN;
        //$requestedPackageLineItem2->Weight->Value = 2;
        //$requestedPackageLineItem2->Weight->Units = OpenShipServiceSimpleType\WeightUnits::_KG;
        //$addPackagesToOpenShipmentRequest->RequestedPackageLineItems = [$requestedPackageLineItem2];
        // send the add packages to open shipment request
        //$addPackagesToOpenShipmentReply = $openShipServiceRequest->getAddPackagesToOpenShipmentReply($addPackagesToOpenShipmentRequest);
        //echo "<pre>";
        //print_r($createOpenShipmentReply);
        //echo "<hr>";

        /*         * **********************************
         * Retrieve the open shipment details
         * ********************************** */
        $retrieveOpenShipmentRequest = new OpenShipServiceComplexType\RetrieveOpenShipmentRequest();
        $retrieveOpenShipmentRequest->Index = $index;
        $retrieveOpenShipmentRequest->WebAuthenticationDetail = $createOpenShipmentRequest->WebAuthenticationDetail;
        $retrieveOpenShipmentRequest->ClientDetail = $createOpenShipmentRequest->ClientDetail;
        $retrieveOpenShipmentRequest->Version = $createOpenShipmentRequest->Version;

        $retrieveOpenShipmentReply = $openShipServiceRequest->getRetrieveOpenShipmentReply($retrieveOpenShipmentRequest);

        //print_r($retrieveOpenShipmentReply);
        //echo "<hr>";

        /*         * *********************
         * Confirm open shipment
         * ********************* */
        $confirmOpenShipmentRequest = new OpenShipServiceComplexType\ConfirmOpenShipmentRequest();
        $confirmOpenShipmentRequest->WebAuthenticationDetail = $createOpenShipmentRequest->WebAuthenticationDetail;
        $confirmOpenShipmentRequest->ClientDetail = $createOpenShipmentRequest->ClientDetail;
        $confirmOpenShipmentRequest->Version = $createOpenShipmentRequest->Version;
        $confirmOpenShipmentRequest->Index = $index;

        $confirmOpenShipmentReply = $openShipServiceRequest->getConfirmOpenShipmentReply($confirmOpenShipmentRequest);
        //print_r($confirmOpenShipmentReply);
        //die();
        return array($createOpenShipmentReply, $retrieveOpenShipmentReply, $confirmOpenShipmentReply);
    }

    // set session for selecting shipping option
    public function set_session_ship_rate(Request $request) {
        $request->session()->put('shipping_amount', $request->shipping_amount);
        $request->session()->put('shipping_type', $request->shipping_type);
    }

    public function fedex_track_by_id($package_tracking_nos) {
        $trackingId1 = $id;
        //$trackingId2 = 123456789012;

        $trackRequest = new TrackServiceComplexType\TrackRequest();
        // User Credential
        $trackRequest->WebAuthenticationDetail->UserCredential->Key = 'ivfEYX8HZPgzdgsh';
        $trackRequest->WebAuthenticationDetail->UserCredential->Password = 'bDKw3F3ZRA214qZa4m0mwIPKT';

        // Client Detail
        $trackRequest->ClientDetail->AccountNumber = '510087283';
        $trackRequest->ClientDetail->MeterNumber = '118748019';

        // Version
        $trackRequest->Version->ServiceId = 'trck';
        $trackRequest->Version->Major = 16;
        $trackRequest->Version->Intermediate = 0;
        $trackRequest->Version->Minor = 0;

        // Track 2 shipments
        $trackRequest->SelectionDetails = [new TrackServiceComplexType\TrackSelectionDetail(), new TrackServiceComplexType\TrackSelectionDetail()];

        // Track shipment 1
        $trackRequest->SelectionDetails[0]->PackageIdentifier->Value = $trackingId1;
        $trackRequest->SelectionDetails[0]->PackageIdentifier->Type = TrackServiceSimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG;

        // Track shipment 2
        //$trackRequest->SelectionDetails[1]->PackageIdentifier->Value = $trackingId2;
        //$trackRequest->SelectionDetails[1]->PackageIdentifier->Type = TrackServiceSimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG;

        $request = new TrackServiceRequest();
        $trackReply = $request->getTrackReply($trackRequest);
        //echo "<pre>";
        //print_r($trackReply->CompletedTrackDetails[0]->TrackDetails[0]->Notification->Message);
        return $trackReply;
    }

    public function fedex_cancel_pending_shipment($pTrckId) {
        
        $userCredential = new ShipServiceComplexType\WebAuthenticationCredential();
        $userCredential
                ->setKey('ivfEYX8HZPgzdgsh')
                ->setPassword('bDKw3F3ZRA214qZa4m0mwIPKT');

        $webAuthenticationDetail = new ShipServiceComplexType\WebAuthenticationDetail();
        $webAuthenticationDetail->setUserCredential($userCredential);

        $clientDetail = new ShipServiceComplexType\ClientDetail();
        $clientDetail
                ->setAccountNumber('510087283')
                ->setMeterNumber('118748019');

        $version = new ShipServiceComplexType\VersionId();
        $version
                ->setServiceId('ship')
                ->setMajor(23)
                ->setIntermediate(0)
                ->setMinor(0);

        $trackingId = new ShipServiceComplexType\TrackingId();
        $trackingId
                ->setTrackingNumber($pTrckId)
                ->setTrackingIdType(ShipServiceSimpleType\TrackingIdType::_FEDEX);


        $deleteShipmentRequest = new ShipServiceComplexType\DeleteShipmentRequest();
        $deleteShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
        $deleteShipmentRequest->setClientDetail($clientDetail);
        $deleteShipmentRequest->setVersion($version);
        $deleteShipmentRequest->setTrackingId($trackingId);
        $deleteShipmentRequest->setDeletionControl(ShipServiceSimpleType\DeletionControlType::_DELETE_ALL_PACKAGES);


        $validateShipmentRequest = new ShipServiceRequest();
        //$validateShipmentRequest->getSoapClient()->__setLocation('https://wsbeta.fedex.com:443/web-services/ship');
        $response = $validateShipmentRequest->getDeleteShipmentReply($deleteShipmentRequest);
        return $response;
    }

}
