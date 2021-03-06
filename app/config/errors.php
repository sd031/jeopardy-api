<?php

return array(

    /**
     * Token errors
     * 10001-10006
     */
    '10001' => array(
        'code'      => 10001,
        'http_code' => 401,
        'message'   => 'Token missing!',
        'details'   => '',
    ),
    '10002' => array(
        'code'      => 10002,
        'http_code' => 401,
        'message'   => 'Wrong token!',
        'details'   => '',
    ),
    '10003' => array(
        'code'      => 10003,
        'http_code' => 401,
        'message'   => 'Token expired!',
        'details'   => '',
    ),
    '10004' => array(
        'code'      => 10004,
        'http_code' => 401,
        'message'   => 'Credentials failed to validate!',
        'details'   => '',
    ),
    '10005' => array(
        'code'      => 10005,
        'http_code' => 401,
        'message'   => 'Wrong credentials!',
        'details'   => '',
    ),
    '10006' => array(
        'code'      => 10006,
        'http_code' => 500,
        'message'   => 'An unexpected token error has occurred',
        'details'   => '',
    ),




    /**
     * Unknown error
     */
    'unknown'                          => array(
        'code'      => 0,
        'http_code' => 500,
        'message'   => 'Unknown error.',
        'details'   => '',
    ),
    /**
     * Validation errors
     * 100-199
     */
    'create_resource_validation_error' => array(
        'code'      => 100,
        'http_code' => 400,
        'message'   => 'Validation failed.',
        'details'   => '',
    ),
    /**
     * Not available errors
     * 200-299
     */
    'list_resource_not_available'      => array(
        'code'      => 200,
        'http_code' => 400,
        'message'   => 'Listing all of this resource isn\'t available.',
        'details'   => 'You can\'t get all of this resource, you need to embed it with another resource. For example: You can\'t get all categories, but you can get all categories embedded with a specific game with /games/3?embed=categories. Or to just get the categories for the game: /games/3/categories',
    ),
    /**
     * Not found errors
     * 300-399
     */
    'single_resource_not_found'        => array(
        'code'      => 300,
        'http_code' => 404,
        'message'   => 'The :resource requested was not found.',
        'details'   => 'Could not find the resource [:resource] with id [:id], either it was deleted or it never existed.',
    ),

    'single_resource_unauthorized'        => array(
        'code'      => 301,
        'http_code' => 401,
        'message'   => 'You are not authorized to view this :resource.',
        'details'   => 'The authorized user does not have permission to view resource [:resource] with id [:id].',
    ),

    'nothing_created_yet'        => array(
        'code'      => 302,
        'http_code' => 404,
        'message'   => 'No :resources created yet.',
        'details'   => 'Could not find the resource [:resource] with id [:id], either it was deleted or it never existed.',
    ),


);
