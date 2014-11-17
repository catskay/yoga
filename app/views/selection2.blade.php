@extends('layout.master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Method Selection</h1>
            </div>
<<<<<<< HEAD
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.navbar-header -->

          


=======
        </div>
>>>>>>> 71c50e045bf40a8e2a5fda47b6b8ca1c27b22f8e

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
<<<<<<< HEAD

                </select>
            </div>

                
        </select>


        </div>


    <form>
        <input id="post" name="post" type="hidden">
    </form>

        <p id="test" onclick="printResults()">Hello Friend</p>

=======
                </select>
            </div>

        </select>

    </div>
>>>>>>> 71c50e045bf40a8e2a5fda47b6b8ca1c27b22f8e

    <p id="test" onclick="printResults()">Hello Friend</p>

<<<<<<< HEAD

    function postResults(){

        var arr = $('#optgroupp').val();        
        
        $.ajax({ 
            type: "POST",
            url: "selector",
            datatype: "json",
            traditional: true,
            data: { 'arr': arr }              
        });

        var str = $.serialize(arr);
        var elem = document.getElementById("post");
        elem.value = str;

        

        return false;

    }

    
    </script>

    
    <div class="row">
        <div class="col-lg-12 col-md-offset-10">
            <a href="/yoga/public/selector">  <button type="button" class="btn btn-danger" onlick="postResults()">Continue</button> </a>
=======
    <script>

    function printEach(element){
        document.getElementById("test").innerHTML = element;
    }

    function printResults(){

        var arr = $('#optgroupp').val();        
        alert(arr);


        return false;
    }

    $("select").change(printResults);


    </script>
>>>>>>> 71c50e045bf40a8e2a5fda47b6b8ca1c27b22f8e

    <div class="row">
        <div class="col-lg-12 col-md-offset-10">
            <a href="/yoga/public/selector">  <button type="button" onclick="getResults()" class="btn btn-danger">Continue</button> </a>
        </div>

<<<<<<< HEAD
=======
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
>>>>>>> 71c50e045bf40a8e2a5fda47b6b8ca1c27b22f8e


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

