<?php

function Dmitry()
{
	return "Lazarev";
}

$res = Dmitry();

$double = Dmitry()." + ".Dmitry();
print $double;

function Das()
{
	return "Dasa";
}

function Lazarev()
{
	return "Dmitry";
}

echo Lazarev();