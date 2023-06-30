<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use PagarmeApiSDKLib\Exceptions\ApiException;
use PagarmeApiSDKLib\Models\GetBalanceOperationResponse;
use PagarmeApiSDKLib\Models\ListBalanceOperationResponse;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

class BalanceOperationsController extends BaseController
{
    /**
     * @param string|null $status
     * @param \DateTime|null $createdSince
     * @param \DateTime|null $createdUntil
     *
     * @return ListBalanceOperationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getBalanceOperations(
        ?string $status = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): ListBalanceOperationResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/balance/operations')
            ->auth('global')
            ->parameters(
                QueryParam::init('status', $status),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ListBalanceOperationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param int $id
     *
     * @return GetBalanceOperationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getBalanceOperationById(int $id): GetBalanceOperationResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/balance/operations/{id}')
            ->auth('global')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()->type(GetBalanceOperationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
