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
            {{Form::select('choose', array('Option1' => 'Option 1', 'Option2' => 'Option 2'), 'Option1', array('onchange' => 'change()', 'id' => 'options'));}}
            {{Form::close()}}

            <p id="contents">
             - Now gradually, you can move, as if you are waking from a restful sleep. <br/> - Bend your knees and pull them closer to your chest, rock sideways gently.<br/> -    Take your time; do not hurry.<br/> -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.<br/> -   Bring your intention into your awareness again. Change nothing.<br/> -   Every time you find yourself in reaction, you are empowered to replace it with your intention.<br/> -   Now you can gradually move and begin to sit up with your eyes closed.<br/> -   Continue to stay deep in this deep inner experience.<br/> -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.<br/> -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...<br/>

            </p>
            <p>  Notice:<br/>
                -   How relaxed the body is... <br/>
                -   How soft the breath is...<br/>
                -   How quiet the heartbeat is...<br/>
                -   Be still...and be grateful.<br/>
                -   Know that you can easily enter here again and again.<br/>
                -   Now, you may gradually open your eyes. 
            </p>

        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'Option1'){
            document.getElementById("contents").innerHTML = " - Now gradually, you can move, as if you are waking from a restful sleep. <br/> - Bend your knees and pull them closer to your chest, rock sideways gently.<br/> -    Take your time; do not hurry.<br/> -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.<br/> -   Bring your intention into your awareness again. Change nothing.<br/> -   Every time you find yourself in reaction, you are empowered to replace it with your intention.<br/> -   Now you can gradually move and begin to sit up with your eyes closed.<br/> -   Continue to stay deep in this deep inner experience.<br/> -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.<br/> -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...<br/>"; }
        if(document.getElementById("options").value == 'Option2'){
            document.getElementById("contents").innerHTML = "·          Now slowly feel yourself rising to the surface of awareness as if rising from the depths of a vast, deep ocean.<br/> ·          (pause)<br/> ·          Deepen your breath.<br/> ·          (pause)<br/> ·          Slowly begin to come back to awareness of your physical body.<br/> ·          Feel the sensation of your body lying on the floor, the quality of the air as it touches your skin.<br/> ·          (pause)<br/> ·          When you feel the impulse, begin to move and stretch your body as if awakening from a restful sleep.<br/> ·          If the impulse is to remain still, do so.<br/> ·          When you are ready, gently roll onto your right side.<br/> ·          Add in drop down option [Receving your intention [space to insert customized intention]. Change nothing.<br/> ·          Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted.<br/> ·          (pause)<br/> ·          Slowly use the strength of the arms to bring yourself up to a comfortable seated position with the eyes closed.<br/> ·          Continue to stay deep in this inner experience.<br/> ·          Notice how relaxed the body is…<br/> ·          How soft the breath is…<br/> ·          How silent the mind is…<br/> ·          Be still and be grateful. Know that you can easily return here again and again.<br/> ·          Now you may gradually open your eyes.<br/> "; }
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
