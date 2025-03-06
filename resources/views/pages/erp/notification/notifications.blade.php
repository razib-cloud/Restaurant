@extends('layout.erp.app')

@section('title', 'Notifications')

@section('page')
    <div class="container">
        <h1>New Notifications</h1>

        @if ($notifications->isEmpty())
            <p>No new notifications.</p>
        @else
            @foreach ($notifications as $notification)
                <div class="notification card mb-3">
                    <div class="card-body">
                        <p class="card-text">{{ json_decode($notification->data)->message }}</p>
                        <small class="text-muted">Received:
                            {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</small>
                        <div class="mt-2">
                            @if (!$notification->is_read)
                                <a href="{{ route('admin.notifications.markAsRead', $notification->id) }}"
                                    class="btn btn-sm btn-primary mark-as-read">Mark as Read</a>
                            @endif
                            <form action="{{ route('admin.notifications.destroy', $notification->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    aria-label="Delete notification">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $notifications->links() }}
        @endif
    </div>
@endsection
