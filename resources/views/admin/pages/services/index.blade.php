@extends('layouts.main')


@section('section')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="col-md-12">

            <div class="card card-body mt-5">
                <div class="row mt-5">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search"
                                placeholder="Search Contacts...">
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    @include('admin.pages.services.create')
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <div class="action-btn show-btn" style="display: none">
                            <a href="javascript:void(0)"
                                class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                            </a>
                        </div>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#AddService"
                            class=" service btn btn-primary float-end btn-sm"><i
                                class="ti ti-users text-white me-1 fs-5"></i>Add Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap table-bordered data-table">
                        <thead class="header-item">
                            <tr>
                                <th>Id</th>
                                <th>Service Name</th>
                                <th>Service Image</th>
                                <th>Description</th>
                                <th>Highlight</th>
                                <th>Staus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                              <td class="table-column-pe-0">
                                  {{ $loop->index + 1 }}
                              </td>
                              <td>{{ $service->name }}</td> 
                              <td>
                                  @if($service->image)
                                       <img src="{{ asset('assets/images/service_image/' . $service->image) }}" alt="" width="70" height="70">
                                  @else
                                      No Document Available
                                  @endif
                              </td>
                              <td>{{ $service->description }}</td>
                              <td>{{ $service->highlight }}</td>
                              <td>
                                  <div class="success-badges changeStatus" data-table="documents" data-uuid="{{$service->id}}"
                                  data-message="inactive" @if($service->status=="active") data-value="inactive" @else data-value="active" @endif ><span class="legend-indicator bg-success">
                                  </span>{{ $service->status ?? 'Active' }}</div>
                              </td>
                                  
                                <td style="text-align:right;">
                                    <form id="edit{{ $service->id}}" action="{{ route('admin.services.destroy', $service->id) }}">
                                        <button type="button"
                                            onclick="editForm('{{ route('admin.services.edit', $service->id) }}', 'edit')"
                                            href="#" data-bs-toggle="modal" data-bs-target="#modaledit"
                                            class="btn btn-primary btn-sm">
                                            <i class="ti ti-pencil" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                        </button>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" id="delete{{ $service->id }}"
                                            onclick="deleteRow('edit{{ $service->id }}','delete{{ $service->id }}')"
                                            class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="modaledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content ">
        <div class="modal-header ">
            <h5 class="modal-title" id="staticBackdropLabel">Edit </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="edit">

        </div>

    </div>
</div>
</div>
@endsection