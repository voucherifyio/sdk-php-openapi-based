<?php
/**
 * EventsApi
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Voucherify API
 *
 * Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.
 *
 * The version of the OpenAPI document: v2018-08-01
 * Contact: support@voucherify.io
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'trackCustomEvent' => [
            'application/json',
        ],
        'trackCustomEventClientSide' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation trackCustomEvent
     *
     * Track Custom Event
     *
     * @param  \OpenAPI\Client\Model\EventsCreateRequestBody $events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEvent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\EventsCreateResponseBody
     */
    public function trackCustomEvent($events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEvent'][0])
    {
        list($response) = $this->trackCustomEventWithHttpInfo($events_create_request_body, $contentType);
        return $response;
    }

    /**
     * Operation trackCustomEventWithHttpInfo
     *
     * Track Custom Event
     *
     * @param  \OpenAPI\Client\Model\EventsCreateRequestBody $events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEvent'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\EventsCreateResponseBody, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackCustomEventWithHttpInfo($events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEvent'][0])
    {
        $request = $this->trackCustomEventRequest($events_create_request_body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\EventsCreateResponseBody' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\EventsCreateResponseBody' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\EventsCreateResponseBody', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\EventsCreateResponseBody';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\EventsCreateResponseBody',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation trackCustomEventAsync
     *
     * Track Custom Event
     *
     * @param  \OpenAPI\Client\Model\EventsCreateRequestBody $events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEvent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function trackCustomEventAsync($events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEvent'][0])
    {
        return $this->trackCustomEventAsyncWithHttpInfo($events_create_request_body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackCustomEventAsyncWithHttpInfo
     *
     * Track Custom Event
     *
     * @param  \OpenAPI\Client\Model\EventsCreateRequestBody $events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEvent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function trackCustomEventAsyncWithHttpInfo($events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEvent'][0])
    {
        $returnType = '\OpenAPI\Client\Model\EventsCreateResponseBody';
        $request = $this->trackCustomEventRequest($events_create_request_body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'trackCustomEvent'
     *
     * @param  \OpenAPI\Client\Model\EventsCreateRequestBody $events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEvent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function trackCustomEventRequest($events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEvent'][0])
    {



        $resourcePath = '/v1/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($events_create_request_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($events_create_request_body));
            } else {
                $httpBody = $events_create_request_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-App-Id');
        if ($apiKey !== null) {
            $headers['X-App-Id'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-App-Token');
        if ($apiKey !== null) {
            $headers['X-App-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation trackCustomEventClientSide
     *
     * Track Custom Event (client-side)
     *
     * @param  string $origin Indicates the origin (scheme, hostname, and port). (required)
     * @param  \OpenAPI\Client\Model\ClientEventsCreateRequestBody $client_events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEventClientSide'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ClientEventsCreateResponseBody
     */
    public function trackCustomEventClientSide($origin, $client_events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEventClientSide'][0])
    {
        list($response) = $this->trackCustomEventClientSideWithHttpInfo($origin, $client_events_create_request_body, $contentType);
        return $response;
    }

    /**
     * Operation trackCustomEventClientSideWithHttpInfo
     *
     * Track Custom Event (client-side)
     *
     * @param  string $origin Indicates the origin (scheme, hostname, and port). (required)
     * @param  \OpenAPI\Client\Model\ClientEventsCreateRequestBody $client_events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEventClientSide'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ClientEventsCreateResponseBody, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackCustomEventClientSideWithHttpInfo($origin, $client_events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEventClientSide'][0])
    {
        $request = $this->trackCustomEventClientSideRequest($origin, $client_events_create_request_body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ClientEventsCreateResponseBody' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ClientEventsCreateResponseBody' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ClientEventsCreateResponseBody', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ClientEventsCreateResponseBody';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ClientEventsCreateResponseBody',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation trackCustomEventClientSideAsync
     *
     * Track Custom Event (client-side)
     *
     * @param  string $origin Indicates the origin (scheme, hostname, and port). (required)
     * @param  \OpenAPI\Client\Model\ClientEventsCreateRequestBody $client_events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEventClientSide'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function trackCustomEventClientSideAsync($origin, $client_events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEventClientSide'][0])
    {
        return $this->trackCustomEventClientSideAsyncWithHttpInfo($origin, $client_events_create_request_body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackCustomEventClientSideAsyncWithHttpInfo
     *
     * Track Custom Event (client-side)
     *
     * @param  string $origin Indicates the origin (scheme, hostname, and port). (required)
     * @param  \OpenAPI\Client\Model\ClientEventsCreateRequestBody $client_events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEventClientSide'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function trackCustomEventClientSideAsyncWithHttpInfo($origin, $client_events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEventClientSide'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ClientEventsCreateResponseBody';
        $request = $this->trackCustomEventClientSideRequest($origin, $client_events_create_request_body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'trackCustomEventClientSide'
     *
     * @param  string $origin Indicates the origin (scheme, hostname, and port). (required)
     * @param  \OpenAPI\Client\Model\ClientEventsCreateRequestBody $client_events_create_request_body Specify the details of the custom event. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['trackCustomEventClientSide'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function trackCustomEventClientSideRequest($origin, $client_events_create_request_body = null, string $contentType = self::contentTypes['trackCustomEventClientSide'][0])
    {

        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling trackCustomEventClientSide'
            );
        }



        $resourcePath = '/client/v1/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($origin !== null) {
            $headerParams['origin'] = ObjectSerializer::toHeaderValue($origin);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($client_events_create_request_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($client_events_create_request_body));
            } else {
                $httpBody = $client_events_create_request_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Client-Application-Id');
        if ($apiKey !== null) {
            $headers['X-Client-Application-Id'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Client-Token');
        if ($apiKey !== null) {
            $headers['X-Client-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}