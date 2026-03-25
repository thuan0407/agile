<?php
/**
 * Force direct filesystem access.
 *
 * Avoids WordPress falling back to FTPext (which can fatally error on PHP 8.2+ if FTP connection is null).
 */

add_filter( 'filesystem_method', static function () {
	return 'direct';
} );

