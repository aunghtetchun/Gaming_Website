@extends('dashboard.app')

@section("title") Suggest List @endsection

@section('content')

    @component("component.breadcrumb",["data"=>[

    ]])
        @slot("last") Suggest List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Suggest List @endslot
                @slot('button')

                @endslot
                @slot('body')
                    <div>
                        <table class="table table-bordered table-hover table-responsive-sm table-responsive-md mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Description</th>
                                <th scope="col">Controls</th>
                                <th scope="col">Created_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Suggest::latest()->get() as $s)
                                <tr>
                                    <th scope="row">{{ $s->id }}</th>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->phone }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{\App\Custom::toShort(strip_tags(html_entity_decode($s->description)),30) }}</td>
                                    <td class="control-group d-flex" style="vertical-align: middle; text-align: center">
                                        <form action="{{ route('suggest.destroy',$s->id) }}"  method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button href="" class="btn btn-sm btn-outline-danger text-left">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('suggest.show',$s->id) }}" class="btn ml-2 btn-outline-success btn-sm">
                                            <i class="feather-eye"></i>
                                        </a>
                                    </td>
                                    <td>{{ $s->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
@section("foot")
    <script>
        $(".table").dataTable({
            "order": [[0, "desc" ]]
        });
        $(".dataTables_length,.dataTables_filter,.dataTable,.dataTables_paginate,.dataTables_info").parent().addClass("px-0");
    </script>
@endsection
