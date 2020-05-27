@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Commandes</h3>
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
                        <th scope="col">Portion</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->plat->plat}}</td>
                        <td>{{$item->portion}}</td>
                    <td>
                        <a href='{{route('delete', $item->id)}}' class='btn btn-danger'>Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>