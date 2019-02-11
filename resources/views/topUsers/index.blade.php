@extends('layouts.app')

@section('title','消费榜单')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>
                        消费榜单
                    </h1>
                </div>

                <div class="panel-body">
                    @if(count($top_users))
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>用户</th>
                                    <th>消费</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($top_users as $top_user)
                                    <tr>

                                        <td>
                                            <img src="{{ $top_user->avatar }}" width="50">
                                            {{ $top_user->name }}
                                        </td>
                                        <td>
                                            <span class="label label-success">
                                                {{$top_user->consumption}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3 class="text-xs-center alert alert-info">Empty!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection