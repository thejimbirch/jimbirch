<?php
/**
 * BufferPHP v0.2
 *
 * PHP Version 5
 *
 * See https://www.little-apps.com/2012/09/automatically-post-updates-buffer-api-php/
 * for an example on how to use this class.
 * Information on the Buffer API can be found at https://buffer.com/developers/api
 *
 * @category   Bufferphp
 * @package    BufferPHP
 * @author     Little Apps <nick@little-apps.com>
 * @copyright  2012 This is public domain so anyone can use it for any reason
 * @license    CC0-1.0 http://creativecommons.org/publicdomain/zero/1.0/
 * @link       https://github.com/jcnventura/bufferphp
 * @since      Version 0.1
 * @filesource
 */

namespace jcnventura\BufferPHP;

/**
 * Class BufferPHP
 *
 * @category Bufferphp
 * @package  BufferPHP
 * @author   Little Apps <nick@little-apps.com>
 * @license  CC0-1.0 http://creativecommons.org/publicdomain/zero/1.0/
 * @link     https://github.com/jcnventura/bufferphp
 */
class BufferPHP
{
    private $_config = array(
                        // You can change the options below if you wish.
                        // The user agent to send to the Buffer API.
                        'user_agent'      => 'BufferPHP v0.2',
                        // Maximum time to wait (in seconds) before connect fails.
                        'connect_timeout' => 30,
                        // Maximum time to wait (in seconds) before API doesn't
                        // respond.
                        'timeout'         => 30,
                        // This is false by default because some servers have
                        // trouble verifying SSL certificates through cURL.
                        'verify_ssl_cert' => false,
                       );

    // You should only change the code below if you know what you're doing!
    /**
     * Access token
     *
     * @var string
     */
    private $_access_token = '';
    /**
     * Base URL for API
     *
     * @var string
     */
    private $_base_url = 'https://api.bufferapp.com/1/';
    /**
     * HTTP headers from last request
     *
     * @var array
     */
    public $http_header = array();
    /**
     * Info about last cURL request
     *
     * @var array
     */
    public $http_info = array();
    /**
     * The last URL used
     *
     * @var string
     */
    public $last_url = '';


    /**
     * Class constructor
     * (Throws InvalidArgumentException if $token is not a string)
     *
     * @param string $token Access Token for app
     */
    public function __construct($token)
    {
        if (is_string($token) === true) {
            $this->_access_token = $token;
        } else {
            throw new \InvalidArgumentException('token must be a string');
        }

    }//end __construct()


    /**
     * Sends GET request to Buffer API
     *
     * @param string $uri  Endpoint to send data to (usually like 'updates/create')
     * @param array  $data Data to send to API. See API docs for the parameters.
     *
     * @return object Returns a stdClass containing decode JSON data
     */
    public function get($uri, $data = array())
    {
        if (is_array($data) === true && count($data) > 0) {
            $query = http_build_query($data);
        } else {
            $query = '';
        }

        return $this->_api('get', $this->_base_url.$uri, $query);

    }//end get()


    /**
     * Sends POST request to Buffer API
     *
     * @param string $uri  Endpoint to send data to (usually like 'updates/create')
     * @param array  $data Data to send to API. See API docs for the parameters.
     *
     * @return object Returns a stdClass containing decode JSON data
     */
    public function post($uri, $data = array())
    {
        if (is_array($data) === true && count($data) > 0) {
            $query = http_build_query($data);
        } else {
            $query = '';
        }

        return $this->_api('post', $this->_base_url.$uri, $query);

    }//end post()


    /**
     * Sends HTTP request to Buffer API
     *
     * @param string $method       Method to use to send data (post or get)
     * @param string $uri          URL for where to send data
     * @param string $query_string Query string to pass to server (default is empty)
     *
     * @return object Returns a stdClass containing decode JSON data
     */
    private function _api($method, $uri, $query_string = '')
    {
        if (preg_match('/\.json$/', $uri) === 0) {
            $uri .= '.json';
        }

        $this->http_info = array();

        $ci = curl_init();
        // Curl settings.
        curl_setopt($ci, CURLOPT_USERAGENT, $this->_config['user_agent']);
        curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, $this->_config['connect_timeout']);
        curl_setopt($ci, CURLOPT_TIMEOUT, $this->_config['timeout']);
        curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
        $http_header = array(
                        'Expect:',
                        'Authorization: Bearer '.$this->_access_token,
                       );
        curl_setopt($ci, CURLOPT_HTTPHEADER, $http_header);
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, $this->_config['verify_ssl_cert']);
        curl_setopt($ci, CURLOPT_HEADERFUNCTION, array($this, '_getHeader'));
        curl_setopt($ci, CURLOPT_HEADER, 0);

        if ($method === 'post') {
            curl_setopt($ci, CURLOPT_POST, true);
            if (empty($query_string) === false) {
                curl_setopt($ci, CURLOPT_POSTFIELDS, $query_string);
            }
        } else if ($method === 'get' && empty($query_string) === false) {
            $uri = $uri.'?'.$query_string;
        }

        curl_setopt($ci, CURLOPT_URL, $uri);
        $response = curl_exec($ci);

        $this->http_info = array_merge($this->http_info, curl_getinfo($ci));
        $this->last_url  = $uri;

        curl_close($ci);

        return json_decode($response);

    }//end _api()


    /**
     * Used to save HTTP header of last request
     *
     * @param resource $ch     cURL handler
     * @param string   $header HTTP header
     *
     * @return int Returns length of header
     */
    private function _getHeader($ch, $header)
    {
        $i = strpos($header, ':');
        if (empty($i) === false) {
            $key   = str_replace('-', '_', strtolower(substr($header, 0, $i)));
            $value = trim(substr($header, ($i + 2)));
            $this->http_header[$key] = $value;
        }

        return strlen($header);

    }//end _getHeader()


}//end class
