@extends('layout.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Method Selection</h1>
            </div>

        </div>

        <div class="row">
            <div class="col-md-7">
                <select id='optgroupp' multiple='multiple'>
                    @foreach($arr as $section => $subsections)
                    @foreach($subsections as $subsection => $methods)
                    <optgroup label={{$subsection}}>
                        @foreach($methods as $method)
                        <option title = {{$section}} value = {{$method->mid}}>{{$method->mname}}</option>
                        @endforeach
                    </optgroup>
                    @endforeach

                    @endforeach

                </select>
            </div>

        </select>

    <script>

    function printResults(){

        var arr = $('#optgroupp').val();        
        alert(arr);


        return false;
    }

    </script>

    <div class="row">
        <div class="col-lg-12 col-md-offset-10">
            <a href="/yoga/public/selector">  <button type="button" onclick="getResults()" class="btn btn-danger">Continue</button> </a>
        </div>

    </div>
</div>

<p id="test">
</p>
<script>
function getResults2() {
     $.post(
            $( this ).prop( 'action' ),
            {
                "methods": $( '#optgroupp' ).val()
            },
            function( data ) {
                    alert("success");            },
            'json'
        );
 
        //.....
        //do anything else you might want to do
        //.....
 
        //prevent the form from actually submitting in browser
        return false;
    } );
}


function getResults() {
    var results = $('#optgroupp').val();
        var jsonString = JSON.stringify(results);
        // var jsonResults = json_encode($results);
        $.ajax({
         type: 'POST',
         url: "{{route('selector');}}",
         traditional: true,
         dataType: "json",
         data: {methods : jsonString},
         success: function (data) {
             alert("success");
         },
         error: function(xhr,err){
            alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
            alert("responseText: "+xhr.responseText);
        }
    })
    }

    </script>

@stop

