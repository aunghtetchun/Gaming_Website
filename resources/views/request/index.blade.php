@extends('dashboard.app')

@section("title") Request App List @endsection

@section('content')

    @component("component.breadcrumb",["data"=>[

    ]])
        @slot("last") Request App List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Request App List @endslot
                @slot('button')

                @endslot
                @slot('body')
                    <div>
                        <table class="table table-bordered table-hover mb-0 table-responsive-sm table-responsive-md">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">App Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Playstore Link</th>
                                <th scope="col">Controls</th>
                                <th scope="col">Created_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\RequestApp::latest()->get() as $rq)
                                <tr>
                                    <th scope="row">{{ $rq->id }}</th>
                                    <td>{{ $rq->app_name }}</td>
                                    <td>{{ $rq->username }}</td>
                                    <td>{{ $rq->phone }}</td>
                                    <td>{{\App\Custom::toShort(strip_tags(html_entity_decode($rq->playstore_link)),30) }}</td>
                                    <td class="control-group d-flex" style="vertical-align: middle; text-align: center">
                                        <form action="{{ route('request_app.destroy',$rq->id) }}"  method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button href="" class="btn btn-sm btn-outline-danger text-left">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('request_app.show',$rq->id) }}" class="btn ml-2 btn-outline-success btn-sm">
                                            <i class="feather-eye"></i>
                                        </a>
                                    </td>
                                    <td>{{ $rq->created_at }}</td>
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
