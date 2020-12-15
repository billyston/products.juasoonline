<?php

/**
 * @return array
 */
function includeResources()
{
    return ( request() -> get( 'include' ) ) ? explode( ',', request() -> get( 'include' ) ) : [];
}
