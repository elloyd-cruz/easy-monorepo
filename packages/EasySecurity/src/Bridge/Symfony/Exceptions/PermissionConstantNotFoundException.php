<?php

declare(strict_types=1);

namespace EonX\EasySecurity\Bridge\Symfony\Exceptions;

use EonX\EasySecurity\Interfaces\EasySecurityExceptionInterface;

final class PermissionConstantNotFoundException extends \RuntimeException implements EasySecurityExceptionInterface
{
    // No body needed.
}
