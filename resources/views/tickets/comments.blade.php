<div class="comments">
    @foreach($ticket->comments as $comment)
    <div class="card bg-@if($ticket->user->id === $comment->user_id){{"gradient-default"}}@else{{"gradient-primary"}}@endif">

        <blockquote class="blockquote">
            <p style="color:white; padding-left:10px;padding:right:10px; padding-top:10px"> {{ $comment->comment }}</p>
            <footer class="blockquote-footer" style="font-size:14px; color:#c5cfda">
                    {{ $comment->user->name }}
                <cite>Replied : {{ $comment->created_at->diffForHumans() }}</cite>
            </footer>
        </blockquote>
    </div>
    @endforeach
</div>