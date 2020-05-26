@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Plats</h3>
            <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plats</th>
                        <th scope="col">Saveur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plats as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->plat}}</td>
                        <td>{{$item->saveur->saveur}}</td>
                    <td>
                        <a href='{{route('delete', $item->id)}}' class='btn btn-danger'>Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center ">
            <a href="{{route('add')}}" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</a>
            </div>
        </div>
    </div>
</section>