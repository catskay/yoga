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
    
    {{Form::open(array('url' => 'edit')) }}
    <form role="form" id="options" name="options" type="post">
    <input type="hidden" name="mid" value={{$array['method']->mid}}>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" name="submitButton" value="Previous"> 
        </div>
        <div class="col-md-4">
            <div class="wrapper">
                <input type="submit" class="button-center" name="submitButton" value="Section Sumary">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" style="float:right" name="submitButton" value="Next">
        </div>
    </div>
</div>
{{Form::close()}}

<script>
function next(){
    document.getElementById("mid").value = 
}
</script>

@stop
