<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\EventsApi;
use OpenAPI\Client\Model\EventsCreateRequestBody;
use OpenAPI\Client\Model\EventsCreateResponseBody;
use OpenAPI\Client\Model\CustomersCreateRequestBody;

function createEvent(EventsApi $eventsApiInstance): ?EventsCreateResponseBody {
    $event = new EventsCreateRequestBody();
    $customer = new CustomersCreateRequestBody();

    $customer->setSourceId('test-customer');
    $event->setEvent('test-event');
    $event->setCustomer($customer);
    $event->setMetadata(null);
    $event->setReferral(null);
    $event->setLoyalty(null);
    
    try {
        $createdEvent = $eventsApiInstance->trackCustomEvent($event);
        return $createdEvent;
    } catch (Error $err) {
        error_log('Error during creating customer: ' . $err);
        return null;
    }
}

?>