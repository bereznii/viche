<footer class="footer fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 text-center">
                <a href="{{ route('chats') }}" class="d-flex flex-column justify-content-around
                    @if(url()->current() == route('chats') || url()->current() == route('chats.view')) bg-active @else bg-inactive @endif">
                    <i class="fas fa-comments fa-2x footer_links"></i>Chats
                </a>
            </div>
            <div class="col-6 col-sm-6 text-center border-left">
                <a href="{{ route('people') }}" class="d-flex flex-column justify-content-around
                    @if(url()->current() == route('people')) bg-active @else bg-inactive @endif">
                    <i class="fas fa-users fa-2x footer_links"></i>People
                </a>
            </div>
        </div>
    </div>
</footer>
