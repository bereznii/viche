<footer class="chat-footer fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <form id="message_form" action="{{ route('chat.send-message') }}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control" name="chat_id" value="{{ $chatId }}">
                    <div class="input-group my-3">
                        <input type="text" autocomplete="off" class="form-control" placeholder="Message..." name="message" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" id="send_message" type="submit"><i class="fas fa-reply"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
