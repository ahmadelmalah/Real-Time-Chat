<!doctype html>
<html>
<head>
    <title>Hi chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" id="app">

            <ul class="list-group col-4 offset-md-4">
                <li class="list-group-item active">Chat Room</li>
                <message v-for="msg in chat.messages">
                    @{{ msg }}
                </message>
                <input type="text" class="form_control" v-model="message" @keyup.enter="send" placeholder="Type your message" />
            </ul>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html