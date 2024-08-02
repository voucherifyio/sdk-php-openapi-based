<!-- <?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/orders.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class OrdersTest extends TestCase {
    private $ordersApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->ordersApiInstance = Config::ordersApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateOrder() {
        $createdOrder = createOrder($this->ordersApiInstance, $this->voucherify->getCustomer()->id);
consoleLog($createdOrder);
        $snapshot = 'orders/createdOrder';
        $keysToRemove = ['id', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdOrder, $keysToRemove);

        // $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating order');

        $createdOrderJSON = json_decode($createdOrder);
        $this->voucherify->setOrder($createdOrderJSON);
    }

    public function testGetPreviouslyStatusCreatedOrder() {
        $order = getOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);
consoleLog($order);
        $snapshot = 'orders/createdOrder';
        $keysToRemove = ['id', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $order, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating order');
    }

    public function testUpdateOrder() {
        $updatedOrder = updateOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);

        // consoleLog($updatedOrder);
    }
}
?> -->