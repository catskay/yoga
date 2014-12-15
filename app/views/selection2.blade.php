@extends('layout.named')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Method Selection</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
           <select id='optgroupp' multiple='multiple'>
                @foreach($arr as $section => $subsections)
                @foreach($subsections as $subsection => $methods)
                        <?php 
                        $sub = Subsection::where("ssname", "=", $subsection)->first();  
                        $r = $sub->r;
                        $g = $sub->g;
                        $b = $sub->b;
                        $str = '"color:rgb('.$r.','.$g.','.$b.')"';
                        $str2 = '"'.$section.'<br>'.$subsection.'"';
                        ?>
                 <optgroup label={{$str2}} color={{$str}}>
                    @foreach($methods as $method)
                         @if(in_array($method->mid,$methList))
                    <option style={{$str}} title = {{$keywords[$method->mid]}} value = {{$method->mid}} selected>{{$method->mname}}</option>
                        @else
                    <option style={{$str}} title = {{$keywords[$method->mid]}} value = {{$method->mid}}>{{$method->mname}}</option>
                        @endif
                    @endforeach
                </optgroup>
                @endforeach

                @endforeach

            </select>
        </div>
    </div>

    

    <div class="row">
        <p></p>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-offset-10">
           
          {{Form::open(array('action' => 'EditingController@showSelector')); }}
          {{Form::hidden('methodList', '', array('id' => 'hidden')); }}
         <a href="/yoga/public/selector">   
            <button type="submit"  onclick = "getResults()" class="btn btn-danger">Continue</button>
         </a> 

          <!-- {{Form::submit( 'Continue', array('class' => 'btn btn-edit-link'));}} -->
          {{Form::close(); }}

            
        </div>

    </div>
</div>




@stop

<script>

function printResults(){
    var arr = $('#optgroupp').val();        
    alert(arr);

    return false;
}


function getResults() {
    var results = $('#optgroupp').val().join();
    document.getElementById('hidden').value = results;
}

</script>



