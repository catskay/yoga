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
            {{Form::open(array('url' => 'method2'))}}
           {{Form::textarea('text', 'Close your eyes and quiet your mind. Be still.&#13; Let go of all thoughts, worry and tension.&#13; Give yourself fully to a higher power. Relax, trust and let go... Breathe in fully and exhale with a deep sigh...&#13; And again, breathe in fully and exhale with a deep sigh... And let go even more....&#13; Feel a deep sense of contentment and peace in your heart.&#13; ', ['readonly', 'size' => '120x5'])}} <input type="hidden" name="meth" value={{$array['method']->mid}}><br/>
           {{Form::textarea('intention', null,['placeholder' => 'Please enter your intention here.', 'size' => '120x5'])}}
        </div>
    </div>
    <script>
    
    </script>

    <input type="hidden" name="mid" value={{$array['method']->mid}}>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" name="submitButton" value="Previous"> 
        </div>
        <div class="col-md-4">
                <input type="submit" class="button-center" name="submitButton" value="Section Sumary">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" style="float:right" name="submitButton" value="Next">
        </div>
    </div>
</div>
{{Form::close()}}

@stop
