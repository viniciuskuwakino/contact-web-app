<?php

namespace App\Services;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use App\Repositories\ContactRepositoryInterface;

class ContactService
{
    public function __construct(
        private readonly ContactRepositoryInterface $repository
    ) {}

    public function listAll()
    {
        return $this->repository->listAll();
    }

    public function create(Array $req)
    {
        return $this->repository->create($req);
    }

    public function findById($contactId)
    {
        return $this->repository->findById($contactId);
    }

    public function update($id, Array $req)
    {
        $contact = $this->repository->findById($id);
        return $this->repository->update($contact, $req);
    }
}
