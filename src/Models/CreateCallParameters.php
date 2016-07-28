<?php
/**
 * CreateCallParameters
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
 * CreateCallParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCallParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateCallParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'calleridId' => 'string',
        'recordingId' => 'string',
        'machineRecordingId' => 'string',
        'sendAt' => 'string',
        'sendImmediately' => 'bool',
        'useAmd' => 'bool',
        'sendEmail' => 'bool',
        'accessaccountId' => 'string',
        'contacts' => '\DialMyCalls\Models\ContactAttributes[]',
        'addOns' => '\DialMyCalls\Models\PushToListenAgain[]'
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
        'calleridId' => 'callerid_id',
        'recordingId' => 'recording_id',
        'machineRecordingId' => 'machine_recording_id',
        'sendAt' => 'send_at',
        'sendImmediately' => 'send_immediately',
        'useAmd' => 'use_amd',
        'sendEmail' => 'send_email',
        'accessaccountId' => 'accessaccount_id',
        'contacts' => 'contacts',
        'addOns' => 'add_ons'
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
        'calleridId' => 'setCalleridId',
        'recordingId' => 'setRecordingId',
        'machineRecordingId' => 'setMachineRecordingId',
        'sendAt' => 'setSendAt',
        'sendImmediately' => 'setSendImmediately',
        'useAmd' => 'setUseAmd',
        'sendEmail' => 'setSendEmail',
        'accessaccountId' => 'setAccessaccountId',
        'contacts' => 'setContacts',
        'addOns' => 'setAddOns'
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
        'calleridId' => 'getCalleridId',
        'recordingId' => 'getRecordingId',
        'machineRecordingId' => 'getMachineRecordingId',
        'sendAt' => 'getSendAt',
        'sendImmediately' => 'getSendImmediately',
        'useAmd' => 'getUseAmd',
        'sendEmail' => 'getSendEmail',
        'accessaccountId' => 'getAccessaccountId',
        'contacts' => 'getContacts',
        'addOns' => 'getAddOns'
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
        $this->container['calleridId'] = isset($data['calleridId']) ? $data['calleridId'] : null;
        $this->container['recordingId'] = isset($data['recordingId']) ? $data['recordingId'] : null;
        $this->container['machineRecordingId'] = isset($data['machineRecordingId']) ? $data['machineRecordingId'] : null;
        $this->container['sendAt'] = isset($data['sendAt']) ? $data['sendAt'] : null;
        $this->container['sendImmediately'] = isset($data['sendImmediately']) ? $data['sendImmediately'] : null;
        $this->container['useAmd'] = isset($data['useAmd']) ? $data['useAmd'] : null;
        $this->container['sendEmail'] = isset($data['sendEmail']) ? $data['sendEmail'] : null;
        $this->container['accessaccountId'] = isset($data['accessaccountId']) ? $data['accessaccountId'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['addOns'] = isset($data['addOns']) ? $data['addOns'] : null;
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
     * Gets calleridId
     * @return string
     */
    public function getCalleridId()
    {
        return $this->container['calleridId'];
    }

    /**
     * Sets calleridId
     * @param string $calleridId (Required)  The caller id that the message should be sent from.
     * @return $this
     */
    public function setCalleridId($calleridId)
    {
        $this->container['calleridId'] = $calleridId;

        return $this;
    }

    /**
     * Gets recordingId
     * @return string
     */
    public function getRecordingId()
    {
        return $this->container['recordingId'];
    }

    /**
     * Sets recordingId
     * @param string $recordingId (Required)  The recording id of the message that should be played.
     * @return $this
     */
    public function setRecordingId($recordingId)
    {
        $this->container['recordingId'] = $recordingId;

        return $this;
    }

    /**
     * Gets machineRecordingId
     * @return string
     */
    public function getMachineRecordingId()
    {
        return $this->container['machineRecordingId'];
    }

    /**
     * Sets machineRecordingId
     * @param string $machineRecordingId The recording id of the message that should be played on answering machines.  If not supplied the recording_id will be used.  use_amd must be true in order for this feature to work.
     * @return $this
     */
    public function setMachineRecordingId($machineRecordingId)
    {
        $this->container['machineRecordingId'] = $machineRecordingId;

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
     * Gets useAmd
     * @return bool
     */
    public function getUseAmd()
    {
        return $this->container['useAmd'];
    }

    /**
     * Sets useAmd
     * @param bool $useAmd Using answering machine detection?
     * @return $this
     */
    public function setUseAmd($useAmd)
    {
        $this->container['useAmd'] = $useAmd;

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
     * Gets addOns
     * @return \DialMyCalls\Models\PushToListenAgain[]
     */
    public function getAddOns()
    {
        return $this->container['addOns'];
    }

    /**
     * Sets addOns
     * @param \DialMyCalls\Models\PushToListenAgain[] $addOns A list of feature add-ons for the calls.
     * @return $this
     */
    public function setAddOns($addOns)
    {
        $this->container['addOns'] = $addOns;

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


