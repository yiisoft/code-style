<?php

class FullyQualifiedFixtureParent
{
}

class FullyQualifiedFixture extends FullyQualifiedFixtureParent
{
    #[\Override]
    public function foo(): void
    {
    }
}

-----
<?php

class FullyQualifiedFixtureParent
{
}

class FullyQualifiedFixture extends FullyQualifiedFixtureParent
{
    public function foo(): void
    {
    }
}

