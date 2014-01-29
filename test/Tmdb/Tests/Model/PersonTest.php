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
namespace Tmdb\Tests\Model;

use Tmdb\Model\Person;

class GenreTest extends TestCase
{
    /**
     * @test
     */
    public function shouldConstructGenres()
    {
        $person = new Person();

        $this->assertInstancesOf(
            $person,
            array(
                'getCredits' => 'Tmdb\Model\Collection\Credits',
                'getImages'  => 'Tmdb\Model\Collection\Images',
                'getChanges' => 'Tmdb\Model\Common\GenericCollection'
            )
        );
    }
}