@extends('layouts.app')

@section('content')

<div class="blank"><!-- add class div -->
    <section class="content-header">
        <h2>
            Profil de l'utilisateur
        </h2>
    </section>
    <div class="blankpage-main">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
