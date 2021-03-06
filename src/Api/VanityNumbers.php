<?php
/**
 * VanityNumbers
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
 * OpenAPI spec version: 2.0.2
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
 * VanityNumbers Class Doc Comment
 *
 * @category Class
 * @package  DialMyCalls
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VanityNumbers
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
     * @return VanityNumbers
     */
    public function setApiClient(\DialMyCalls\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteVanityNumberById
     *
     * Delete Vanity Number
     *
     * @param string $vanityNumberId VanityNumberId (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function deleteVanityNumberById($vanityNumberId)
    {
        list($response) = $this->deleteVanityNumberByIdWithHttpInfo($vanityNumberId);
        return $response;
    }

    /**
     * Operation deleteVanityNumberByIdWithHttpInfo
     *
     * Delete Vanity Number
     *
     * @param string $vanityNumberId VanityNumberId (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function deleteVanityNumberByIdWithHttpInfo($vanityNumberId)
    {
        // verify the required parameter 'vanityNumberId' is set
        if ($vanityNumberId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vanityNumberId when calling deleteVanityNumberById');
        }
        // parse inputs
        $resourcePath = "/vanitynumber/{VanityNumberId}";
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
        if ($vanityNumberId !== null) {
            $resourcePath = str_replace(
                "{" . "VanityNumberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vanityNumberId),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
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
                '/vanitynumber/{VanityNumberId}'
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
     * Operation getVanityNumberById
     *
     * Get Vanity Number
     *
     * @param string $vanityNumberId VanityNumberId (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getVanityNumberById($vanityNumberId)
    {
        list($response) = $this->getVanityNumberByIdWithHttpInfo($vanityNumberId);
        return $response;
    }

    /**
     * Operation getVanityNumberByIdWithHttpInfo
     *
     * Get Vanity Number
     *
     * @param string $vanityNumberId VanityNumberId (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getVanityNumberByIdWithHttpInfo($vanityNumberId)
    {
        // verify the required parameter 'vanityNumberId' is set
        if ($vanityNumberId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vanityNumberId when calling getVanityNumberById');
        }
        // parse inputs
        $resourcePath = "/vanitynumber/{VanityNumberId}";
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
        if ($vanityNumberId !== null) {
            $resourcePath = str_replace(
                "{" . "VanityNumberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vanityNumberId),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
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
                '/vanitynumber/{VanityNumberId}'
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
     * Operation getVanityNumbers
     *
     * List Vanity Numbers
     *
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of vanitynumbers requested (optional)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getVanityNumbers($range = null)
    {
        list($response) = $this->getVanityNumbersWithHttpInfo($range);
        return $response;
    }

    /**
     * Operation getVanityNumbersWithHttpInfo
     *
     * List Vanity Numbers
     *
     * @param string $range Range (ie \&quot;records&#x3D;201-300\&quot;) of vanitynumbers requested (optional)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function getVanityNumbersWithHttpInfo($range = null)
    {
        // parse inputs
        $resourcePath = "/vanitynumbers";
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
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
                '/vanitynumbers'
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
     * Operation updateVanityNumberById
     *
     * Update Vanity Number
     *
     * @param \DialMyCalls\Models\UpdateVanityNumberByIdParameters $updateVanityNumberByIdParameters Request body (required)
     * @param string $vanityNumberId VanityNumberId (required)
     * @return object
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function updateVanityNumberById($updateVanityNumberByIdParameters, $vanityNumberId)
    {
        list($response) = $this->updateVanityNumberByIdWithHttpInfo($updateVanityNumberByIdParameters, $vanityNumberId);
        return $response;
    }

    /**
     * Operation updateVanityNumberByIdWithHttpInfo
     *
     * Update Vanity Number
     *
     * @param \DialMyCalls\Models\UpdateVanityNumberByIdParameters $updateVanityNumberByIdParameters Request body (required)
     * @param string $vanityNumberId VanityNumberId (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \DialMyCalls\ApiException on non-2xx response
     */
    public function updateVanityNumberByIdWithHttpInfo($updateVanityNumberByIdParameters, $vanityNumberId)
    {
        // verify the required parameter 'updateVanityNumberByIdParameters' is set
        if ($updateVanityNumberByIdParameters === null) {
            throw new \InvalidArgumentException('Missing the required parameter $updateVanityNumberByIdParameters when calling updateVanityNumberById');
        }
        // verify the required parameter 'vanityNumberId' is set
        if ($vanityNumberId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vanityNumberId when calling updateVanityNumberById');
        }
        // parse inputs
        $resourcePath = "/vanitynumber/{VanityNumberId}";
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
        if ($vanityNumberId !== null) {
            $resourcePath = str_replace(
                "{" . "VanityNumberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vanityNumberId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($updateVanityNumberByIdParameters)) {
            $_tempBody = $updateVanityNumberByIdParameters;
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/vanitynumber/{VanityNumberId}'
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

}
