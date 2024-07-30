<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\CampaignsApi;
use OpenAPI\Client\Api\ValidationRulesApi;
use OpenAPI\Client\Model\ValidationRulesCreateRequestBody;
use OpenAPI\Client\Model\ValidationRulesCreateResponseBody;
use OpenAPI\Client\Model\ValidationRuleBaseApplicableTo;
use OpenAPI\Client\Model\ApplicableTo;
use OpenAPI\Client\Model\CampaignsCreateRequestBody;
use OpenAPI\Client\Model\CampaignsCreateResponseBody;
use OpenAPI\Client\Model\CampaignsCreateRequestBodyVoucher;
use OpenAPI\Client\Model\Discount;
use OpenAPI\Client\Model\CampaignsCreateRequestBodyPromotion;
use OpenAPI\Client\Model\CampaignLoyaltyCard;
use \OpenAPI\Client\Model\Error;

function createValidationRuleApplicableTo(ValidationRulesApi $validationRulesApiInstance, $productId): ?ValidationRulesCreateResponseBody {
    $validationRule = new ValidationRulesCreateRequestBody();
    $validationRuleApplicableTo = new ValidationRuleBaseApplicableTo();
    $applicableTo = new ApplicableTo();

    $applicableTo->setObject("product");
    $applicableTo->setId($productId);

    $validationRuleApplicableTo->setIncluded([$applicableTo]);

    $validationRule->setName(generateRandomString());
    $validationRule->setApplicableTo($validationRuleApplicableTo);
    $validationRule->setType('basic');

    try {
        $createdValidaitonRule = $validationRulesApiInstance->createValidationRules($validationRule);
        return $createdValidaitonRule;
    } catch (Error $err) {
        error_log('Error during creating validation rule: ' . $err);
        return null;
    }
}

function createDiscountCampaign(CampaignsApi $campaignsApiInstance, $validationRuleId): ?CampaignsCreateResponseBody {
    $campaign = new CampaignsCreateRequestBody();
    $voucher = new CampaignsCreateRequestBodyVoucher();
    $discount = new Discount();

    $discount->setType('AMOUNT');
    $discount->setAmountOff(1000);

    $voucher->setType('DISCOUNT_VOUCHER');
    $voucher->setDiscount($discount);

    $campaign->setCampaignType('DISCOUNT_COUPONS');
    $campaign->setName(generateRandomString());
    $campaign->setType('AUTO_UPDATE');
    $campaign->setValidationRules([$validationRuleId]);
    $campaign->setVoucher($voucher);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating discount campaign: ' . $err);
        return null;
    }
}

function createPromotionCampaign(CampaignsApi $campaignsApiInstance): ?CampaignsCreateResponseBody {
    $campaign = new CampaignsCreateRequestBody();
    $promotion = new CampaignsCreateRequestBodyPromotion();
    $discount = new Discount();
    
    $discount->setType('AMOUNT');
    $discount->setAmountOff(1000);
    
    $promotion->setTiers([
        "name" => generateRandomString(),
        "banner" => generateRandomString(),
        "action" => $discount
    ]);

    $campaign->setCampaignType('PROMOTION');
    $campaign->setName(generateRandomString());
    $campaign->setPromotion($promotion);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating promotion campaign: ' . $err);
        return null;
    }
}

function createLoyaltyCampaign(CampaignsApi $campaignsApiInstance): ?CampaignsCreateResponseBody {
    $campaign = new CampaignsCreateRequestBody();
    $voucher = new CampaignsCreateRequestBodyVoucher();
    $loyaltyCard = new CampaignLoyaltyCard();

    $loyaltyCard->setPoints(1000);

    $voucher->setType('LOYALTY_CARD');
    $voucher->setLoyaltyCard($loyaltyCard);

    $campaign->setCampaignType('LOYALTY_PROGRAM');
    $campaign->setName(generateRandomString());
    $campaign->setVoucher($voucher);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating loyalty campaign: ' . $err);
        return null;
    }
}



?>