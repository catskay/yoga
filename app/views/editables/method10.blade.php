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
            {{Form::select('choose', array('general' => 'General', 'yogic' => 'Yogic'), 'general', array('onchange' => 'change()', 'id' => 'options'));}} <br/>
            {{ Form::textarea('text', 'As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;', ['id' => 'contents', 'value' => 'As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;', 'size' => '120x16', 'readonly']) }}
            {{Form::close()}}

        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'yogic'){
         document.getElementById("contents").innerHTML = "Maintaining this inner stillness, gently cover yourself and if you wish place the eye pillow over your eyes...&#13; -   Adjust your body in a comfortable position but do not fall asleep.&#13; -   Throughout this entire period remain relaxed and motionless, alert and conscious.&#13; -   Stay in touch with my guidance at all times.&#13; -   Allow any disturbances, external or internal, to draw you deeper within.&#13; -   In Yoga Nidra you enter the subconscious pranic field.&#13; -   Let your mind merge and melt into the energy body and go beyond the boundaries of body and mind...&#13; -   Now shift from thinking and doing to feeling and being...(pause).&#13; -   Do absolutely nothing from now on. Simply relax.&#13; -   Drop into the deepest state of tranquility, stillness and peace in the Third Eye.&#13; -   Now your consciousness is in direct communion through your energy body.&#13;"; 
         document.getElementById("contents").value = "Maintaining this inner stillness, gently cover yourself and if you wish place the eye pillow over your eyes...&#13; -   Adjust your body in a comfortable position but do not fall asleep.&#13; -   Throughout this entire period remain relaxed and motionless, alert and conscious.&#13; -   Stay in touch with my guidance at all times.&#13; -   Allow any disturbances, external or internal, to draw you deeper within.&#13; -   In Yoga Nidra you enter the subconscious pranic field.&#13; -   Let your mind merge and melt into the energy body and go beyond the boundaries of body and mind...&#13; -   Now shift from thinking and doing to feeling and being...(pause).&#13; -   Do absolutely nothing from now on. Simply relax.&#13; -   Drop into the deepest state of tranquility, stillness and peace in the Third Eye.&#13; -   Now your consciousness is in direct communion through your energy body.&#13;"; 

     }
     
     if(document.getElementById("options").value == 'general'){
        document.getElementById("contents").innerHTML = " As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;"; 
        document.getElementById("contents").value = " As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;"; 

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
