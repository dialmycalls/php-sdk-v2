<?php
/**
 * CreateTextParameters
 *
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
 * OpenAPI spec version: 2.0.1
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

namespace DialMyCalls\Models;

use \ArrayAccess;

/**
 * CreateTextParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateTextParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateTextParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'keywordId' => 'string',
        'messages' => 'string[]',
        'sendAt' => 'string',
        'sendImmediately' => 'bool',
        'sendEmail' => 'bool',
        'accessaccountId' => 'string',
        'shortcodeId' => 'string',
        'concatenateSms' => 'bool',
        'contacts' => '\DialMyCalls\Models\ContactAttributes[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'keywordId' => 'keyword_id',
        'messages' => 'messages',
        'sendAt' => 'send_at',
        'sendImmediately' => 'send_immediately',
        'sendEmail' => 'send_email',
        'accessaccountId' => 'accessaccount_id',
        'shortcodeId' => 'shortcode_id',
        'concatenateSms' => 'concatenate_sms',
        'contacts' => 'contacts'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'keywordId' => 'setKeywordId',
        'messages' => 'setMessages',
        'sendAt' => 'setSendAt',
        'sendImmediately' => 'setSendImmediately',
        'sendEmail' => 'setSendEmail',
        'accessaccountId' => 'setAccessaccountId',
        'shortcodeId' => 'setShortcodeId',
        'concatenateSms' => 'setConcatenateSms',
        'contacts' => 'setContacts'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'keywordId' => 'getKeywordId',
        'messages' => 'getMessages',
        'sendAt' => 'getSendAt',
        'sendImmediately' => 'getSendImmediately',
        'sendEmail' => 'getSendEmail',
        'accessaccountId' => 'getAccessaccountId',
        'shortcodeId' => 'getShortcodeId',
        'concatenateSms' => 'getConcatenateSms',
        'contacts' => 'getContacts'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['keywordId'] = isset($data['keywordId']) ? $data['keywordId'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['sendAt'] = isset($data['sendAt']) ? $data['sendAt'] : null;
        $this->container['sendImmediately'] = isset($data['sendImmediately']) ? $data['sendImmediately'] : null;
        $this->container['sendEmail'] = isset($data['sendEmail']) ? $data['sendEmail'] : null;
        $this->container['accessaccountId'] = isset($data['accessaccountId']) ? $data['accessaccountId'] : null;
        $this->container['shortcodeId'] = isset($data['shortcodeId']) ? $data['shortcodeId'] : null;
        $this->container['concatenateSms'] = isset($data['concatenateSms']) ? $data['concatenateSms'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name (Required)  Name the broadcast.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets keywordId
     * @return string
     */
    public function getKeywordId()
    {
        return $this->container['keywordId'];
    }

    /**
     * Sets keywordId
     * @param string $keywordId (Required)  The keyword id that should be associated with this broadcast.
     * @return $this
     */
    public function setKeywordId($keywordId)
    {
        $this->container['keywordId'] = $keywordId;

        return $this;
    }

    /**
     * Gets messages
     * @return string[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     * @param string[] $messages (Required)  List of messages to send (up to 10).
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets sendAt
     * @return string
     */
    public function getSendAt()
    {
        return $this->container['sendAt'];
    }

    /**
     * Sets sendAt
     * @param string $sendAt When the broadcast should be sent. (Ex: 2016-07-25T12:00:00+0000)
     * @return $this
     */
    public function setSendAt($sendAt)
    {
        $this->container['sendAt'] = $sendAt;

        return $this;
    }

    /**
     * Gets sendImmediately
     * @return bool
     */
    public function getSendImmediately()
    {
        return $this->container['sendImmediately'];
    }

    /**
     * Sets sendImmediately
     * @param bool $sendImmediately Should the broadcast go out immediately?
     * @return $this
     */
    public function setSendImmediately($sendImmediately)
    {
        $this->container['sendImmediately'] = $sendImmediately;

        return $this;
    }

    /**
     * Gets sendEmail
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->container['sendEmail'];
    }

    /**
     * Sets sendEmail
     * @param bool $sendEmail Also send an email to the contacts?
     * @return $this
     */
    public function setSendEmail($sendEmail)
    {
        $this->container['sendEmail'] = $sendEmail;

        return $this;
    }

    /**
     * Gets accessaccountId
     * @return string
     */
    public function getAccessaccountId()
    {
        return $this->container['accessaccountId'];
    }

    /**
     * Sets accessaccountId
     * @param string $accessaccountId Schedule this broadcast as an access account.
     * @return $this
     */
    public function setAccessaccountId($accessaccountId)
    {
        $this->container['accessaccountId'] = $accessaccountId;

        return $this;
    }

    /**
     * Gets shortcodeId
     * @return string
     */
    public function getShortcodeId()
    {
        return $this->container['shortcodeId'];
    }

    /**
     * Sets shortcodeId
     * @param string $shortcodeId The shortcode id that the broadcast will be sent from.
     * @return $this
     */
    public function setShortcodeId($shortcodeId)
    {
        $this->container['shortcodeId'] = $shortcodeId;

        return $this;
    }

    /**
     * Gets concatenateSms
     * @return bool
     */
    public function getConcatenateSms()
    {
        return $this->container['concatenateSms'];
    }

    /**
     * Sets concatenateSms
     * @param bool $concatenateSms Combine all SMS messages into 1 message on the end users device.
     * @return $this
     */
    public function setConcatenateSms($concatenateSms)
    {
        $this->container['concatenateSms'] = $concatenateSms;

        return $this;
    }

    /**
     * Gets contacts
     * @return \DialMyCalls\Models\ContactAttributes[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     * @param \DialMyCalls\Models\ContactAttributes[] $contacts (Required)  List of contact information that should be sent the broadcast.
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DialMyCalls\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DialMyCalls\ObjectSerializer::sanitizeForSerialization($this));
    }
}


