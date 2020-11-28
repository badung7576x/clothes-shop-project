@extends('layouts.master')
@section('content')
<div class="card card-primary">
    <h1 class="text-center card-header">PRODUCT LIST</h1>
    <div class="card-body">
        <div><a href="" class="btn btn-info pull-right" style="margin: 20px 20px;">ADD PRODUCT</a></div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Product</th>
                <th class="text-center">Price</th>
                <th class="text-center">Catelogy</th>
                <th class="text-center">Information</th>
                <th class="text-center">Created By</th>
                <th class="text-center">Updated By</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr>
                    <th class="text-center">{{ $key +($products->currentPage() - 1)* $products->perPage() + 1 }}</th>
                    <th class="text-center">{{ $product->name}}</th>
                    <th class="text-center">{{ $product->price}}</th>
                    <th class="text-center">{{ $product->category_id}}</th>
                    <th class="text-center">{{ $product->information}}</th>
                    <th class="text-center">{{ $product->created_by}}</th>
                    <th class="text-center">{{ $product->updated_by}}</th>
                    <th scope="col" class="d-flex justify-content-between">
                        <a href="#" class="btn btn-info btn-sm" role="button">More Information</a>
                        <a href="#" class="btn btn-warning btn-sm" role="button">Edit Product</a>
                        <button type="button" class="btn btn-danger delete-confirm-btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$product->id}}">
                            Delete Product
                        </button>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Are you sure you want to delete this product ? 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form id="delete-product" action="" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div>
        <span class="d-flex flex-row-reverse bd-highlight">link paginate</span> 
    </div>
</div> 
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        let oldIdTarget;
    $(".delete-confirm-btn").click(function() {
        let idTarget = $(this).data('id');   
        action = $("#delete-product").attr("action");
        if (action.search('id') != -1) {
            action = action.replace('id', idTarget);
        } else {
            action = action.replace(oldIdTarget, idTarget);
        }
        oldIdTarget = idTarget;
        $("#delete-product").attr({
            "action" : action,
        });
    });
    });
</script>
@endpush
