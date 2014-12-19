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
            <br></br><strong>Choose up to five images.</strong><br></br>
            {{Form::open(array('url' => 'method20')) }}
            <form role="form" id="options" name="options" type="post">
                <textarea name="text1" value="Resting in witness consciousness, allow yourself to receive the following  images and experiences.
Judge nothing, remaining unconditionally open and present to all that passes in the field of awareness." rows=5 cols=100 readonly>Resting in witness consciousness, allow yourself to receive the following  images and experiences.
Judge nothing, remaining unconditionally open and present to all that passes in the field of awareness.</textarea><br>
                <input type="checkbox" name="checkgroup[]" value="Church bells ringing"> Church bells ringing<br>
                <input type="checkbox" name="checkgroup[]" value="Snow capped mountains"> Snow capped mountains<br>
                <input type="checkbox" name="checkgroup[]" value="A hive of honey bees"> A hive of honey bees<br>
                <input type="checkbox" name="checkgroup[]" value="The flame of a candle"> The flame of a candle<br>
                <input type="checkbox" name="checkgroup[]" value="Torrential rain"> Torrential rain<br>
                <input type="checkbox" name="checkgroup[]" value="Swimming pool"> Swimming pool<br>
                <input type="checkbox" name="checkgroup[]" value="Swan gliding on a placid lake"> Swan gliding on a placid lake<br>
                <input type="checkbox" name="checkgroup[]" value="Golden spider web"> Golden spider web<br>
                <input type="checkbox" name="checkgroup[]" value="Phoenix rising out of its own ashes"> Phoenix rising out of its own ashes<br>
                <input type="checkbox" name="checkgroup[]" value="Your breath"> Your breath<br>
                <input type="checkbox" name="checkgroup[]" value="Rolling hills"> Rolling hills<br>
                <input type="checkbox" name="checkgroup[]" value="A coiled serpent"> A coiled serpent<br>
                <input type="checkbox" name="checkgroup[]" value="A pink rose"> A pink rose<br>
                <input type="checkbox" name="checkgroup[]" value="Sunrise on a desert"> Sunrise on a desert<br>
                <input type="checkbox" name="checkgroup[]" value="Crescent moon"> Crescent moon<br>
                <input type="checkbox" name="checkgroup[]" value="A tiger"> A tiger<br>
                <input type="checkbox" name="checkgroup[]" value="Ocean waves"> Ocean waves<br>
                <input type="checkbox" name="checkgroup[]" value="Sunset on the ocean"> Sunset on the ocean<br>
                <input type="checkbox" name="checkgroup[]" value="A skeleton"> A skeleton<br>
                <input type="checkbox" name="checkgroup[]" value="Endless desert"> Endless desert<br>
                <input type="checkbox" name="checkgroup[]" value="Dawn of day"> Dawn of day<br>
                <input type="checkbox" name="checkgroup[]" value="A star in the sky"> A star in the sky<br>
                <input type="checkbox" name="checkgroup[]" value="Coffin beside a grave"> Coffin beside a grave<br>
                <input type="checkbox" name="checkgroup[]" value="Morning dew"> Morning dew<br>
                <input type="checkbox" name="checkgroup[]" value="Laughing Buddha"> Laughing Buddha<br>
                <input type="checkbox" name="checkgroup[]" value="Lions and lambs resting together"> Lions and lambs resting together<br>
                <input type="checkbox" name="checkgroup[]" value="A cocoon"> A cocoon<br>
                <input type="checkbox" name="checkgroup[]" value="Soaring flock of birds"> Soaring flock of birds<br>
                <input type="checkbox" name="checkgroup[]" value="Butterflies"> Butterflies<br>
                <input type="checkbox" name="checkgroup[]" value="Bonfire at night"> Bonfire at night<br>
                <input type="checkbox" name="checkgroup[]" value="Waves crashing on shore"> Waves crashing on shore<br>
                <input type="checkbox" name="checkgroup[]" value="A crocodile"> A crocodile<br>
                <input type="checkbox" name="checkgroup[]" value="A deer"> A deer<br>
                <input type="checkbox" name="checkgroup[]" value="Symbol for Om"> Symbol for Om<br>
                <input type="checkbox" name="checkgroup[]" value="A cave"> A cave<br>
                <input type="checkbox" name="checkgroup[]" value="Inverted red triangle"> Inverted red triangle<br>
                <input type="checkbox" name="checkgroup[]" value="6-pointed star"> 6-pointed star<br>
                Choose your own image <input type="text" name="custom"><br>
                <textarea name="text2" rows=1 cols = 100 value="And now be still.......still in that black space behind the forehead and observe what passes.......witnessing unattached to all that passes......if nothing appears, just be aware of that.....
                Be totally present.....completely absorbed.....(pause 5-7 breaths)." readonly>And now be still.......still in that black space behind the forehead and observe what passes.......witnessing unattached to all that passes......if nothing appears, just be aware of that.....
                Be totally present.....completely absorbed.....(pause 5-7 breaths).</textarea><br>
                <input type="hidden" name="meth" value={{$array['method']->mid}}>
            </div>
        </div>

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

    <script>

    var checkboxes = $("input[type='checkbox']");
    var submitButton = $("input[type='submit']");

    submitButton.attr("disabled",!checkboxes.is(":checked"));

    checkboxes.click(function(){
        submitButton.attr("disabled",!checkboxes.is(":checked"));
    });

</script>

    {{Form::close() }}



    @stop