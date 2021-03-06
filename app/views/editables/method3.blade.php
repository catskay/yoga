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
            {{Form::open(array('url' => 'method3'))}}
           {{Form::textarea('text', "Asatoma sad gamaya Lead me from the unreal to the real&#13;
Tamasoma Jyotir gamaya  Lead me from darkness to light&#13;
Mrityorma amritam gamaya    Lead me from the timebound state of consciousness to the timeless state of being that we are.&#13;
&#13;
&#13;
Statement of Purpose could be something like:&#13;
During this time, I will participate wholeheartedly in this process and trust that whatever issues are in the way of my full realization will be released spontaneously and effortlessly. I let go of any struggle or effort to make anything happen.
", ['size' => '120x10', 'readonly'])}}><br/>
           {{Form::textarea('purpose', null,['placeholder' => 'Please enter your statement of purpose.', 'size' => '120x5'])}}
        </div>
    </div>
    

    <input type="hidden" name="mid" value={{$array['method']->mid}}>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" name="submitButton" value="Previous"> 
        </div>
        <div class="col-md-4">
            <input type="submit" class="button-center" name="submitButton" value="Section Summary">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" style="float:right" name="submitButton" value="Next">
        </div>
    </div>
</div>
{{Form::close()}}

@stop
