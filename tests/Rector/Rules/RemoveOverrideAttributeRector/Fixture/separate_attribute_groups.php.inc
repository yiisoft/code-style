<?php

class SeparateGroupsFixtureParent
{
}

class SeparateGroupsFixture extends SeparateGroupsFixtureParent
{
    #[SomeAttribute]
    #[Override]
    public function foo(): void
    {
    }
}

-----
<?php

class SeparateGroupsFixtureParent
{
}

class SeparateGroupsFixture extends SeparateGroupsFixtureParent
{
    #[SomeAttribute]
    public function foo(): void
    {
    }
}

