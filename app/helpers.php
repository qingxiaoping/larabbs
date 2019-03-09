<?php

function route_class()
{
	return str_replace('.','-',route::currentRouteName());
}
