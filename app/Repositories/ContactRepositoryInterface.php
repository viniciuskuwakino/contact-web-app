<?php

namespace App\Repositories;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;

interface ContactRepositoryInterface
{
    public function listAll();
    public function create(Array $req);
    public function findById($contactId);
    public function update(Contact $contact, Array $req);
}
