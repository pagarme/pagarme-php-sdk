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
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use PagarmeApiSDKLib\Http\HttpRequest;
use PagarmeApiSDKLib\Http\HttpResponse;
use PagarmeApiSDKLib\Http\HttpMethod;
use PagarmeApiSDKLib\Http\HttpContext;
use PagarmeApiSDKLib\Http\HttpCallBack;
use Unirest\Request;

class PlansController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Gets a plan
     *
     * @param string $planId Plan id
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlan(string $planId): \PagarmeApiSDKLib\Models\GetPlanResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id' => $planId,
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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanResponse');
    }

    /**
     * Deletes a plan
     *
     * @param string $planId Plan id
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletePlan(
        string $planId,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanResponse');
    }

    /**
     * Updates the metadata from a plan
     *
     * @param string $planId The plan id
     * @param \PagarmeApiSDKLib\Models\UpdateMetadataRequest $request Request for updating the plan
     *        metadata
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlanMetadata(
        string $planId,
        \PagarmeApiSDKLib\Models\UpdateMetadataRequest $request,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanResponse {
        //prepare query string for API call
        $_queryBuilder = '/Plans/{plan_id}/metadata';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
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
        $_bodyJson = Request\Body::Json($request);

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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanResponse');
    }

    /**
     * Updates a plan item
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     * @param \PagarmeApiSDKLib\Models\UpdatePlanItemRequest $body Request for updating the plan
     *        item
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlanItem(
        string $planId,
        string $planItemId,
        \PagarmeApiSDKLib\Models\UpdatePlanItemRequest $body,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}/items/{plan_item_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
            'plan_item_id'    => $planItemId,
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
        $_bodyJson = Request\Body::Json($body);

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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanItemResponse');
    }

    /**
     * Adds a new item to a plan
     *
     * @param string $planId Plan id
     * @param \PagarmeApiSDKLib\Models\CreatePlanItemRequest $request Request for creating a plan
     *        item
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPlanItem(
        string $planId,
        \PagarmeApiSDKLib\Models\CreatePlanItemRequest $request,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}/items';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
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
        $_bodyJson = Request\Body::Json($request);

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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanItemResponse');
    }

    /**
     * Gets a plan item
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlanItem(string $planId, string $planItemId): \PagarmeApiSDKLib\Models\GetPlanItemResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}/items/{plan_item_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'      => $planId,
            'plan_item_id' => $planItemId,
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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanItemResponse');
    }

    /**
     * Creates a new plan
     *
     * @param \PagarmeApiSDKLib\Models\CreatePlanRequest $body Request for creating a plan
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPlan(
        \PagarmeApiSDKLib\Models\CreatePlanRequest $body,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans';

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
        $_bodyJson = Request\Body::Json($body);

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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanResponse');
    }

    /**
     * Removes an item from a plan
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletePlanItem(
        string $planId,
        string $planItemId,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanItemResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}/items/{plan_item_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
            'plan_item_id'    => $planItemId,
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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanItemResponse');
    }

    /**
     * Gets all plans
     *
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $name Filter for Plan's name
     * @param string|null $status Filter for Plan's status
     * @param string|null $billingType Filter for plan's billing type
     * @param \DateTime|null $createdSince Filter for plan's creation date start range
     * @param \DateTime|null $createdUntil Filter for plan's creation date end range
     *
     * @return \PagarmeApiSDKLib\Models\ListPlansResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlans(
        ?int $page = null,
        ?int $size = null,
        ?string $name = null,
        ?string $status = null,
        ?string $billingType = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): \PagarmeApiSDKLib\Models\ListPlansResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans';

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'page'          => $page,
            'size'          => $size,
            'name'          => $name,
            'status'        => $status,
            'billing_type'  => $billingType,
            'created_since' => DateTimeHelper::toRfc3339DateTime($createdSince),
            'created_until' => DateTimeHelper::toRfc3339DateTime($createdUntil),
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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\ListPlansResponse');
    }

    /**
     * Updates a plan
     *
     * @param string $planId Plan id
     * @param \PagarmeApiSDKLib\Models\UpdatePlanRequest $request Request for updating a plan
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlan(
        string $planId,
        \PagarmeApiSDKLib\Models\UpdatePlanRequest $request,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetPlanResponse {
        //prepare query string for API call
        $_queryBuilder = '/plans/{plan_id}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'plan_id'         => $planId,
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
        $_bodyJson = Request\Body::Json($request);

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
        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetPlanResponse');
    }
}
