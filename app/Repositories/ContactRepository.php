<?php

namespace App\Repositories;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements ContactRepositoryInterface
{
    public function __construct(
        protected readonly Contact $model
    ) {}

    public function listAll(): Collection
    {
        return $this->model->all();
    }

    public function create(Array $req): void
    {
        $this->model->create($req);
    }

    public function findById($contactId): Contact
    {
        return $this->model->find($contactId);
    }

    public function update(Contact $contact, Array $req): void
    {
        $contact->update($req);
    }
}
