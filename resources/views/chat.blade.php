<!doctype html>
<html>
<head>
    <title>Hi chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="col-4 offset-md-4">
                <li class="list-group-item active">Chat Room</li>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="msg in chat.messages" :key="msg.index">
                        @{{ msg }}
                    </message>
                </ul>
                <input width="100%" type="text" class="form_control" v-model="message" @keyup.enter="send" placeholder="Type your message" />
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html