<?php
namespace App\Controller\Api;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsController]
class UserGetCoordinatesController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client,
    ) {}

    public function __invoke(User $user): array
    {
        $address = str_replace(' ', '+', $user->getAddress());
        $response = $this->client->request(
            'GET',
            'https://api-adresse.data.gouv.fr/search/?q='.$address
        );

        $content = $response->toArray();
        $coordinates = $content['features'][0]['geometry']['coordinates'];

        return[
            'lat' => $coordinates[0],
            'long' => $coordinates[1]
        ];
    }
}