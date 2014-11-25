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
            Choose up to four pairs of opposites.<br>
            {{Form::open(array('url' => 'method19')) }}
            <form role="form">
                <textarea name="text1" value="In this deep state of awareness, allow the following polar experiences and their 
            associations to arise and dissolve...simply allowing all experiences to move through 
            without preference, labels or judgment. By remaining witness you are releasing your 
            identification with pre-programmed thoughts and feelings." rows=5 cols=100 readonly>In this deep state of awareness, allow the following polar experiences and their associations to arise and dissolve...simply allowing all experiences to move through without preference, labels or judgment. By remaining witness you are releasing your identification with pre-programmed thoughts and feelings.</textarea><br>
                <input type="checkbox" name="checkgroup[]" value="Pain and Pleasure"> Pain and Pleasure<br>
                <input type="checkbox" name="checkgroup[]" value="Anger and Peace"> Anger and Peace<br>
                <input type="checkbox" name="checkgroup[]" value="Sadness and Joy"> Sadness and Joy<br>
                <input type="checkbox" name="checkgroup[]" value="Crying and Laughter"> Crying and Laughter<br>
                <textarea name="text2" value="Maintain detached awareness as though dispassionately observing a movie..." rows=1 cols = 100 readonly>Maintain detached awareness as though dispassionately observing a movie...</textarea><br>
                <input type="checkbox" name="checkgroup[]" value="Fear and Safety"> Fear and Safety<br>
                <input type="checkbox" name="checkgroup[]" value="Agitation and Calmness"> Agitation and Calmness<br>
                <input type="checkbox" name="checkgroup[]" value="Sad and Happy"> Sad and Happy<br>
                <input type="checkbox" name="checkgroup[]" value="Hate and Love"> Hate and Love<br>
                <input type="checkbox" name="checkgroup[]" value="Violent and Tender"> Violent and Tender<br>
                <input type="checkbox" name="checkgroup[]" value="Helpless and Powerful"> Helpless and Powerful<br>
                <input type="checkbox" name="checkgroup[]" value="Suspicious and Trusting"> Suspicious and Trusting<br>
                <input type="checkbox" name="checkgroup[]" value="Disgusted and Delighted"> Disgusted and Delighted<br>
                Choose your own pair of opposites <input type="text" name="custom"><br>
                <textarea name="text3" rows=1 cols = 100 value="...Gradually allow visualization and accompanying sensations to fade as you 
                bring your attention back to the Third Eye." readonly>...Gradually allow visualization and accompanying sensations to fade as you bring your attention back to the Third Eye.</textarea><br>
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