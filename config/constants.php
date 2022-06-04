<?php
return [
    'response' => [
        'message' => [
            'success' => [
                'getAll' => 'Successfully get all data',
                'getOne' => 'Successfully get one data with id = {id}',
                'create' => 'Successfully create data',
                'update' => 'Successfully update data',
                'delete' => 'Successfully delete data',
            ],
            'failed' => [
                'getAll' => 'Failed to get all data',
                'getOne' => 'Failed to get one data with id = {id}',
                'create' => 'Failed to create data',
                'update' => 'Failed to update data',
                'delete' => 'Failed to delete data',
                'notFound' => 'Data not found',
                'transaction' => 'Failed to update using database transaction. There is some invalid data.',
                'uploadImage' => 'Failed to upload image',
                'deleteImage' => 'Failed to delete image',
            ],
            'validation' => [
                'failed' => 'Validation failed',
            ],
            'status' => [
                'invalid' => 'Invalid status',
            ]
        ],
        'statusCode' => [
            'success' => [
                'getAll' => 200,
                'getOne' => 200,
                'create' => 201,
                'update' => 200,
                'delete' => 200,
            ],
            'failed' => [
                'getAll' => 400,
                'getOne' => 400,
                'create' => 400,
                'update' => 400,
                'delete' => 400,
                'notFound' => 404,
                'transaction' => 400,
                'uploadImage' => 400,
                'deleteImage' => 400,
            ],
            'validation' => [
                'failed' => 422,
            ],
            'status' => [
                'invalid' => 400,
            ]
        ]
    ],
    'env' => [
        'asset_url' => 'http://127.0.0.1:8000',
        'asset_lecturer_photo' => 'image/lecturer/photo',
    ]
];