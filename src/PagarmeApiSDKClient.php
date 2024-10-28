<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib;

use Core\ClientBuilder;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Authentication\BasicAuthCredentialsBuilder;
use PagarmeApiSDKLib\Authentication\BasicAuthManager;
use PagarmeApiSDKLib\Controllers\BalanceOperationsController;
use PagarmeApiSDKLib\Controllers\ChargesController;
use PagarmeApiSDKLib\Controllers\CustomersController;
use PagarmeApiSDKLib\Controllers\InvoicesController;
use PagarmeApiSDKLib\Controllers\OrdersController;
use PagarmeApiSDKLib\Controllers\PayablesController;
use PagarmeApiSDKLib\Controllers\PlansController;
use PagarmeApiSDKLib\Controllers\RecipientsController;
use PagarmeApiSDKLib\Controllers\SubscriptionsController;
use PagarmeApiSDKLib\Controllers\TokensController;
use PagarmeApiSDKLib\Controllers\TransactionsController;
use PagarmeApiSDKLib\Controllers\TransfersController;
use PagarmeApiSDKLib\Exceptions;
use PagarmeApiSDKLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class PagarmeApiSDKClient implements ConfigurationInterface
{
    private $subscriptions;

    private $orders;

    private $plans;

    private $invoices;

    private $customers;

    private $charges;

    private $recipients;

    private $tokens;

    private $transactions;

    private $transfers;

    private $payables;

    private $balanceOperations;

    private $basicAuthManager;

    private $config;

    private $client;

    /**
     * @see PagarmeApiSDKClientBuilder::init()
     * @see PagarmeApiSDKClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->basicAuthManager = new BasicAuthManager($this->config);
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('PagarmeApiSDK - PHP 6.8.14')
            ->globalConfig($this->getGlobalConfiguration())
            ->globalErrors($this->getGlobalErrors())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['httpBasic' => $this->basicAuthManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return PagarmeApiSDKClientBuilder PagarmeApiSDKClientBuilder instance
     */
    public function toBuilder(): PagarmeApiSDKClientBuilder
    {
        $builder = PagarmeApiSDKClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->serviceRefererName($this->getServiceRefererName())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $basicAuth = $this->getBasicAuthCredentialsBuilder();
        if ($basicAuth != null) {
            $builder->basicAuthCredentials($basicAuth);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getServiceRefererName(): string
    {
        return $this->config['serviceRefererName'] ?? ConfigurationDefaults::SERVICE_REFERER_NAME;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getBasicAuthCredentials(): BasicAuthCredentials
    {
        return $this->basicAuthManager;
    }

    public function getBasicAuthCredentialsBuilder(): ?BasicAuthCredentialsBuilder
    {
        if (
            empty($this->basicAuthManager->getBasicAuthUserName()) &&
            empty($this->basicAuthManager->getBasicAuthPassword())
        ) {
            return null;
        }
        return BasicAuthCredentialsBuilder::init(
            $this->basicAuthManager->getBasicAuthUserName(),
            $this->basicAuthManager->getBasicAuthPassword()
        );
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see PagarmeApiSDKClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see PagarmeApiSDKClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Subscriptions Controller
     */
    public function getSubscriptionsController(): SubscriptionsController
    {
        if ($this->subscriptions == null) {
            $this->subscriptions = new SubscriptionsController($this->client);
        }
        return $this->subscriptions;
    }

    /**
     * Returns Orders Controller
     */
    public function getOrdersController(): OrdersController
    {
        if ($this->orders == null) {
            $this->orders = new OrdersController($this->client);
        }
        return $this->orders;
    }

    /**
     * Returns Plans Controller
     */
    public function getPlansController(): PlansController
    {
        if ($this->plans == null) {
            $this->plans = new PlansController($this->client);
        }
        return $this->plans;
    }

    /**
     * Returns Invoices Controller
     */
    public function getInvoicesController(): InvoicesController
    {
        if ($this->invoices == null) {
            $this->invoices = new InvoicesController($this->client);
        }
        return $this->invoices;
    }

    /**
     * Returns Customers Controller
     */
    public function getCustomersController(): CustomersController
    {
        if ($this->customers == null) {
            $this->customers = new CustomersController($this->client);
        }
        return $this->customers;
    }

    /**
     * Returns Charges Controller
     */
    public function getChargesController(): ChargesController
    {
        if ($this->charges == null) {
            $this->charges = new ChargesController($this->client);
        }
        return $this->charges;
    }

    /**
     * Returns Recipients Controller
     */
    public function getRecipientsController(): RecipientsController
    {
        if ($this->recipients == null) {
            $this->recipients = new RecipientsController($this->client);
        }
        return $this->recipients;
    }

    /**
     * Returns Tokens Controller
     */
    public function getTokensController(): TokensController
    {
        if ($this->tokens == null) {
            $this->tokens = new TokensController($this->client);
        }
        return $this->tokens;
    }

    /**
     * Returns Transactions Controller
     */
    public function getTransactionsController(): TransactionsController
    {
        if ($this->transactions == null) {
            $this->transactions = new TransactionsController($this->client);
        }
        return $this->transactions;
    }

    /**
     * Returns Transfers Controller
     */
    public function getTransfersController(): TransfersController
    {
        if ($this->transfers == null) {
            $this->transfers = new TransfersController($this->client);
        }
        return $this->transfers;
    }

    /**
     * Returns Payables Controller
     */
    public function getPayablesController(): PayablesController
    {
        if ($this->payables == null) {
            $this->payables = new PayablesController($this->client);
        }
        return $this->payables;
    }

    /**
     * Returns Balance Operations Controller
     */
    public function getBalanceOperationsController(): BalanceOperationsController
    {
        if ($this->balanceOperations == null) {
            $this->balanceOperations = new BalanceOperationsController($this->client);
        }
        return $this->balanceOperations;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [HeaderParam::init('ServiceRefererName', $this->getServiceRefererName())];
    }

    /**
     * Get the defined global errors
     */
    private function getGlobalErrors(): array
    {
        return [
            strval(400) => ErrorType::init('Invalid request', Exceptions\ErrorException::class),
            strval(401) => ErrorType::init('Invalid API key', Exceptions\ErrorException::class),
            strval(404) => ErrorType::init('An informed resource was not found', Exceptions\ErrorException::class),
            strval(412) => ErrorType::init('Business validation error', Exceptions\ErrorException::class),
            strval(422) => ErrorType::init('Contract validation error', Exceptions\ErrorException::class),
            strval(500) => ErrorType::init('Internal server error', Exceptions\ErrorException::class)
        ];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [Environment::PRODUCTION => [Server::DEFAULT_ => 'https://api.pagar.me/core/v5']];
}
