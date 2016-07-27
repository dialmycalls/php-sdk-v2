<?php
/**
 * UpdateVanityNumberByIdParameters
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
 * UpdateVanityNumberByIdParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DialMyCalls
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateVanityNumberByIdParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateVanityNumberByIdParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'callOptions' => 'string[]',
        'recordingSource' => 'string',
        'specificRecordingId' => 'string',
        'playCta' => 'bool',
        'pttNumberId' => 'string'
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
        'callOptions' => 'call_options',
        'recordingSource' => 'recording_source',
        'specificRecordingId' => 'specific_recording_id',
        'playCta' => 'play_cta',
        'pttNumberId' => 'ptt_number_id'
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
        'callOptions' => 'setCallOptions',
        'recordingSource' => 'setRecordingSource',
        'specificRecordingId' => 'setSpecificRecordingId',
        'playCta' => 'setPlayCta',
        'pttNumberId' => 'setPttNumberId'
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
        'callOptions' => 'getCallOptions',
        'recordingSource' => 'getRecordingSource',
        'specificRecordingId' => 'getSpecificRecordingId',
        'playCta' => 'getPlayCta',
        'pttNumberId' => 'getPttNumberId'
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
        $this->container['callOptions'] = isset($data['callOptions']) ? $data['callOptions'] : null;
        $this->container['recordingSource'] = isset($data['recordingSource']) ? $data['recordingSource'] : null;
        $this->container['specificRecordingId'] = isset($data['specificRecordingId']) ? $data['specificRecordingId'] : null;
        $this->container['playCta'] = isset($data['playCta']) ? $data['playCta'] : null;
        $this->container['pttNumberId'] = isset($data['pttNumberId']) ? $data['pttNumberId'] : null;
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
     * Gets callOptions
     * @return string[]
     */
    public function getCallOptions()
    {
        return $this->container['callOptions'];
    }

    /**
     * Sets callOptions
     * @param string[] $callOptions The options to include when the number is called.  If an option is not included it will be turned off.  Option values should be boolean.  Possible values are: 'voicemail' (Leave A Message), 'ptt' (Push To Talk), 'optin' (Opt-In), 'repeat' (Repeat Your Message) -- Note: Optout cannot be removed without prior authorization.  Please contact customer support for this.
     * @return $this
     */
    public function setCallOptions($callOptions)
    {
        $this->container['callOptions'] = $callOptions;

        return $this;
    }

    /**
     * Gets recordingSource
     * @return string
     */
    public function getRecordingSource()
    {
        return $this->container['recordingSource'];
    }

    /**
     * Sets recordingSource
     * @param string $recordingSource Where the recording will be generated from.  (specific, lastsent, lastuploaded)
     * @return $this
     */
    public function setRecordingSource($recordingSource)
    {
        $this->container['recordingSource'] = $recordingSource;

        return $this;
    }

    /**
     * Gets specificRecordingId
     * @return string
     */
    public function getSpecificRecordingId()
    {
        return $this->container['specificRecordingId'];
    }

    /**
     * Sets specificRecordingId
     * @param string $specificRecordingId Unique identifier for the recording if recording_source is set to specific.
     * @return $this
     */
    public function setSpecificRecordingId($specificRecordingId)
    {
        $this->container['specificRecordingId'] = $specificRecordingId;

        return $this;
    }

    /**
     * Gets playCta
     * @return bool
     */
    public function getPlayCta()
    {
        return $this->container['playCta'];
    }

    /**
     * Sets playCta
     * @param bool $playCta Setting this to true our system will play the prompts for keys to be pushed.
     * @return $this
     */
    public function setPlayCta($playCta)
    {
        $this->container['playCta'] = $playCta;

        return $this;
    }

    /**
     * Gets pttNumberId
     * @return string
     */
    public function getPttNumberId()
    {
        return $this->container['pttNumberId'];
    }

    /**
     * Sets pttNumberId
     * @param string $pttNumberId This is a verified caller id that is on your account.  This will be used if PTT option is used.
     * @return $this
     */
    public function setPttNumberId($pttNumberId)
    {
        $this->container['pttNumberId'] = $pttNumberId;

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


