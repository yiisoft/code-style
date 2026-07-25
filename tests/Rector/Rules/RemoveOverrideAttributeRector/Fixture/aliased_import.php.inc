<?php

use Override as Ov;

class AliasedFixtureParent
{
}

class AliasedFixture extends AliasedFixtureParent
{
    #[Ov]
    public function foo(): void
    {
    }
}

-----
<?php

use Override as Ov;

class AliasedFixtureParent
{
}

class AliasedFixture extends AliasedFixtureParent
{
    public function foo(): void
    {
    }
}

