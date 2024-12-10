<?php

declare(strict_types=1);

namespace Tempest\Generation\Tests\Fixtures\Database;

final class FakeCreateTableStatement implements FakeQueryStatement
{
    public function __construct(
        public readonly string $tableName,
    ) {
    }

    public function text(string $text): self
    {
        return $this;
    }

    public function primary(): self
    {
        return $this;
    }

    public function compile(): string
    {
        return '';
    }
}
