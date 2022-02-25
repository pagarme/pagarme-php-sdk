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
use PagarmeApiSDKLib\Http\HttpRequest;
use PagarmeApiSDKLib\Http\HttpResponse;
use PagarmeApiSDKLib\Http\HttpMethod;
use PagarmeApiSDKLib\Http\HttpContext;
use PagarmeApiSDKLib\Http\HttpCallBack;
use Unirest\Request;

class TokensController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $publicKey Public key
     * @param \PagarmeApiSDKLib\Models\CreateTokenRequest $request Request for creating a token
     * @param string|null $idempotencyKey
     *
     * @return \PagarmeApiSDKLib\Models\GetTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createToken(
        string $publicKey,
        \PagarmeApiSDKLib\Models\CreateTokenRequest $request,
        ?string $idempotencyKey = null
    ): \PagarmeApiSDKLib\Models\GetTokenResponse {
        //prepare query string for API call
        $_queryBuilder = '/tokens?appId={public_key}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'public_key'      => $publicKey,
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
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetTokenResponse');
    }

    /**
     * Gets a token from its id
     *
     * @param string $id Token id
     * @param string $publicKey Public key
     *
     * @return \PagarmeApiSDKLib\Models\GetTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getToken(string $id, string $publicKey): \PagarmeApiSDKLib\Models\GetTokenResponse
    {
        //prepare query string for API call
        $_queryBuilder = '/tokens/{id}?appId={public_key}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'id'         => $id,
            'public_key' => $publicKey,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

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
        return $mapper->mapClass($response->body, 'PagarmeApiSDKLib\\Models\\GetTokenResponse');
    }
}
