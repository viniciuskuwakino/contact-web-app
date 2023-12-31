<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        private readonly ContactService $contactService
    ) {}

    public function index(): View
    {
        $contacts = $this->contactService->listAll();

        return view('contact', compact('contacts'));
    }

    public function create(): View
    {
        return view('contacts.create');
    }

    public function store(ContactStoreRequest $req): RedirectResponse
    {
        $this->contactService->create($req->validated());
        return redirect()->route('list');
    }

    public function edit($contactId): View
    {
        $contact = $this->contactService->findById($contactId);

        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactUpdateRequest $req): RedirectResponse
    {
        $this->contactService->update($req['id'], $req->validated());
        return redirect()->route('list');

    }

    public function details($contactId): View
    {
        $contact = $this->contactService->findById($contactId);

        return view('contacts.details', compact('contact'));
    }

    public function delete($contactId): RedirectResponse
    {
        $contact = $this->contactService->findById($contactId);
        $contact->delete();
        return redirect()->route('list');

    }
}
