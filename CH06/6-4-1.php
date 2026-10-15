<?php
function printHeader()
{
    echo "<h3>SID:C113181180</h3>";
    echo "<h3>Name:李似巾</h3>";
    echo "<h3>EX05</h3>";;
}
function callFunc1(Closure $closure)
{
    $closure();
}

function callFunc2(callable $callable)
{
    $callable();
}

$hello = function () {
    echo "Hello World!<br/>";
};

function hi()
{
    echo "Hi World!<br/>";
}

printHeader() ;

//callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc1($hello);