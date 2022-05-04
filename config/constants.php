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
            ],
            'validation' => [
                'failed' => 'Validation failed',
            ],
            'status' => [
                'invalid' => 'Invalid status',
            ]
        ]
    ]
];