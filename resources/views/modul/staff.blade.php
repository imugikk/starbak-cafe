@extends('layout.admin')

@section('title', 'Staff')


@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Staff</h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <form id="filter_content" enctype="multipart/form-data" method="post" action="/staff/store">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="NIK" class="form-label">NIK</label>
                                        <input type="number" name="NIK" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="divisi" class="form-label">Divisi</label>
                                        <input type="text" name="divisi" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" name="gender" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center float-right">
                                    <!--begin::Button-->
                                    <!-- <a href="#" class=""></a> -->
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-light-primary font-weight-bold ml-2">
                                    Add
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                            <!--begin::Toolbar-->
                                <!--end::Toolbar-->
                            <div id="resultContent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="form-pesan"></div>

<div class="container">
    <table class="table table-sm table-hover table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Divisi</th>
                <th scope="col">Gender</th>
                <th scope="col">Foto</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->NIK }}</td>
                    <td>{{ $item->divisi }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->foto }}</td>
                    <td>
                        @if ($item->status == 1)
                            <strong>Actived</strong>
                        @else
                            Deactived
                        @endif
                    </td>
                    <td>
                        {{-- <button onclick="edit('{{$item->id}}')" class="btn btn-success float-right mr-2"><i class="fa fa-pencil-alt"></i></button> --}}
                        <button onclick="edit('{{$item->id}}')" class="btn btn-success float-right mr-2"><i class="fa fa-pencil-alt"></i></button>
                        <a href="/staff/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-update" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="NIK" class="form-label">NIK</label>
                        <textarea type="number" id="NIK" name="NIK" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="divisi" class="form-label">Divisi</label>
                        <input type="text" id="divisi" name="divisi" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" id="gender" name="gender" class="form-control">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="isActive" name="isActive">
                    <label class="form-check-label" for="isActive">
                        Active
                    </label>
                </div>
        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function edit(id){
        var url = '/staff/show/'+id;
        var link = '/staff/update/'+id;
        $.ajax({
            url : url,
            method: 'get',
            success: function(response) {
                $('#form-update').prop('action', link);
                $('#nama').val(response.data['nama']);
                $('#NIK').val(response.data['NIK']);
                $('#divisi').val(response.data['divisi']);
                $('#gender').val(response.data['gender']);
                if(response.data['status']==1){
                    $("#isActive").prop("checked", true);
                } else {
                    $("#isActive").prop("checked", false);
                }
                $('#update-modal').modal('show');
            }
        });
    }
</script>
@endsection
