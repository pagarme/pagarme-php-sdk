<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Controllers;

use PagarmeApiSDKLib\Exceptions\ApiException;
use PagarmeApiSDKLib\ApiHelper;
use PagarmeApiSDKLib\ConfigurationInterface;
use PagarmeApiSDKLib\Models;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use PagarmeApiSDKLib\Http\HttpRequest;
use PagarmeApiSDKLib\Http\HttpResponse;
use PagarmeApiSDKLib\Http\HttpMethod;
use PagarmeApiSDKLib\Http\HttpContext;
use PagarmeApiSDKLib\Http\HttpCallBack;
use Unirest\Request;

class OrdersController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Gets all orders
     *
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $code Filter for order's code
     * @param string|null $status Filter for order's status
     * @param \DateTime|null $createdSince Filter for order's creation date start range
     * @param \DateTime|null $createdUntil Filter for order's creation date end range
     * @param string|null $customerId Filter for order's customer id
     *
     * @return Models\ListOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrders(
        ?int $page = null,
        ?int $size = null,
        ?string $code = null,
        ?string $status = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null,
        ?string $customerId = null
    ): Models\ListOrderResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders';

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'page'          => $page,
            'size'          => $size,
            'code'          => $code,
            'status'        => $status,
            'created_since' => DateTimeHelper::toRfc3339DateTime($createdSince),
            'created_until' => DateTimeHelper::toRfc3339DateTime($createdUntil),
            'customer_id'   => $customerId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ListOrderResponse');
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     *
     * @return Models\GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrderItem(string $orderId, string $itemId): Models\GetOrderItemResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/orders/{orderId}/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'orderId' => $orderId,
            'itemId'  => $itemId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderItemResponse');
    }

    /**
     * Gets an order
     *
     * @param string $orderId Order id
     *
     * @return Models\GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrder(string $orderId): Models\GetOrderResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/orders/{order_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'order_id' => $orderId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderResponse');
    }

    /**
     * @param string $id Order Id
     * @param Models\UpdateOrderStatusRequest $request Update Order Model
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function closeOrder(
        string $id,
        Models\UpdateOrderStatusRequest $request,
        ?string $idempotencyKey = null
    ): Models\GetOrderResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders/{id}/closed';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'id'              => $id,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($request);

        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::patch($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderResponse');
    }

    /**
     * Creates a new Order
     *
     * @param Models\CreateOrderRequest $body Request for creating an order
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOrder(
        Models\CreateOrderRequest $body,
        ?string $idempotencyKey = null
    ): Models\GetOrderResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderResponse');
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     * @param Models\UpdateOrderItemRequest $request Item Model
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateOrderItem(
        string $orderId,
        string $itemId,
        Models\UpdateOrderItemRequest $request,
        ?string $idempotencyKey = null
    ): Models\GetOrderItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders/{orderId}/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'orderId'         => $orderId,
            'itemId'          => $itemId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($request);

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::put($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderItemResponse');
    }

    /**
     * @param string $orderId Order Id
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteAllOrderItems(string $orderId, ?string $idempotencyKey = null): Models\GetOrderResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/orders/{orderId}/items';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'orderId'         => $orderId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderResponse');
    }

    /**
     * Updates the metadata from an order
     *
     * @param string $orderId The order id
     * @param Models\UpdateMetadataRequest $request Request for updating the order metadata
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateOrderMetadata(
        string $orderId,
        Models\UpdateMetadataRequest $request,
        ?string $idempotencyKey = null
    ): Models\GetOrderResponse {
        //prepare query string for API call
        $_queryBuilder = '/Orders/{order_id}/metadata';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'order_id'        => $orderId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($request);

        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::patch($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderResponse');
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteOrderItem(
        string $orderId,
        string $itemId,
        ?string $idempotencyKey = null
    ): Models\GetOrderItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders/{orderId}/items/{itemId}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'orderId'         => $orderId,
            'itemId'          => $itemId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderItemResponse');
    }

    /**
     * @param string $orderId Order Id
     * @param Models\CreateOrderItemRequest $request Order Item Model
     * @param string|null $idempotencyKey
     *
     * @return Models\GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOrderItem(
        string $orderId,
        Models\CreateOrderItemRequest $request,
        ?string $idempotencyKey = null
    ): Models\GetOrderItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/orders/{orderId}/items';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'orderId'         => $orderId,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json',
            'idempotency-key' => $idempotencyKey
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($request);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'GetOrderItemResponse');
    }
}
