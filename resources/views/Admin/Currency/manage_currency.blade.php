@extends('Admin.master')
@section('content')
     <header class="content__title">
        <a href=""data-toggle="modal" data-target="#modal-default" class="custom-button">AddCurrency</a>
    </header>

    <h3 class="text-center" style="color:green">
        <?php 
        //   $message = Session::get('message');
        //     if(isset($message)){
        //         echo $message;
        //         Session::put('message','');
        //     }
        ?>
    </h3>
    <div id="ajaxref">
    <div class="card" >
        <div class="card-body">
           <div class="table-responsive" >
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>created_at</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allcurrencies as $currency)
                    <tr class="item{{$currency->id}}">
                       <td>{{$loop->index + 1}}</td>
                            <td>{{$currency->title}}</td>
                            <td>{{$currency->image}}</td>
                             <td>{{$currency->created_at}}</td>
                            <td>
                            <a  data-id="{{$currency->id}}" data-title="{{$currency->title}}" data-img="{{$currency->image}}" class="btn btn-primary edit"><i class="fa fa-edit"></i></a>
                            <button class='delete-modal btn btn-danger' data-id="{{$currency->id}}" data-title="{{$currency->title}}" data-img="{{$currency->image}}" ><span class='glyphicon glyphicon-trash'></span> Delete</button>
                           
                            {{-- <form id="delete-form-{{ $currency->id }}" method="post" action="{{route('currency.destroy',$currency->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$currency->id }}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        {!!Form::open(['url'=>'updateItem','method' => 'post', 'id'=>'currency_update','enctype'=>'multipart/form-data','files' => 'true'])!!}
                       
                        <div class="form-group delhide">
                            
                            <input type="file" class="form-control" name="myimage">
                              
                                {{-- <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="img">
                                </div> --}}
                        </div>
                        <img id="myImage" class="img-responsive" src="" width="100" height="50" alt="">
                        <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="fid" name="id">
                                </div>
                        </div>
                            <div class="form-group">
                               
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="n" name="title">
                                </div>
                            </div>

                           
                            <button type="submit" class="btn upop" >
                                <span id="footer_action_button" class='glyphicon'> </span>
                            </button>
                                
                   {!!Form::close()!!}
                        <div class="modal-footer">
                            <button type="submit" class="btn actionBtn" >
                                <span id="footer_action_button" class='glyphicon'> </span>
                            </button>
                            <button type="button" class="btn btn-warning " data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                       
                        <div class="deleteContent">
                            Are you Sure you want to delete <span class="dname"></span> ? <span
                                class="hidden did"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="modal fade" id="modal-default" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Create Currency</h5>
                </div>
                <div class="modal-body">
                       {!!Form::open(['url' => '/storecurrency','method' => 'post','id'=>'currency_frm','enctype'=>'multipart/form-data'])!!}
                       <input type="file" class="form-control cimage" id="file" name="imagename">
                       <div class="form-group">
                            <div class="form-group">
                               
                            </div>
                       </div>
                    
                       <div class="form-group">
                        <input type="text" class="form-control form-control-sm currtitle" name ="title" placeholder="Category Title" required>
                        <i class="form-group__bar"></i>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link subcc">Save changes</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    <script>
   $(document).on('click', '.edit', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('update');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('title'));
        $('#img').val($(this).data('img'));
        var myImageId = $(this).data('img');
        $(".modal-body #myImage").attr("src",myImageId);
        $('#myModal').modal('show');
    });
    

//     $('.myupdate').on('click', function(e){
//     e.preventDefault();
//     var form = $(this);
//     var formdata = false;
//     if (window.FormData){
//         formdata = new FormData($("#currency_update")[0]);
//     }
   
//     var formAction = form.attr('action');
//     $.ajax({
//         url         : '/updateItem',
//         data        : formdata ? formdata : form.serialize(),
//         cache       : false,
//         contentType : false,
//         processData : false,
//         type        : 'POST',
//         success     : function(data, textStatus, jqXHR){
//             console.log(data);
//             //$('#ajaxref').load(location.href + ' #ajaxref');
//             // $('.table').append('<tr class="item'+data.id+'"><td></td><td>'+data.title+'</td><td>'+data.image+'</td><td>'+data.created_at+'</td><td><a href="" data-title="'+data.title+'" data-img="'+data.image+'"  data-id="'+data.id+'" class="btn btn-primary edit"  data-toggle="modal" data-target="#edit-modal-default"><i class="fa fa-edit"></i></a> <a  data-id="'+data.id+'" class="btn btn-danger del"><i class="fa fa-trash"></i></a></td></tr>');
//         }
//     });
// });
       
$('.subcc').on('click', function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = false;
    if (window.FormData){
        formdata = new FormData($("#currency_frm")[0]);
    }

    var formAction = form.attr('action');
    $.ajax({
        url         : '/storecurrency',
        data        : formdata ? formdata : form.serialize(),
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(data, textStatus, jqXHR){
            //console.log(data);
            //$('#ajaxref').load(location.href + ' #ajaxref');
            $('.table').append('<tr class="item'+data.id+'"><td></td><td>'+data.title+'</td><td>'+data.image+'</td><td>'+data.created_at+'</td><td><a href="" data-title="'+data.title+'" data-img="'+data.image+'"  data-id="'+data.id+'" class="btn btn-primary edit"  data-toggle="modal" data-target="#edit-modal-default"><i class="fa fa-edit"></i></a> <button class="delete-modal btn btn-danger" data-img="'+data.image+'" data-id=" '+ data.id +'" data-title="' + data.title + '" ><span class="glyphicon glyphicon-trash"></span> Delete</button></td></tr>');
        }
    });
});

$(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('#n').val($(this).data('title'));
        $('#img').val($(this).data('img'));
        var myImageId = $(this).data('img');
        $(".modal-body #myImage").attr("src",myImageId);
        $(".delhide").hide();
        $(".upop").hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });
    $('.modal-footer').on('click', '.delete', function() {
        var id =  $('.did').text();
        //alert(id);
        // $.post('/deleteItem/'+id,function(data){
        //      $('.item' + $('.did').text()).remove();
           
        // });
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text(),
                //'image': $('.did').text()
            },
            success: function(data) {
                 $('.item'+ $('.did').text()).remove();
                 console.log(data);
            }
        });
    });
    </script>
    {{-- <div class="modal fade" id="edit-modal-default" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Edit Category</h5>
                    </div>
                    <div class="modal-body">
                           {!!Form::open(['url'=>'currency/update','method' => 'post', 'id'=>'category_update'])!!}
                           {{method_field('PUT')}}
                           <div class="form-group">
                         <input type="text" class="form-control form-control-sm" id="title" name ="title" value="">
                            <i class="form-group__bar"></i>
                            <input type="hidden" class="form-control form-control-sm" id="id" name ="id" value="">
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status" id="status">
                            <option style="color:black">Select Status</option>
                                <option style="color:black" value="1">Active</option>
                                <option style="color:black" value="2">Deactive</option>
                           </select>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link">Update</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div> --}}

        {{-- <script>
            $(document).on('click','.edit',function(){
                var catid = $(this).attr('id');
                $.get('/catbyid/'+ catid, function(data){
                    $('#category_update').find('#title').val(data.title);
                    $('#category_update').find('#id').val(data.id);
                    $('#category_update').find('#status').val(data.status);
                });
            });
            $('#category_update').on('submit',function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url,data,function(data){
                    $('#category_update').trigger('reset');
                    //$('#allcategory').load(location.href + ' #allcategory');
                    window.location = "/category/";
                    //console.log(data);
                });

            });
        
        </script> --}}
        <script>
            $('#data-table').dataTable( {
                    paging: false,
                    searching: false
                } );
            </script>
@endsection