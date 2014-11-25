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
            {{Form::open(array('url' => 'method26'))}}
            {{Form::select('choose', array('HigherSelf' => 'Higher Self', 'Lineage' => 'Lineage'), 'HigherSelf', array('onchange' => 'change()', 'id' => 'options'));}} <br/>
            {{Form::textarea('text', "-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. &#13; -   The more often you go to your source, the easier it will be to return there and longer you can stay there.&#13; -   Feel the presence of your own spiritual guides, surrounding you and blessing you...&#13; -   Accept their blessing and grace...embody it and spread it wherever you go...&#13; -   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.&#13; -   You are the emissary of light and love.&#13; -   Carry it everywhere you go and to everyone you meet.&#13; -   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)&#13;Return to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.&#13; Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.&#13; Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya&#13; Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.&#13;", ['id' => 'contents', 'readonly', 'size' => '120x15', 'value' =>"-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. &#13; -   The more often you go to your source, the easier it will be to return there and longer you can stay there.&#13; -   Feel the presence of your own spiritual guides, surrounding you and blessing you...&#13; -   Accept their blessing and grace...embody it and spread it wherever you go...&#13; -   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.&#13; -   You are the emissary of light and love.&#13; -   Carry it everywhere you go and to everyone you meet.&#13; -   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)&#13;Return to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.&#13; Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.&#13; Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya&#13; Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.&#13;"])}}<br/>
            <input type="hidden" name="meth" value={{$array['method']->mid}}>
            
        </div>
    </div>
    <script>
    function change(){
        if(document.getElementById("options").value == 'HigherSelf'){
            document.getElementById("contents").innerHTML = "-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. \n -   The more often you go to your source, the easier it will be to return there and longer you can stay there.\n -   Feel the presence of your own spiritual guides, surrounding you and blessing you...\n -   Accept their blessing and grace...embody it and spread it wherever you go...\n -   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.\n -   You are the emissary of light and love.\n -   Carry it everywhere you go and to everyone you meet.\n -   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)\nReturn to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.\n Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.\n Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya\n Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.\n"; 
            document.getElementById("contents").value = "-   Establish yourself firmly in faith and trust to receive the grace, protection and guidance of the higher self within you. \n -   The more often you go to your source, the easier it will be to return there and longer you can stay there.\n -   Feel the presence of your own spiritual guides, surrounding you and blessing you...\n -   Accept their blessing and grace...embody it and spread it wherever you go...\n -   Now you have prepared the base from where you can carry out interactions with life and interpersonal relationships with the integrative power of love and the source within.\n -   You are the emissary of light and love.\n -   Carry it everywhere you go and to everyone you meet.\n -   If you have an area that you feel needs healing, physical, mental or emotional allow this light and love to flow into that area now...(pause)\nReturn to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.\n Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.\n Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya\n Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.\n"; 

        }

        if(document.getElementById("options").value == 'Lineage'){
           document.getElementById("contents").innerHTML = "- At this sacred moment, your whole being has made a major paradigm shift.\n -   Establish yourself in total trust and faith that remains free from any need to be in control.\n -   Feel totally unburdened and free to move in life with effortless ease.\n -   Feel the presence of our beloved Bapuji, Dadaji, and Gurudev...guide, protect and bless you..................\n -   Feel their energy and their grace fill you and surround you at all times.\n -   Reaffirm your intention once again.\n -   Do not hesitate, doubt or dispute it.\n -   Let it come naturally.\nReturn to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.\n Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.\n Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya\n Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.\n"; 
           document.getElementById("contents").value = "- At this sacred moment, your whole being has made a major paradigm shift.\n -   Establish yourself in total trust and faith that remains free from any need to be in control.\n -   Feel totally unburdened and free to move in life with effortless ease.\n -   Feel the presence of our beloved Bapuji, Dadaji, and Gurudev...guide, protect and bless you..................\n -   Feel their energy and their grace fill you and surround you at all times.\n -   Reaffirm your intention once again.\n -   Do not hesitate, doubt or dispute it.\n -   Let it come naturally.\nReturn to the Third Eye, the seat of the Sadguru within you, where energies from all the meridians come into deep unifica- tion, integration, harmony, balance. Establish a whole new relationship with reality, regardless of how it begins to show up in your life.\n Knowing that you are Soul, you can witness life's experiences, and let them pass by.  Right response and right actions will come through you. With that clarity, keep your heart open to all conditions.\n Now establish your connection with the Guru mantra: Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya, Om namo bhagavate vasudevaya\n Bring your forefinger and thumb together establishing the connection to the guru within, the Master you are connected to, the Lineage of the Masters, and the Guru mantra. This will reconnect you with the power of protection and guidance whenever you need it in everyday life.\n"; 
       }
   }
   </script>

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

{{Form::close()}}
@stop
