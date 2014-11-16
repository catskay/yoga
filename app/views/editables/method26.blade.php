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
            {{Form::select('choose', array('HigherSelf' => 'Higher Self', 'Lineage' => 'Lineage'), 'HigherSelf', array('onchange' => 'change()', 'id' => 'options'));}}
            {{Form::close()}}

            <p id="contents">
-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. <br/>
-   The more often you go to your source, the easier it will be to return there and longer you can stay there.<br/>
-   Feel the presence of your own spiritual guides, surrounding you and blessing you...<br/>
-   Accept their blessing and grace...embody it and spread it wherever you go...<br/>
-   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.<br/>
-   You are the emissary of light and love.<br/>
-   Carry it everywhere you go and to everyone you meet.<br/>
-   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)<br/>

            </p>
            <p>
Return to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance.
Establish a whole new relationship with reality, regardless of how it begins to show up in your life.
</p>
    <p>
Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you.
With that clarity, keep your heart open to all conditions.
</p>
<p>
Now establish your connection with the Guru mantra:
Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya
</p>
    <p>
Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.

            </p>


        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'HigherSelf'){
            document.getElementById("contents").innerHTML = "-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. <br/> -   The more often you go to your source, the easier it will be to return there and longer you can stay there.<br/> -   Feel the presence of your own spiritual guides, surrounding you and blessing you...<br/> -   Accept their blessing and grace...embody it and spread it wherever you go...<br/> -   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.<br/> -   You are the emissary of light and love.<br/> -   Carry it everywhere you go and to everyone you meet.<br/> -   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)<br/>"; }

        if(document.getElementById("options").value == 'Lineage'){
             document.getElementById("contents").innerHTML = "- At this sacred moment, your whole being has made a major paradigm shift.<br/> -   Establish yourself in total trust and faith that remains free from any need to be in control.<br/> -   Feel totally unburdened and free to move in life with effortless ease.<br/> -   Feel the presence of our beloved Bapuji, Dadaji, and Gurudev...guide, protect and bless you..................<br/> -   Feel their energy and their grace fill you and surround you at all times.<br/> -   Reaffirm your intention once again.<br/> -   Do not hesitate, doubt or dispute it.<br/> -   Let it come naturally.<br/>"; }
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
