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
                <pIndent1>{{$array['subsection']->ssname}}</pIndent1>
                <pIndent2>{{$array['method']->mname}} </pIndent2>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel body">
            {{Form::open()}}
            {{Form::select('choose', array('general' => 'General', 'yogic' => 'Yogic'), 'HigherSelf', array('onchange' => 'change()', 'id' => 'options'));}}
            {{Form::close()}}

            <p id="contents">
·          Now allow yourself to enter the deepest state of letting go right now. <br/>
·          Nothing to do or achieve.<br/>
·          Open..empty.<br/>
·          (pause)<br/>
·          Feel yourself as a vast, spacious, sky of awareness.<br/>
·          Rest into and as this space.<br/>
·          (pause)<br/>
·          Thoughts, images, sensations passing by like clouds on a clear blue sky.<br/>
·          Be the space in which it is all happening. <br/>

            </p>
           


        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'yogic'){
document.getElementById("contents").innerHTML = "";
}
        if(document.getElementById("options").value == 'general'){
            document.getElementById("contents").innerHTML = "";
    }
   }
    </script>

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
