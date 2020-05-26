@extends('layouts/master')
@section('content')
@include('components/navigation')
<section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h3>Formulaire Saveur Add</h3>
    </div>
    <div class="container">
        <form action="{{route('saveSaveur')}}" method="POST" class="contactForm ">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mx-auto">
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6 mx-auto">
                    <input type="text" class="form-control" name="saveur" id="saveur" placeholder="saveur"
                        data-rule="saveur" data-msg="" />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="text-center ">
                <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
            </div>
        </form>
    </div>
</section>