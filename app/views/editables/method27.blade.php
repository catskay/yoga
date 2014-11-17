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
            {{Form::select('choose', array('Option1' => 'Option 1', 'Option2' => 'Option 2'), 'Option1', array('onchange' => 'change()', 'id' => 'options'));}}<br/>
            {{Form::textarea('text', " - Now gradually, you can move, as if you are waking from a restful sleep. &#13; - Bend your knees and pull them closer to your chest, rock sideways gently.&#13; -    Take your time; do not hurry.&#13; -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.&#13; -   Bring your intention into your awareness again. Change nothing.&#13; -   Every time you find yourself in reaction, you are empowered to replace it with your intention.&#13; -   Now you can gradually move and begin to sit up with your eyes closed.&#13; -   Continue to stay deep in this deep inner experience.&#13; -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.&#13; -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...&#13;          Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;", ['value' => " - Now gradually, you can move, as if you are waking from a restful sleep. &#13; - Bend your knees and pull them closer to your chest, rock sideways gently.&#13; -    Take your time; do not hurry.&#13; -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.&#13; -   Bring your intention into your awareness again. Change nothing.&#13; -   Every time you find yourself in reaction, you are empowered to replace it with your intention.&#13; -   Now you can gradually move and begin to sit up with your eyes closed.&#13; -   Continue to stay deep in this deep inner experience.&#13; -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.&#13; -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...&#13; Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;", 'size' => '120x15', 'id' => 'contents', 'readonly'])}}
             {{Form::close()}}
        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'Option1'){
            document.getElementById("contents").innerHTML = " - Now gradually, you can move, as if you are waking from a restful sleep. &#13; - Bend your knees and pull them closer to your chest, rock sideways gently.&#13; -    Take your time; do not hurry.&#13; -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.&#13; -   Bring your intention into your awareness again. Change nothing.&#13; -   Every time you find yourself in reaction, you are empowered to replace it with your intention.&#13; -   Now you can gradually move and begin to sit up with your eyes closed.&#13; -   Continue to stay deep in this deep inner experience.&#13; -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.&#13; -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...&#13;          Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;"; 
            document.getElementById("contents").value = " - Now gradually, you can move, as if you are waking from a restful sleep. &#13; - Bend your knees and pull them closer to your chest, rock sideways gently.&#13; -    Take your time; do not hurry.&#13; -   Then just turn onto your right side and curl into a fetal position.....feel the safety, comfort and protection of the womb of existence.&#13; -   Bring your intention into your awareness again. Change nothing.&#13; -   Every time you find yourself in reaction, you are empowered to replace it with your intention.&#13; -   Now you can gradually move and begin to sit up with your eyes closed.&#13; -   Continue to stay deep in this deep inner experience.&#13; -   Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted to connect you with your intention.&#13; -   Become aware of your body...and bring a deep sense of peace and contentment with you as you bring awareness back to the body...&#13;          Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;"; 
        }
        if(document.getElementById("options").value == 'Option2'){
            document.getElementById("contents").innerHTML = "-  Now slowly feel yourself rising to the surface of awareness as if rising from the depths of a vast, deep ocean.&#13; -  (pause)&#13; -  Deepen your breath.&#13; -  (pause)&#13; -  Slowly begin to come back to awareness of your physical body.&#13; -  Feel the sensation of your body lying on the floor, the quality of the air as it touches your skin.&#13; -  (pause)&#13; -  When you feel the impulse, begin to move and stretch your body as if awakening from a restful sleep.&#13; -  If the impulse is to remain still, do so.&#13; -  When you are ready, gently roll onto your right side.&#13; -  Add in drop down option [Receving your intention [space to insert customized intention]. Change nothing.&#13; -  Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted.&#13; -  (pause)&#13; -  Slowly use the strength of the arms to bring yourself up to a comfortable seated position with the eyes closed.&#13; -  Continue to stay deep in this inner experience.&#13; -  Notice how relaxed the body is…&#13; -  How soft the breath is…&#13; -  How silent the mind is…&#13; -  Be still and be grateful. Know that you can easily return here again and again.&#13; -  Now you may gradually open your eyes.&#13; Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;"; 
            document.getElementById("contents").value = "-  Now slowly feel yourself rising to the surface of awareness as if rising from the depths of a vast, deep ocean.&#13; -  (pause)&#13; -  Deepen your breath.&#13; -  (pause)&#13; -  Slowly begin to come back to awareness of your physical body.&#13; -  Feel the sensation of your body lying on the floor, the quality of the air as it touches your skin.&#13; -  (pause)&#13; -  When you feel the impulse, begin to move and stretch your body as if awakening from a restful sleep.&#13; -  If the impulse is to remain still, do so.&#13; -  When you are ready, gently roll onto your right side.&#13; -  Add in drop down option [Receving your intention [space to insert customized intention]. Change nothing.&#13; -  Regardless of what you consciously recognize that has or has not changed, know that something deep within has shifted.&#13; -  (pause)&#13; -  Slowly use the strength of the arms to bring yourself up to a comfortable seated position with the eyes closed.&#13; -  Continue to stay deep in this inner experience.&#13; -  Notice how relaxed the body is…&#13; -  How soft the breath is…&#13; -  How silent the mind is…&#13; -  Be still and be grateful. Know that you can easily return here again and again.&#13; -  Now you may gradually open your eyes.&#13; Notice:&#13; -   How relaxed the body is... &#13; -   How soft the breath is...&#13; -   How quiet the heartbeat is...&#13; -   Be still...and be grateful.&#13; -   Know that you can easily enter here again and again.&#13; -   Now, you may gradually open your eyes. &#13;"; 
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
