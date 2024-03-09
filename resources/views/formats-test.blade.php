<div>greeting</div>
<ul>
    @foreach ($formats as $format)
        <li>{{ $format | explode(' / ') }}</li>
    @endforeach
</ul>
