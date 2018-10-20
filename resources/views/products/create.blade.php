@extends('layouts.app')

@section('content')
<div>
    <section class="panel panel-default">

        <div class="panel-heading"> 
            <h3 class="panel-title">Product Upload</h3> 
        </div>

        <div class="panel-body">
            <form method="POST" action="/products" enctype="multipart/form-data" class="form-control form-horizontal" role="form">
            
                {{ csrf_field() }}

                {{-- TYPE --}}
                <div class="form-group">
                    <label for="type" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-9">
                        <select name="type" required>
                            <option value="hoodie">Hoodie</option>
                            <option value="hoodie">Tee</option>
                        </select>
                    </div>
                </div> <!-- form-group // -->


                {{-- TITLE --}}
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" placeholder="Front end title...">
                    </div>
                </div> <!-- form-group // -->


                {{-- TECHNICAL TITLE --}}
                <div class="form-group">
                    <label for="tec_title" class="col-sm-3 control-label">Technical Title</label>
                    <div class="col-sm-9">
                    <input type="text" name="tec_title" class="form-control" placeholder="Long title" required>
                    </div>
                </div> <!-- form-group // -->
                
                
                {{-- DESCRIPTION --}}
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                    <textarea name="description" class="form-control" placeholder="Type here"></textarea>
                    </div>
                </div> <!-- form-group // -->


                <div class="row">
                    {{-- SIZE --}}
                    <div class="form-group">
                        <label for="size" class="col-sm-3 control-label">Size</label>
                        <div class="col-sm-3">
                            <select name="size" required>
                                <option value="small">Small</option>
                                <option value="small">Medium</option>
                                <option value="small">Large</option>
                            </select>
                        </div>
                    </div> <!-- form-group // -->


                    {{-- COLOUR --}}
                    <div class="form-group">
                        <label for="colour" class="col-sm-3 control-label">Colour</label>
                        <div class="col-sm-3"> 
                            <select name="colour" required>
                                <option value="black">Black</option>
                                <option value="grey">Grey</option>
                                <option value="white">white</option>
                            </select>
                        </div>
                    </div> <!-- form-group // -->


                    {{-- SUPPLIER --}}
                    <div class="form-group">
                        <label for="supplier" class="col-sm-3 control-label">Supplier</label>
                        <div class="col-sm-3"> 
                            <select name="supplier">
                                <option value="lab6">Lab 6</option>
                                <option value="china">China</option>
                            </select>
                        </div>
                    </div> <!-- form-group // -->
                </div>


                    <div class="row">
                    {{-- MPN / CODE --}}
                    <div class="form-group">
                        <label for="mpn" class="col-sm-3 control-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mpn" placeholder="Model Part Number or Item code...">
                        </div>
                    </div> <!-- form-group // -->
                    
                    
                    {{-- BARCODE / EAN --}}
                    <div class="form-group">
                        <label for="barcode" class="col-sm-3 control-label">Barcode/EAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="barcode">
                        </div>
                    </div> <!-- form-group // -->


                    {{-- QUANTITY ON HAND / QOH --}}
                    <div class="form-group">
                        <label for="qoh" class="col-sm-3 control-label">Initial Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" step="1" class="form-control" name="qoh">
                        </div>
                    </div> <!-- form-group // -->
                </div>


                <div class="row">
                    {{-- TRADE/COST PRICE --}}
                    <div class="form-group">
                        <label for="trade" class="col-sm-3 control-label">Trade/Cost</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="trade">
                        </div>
                    </div> <!-- form-group // -->


                    {{-- SALE PRICE --}}
                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price" required>
                        </div>
                    </div> <!-- form-group // -->
                </div>


                {{-- IMAGE UPLOAD --}}
                <div class="col-sm-3">
                    <label for="cover_image" class="control-label small">Cover Image</label>
                    <input type="file" name="cover_image">
                </div>


                {{-- SUMBIT BUTTON --}}
                <hr>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div> <!-- form-group // -->

                @include('includes.messages')
                
            </form> <!-- Form Close -->
        </div><!-- panel-body // -->
    </section><!-- panel// -->
</div>
@endsection