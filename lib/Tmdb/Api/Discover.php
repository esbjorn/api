<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Discover
    extends AbstractApi
{
    /**
     * Discover movies by different types of data like average rating, number of votes, genres and certifications.
     *
     * @param array $options
     * @return mixed
     */
    public function discoverMovies(array $options = array())
    {
        return $this->get('discover/movie', $options);
    }
}