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
            {{Form::select('choose', array('general' => 'General', 'yogic' => 'Yogic'), 'general', array('onchange' => 'change()', 'id' => 'options'));}}
            {{Form::close()}}

            <p id="content1">
                -   Here your intention and your affirmations are actualized and fulfilled with effortless ease.
            </p>
            -   Now bring your intention into your awareness… <br/>
            {{Form::open(array('id' => 'formText'))}}
            {{ Form::textarea('notes', null, ['size' => '80x3', 'placeholder' => 'Please enter your custom intention here.']) }}
            {{Form::close()}}
            <p id="content2">
                -   Repeat your intention now three times..........(pause)<br/>
                -   If you do not have an intention, just remain silent and let spirit, who knows what is best, do it for you...<br/>
                -   If you have self-defeating patterns or habits that are holding you back that you want to be freed from, make that your intention now.......(allow time).<br/>
                -   Allow it to go to the deepest levels of recognition with no hesitation.<br/>
                -   Know that your higher self recognizes, honors and accepts your intention.<br/>
                -   Have faith and trust that it has been heard and is being acted upon by a higher power of the source within you.<br/>
                -   There is no need for you to do anything about it...<br/>
                -   Bring your attention back to the center between the eyebrows and feel all the energies of your body from all meridians activated, purified and balanced.<br/>
                -   All channels are open and the life force is flowing freely, healing the body and calming the mind...open your heart and feel content...<br/>
                -   Just experience (....pause...).<br/>
            </p>

        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'yogic'){
            document.getElementById("content1").innerHTML = "-  Go deeper into the Third Eye, the mysterious command center and let it carry out your intentions, prayers and affirmations.";
            document.getElementById("content2").innerHTML = "-  Hold your intention firmly and clearly with deep feeling and faith.<br/> -   Establish it at the altar of your heart.<br/> -   Repeat your intention with the conviction of it being received by the Sadguru that guides you from darkness to light.<br/> -   Know that you are established in that part of your being where your intentions are actualized and fulfilled with effortless ease.<br/> -   In the Third Eye you are empowered to create what you pray for, visualize, and affirm.<br/> -   Your prayers and intentions are carried out at the deepest core of your being.<br/> -   Feel your intention is now being assimilated and adopted by all levels of your body and your being.<br/> -   Completely integrated, totally digested and fully actualized.<br/> ";
        }
        if(document.getElementById("options").value == 'general'){
            document.getElementById("content1").innerHTML = "-   Here your intention and your affirmations are actualized and fulfilled with effortless ease. ";
            document.getElementById("content2").innerHTML = " -   Repeat your intention now three times..........(pause)<br/> -   If you do not have an intention, just remain silent and let spirit, who knows what is best, do it for you...<br/> -   If you have self-defeating patterns or habits that are holding you back that you want to be freed from, make that your intention now.......(allow time).<br/> -   Allow it to go to the deepest levels of recognition with no hesitation.<br/> -   Know that your higher self recognizes, honors and accepts your intention.<br/> -   Have faith and trust that it has been heard and is being acted upon by a higher power of the source within you.<br/> -   There is no need for you to do anything about it...<br/> -   Bring your attention back to the center between the eyebrows and feel all the energies of your body from all meridians activated, purified and balanced.<br/> -   All channels are open and the life force is flowing freely, healing the body and calming the mind...open your heart and feel content...<br/> -   Just experience (....pause...).<br/>";
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
