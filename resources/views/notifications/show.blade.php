@extends('layouts.header')

@section('body')

<div class="container mx-auto">
    <p class="flex justify-center text-3xl font-serif">
        Show All notifications for all users
    </p>
    <ul class="mt-5 space-y-2 text-base">
        @forelse ($notifications as $notification)
            <li>
                @if ($notification->type === 'App\Notifications\PaymentReceived')
                    <p class="font-serif text-xl">We have received {{ $notification->data['amount'] ?? 0 }}kr as payment from you </p>
                    @endif
            </li>
            @empty
            <li>For now, you have no new notifications</li>
        @endforelse
    </ul>
    <li>
        @foreach ($allNotifications as $notification)
            <li>{{ $notification->data['amount'] ?? 0 }}kr</li>
        @endforeach
    </li>
</div>
@endsection

