<?php

// Start of sybase_ct v.

/**
 * Opens a Sybase server connection
 * @link http://php.net/manual/en/function.sybase-connect.php
 * @param servername string[optional]
 * @param username string[optional]
 * @param password string[optional]
 * @param charset string[optional]
 * @param appname string[optional]
 * @return resource a positive Sybase link identifier on success, or false on
 * @jms-builtin
 */
function sybase_connect ($servername = null, $username = null, $password = null, $charset = null, $appname = null) {}

/**
 * Open persistent Sybase connection
 * @link http://php.net/manual/en/function.sybase-pconnect.php
 * @param servername string[optional]
 * @param username string[optional]
 * @param password string[optional]
 * @param charset string[optional]
 * @param appname string[optional]
 * @return resource a positive Sybase persistent link identifier on success, or
 * @jms-builtin
 */
function sybase_pconnect ($servername = null, $username = null, $password = null, $charset = null, $appname = null) {}

/**
 * Closes a Sybase connection
 * @link http://php.net/manual/en/function.sybase-close.php
 * @param link_identifier resource[optional]
 * @return bool 
 * @jms-builtin
 */
function sybase_close ($link_identifier = null) {}

/**
 * Selects a Sybase database
 * @link http://php.net/manual/en/function.sybase-select-db.php
 * @param database_name string
 * @param link_identifier resource[optional]
 * @return bool 
 * @jms-builtin
 */
function sybase_select_db ($database_name, $link_identifier = null) {}

/**
 * Sends a Sybase query
 * @link http://php.net/manual/en/function.sybase-query.php
 * @param query string
 * @param link_identifier resource[optional]
 * @return mixed a positive Sybase result identifier on success, false on error,
 * @jms-builtin
 */
function sybase_query ($query, $link_identifier = null) {}

/**
 * Send a Sybase query and do not block
 * @link http://php.net/manual/en/function.sybase-unbuffered-query.php
 * @param query string
 * @param link_identifier resource
 * @param store_result bool[optional]
 * @return resource a positive Sybase result identifier on success, or false on
 * @jms-builtin
 */
function sybase_unbuffered_query ($query, $link_identifier, $store_result = null) {}

/**
 * Frees result memory
 * @link http://php.net/manual/en/function.sybase-free-result.php
 * @param result resource
 * @return bool 
 * @jms-builtin
 */
function sybase_free_result ($result) {}

/**
 * Returns the last message from the server
 * @link http://php.net/manual/en/function.sybase-get-last-message.php
 * @return string the message as a string.
 * @jms-builtin
 */
function sybase_get_last_message () {}

/**
 * Get number of rows in a result set
 * @link http://php.net/manual/en/function.sybase-num-rows.php
 * @param result resource
 * @return int the number of rows as an integer.
 * @jms-builtin
 */
function sybase_num_rows ($result) {}

/**
 * Gets the number of fields in a result set
 * @link http://php.net/manual/en/function.sybase-num-fields.php
 * @param result resource
 * @return int the number of fields as an integer.
 * @jms-builtin
 */
function sybase_num_fields ($result) {}

/**
 * Get a result row as an enumerated array
 * @link http://php.net/manual/en/function.sybase-fetch-row.php
 * @param result resource
 * @return array an array that corresponds to the fetched row, or false if there
 * @jms-builtin
 */
function sybase_fetch_row ($result) {}

/**
 * Fetch row as array
 * @link http://php.net/manual/en/function.sybase-fetch-array.php
 * @param result resource
 * @return array an array that corresponds to the fetched row, or false if there
 * @jms-builtin
 */
function sybase_fetch_array ($result) {}

/**
 * Fetch a result row as an associative array
 * @link http://php.net/manual/en/function.sybase-fetch-assoc.php
 * @param result resource
 * @return array an array that corresponds to the fetched row, or false if there
 * @jms-builtin
 */
function sybase_fetch_assoc ($result) {}

/**
 * Fetch a row as an object
 * @link http://php.net/manual/en/function.sybase-fetch-object.php
 * @param result resource
 * @param object mixed[optional]
 * @return object an object with properties that correspond to the fetched row, or
 * @jms-builtin
 */
function sybase_fetch_object ($result, $object = null) {}

/**
 * Moves internal row pointer
 * @link http://php.net/manual/en/function.sybase-data-seek.php
 * @param result_identifier resource
 * @param row_number int
 * @return bool 
 * @jms-builtin
 */
function sybase_data_seek ($result_identifier, $row_number) {}

/**
 * Get field information from a result
 * @link http://php.net/manual/en/function.sybase-fetch-field.php
 * @param result resource
 * @param field_offset int[optional]
 * @return object an object containing field information.
 * @jms-builtin
 */
function sybase_fetch_field ($result, $field_offset = null) {}

/**
 * Sets field offset
 * @link http://php.net/manual/en/function.sybase-field-seek.php
 * @param result resource
 * @param field_offset int
 * @return bool 
 * @jms-builtin
 */
function sybase_field_seek ($result, $field_offset) {}

/**
 * Get result data
 * @link http://php.net/manual/en/function.sybase-result.php
 * @param result resource
 * @param row int
 * @param field mixed
 * @return string 
 * @jms-builtin
 */
function sybase_result ($result, $row, $field) {}

/**
 * Gets number of affected rows in last query
 * @link http://php.net/manual/en/function.sybase-affected-rows.php
 * @param link_identifier resource[optional]
 * @return int the number of affected rows, as an integer.
 * @jms-builtin
 */
function sybase_affected_rows ($link_identifier = null) {}

/**
 * Sets minimum client severity
 * @link http://php.net/manual/en/function.sybase-min-client-severity.php
 * @param severity int
 * @return void 
 * @jms-builtin
 */
function sybase_min_client_severity ($severity) {}

/**
 * Sets minimum server severity
 * @link http://php.net/manual/en/function.sybase-min-server-severity.php
 * @param severity int
 * @return void 
 * @jms-builtin
 */
function sybase_min_server_severity ($severity) {}

/**
 * Sets the handler called when a server message is raised
 * @link http://php.net/manual/en/function.sybase-set-message-handler.php
 * @param handler callback
 * @param connection resource[optional]
 * @return bool 
 * @jms-builtin
 */
function sybase_set_message_handler ($handler, $connection = null) {}

/**
 * Sets the deadlock retry count
 * @link http://php.net/manual/en/function.sybase-deadlock-retry-count.php
 * @param retry_count int
 * @return void 
 * @jms-builtin
 */
function sybase_deadlock_retry_count ($retry_count) {}


// End of sybase_ct v.
?>
