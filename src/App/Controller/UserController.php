<?php

/*
 * @author  Xavier Chopin <xavier.chopin@univ-lorraine.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;


use Slim\Http\Request;
use Slim\Http\Response;

class UserController extends Controller
{

    public function user(Request $request, Response $response, $country, $id)
    {

        $user = $this->http->get('users/' . $id, [
            'headers' => ['Authorization' => 'Bearer ' . $this->createJWT()->token]
        ]);

        echo('Test : <br>' . $user->getBody()->getContents());




    }

}