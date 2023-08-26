<?php

return [
    'pending_approval' => [
        'type' => 'state_machine',
        'marking_store' => [
            'type' => 'single_state',
            'property' => 'status', // Assuming the field name in your database is 'status'
        ],
        'supports' => [\App\Models\PendingApproval::class],
        'initial_marking' => 'uploaded',
        'places' => [
            'uploaded',
            'under_review',
            'approved',
            'rejected',
        ],
        'transitions' => [
            'review' => [
                'from' => 'uploaded',
                'to' => 'under_review',
            ],
            'approve' => [
                'from' => 'under_review',
                'to' => 'approved',
            ],
            'reject' => [
                'from' => 'under_review',
                'to' => 'rejected',
            ],
        ],
    ],
];
