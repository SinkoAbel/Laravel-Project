@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1mhSkWPvWnTlXimiUKDW_LpR2nT9C2MUZAV86UVyVXA-QizuzRzV0mLavFK9ZPKdZGPE&usqp=CAU" height="150rem" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>posts</div>
                <div class="pr-5"><strong>23k</strong>followers</div>
                <div class="pr-5"><strong>212</strong>followers</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="https:\\freecodecamp.org" target="_blanks">www.freecodecamp.org</a></div>
        </div>
    </div>


    <div class="row pt-5 justify-content-center">
        <div class="col-4">
            <img src="/pictures/182420108_2846067182278371_8696705350785640614_n.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/pictures/207025766_326527625787808_1357173267669542444_n.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/pictures/210835494_908483116735590_2993103115685819114_n.jpg" class="w-100">
        </div>
    </div>

</div>
@endsection
