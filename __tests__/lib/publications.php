<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\PublicationsApi;
use OpenAPI\Client\Model\PublicationsCreateRequestBody;
use OpenAPI\Client\Model\PublicationsCreateResponseBody;
use OpenAPI\Client\Model\CustomersCreateRequestBody;
use OpenAPI\Client\Model\CampaignsCreateRequestBody;

function createPublication(PublicationsApi $publicationsApiInstance, string $customerId, string $campaignName): ?PublicationsCreateResponseBody {
    $publication = new PublicationsCreateRequestBody();
    $customer = new CustomersCreateRequestBody();
    $campaign = new CampaignsCreateRequestBody();

    $customer->setId($customerId);
    $campaign->setName($campaignName);
    $publication->setCustomer($customer);
    $publication->setCampaign($campaign);

    try {
        $createdPublication = $publicationsApiInstance->createPublication("true", $publication);
        return $createdPublication;
    } catch (Error $err) {
        error_log('Error during creating publication: ' . $err);
        return null;
    }
}

?>