<?php
declare(strict_types=1);

namespace EonX\EasyDecision\Tests\Expressions;

use EonX\EasyDecision\Expressions\ExpressionLanguageConfig;
use EonX\EasyDecision\Tests\AbstractTestCase;
use EonX\EasyDecision\Tests\Stubs\ExpressionFunctionProviderStub;

final class ExpressionLanguageFactoryTest extends AbstractTestCase
{
    /**
     * Factory should create expression language and register given functions.
     *
     * @return void
     */
    public function testCreateWithFunctions(): void
    {
        $expressionLanguage = $this->createExpressionLanguage(new ExpressionLanguageConfig(
            null,
            null,
            (new ExpressionFunctionProviderStub())->getFunctions()
        ));

        self::assertEquals(4, $expressionLanguage->evaluate('max(1,2) + min(2,3)'));
    }

    /**
     * Factory should create expression language and register given functions from providers.
     *
     * @return void
     */
    public function testCreateWithProvider(): void
    {
        $expressionLanguage = $this->createExpressionLanguage(new ExpressionLanguageConfig(
            null,
            [new ExpressionFunctionProviderStub()]
        ));

        self::assertEquals(4, $expressionLanguage->evaluate('max(1,2) + min(2,3)'));
    }
}
