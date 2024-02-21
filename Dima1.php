<?php

function Dmitry()
{
	return "Lazarev";
}

$res = Dmitry();

$double = Dmitry()." + ".Dmitry();
print $double;

function Lazarev()
{
	return "Dmitry";
}

echo Lazarev();