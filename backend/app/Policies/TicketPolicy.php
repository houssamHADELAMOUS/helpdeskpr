<?php

namespace App\Policies;

use App\Models\User;

class TicketPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isAgent();
    }

    public function view(User $user, Ticket $ticket)
    {
        return $user->isAdmin() || $user->isAgent() || $ticket->user_id === $user->id;
    }

    public function create(User $user)
    {
        return $user->isUser();
    }

    public function update(User $user, Ticket $ticket)
    {
        return $user->isAdmin() || $user->isAgent() || $ticket->user_id === $user->id;
    }

    public function addReply(User $user, Ticket $ticket)
    {
        return $user->isAdmin() || $user->isAgent() || $ticket->user_id === $user->id;
    }
}
