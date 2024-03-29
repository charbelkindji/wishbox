<div class="tm-gallery-item category-{{ $wish->category_id }}" onclick="location.href='{{ route($type.'.show', $wish->id) }}'">
    <figure class="effect-bubba">
        <img src="{{ asset(empty($wish->filename) ? 'img/default_wish_image.png' : 'img/wishes/'.$wish->filename) }}" alt="{{ $wish->filename }}" class="img-fluid"/>
        <figcaption>
            <h4 style="font-size: 18px"><span class="pr-1" uk-icon="icon: @if($wish->user_id != null) check @else close @endif; ratio: .7"></span>
                {{ \Illuminate\Support\Str::limit($wish->title, 12, $end='..') }}</h4>
            <p style="font-size: 11px !important;">{{ \Illuminate\Support\Str::limit($wish->description, 30, $end='...') }}</p>
            {{--<a href="@if ($wish->link != null) {{ $wish->link }} @else {{ "#" }} @endif">Lien associé</a>--}}
        </figcaption>
    </figure>
</div>