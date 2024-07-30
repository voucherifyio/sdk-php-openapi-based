<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/campaigns.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class CampaignsTest extends TestCase {
    private $campaignsApiInstance;
    private $validationRulesApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->campaignsApiInstance = Config::campaignsApiInstance();
        $this->validationRulesApiInstance = Config::validationRulesApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateValidationRuleWithApplicableTo() {
        $createdValidationRule = createValidationRuleApplicableTo($this->validationRulesApiInstance, $this->voucherify->getProduct()->id);

        $snapshot = 'campaigns/createdValidationRuleApplicableTo';
        $keysToRemove = ['name', 'id', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdValidationRule, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating validation rule applicable to');

        $createdValidationRuleJSON = json_decode($createdValidationRule);
        $this->voucherify->setValidationRule($createdValidationRuleJSON);

        
    }

    public function testCreateDiscountCampaignWithApplicableToValidationRule() {
        $createdCampaign = createDiscountCampaign($this->campaignsApiInstance, $this->voucherify->getValidationRule()->id);

        $snapshot = 'campaigns/createdDiscountCampaignWithValidationRule';
        $keysToRemove = ['name', 'id', 'created_at', 'rule_id', 'related_object_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdCampaign, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating discount campaign with validation rule');

        $createdCampaignJSON = json_decode($createdCampaign);
        $this->voucherify->setDiscountCampaign($createdCampaignJSON);
    }

    public function testCreatePromotionCampaign() {
        $createdCampaign = createPromotionCampaign($this->campaignsApiInstance);

        $snapshot = 'campaigns/createdPromotionCampaign';
        $keysToRemove = ['name', 'id', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdCampaign, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating promotion campaign');
    }

    public function testCreateLoyaltyCampaign() {
        $createdCampaign = createLoyaltyCampaign($this->campaignsApiInstance);
        consoleLog($createdCampaign);
        // $snapshot = 'campaigns/createdLoyaltyCampaign';
        // $keysToRemove = []; 
        // [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdCampaign, $keysToRemove);
    
        // $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating loyalty campaign');
    }
    

}
?>