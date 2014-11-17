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
            {{Form::open(array('id' => 'optionSelection'))}}
            {{Form::select('choose', array('neutral' => 'Neutral','general' => 'General', 'yogic' => 'Yogic'), 'neutral', array('onchange' => 'change()', 'id' => 'options'));}}
            {{Form::close()}}

<p>
    Choose one of the techniques below that best suits your audience. <br/>
    Incorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.
</p>
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
        if(document.getElementById("options").value == 'neutral'){
            document.getElementById("contents").innerHTML = "·          Now allow yourself to enter the deepest state of letting go right now. <br/> ·          Nothing to do or achieve.<br/> ·          Open..empty.<br/> ·          (pause)<br/> ·          Feel yourself as a vast, spacious, sky of awareness.<br/> ·          Rest into and as this space.<br/> ·          (pause)<br/> ·          Thoughts, images, sensations passing by like clouds on a clear blue sky.<br/> ·          Be the space in which it is all happening. <br/>"; }
        if(document.getElementById("options").value == 'yogic'){
            document.getElementById("contents").innerHTML = "-  Let your attention shift, and focus your inward gaze on the Third Eye and remain focused and steady in Ajna chakra consciousness.<br/> -   You have entered the sacred space of Shiva consciousness, where unmanifest potentiality has become manifest actuality........<br/> -   Establish yourself in the unmanifest part of your being.<br/> -   And allow the duality of mind to merge into the oneness of spirit.<br/> -   Settle into the silent source of your being.<br/> -   Let go in the experience so totally that you become the experience.<br/> -   Now bring your attention to back Ajna chakra, the command center.<br/> -   Feel the energy of Ida and Pingala, Shiva and Shakti, merging into the unified state of Oneness...<br/> -   Bring your attention to the pineal gland and ativate the elixir of immortality...Amrita.<br/> -   Feel as it floods your entire nervous system, bathing every cell in the luminous, healing light of divine Presence.<br/>"; }
        if(document.getElementById("options").value == 'general'){
            document.getElementById("contents").innerHTML = "         - Bring your attention to the center between your eyebrows and drop into the deepest level of relaxation...<br/> -   Here, there remains nothing to do or achieve, you have entered the domain of grace.<br/> -   In this domain of integration, you are witness of all that is happening but doing nothing to make it happen.<br/> -   All that can never be done by your doing can happen only in the non-doing presence of your being.<br/> -   Feel completely safe and comfortable as you hand yourself over to the power and protection of the Presence.<br/> -   Feel it.... experience it....be it....<br/> -   Hand over all fear, apprehension and anxiety about all that you want to change control and manage ....let go of all doing...<br/> -   Replace it with trust and faith in the Higher Power.<br/> -   Let your mind merge and melt into the presence and enter the sanctuary of silence.<br/> -   Remain empty and free from all doing.<br/> -   Feel yourself as time-transcendent presence, right now......<br/> "; }
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
