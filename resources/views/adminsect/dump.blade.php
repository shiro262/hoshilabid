<div class="card-transparent" style="width: 18rem;">
    <a href="{{ route('View Weapon Genshin Guest', [$wea->id]) }}">
        <img class="card-img-top" src="{{asset('storage/weaponimagegenshin/'.$wea->image)}}" height="240" alt="Card image cap">
    </a>
    <div class="card-body">
      <p class="card-text" style="color:White;" >{{ $wea->name }}<br/>{{$wea->type}}</p>
    </div>
</div>
