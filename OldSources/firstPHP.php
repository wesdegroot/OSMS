<?php

#Created in 2001.
# Example HelloWorlds By Wesley De Groot.

# Example Hello Worlds.

echo "Hello World";

print "Hello World";

echo sprintf("%s %s!", "Hello", "World");

function hello_world()
{
    return "Hello World, From Function";
}

echo hello_world();

class Hello
{
    public function world()
    {
        echo "Hello World;";
    }
}

$hello = new Hello();
$hello->world;

?>