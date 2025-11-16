<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class GetUserController extends Controller {

    public function __construct(
        protected UserRepository $repository
    ){}

    public function __invoke(Request $request, int $id): User
    {
        $user = $this->repository->find($id);

        if (! $user) {
            throw new NotFoundHttpException('User not found.');
        }

        return $user;
    }
}