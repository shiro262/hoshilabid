@section('title', 'Add Character')
@extends('template.masteradminhsr')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Tambah Character
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data" action="{{Route('Add Character HSR')}}">
                @csrf
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">Character Image <span style="color:red;">*</span>(.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="image"> <br/>
                <label for="exampleInputEmail1" style="color: white;">Character Name <span style="color:red;">*</span></label><br/>
                <input type="text" placeholder="" class="form-control" name="name">
                <label for="exampleInputEmail1" style="color: white;">Character Path <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="path">
                    <option selected>- Pilih Path Character -</option>
                    <option>Abundance</option>
                    <option>Destruction</option>
                    <option>Erudition</option>
                    <option>Harmony</option>
                    <option>The Hunt</option>
                    <option>Nihility</option>
                    <option>Preservation</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Element <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="element">
                    <option selected>- Pilih Element Character -</option>
                    <option>Physical</option>
                    <option>Fire</option>
                    <option>Ice</option>
                    <option>Lightning</option>
                    <option>Wind</option>
                    <option>Quantum</option>
                    <option>Imaginary</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Role <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="role">
                    <option selected>- Pilih Role Character -</option>
                    <option>DPS</option>
                    <option>Sub-DPS</option>
                    <option>Support</option>
                    <option>Sustain</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Detail <span style="color:red;">*</span></label><br/>
                <textarea type="text" placeholder="" class="form-control" name="detail" rows="5"></textarea>
                <label for="exampleInputEmail1" style="color: white;">Character Rarity <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="rarity">
                    <option selected>- Pilih Character Rank -</option>
                    <option>5star</option>
                    <option>4star</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Tier (Memory of Chaos) <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="tier_moc">
                    <option selected>- Pilih Character Tier (Memory of Chaos) -</option>
                    <option>S+</option>
                    <option>S</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Tier (Pure Fiction) <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="tier_pf">
                    <option selected>- Pilih Character Tier (Pure Fiction) -</option>
                    <option>S+</option>
                    <option>S</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Sign Lightcone <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="lightcone_sign_id">
                    <option selected>- Pilih Lightcone -</option>
                    @foreach ($lightcone as $lc)
                        <option>{{$lc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Alt Lightcone 1<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="lightcone_alt1_id">
                    <option selected>- Pilih Lightcone -</option>
                    @foreach ($lightcone as $lc)
                        <option>{{$lc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Alt Lightcone 2<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="lightcone_alt2_id">
                    <option selected>- Pilih Lightcone -</option>
                    @foreach ($lightcone as $lc)
                        <option>{{$lc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Relic Set 1<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="relic_opt1_id">
                    <option selected>- Pilih Relic -</option>
                    @foreach ($relic as $rlc)
                        <option>{{$rlc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Relic Set 2<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="relic_opt2_id">
                    <option selected>- Pilih Relic -</option>
                    @foreach ($relic as $rlc)
                        <option>{{$rlc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Planar Set 1<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="planar_opt1_id">
                    <option selected>- Pilih Planar -</option>
                    @foreach ($planar as $plc)
                        <option>{{$plc->id}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Planar Set 2<span style="color:red;">*</span></label><br/>
                <select class="form-control" name="planar_opt2_id">
                    <option selected>- Pilih Planar -</option>
                    @foreach ($planar as $plc)
                        <option>{{$plc->id}}</option>
                    @endforeach
                </select>
                <br/>
                <button type="submit" class="btn btn-danger" style="color:White;">Add</button><br/>
                <br/><a href="{{url('starrail/admin/character/')}}" class="btn btn-outline-light" style="float: left;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
