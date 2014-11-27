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
            {{Form::open(array('url' => 'method24'))}}
            {{Form::select('choose', array('general' => 'General', 'yogic' => 'Yogic'), 'general', array('onchange' => 'change()', 'id' => 'options'));}}<br/>
            {{Form::textarea('text1', "  -   Here your intention and your affirmations are actualized and fulfilled with effortless ease. &#13;Now bring your intention into your awareness…", ['size' => '120x3', 'id' => 'content1', 'readonly','value' => " -   Here your intention and your affirmations are actualized and fulfilled with effortless ease.&#13;Now bring your intention into your awareness…"])}}<br/>

            {{ Form::textarea('intention', null, ['size' => '120x3', 'placeholder' => 'Please enter your custom intention here.']) }}<br/>
            {{Form::textarea('text2', "   -   Repeat your intention now three times..........(pause)&#13; -   If you do not have an intention, just remain silent and let spirit, who knows what is best, do it for you...&#13; -   If you have self-defeating patterns or habits that are holding you back that you want to be freed from, make that your intention now.......(allow time).&#13; -   Allow it to go to the deepest levels of recognition with no hesitation.&#13; -   Know that your higher self recognizes, honors and accepts your intention.&#13; -   Have faith and trust that it has been heard and is being acted upon by a higher power of the source within you.&#13; -   There is no need for you to do anything about it...&#13; -   Bring your attention back to the center between the eyebrows and feel all the energies of your body from all meridians activated, purified and balanced.&#13; -   All channels are open and the life force is flowing freely, healing the body and calming the mind...open your heart and feel content...&#13; -   Just experience (....pause...).&#13;", ['size' => '120x13', 'id' => 'content2', 'readonly' ,'value' => "               -   Repeat your intention now three times..........(pause)&#13; -   If you do not have an intention, just remain silent and let spirit, who knows what is best, do it for you...&#13; -   If you have self-defeating patterns or habits that are holding you back that you want to be freed from, make that your intention now.......(allow time).&#13; -   Allow it to go to the deepest levels of recognition with no hesitation.&#13; -   Know that your higher self recognizes, honors and accepts your intention.&#13; -   Have faith and trust that it has been heard and is being acted upon by a higher power of the source within you.&#13; -   There is no need for you to do anything about it...&#13; -   Bring your attention back to the center between the eyebrows and feel all the energies of your body from all meridians activated, purified and balanced.&#13; -   All channels are open and the life force is flowing freely, healing the body and calming the mind...open your heart and feel content...&#13; -   Just experience (....pause...).&#13;"])}}
            <input type="hidden" name="meth" value={{$array['method']->mid}}>

            
        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'yogic'){
            document.getElementById("content1").innerHTML = "-  Go deeper into the Third Eye, the mysterious command center and let it carry out your intentions, prayers and affirmations.\nNow bring your intention into your awareness…";
            document.getElementById("content1").value = "-  Go deeper into the Third Eye, the mysterious command center and let it carry out your intentions, prayers and affirmations.\nNow bring your intention into your awareness…";
            document.getElementById("content2").innerHTML = "-  Hold your intention firmly and clearly with deep feeling and faith.\n -   Establish it at the altar of your heart.\n -   Repeat your intention with the conviction of it being received by the Sadguru that guides you from darkness to light.\n -   Know that you are established in that part of your being where your intentions are actualized and fulfilled with effortless ease.\n -   In the Third Eye you are empowered to create what you pray for, visualize, and affirm.\n -   Your prayers and intentions are carried out at the deepest core of your being.\n -   Feel your intention is now being assimilated and adopted by all levels of your body and your being.\n -   Completely integrated, totally digested and fully actualized.\n ";
            document.getElementById("content2").value = "-  Hold your intention firmly and clearly with deep feeling and faith.\n -   Establish it at the altar of your heart.\n -   Repeat your intention with the conviction of it being received by the Sadguru that guides you from darkness to light.\n -   Know that you are established in that part of your being where your intentions are actualized and fulfilled with effortless ease.\n -   In the Third Eye you are empowered to create what you pray for, visualize, and affirm.\n -   Your prayers and intentions are carried out at the deepest core of your being.\n -   Feel your intention is now being assimilated and adopted by all levels of your body and your being.\n -   Completely integrated, totally digested and fully actualized.\n ";
        }
        if(document.getElementById("options").value == 'general'){
            document.getElementById("content1").innerHTML = "-   Here your intention and your affirmations are actualized and fulfilled with effortless ease.\nNow bring your intention into your awareness… ";
            document.getElementById("content1").value = "-   Here your intention and your affirmations are actualized and fulfilled with effortless ease.\nNow bring your intention into your awareness… ";
            document.getElementById("content2").innerHTML = " -   Repeat your intention now three times..........(pause)\n -   If you do not have an intention, just remain silent and let spirit, who knows what is best, do it for you...\n -   If you have self-defeating patterns or habits that are holding you back that you want to be freed from, make that your intention now.......(allow time).\n -   Allow it to go to the deepest levels of recognition with no hesitation.\n -   Know that your higher self recognizes, honors and accepts your intention.\n -   Have faith and trust that it has been heard and is being acted upon by a higher power of the source within you.\n -   There is no need for you to do anything about it...\n -   Bring your attention back to the center between the eyebrows and feel all the energies of your body from all meridians activated, purified and balanced.\n -   All channels are open and the life force is flowing freely, healing the body and calming the mind...open your heart and feel content...\n -   Just experience (....pause...).\n";
            document.getElementById("content1").value = "-   Here your intention and your affirmations are actualized and fulfilled with effortless ease.&#13;Now bring your intention into your awareness… ";

        }
    }
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
