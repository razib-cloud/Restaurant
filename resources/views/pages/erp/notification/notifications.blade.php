@extends('layout.erp.app')

@section('title', 'Notifications')

@section('style')
<!-- You can add additional custom styles here if needed -->
@endsection

@section('page')
    <h1>New Notifications</h1>

    @if($notifications->isEmpty())
        <p>No new notifications.</p>
    @else
        @foreach ($notifications as $notification)
            <div class="notification">
                <p>{{ $notification->data['message'] }}</p>  <!-- Show notification message -->
                <small>Received: {{ $notification->created_at->diffForHumans() }}</small>  <!-- Show timestamp -->
            </div>
        @endforeach
    @endif
@endsection

@section('script')
<!-- Add custom scripts if needed -->
@endsection
