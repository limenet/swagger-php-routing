<?php

declare(strict_types=1);

namespace Tobion\OpenApiSymfonyRouting\Tests\Fixtures\SeveralClasses\SubNamespace;

use Openapi\Annotations as OA;

class SubController
{
    /**
     * @OA\Get(
     *     path="/sub",
     *     @OA\Response(response="200", description="Success")
     * )
     */
    public function __invoke(): void
    {
    }
}
