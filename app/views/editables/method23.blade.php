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
            {{Form::open(array('url' => 'method23'))}}
            {{Form::select('choose', array('neutral' => 'Neutral','general' => 'General', 'yogic' => 'Yogic'), 'neutral', array('onchange' => 'change()', 'id' => 'options'));}}<br/>
            {{Form::textarea('text', '    Choose one of the techniques below that best suits your audience. &#13; Incorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.&#13; -          Now allow yourself to enter the deepest state of letting go right now. &#13; -          Nothing to do or achieve.&#13; -          Open..empty.&#13; -          (pause)&#13; -          Feel yourself as a vast, spacious, sky of awareness.&#13; -          Rest into and as this space.&#13; -          (pause)&#13; -          Thoughts, images, sensations passing by like clouds on a clear blue sky.&#13; -          Be the space in which it is all happening. &#13;', ['size' => '120x15', 'value' => '    Choose one of the techniques below that best suits your audience. &#13; Incorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.&#13; -          Now allow yourself to enter the deepest state of letting go right now. &#13; -          Nothing to do or achieve.&#13; -          Open..empty.&#13; -          (pause)&#13; -          Feel yourself as a vast, spacious, sky of awareness.&#13; -          Rest into and as this space.&#13; -          (pause)&#13; -          Thoughts, images, sensations passing by like clouds on a clear blue sky.&#13; -          Be the space in which it is all happening. &#13;', 'id' => 'contents', 'readonly'])}}
            <input type="hidden" name="meth" value={{$array['method']->mid}}>


        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'neutral'){
            document.getElementById("contents").innerHTML = "Choose one of the techniques below that best suits your audience. \nIncorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.\n -  Now allow yourself to enter the deepest state of letting go right now. \n -          Nothing to do or achieve.\n -          Open..empty.\n -          (pause)\n -          Feel yourself as a vast, spacious, sky of awareness.\n -          Rest into and as this space.\n -          (pause)\n -          Thoughts, images, sensations passing by like clouds on a clear blue sky.\n -          Be the space in which it is all happening. \n"; 
            document.getElementById("contents").value = "Choose one of the techniques below that best suits your audience. \nIncorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.\n -  Now allow yourself to enter the deepest state of letting go right now. \n -          Nothing to do or achieve.\n -          Open..empty.\n -          (pause)\n -          Feel yourself as a vast, spacious, sky of awareness.\n -          Rest into and as this space.\n -          (pause)\n -          Thoughts, images, sensations passing by like clouds on a clear blue sky.\n -          Be the space in which it is all happening. \n"; 
        }
        if(document.getElementById("options").value == 'yogic'){
            document.getElementById("contents").innerHTML = "Choose one of the techniques below that best suits your audience. \nIncorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.\n -  Let your attention shift, and focus your inward gaze on the Third Eye and remain focused and steady in Ajna chakra consciousness.\n -   You have entered the sacred space of Shiva consciousness, where unmanifest potentiality has become manifest actuality........\n -   Establish yourself in the unmanifest part of your being.\n -   And allow the duality of mind to merge into the oneness of spirit.\n -   Settle into the silent source of your being.\n -   Let go in the experience so totally that you become the experience.\n -   Now bring your attention to back Ajna chakra, the command center.\n -   Feel the energy of Ida and Pingala, Shiva and Shakti, merging into the unified state of Oneness...\n -   Bring your attention to the pineal gland and ativate the elixir of immortality...Amrita.\n -   Feel as it floods your entire nervous system, bathing every cell in the luminous, healing light of divine Presence.\n"; 
            document.getElementById("contents").value = "Choose one of the techniques below that best suits your audience. \nIncorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.\n -  Let your attention shift, and focus your inward gaze on the Third Eye and remain focused and steady in Ajna chakra consciousness.\n -   You have entered the sacred space of Shiva consciousness, where unmanifest potentiality has become manifest actuality........\n -   Establish yourself in the unmanifest part of your being.\n -   And allow the duality of mind to merge into the oneness of spirit.\n -   Settle into the silent source of your being.\n -   Let go in the experience so totally that you become the experience.\n -   Now bring your attention to back Ajna chakra, the command center.\n -   Feel the energy of Ida and Pingala, Shiva and Shakti, merging into the unified state of Oneness...\n -   Bring your attention to the pineal gland and ativate the elixir of immortality...Amrita.\n -   Feel as it floods your entire nervous system, bathing every cell in the luminous, healing light of divine Presence.\n"; 

        }
        if(document.getElementById("options").value == 'general'){
            document.getElementById("contents").innerHTML = "Choose one of the techniques below that best suits your audience. \nIncorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.\n - Bring your attention to the center between your eyebrows and drop into the deepest level of relaxation...\n -   Here, there remains nothing to do or achieve, you have entered the domain of grace.\n -   In this domain of integration, you are witness of all that is happening but doing nothing to make it happen.\n -   All that can never be done by your doing can happen only in the non-doing presence of your being.\n -   Feel completely safe and comfortable as you hand yourself over to the power and protection of the Presence.\n -   Feel it.... experience it....be it....\n -   Hand over all fear, apprehension and anxiety about all that you want to change control and manage ....let go of all doing...\n -   Replace it with trust and faith in the Higher Power.\n -   Let your mind merge and melt into the presence and enter the sanctuary of silence.\n -   Remain empty and free from all doing.\n -   Feel yourself as time-transcendent presence, right now......\n "; 
            document.getElementById("contents").value = "Choose one of the techniques below that best suits your audience. &#13;Incorporate a few breaths of silence between each line or two, with a space of 8-10 breaths at the deepest point of your integration.&#13; - Bring your attention to the center between your eyebrows and drop into the deepest level of relaxation...&#13; -   Here, there remains nothing to do or achieve, you have entered the domain of grace.&#13; -   In this domain of integration, you are witness of all that is happening but doing nothing to make it happen.&#13; -   All that can never be done by your doing can happen only in the non-doing presence of your being.&#13; -   Feel completely safe and comfortable as you hand yourself over to the power and protection of the Presence.&#13; -   Feel it.... experience it....be it....&#13; -   Hand over all fear, apprehension and anxiety about all that you want to change control and manage ....let go of all doing...&#13; -   Replace it with trust and faith in the Higher Power.&#13; -   Let your mind merge and melt into the presence and enter the sanctuary of silence.&#13; -   Remain empty and free from all doing.&#13; -   Feel yourself as time-transcendent presence, right now......&#13; "; 

        }
   }
    </script>

    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-danger">Previous</button> 
        </div>
        <div class="col-md-4">
            <div class="wrapper">
                <input class="button-center" type = "submit" value="Section Summary">
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-danger" style="float:right">Next</button>
        </div>
    </div>
</div>
{{Form::close()}}

@stop
