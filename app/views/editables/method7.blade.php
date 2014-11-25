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
            
            {{Form::open(array('url' => 'method7')) }}
            <form role="form">
                <input type="checkbox" name="checkgroup[]" value="Submerge yourself into the sensations that are present in the posture."> Submerge yourself into the sensations that are present in the posture.<br>
                <input type="checkbox" name="checkgroup[]" value="Immerse yourself fully in the feeling that is present."> Immerse yourself fully in the feeling that is present.<br>
                <input type="checkbox" name="checkgroup[]" value="Remember that you are exercising your awareness and increasing your sensitivity as well as exercising your body."> Remember that you are exercising your awareness and increasing your sensitivity as well as exercising your body.<br>
                <input type="checkbox" name="checkgroup[]" value="As you encounter your physical boundary use it to discover the invisible psychic boundary that lies behind it."> As you encounter your physical boundary use it to discover the invisible psychic boundary that lies behind it.<br>
                <input type="checkbox" name="checkgroup[]" value="Encounter your deliberate deepening stretch with detached attention."> Encounter your deliberate deepening stretch with detached attention.<br>
                <input type="checkbox" name="checkgroup[]" value="Become more fully engaged in experiencing the stretch rather than resisting or reacting to it.">Become more fully engaged in experiencing the stretch rather than resisting or reacting to it.<br>
                <input type="checkbox" name="checkgroup[]" value="Breathe into the stretch, let it release defensive tension and create an opening for you to go deeper and release hidden tensions and blocks."> Breathe into the stretch, let it release defensive tension and create an opening for you to go deeper and release hidden tensions and blocks.<br>
                <input type="checkbox" name="checkgroup[]" value="Sense all sensations, feel all that is revealed, resist nothing, hold onto nothing, remain witness to all that is in passing."> Sense all sensations, feel all that is revealed, resist nothing, hold onto nothing, remain witness to all that is in passing.<br>
                <input type="checkbox" name="checkgroup[]" value="Pay close detached attention to every movement and every sensation that accompanies it."> Pay close detached attention to every movement and every sensation that accompanies it.<br>
                <input type="checkbox" name="checkgroup[]" value="Choice for or against what is present in the form of sensation creates tension and conflict. Choice creates duality; choiceless awareness creates unity."> Choice for or against what is present in the form of sensation creates tension and conflict. Choice creates duality; choiceless awareness creates unity.<br>
                <input type="checkbox" name="checkgroup[]" value="When you are totally absorbed and fully engaged in the flood of energy, the Presence appears."> When you are totally absorbed and fully engaged in the flood of energy, the Presence appears.<br>
                <input type="checkbox" name="checkgroup[]" value="The posture is not a means to an end. It is the end in itself. It moves from moment to moment deeply engaged fulfilling movement from moment to moment."> The posture is not a means to an end. It is the end in itself. It moves from moment to moment deeply engaged fulfilling movement from moment to moment.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel your feeling more fully. Do not think about it. Thinking makes it mind modified feeling and purity is lost."> Feel your feeling more fully. Do not think about it. Thinking makes it mind modified feeling and purity is lost.<br>
                <input type="checkbox" name="checkgroup[]" value="The more you can focus on your feeling, the stronger and clearer it will become."> The more you can focus on your feeling, the stronger and clearer it will become.<br>
                <input type="checkbox" name="checkgroup[]" value="As your focus and feeling grows stronger and gains momentum it will penetrate and permeate every muscle, cell, nerve."> As your focus and feeling grows stronger and gains momentum it will penetrate and permeate every muscle, cell, nerve.<br>
                <input type="checkbox" name="checkgroup[]" value="Bring your expanding field of sensitivity to the areas in your body that are depleted, starved and less sensitive."> Bring your expanding field of sensitivity to the areas in your body that are depleted, starved and less sensitive.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel yourself descending down, into the stillness beneath the mind."> Feel yourself descending down, into the stillness beneath the mind.<br>
                <input type="checkbox" name="checkgroup[]" value="All excess tension and holding carried out with each exhaling breath."> All excess tension and holding carried out with each exhaling breath.<br>
                <input type="checkbox" name="checkgroup[]" value="Enter the deepest state of letting go right now."> Enter the deepest state of letting go right now.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel what is present without labels or comments from your mind."> Feel what is present without labels or comments from your mind.<br>
                <input type="checkbox" name="checkgroup[]" value="Allow the commentary of the mind to dissolve into sensation."> Allow the commentary of the mind to dissolve into sensation.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel yourself empty...open."> Feel yourself empty...open.<br>
                <input type="checkbox" name="checkgroup[]" value="Let go of that which you no longer need. Soften and release."> Let go of that which you no longer need. Soften and release.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel yourself held in absolute stillness."> Feel yourself held in absolute stillness.<br>
                <input type="checkbox" name="checkgroup[]" value="Allowing the mind to melt and merge...dissolve and disappear into stillness."> Allowing the mind to melt and merge...dissolve and disappear into stillness.<br>
                <input type="checkbox" name="checkgroup[]" value="Be completely absorbed by the energetic impact washing through."> Be completely absorbed by the energetic impact washing through.<br>
                <input type="checkbox" name="checkgroup[]" value="Let go...let go even more."> Let go...let go even more.<br>
                <input type="checkbox" name="checkgroup[]" value="Relax...relax."> Relax...relax.<br>
                <input type="checkbox" name="checkgroup[]" value="Disappear into the vast spacious background of experience."> Disappear into the vast spacious background of experience.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel your outward attention moving inward."> Feel your outward attention moving inward.<br>
                <input type="checkbox" name="checkgroup[]" value="Drop from thinking about the experience to being the experience."> Drop from thinking about the experience to being the experience.<br>
                <input type="checkbox" name="checkgroup[]" value="Feel your attention expanding to include your whole body. Feeling more, thinking less."> Feel your attention expanding to include your whole body. Feeling more, thinking less.<br>
                <input type="checkbox" name="checkgroup[]" value="Experience the body as particles of energy suspended in space. Tingling…vibrating."> Experience the body as particles of energy suspended in space. Tingling…vibrating.<br>
                <input type="checkbox" name="checkgroup[]" value="Release any struggle, any effort to make anything happen. Enter into a state of complete non-doing."> Release any struggle, any effort to make anything happen. Enter into a state of complete non-doing.<br>
                <input type="checkbox" name="checkgroup[]" value="Let your attention lead you into total absorption."> Let your attention lead you into total absorption.<br>                
                <input type="hidden" name="meth" value={{$array['method']->mid}}>
            </div>
        </div>

    <input type="hidden" name="mid" value={{$array['method']->mid}}>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" name="submitButton" value="Previous"> 
        </div>
        <div class="col-md-4">
            <div class="wrapper">
                <input type="submit" class="button-center" name="submitButton" value="Section Sumary">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" style="float:right" name="submitButton" value="Next">
        </div>
    </div>
</div>
 
{{Form::close() }} 
@stop