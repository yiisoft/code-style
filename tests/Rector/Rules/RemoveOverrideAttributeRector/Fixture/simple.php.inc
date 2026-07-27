<?php

class SimpleFixtureParent
{
}

class SimpleFixture extends SimpleFixtureParent
{
    #[Override]
    public function foo(): void
    {
    }
}

-----
<?php

class SimpleFixtureParent
{
}

class SimpleFixture extends SimpleFixtureParent
{
    public function foo(): void
    {
    }
}

