<?php
declare(strict_types=1);

namespace Zerkms;

use Webmozart\Assert\Assert;

class Foo {
    /** @var mixed */
    public $aggregateClass;

    public function getAggregateClass(): ?string
    {
        Assert::nullOrImplementsInterface(
            $this->aggregateClass,
            Identifiable::class,
            'Expected the aggregate class name to refer to an implementation of %2$s. Got: %s'
        );

        return $this->aggregateClass;
    }
}
