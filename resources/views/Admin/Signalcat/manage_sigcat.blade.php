@extends('Admin.master')
@section('content')

    <h3 class="text-center" style="color:green">
        <?php $message = Session::get('message');
            if(isset($message)){
                echo $message;
                Session::put('message','');
            }
        ?>
    </h3>
   
<style>
    .space {
    padding: 32px 3px;
}
.space h3 {
    padding-top: 0px;
    padding-bottom: 49px;
    color: #fff;
}
    </style>
    <div class="row">
        <div class="col-md-4">
        
            <div class="card">
                <div class="card-body">
                        <div class="space">
                            <h1 class="card-title"><i class="zmdi zmdi-network-setting"></i> Manage Signal</h1>
                            <div class="form-group row add">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Category Name" required>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary" type="submit" id="add">
                                            <i class="fa fa-plus"></i>
                                            ADD
                                    </button>
                                </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
          <div class="card">
                <div class="card-body">
                        {{ csrf_field() }}
                        <div class="table-responsive" >
                                <table id="data-table" class="table">
                                    <thead>
                                            <tr>
                                                <th width="30%" class="text-center">#Id</th>
                                                <th width="33%" class="text-center">Name</th>
                                                <th width="33%" class="text-center">Actions</th>
                                                </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($signalcat as $item)
                                            <tr class="item{{$item->id}}">
                                                <td class="text-center">{{$item->id}}</td>
                                                <td class="text-center">{{$item->name}}</td>
                                                
                                                <td class="text-center"><button class="edit-modal btn btn-info" data-id="{{$item->id}}"
                                                        data-name="{{$item->name}}">
                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                    </button>
                                                    <button class="delete-modal btn btn-danger" data-id="{{$item->id}}"
                                                        data-name="{{$item->name}}">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button></td>
                                        </tr>
                                        @endforeach
                                </tbody>
                        </table>
                        </div>
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
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                {{-- <label class="control-label col-sm-2" for="id">ID:</label> --}}
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="fid" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="n">
                                </div>
                            </div>
                        </form>
                        <div class="deleteContent">
                            Are you Sure you want to delete <span class="dname"></span> ? <span
                                class="hidden did"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn actionBtn">
                                <span id="footer_action_button" class='glyphicon'> </span>
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
   <script>
       $("#add").click(function() {
           $.ajax({
            type: 'post',
            url: '/addItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val()
            },
            success: function(data) {
                if ((data.errors)) {
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                } else {
                    $('.error').remove();
                    $('.table').append("<tr class='item" + data.id + "'><td class='text-center'>" + data.id + "</td><td class='text-center'>" + data.name + "</td><td class='text-center'><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                }
            },
        });
     $('#name').val('');
});
$(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function() {
    $.ajax({
                type: 'post',
                url: '/editItem',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#fid").val(),
                    'name': $('#n').val()
                },
                success: function(data) {
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
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
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
</script>
        <script>
            $('#data-table').dataTable( {
                    paging: false,
                    searching: false
                } );
            </script>
@endsection