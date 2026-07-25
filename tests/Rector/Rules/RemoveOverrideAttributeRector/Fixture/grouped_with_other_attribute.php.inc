<?php

class GroupedFixtureParent
{
}

class GroupedFixture extends GroupedFixtureParent
{
    #[Override, SomeAttribute]
    public function foo(): void
    {
    }
}

-----
<?php

class GroupedFixtureParent
{
}

class GroupedFixture extends GroupedFixtureParent
{
    #[SomeAttribute]
    public function foo(): void
    {
    }
}

