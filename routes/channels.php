<?php

Broadcast::channel('updates', function ($user) {
    return auth()->check();
});

Broadcast::channel('online', function ($user) {
    if (auth()->check()) {
        return $user->toArray();
    }
});
