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
            {{Form::open(array('url' => 'method1'))}}
            {{Form::select('choose', array('Option1' => 'Option 1', 'Option2' => 'Option 2'), 'Option1', array('onchange' => 'change()', 'id' => 'options'));}}<br/>
            {{Form::textarea('text', "-   Close your eyes and allow your attention to turn inward.&#13; -   Bring your attention to the breath.&#13; -   Feel the body beginning to relax with each progressive exhalation.&#13; -   Let's take a deep breath in together and chant the sound of Om.&#13; -   (Om)&#13; -   Allow the vibrational impact of the sound to bring outwardly focused attention inward.&#13; ", 'size' => '120x15', 'id' => 'contents', 'readonly'])}}
            <input type="hidden" name="meth" value={{$array['method']->mid}}>

        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'Option1'){
          document.getElementById("contents").innerHTML = "-   Close your eyes and allow your attention to turn inward.\n -   Bring your attention to the breath.\n -   Feel the body beginning to relax with each progressive exhalation.\n -   Let's take a deep breath in together and chant the sound of Om.\n -   (Om)\n -   Allow the vibrational impact of the sound to bring outwardly focused attention inward.\n";
         document.getElementById("contents").value = "-   Close your eyes and allow your attention to turn inward.\n -   Bring your attention to the breath.\n -   Feel the body beginning to relax with each progressive exhalation.\n -   Let's take a deep breath in together and chant the sound of Om.\n -   (Om)\n -   Allow the vibrational impact of the sound to bring outwardly focused attention inward.\n";
        }
        if(document.getElementById("options").value == 'Option2'){
            document.getElementById("contents").innerHTML = "-  Close your eyes and allow your attention to turn inward.\n -   Bring your attention to the breath.\n -   Feel the body beginning to relax with each progressive exhalation.\n -   We will chant a continuous Om together.\n -   As you chant, let the sound come from deep in your belly. When you run out of breath, take another full breath in and begin again. We will repeat three times.\n -   Let's begin.\n -   Take a full breath in (Om).\n -   Come to silence.\n -   Sense sound dissolving into silence.\n -   Merge into that silent space.\n";
            document.getElementById("contents").value = "-  Close your eyes and allow your attention to turn inward.\n -   Bring your attention to the breath.\n -   Feel the body beginning to relax with each progressive exhalation.\n -   We will chant a continuous Om together.\n -   As you chant, let the sound come from deep in your belly. When you run out of breath, take another full breath in and begin again. We will repeat three times.\n -   Let's begin.\n -   Take a full breath in (Om).\n -   Come to silence.\n -   Sense sound dissolving into silence.\n -   Merge into that silent space.\n";
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
