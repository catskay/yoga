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
            {{Form::open(array('url'=>'method10'))}}
            {{Form::select('choose', array('general' => 'General', 'yogic' => 'Yogic'), 'general', array('onchange' => 'change()', 'id' => 'options'));}} <br/>
            {{ Form::textarea('text', 'As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;', ['id' => 'contents', 'value' => 'As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.&#13; -    Resolve to remain awake, staying in touch with the sound of my voice.&#13; -    Simply allow your entire body to respond to my words directly and non-mentally.&#13; -    Allow any disturbances, external or internal, to draw you more deeply within.&#13; -    (pause)&#13; -    Now shift from thinking and doing to feeling and being.&#13; -    Do absolutely nothing from now on.&#13; -    (pause)&#13;', 'size' => '120x16', 'readonly']) }}
            <input type="hidden" name="meth" value={{$array['method']->mid}}>

        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'yogic'){
         document.getElementById("contents").innerHTML = "Maintaining this inner stillness, gently cover yourself and if you wish place the eye pillow over your eyes...\n -   Adjust your body in a comfortable position but do not fall asleep.\n -   Throughout this entire period remain relaxed and motionless, alert and conscious.\n -   Stay in touch with my guidance at all times.\n -   Allow any disturbances, external or internal, to draw you deeper within.\n -   In Yoga Nidra you enter the subconscious pranic field.\n -   Let your mind merge and melt into the energy body and go beyond the boundaries of body and mind...\n -   Now shift from thinking and doing to feeling and being...(pause).\n -   Do absolutely nothing from now on. Simply relax.\n -   Drop into the deepest state of tranquility, stillness and peace in the Third Eye.\n -   Now your consciousness is in direct communion through your energy body.\n"; 
         document.getElementById("contents").value = "Maintaining this inner stillness, gently cover yourself and if you wish place the eye pillow over your eyes...\n -   Adjust your body in a comfortable position but do not fall asleep.\n -   Throughout this entire period remain relaxed and motionless, alert and conscious.\n -   Stay in touch with my guidance at all times.\n -   Allow any disturbances, external or internal, to draw you deeper within.\n -   In Yoga Nidra you enter the subconscious pranic field.\n -   Let your mind merge and melt into the energy body and go beyond the boundaries of body and mind...\n -   Now shift from thinking and doing to feeling and being...(pause).\n -   Do absolutely nothing from now on. Simply relax.\n -   Drop into the deepest state of tranquility, stillness and peace in the Third Eye.\n -   Now your consciousness is in direct communion through your energy body.\n"; 
     }
     
     if(document.getElementById("options").value == 'general'){
        document.getElementById("contents").innerHTML = " As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.\n -    Resolve to remain awake, staying in touch with the sound of my voice.\n -    Simply allow your entire body to respond to my words directly and non-mentally.\n -    Allow any disturbances, external or internal, to draw you more deeply within.\n -    (pause)\n -    Now shift from thinking and doing to feeling and being.\n -    Do absolutely nothing from now on.\n -    (pause)\n"; 
        document.getElementById("contents").value = " As we enter this next phase of Yoga Nidra, remain as motionless as possible. If you need to move or make an adjustment, do so mindfully and return to stillness as soon as you are able.\n -    Resolve to remain awake, staying in touch with the sound of my voice.\n -    Simply allow your entire body to respond to my words directly and non-mentally.\n -    Allow any disturbances, external or internal, to draw you more deeply within.\n -    (pause)\n -    Now shift from thinking and doing to feeling and being.\n -    Do absolutely nothing from now on.\n -    (pause)\n"; 

    }
}
</script>

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
