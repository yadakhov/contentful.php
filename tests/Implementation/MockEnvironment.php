<?php

/**
 * This file is part of the contentful/contentful package.
 *
 * @copyright 2015-2019 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Delivery\Implementation;

use Contentful\Delivery\Resource\Environment;
use Contentful\Delivery\SystemProperties\Environment as SystemProperties;

class MockEnvironment extends Environment
{
    /**
     * MockEnvironment constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @param string $id
     * @param array  $data
     *
     * @return MockEnvironment
     */
    public static function withSys(string $id = 'environmentId', array $data = []): self
    {
        return new static(\array_merge($data, [
            'sys' => new SystemProperties([
                'id' => $id,
                'type' => 'Environment',
            ]),
        ]));
    }
}
