<?php
return [
    'test_event_code' => [
        'object'    => 'ClassEvent\Event\BaseEvent',
        'listeners' => [
            'ClassOne::method',
            'ClassSecond::method',
            'someFunction',
        ]
    ]
];
