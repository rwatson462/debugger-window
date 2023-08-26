import Echo from "laravel-echo";
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: import.meta.env.VITE_BROADCAST_DRIVER,
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: false,
    disableStats: true,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
});


window.Echo.channel(`nativephp`)
    .listen('PostReceived', e => {
        // Simple implementation for now, just reload the page
        document.location.reload();
    });
