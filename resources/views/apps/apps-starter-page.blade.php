@extends('layouts.master')

@section('title', 'Orange Money')

@section('content')
  <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">

                             @component('common-components.breadcrumb')
                                 @slot('title') Starter @endslot
                                 @slot('item1') Metrica @endslot
                                 @slot('item2') Apps @endslot
                              @endcomponent

                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                </div>
@stop
