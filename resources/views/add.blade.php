@extends('layouts/master')
@section('content')
@include('components/navigation')
<section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h3>Formulaire Plat Add</h3>
    </div>
    <div class="container">
        <form action="{{route('savePlat')}}" method="POST" class="contactForm ">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mx-auto">
                    <div class="validation"></div>
                </div>
                <select name="saveur" id="monselect">
                    @foreach ($saveur as $item)
                    <option value="{{$item->id}}">Salé</option>
                    @endforeach
                    <option value="1">Sucré</option>
                    <option value="2">Salé</option>
                    <input type="text" class="form-control" name="plat" id="plat" placeholder="Plat" data-rule="plat"
                        data-msg="" />
                </select>
            </div>
            <div class="text-center ">
                <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
            </div>
        </form>
    </div>
</section>
