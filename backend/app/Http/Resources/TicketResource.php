<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
            'category' => $this->category,
            'user' => new UserResource($this->user),
            'assigned_agent' => new UserResource($this->assignedAgent),
            'replies' => TicketReplyResource::collection($this->replies),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $query = Ticket::with(['user', 'assignedAgent', 'replies']);

        // Apply filters
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        // For regular users, only show their tickets
        if (auth()->user()->isUser()) {
            $query->where('user_id', auth()->id());
        }

        $tickets = $query->orderBy('created_at', 'desc')
                        ->paginate($request->per_page ?? 10);

        return TicketResource::collection($tickets);
    }
}
