<?php
/**
 * EducationApi
 * PHP version 5
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Membercare API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * Contact: support@membercare.dk
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Membercare\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Membercare\Client\ApiException;
use Membercare\Client\Configuration;
use Membercare\Client\HeaderSelector;
use Membercare\Client\ObjectSerializer;

/**
 * EducationApi Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EducationApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getEducationsBySearchString
     *
     * Get a paged result of educations.
     *
     * @param  string $token access token (required)
     * @param  bool $only_valid only_valid (optional)
     * @param  bool $only_web_enabled only_web_enabled (optional)
     * @param  string $search_string search_string (optional)
     * @param  int $page page (optional, default to 1)
     * @param  int $page_size page_size (optional, default to 50)
     *
     * @throws \Membercare\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Membercare\Client\Model\EducationPagedResult
     */
    public function getEducationsBySearchString($token, $only_valid = null, $only_web_enabled = null, $search_string = null, $page = '1', $page_size = '50')
    {
        list($response) = $this->getEducationsBySearchStringWithHttpInfo($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size);
        return $response;
    }

    /**
     * Operation getEducationsBySearchStringWithHttpInfo
     *
     * Get a paged result of educations.
     *
     * @param  string $token access token (required)
     * @param  bool $only_valid (optional)
     * @param  bool $only_web_enabled (optional)
     * @param  string $search_string (optional)
     * @param  int $page (optional, default to 1)
     * @param  int $page_size (optional, default to 50)
     *
     * @throws \Membercare\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Membercare\Client\Model\EducationPagedResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEducationsBySearchStringWithHttpInfo($token, $only_valid = null, $only_web_enabled = null, $search_string = null, $page = '1', $page_size = '50')
    {
        $returnType = '\Membercare\Client\Model\EducationPagedResult';
        $request = $this->getEducationsBySearchStringRequest($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Membercare\Client\Model\EducationPagedResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEducationsBySearchStringAsync
     *
     * Get a paged result of educations.
     *
     * @param  string $token access token (required)
     * @param  bool $only_valid (optional)
     * @param  bool $only_web_enabled (optional)
     * @param  string $search_string (optional)
     * @param  int $page (optional, default to 1)
     * @param  int $page_size (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEducationsBySearchStringAsync($token, $only_valid = null, $only_web_enabled = null, $search_string = null, $page = '1', $page_size = '50')
    {
        return $this->getEducationsBySearchStringAsyncWithHttpInfo($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEducationsBySearchStringAsyncWithHttpInfo
     *
     * Get a paged result of educations.
     *
     * @param  string $token access token (required)
     * @param  bool $only_valid (optional)
     * @param  bool $only_web_enabled (optional)
     * @param  string $search_string (optional)
     * @param  int $page (optional, default to 1)
     * @param  int $page_size (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEducationsBySearchStringAsyncWithHttpInfo($token, $only_valid = null, $only_web_enabled = null, $search_string = null, $page = '1', $page_size = '50')
    {
        $returnType = '\Membercare\Client\Model\EducationPagedResult';
        $request = $this->getEducationsBySearchStringRequest($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEducationsBySearchString'
     *
     * @param  string $token access token (required)
     * @param  bool $only_valid (optional)
     * @param  bool $only_web_enabled (optional)
     * @param  string $search_string (optional)
     * @param  int $page (optional, default to 1)
     * @param  int $page_size (optional, default to 50)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEducationsBySearchStringRequest($token, $only_valid = null, $only_web_enabled = null, $search_string = null, $page = '1', $page_size = '50')
    {
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling getEducationsBySearchString'
            );
        }

        $resourcePath = '/api/v1/educations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($only_valid !== null) {
            $queryParams['onlyValid'] = ObjectSerializer::toQueryValue($only_valid, null);
        }
        // query params
        if ($only_web_enabled !== null) {
            $queryParams['onlyWebEnabled'] = ObjectSerializer::toQueryValue($only_web_enabled, null);
        }
        // query params
        if ($search_string !== null) {
            $queryParams['searchString'] = ObjectSerializer::toQueryValue($search_string, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size, 'int32');
        }
        // header params
        if ($token !== null) {
            $headerParams['token'] = ObjectSerializer::toHeaderValue($token);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
