@extends('layout.master')

@section('content')


<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit method</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><b> {{$array['section']->sname}} </b></p>
            <pIndent1>{{$array['subsection']->ssname}}</pIndent1><br/>
            <indent><pIndent2>{{$array['method']->mname}} </pIndent2></indent>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel body">
            <textarea rows="15" cols="120" readonly>{{$array['method']->text}}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-danger">Previous</button> 
        </div>
        <div class="col-md-4">
            <div class="wrapper">
                <a href="/yoga/public/selector"><button class="button-center">Section Summary</button></a>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-danger" style="float:right">Next</button>
        </div>
    </div>
</div>


@stop
