<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\OrdersApi;
use OpenAPI\Client\Model\CustomersCreateRequestBody;
use OpenAPI\Client\Model\OrderItem;
use OpenAPI\Client\Model\OrdersCreateRequestBody;
use OpenAPI\Client\Model\OrdersCreateResponseBody;
use OpenAPI\Client\Model\OrdersGetResponseBody;
use OpenAPI\Client\Model\OrdersUpdateRequestBody;
use OpenAPI\Client\Model\OrdersUpdateResponseBody;

    function createOrder(OrdersApi $ordersApiInstance, string $customerId): ?OrdersCreateResponseBody {
        $order = new OrdersCreateRequestBody();
        $customer = new CustomersCreateRequestBody();

        $customer->setId($customerId);
        $product1 = new OrderItem();
        $product2 = new OrderItem();

        $product1->setProduct('test-order-item1');
        $product1->setQuantity(1);
        $product2->setProduct('test-order-item2');
        $product2->setQuantity(1);

        $order->setItems([$product1, $product2]);
        $order->setAmount(10000);
        $order->setStatus('CREATED');
        $order->setCustomer($customer);

        try {
            $createdOrder = $ordersApiInstance->createOrder($order);
            return $createdOrder;
        } catch (Error $err) {
            error_log('Error during creating order: ' . $err);
            return null;
        }
    }

    function getOrder(OrdersApi $ordersApiInstance, string $orderId): ?OrdersGetResponseBody {
        try {
            $order = $ordersApiInstance->getOrder($orderId);
            return $order;
        } catch (Error $err) {
            error_log('Error during getting order: ' . $err);
            return null;
        }
    }

    function updateOrder(OrdersApi $ordersApiInstance, string $orderId): ?OrdersUpdateResponseBody {
        $order = new OrdersUpdateRequestBody();
        $order->setAmount(30000);
        $order->setStatus('PAID');

        try {
            $updatedOrder = $ordersApiInstance->updateOrder($orderId, $order);
            return $updatedOrder;
        } catch (Error $err) {
            error_log('Error during getting order: ' . $err);
            return null;
        }
    }
?>