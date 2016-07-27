<?php
/**
 * Calls
 * PHP version 5
 *
 * @category Class
 * @package  DialMyCalls
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DialMyCalls API
 *
 * The DialMyCalls API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@dialmycalls.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DialMyCalls\Api;

use \DialMyCalls\Configuration;
use \DialMyCalls\ApiClient;
use \DialMyCalls\ApiException;
use \DialMyCalls\ObjectSerializer;

/**
 * Calls Class Doc Comment
 *
 * @category Class
 * @package  DialMyCalls
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Calls
{

    /**
     * API Client
     *
     * @var \DialMyCalls\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DialMyCalls\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DialMyCalls\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.dialmycalls.com/2.0');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DialMyCalls\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DialMyCalls\ApiClient $apiClient set the API client
     *
     * @return Calls
     */
    public function setApiClient(\DialMyCalls\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelCallById
     *
     * Cancel Call
     *
     * @param string $callId CallId (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function cancelCallById($callId)
    {
        list($response) = $this->cancelCallByIdWithHttpInfo($callId);
        return $response;
    }

    /**
     * Operation cancelCallByIdWithHttpInfo
     *
     * Cancel Call
     *
     * @param string $callId CallId (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function cancelCallByIdWithHttpInfo($callId)
    {
        // verify the required parameter 'callId' is set
        if ($callId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $callId when calling cancelCallById');
        }
        // parse inputs
        $resourcePath = "/service/call/{CallId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // path params
        if ($callId !== null) {
            $resourcePath = str_replace(
                "{" . "CallId" . "}",
                $this->apiClient->getSerializer()->toPathValue($callId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/service/call/{CallId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createCall
     *
     * Create Call
     *
     * @param \DialMyCalls\Models\CreateCallParameters $createCallParameters Request body (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function createCall($createCallParameters)
    {
        list($response) = $this->createCallWithHttpInfo($createCallParameters);
        return $response;
    }

    /**
     * Operation createCallWithHttpInfo
     *
     * Create Call
     *
     * @param \DialMyCalls\Models\CreateCallParameters $createCallParameters Request body (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function createCallWithHttpInfo($createCallParameters)
    {
        // verify the required parameter 'createCallParameters' is set
        if ($createCallParameters === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createCallParameters when calling createCall');
        }
        // parse inputs
        $resourcePath = "/service/call";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($createCallParameters)) {
            $_tempBody = $createCallParameters;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/service/call'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCallById
     *
     * Get Call
     *
     * @param string $callId CallId (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCallById($callId)
    {
        list($response) = $this->getCallByIdWithHttpInfo($callId);
        return $response;
    }

    /**
     * Operation getCallByIdWithHttpInfo
     *
     * Get Call
     *
     * @param string $callId CallId (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCallByIdWithHttpInfo($callId)
    {
        // verify the required parameter 'callId' is set
        if ($callId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $callId when calling getCallById');
        }
        // parse inputs
        $resourcePath = "/service/call/{CallId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // path params
        if ($callId !== null) {
            $resourcePath = str_replace(
                "{" . "CallId" . "}",
                $this->apiClient->getSerializer()->toPathValue($callId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/service/call/{CallId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCallRecipientsByCallId
     *
     * Get Call Recipients
     *
     * @param string $callId CallId (required)
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of recipients requested (optional)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCallRecipientsByCallId($callId, $range = null)
    {
        list($response) = $this->getCallRecipientsByCallIdWithHttpInfo($callId, $range);
        return $response;
    }

    /**
     * Operation getCallRecipientsByCallIdWithHttpInfo
     *
     * Get Call Recipients
     *
     * @param string $callId CallId (required)
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of recipients requested (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCallRecipientsByCallIdWithHttpInfo($callId, $range = null)
    {
        // verify the required parameter 'callId' is set
        if ($callId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $callId when calling getCallRecipientsByCallId');
        }
        // parse inputs
        $resourcePath = "/service/call/{CallId}/recipients";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // header params
        if ($range !== null) {
            $headerParams['Range'] = $this->apiClient->getSerializer()->toHeaderValue($range);
        }
        // path params
        if ($callId !== null) {
            $resourcePath = str_replace(
                "{" . "CallId" . "}",
                $this->apiClient->getSerializer()->toPathValue($callId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/service/call/{CallId}/recipients'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCalls
     *
     * List Calls
     *
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of calls requested (optional)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCalls($range = null)
    {
        list($response) = $this->getCallsWithHttpInfo($range);
        return $response;
    }

    /**
     * Operation getCallsWithHttpInfo
     *
     * List Calls
     *
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of calls requested (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getCallsWithHttpInfo($range = null)
    {
        // parse inputs
        $resourcePath = "/service/calls";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // header params
        if ($range !== null) {
            $headerParams['Range'] = $this->apiClient->getSerializer()->toHeaderValue($range);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Auth-ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Auth-ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/service/calls'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
